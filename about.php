<?php
/*
Template Name: About Us Page
*/
get_header(); 
?>

<main class="about-page">

    <!-- Hero Section -->
    <section class="hero about-hero-full" data-mascot-msg="We teach. We play. We care. Welcome to the PBA family!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/about-hero-bg.webp" alt="About PB Academy" aria-hidden="true">
        <div class="hero-container">
            <div class="hero-content anim-fade-right">
                <h2 class="hero-subtitle">MORE THAN A GAME</h2>
                <h1>ABOUT <br><span class="highlight">PBA</span></h1>
                <p class="hero-intro-text" style="color: rgba(255, 255, 255, 0.95); font-size: 1.15rem; margin-top: 15px; margin-bottom: 30px; text-shadow: 0 2px 15px rgba(0, 0, 0, 0.7); max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.6;">PB Academy is a pickleball instruction and player-development academy designed to make learning pickleball simple, structured, welcoming and fun.</p>
                <div class="hero-progression">
                    <span class="btn btn-outline-white prog-badge">LEARN</span>
                    <svg class="prog-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    <span class="btn btn-outline-white prog-badge">PRACTICE</span>
                    <svg class="prog-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    <span class="btn btn-outline-white prog-badge">PLAY</span>
                    <svg class="prog-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    <span class="btn btn-outline-white prog-badge">CONNECT</span>
                </div>

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#who-we-are" class="qj-link">Who We Are</a>
                        <a href="#who-we-serve" class="qj-link">Who We Serve</a>
                        <a href="#get-started" class="qj-link">Get Started</a>
                        <a href="#contact" class="qj-link">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Narrative Section -->
    <section id="who-we-are" class="about-narrative-section container" data-mascot-msg="Learning pickleball should never feel intimidating.">
        
        <!-- Row 1: Image Left, Text Right -->
        <div class="about-narrative-grid anim-fade-up is-visible">
            <div class="ang-image">
                <img src="<?php echo get_template_directory_uri(); ?>/media/about-court-banner.jpg" alt="Pickleball Court" class="about-img-shadow">
            </div>
            <div class="about-narrative-content">
                <h3>WHO WE ARE</h3>
                <p>PB Academy is a pickleball instruction and player-development academy designed to make learning pickleball simple, structured, welcoming and fun.</p>
                <p>We especially welcome beginners, adults and seniors who want to learn the game properly and develop confidence before stepping into regular recreational play.</p>
                
                <h3 class="mt-40">OUR MISSION</h3>
                <p>Our mission is to help players learn the fundamentals of pickleball in a comfortable and encouraging environment while emphasizing safety, confidence, sportsmanship and enjoyment of the game.</p>
            </div>
        </div>

        <!-- Row 2: Text Left, Image Right -->
        <div class="about-narrative-grid anim-fade-up is-visible">
            <div class="about-narrative-content">
                <h3>OUR APPROACH</h3>
                <p>We believe learning pickleball should never feel intimidating.</p>
                <p>Instruction should be easy to understand, progressive and practical. Players learn step by step, practice what they learn and gradually develop the skills and confidence to enjoy playing with others.</p>
                
                <h3 class="mt-40">MORE THAN LESSONS</h3>
                <p>PB Academy is being developed as more than a place to take a pickleball lesson.</p>
                <p>The Academy brings together instruction, structured programs, clinics, organized play, events, educational resources, our Beginner Manual, retreats and a growing pickleball community.</p>
            </div>
            <div class="ang-image ang-reverse">
                <img src="<?php echo get_template_directory_uri(); ?>/media/about-founder-charles2.jpg" alt="Charles Azoulay" class="about-img-shadow">
            </div>
        </div>
    </section>

    <!-- Target Audience & Promise Section -->
    <section id="who-we-serve" class="about-lists-section">
        <div class="about-lists-grid">
            <!-- Column 1 -->
            <div class="about-list-col anim-fade-up is-visible">
                <h3>WHO WE SERVE</h3>
                <ul class="about-ul-basic">
                    <li>Beginners</li>
                    <li>Adults and seniors</li>
                    <li>Players returning to the game</li>
                    <li>Players wanting stronger fundamentals</li>
                    <li>Communities and HOAs</li>
                    <li>Country clubs</li>
                    <li>Pickleball clubs</li>
                    <li>Private and small groups</li>
                </ul>
            </div>
            <!-- Column 2 -->
            <div class="about-list-col anim-fade-up is-visible" style="transition-delay: 150ms;">
                <h3>OUR PROMISE</h3>
                <ul class="about-ul-check">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Welcoming</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Easy to understand</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Safety conscious</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Professionally organized</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Social and enjoyable</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Focused on helping players improve at their own pace</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Specific About Page CTA Bar -->
    <section id="get-started" class="about-cta-banner container anim-scale-in is-visible">
        <div class="acb-inner acb-about-override">
            <div class="acb-text">
                <h2>Ready to Start Playing?</h2>
            </div>
            <div class="hero-buttons">
                <a href="<?php echo home_url('/program-and-lessons/'); ?>" class="btn btn-navy">EXPLORE PROGRAMS</a>
                <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-green">BOOK A SESSION</a>
            </div>
        </div>
    </section>

    <!-- Dark Blue Pre-Footer Bar -->
    <section id="contact" class="about-prefooter" data-mascot-msg="Need help? Give us a call at 561-855-9500.">
        <div class="container prefooter-grid">
            <div class="pf-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <div>
                    <h5>BEGINNER FOCUSED</h5>
                    <p>We make learning simple and fun.</p>
                </div>
            </div>
            <div class="pf-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polygon points="12 13 14.5 14.5 14 11.5 16 9.5 13 9.5 12 7 11 9.5 8 9.5 10 11.5 9.5 14.5 12 13"/></svg>
                <div>
                    <h5>SAFE & SUPPORTIVE</h5>
                    <p>Your safety and success are our priority.</p>
                </div>
            </div>
            <div class="pf-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="18" y="3" width="4" height="18"/><rect x="10" y="8" width="4" height="13"/><rect x="2" y="13" width="4" height="8"/></svg>
                <div>
                    <h5>PROVEN RESULTS</h5>
                    <p>Build skills, confidence, and friendships.</p>
                </div>
            </div>
            <div class="pf-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <div>
                    <h5>LOCAL & TRUSTED</h5>
                    <p>Proudly serving Pickle Ball Academy.</p>
                </div>
            </div>
            <div class="pf-item pf-contact">
                <div>
                    <h5>PREFER TO CALL?</h5>
                    <p class="pf-highlight">561-855-9500</p>
                    <p>Mon - Sun: 7am - 8pm</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>