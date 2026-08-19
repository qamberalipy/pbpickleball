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
			$to      = 'contact@gopbacademy.com';
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
         1. HERO SECTION (Matches Our Instructors styling)
         ============================================================ -->
    <section class="hero instructors-hero-full">
        <div class="hero-container">
            <div class="hero-left anim-fade-right">
                <h2 class="hero-subtitle">Turn Your Passion Into a Career</h2>
                <h1>JOIN OUR <br><span class="highlight">TEAM</span></h1>
                <p>We're always looking for passionate instructors to help grow the game. If you love pickleball and enjoy helping others build their skills and confidence, we want to hear from you!</p>
                <div class="inst-hero-tagline">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <span>Inspire. Teach. Play.</span>
                </div>
            </div>
            
            <div class="hero-right anim-fade-left">
                <div class="hero-right-header">
                    <h3>WHY TEACH WITH PBA?</h3>
                </div>
                <div class="hero-right-body">
                    <ul class="hr-list">
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                            Great Community
                        </li>
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                            Flexible Schedule
                        </li>
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></div>
                            Ongoing Training
                        </li>
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
                            Make an Impact
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Quick-Jump Anchor Bar -->
            <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                <span class="qj-label">Click To View More:</span>
                <div class="qj-links">
                    <a href="#jt-form" class="qj-link">Application Form</a>
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
					<div class="jt-alert jt-alert--success" role="status">
						<?php esc_html_e( 'Thank you for applying! Your application has been sent to our team. We will be in touch soon.', 'pba' ); ?>
					</div>
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