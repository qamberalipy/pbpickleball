<?php
/*
Template Name: Join Our Team
*/

// Form Processing Logic (Adapted from Book a Lesson)
$jt_errors  = array();
$jt_success = false;

if ( isset( $_POST['jt_submit'] ) ) {

	if ( ! isset( $_POST['jt_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['jt_nonce'] ), 'pba_join_team' ) ) {
		$jt_errors[] = __( 'Security check failed. Please refresh the page and try again.', 'pba' );
	} elseif ( ! empty( $_POST['jt_hp'] ) ) {
		// Honeypot triggered — silently accept without emailing.
		$jt_success = true;
	} else {
		$first_name    = isset( $_POST['first_name'] ) ? sanitize_text_field( wp_unslash( $_POST['first_name'] ) ) : '';
		$last_name     = isset( $_POST['last_name'] ) ? sanitize_text_field( wp_unslash( $_POST['last_name'] ) ) : '';
		$email         = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
		$phone         = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
		$certification = isset( $_POST['certification'] ) ? sanitize_text_field( wp_unslash( $_POST['certification'] ) ) : '';
		$experience    = isset( $_POST['experience'] ) ? sanitize_text_field( wp_unslash( $_POST['experience'] ) ) : '';
		$availability  = isset( $_POST['availability'] ) ? sanitize_text_field( wp_unslash( $_POST['availability'] ) ) : '';
		$message       = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

		if ( '' === $first_name || '' === $last_name ) {
			$jt_errors[] = __( 'Please enter your full name.', 'pba' );
		}
		if ( '' === $email || ! is_email( $email ) ) {
			$jt_errors[] = __( 'Please enter a valid email address.', 'pba' );
		}
		if ( '' === $phone ) {
			$jt_errors[] = __( 'Please enter your phone number.', 'pba' );
		}
		if ( '' === $certification ) {
			$jt_errors[] = __( 'Please select your certification status.', 'pba' );
		}

		if ( empty( $jt_errors ) ) {
			$to      = 'support@gopbacademy.com';
			$subject = sprintf( __( 'New Instructor Application: %s %s', 'pba' ), $first_name, $last_name );
			$body    = "New Instructor Application Received:\n\n"
				. "Name: {$first_name} {$last_name}\n"
				. "Email: {$email}\n"
				. "Phone: {$phone}\n"
				. "Certification Status: {$certification}\n"
				. "Years of Experience: {$experience}\n"
				. "Availability: {$availability}\n\n"
				. "Why they want to join:\n{$message}\n";
			$headers = array(
				'Content-Type: text/plain; charset=UTF-8',
				'From: PB Academy <noreply@gopbacademy.com>',
				'Reply-To: ' . $first_name . ' <' . $email . '>',
			);

			$jt_success = (bool) wp_mail( $to, $subject, $body, $headers );

			if ( ! $jt_success ) {
				$jt_errors[] = __( 'Sorry, something went wrong sending your application. Please email us directly.', 'pba' );
			}
		}
	}
}

get_header();
?>

<style>
/* Alerts for Form Feedback */
.jt-alert {
	border-radius: 8px;
	padding: 14px 18px;
	margin-bottom: 20px;
	font-size: 14px;
	font-family: var(--font-body);
}
.jt-alert--success {
	background: rgba(46, 125, 50, 0.1);
	color: var(--green, #2e7d32);
	border: 1px solid rgba(46, 125, 50, 0.3);
}
.jt-alert--error {
	background: rgba(200, 40, 40, 0.08);
	color: #b3261e;
	border: 1px solid rgba(200, 40, 40, 0.25);
}
.jt-alert--error ul {
	margin: 0;
	padding-left: 18px;
}
.jt-hp {
	position: absolute !important;
	left: -9999px !important;
	width: 1px;
	height: 1px;
	opacity: 0;
}
</style>

<main class="instructors-page">

    <!-- ============================================================
         1. HERO SECTION (Upgraded Architecture)
         ============================================================ -->
    <section class="hero join-hero-full   instructors-hero-full  " data-mascot-msg="Turn your passion into a career. Join the PBA family!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/new-our-instructor-hero.webp" alt="Join PB Academy" aria-hidden="true" style="object-position: center top !important;">
        
        <div class="hero-container" style="padding-bottom: 10px !important;">
            <div class="hero-content anim-fade-up">
                <h1 class="join-hero-title anim-fade-up">
                    <span class="join-hero-sub">JOIN OUR</span><br>
                    <span class="join-hero-main highlight program-hero-main">TEAM</span>
                </h1>

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 0.3s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#jt-form" class="qj-link">Application Form</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         2. APPLICATION SPLIT SECTION (Info + Form)
         ============================================================ -->
    <section class="contact-split container anim-fade-up" id="jt-form">
        <div class="contact-split-grid">

            <!-- LEFT: Information -->
            <div class="ct-info-card">
                <div class="ct-card-header">
                    <h2 class="ct-section-title">What We're Looking For</h2>
                    <div class="ct-title-line"></div>
                    <p class="ct-card-intro">We pride ourselves on providing the best possible experience for our students. Here is what it takes to join the PB Pickleball Academy team:</p>
                </div>
                <ul class="ct-contact-list">
                    <li class="ct-contact-item">
                        <div class="ct-ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="ct-ci-text">
                            <span class="ct-ci-label">Passion &amp; Patience</span>
                            <span class="ct-ci-value">A genuine love for the game and the patience to guide beginners step-by-step.</span>
                        </div>
                    </li>
                    <li class="ct-contact-item">
                        <div class="ct-ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <div class="ct-ci-text">
                            <span class="ct-ci-label">Safety First</span>
                            <span class="ct-ci-value">Commitment to proper stretching, warm-ups, and ensuring player safety on the court.</span>
                        </div>
                    </li>
                    <li class="ct-contact-item">
                        <div class="ct-ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        </div>
                        <div class="ct-ci-text">
                            <span class="ct-ci-label">Reliability</span>
                            <span class="ct-ci-value">Punctual, professional, and excellent at communicating with both students and academy staff.</span>
                        </div>
                    </li>
                    <li class="ct-contact-item">
                        <div class="ct-ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <div class="ct-ci-text">
                            <span class="ct-ci-label">Certification</span>
                            <span class="ct-ci-value">PPR, IPTPA, or equivalent certification is highly preferred, but we will consider highly skilled players willing to undergo certification.</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- RIGHT: Application Form -->
            <div class="ct-form-card">
                <div class="ct-card-header">
                    <h2 class="ct-section-title">Instructor Application</h2>
                    <div class="ct-title-line"></div>
                </div>

                <?php if ( $jt_success ) : ?>
                    <!-- Success State & Download Trigger -->
                    <div class="jt-alert jt-alert--success" style="text-align: center; padding: 30px 20px;">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" style="margin-bottom: 15px;">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <h3 style="color: var(--navy); font-family: var(--font-heading); font-size: 1.4rem; margin-bottom: 10px;">Application Sent!</h3>
                        <p style="color: var(--gray-text); font-size: 0.95rem;">Thank you for applying. We are downloading the Instructor Manual to your device right now.</p>
                    </div>

                    <!-- Auto-Download JS -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var pointer = document.createElement('div');
                            pointer.className = 'dl-pointer-overlay';
                            pointer.innerHTML = '<div class="dl-pointer-box" style="border-color: var(--green);"><svg class="dl-arrow" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg><h3 style="color: var(--navy); margin: 0 0 5px; font-family: var(--font-heading); font-weight: 900; text-transform: uppercase;">Download Starting!</h3><p style="color: var(--gray-text); margin: 0; font-family: var(--font-body); font-size: 0.85rem;">Check the top right of your browser.</p></div>';
                            document.body.appendChild(pointer);

                            var link = document.createElement('a');
                            link.href = '<?php echo get_template_directory_uri(); ?>/media/Instructor-Manual.pdf';
                            link.download = 'Instructor-Guide.pdf';
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);

                            setTimeout(function() {
                                pointer.style.opacity = '0';
                                pointer.style.transition = 'opacity 0.5s ease';
                                setTimeout(function() { pointer.remove(); }, 500);
                            }, 6000);
                        });
                    </script>

                <?php elseif ( ! empty( $jt_errors ) ) : ?>
                    <div class="jt-alert jt-alert--error" role="alert">
                        <ul>
                            <?php foreach ( $jt_errors as $jt_error ) : ?>
                                <li><?php echo esc_html( $jt_error ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form class="ct-form" action="<?php echo esc_url( get_permalink() . '#jt-form' ); ?>" method="post" novalidate>
                    <?php wp_nonce_field( 'pba_join_team', 'jt_nonce' ); ?>
					<input type="text" name="jt_hp" value="" class="jt-hp" tabindex="-1" autocomplete="off" aria-hidden="true">

                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="jt-first-name">First Name <span aria-hidden="true">*</span></label>
                            <input type="text" id="jt-first-name" name="first_name" required value="<?php echo isset( $first_name ) ? esc_attr( $first_name ) : ''; ?>">
                        </div>
                        <div class="ct-form-group">
                            <label for="jt-last-name">Last Name <span aria-hidden="true">*</span></label>
                            <input type="text" id="jt-last-name" name="last_name" required value="<?php echo isset( $last_name ) ? esc_attr( $last_name ) : ''; ?>">
                        </div>
                    </div>
                    
                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="jt-email">Email Address <span aria-hidden="true">*</span></label>
                            <input type="email" id="jt-email" name="email" required value="<?php echo isset( $email ) ? esc_attr( $email ) : ''; ?>">
                        </div>
                        <div class="ct-form-group">
                            <label for="jt-phone">Phone Number <span aria-hidden="true">*</span></label>
                            <input type="tel" id="jt-phone" name="phone" required value="<?php echo isset( $phone ) ? esc_attr( $phone ) : ''; ?>">
                        </div>
                    </div>

                    <div class="ct-form-row">
                        <div class="ct-form-group ct-form-group--full">
                            <label for="jt-certification">Certification Status <span aria-hidden="true">*</span></label>
                            <select id="jt-certification" name="certification" required>
                                <option value="" disabled <?php selected( empty( $certification ) ); ?>>Select your status…</option>
                                <option value="PPR Certified">Yes, PPR Certified</option>
                                <option value="IPTPA Certified">Yes, IPTPA Certified</option>
                                <option value="Other Certification">Yes, Other Certification</option>
                                <option value="Not Certified, but willing">No, but willing to get certified</option>
                                <option value="Not Certified">No, not certified</option>
                            </select>
                        </div>
                    </div>

                    <div class="ct-form-row">
                        <div class="ct-form-group ct-form-group--full">
                            <label for="jt-experience">Years Playing / Coaching</label>
                            <select id="jt-experience" name="experience">
                                <option value="" disabled <?php selected( empty( $experience ) ); ?>>Select experience level…</option>
                                <option value="Less than 1 year">Less than 1 year</option>
                                <option value="1-3 years">1 - 3 years</option>
                                <option value="3-5 years">3 - 5 years</option>
                                <option value="5+ years">5+ years</option>
                            </select>
                        </div>
                    </div>

                    <div class="ct-form-row">
                        <div class="ct-form-group ct-form-group--full">
                            <label for="jt-availability">General Availability</label>
                            <input type="text" id="jt-availability" name="availability" placeholder="e.g. Weekday mornings, Weekends..." value="<?php echo isset( $availability ) ? esc_attr( $availability ) : ''; ?>">
                        </div>
                    </div>

                    <div class="ct-form-row">
                        <div class="ct-form-group ct-form-group--full">
                            <label for="jt-message">Why do you want to join PBA?</label>
                            <textarea id="jt-message" name="message" rows="4" placeholder="Tell us a little about your background and passion for the game..."><?php echo isset( $message ) ? esc_textarea( $message ) : ''; ?></textarea>
                        </div>
                    </div>

                    <button type="submit" name="jt_submit" value="1" class="btn btn-green ct-submit-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="flex-shrink:0;"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        Submit Application
                    </button>
                </form>
            </div>

        </div>
    </section>

</main>

<script>
// Simple Form Validation script
(function () {
	var form = document.querySelector( '.ct-form' );
	if ( ! form ) return;

	form.addEventListener( 'submit', function ( e ) {
		var required = form.querySelectorAll( '[required]' );
		var firstInvalid = null;

		required.forEach( function ( field ) {
			var valid = field.value.trim() !== '';
			if ( field.type === 'email' && valid ) {
				valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test( field.value.trim() );
			}
			field.setAttribute( 'aria-invalid', valid ? 'false' : 'true' );
			if ( ! valid ) {
				field.style.borderColor = '#b3261e';
				if ( ! firstInvalid ) firstInvalid = field;
			} else {
				field.style.borderColor = ''; // reset
			}
		} );

		if ( firstInvalid ) {
			e.preventDefault();
			firstInvalid.focus();
		}
	} );
})();
</script>

<?php get_footer(); ?>