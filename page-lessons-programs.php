<?php
/**
 * Template Name: Lessons & Programs
 *
 * @package PBPickleball
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'pbpa-lessons-programs', get_template_directory_uri() . '/lessons-programs.css', array(), '1.0.0' );
} );


get_header();
?>

<main class="lp-page">

	<!-- 1. TITLE BANNER -->
	<section class="lp-hero" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/media/pageandprogramhero.jpg');">
		<div class="lp-hero-grid container">
			<div class="lp-hero-left anim-fade-right">
				<h1>LESSONS &amp; <span class="highlight">PROGRAMS</span></h1>
				<p class="lp-hero-sub">Learn at Your Pace. Improve for Life.</p>
				<p class="lp-hero-text">At PB Pickleball Academy, we make learning fun, effective, and social. Our programs are designed for beginners and active adults who want to build skills, confidence, and friendships while staying active.</p>
				<a href="<?php echo esc_url( home_url( '/book-a-lesson/' ) ); ?>" class="btn btn-green">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
					Book Your First Lesson
				</a>
				<p class="lp-hero-note">Let's get you on the court!</p>
			</div>

			<aside class="lp-why-box anim-fade-up">
				<h2>WHY LEARN WITH PBPA?</h2>
				<ul class="lp-check-list">
					<li>Beginner focused</li>
					<li>Patient, friendly instruction</li>
					<li>Small class sizes</li>
					<li>Private and group lessons</li>
					<li>Step-by-step skill building</li>
					<li>A supportive community</li>
					<li>Real results, lots of fun!</li>
				</ul>
			</aside>
		</div>
	</section>

	<!-- 2 & 3. PROGRAMS + SIDEBAR -->
	<section class="lp-programs container">
		<h2 class="lp-section-title anim-fade-up">OUR PROGRAMS</h2>

		<div class="lp-programs-layout">
			<div class="lp-cards-grid">

				<article class="lp-card anim-fade-up">
					<span class="lp-tag">MOST POPULAR</span>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/media/paddle/Picture1.png" alt="Beginner pickleball players high-fiving on court" loading="lazy">
					<div class="lp-card-body">
						<h3>BEGINNER 101</h3>
						<p class="lp-card-tag">Start Here!</p>
						<p>Perfect for first-time players. Learn the basics, rules, strokes, and how to play with confidence.</p>
						<div class="lp-meta">
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>1 – 4 Players</span>
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>1 Hour</span>
						</div>
						<a href="<?php echo esc_url( home_url( '/book-a-lesson/?type=beginner' ) ); ?>" class="btn btn-green lp-card-btn">Book Now</a>
					</div>
				</article>

				<article class="lp-card anim-fade-up anim-stagger" style="--stagger-delay:60ms;">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/media/paddle/Picture2.png" alt="Group of players practicing together" loading="lazy">
					<div class="lp-card-body">
						<h3>GROUP LESSONS</h3>
						<p class="lp-card-tag">Learn &amp; Have Fun Together!</p>
						<p>Small group classes that focus on skills, drills, and game play in a fun, supportive environment.</p>
						<div class="lp-meta">
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>3 – 8 Players</span>
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>1 Hour</span>
						</div>
						<a href="<?php echo esc_url( home_url( '/book-a-lesson/?type=group' ) ); ?>" class="btn btn-green lp-card-btn">Book Now</a>
					</div>
				</article>

				<article class="lp-card anim-fade-up anim-stagger" style="--stagger-delay:120ms;">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/media/paddle/Picture3.png" alt="Instructor giving a private one on one lesson" loading="lazy">
					<div class="lp-card-body">
						<h3>PRIVATE LESSONS</h3>
						<p class="lp-card-tag">Personalized Just for You!</p>
						<p>One-on-one instruction tailored to your goals. Advance faster with undivided attention.</p>
						<div class="lp-meta">
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a8 8 0 0116 0v1"/></svg>1 on 1</span>
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>1 Hour</span>
						</div>
						<a href="<?php echo esc_url( home_url( '/book-a-lesson/?type=private' ) ); ?>" class="btn btn-green lp-card-btn">Book Now</a>
					</div>
				</article>

				<article class="lp-card anim-fade-up anim-stagger" style="--stagger-delay:180ms;">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/media/paddle/Picture4.png" alt="Players enjoying supervised open play" loading="lazy">
					<div class="lp-card-body">
						<h3>PLAY &amp; IMPROVE</h3>
						<p class="lp-card-tag">Practice. Play. Improve.</p>
						<p>Supervised open play with tips and coaching. Great way to meet new friends and get better!</p>
						<div class="lp-meta">
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>4 – 8 Players</span>
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>1.5 Hours</span>
						</div>
						<a href="<?php echo esc_url( home_url( '/book-a-lesson/?type=play-improve' ) ); ?>" class="btn btn-green lp-card-btn">Book Now</a>
					</div>
				</article>

				<article class="lp-card anim-fade-up anim-stagger" style="--stagger-delay:240ms;">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/media/paddle/Picture5.png" alt="Country club clubhouse with pickleball courts" loading="lazy">
					<div class="lp-card-body">
						<h3>COUNTRY CLUB &amp; HOA</h3>
						<p class="lp-card-tag">We Bring Pickleball to You!</p>
						<p>Programs designed for country clubs, HOAs, and communities. Clinics, leagues, and management available.</p>
						<div class="lp-meta">
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>Custom Groups</span>
							<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Custom</span>
						</div>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-navy lp-card-btn">Learn More</a>
					</div>
				</article>
			</div>

			<!-- 4. SIDEBAR -->
			<aside class="lp-sidebar">
				<div class="lp-sidebar-card anim-fade-up">
					<h3>CHOOSE WHAT'S BEST FOR YOU</h3>

					<div class="lp-feature">
						<span class="lp-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span>
						<div><strong>Beginner Focused</strong><p>Programs designed specifically for new players.</p></div>
					</div>
					<div class="lp-feature">
						<span class="lp-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></span>
						<div><strong>Step-by-Step Progression</strong><p>Build your skills with a proven learning path.</p></div>
					</div>
					<div class="lp-feature">
						<span class="lp-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></span>
						<div><strong>Fun &amp; Social</strong><p>Make new friends while staying active.</p></div>
					</div>
					<div class="lp-feature">
						<span class="lp-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
						<div><strong>Safe &amp; Supportive</strong><p>Safety first with patient, encouraging instructors.</p></div>
					</div>
				</div>

				<!-- 6. CALL CTA -->
				<div class="lp-sidebar-call anim-fade-up">
					<span class="lp-call-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.59.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.47 11.47 0 00.57 3.59 1 1 0 01-.25 1.01z"/></svg></span>
					<p class="lp-call-label">Prefer to Call?</p>
					<a href="tel:5618559500" class="lp-call-number">561-855-9500</a>
					<p class="lp-call-note">We're happy to help!</p>
				</div>
			</aside>
		</div>
	</section>

	<!-- 7. FLEXIBLE SCHEDULING STRIP -->
	<section class="lp-strip container anim-fade-up">
		<div class="lp-strip-item">
			<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
			<div><strong>Flexible Scheduling</strong><span>Lessons available 7 days a week. Morning, afternoon &amp; evening options.</span></div>
		</div>
		<div class="lp-strip-item">
			<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/></svg>
			<div><strong>All Equipment Provided</strong><span>Paddles and balls are provided for all lessons.</span></div>
		</div>
		<a href="<?php echo esc_url( home_url( '/book-a-lesson/' ) ); ?>" class="lp-strip-cta">
			<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
			<div><strong>Book Your Lesson Now</strong><span>Spots fill up fast – reserve today!</span></div>
			<svg class="lp-strip-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
		</a>
	</section>

	<!-- 8. TESTIMONIALS -->
	<section class="lp-testimonials container anim-fade-up">
	
		<h2 class="lp-section-title">WHAT OUR STUDENTS SAY</h2>

		<div class="lp-testimonial-grid">
			<div class="lp-testimonial">
				<img src="https://i.pravatar.cc/150?img=32" alt="Photo of Linda M." class="lp-avatar" loading="lazy">
				<svg class="lp-quote-mark" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9 7H4a1 1 0 00-1 1v6a1 1 0 001 1h4v3H4v2h5a2 2 0 002-2v-9a2 2 0 00-2-2zm11 0h-5a1 1 0 00-1 1v6a1 1 0 001 1h4v3h-4v2h5a2 2 0 002-2v-9a2 2 0 00-2-2z"/></svg>
				<p>&ldquo;Charles made learning pickleball easy and enjoyable. I was playing confidently after just a few lessons!&rdquo;</p>
				<strong>Linda M.</strong>
				<span>Boynton Beach, FL</span>
				<div class="lp-stars" aria-label="5 out of 5 stars">★★★★★</div>
			</div>

			<div class="lp-testimonial">
				<img src="https://i.pravatar.cc/150?img=54" alt="Photo of Robert T." class="lp-avatar" loading="lazy">
				<svg class="lp-quote-mark" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9 7H4a1 1 0 00-1 1v6a1 1 0 001 1h4v3H4v2h5a2 2 0 002-2v-9a2 2 0 00-2-2zm11 0h-5a1 1 0 00-1 1v6a1 1 0 001 1h4v3h-4v2h5a2 2 0 002-2v-9a2 2 0 00-2-2z"/></svg>
				<p>&ldquo;Patient, knowledgeable, and always encouraging. I highly recommend PB Pickleball Academy.&rdquo;</p>
				<strong>Robert T.</strong>
				<span>Delray Beach, FL</span>
				<div class="lp-stars" aria-label="5 out of 5 stars">★★★★★</div>
			</div>

			<div class="lp-testimonial">
				<img src="https://i.pravatar.cc/150?img=47" alt="Photo of Susan K." class="lp-avatar" loading="lazy">
				<svg class="lp-quote-mark" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9 7H4a1 1 0 00-1 1v6a1 1 0 001 1h4v3H4v2h5a2 2 0 002-2v-9a2 2 0 00-2-2zm11 0h-5a1 1 0 00-1 1v6a1 1 0 001 1h4v3h-4v2h5a2 2 0 002-2v-9a2 2 0 00-2-2z"/></svg>
				<p>&ldquo;I never thought I could learn a new sport in my 60s. Now I play every week!&rdquo;</p>
				<strong>Susan K.</strong>
				<span>Lantana, FL</span>
				<div class="lp-stars" aria-label="5 out of 5 stars">★★★★★</div>
			</div>
		</div>
	</section>

	<!-- 9. BOTTOM BANNER -->
	<section class="lp-bottom-banner anim-fade-up">
		<div class="lp-bottom-bg" style="background-image: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1200&auto=format&fit=crop');"></div>
		<div class="lp-bottom-overlay">
			<h2>Every Lesson.<br>Every Student.<br>Every Time.</h2>
			<p>We're Here for You.</p>
		</div>
	</section>

</main>

<?php get_footer(); ?>
