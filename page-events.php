<?php
/**
 * Template Name: Events
 */

// ── Event Registration Form Processing ─────────────────────────────────────
$ev_errors  = array();
$ev_success = false;

if ( isset( $_POST['ev_submit'] ) ) {

	if ( ! isset( $_POST['ev_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['ev_nonce'] ), 'pba_event_form' ) ) {
		$ev_errors[] = __( 'Security check failed. Please refresh the page and try again.', 'pba' );
	} elseif ( ! empty( $_POST['ev_hp'] ) ) {
		// Honeypot triggered — silently accept.
		$ev_success = true;
	} else {
		$name       = isset( $_POST['ev_name'] )       ? sanitize_text_field( wp_unslash( $_POST['ev_name'] ) )       : '';
		$email      = isset( $_POST['ev_email'] )      ? sanitize_email( wp_unslash( $_POST['ev_email'] ) )           : '';
		$phone      = isset( $_POST['ev_phone'] )      ? sanitize_text_field( wp_unslash( $_POST['ev_phone'] ) )      : '';
		$event_name = isset( $_POST['ev_event_name'] ) ? sanitize_text_field( wp_unslash( $_POST['ev_event_name'] ) ) : '';

		if ( '' === $name )                        $ev_errors[] = __( 'Please enter your name.', 'pba' );
		if ( '' === $email || ! is_email( $email ) ) $ev_errors[] = __( 'Please enter a valid email address.', 'pba' );
		if ( '' === $phone )                       $ev_errors[] = __( 'Please enter your phone number.', 'pba' );
		if ( '' === $event_name )                  $ev_errors[] = __( 'Please select an event.', 'pba' );

		if ( empty( $ev_errors ) ) {
			$to      = 'support@gopbacademy.com';
			$subject = sprintf( __( 'New Event Registration: %s', 'pba' ), $event_name );
			$body    = "New Event Registration:\n\n"
				. "Event: {$event_name}\n"
				. "Name: {$name}\n"
				. "Email: {$email}\n"
				. "Phone: {$phone}\n";
			$headers = array(
				'Content-Type: text/plain; charset=UTF-8',
				'From: PB Academy <noreply@gopbacademy.com>',
				'Reply-To: ' . $name . ' <' . $email . '>',
			);

			$ev_success = (bool) wp_mail( $to, $subject, $body, $headers );

			// ── HubSpot CRM API Integration ──
			if ( $ev_success ) {
				$email_var = $email;
				$name_var  = $name;
				$phone_var = $phone;

				$hubspot_token = defined( 'PBA_HUBSPOT_TOKEN' ) ? PBA_HUBSPOT_TOKEN : '';
				if ( ! empty( $hubspot_token ) && ! empty( $email_var ) ) {
					$name_parts = explode( ' ', trim( $name_var ), 2 );
					$hs_first   = $name_parts[0];
					$hs_last    = isset( $name_parts[1] ) ? $name_parts[1] : '';

					$contact_properties = array(
						'email'          => $email_var,
						'firstname'      => $hs_first,
						'lifecyclestage' => 'lead',
					);
					if ( ! empty( $hs_last ) )  $contact_properties['lastname'] = $hs_last;
					if ( ! empty( $phone_var ) ) $contact_properties['phone']    = $phone_var;

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
			}

			if ( ! $ev_success ) {
				$ev_errors[] = __( 'Sorry, something went wrong sending your registration. Please email us directly.', 'pba' );
			}
		}
	}
}
// ─────────────────────────────────────────────────────────────────────────────

get_header(); ?>

<main class="events-page pba-bg-pattern">

    <!-- HERO -->
    <section class="hero retreat-hero-full" data-mascot-msg="See what's happening at PB Academy and join the fun!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/event-hero-banner.webp" alt="PB Academy Events" aria-hidden="true" style="object-fit: cover;">
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h2 class="hero-subtitle" style="color: var(--navy) !important; text-shadow: 0 2px 15px rgba(255, 255, 255, 0.8) !important; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 10px; letter-spacing: 2px;">COMING SOON</h2>
                
                <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1;">
                    <span style="color: var(--navy);text-shadow: 0 2px 15px rgb(255 255 255 / 70%)!important;">PB ACADEMY</span><br>
                    <span class="highlight program-hero-main" style="">EVENTS</span>
                </h1>
                <!-- <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; max-width: 800px; margin: 25px auto 0; line-height: 1.6; text-shadow: 0 2px 15px rgba(0,0,0,0.7);">Clinics, round robins, organized play and social gatherings — discover what's happening in the PB Academy community and reserve your spot.</p> -->

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#upcoming" class="qj-link">Upcoming Events</a>
                        <a href="#calendar" class="qj-link">Event Calendar</a>
                        <a href="#past-events" class="qj-link">Past Events</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section class="r-section r-upcoming bg-gray" id="upcoming" data-mascot-msg="Check out what's coming up and register before it sells out.">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">UPCOMING EVENTS</h2>

            <div class="r-grid r-grid--upcoming anim-fade-up">

                <?php
                $delay = 0; // For cascading animations

                // Query the Events CPT
                $events_query = new WP_Query(array(
                    'post_type'      => 'pba_event',
                    'posts_per_page' => -1,
                    'meta_key'       => 'date', // Assuming ACF Date picker is used for sorting
                    'orderby'        => 'meta_value',
                    'order'          => 'ASC'
                ));

                if ( $events_query->have_posts() ) :
                    while ( $events_query->have_posts() ) : $events_query->the_post(); 

                        // Get ACF Fields
                        $location = get_field('location');
                        $date = get_field('date');
                        $time = get_field('time');
                        $event_type = get_field('event_type');
                        $level = get_field('level');
                        $host = get_field('host');
                        $cost = get_field('cost');
                        $max_spots = get_field('max_spots');
                        $reg_link = get_field('registration_button_link');
                        
                        // Safeguard for Availability String
                        $raw_avail = get_field('availability');
                        $availability = is_array($raw_avail) ? (isset($raw_avail['label']) ? $raw_avail['label'] : $raw_avail[0]) : $raw_avail;

                        // Dynamic UI Logic based on Availability
                        $badge_bg_color = 'var(--green)'; // Default (Available)
                        $badge_text_color = 'var(--white)';
                        $avail_text_color = 'var(--green)';
                        $btn_class = 'btn-green';
                        $btn_text = 'REGISTER';
                        
                        if ($availability === 'Limited') {
                            $badge_bg_color = 'var(--accent-orange)';
                            $badge_text_color = 'var(--navy)';
                            $avail_text_color = 'var(--accent-orange)';
                        } elseif ($availability === 'Waitlist Only') {
                            $badge_bg_color = 'var(--navy)';
                            $badge_text_color = 'var(--white)';
                            $avail_text_color = 'var(--navy)';
                            $btn_class = 'btn-navy';
                            $btn_text = 'JOIN WAITLIST';
                        } elseif ($availability === 'Sold Out') {
                            $badge_bg_color = 'var(--navy)';
                            $badge_text_color = 'var(--white)';
                            $avail_text_color = 'var(--navy)';
                            $btn_class = 'btn-navy';
                            $btn_text = 'SOLD OUT';
                        }

                        // Get Featured Image
                        $bg_image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        if(empty($bg_image_url)) {
                            $bg_image_url = 'https://images.unsplash.com/photo-1747027694225-cbf12dd20826?q=80&w=800&auto=format&fit=crop'; // Fallback
                        }
                        
                        // Fallback for Reg Link
                        if(empty($reg_link)) {
                            $reg_link = '#';
                        }
                        ?>

                        <article class="r-card anim-fade-up" style="transition-delay: <?php echo esc_attr($delay); ?>ms;">
                            <div class="r-card__image" style="background-image: url('<?php echo esc_url($bg_image_url); ?>');">
                                <?php if($availability): ?>
                                    <span class="r-card__badge" style="background: <?php echo esc_attr($badge_bg_color); ?>; color: <?php echo esc_attr($badge_text_color); ?>;"><?php echo esc_html($availability); ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="r-card__content">
                                <h3 class="r-card__title" style="margin-bottom: 5px;"><?php the_title(); ?></h3>
                                
                                <?php if($location): ?>
                                <p class="r-card__location" style="margin-bottom: 20px;">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    <strong>Location:</strong> <?php echo esc_html($location); ?>
                                </p>
                                <?php endif; ?>
                                
                                <ul class="r-card-data-grid">
                                    <?php if($date): ?><li><strong>Date:</strong> <?php echo esc_html($date); ?></li><?php endif; ?>
                                    <?php if($time): ?><li><strong>Time:</strong> <?php echo esc_html($time); ?></li><?php endif; ?>
                                    <?php if($event_type): ?><li><strong>Type:</strong> <?php echo esc_html($event_type); ?></li><?php endif; ?>
                                    <?php if($level): ?><li><strong>Level:</strong> <?php echo esc_html($level); ?></li><?php endif; ?>
                                    <?php if($host): ?><li><strong>Host:</strong> <?php echo esc_html($host); ?></li><?php endif; ?>
                                    <?php if($max_spots): ?><li><strong>Max Spots:</strong> <?php echo esc_html($max_spots); ?></li><?php endif; ?>
                                    <?php if($cost): ?><li><strong>Cost:</strong> <?php echo esc_html($cost); ?></li><?php endif; ?>
                                    
                                    <?php if($availability): ?>
                                        <li><strong>Availability:</strong> <span style="color: <?php echo esc_attr($avail_text_color); ?>; font-weight: bold;"><?php echo esc_html($availability); ?></span></li>
                                    <?php endif; ?>
                                </ul>

                                <div class="r-card__actions" style="margin-top: auto;">
                                    <?php if ( ! empty( $reg_link ) && '#' !== $reg_link ) : ?>
                                        <a href="<?php echo esc_url($reg_link); ?>" class="btn <?php echo esc_attr($btn_class); ?>" style="width: 100%; padding: 16px 10px; font-size: 0.85rem; text-align: center; justify-content: center; display: flex;"><?php echo esc_html($btn_text); ?></a>
                                    <?php else : ?>
                                        <button type="button" class="btn <?php echo esc_attr($btn_class); ?>" data-modal-target="eventModal" data-event-title="<?php echo esc_attr( get_the_title() ); ?>" style="width: 100%; padding: 16px 10px; font-size: 0.85rem;"><?php echo esc_html($btn_text); ?></button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>

                        <?php
                        $delay += 150; 
                    endwhile;
                    wp_reset_postdata();
                else: ?>
                    <p>New events announcing soon!</p>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- EVENT CALENDAR -->
    <!-- <section class="r-section pattern-bg" id="calendar" data-mascot-msg="See everything happening this month at a glance.">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">EVENT CALENDAR</h2>
            <div class="anim-fade-up" style="max-width: 900px; margin: 0 auto; background: var(--white); border-radius: 16px; padding: 40px; box-shadow: 0 15px 40px rgba(11,32,70,0.08); text-align:center;">
                <p style="font-size: 1.1rem; color: var(--gray-text); margin-bottom: 25px;">A quick, easy-to-read view of everything coming up this month — no digging through pages required.</p>
                <ul style="list-style:none; text-align:left; max-width:560px; margin:0 auto; display:flex; flex-direction:column; gap:14px;">
                    <li style="display:flex; justify-content:space-between; border-bottom:1px solid var(--gray-light); padding-bottom:10px;"><strong>Sept 6</strong><span>Saturday Social Round Robin</span></li>
                    <li style="display:flex; justify-content:space-between; border-bottom:1px solid var(--gray-light); padding-bottom:10px;"><strong>Sept 13</strong><span>Beginner Skills Clinic</span></li>
                    <li style="display:flex; justify-content:space-between; border-bottom:1px solid var(--gray-light); padding-bottom:10px;"><strong>Sept 20</strong><span>Strategy & Tournament Prep</span></li>
                    <li style="display:flex; justify-content:space-between;"><strong>Sept 27</strong><span>Instructor-Observed Play</span></li>
                </ul>
            </div>
        </div>
    </section> -->

    <!-- PAST EVENTS -->
    <!-- <section class="r-section bg-gray" id="past-events" data-mascot-msg="See the fun our community has already had together.">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">PAST EVENTS</h2>
            <div class="r-grid r-grid--upcoming anim-fade-up">
                <div class="r-grid-img" style="background-image:url('https://images.unsplash.com/photo-1554068865-24cecd4e34b8?q=80&w=800&auto=format&fit=crop');">
                    <span>Summer Round Robin Series</span>
                </div>
                <div class="r-grid-img" style="background-image:url('https://images.unsplash.com/photo-1595435742656-5272d0b3fa82?q=80&w=800&auto=format&fit=crop');">
                    <span>Beginner Bootcamp Weekend</span>
                </div>
                <div class="r-grid-img" style="background-image:url('https://images.unsplash.com/photo-1600965962361-9035dbfd1c50?q=80&w=800&auto=format&fit=crop');">
                    <span>Community Social Mixer</span>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CTA -->
    <section class="r-section" style="padding: 70px 20px; text-align:center;">
        <div class="container anim-fade-up">
            <h2 style="font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.3rem); font-weight: 900; color: var(--navy); text-transform: uppercase; margin-bottom: 15px;">Not Sure Which Event Is Right For You?</h2>
            <p style="font-size: 1.05rem; color: var(--gray-text); max-width: 650px; margin: 0 auto 30px;">Contact PB Academy and we'll help you find the right event for your skill level and schedule.</p>
            <div style="display:flex; gap:15px; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline">CONTACT US</a>
                <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-green">REGISTER NOW</a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         EVENT REGISTRATION MODAL
         ============================================================ -->
    <div id="eventModal" class="pba-modal<?php echo $ev_success ? ' is-open' : ''; ?>" aria-hidden="<?php echo $ev_success ? 'false' : 'true'; ?>">
        <div class="pba-modal-overlay" data-ev-modal-close></div>
        <div class="pba-modal-content ct-premium-card" role="dialog" aria-modal="true" aria-labelledby="eventModalTitle">
            <button class="pba-modal-close" data-ev-modal-close aria-label="Close modal">&times;</button>

            <div style="text-align: center; margin-bottom: 30px;">
                <span style="display: inline-block; background: rgba(242, 169, 0, 0.15); color: var(--accent-orange); font-family: var(--font-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; padding: 6px 16px; border-radius: 50px; letter-spacing: 1px; margin-bottom: 12px;">Event Registration</span>
                <h2 id="eventModalTitle" style="font-family: var(--font-heading); font-size: clamp(1.5rem, 3vw, 2rem); font-weight: 900; color: var(--navy); text-transform: uppercase; margin-bottom: 8px;">REGISTER FOR AN EVENT</h2>
                <p id="ev-modal-event-label" style="font-size: 1rem; color: var(--gray-text); margin: 0;"></p>
            </div>

            <?php if ( $ev_success ) : ?>
                <div class="jt-alert jt-alert--success" role="status" style="text-align: center; padding: 30px 20px; margin-bottom: 20px;">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" style="margin-bottom: 12px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <h3 style="color: var(--navy); font-family: var(--font-heading); font-size: 1.3rem; margin-bottom: 8px;">Registration Sent!</h3>
                    <p style="color: var(--gray-text); font-size: 0.95rem; margin: 0;">Thank you! We'll confirm your spot shortly via email.</p>
                </div>
            <?php else : ?>

                <?php if ( ! empty( $ev_errors ) ) : ?>
                    <div class="jt-alert jt-alert--error" role="alert" style="margin-bottom: 20px;">
                        <ul>
                            <?php foreach ( $ev_errors as $ev_err ) : ?>
                                <li><?php echo esc_html( $ev_err ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form class="ct-form" id="ev-reg-form" action="<?php echo esc_url( get_permalink() ); ?>" method="post" novalidate>
                    <?php wp_nonce_field( 'pba_event_form', 'ev_nonce' ); ?>
                    <input type="text" name="ev_hp" value="" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0;" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" id="ev-event-name" name="ev_event_name" value="<?php echo isset( $event_name ) ? esc_attr( $event_name ) : ''; ?>">

                    <div class="ct-form-row">
                        <div class="ct-form-group ct-form-group--full">
                            <label for="ev-name">Full Name <span aria-hidden="true">*</span></label>
                            <input type="text" id="ev-name" name="ev_name" placeholder="Your full name" required value="<?php echo isset( $name ) && ! $ev_success ? esc_attr( $name ) : ''; ?>">
                        </div>
                    </div>
                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="ev-email">Email Address <span aria-hidden="true">*</span></label>
                            <input type="email" id="ev-email" name="ev_email" placeholder="you@example.com" required value="<?php echo isset( $email ) && ! $ev_success ? esc_attr( $email ) : ''; ?>">
                        </div>
                        <div class="ct-form-group">
                            <label for="ev-phone">Phone Number <span aria-hidden="true">*</span></label>
                            <input type="tel" id="ev-phone" name="ev_phone" placeholder="(561) 855-9500" required value="<?php echo isset( $phone ) && ! $ev_success ? esc_attr( $phone ) : ''; ?>">
                        </div>
                    </div>

                    <button type="submit" name="ev_submit" value="1" class="btn btn-green ct-submit-btn" style="width: 100%; justify-content: center; padding: 18px; font-size: 1rem; margin-top: 10px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="flex-shrink:0; margin-right: 8px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        REGISTER NOW
                    </button>
                </form>
            <?php endif; ?>
        </div>
    </div>

</main>

<script>
(function() {
    var modal       = document.getElementById('eventModal');
    var hiddenInput = document.getElementById('ev-event-name');
    var eventLabel  = document.getElementById('ev-modal-event-label');
    var form        = document.getElementById('ev-reg-form');

    if (!modal) return;

    // Open modal from any button with data-modal-target="eventModal"
    document.addEventListener('click', function(e) {
        var trigger = e.target.closest('[data-modal-target="eventModal"]');
        if (trigger) {
            e.preventDefault();
            var title = trigger.getAttribute('data-event-title') || '';
            if (hiddenInput) hiddenInput.value = title;
            if (eventLabel)  eventLabel.textContent = title ? 'Registering for: ' + title : '';
            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
    });

    // Close modal
    function closeModal() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    modal.querySelectorAll('[data-ev-modal-close]').forEach(function(el) {
        el.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('is-open')) closeModal();
    });

    // Client-side required-field validation
    if (form) {
        form.addEventListener('submit', function(e) {
            var required = form.querySelectorAll('[required]');
            var firstInvalid = null;

            required.forEach(function(field) {
                var valid = field.value.trim() !== '';
                if (field.type === 'email' && valid) {
                    valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value.trim());
                }
                field.setAttribute('aria-invalid', valid ? 'false' : 'true');
                if (!valid) {
                    field.style.borderColor = '#b3261e';
                    if (!firstInvalid) firstInvalid = field;
                } else {
                    field.style.borderColor = '';
                }
            });

            if (firstInvalid) {
                e.preventDefault();
                firstInvalid.focus();
            }
        });
    }
})();
</script>

<?php get_footer(); ?>
