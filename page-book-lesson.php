<?php
/*
Template Name: Book a Lesson
*/

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'pba-book-lesson', get_template_directory_uri() . '/book-lesson.css', array(), '1.0.0' );
} );

$bl_errors  = array();
$bl_success = false;

if ( isset( $_POST['bl_submit'] ) ) {

	if ( ! isset( $_POST['bl_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['bl_nonce'] ), 'pba_book_lesson' ) ) {
		$bl_errors[] = __( 'Security check failed. Please refresh the page and try again.', 'pba' );
	} elseif ( ! empty( $_POST['bl_hp'] ) ) {
		// Honeypot triggered — silently accept without emailing.
		$bl_success = true;
	} else {
		$name         = isset( $_POST['bl_name'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_name'] ) ) : '';
		$email        = isset( $_POST['bl_email'] ) ? sanitize_email( wp_unslash( $_POST['bl_email'] ) ) : '';
		$phone        = isset( $_POST['bl_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_phone'] ) ) : '';
		$lesson_type  = isset( $_POST['bl_lesson_type'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_lesson_type'] ) ) : '';
		$skill_level  = isset( $_POST['bl_skill_level'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_skill_level'] ) ) : '';
		$pref_date    = isset( $_POST['bl_date'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_date'] ) ) : '';
		$pref_time    = isset( $_POST['bl_time'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_time'] ) ) : '';
		$participants = isset( $_POST['bl_participants'] ) ? absint( $_POST['bl_participants'] ) : 1;
		$message      = isset( $_POST['bl_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['bl_message'] ) ) : '';

		if ( '' === $name ) {
			$bl_errors[] = __( 'Please enter your name.', 'pba' );
		}
		if ( '' === $email || ! is_email( $email ) ) {
			$bl_errors[] = __( 'Please enter a valid email address.', 'pba' );
		}
		if ( '' === $phone ) {
			$bl_errors[] = __( 'Please enter your phone number.', 'pba' );
		}
		if ( '' === $lesson_type ) {
			$bl_errors[] = __( 'Please select a lesson type.', 'pba' );
		}
		if ( '' === $skill_level ) {
			$bl_errors[] = __( 'Please select your skill level.', 'pba' );
		}
		if ( '' === $pref_date ) {
			$bl_errors[] = __( 'Please choose a preferred date.', 'pba' );
		}
		if ( $participants < 1 ) {
			$participants = 1;
		}

		if ( empty( $bl_errors ) ) {
			$to      = get_option( 'admin_email' );
			$subject = sprintf( __( 'New Lesson Booking Request from %s', 'pba' ), $name );
			$body    = "New lesson booking request:\n\n"
				. "Name: {$name}\n"
				. "Email: {$email}\n"
				. "Phone: {$phone}\n"
				. "Lesson Type: {$lesson_type}\n"
				. "Skill Level: {$skill_level}\n"
				. "Preferred Date: {$pref_date}\n"
				. "Preferred Time: {$pref_time}\n"
				. "Participants: {$participants}\n"
				. "Message: {$message}\n";
			$headers = array(
				'Content-Type: text/plain; charset=UTF-8',
				'Reply-To: ' . $name . ' <' . $email . '>',
			);

			$bl_success = (bool) wp_mail( $to, $subject, $body, $headers );

			if ( ! $bl_success ) {
				$bl_errors[] = __( 'Sorry, something went wrong sending your request. Please call us instead.', 'pba' );
			}
		}
	}
}

get_header();
?>

<main class="book-lesson-page">

	<!-- 1. Hero -->
	<section class="bl-hero anim-fade-up">
		<div class="bl-hero__bg" style="background-image:url('https://images.unsplash.com/photo-1554068865-24cecd4e34b8?q=80&w=1600&auto=format&fit=crop');"></div>
		<div class="bl-hero__overlay"></div>
		<div class="container bl-hero__container">
			<h2 class="bl-hero__eyebrow">BOOK YOUR SESSION</h2>
			<h1 class="bl-hero__title">Book a Pickleball Lesson</h1>
			<p class="bl-hero__intro">Private, semi-private, and group coaching for every skill level. Reserve your spot in minutes — we'll confirm your session personally.</p>
			<div class="bl-hero__strip">
				<div class="bl-strip__item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg><span>Certified Coaches</span></div>
				<div class="bl-strip__item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg><span>All Skill Levels</span></div>
				<div class="bl-strip__item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Flexible Scheduling</span></div>
			</div>
			<a href="#bl-form" class="btn btn-green bl-hero__cta">RESERVE MY SPOT</a>
		</div>
	</section>

	<!-- 2. Benefits -->
	<section class="bl-section bg-gray">
		<div class="container">
			<h2 class="bl-section-title anim-fade-up">WHY BOOK WITH US?</h2>
			<div class="bl-benefits-grid anim-fade-up">
				<div class="bl-benefit">
					<svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="1.8"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
					<h3>Expert Instruction</h3>
					<p>Learn from certified coaches focused on your progress and technique.</p>
				</div>
				<div class="bl-benefit">
					<svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
					<h3>Flexible Times</h3>
					<p>Morning, evening, and weekend slots to fit your schedule.</p>
				</div>
				<div class="bl-benefit">
					<svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="1.8"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					<h3>Any Group Size</h3>
					<p>Book solo, with a partner, or bring the whole group.</p>
				</div>
				<div class="bl-benefit">
					<svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path fill="none" stroke="var(--white,#fff)" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
					<h3>Fast Confirmation</h3>
					<p>We personally confirm every booking request quickly.</p>
				</div>
			</div>
		</div>
	</section>


	<!-- 4. Booking Form -->
	<section class="bl-section bg-gray" id="bl-form">
		<div class="container">
			<div class="bl-form-card anim-fade-up">
				<div class="bl-card-header">
					<h2 class="bl-section-title">Reserve Your Lesson</h2>
					<p>Fill out the form below and we'll confirm your session by phone or email.</p>
				</div>

				<?php if ( $bl_success ) : ?>
					<div class="bl-alert bl-alert--success" role="status">
						<?php esc_html_e( 'Thanks! Your request has been sent — we\'ll be in touch shortly to confirm.', 'pba' ); ?>
					</div>
				<?php elseif ( ! empty( $bl_errors ) ) : ?>
					<div class="bl-alert bl-alert--error" role="alert">
						<ul>
							<?php foreach ( $bl_errors as $bl_error ) : ?>
								<li><?php echo esc_html( $bl_error ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<form class="bl-form" method="post" action="<?php echo esc_url( get_permalink() . '#bl-form' ); ?>" novalidate>
					<?php wp_nonce_field( 'pba_book_lesson', 'bl_nonce' ); ?>
					<input type="text" name="bl_hp" value="" class="bl-hp" tabindex="-1" autocomplete="off" aria-hidden="true">

					<div class="bl-form-row">
						<div class="bl-form-group">
							<label for="bl-name">Full Name <span aria-hidden="true">*</span></label>
							<input type="text" id="bl-name" name="bl_name" autocomplete="name" required aria-required="true" value="<?php echo isset( $name ) ? esc_attr( $name ) : ''; ?>">
						</div>
						<div class="bl-form-group">
							<label for="bl-email">Email Address <span aria-hidden="true">*</span></label>
							<input type="email" id="bl-email" name="bl_email" autocomplete="email" required aria-required="true" value="<?php echo isset( $email ) ? esc_attr( $email ) : ''; ?>">
						</div>
					</div>

					<div class="bl-form-row">
						<div class="bl-form-group">
							<label for="bl-phone">Phone Number <span aria-hidden="true">*</span></label>
							<input type="tel" id="bl-phone" name="bl_phone" autocomplete="tel" required aria-required="true" value="<?php echo isset( $phone ) ? esc_attr( $phone ) : ''; ?>">
						</div>
						<div class="bl-form-group">
							<label for="bl-participants">Participants</label>
							<input type="number" id="bl-participants" name="bl_participants" min="1" max="12" value="<?php echo isset( $participants ) ? esc_attr( $participants ) : '1'; ?>">
						</div>
					</div>

					<div class="bl-form-row">
						<div class="bl-form-group">
							<label for="bl-lesson-type">Lesson Type <span aria-hidden="true">*</span></label>
							<select id="bl-lesson-type" name="bl_lesson_type" required aria-required="true">
								<option value="" disabled <?php selected( empty( $lesson_type ) ); ?>>Select a lesson type…</option>
								<option value="private">Private Lesson</option>
								<option value="semi-private">Semi-Private Lesson</option>
								<option value="group">Group Clinic</option>
								<option value="beginner">Beginner Clinic</option>
							</select>
						</div>
						<div class="bl-form-group">
							<label for="bl-skill-level">Skill Level <span aria-hidden="true">*</span></label>
							<select id="bl-skill-level" name="bl_skill_level" required aria-required="true">
								<option value="" disabled <?php selected( empty( $skill_level ) ); ?>>Select your level…</option>
								<option value="beginner">Beginner</option>
								<option value="intermediate">Intermediate</option>
								<option value="advanced">Advanced</option>
							</select>
						</div>
					</div>

					<div class="bl-form-row">
						<div class="bl-form-group">
							<label for="bl-date">Preferred Date <span aria-hidden="true">*</span></label>
							<input type="date" id="bl-date" name="bl_date" required aria-required="true" value="<?php echo isset( $pref_date ) ? esc_attr( $pref_date ) : ''; ?>">
						</div>
						<div class="bl-form-group">
							<label for="bl-time">Preferred Time</label>
							<input type="time" id="bl-time" name="bl_time" value="<?php echo isset( $pref_time ) ? esc_attr( $pref_time ) : ''; ?>">
						</div>
					</div>

					<div class="bl-form-row">
						<div class="bl-form-group bl-form-group--full">
							<label for="bl-message">Message</label>
							<textarea id="bl-message" name="bl_message" rows="4" placeholder="Tell us about your goals or anything we should know…"><?php echo isset( $message ) ? esc_textarea( $message ) : ''; ?></textarea>
						</div>
					</div>

					<button type="submit" name="bl_submit" value="1" class="btn btn-green bl-submit-btn">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
						Book My Lesson
					</button>
				</form>
			</div>
		</div>
	</section>

	<!-- 5. Testimonials -->
	<section class="bl-section">
		<div class="container">
			<h2 class="bl-section-title anim-fade-up">WHAT PLAYERS SAY</h2>
			<div class="bl-testimonial-grid anim-fade-up">

				<blockquote class="bl-testimonial">
					<div class="bl-testimonial__avatar-wrap">
						<img class="bl-testimonial__avatar" src="https://i.pravatar.cc/150?img=1" alt="Karen M." width="64" height="64" loading="lazy">
					</div>
					<div class="bl-testimonial__stars" aria-label="5 out of 5 stars">
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<p>&#8220;I went from never touching a paddle to playing confidently in a few weeks.&#8221;</p>
					<footer>
						<span class="bl-testimonial__name">Karen M.</span>
						<span class="bl-testimonial__location">Boynton Beach</span>
					</footer>
				</blockquote>

				<blockquote class="bl-testimonial">
					<div class="bl-testimonial__avatar-wrap">
						<img class="bl-testimonial__avatar" src="https://i.pravatar.cc/150?img=12" alt="Daniel R." width="64" height="64" loading="lazy">
					</div>
					<div class="bl-testimonial__stars" aria-label="5 out of 5 stars">
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<p>&#8220;Booking was easy and the semi-private session with my husband was exactly what we needed.&#8221;</p>
					<footer>
						<span class="bl-testimonial__name">Daniel R.</span>
						<span class="bl-testimonial__location">Delray Beach</span>
					</footer>
				</blockquote>

				<blockquote class="bl-testimonial">
					<div class="bl-testimonial__avatar-wrap">
						<img class="bl-testimonial__avatar" src="https://i.pravatar.cc/150?img=3" alt="Priya S." width="64" height="64" loading="lazy">
					</div>
					<div class="bl-testimonial__stars" aria-label="5 out of 5 stars">
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<p>&#8220;Great energy, real feedback, and a schedule that actually worked around my week.&#8221;</p>
					<footer>
						<span class="bl-testimonial__name">Priya S.</span>
						<span class="bl-testimonial__location">Boca Raton</span>
					</footer>
				</blockquote>

			</div>
		</div>
	</section>

	<!-- 6. FAQs -->
	<section class="bl-section bg-gray">
		<div class="container">
			<h2 class="bl-section-title anim-fade-up">FREQUENTLY ASKED QUESTIONS</h2>
			<div class="bl-faq anim-fade-up">
				<details class="bl-faq-item">
					<summary>Do I need my own paddle?</summary>
					<p>No — loaner paddles are available. Feel free to bring your own if you have one.</p>
				</details>
				<details class="bl-faq-item">
					<summary>What if I've never played before?</summary>
					<p>Perfect — our Beginner Clinic and Private Lessons are both designed to start from zero experience.</p>
				</details>
				<details class="bl-faq-item">
					<summary>Can I reschedule my lesson?</summary>
					<p>Yes, just contact us at least 24 hours in advance and we'll help you find a new time.</p>
				</details>
				<details class="bl-faq-item">
					<summary>How soon will I hear back after booking?</summary>
					<p>We confirm most requests within one business day by phone or email.</p>
				</details>
			</div>
		</div>
	</section>

	<!-- 7. Final CTA -->
	<section class="bl-global-cta anim-fade-up">
		<div class="bl-global-cta__bg" style="background-image:url('https://images.unsplash.com/photo-1544919982-9020cd05f0a7?q=80&w=1600&auto=format&fit=crop');"></div>
		<div class="bl-global-cta__overlay"></div>
		<div class="container bl-global-cta__content">
			<h2>READY TO PLAY?</h2>
			<p class="bl-global-cta__tagline">Reserve your lesson today — spots fill up fast.</p>
			<div class="bl-global-cta__actions">
				<a href="#bl-form" class="btn btn-green">BOOK A LESSON</a>
				<a href="tel:5618559500" class="btn btn-outline-white">CALL 561-855-9500</a>
			</div>
		</div>
	</section>

</main>

<script>
(function () {
	var form = document.querySelector( '.bl-form' );
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
			field.classList.toggle( 'bl-invalid', ! valid );
			if ( ! valid && ! firstInvalid ) firstInvalid = field;
		} );

		if ( firstInvalid ) {
			e.preventDefault();
			firstInvalid.focus();
		}
	} );

	form.querySelectorAll( '[required]' ).forEach( function ( field ) {
		field.addEventListener( 'blur', function () {
			var valid = field.value.trim() !== '';
			field.setAttribute( 'aria-invalid', valid ? 'false' : 'true' );
			field.classList.toggle( 'bl-invalid', ! valid );
		} );
	} );
})();
</script>

<?php get_footer(); ?>
