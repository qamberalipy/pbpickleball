<?php
/**
 * Template Name: Beginner Manual Download
 */

get_header();
?>


<main class="bm-page">

    <!-- 1. HERO: manual intro + book mockup + "What You'll Learn" -->
    <section class="hero bm-hero-full" data-mascot-msg="Grab Volume 1 of our Beginner Training Manual to fast-track your court skills!">
        <div class="hero-video-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/media/beginner-manual-hero-banner.webp');"></div>
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h1>BEGINNER<br><span class="highlight">TRAINING MANUAL</span></h1>
                <h3 class="hero-tagline type-effect"></h3>

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
                array( 'title' => 'The Court', 'sub' => 'Get to know the court.', 'page' => 8, 'img' => 'court.png.jpg' ),
                array( 'title' => 'Grips', 'sub' => 'Choose the right grip.', 'page' => 16, 'img' => 'grips.jpg' ),
                array( 'title' => '3rd Shot Drop', 'sub' => 'A smart way to take control.', 'page' => 32, 'img' => '3d-shot.jpg' ),
                array( 'title' => 'Moving to the Kitchen', 'sub' => 'After you serve…', 'page' => 38, 'img' => 'move-to-kitchen.jpg' ),
                array( 'title' => 'Returning a Shot', 'sub' => '4 smart ways to place it.', 'page' => 42, 'img' => 'return-ashot.jpg' ),
                array( 'title' => 'You Got This!', 'sub' => 'Practice. Play. Improve.', 'page' => 71, 'img' => 'let-go.jpg' ),
            );
            foreach ( $bm_samples as $i => $s ) :
                ?>
                <div class="bm-sample-card anim-fade-up anim-stagger" style="--stagger-delay:<?php echo esc_attr( $i * 150 ); ?>ms;">
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
                    
                    <form id="manual-download-form" class="bm-download-form">
                        <div class="bm-form-group">
                            <input type="text" id="dl-first-name" placeholder="Your First Name" required>
                        </div>
                        <div class="bm-form-group">
                            <input type="email" id="dl-email" placeholder="Your Email Address" required>
                        </div>
                        <button type="submit" class="bm-btn-order" id="dl-btn">
                            GET YOUR MANUAL NOW
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                        </button>
                    </form>

                    <!-- Success Message -->
                    <div id="dl-success-msg" style="display:none; color: var(--green-bright, #78B036); margin-top: 15px; font-weight: 700; font-size: 0.9rem;">
                        Success! Your download is starting...
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const downloadForm = document.getElementById('manual-download-form');
    if (downloadForm) {
        downloadForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Stop normal form submission

            // Hide the button to prevent multiple clicks and show success message
            const submitBtn = document.getElementById('dl-btn');
            submitBtn.style.display = 'none';
            document.getElementById('dl-success-msg').style.display = 'block';

            // Create a temporary link to force the PDF download
            const pdfUrl = '<?php echo esc_url( get_template_directory_uri() ); ?>/media/beginner-manual.pdf';
            const link = document.createElement('a');
            link.href = pdfUrl;
            link.download = 'PBA-Beginner-Manual-Volume-1.pdf';
            link.target = '_blank';
            
            // Append, click, and remove the link
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            // (Optional) Reset the form after a few seconds if you want
            setTimeout(() => {
                submitBtn.style.display = 'flex';
                document.getElementById('dl-success-msg').style.display = 'none';
                downloadForm.reset();
            }, 5000);
        });
    }
});
</script>

<?php get_footer(); ?>