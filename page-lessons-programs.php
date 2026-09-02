<?php
/**
 * Template Name: Lessons & Programs
 *
 * @package PBPickleball
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'pba-lessons-programs', get_template_directory_uri() . '/lessons-programs.css', array(), '1.0.0' );
} );


get_header();
?>

<main class="lp-page programs-page pba-bg-pattern">

    <!-- ============================================================
         PHASE 1: HERO & INTRO
         ============================================================ -->
    <section class="hero lp-hero-full" data-mascot-msg="Explore our programs and find the perfect fit for your game!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/programs-hero-section.webp" alt="PB Academy Programs and Lessons" aria-hidden="true">
        
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h1 style="font-size: clamp(3rem, 6vw, 4.5rem); line-height: 1.1;"><span style="color: var(--navy);">PB ACADEMY</span><br><span class="highlight program-hero-main">PROGRAMS</span></h1>
                <!-- <h3 class="hero-tagline" style="margin-top: 15px; font-weight: 700; letter-spacing: 1px;">Learn. Practice. Play. Improve.</h3> -->
                <!-- <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.15rem; max-width: 800px; margin: 25px auto 0; line-height: 1.6; text-shadow: 0 2px 15px rgba(0, 0, 0, 0.7);">Whether someone has never picked up a paddle or wants to improve their existing game, PB Academy offers structured programs designed to help players learn at their own pace while building skills, confidence and enjoyment of pickleball.</p> -->

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#lessons" class="qj-link">Lessons</a>
                        <a href="#core-4" class="qj-link qj-link--highlight">PBA Core 4</a>
                        <a href="#clinics" class="qj-link">Clinics & Play</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="c4-promo-strip">
    <div class="container c4-promo-inner anim-fade-up">

        <div class="c4-promo-text">
            <span class="c4-badge">FEATURED PROGRAM</span>
            <h2>
                MASTER THE GAME WITH <span class="hl-pba">PBA</span> 
                <span class="core4-wrapper">
                    <span class="hl-core4">CORE 4</span>
                    <svg class="c4-crown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="var(--accent-orange)" stroke="var(--navy)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="2 5 6 16 18 16 22 5 16 10 12 2 8 10"></polygon>
                        <line x1="6" y1="20" x2="18" y2="20"></line>
                    </svg>
                </span>
            </h2>
            <p>Our exclusive 4-lesson beginner system. From zero experience to confident player in just 4 hours.</p>
        </div>
        <div class="c4-promo-actions">
            <button class="btn btn-navy" data-modal-target="core4Modal">VIEW MORE</button>
            <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-outline-white" style="border-color: var(--navy); color: var(--navy);">REGISTER NOW</a>
        </div>
    </div>
</section>

    <!-- ============================================================
         PHASE 2: LESSONS CATEGORY & PROGRESSION BAR
         ============================================================ -->
             <section id="core-4" class="lp-core4-section">
        <div class="container lp-core4-container anim-fade-up">
            <div class="lp-core4-header">
                <h2>PBA CORE 4</h2>
                <h4>The Complete 4-Lesson Beginner Package</h4>
                <p>Core 4 is PB Academy's structured beginner program designed to take someone from learning the fundamentals to actually playing the game with greater confidence.</p>
            </div>
            
            <div class="lp-core4-grid">
                <div class="core4-lesson">
                    <span class="core4-num">1</span>
                    <div class="core4-text">
                        <h3>LESSON 1 — GET STARTED</h3>
                        <p>Introduction, safety, equipment, court basics and fundamental skills.</p>
                    </div>
                </div>
                <div class="core4-lesson">
                    <span class="core4-num">2</span>
                    <div class="core4-text">
                        <h3>LESSON 2 — PLAY THE GAME</h3>
                        <p>Serving, returning, scoring, side-out, ball in/out and basic rules.</p>
                    </div>
                </div>
                <div class="core4-lesson">
                    <span class="core4-num">3</span>
                    <div class="core4-text">
                        <h3>LESSON 3 — PLAY BETTER</h3>
                        <p>Developing shots, movement, positioning and better control.</p>
                    </div>
                </div>
                <div class="core4-lesson">
                    <span class="core4-num">4</span>
                    <div class="core4-text">
                        <h3>LESSON 4 — PLAY TO WIN</h3>
                        <p>Strategy, partner communication, point construction and supervised play.</p>
                    </div>
                </div>
            </div>
            
            <div class="hero-buttons" style="margin-top: 40px;">
                <a href="#" class="btn btn-outline-white">LEARN MORE</a>
                <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-green">REGISTER NOW</a>
            </div>
        </div>
    </section>
    <section id="lessons" class="container" style="padding: 80px 20px;">
        <h2 class="lp-section-title">PROGRAM CATEGORY 1 — LESSONS</h2>
        
        <!-- 4-Column Grid for Lessons (Avoids orphaned cards) -->
        <div class="lp-lessons-grid anim-fade-up">
            
            <!-- Card 1: Private -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/lesson-private.jpg" alt="Private Lessons" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <span class="lp-card-tag">1-ON-1</span>
                    <h3>Private Lessons</h3>
                    <p>Personalized instruction tailored completely to your pace and goals.</p>
                    <div class="lp-meta">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 60 Mins</span>
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 1 Player</span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>

            <!-- Card 2: Semi-Private -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/lesson-semiprivate.jpg" alt="Semi-Private Lessons" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <span class="lp-card-tag">2 PLAYERS</span>
                    <h3>Semi-Private Lessons</h3>
                    <p>Learn alongside a friend or partner with focused, shared instruction.</p>
                    <div class="lp-meta">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 60 Mins</span>
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> 2 Players</span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>

            <!-- Card 3: Small Group -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/lesson-smallgroup.jpg" alt="Small Group Lessons" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <span class="lp-card-tag">3-4 PLAYERS</span>
                    <h3>Small Group Lessons</h3>
                    <p>Perfect for a group of friends wanting to learn and practice together.</p>
                    <div class="lp-meta">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 60 Mins</span>
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> 3-4 Players</span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>

            <!-- Card 4: Group -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/lesson-group.jpg" alt="Group Lessons" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <span class="lp-card-tag">5+ PLAYERS</span>
                    <h3>Group Lessons</h3>
                    <p>A fun, social environment to learn the game and meet new players.</p>
                    <div class="lp-meta">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 60-90 Mins</span>
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> 5+ Players</span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>
        </div>

        <!-- Player Development Progression Visual -->
        <div class="lp-progression-bar anim-fade-up">
            <h3 style="text-align:center; font-family:var(--font-heading); color:var(--navy); font-size:1.4rem; margin-bottom:20px; text-transform:uppercase;">PLAYER DEVELOPMENT PATH</h3>
            <div class="hero-progression" style="background:var(--navy); padding:24px 20px; border-radius:12px; box-shadow:0 10px 30px rgba(11,32,70,0.15);">
                <span class="btn btn-outline-white prog-badge" style="background:rgba(255,255,255,0.05);">BEGINNER</span>
                <svg class="prog-arrow" width="24" height="24" style="flex-shrink:0;" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                <span class="btn btn-outline-white prog-badge" style="background:rgba(255,255,255,0.05);">CORE 4</span>
                <svg class="prog-arrow" width="24" height="24" style="flex-shrink:0;" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                <span class="btn btn-outline-white prog-badge" style="background:rgba(255,255,255,0.05);">SKILLS & STRATEGY</span>
                <svg class="prog-arrow" width="24" height="24" style="flex-shrink:0;" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                <span class="btn btn-outline-white prog-badge" style="background:rgba(255,255,255,0.05);">ORGANIZED PLAY</span>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PHASE 3: PBA CORE 4 (PROMINENT FEATURE)
         ============================================================ -->


    <!-- ============================================================
         PHASE 4: CLINICS, PLAY & FINAL CTA
         ============================================================ -->
    <section id="clinics" class="container" style="padding: 80px 20px;">
        <h2 class="lp-section-title">PROGRAM CATEGORY 3 — CLINICS & PLAY</h2>
        
        <div class="lp-clinics-grid anim-fade-up">
            <!-- Clinic 1 -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/clinic-skills.jpg" alt="Skills Clinics" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <h3>Skills Clinics</h3>
                    <p>Targeted sessions focusing on specific mechanics like dinking, serving, or drops.</p>
                    <div class="lp-meta" style="flex-direction: column; gap: 6px;">
                        <span><svg width="20" height="20" style="flex-shrink: 0; min-width: 20px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Upcoming Dates Available</strong></span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>

            <!-- Clinic 2 -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/clinic-strategy.jpg" alt="Strategy Clinics" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <h3>Strategy Clinics</h3>
                    <p>Elevate your court IQ with advanced positioning and point-construction drills.</p>
                    <div class="lp-meta" style="flex-direction: column; gap: 6px;">
                        <span><svg width="20" height="20" style="flex-shrink: 0; min-width: 20px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Upcoming Dates Available</strong></span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>

            <!-- Clinic 3 -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/clinic-practice.jpg" alt="Instructor-Observed Practice" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <h3>Instructor-Observed Play</h3>
                    <p>Play live games while receiving real-time tactical feedback from a certified coach.</p>
                    <div class="lp-meta" style="flex-direction: column; gap: 6px;">
                        <span><svg width="20" height="20" style="flex-shrink: 0; min-width: 20px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Upcoming Dates Available</strong></span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>

            <!-- Clinic 4 -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/clinic-tournament.jpg" alt="Tournament Preparation" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <h3>Tournament Preparation</h3>
                    <p>High-intensity drilling designed to prepare you and your partner for competition.</p>
                    <div class="lp-meta" style="flex-direction: column; gap: 6px;">
                        <span><svg width="20" height="20" style="flex-shrink: 0; min-width: 20px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Upcoming Dates Available</strong></span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>

            <!-- Clinic 5 -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/clinic-roundrobin.jpg" alt="Round Robins" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <h3>Round Robins & Organized Play</h3>
                    <p>Structured, competitive, and social play matched by skill level.</p>
                    <div class="lp-meta" style="flex-direction: column; gap: 6px;">
                        <span><svg width="20" height="20" style="flex-shrink: 0; min-width: 20px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Upcoming Dates Available</strong></span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>

            <!-- Clinic 6 -->
            <div class="lp-card">
                <img src="<?php echo get_template_directory_uri(); ?>/media/clinic-social.jpg" alt="Special Events" onerror="this.style.display='none'">
                <div class="lp-card-body">
                    <h3>Special Events & Social Play</h3>
                    <p>Themed play days, mixers, and relaxed events focused purely on community and fun.</p>
                    <div class="lp-meta" style="flex-direction: column; gap: 6px;">
                        <span><svg width="20" height="20" style="flex-shrink: 0; min-width: 20px;" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Upcoming Dates Available</strong></span>
                    </div>
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy lp-card-btn" style="width: 100%; margin-top: auto;">REGISTER NOW</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         FINAL CTA: NOT SURE WHERE TO START?
         ============================================================ -->
    <section class="lp-final-cta-section anim-fade-up">
        <div class="container" style="text-align: center;">
            <h2 style="font-family: var(--font-heading); color: var(--navy); font-size: clamp(2rem, 4vw, 2.5rem); font-weight: 900; text-transform: uppercase; margin-bottom: 15px;">Not Sure Where to Start?</h2>
            <p style="font-size: 1.15rem; color: var(--gray-text); max-width: 600px; margin: 0 auto 30px; line-height: 1.6;">Answer a few simple questions or contact PB Academy and we'll help you choose the appropriate program.</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-navy">HELP ME CHOOSE</a>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-green">CONTACT US</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
