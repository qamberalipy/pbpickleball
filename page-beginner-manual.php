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
	wp_enqueue_style( 'pbpa-beginner-manual', get_template_directory_uri() . '/beginner-manual.css', array(), '1.0.0' );
} );

/** Verify a remote image loads (HTTP 200) before using it; cached 1 day. */
function pbpa_bm_img( $url, $fallback ) {
	$key = 'pbpa_bm_img_' . md5( $url );
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
				<img src="<?php echo get_template_directory_uri(); ?>/media/beginner-manual-hero.png" alt="Beginner Pickleball Handbook Volume 1 cover" class="bm-book-cover" loading="lazy">
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

	<!-- 3. PACKAGE / PURCHASE STRIP -->
	<section class="bm-strip container anim-fade-up">
		<div class="bm-strip-item">
			<span class="bm-strip-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 12v9H4v-9M22 7H2v5h20V7zM12 22V7M12 7c-1.5-3-6-4-6-1s4.5 3 6 1zM12 7c1.5-3 6-4 6-1s-4.5 3-6 1z"/></svg></span>
			<div><strong>Included With Lesson Packages</strong><span>Get Volume 1 FREE when you sign up for certain lesson packages.</span></div>
		</div>

		<div class="bm-strip-cta">
			<span class="bm-strip-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span>
			<div><strong>Get Your Copy Today!</strong><span>Available as a bonus with packages or for individual purchase.</span></div>
			<!-- Purchase/download flow not wired up yet — hook this up to your checkout later. -->
			<a href="#bm-buy" id="bm-buy" class="btn btn-navy">Order Your Copy Now!</a>
		</div>

		<div class="bm-strip-item">
			<span class="bm-strip-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></span>
			<div><strong>Digital or Print</strong><span>Choose the format that works best for you.</span></div>
		</div>
	</section>

	<!-- 4. BOTTOM BANNER: quote + features -->
	<section class="bm-bottom anim-fade-up">
		<div class="container bm-bottom-grid">
			<blockquote class="bm-quote">&ldquo;The more you learn, the more you enjoy the game.&rdquo;<cite>— Instructor Charles</cite></blockquote>

			<div class="bm-feature"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a8 8 0 0116 0v1"/></svg><div><strong>Beginner Focused</strong><span>Designed for new players.</span></div></div>
			<div class="bm-feature"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 00-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z"/></svg><div><strong>Made for Active Adults</strong><span>Simple, clear, and easy to follow.</span></div></div>
			<div class="bm-feature"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg><div><strong>Real Results</strong><span>Learn better. Play better. Have more fun.</span></div></div>
			<div class="bm-feature"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg><div><strong>Stronger Community</strong><span>We grow together on and off the court.</span></div></div>

			<img src="<?php echo esc_url( pbpa_bm_img( 'https://picsum.photos/seed/pbpa-manual-bottom/500/260', 'https://picsum.photos/500/260' ) ); ?>" alt="Pickleball paddles and net on court" class="bm-bottom-img" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/500/260';">
		</div>
	</section>

</main>

<?php get_footer(); ?>
