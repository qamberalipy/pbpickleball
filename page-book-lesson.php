<?php
/*
Template Name: Book a Lesson
*/

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'pba-book-lesson', get_template_directory_uri() . '/book-lesson.css', array(), '1.0.0' );
} );

$bl_errors  = array();$bl_success = false;

if ( isset( $_POST['bl_submit'] ) ) {

	if ( ! isset( $_POST['bl_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['bl_nonce'] ), 'pba_book_lesson' ) ) {$bl_errors[] = __( 'Security check failed. Please refresh the page and try again.', 'pba' );
	} elseif ( ! empty( $_POST['bl_hp'] ) ) {$bl_success = true;
	} else {
		$name         = isset($_POST['bl_name'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_name'] ) ) : '';$email        = isset( $_POST['bl_email'] ) ? sanitize_email( wp_unslash( $_POST['bl_email'] ) ) : '';
		$phone        = isset($_POST['bl_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_phone'] ) ) : '';$lesson_type  = isset( $_POST['bl_lesson_type'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_lesson_type'] ) ) : '';
		$instructor   = isset($_POST['bl_instructor'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_instructor'] ) ) : '';$location     = isset( $_POST['bl_location'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_location'] ) ) : '';
		$skill_level  = isset($_POST['bl_skill_level'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_skill_level'] ) ) : '';$pref_date    = isset( $_POST['bl_date'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_date'] ) ) : '';
		$pref_time    = isset($_POST['bl_time'] ) ? sanitize_text_field( wp_unslash( $_POST['bl_time'] ) ) : '';$participants = isset( $_POST['bl_participants'] ) ? absint( $_POST['bl_participants'] ) : 1;
		$message      = isset( $_POST['bl_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['bl_message'] ) ) : '';

		if ( '' === $name )$bl_errors[] = __( 'Please enter your name.', 'pba' );
		if ( '' === $email || ! is_email( $email ) )$bl_errors[] = __( 'Please enter a valid email address.', 'pba' );
		if ( '' === $phone )$bl_errors[] = __( 'Please enter your phone number.', 'pba' );
		if ( '' === $lesson_type )$bl_errors[] = __( 'Please select a program or lesson type.', 'pba' );
		if ( '' === $instructor )$bl_errors[] = __( 'Please select an instructor preference.', 'pba' );
		if ( '' === $location )$bl_errors[] = __( 'Please select a location.', 'pba' );
		if ( '' === $skill_level )$bl_errors[] = __( 'Please select your skill level.', 'pba' );
		if ( '' === $pref_date )$bl_errors[] = __( 'Please choose a preferred date.', 'pba' );
		if ( $participants < 1 )$participants = 1;

		if ( empty( $bl_errors ) ) {$to      = 'contact@gopbacademy.com';
			$subject = sprintf( __( 'New Registration Request from %s', 'pba' ), $name );$body    = "New registration request details:\n\n"
				. "Name: {$name}\n"
				. "Email: {$email}\n"
				. "Phone: {$phone}\n"
				. "Program: {$lesson_type}\n"
				. "Instructor: {$instructor}\n"
				. "Location: {$location}\n"
				. "Skill Level: {$skill_level}\n"
				. "Preferred Date: {$pref_date}\n"
				. "Preferred Time: {$pref_time}\n"
				. "Participants: {$participants}\n"
				. "Message: {$message}\n";
			$headers = array(
				'Content-Type: text/plain; charset=UTF-8',
				'From: PB Academy <noreply@gopbacademy.com>',
				'Reply-To: ' . $name . ' <' .$email . '>',
			);

			$bl_success = (bool) wp_mail( $to,$subject, $body,$headers );

			if ( ! $bl_success ) {$bl_errors[] = __( 'Sorry, something went wrong sending your request. Please call us instead.', 'pba' );
			}
		}
	}
}

get_header();
?>

<main class="book-lesson-page">

	<!-- 1. Hero -->
	<section class="bl-hero anim-fade-up">
		<div class="bl-hero__bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/media/book-a-lesson.webp');"></div>
		<div class="bl-hero__overlay"></div>
		<div class="container bl-hero__container">
			<h2 class="bl-hero__eyebrow">REGISTER FOR YOUR SESSION</h2>
			<h1 class="bl-hero__title">Register for a Pickleball Lesson</h1>
			<p class="bl-hero__intro">Private, semi-private, and group coaching for every skill level. Reserve your spot in minutes — we'll confirm your session personally.</p>
			<div class="bl-hero__strip">
				<div class="bl-strip__item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg><span>Certified Coaches</span></div>
				<div class="bl-strip__item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg><span>All Skill Levels</span></div>
				<div class="bl-strip__item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green,#2e7d32)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Flexible Scheduling</span></div>
			</div>
			<a href="#bl-form" class="btn btn-green bl-hero__cta">RESERVE MY SPOT</a>

			<!-- Quick-Jump Anchor Bar -->
			<div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
			    <span class="qj-label">Click To View More:</span>
			    <div class="qj-links">
			        <a href="#benefits" class="qj-link">Benefits</a>
			        <a href="#bl-form" class="qj-link">Register Now</a>
			        <a href="#testimonials" class="qj-link">Testimonials</a>
			        <a href="#faqs" class="qj-link">FAQs</a>
			    </div>
			</div>
		</div>
	</section>

	<!-- 2. Benefits -->
	<section id="benefits" class="bl-section bl-benefits-section" data-mascot-msg="We specialize in safe, friendly, and patient instruction for active adults!">
		<div class="container">
			<h2 class="bl-section-title anim-fade-up is-visible" style="color: var(--white);">WHY REGISTER WITH US?</h2>
			<div class="bl-benefits-grid anim-fade-up is-visible">
				<div class="bl-benefit">
					<div class="bl-benefit-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z"></path></svg>
					</div>
					<h3>Expert Instruction</h3>
					<p>Learn from certified coaches focused on your progress and technique.</p>
				</div>
				<div class="bl-benefit">
					<div class="bl-benefit-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
					</div>
					<h3>Flexible Times</h3>
					<p>Morning, evening, and weekend slots to fit your schedule.</p>
				</div>
				<div class="bl-benefit">
					<div class="bl-benefit-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
					</div>
					<h3>Any Group Size</h3>
					<p>Register solo, with a partner, or bring the whole group.</p>
				</div>
				<div class="bl-benefit">
					<div class="bl-benefit-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path fill="none" stroke="currentColor" stroke-width="2" d="M9 12l2 2 4-4"></path></svg>
					</div>
					<h3>Fast Registration Confirmation</h3>
					<p>We personally confirm every registration request quickly.</p>
				</div>
			</div>
		</div>
	</section>


	<!-- 4. Booking Form -->
	<section class="bl-section bl-form-section" id="bl-form">
		<div class="container">
			<div class="bl-form-card anim-fade-up is-visible">
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
							<label for="bl-participants">Number of Participants</label>
							<input type="number" id="bl-participants" name="bl_participants" min="1" max="12" value="<?php echo isset( $participants ) ? esc_attr( $participants ) : '1'; ?>">
						</div>
					</div>

					<div class="bl-form-row">
						<div class="bl-form-group">
							<label for="bl-lesson-type">Program or Lesson <span aria-hidden="true">*</span></label>
							<select id="bl-lesson-type" name="bl_lesson_type" required aria-required="true">
								<option value="" disabled selected>Select a program…</option>
								<optgroup label="Lessons">
									<option value="Private Lessons">Private Lessons</option>
									<option value="Semi-Private Lessons">Semi-Private Lessons</option>
									<option value="Small Group Lessons">Small Group Lessons</option>
									<option value="Group Lessons">Group Lessons</option>
								</optgroup>
								<optgroup label="PBA Core 4">
									<option value="PBA Core 4">PBA Core 4 (Beginner Package)</option>
								</optgroup>
								<optgroup label="Clinics & Play">
									<option value="Skills Clinics">Skills Clinics</option>
									<option value="Strategy Clinics">Strategy Clinics</option>
									<option value="Instructor-Observed Practice & Play">Instructor-Observed Practice & Play</option>
									<option value="Tournament Preparation">Tournament Preparation</option>
									<option value="Round Robins">Round Robins</option>
									<option value="Organized Play">Organized Play</option>
									<option value="Special Events">Special Events</option>
								</optgroup>
								<optgroup label="Specialty">
									<option value="Retreats">Retreats</option>
								</optgroup>
							</select>
						</div>
						<div class="bl-form-group">
							<label for="bl-skill-level">Player Level <span aria-hidden="true">*</span></label>
							<select id="bl-skill-level" name="bl_skill_level" required aria-required="true">
								<option value="" disabled selected>Select your level…</option>
								<option value="Beginner (Never Played)">Beginner (Never Played)</option>
								<option value="Novice (Played a Few Times)">Novice (Played a Few Times)</option>
								<option value="Intermediate (2.5 - 3.5)">Intermediate (2.5 - 3.5)</option>
								<option value="Advanced (4.0+)">Advanced (4.0+)</option>
							</select>
						</div>
					</div>

					<div class="bl-form-row">
						<div class="bl-form-group">
							<label for="bl-instructor">Instructor <span aria-hidden="true">*</span></label>
							<select id="bl-instructor" name="bl_instructor" required aria-required="true">
								<option value="First Available Instructor" selected>First Available Instructor</option>
								<option value="Charles Azoulay">Charles Azoulay</option>
								<option value="Sarah Jenkins">Sarah Jenkins</option>
								<option value="David Chen">David Chen</option>
								<option value="Jessica Lee">Jessica Lee</option>
								<option value="Michael Thompson">Michael Thompson</option>
								<option value="Elena Rodriguez">Elena Rodriguez</option>
								<option value="Marcus Johnson">Marcus Johnson</option>
							</select>
						</div>
						<div class="bl-form-group">
							<label for="bl-location">Location <span aria-hidden="true">*</span></label>
							<select id="bl-location" name="bl_location" required aria-required="true">
								<option value="" disabled selected>Select a location…</option>
								<option value="Boynton Beach">Boynton Beach</option>
								<option value="Boca Raton">Boca Raton</option>
								<option value="Delray Beach">Delray Beach</option>
								<option value="Wellington">Wellington</option>
								<option value="Lake Worth">Lake Worth</option>
								<option value="Jupiter">Jupiter</option>
								<option value="Palm Beach Gardens">Palm Beach Gardens</option>
							</select>
						</div>
					</div>

					<div class="bl-form-row">
						<div class="bl-form-group">
							<label for="bl-date">Date <span aria-hidden="true">*</span></label>
							<input type="date" id="bl-date" name="bl_date" required aria-required="true" value="<?php echo isset( $pref_date ) ? esc_attr( $pref_date ) : ''; ?>">
						</div>
						<div class="bl-form-group">
							<label for="bl-time">Available Time</label>
							<input type="time" id="bl-time" name="bl_time" value="<?php echo isset( $pref_time ) ? esc_attr( $pref_time ) : ''; ?>">
						</div>
					</div>

					<div class="bl-form-row">
						<div class="bl-form-group bl-form-group--full">
							<label for="bl-message">Comments or Requests</label>
							<textarea id="bl-message" name="bl_message" rows="3" placeholder="Tell us about your goals or anything we should know before the session…"><?php echo isset( $message ) ? esc_textarea( $message ) : ''; ?></textarea>
						</div>
					</div>

					<!-- Real-Time Reservation Summary -->
					<div id="booking-summary" class="bl-summary-box" style="display: none;">
						<h3 class="bl-summary-title">Reservation Summary</h3>
						<ul class="bl-summary-list">
							<li><strong>Program:</strong> <span id="sum-program">—</span></li>
							<li><strong>Instructor:</strong> <span id="sum-instructor">First Available Instructor</span></li>
							<li><strong>Location:</strong> <span id="sum-location">—</span></li>
							<li><strong>Date:</strong> <span id="sum-date">—</span></li>
							<li><strong>Time:</strong> <span id="sum-time">—</span></li>
							<li><strong>Participants:</strong> <span id="sum-participants">1</span></li>
						</ul>
					</div>

					<button type="submit" name="bl_submit" value="1" class="btn btn-green bl-submit-btn">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
						Complete Registration
					</button>
				</form>
			</div>
		</div>
	</section>

	<!-- 5. Testimonials -->
	<section id="testimonials" class="bl-section">
		<div class="container">
			<h2 class="bl-section-title anim-fade-up">WHAT PLAYERS SAY</h2>
			<div class="bl-testimonial-grid anim-fade-up">

				<blockquote class="bl-testimonial">
					<div class="bl-testimonial__avatar-wrap">
						<img class="bl-testimonial__avatar" src="<?php echo get_template_directory_uri(); ?>/media/t3.jpg" alt="Danita M." width="64" height="64" loading="lazy">
					</div>
					<div class="bl-testimonial__stars" aria-label="5 out of 5 stars">
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<p>&#8220;Coach Charles has a gift for making pickleball easy to understand. His first lesson was simple: 'Keep your eyes on the ball.' That one tip alone improved my game immediately. His classes are fun, encouraging, and stress-free.&#8221;</p>
					<footer>
						<span class="bl-testimonial__name">Danita M.</span>
					</footer>
				</blockquote>

				<blockquote class="bl-testimonial">
					<div class="bl-testimonial__avatar-wrap">
						<img class="bl-testimonial__avatar" src="<?php echo get_template_directory_uri(); ?>/media/t1.jpg" alt="Harvey M." width="64" height="64" loading="lazy">
					</div>
					<div class="bl-testimonial__stars" aria-label="5 out of 5 stars">
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<p>&#8220;I was nervous about learning pickleball, but Coach Charles made me feel comfortable from day one. He breaks the game down into simple steps and focuses on building confidence. I now look forward to playing every week.&#8221;</p>
					<footer>
						<span class="bl-testimonial__name">Harvey M.</span>
					</footer>
				</blockquote>

				<blockquote class="bl-testimonial">
					<div class="bl-testimonial__avatar-wrap">
						<img class="bl-testimonial__avatar" src="<?php echo get_template_directory_uri(); ?>/media/t2.jpg" alt="Lisa P." width="64" height="64" loading="lazy">
					</div>
					<div class="bl-testimonial__stars" aria-label="5 out of 5 stars">
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
						<svg viewBox="0 0 24 24" fill="var(--green,#2e7d32)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<p>&#8220;I thought pickleball was difficult until I took Coach Charles beginner clinic. His explanation of serving and court positioning made everything easy.&#8221;</p>
					<footer>
						<span class="bl-testimonial__name">Lisa P.</span>
					</footer>
				</blockquote>

			</div>
		</div>
	</section>

	<!-- 6. FAQs -->
	<section id="faqs" class="bl-section bg-gray">
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
					<summary>How soon will I hear back after registering?</summary>
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
				<a href="#bl-form" class="btn btn-green">REGISTER FOR A LESSON</a>
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

	// Real-Time Reservation Summary Logic
	var summaryBox = document.getElementById('booking-summary');
	var fields = {
		program: document.getElementById('bl-lesson-type'),
		instructor: document.getElementById('bl-instructor'),
		location: document.getElementById('bl-location'),
		date: document.getElementById('bl-date'),
		time: document.getElementById('bl-time'),
		participants: document.getElementById('bl-participants')
	};
	var outputs = {
		program: document.getElementById('sum-program'),
		instructor: document.getElementById('sum-instructor'),
		location: document.getElementById('sum-location'),
		date: document.getElementById('sum-date'),
		time: document.getElementById('sum-time'),
		participants: document.getElementById('sum-participants')
	};

	function updateSummary() {
		var hasData = false;
		if (fields.program && fields.program.value) { outputs.program.textContent = fields.program.value; hasData = true; }
		if (fields.instructor && fields.instructor.value) { outputs.instructor.textContent = fields.instructor.value; }
		if (fields.location && fields.location.value) { outputs.location.textContent = fields.location.value; hasData = true; }
		if (fields.date && fields.date.value) { 
			// Format date nicely if possible, else raw
			var d = new Date(fields.date.value + 'T00:00:00');
			outputs.date.textContent = isNaN(d) ? fields.date.value : d.toLocaleDateString(undefined, { weekday: 'short', month: 'short', day: 'numeric' }); 
			hasData = true; 
		}
		if (fields.time && fields.time.value) { 
			var t = fields.time.value.split(':');
			var hours = parseInt(t[0], 10);
			var ampm = hours >= 12 ? 'PM' : 'AM';
			hours = hours % 12;
			hours = hours ? hours : 12;
			outputs.time.textContent = hours + ':' + t[1] + ' ' + ampm;
			hasData = true; 
		}
		if (fields.participants && fields.participants.value) { outputs.participants.textContent = fields.participants.value; }

		// Show summary box only if the user has started filling out key dropdowns
		if (hasData) {
			summaryBox.style.display = 'block';
		}
	}

	// Attach listeners to all relevant fields
	Object.keys(fields).forEach(function(key) {
		if (fields[key]) {
			fields[key].addEventListener('change', updateSummary);
			fields[key].addEventListener('input', updateSummary);
		}
	});
})();
</script>

<?php get_footer(); ?>
