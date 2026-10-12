<?php
/**
 * Template Name: Lessons & Programs
 *
 * @package PBPickleball
 */

// ── Form Processing Logic for Pricing Inquiry ──────────────────────────────
$inq_errors  = array();
$inq_success = false;

if ( isset( $_POST['inq_submit'] ) ) {
    if ( ! isset( $_POST['inq_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['inq_nonce'] ), 'pba_inquiry_form' ) ) {
        $inq_errors[] = __( 'Security check failed. Please refresh and try again.', 'pba' );
    } elseif ( ! empty( $_POST['inq_hp'] ) ) {
        $inq_success = true; // Honeypot triggered
    } else {
        $inq_name    = sanitize_text_field( wp_unslash( $_POST['inq_name'] ?? '' ) );
        $inq_email   = sanitize_email( wp_unslash( $_POST['inq_email'] ?? '' ) );
        $inq_phone   = sanitize_text_field( wp_unslash( $_POST['inq_phone'] ?? '' ) );
        $inq_program = sanitize_text_field( wp_unslash( $_POST['inq_program'] ?? '' ) );

        if ( '' === $inq_name ) { $inq_errors[] = __( 'Please enter your name.', 'pba' ); }
        if ( '' === $inq_email || ! is_email( $inq_email ) ) { $inq_errors[] = __( 'Please enter a valid email address.', 'pba' ); }

        if ( empty( $inq_errors ) ) {
            $to      = 'support@gopbacademy.com';
            $subject = sprintf( __( 'New Pricing Inquiry for: %s', 'pba' ), $inq_program );
            $body    = "New pricing inquiry submission:\n\n"
                . "Program: {$inq_program}\n"
                . "Name: {$inq_name}\n"
                . "Email: {$inq_email}\n"
                . "Phone: {$inq_phone}\n";
            $headers = array(
                'Content-Type: text/plain; charset=UTF-8',
                'From: PB Academy <noreply@gopbacademy.com>',
                'Reply-To: ' . $inq_name . ' <' . $inq_email . '>',
            );

            $inq_success = (bool) wp_mail( $to, $subject, $body, $headers );

            // ── HubSpot CRM API Integration ──
            if ( $inq_success ) {
                $hubspot_token = defined( 'PBA_HUBSPOT_TOKEN' ) ? PBA_HUBSPOT_TOKEN : '';
                if ( ! empty( $hubspot_token ) && ! empty( $inq_email ) ) {
                    $name_parts = explode( ' ', trim( $inq_name ), 2 );
                    $hs_first   = $name_parts[0];
                    $hs_last    = isset( $name_parts[1] ) ? $name_parts[1] : '';

                    $contact_properties = array(
                        'email'          => $inq_email,
                        'firstname'      => $hs_first,
                        'lifecyclestage' => 'lead',
                    );
                    if ( ! empty( $hs_last ) )  $contact_properties['lastname'] = $hs_last;
                    if ( ! empty( $inq_phone ) ) $contact_properties['phone']    = $inq_phone;

                    $hs_message  = "SOURCE: Pricing Inquiry Modal\n";
                    $hs_message .= "Interested In: {$inq_program}\n";
                    $contact_properties['message'] = $hs_message;

                    $payload = json_encode( array( 'properties' => $contact_properties ) );

                    $ch = curl_init( 'https://api.hubapi.com/crm/v3/objects/contacts' );
                    curl_setopt_array( $ch, array(
                        CURLOPT_POST           => true,
                        CURLOPT_POSTFIELDS     => $payload,
                        CURLOPT_HTTPHEADER     => array( 'Authorization: Bearer ' . $hubspot_token, 'Content-Type: application/json' ),
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT        => 5,
                    ) );
                    $hs_response  = curl_exec( $ch );
                    $hs_http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
                    curl_close( $ch );

                    if ( 409 === $hs_http_code && ! empty( $hs_response ) ) {
                        $hs_data = json_decode( $hs_response, true );
                        if ( ! empty( $hs_data['message'] ) && preg_match( '/Existing ID:\s*(\d+)/i', $hs_data['message'], $hs_matches ) ) {
                            $patch_ch = curl_init( 'https://api.hubapi.com/crm/v3/objects/contacts/' . $hs_matches[1] );
                            curl_setopt_array( $patch_ch, array(
                                CURLOPT_CUSTOMREQUEST  => 'PATCH',
                                CURLOPT_POSTFIELDS     => $payload,
                                CURLOPT_HTTPHEADER     => array( 'Authorization: Bearer ' . $hubspot_token, 'Content-Type: application/json' ),
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_TIMEOUT        => 5,
                            ) );
                            curl_exec( $patch_ch );
                            curl_close( $patch_ch );
                        }
                    }
                }
                $_POST = array(); // Clear form
            } else {
                $inq_errors[] = __( 'Sorry, something went wrong sending your inquiry.', 'pba' );
            }
        }
    }
}
// ─────────────────────────────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'pba-lessons-programs', get_template_directory_uri() . '/lessons-programs.css', array(), '1.0.0' );
} );

get_header();
?>

<main class="lp-page programs-page pba-bg-pattern">

    <!-- ============================================================
         PHASE 1: HERO & INTRO
         ============================================================ -->
    <section class="hero lp-hero-full" data-mascot-msg="Explore our programs and find the perfect fit for your game!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/programs-hero-section.webp" alt="PB Academy Programs and Lessons" aria-hidden="true">
        
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h1 style="font-size: clamp(3rem, 6vw, 4.5rem); line-height: 1.1;"><span style="color: var(--navy);">PB ACADEMY</span><br><span class="highlight program-hero-main">PROGRAMS</span></h1>

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#lessons" class="qj-link">Lessons</a>
                        <a href="#core-4" class="qj-link qj-link--highlight">PBA Core 4</a>
                        <a href="#clinics" class="qj-link">Clinics & Play</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="c4-promo-strip">
    <div class="container c4-promo-inner anim-fade-up">

        <div class="c4-promo-text">
            <span class="c4-badge">FEATURED PROGRAM</span>
            <h2>
                MASTER THE GAME WITH <span class="hl-pba">PBA</span> 
                <span class="core4-wrapper">
                    <span class="hl-core4" style="text-decoration: underline; text-decoration-color: #030d1f; text-decoration-thickness: 4px; text-underline-offset: 4px;">CORE 4</span>
                </span>
            </h2>
            <p>Our foundational 4-lesson beginner system. From zero experience to confident player in just 4 hours.</p>
        </div>
        <div class="c4-promo-actions">
            <button class="btn btn-navy" data-modal-target="core4Modal">VIEW MORE</button>
            <button class="btn btn-outline-white inq-btn" style="border-color: var(--navy); color: var(--navy);" data-program="PBA Core 4">ASK FOR PRICING</button>
        </div>
    </div>
</section>


    <!-- ============================================================
         PHASE 2: LESSONS CATEGORY & PROGRESSION BAR
         ============================================================ -->
    <section id="core-4" class="lp-core4-section">
        <div class="container lp-core4-container anim-fade-up">
            <div class="lp-core4-header">
                <h2>PBA CORE 4</h2>
                <h4>The Complete 4-Lesson Beginner Package</h4>
                <p>Core 4 is PB Academy's structured beginner program designed to take someone from learning the fundamentals to actually playing the game with greater confidence.</p>
            </div>
            
            <div class="lp-core4-grid">
                <div class="core4-lesson">
                    <span class="core4-num">1</span>
                    <div class="core4-text">
                        <h3>LESSON 1 — GET STARTED</h3>
                        <p>Introduction, safety, equipment, court basics and fundamental skills.</p>
                    </div>
                </div>
                <div class="core4-lesson">
                    <span class="core4-num">2</span>
                    <div class="core4-text">
                        <h3>LESSON 2 — PLAY THE GAME</h3>
                        <p>Serving, returning, scoring, side-out, ball in/out and basic rules.</p>
                    </div>
                </div>
                <div class="core4-lesson">
                    <span class="core4-num">3</span>
                    <div class="core4-text">
                        <h3>LESSON 3 — PLAY BETTER</h3>
                        <p>Developing shots, movement, positioning and better control.</p>
                    </div>
                </div>
                <div class="core4-lesson">
                    <span class="core4-num">4</span>
                    <div class="core4-text">
                        <h3>LESSON 4 — PLAY TO WIN</h3>
                        <p>Strategy, partner communication, point construction and supervised play.</p>
                    </div>
                </div>
            </div>
            
            <div class="hero-buttons" style="margin-top: 40px;">
                <button class="btn btn-green inq-btn" data-program="PBA Core 4">ASK FOR PRICING</button>
            </div>
        </div>
    </section>

    <section id="lessons" class="container" style="padding: 80px 20px;">
        <h2 class="lp-section-title">PROGRAM CATEGORY 1 — LESSONS</h2>
        
        <!-- 4-Column Grid for Lessons -->
        <div class="lp-lessons-grid anim-fade-up">
<?php
$lessons_query = new WP_Query(array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array('taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => 'lessons')
    ),
    'orderby'        => 'menu_order title',
    'order'          => 'ASC'
));

if ( $lessons_query->have_posts() ) :
    while ( $lessons_query->have_posts() ) : $lessons_query->the_post();
        global $product;

        // Unified Data Fetching
        $short_desc = $product->get_short_description();
        $duration   = $product->get_attribute('duration') ?: '60 Mins';
        $capacity   = $product->get_attribute('capacity') ?: 'Check Availability';

        $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
        if(empty($img_url)) {
            $img_url = get_template_directory_uri() . '/media/lesson-private.jpg';
        }
?>

        <div class="lp-card">
            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">

            <div class="lp-card-body" style="display: flex; flex-direction: column; height: 100%;">
                <h3 style="margin-bottom: 10px;"><?php echo get_the_title(); ?></h3>

                <!-- Unified Description -->
                <div class="lp-card-desc" style="flex-grow: 1; margin-bottom: 20px;">
                    <?php echo $short_desc ? wp_kses_post($short_desc) : 'Join our certified instructors to improve your skills and court IQ.'; ?>
                </div>

                <!-- Unified Meta Data -->
                <div class="lp-meta" style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 20px; border-top: 1px solid var(--gray-light); padding-top: 15px;">
                    <span style="color: var(--navy); font-weight: 600;">
                        <svg width="18" height="18" style="margin-right:5px; vertical-align:-3px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        Duration: <span style="color: var(--gray-text); font-weight: normal;"><?php echo esc_html($duration); ?></span>
                    </span>
                    <span style="color: var(--navy); font-weight: 600;">
                        <svg width="18" height="18" style="margin-right:5px; vertical-align:-3px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        Capacity: <span style="color: var(--gray-text); font-weight: normal;"><?php echo esc_html($capacity); ?></span>
                    </span>
                </div>

                <!-- Dynamic Inquiry Button -->
                <button class="btn btn-navy lp-card-btn inq-btn" style="width: 100%; margin-top: auto;" data-program="<?php echo esc_attr(get_the_title()); ?>">
                    ASK FOR PRICING
                </button>
            </div>
        </div>

<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
        </div>

        <!-- Player Development Progression Visual -->
        <div class="lp-progression-bar anim-fade-up">
            <h3 style="text-align:center; font-family:var(--font-heading); color:var(--navy); font-size:1.4rem; margin-bottom:20px; text-transform:uppercase;">PLAYER DEVELOPMENT PATH</h3>
            <div class="hero-progression" style="background:var(--navy); padding:24px 20px; border-radius:12px; box-shadow:0 10px 30px rgba(11,32,70,0.15);">
                <span class="btn btn-outline-white prog-badge" style="background:rgba(255,255,255,0.05);">BEGINNER</span>
                <svg class="prog-arrow" width="24" height="24" style="flex-shrink:0;" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                <span class="btn btn-outline-white prog-badge" style="background:rgba(255,255,255,0.05);">CORE 4</span>
                <svg class="prog-arrow" width="24" height="24" style="flex-shrink:0;" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                <span class="btn btn-outline-white prog-badge" style="background:rgba(255,255,255,0.05);">SKILLS & STRATEGY</span>
                <svg class="prog-arrow" width="24" height="24" style="flex-shrink:0;" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                <span class="btn btn-outline-white prog-badge" style="background:rgba(255,255,255,0.05);">ORGANIZED PLAY</span>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PHASE 4: CLINICS, PLAY & FINAL CTA
         ============================================================ -->
    <section id="clinics" class="container" style="padding: 80px 20px;">
        <h2 class="lp-section-title">PROGRAM CATEGORY 3 — CLINICS & PLAY</h2>
        
        <div class="lp-clinics-grid anim-fade-up">
<?php
$clinics_query = new WP_Query(array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array('taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => 'clinics')
    ),
    'orderby'        => 'menu_order title',
    'order'          => 'ASC'
));

if ( $clinics_query->have_posts() ) :
    while ( $clinics_query->have_posts() ) : $clinics_query->the_post();
        global $product;

        // Unified Data Fetching
        $short_desc = $product->get_short_description();
        $duration   = $product->get_attribute('duration') ?: '60 Mins';
        $capacity   = $product->get_attribute('capacity') ?: 'Check Availability';

        $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
        if(empty($img_url)) {
            $img_url = get_template_directory_uri() . '/media/clinic-skills.jpg';
        }
?>

        <div class="lp-card">
            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">

            <div class="lp-card-body" style="display: flex; flex-direction: column; height: 100%;">
                <h3 style="margin-bottom: 10px;"><?php echo get_the_title(); ?></h3>

                <!-- Unified Description -->
                <div class="lp-card-desc" style="flex-grow: 1; margin-bottom: 20px;">
                    <?php echo $short_desc ? wp_kses_post($short_desc) : 'Join our certified instructors to improve your skills and court IQ.'; ?>
                </div>

                <!-- Unified Meta Data -->
                <div class="lp-meta" style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 20px; border-top: 1px solid var(--gray-light); padding-top: 15px;">
                    <span style="color: var(--navy); font-weight: 600;">
                        <svg width="18" height="18" style="margin-right:5px; vertical-align:-3px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        Duration: <span style="color: var(--gray-text); font-weight: normal;"><?php echo esc_html($duration); ?></span>
                    </span>
                    <span style="color: var(--navy); font-weight: 600;">
                        <svg width="18" height="18" style="margin-right:5px; vertical-align:-3px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        Capacity: <span style="color: var(--gray-text); font-weight: normal;"><?php echo esc_html($capacity); ?></span>
                    </span>
                </div>

                <!-- Dynamic Inquiry Button -->
                <button class="btn btn-navy lp-card-btn inq-btn" style="width: 100%; margin-top: auto;" data-program="<?php echo esc_attr(get_the_title()); ?>">
                    ASK FOR PRICING
                </button>
            </div>
        </div>

<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
        </div>
    </section>

    <!-- ============================================================
         FINAL CTA: NOT SURE WHERE TO START?
         ============================================================ -->
    <section class="lp-final-cta-section anim-fade-up">
        <div class="container" style="text-align: center;">
            <h2 style="font-family: var(--font-heading); color: var(--navy); font-size: clamp(2rem, 4vw, 2.5rem); font-weight: 900; text-transform: uppercase; margin-bottom: 15px;">Not Sure Where to Start?</h2>
            <p style="font-size: 1.15rem; color: var(--gray-text); max-width: 600px; margin: 0 auto 30px; line-height: 1.6;">Answer a few simple questions or contact PB Academy and we'll help you choose the appropriate program.</p>
            <div class="hero-buttons">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-green">CONTACT US</a>
            </div>
        </div>
    </section>

</main>

<!-- ============================================================
     GLOBAL PRICING INQUIRY MODAL
     ============================================================ -->
<div id="inquiryModal" class="pba-modal <?php echo ($inq_success || !empty($inq_errors)) ? 'is-open' : ''; ?>" aria-hidden="true">
    <div class="pba-modal-overlay" data-modal-close></div>
    <div class="pba-modal-content" role="dialog" aria-modal="true" style="max-width: 500px; padding: 40px; text-align: left;">
        <button class="pba-modal-close" data-modal-close aria-label="Close modal">&times;</button>
        <div class="pba-modal-body">
            <h3 style="font-family: var(--font-heading); color: var(--navy); font-size: 1.5rem; font-weight: 900; text-transform: uppercase; margin-bottom: 10px;">Ask For Pricing</h3>
            <p style="color: var(--gray-text); font-size: 0.95rem; margin-bottom: 25px; line-height: 1.5;">Enter your details below and our team will send you pricing and availability for <strong id="inq-program-display" style="color: var(--green);">this program</strong>.</p>
            
            <?php if ( $inq_success ) : ?>
                <div style="background: rgba(46, 125, 50, 0.1); color: var(--green); border: 1px solid rgba(46, 125, 50, 0.3); padding: 15px; border-radius: 8px; margin-bottom: 20px; font-size: 0.9rem; font-weight: 600;">
                    Thank you! Your inquiry has been sent successfully. We will be in touch shortly.
                </div>
            <?php elseif ( ! empty( $inq_errors ) ) : ?>
                <div style="background: rgba(200, 40, 40, 0.08); color: #b3261e; border: 1px solid rgba(200, 40, 40, 0.25); padding: 15px; border-radius: 8px; margin-bottom: 20px; font-size: 0.9rem;">
                    <ul style="margin:0; padding-left: 20px;">
                        <?php foreach ( $inq_errors as $err ) echo "<li>" . esc_html($err) . "</li>"; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo esc_url( get_permalink() ); ?>" method="post" style="display: flex; flex-direction: column; gap: 15px;">
                <?php wp_nonce_field( 'pba_inquiry_form', 'inq_nonce' ); ?>
                <input type="hidden" name="inq_hp" value="">
                <!-- This hidden field stores the program name based on which button they clicked -->
                <input type="hidden" name="inq_program" id="inq-program-input" value="<?php echo isset($_POST['inq_program']) ? esc_attr($_POST['inq_program']) : ''; ?>">
                
                <div>
                    <label style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: var(--navy);">Name *</label>
                    <input type="text" name="inq_name" required style="width: 100%; padding: 12px 15px; border: 1.5px solid var(--gray-light); border-radius: 8px; font-family: var(--font-body); margin-top: 5px;" value="<?php echo esc_attr($_POST['inq_name'] ?? ''); ?>">
                </div>
                <div>
                    <label style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: var(--navy);">Email *</label>
                    <input type="email" name="inq_email" required style="width: 100%; padding: 12px 15px; border: 1.5px solid var(--gray-light); border-radius: 8px; font-family: var(--font-body); margin-top: 5px;" value="<?php echo esc_attr($_POST['inq_email'] ?? ''); ?>">
                </div>
                <div>
                    <label style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: var(--navy);">Phone Number</label>
                    <input type="tel" name="inq_phone" style="width: 100%; padding: 12px 15px; border: 1.5px solid var(--gray-light); border-radius: 8px; font-family: var(--font-body); margin-top: 5px;" value="<?php echo esc_attr($_POST['inq_phone'] ?? ''); ?>">
                </div>
                <button type="submit" name="inq_submit" value="1" class="btn btn-green" style="width: 100%; padding: 16px; margin-top: 10px; border-radius: 8px; font-size: 0.95rem;">REQUEST PRICING</button>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. General Modal Close Logic
    var closeBtns = document.querySelectorAll('[data-modal-close]');
    closeBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var modal = this.closest('.pba-modal');
            if(modal) {
                modal.classList.remove('is-open');
                document.body.style.overflow = '';
            }
        });
    });

    // 2. Core 4 Image Flyer Modal
    var c4Btns = document.querySelectorAll('[data-modal-target="core4Modal"]');
    var c4Modal = document.getElementById('core4Modal');
    c4Btns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if(c4Modal) {
                c4Modal.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    // 3. New Pricing Inquiry Modal Logic
    var inqBtns = document.querySelectorAll('.inq-btn');
    var inqModal = document.getElementById('inquiryModal');
    var inqDisplay = document.getElementById('inq-program-display');
    var inqInput = document.getElementById('inq-program-input');
    
    inqBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Extract the program name stored directly on the button HTML
            var progName = this.getAttribute('data-program');
            
            // Inject the name into the modal text and hidden form input
            if(progName) {
                if(inqDisplay) inqDisplay.textContent = progName;
                if(inqInput) inqInput.value = progName;
            }
            
            // Open Modal
            if(inqModal) {
                inqModal.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            }
        });
    });
});
</script>

<?php get_footer(); ?>