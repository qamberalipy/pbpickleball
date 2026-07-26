<?php
/**
 * Template Name: Beginner Manual
 *
 * Purchase → download is NOT wired up yet — the "Buy & Download" button
 * below is a placeholder link (#bm-buy). Point it at your checkout/gateway
 * later; once payment succeeds, deliver the PDF via a protected/expiring URL.
 *
 * @package PBPickleball
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'pba-beginner-manual', get_template_directory_uri() . '/beginner-manual.css', array(), '1.0.0' );
} );

/** Verify a remote image loads (HTTP 200) before using it; cached 1 day. */
function pba_bm_img( $url, $fallback ) {
	$key = 'pba_bm_img_' . md5( $url );
	$ok  = get_transient( $key );
	if ( false === $ok ) {
		$r  = wp_remote_head( $url, array( 'timeout' => 4 ) );
		$ok = ( ! is_wp_error( $r ) && 200 === wp_remote_retrieve_response_code( $r ) ) ? 1 : 0;
		set_transient( $key, $ok, DAY_IN_SECONDS );
	}
	return $ok ? $url : $fallback;
}

get_header();
?>

<main class="bm-page">

	<!-- 1. HERO: manual intro + book mockup + "What You'll Learn" -->
	<section class="bm-hero">
		<div class="container">
			<div class="bm-hero-grid">

			<div class="bm-hero-left anim-fade-right">
				<h1>BEGINNER<br><span class="highlight">TRAINING MANUAL</span></h1>
				<p class="bm-hero-sub">Your Guide to Pickleball Success!</p>
				<p class="bm-hero-text">Our Beginner Training Manual – Volume 1 is the perfect companion for new players. Written by Instructor Charles, it breaks down the game in a simple, fun, and easy-to-follow way so you can learn faster and play with confidence.</p>
				<ul class="lp-check-list bm-check-list">
					<li>Step-by-step instruction</li>
					<li>Clear illustrations &amp; diagrams</li>
					<li>Tips, strategies &amp; rules explained</li>
					<li>Built for beginners &amp; active adults</li>
					<li>Learn at your own pace</li> 
				</ul>
			</div>

			<div class="bm-hero-center anim-fade-up">
				<img src="<?php echo get_template_directory_uri(); ?>/media/beginner-manual-hero.webp" alt="Beginner Pickleball Handbook Volume 1 cover" class="bm-book-cover" loading="lazy">
				<div class="bm-book-badge">PERFECT FOR<br>BEGINNERS &amp;<br>ACTIVE ADULTS!</div>
			</div>

			<aside class="bm-sidebar anim-fade-up">
				<h2>WHAT YOU'LL LEARN</h2>
				<ul class="bm-learn-list">
					<li><span class="bm-learn-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></span><div><strong>Rules &amp; Scoring</strong><p>Understand the game from the start.</p></div></li>
					<li><span class="bm-learn-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></span><div><strong>Strokes &amp; Technique</strong><p>Master the basics with step-by-step guidance.</p></div></li>
					<li><span class="bm-learn-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 4 4 5-6"/></svg></span><div><strong>Strategy &amp; Positioning</strong><p>Play smarter and move with purpose.</p></div></li>
					<li><span class="bm-learn-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></span><div><strong>Drills &amp; Practice</strong><p>Fun drills to build skills and confidence.</p></div></li>
					<li><span class="bm-learn-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span><div><strong>Safety &amp; Etiquette</strong><p>Play safe. Be respectful. Have more fun.</p></div></li>
				</ul>
			</aside>
			</div>
		</div>
	</section>

	<!-- 2. SAMPLE PAGES -->
	<section class="bm-samples container anim-fade-up">
		<h2 class="lp-section-title">INSIDE VOLUME 1 – SAMPLE PAGES</h2>
		<div class="bm-samples-grid">
			<?php
			$bm_samples = array(
				array( 'title' => 'The Court', 'sub' => 'Get to know the court.', 'page' => 8, 'img' => 'court.png.jpg' ),
				array( 'title' => 'Grips', 'sub' => 'Choose the right grip.', 'page' => 16, 'img' => 'grips.jpg' ),
				array( 'title' => '3rd Shot Drop', 'sub' => 'A smart way to take control.', 'page' => 32, 'img' => '3d-shot.jpg' ),
				array( 'title' => 'Moving to the Kitchen', 'sub' => 'After you serve…', 'page' => 38, 'img' => 'move-to-kitchen.jpg' ),
				array( 'title' => 'Returning a Shot', 'sub' => '4 smart ways to place it.', 'page' => 42, 'img' => 'return-ashot.jpg' ),
				array( 'title' => 'You Got This!', 'sub' => 'Practice. Play. Improve.', 'page' => 71, 'img' => 'let-go.jpg' ),
			);
			foreach ( $bm_samples as $i => $s ) :
				?>
				<div class="bm-sample-card anim-fade-up anim-stagger" style="--stagger-delay:<?php echo esc_attr( $i * 60 ); ?>ms;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/media/' . $s['img'] ); ?>" alt="<?php echo esc_attr( $s['title'] . ' sample page' ); ?>" loading="lazy">
					<span class="bm-page-num"><?php echo esc_html( $s['page'] ); ?></span>
					<div class="bm-sample-body">
						<h3><?php echo esc_html( $s['title'] ); ?></h3>
						<p><?php echo esc_html( $s['sub'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<!-- 3. PREMIUM PURCHASE CTA -->
	<section class="bm-purchase-section container anim-fade-up">
		<div class="bm-purchase-container">
			
			<!-- Left Side: Value Proposition -->
			<div class="bm-purchase-content">
				<span class="bm-purchase-eyebrow">Start Winning Today</span>
				<h2>Get Your Copy of Volume 1</h2>
				<p>Available as a bonus with our lesson packages or for individual purchase in your preferred format.</p>
				
				<div class="bm-purchase-features">
					<div class="bm-pf-item">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
						<span><strong>Digital or Print:</strong> Choose the format that works best for you.</span>
					</div>
					<div class="bm-pf-item">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
						<span><strong>Lesson Bonus:</strong> Get Volume 1 FREE with certain packages.</span>
					</div>
				</div>
			</div>

			<!-- Right Side: Order Action Box -->
			<div class="bm-purchase-action">
				<div class="bm-action-card">
					<div class="bm-action-icon">
	    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
	        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
	        <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
	        <path d="M4 22h16"></path>
	        <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
	        <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
	        <path d="M18 2H6v7a6 6 0 0 0 12 0V2z"></path>
	    </svg>
</div>
					<h3>Beginner Manual</h3>
					<p>Ready to level up your game?</p>
					
					<!-- Purchase/download flow not wired up yet -->
					<a href="#bm-buy" id="bm-buy" class="btn bm-btn-order">
						Order Your Copy Now
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
					</a>
					
					<div class="bm-secure-badge">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
						Secure Online Ordering
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- 4. BOTTOM BANNER: Trust & Features -->
	<section class="bm-bottom anim-fade-up">
		<div class="container bm-bottom-container">
			
			<!-- Left Side: Instructor Quote -->
			<div class="bm-quote-block">
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
				<div class="bm-feature-card">
					<div class="bm-fc-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"></circle><path d="M4 21v-1a8 8 0 0116 0v1"></path></svg></div>
					<div class="bm-fc-text">
						<strong>Beginner Focused</strong>
						<span>Designed specifically for new players.</span>
					</div>
				</div>
				
				<div class="bm-feature-card">
					<div class="bm-fc-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 00-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z"></path></svg></div>
					<div class="bm-fc-text">
						<strong>Active Adults</strong>
						<span>Simple, clear, and easy to follow.</span>
					</div>
				</div>

				<div class="bm-feature-card">
					<div class="bm-fc-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
					<div class="bm-fc-text">
						<strong>Real Results</strong>
						<span>Learn better. Play better. Have fun.</span>
					</div>
				</div>

				<div class="bm-feature-card">
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
