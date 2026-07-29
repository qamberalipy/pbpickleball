<?php
/**
 * Template Name: Beginner Manual Download
 */

get_header();
?>

<style>
/* ============================================================
   BEGINNER MANUAL STYLES
   ============================================================ */
.bm-page { 
    --navy: var(--navy, #0B2046); 
    color: #222; 
}

/* 1. Hero Section */
.bm-hero { 
    position: relative;
    padding: 6rem 0 5.5rem; 
    background: url('https://images.pexels.com/photos/209977/pexels-photo-209977.jpeg?auto=compress&cs=tinysrgb&w=1920') center/cover no-repeat;
    background-color: var(--navy);
    overflow: hidden;
}
.bm-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, rgba(11, 32, 70, 0.95) 0%, rgba(11, 32, 70, 0.8) 50%, rgba(11, 32, 70, 0.2) 100%);
    z-index: 1;
    display: block;
}
.bm-hero .container {
    position: relative;
    z-index: 2;
}
.bm-hero-grid { 
    display: grid; 
    grid-template-columns: 1fr 1.5fr 300px; 
    gap: 2.5rem; 
    align-items: center; 
}
.bm-hero-left h1 { 
    font-family: var(--font-heading, "Montserrat", sans-serif); 
    color: var(--white); 
    font-size: clamp(2rem, 4vw, 2.8rem); 
    line-height: 1.1; 
    margin-bottom: 0.5rem; 
    font-weight: 900; 
    text-transform: uppercase;
}
.bm-hero-left h1 .highlight {
    color: var(--green, #679B30);
}
.bm-hero-sub { 
    color: var(--green-bright, #78B036); 
    font-style: italic; 
    font-weight: 700; 
    font-size: 1.1rem; 
    margin-bottom: 0.75rem; 
}
.bm-hero-text { 
    color: rgba(255, 255, 255, 0.85); 
    margin-bottom: 1.5rem; 
    max-width: 42ch; 
    line-height: 1.6; 
}
.bm-check-list { 
    font-size: 0.95rem; 
    display: flex; 
    flex-direction: column; 
    gap: 8px; 
    font-weight: 600; 
    color: var(--white); 
    margin-bottom: 0; 
    padding: 0; 
    list-style: none;
}
.bm-check-list li { 
    display: flex; 
    align-items: center; 
    gap: 10px; 
}
.bm-check-list li::before { 
    content: '✓'; 
    display: inline-flex; 
    justify-content: center; 
    align-items: center; 
    width: 20px; 
    height: 20px; 
    background-color: var(--green, #679B30); 
    color: #fff; 
    border-radius: 50%; 
    font-size: 0.7rem; 
    font-weight: bold; 
    flex-shrink: 0; 
}
.bm-hero-center { 
    position: relative; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    width: 100%; 
}
.bm-book-cover { 
    width: 100%; 
    max-width: 650px; 
    height: auto; 
    display: block; 
}
.bm-book-badge {
    position: absolute; 
    bottom: 5%; 
    left: 45%;
    transform: translateX(-50%);
    z-index: 2;
    background: var(--green, #679B30); 
    color: #fff; 
    border-radius: 50%;
    width: 110px; 
    height: 110px; 
    display: flex; 
    align-items: center; 
    justify-content: center;
    font-size: 0.72rem; 
    font-weight: 800; 
    text-align: center; 
    line-height: 1.2;
    padding: 0.5rem;
    box-shadow: 0 10px 20px rgba(103, 155, 48, 0.3);
}
.bm-sidebar { 
    background: var(--navy-light, #16366B); 
    color: #fff; 
    border-radius: 12px; 
    padding: 1.5rem; 
    border: 1px solid rgba(255, 255, 255, 0.15);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}
.bm-sidebar h2 { 
    color: var(--green-bright, #78B036); 
    font-size: 0.95rem; 
    margin-bottom: 1rem; 
    font-family: var(--font-heading, "Montserrat", sans-serif);
}
.bm-learn-list { 
    list-style: none; 
    margin: 0; 
    padding: 0; 
    display: flex; 
    flex-direction: column; 
    gap: 1rem; 
}
.bm-learn-list li { 
    display: flex; 
    gap: 0.65rem; 
    align-items: flex-start; 
}
.bm-learn-icon { color: var(--green, #679B30); flex-shrink: 0; }
.bm-learn-icon svg { width: 20px; height: 20px; }
.bm-learn-list strong { display: block; font-size: 0.85rem; }
.bm-learn-list p { font-size: 0.78rem; opacity: 0.85; margin: 0; }

/* 2. Sample Pages */
.bm-samples { 
    padding-top: 5rem;
    padding-bottom: 4rem;
}
.lp-section-title {
    text-align: center;
    font-size: 1.8rem;
    color: var(--navy, #0B2046);
    font-family: var(--font-heading, "Montserrat", sans-serif);
    font-weight: 900;
    margin-bottom: 3rem;
    text-transform: uppercase;
}
.bm-samples-grid { 
    display: grid; 
    grid-template-columns: repeat(6, 1fr); 
    gap: 1.25rem; 
}
.bm-sample-card { 
    background: #fff; 
    border: 1px solid rgba(11, 32, 70, 0.05); 
    border-radius: 12px; 
    overflow: hidden; 
    position: relative;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03); 
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.bm-sample-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(11, 32, 70, 0.08);
}
.bm-sample-card img { 
    width: 100%; 
    height: auto; 
    display: block; 
    border-bottom: 1px solid rgba(11, 32, 70, 0.05);
    background-color: #F5F7F8;
}
.bm-page-num {
    position: absolute; 
    top: 10px; 
    right: 10px;
    background-color: var(--green, #679B30); 
    color: #fff; 
    font-size: 0.7rem; 
    font-weight: 800;
    width: 24px; 
    height: 24px; 
    border-radius: 50%; 
    display: flex; 
    align-items: center; 
    justify-content: center;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}
.bm-sample-body { padding: 1rem 0.8rem; }
.bm-sample-body h3 { 
    font-size: 0.85rem; 
    color: var(--navy, #0B2046); 
    margin-bottom: 0.2rem; 
    font-family: var(--font-heading, "Montserrat", sans-serif);
    font-weight: 800;
}
.bm-sample-body p { 
    font-size: 0.75rem; 
    color: var(--gray-text, #4A4A4A); 
    margin: 0;
    line-height: 1.4;
}

/* 3. Download Form Section */
.bm-purchase-section { margin: 2rem auto 4rem; }
.bm-purchase-container {
    display: grid;
    grid-template-columns: 1fr 420px;
    background: #fff;
    border-radius: 16px;
    border: 1px solid rgba(0,0,0,0.08);
    box-shadow: 0 20px 40px rgba(15, 42, 74, 0.06);
    overflow: hidden;
    align-items: stretch;
}
.bm-purchase-content { padding: 3.5rem 3rem; display: flex; flex-direction: column; justify-content: center; }
.bm-purchase-eyebrow { color: var(--green, #679B30); font-weight: 800; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 0.5rem; }
.bm-purchase-content h2 { font-size: 1.8rem; color: var(--navy, #0B2046); margin-bottom: 1rem; font-family: var(--font-heading, "Montserrat", sans-serif); font-weight: 900; line-height: 1.2; text-transform: uppercase; }
.bm-purchase-content p { color: var(--gray-text, #4A4A4A); line-height: 1.6; margin-bottom: 2rem; font-size: 1.05rem; max-width: 90%; }
.bm-purchase-features { display: flex; flex-direction: column; gap: 1.2rem; }
.bm-pf-item { display: flex; align-items: flex-start; gap: 0.75rem; color: var(--navy, #0B2046); font-size: 0.95rem; line-height: 1.4; }
.bm-pf-item svg { width: 22px; height: 22px; color: var(--green, #679B30); flex-shrink: 0; margin-top: 2px; }

/* Form Action Box */
.bm-purchase-action {
    background-color: var(--navy, #0B2046) !important;
    padding: 3rem 2.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #ffffff !important;
    position: relative;
}
.bm-action-card { text-align: center; }
.bm-action-card h3 { 
    color: #ffffff !important; 
    font-size: 1.3rem; 
    margin-bottom: 0.5rem; 
    font-family: var(--font-heading, "Montserrat", sans-serif); 
    font-weight: 800; 
}
.bm-action-card p { 
    color: rgba(255, 255, 255, 0.8) !important; 
    font-size: 0.9rem; 
    margin-bottom: 1.5rem; 
}

/* Download Form Styling */
.bm-download-form {
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.bm-form-group input {
    width: 100%;
    padding: 14px 15px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 6px;
    background: rgba(255, 255, 255, 0.05);
    color: #fff;
    font-family: var(--font-body, "Open Sans", sans-serif);
    font-size: 0.9rem;
    outline: none;
    transition: border-color 0.2s, background 0.2s;
}
.bm-form-group input::placeholder {
    color: rgba(255, 255, 255, 0.6);
}
.bm-form-group input:focus {
    border-color: var(--green, #679B30);
    background: rgba(255, 255, 255, 0.15);
}

.bm-btn-order {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background: var(--green, #679B30);
    color: #fff;
    font-weight: 800;
    font-size: 0.9rem;
    padding: 15px 20px;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px rgba(103, 155, 48, 0.25);
    width: 100%;
    border: none;
    cursor: pointer;
    margin-top: 5px;
}
.bm-btn-order svg { width: 20px; height: 20px; transition: transform 0.3s ease; }
.bm-btn-order:hover { 
    background: var(--green-bright, #78B036); 
    transform: translateY(-2px); 
    box-shadow: 0 15px 25px rgba(103, 155, 48, 0.4); 
}
.bm-btn-order:hover svg { transform: translateY(3px); }

/* 4. Bottom Trust Banner */
.bm-bottom { 
    background-color: var(--navy, #0B2046) !important;
    padding: 5rem 0; 
    margin-top: 4rem; 
    border-top: 5px solid var(--green, #679B30); 
}
.bm-bottom-container { 
    display: grid; 
    grid-template-columns: 1fr 1.3fr; 
    gap: 5rem; 
    align-items: center; 
}
.bm-quote-block { position: relative; }
.bm-quote-block::before {
    content: '"';
    position: absolute;
    top: -45px;
    left: -20px;
    font-size: 8rem;
    font-family: serif;
    color: rgba(255, 255, 255, 0.08);
    line-height: 1;
    z-index: 0;
}
.bm-quote { 
    font-size: clamp(1.5rem, 3vw, 2rem); 
    font-family: var(--font-heading, "Montserrat", sans-serif);
    font-style: italic; 
    font-weight: 700; 
    line-height: 1.3; 
    margin-bottom: 1.5rem; 
    position: relative; 
    z-index: 1; 
    border: none;
    padding: 0;
    color: #ffffff; 
}
.bm-quote-block cite { display: flex; flex-direction: column; font-style: normal; }
.bm-cite-name { color: var(--green, #679B30); font-weight: 800; font-size: 1.1rem; }
.bm-cite-title { font-size: 0.8rem; color: rgba(255, 255, 255, 0.7); text-transform: uppercase; letter-spacing: 1px; margin-top: 0.3rem; }

.bm-features-wrap { 
    display: grid; 
    grid-template-columns: repeat(2, 1fr); 
    gap: 1.25rem; 
}
.bm-feature-card { 
    background-color: rgba(255, 255, 255, 0.05); 
    border: 1px solid rgba(255, 255, 255, 0.15); 
    border-radius: 12px; 
    padding: 1.5rem; 
    display: flex; 
    flex-direction: column; 
    gap: 1rem; 
    transition: all 0.3s ease; 
}
.bm-feature-card:hover { 
    background-color: rgba(255, 255, 255, 0.1); 
    border-color: var(--green, #679B30); 
    transform: translateY(-4px); 
}
.bm-fc-icon { 
    background-color: rgba(103, 155, 48, 0.2); 
    width: 42px; height: 42px; 
    border-radius: 8px; 
    display: flex; align-items: center; justify-content: center; 
    color: var(--green, #679B30); 
}
.bm-fc-text strong { display: block; font-size: 1.05rem; margin-bottom: 0.3rem; color: #ffffff; font-family: var(--font-heading, "Montserrat", sans-serif); font-weight: 700; }
.bm-fc-text span { font-size: 0.85rem; color: rgba(255, 255, 255, 0.75); line-height: 1.5; display: block; }

/* Responsive */
@media (max-width: 1024px) {
    .bm-hero-grid { grid-template-columns: 1fr; text-align: center; }
    .bm-hero-left { margin: 0 auto; }
    .bm-check-list { display: inline-block; text-align: left; }
    .bm-book-badge { position: relative; margin: -20px auto 0; bottom: auto; left: auto; transform: none; }
    .bm-hero::before { background: rgba(11, 32, 70, 0.92); }
    .bm-samples-grid { grid-template-columns: repeat(3, 1fr); gap: 1.5rem; } 
    .bm-purchase-container { grid-template-columns: 1fr; }
    .bm-purchase-action { padding: 3rem 2rem; }
    .bm-purchase-content { padding: 3rem 2rem 2rem; text-align: center; align-items: center; }
    .bm-bottom-container { grid-template-columns: 1fr; gap: 3rem; text-align: center; }
    .bm-quote-block::before { left: 50%; transform: translateX(-50%); }
    .bm-quote-block cite { align-items: center; }
}

@media (max-width: 640px) {
    .bm-samples-grid { grid-template-columns: repeat(2, 1fr); gap: 1rem; } 
    .bm-hero-left h1 { font-size: 1.8rem; }
    .bm-features-wrap { grid-template-columns: 1fr; }
}
</style>

<main class="bm-page">

    <!-- 1. HERO: manual intro + book mockup + "What You'll Learn" -->
    <section class="bm-hero">
        <div class="container">
            <div class="bm-hero-grid">

            <div class="bm-hero-left anim-fade-right">
                <h1>BEGINNER<br><span class="highlight">TRAINING MANUAL</span></h1>
                <p class="bm-hero-sub">Your Guide to Pickleball Success!</p>
                <p class="bm-hero-text">Our Beginner Training Manual – Volume 1 is the perfect companion for new players. Written by Instructor Charles, it breaks down the game in a simple, fun, and easy-to-follow way so you can learn faster and play with confidence.</p>
                <ul class="bm-check-list">
                    <li>Step-by-step instruction</li>
                    <li>Clear illustrations &amp; diagrams</li>
                    <li>Tips, strategies &amp; rules explained</li>
                    <li>Built for beginners &amp; active adults</li>
                    <li>Learn at your own pace</li> 
                </ul>
            </div>

            <div class="bm-hero-center anim-fade-up">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/media/beginner-manual-hero.webp" alt="Beginner Pickleball Handbook Volume 1 cover" class="bm-book-cover" loading="lazy">
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

    <!-- 3. DOWNLOAD FORM SECTION -->
    <section class="bm-purchase-section container anim-fade-up">
        <div class="bm-purchase-container">
            
            <!-- Left Side: Value Proposition -->
            <div class="bm-purchase-content">
                <span class="bm-purchase-eyebrow">Start Winning Today</span>
                <h2>Get Your Free Copy of Volume 1</h2>
                <p>Ready to level up your game? Fill out the form to instantly download the complete digital PDF of the PB Academy Beginner Manual.</p>
                
                <div class="bm-purchase-features">
                    <div class="bm-pf-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <span><strong>Instant Access:</strong> Download the PDF directly to your device and read it anywhere.</span>
                    </div>
                    <div class="bm-pf-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <span><strong>Print Ready:</strong> The manual is fully optimized so you can print it and take it to the court!</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Lead Capture Form -->
            <div class="bm-purchase-action">
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
                    <a href="<?php echo home_url('/beginner-manual-download/'); ?>" id="bm-buy" class="btn bm-btn-order">
						GET YOUR MANUAL NOW
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
					</a>
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