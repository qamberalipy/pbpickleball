<?php
/**
 * Template Name: Beginner Manual Download
 */

$bm_errors  = array();
$bm_success = false;
$manual_url = get_template_directory_uri() . '/media/Beginner-Manual-lock.pdf';

if ( isset( $_POST['bm_submit'] ) ) {

    // 1. Security Check (Nonce)
    if ( ! isset( $_POST['bm_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['bm_nonce'] ), 'pba_manual_form' ) ) {
        $bm_errors[] = __( 'Security check failed. Please refresh the page and try again.', 'pba' );
    } 
    // 2. Spam Check (Honeypot)
    elseif ( ! empty( $_POST['bm_hp'] ) ) {
        $bm_success = true; 
    } 
    // 3. Process Valid Form
    else {
        $name  = isset( $_POST['dl_name'] ) ? sanitize_text_field( wp_unslash( $_POST['dl_name'] ) ) : '';
        $email = isset( $_POST['dl_email'] ) ? sanitize_email( wp_unslash( $_POST['dl_email'] ) ) : '';

        if ( '' === $name ) { $bm_errors[] = __( 'Please enter your first name.', 'pba' ); }
        if ( '' === $email || ! is_email( $email ) ) { $bm_errors[] = __( 'Please enter a valid email address.', 'pba' ); }

        if ( empty( $bm_errors ) ) {
            
            // Email 1: To the Admin (contact@gopbacademy.com)
            $admin_to      = 'support@gopbacademy.com';
            $admin_subject = sprintf( __( 'New Manual Download from %s', 'pba' ), $name );
            $admin_body    = "A new user has requested the Beginner Manual.\n\nName: {$name}\nEmail: {$email}\n\nThe file they received: {$manual_url}";
            wp_mail( $admin_to, $admin_subject, $admin_body );

            // Email 2: To the User (So they don't lose the link)
            $user_subject = "Your Free PB Academy Beginner Manual";
            $user_body    = "Hi {$name},\n\nThanks for requesting our Beginner Manual! If your download didn't start automatically, you can access the PDF directly using the link below:\n\n{$manual_url}\n\nSee you on the court!\n- PB Academy";
            $user_headers = array(
                'Content-Type: text/plain; charset=UTF-8', 
                'From: PB Academy <noreply@gopbacademy.com>'
            );
            
            // Attempt to send the email in the background
            wp_mail( $email, $user_subject, $user_body, $user_headers );

            // BYPASS FIX: Force success so the user ALWAYS gets the download popup, 
            // even if the host server drops the outgoing email.
            $bm_success = true;
        }
    }
}

get_header();
?>


<main >

    <!-- 1. HERO: manual intro + book mockup + "What You'll Learn" -->
    <section class="hero bm-hero-full" data-mascot-msg="Grab Volume 1 of our Beginner Training Manual to fast-track your court skills!">
        <div class="hero-video-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/media/beginner-manual-hero-banner.webp');"></div>
        <div class="hero-container">
            <div class="hero-content">
                <h1><span style="color: var(--navy);text-shadow: 0 2px 15px rgb(255 255 255 / 70%)!important;">BEGINNER</span><br>
               <span class="highlight" id="bm-span" >TRAINING MANUAL</span>
            </h1>
             

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#samples" class="qj-link">Sample Pages</a>
                        <a href="#download" class="qj-link">Get Your Free Copy</a>
                        <a href="#benefits" class="qj-link">Benefits</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. SAMPLE PAGES -->
    <section id="samples" class="bm-samples container anim-fade-up" data-mascot-msg="Take a sneak peek inside the manual. Everything you need to play with confidence.">
        <h2 class="lp-section-title">INSIDE VOLUME 1 – SAMPLE PAGES</h2>
        <div class="bm-samples-grid">
            <?php
            $bm_samples = array(
                array( 'title' => 'The Court', 'sub' => 'Get to know the court.', 'page' => 8, 'img' => 'thecourt.png' ),
                array( 'title' => 'The Grips', 'sub' => 'Choose the right grip.', 'page' => 16, 'img' => 'thegrips.jpeg' ),
                array( 'title' => 'Shot Selection', 'sub' => 'A smart way to take control.', 'page' => 32, 'img' => 'shotselection.png' ),
                array( 'title' => 'Moving to the Kitchen', 'sub' => 'After you serve…', 'page' => 38, 'img' => 'movingtowardthekitchen.png' ),
                array( 'title' => 'Stretching', 'sub' => 'Stay flexible, Play your Best', 'page' => 42, 'img' => 'thestreatching.jpeg' ),
                array( 'title' => 'Play Doubles!', 'sub' => 'Master the game of doubles.', 'page' => 71, 'img' => 'playdoubles.png' ),
            );
            foreach ( $bm_samples as $i => $s ) :
                ?>
                <div class="bm-sample-card anim-fade-up anim-stagger" style="--stagger-delay:<?php echo esc_attr( $i * 150 ); ?>ms;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/media/' . $s['img'] ); ?>" alt="<?php echo esc_attr( $s['title'] . ' sample page' ); ?>" loading="lazy">
                    <div class="bm-sample-body">
                        <h3><?php echo esc_html( $s['title'] ); ?></h3>
                        <p><?php echo esc_html( $s['sub'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 3. DOWNLOAD FORM SECTION -->
    <section id="download" class="bm-purchase-section container anim-fade-up" data-mascot-msg="Enter your email to get instant, free access to the complete guide.">
        <div class="bm-purchase-container">
            
            <!-- Left Side: Value Proposition -->
            <div class="bm-purchase-content">
                <span class="bm-purchase-eyebrow">Start Winning Today</span>
                <h2>Get Your Free Copy of Volume 1</h2>
                <p>Ready to level up your game? Fill out the form to instantly download the complete digital PDF of the PB Academy Beginner Manual.</p>
                
                <div class="bm-purchase-features">
                    <div class="bm-pf-item anim-fade-up anim-stagger" style="--stagger-delay:0ms;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <span><strong>Instant Access:</strong> Download the PDF directly to your device and read it anywhere.</span>
                    </div>
                    <div class="bm-pf-item anim-fade-up anim-stagger" style="--stagger-delay:150ms;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <span><strong>Print Ready:</strong> The manual is fully optimized so you can print it and take it to the court!</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Lead Capture Form -->
            <div class="bm-purchase-action anim-fade-up anim-stagger" style="--stagger-delay:300ms;">
                <div class="bm-action-card">
                    <h3>Download Your Free Manual</h3>
                    <p>Enter your details below to get instant access.</p>
                    
                    <div id="manual-download-form" style="scroll-margin-top: 100px;">
                        
                        <?php if ( $bm_success ) : ?>
                            <!-- Beautiful Inline Success State (Replaces the Form) -->
                            <div class="bm-success-state" style="text-align: center; padding: 20px 0;">
                                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2" style="margin-bottom: 15px;">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <h3 style="color: white; font-family: var(--font-heading); font-size: 1.4rem; margin-bottom: 10px;">Check Your Downloads!</h3>
                                <p style="color: rgba(255,255,255,0.85); font-size: 0.95rem;">Your manual is downloading now. We've also sent a backup copy to your email address.</p>
                            </div>

                            <!-- JS to append the fixed pointer to the BODY, escaping the CSS trap -->
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // 1. Create and inject the overlay directly into the body
                                    var pointer = document.createElement('div');
                                    pointer.className = 'dl-pointer-overlay';
                                    pointer.innerHTML = '<div class="dl-pointer-box"><svg class="dl-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg><h3 style="color: var(--navy); margin: 0 0 5px; font-family: var(--font-heading); font-weight: 900; text-transform: uppercase;">Download Starting!</h3><p style="color: var(--gray-text); margin: 0; font-family: var(--font-body); font-size: 0.85rem;">Check the top right of your browser.</p></div>';
                                    document.body.appendChild(pointer);

                                    // 2. Trigger the PDF download
                                    var link = document.createElement('a');
                                    link.href = '<?php echo $manual_url; ?>';
                                    link.download = 'Beginner-Manual-lock.pdf';
                                    document.body.appendChild(link);
                                    link.click();
                                    document.body.removeChild(link);

                                    // 3. Remove popup after 6 seconds
                                    setTimeout(function() {
                                        pointer.style.opacity = '0';
                                        pointer.style.transition = 'opacity 0.5s ease';
                                        setTimeout(function() { pointer.remove(); }, 500);
                                    }, 6000);
                                });
                            </script>

                        <?php else : ?>

                            <?php if ( ! empty( $bm_errors ) ) : ?>
                                <div class="jt-alert jt-alert--error" role="alert">
                                    <ul>
                                        <?php foreach ( $bm_errors as $bm_error ) : ?>
                                            <li><?php echo esc_html( $bm_error ); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <!-- Secure Form -->
                            <form class="bm-download-form" method="post" action="<?php echo esc_url( get_permalink() . '#manual-download-form' ); ?>" novalidate>
                                <?php wp_nonce_field( 'pba_manual_form', 'bm_nonce' ); ?>
                                <input type="text" name="bm_hp" value="" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0;" tabindex="-1" autocomplete="off" aria-hidden="true">

                                <div class="bm-form-group">
                                    <input type="text" id="dl-first-name" name="dl_name" placeholder="Your First Name" required value="<?php echo isset($name) ? esc_attr($name) : ''; ?>">
                                </div>
                                <div class="bm-form-group">
                                    <input type="email" id="dl-email" name="dl_email" placeholder="Your Email Address" required value="<?php echo isset($email) ? esc_attr($email) : ''; ?>">
                                </div>
                                <button type="submit" name="bm_submit" value="1" class="bm-btn-order" id="dl-btn">
                                    GET YOUR MANUAL NOW
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </button>
                            </form>

                        <?php endif; ?>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- 4. BOTTOM BANNER: Trust & Features -->
    <section id="benefits" class="bm-bottom anim-fade-up" data-mascot-msg="Real results for active adults. The more you learn, the more you enjoy the game!">
        <div class="container bm-bottom-container">
            
            <!-- Left Side: Instructor Quote -->
            <div class="bm-quote-block anim-fade-up">
                <blockquote class="bm-quote">
                    &ldquo;The more you learn, the more you enjoy the game.&rdquo;
                </blockquote>
                <cite>
                    <span class="bm-cite-name">&mdash; Instructor Charles</span>
                    <span class="bm-cite-title">Head Pro &amp; Author</span>
                </cite>
            </div>

            <!-- Right Side: Feature Grid -->
            <div class="bm-features-wrap">
                <div class="bm-feature-card anim-fade-up anim-stagger" style="--stagger-delay:0ms;">
                    <div class="bm-fc-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"></circle><path d="M4 21v-1a8 8 0 0116 0v1"></path></svg></div>
                    <div class="bm-fc-text">
                        <strong>Beginner Focused</strong>
                        <span>Designed specifically for new players.</span>
                    </div>
                </div>
                
                <div class="bm-feature-card anim-fade-up anim-stagger" style="--stagger-delay:150ms;">
                    <div class="bm-fc-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 00-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z"></path></svg></div>
                    <div class="bm-fc-text">
                        <strong>Active Adults</strong>
                        <span>Simple, clear, and easy to follow.</span>
                    </div>
                </div>

                <div class="bm-feature-card anim-fade-up anim-stagger" style="--stagger-delay:300ms;">
                    <div class="bm-fc-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
                    <div class="bm-fc-text">
                        <strong>Real Results</strong>
                        <span>Learn better. Play better. Have fun.</span>
                    </div>
                </div>

                <div class="bm-feature-card anim-fade-up anim-stagger" style="--stagger-delay:450ms;">
                    <div class="bm-fc-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 00-3-3.87"></path><path d="M16 3.13a4 4 0 010 7.75"></path></svg></div>
                    <div class="bm-fc-text">
                        <strong>Community</strong>
                        <span>Grow together on &amp; off the court.</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>



<?php get_footer(); ?>