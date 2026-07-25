<?php
/**
 * Template Name: Retreats & Cruises
 */
get_header(); ?>

<style>
/* ============================================================
   RETREATS HERO REDESIGN (Matches Front Page + Fixes Visibility)
   ============================================================ */
.retreat-hero-full {
    background-image: url('<?php echo get_template_directory_uri(); ?>/media/retreat-hero-bg.webp');
    background-position: center top; /* Keeps faces pinned to the top */
    background-size: cover;
    background-repeat: no-repeat;
    align-items: flex-end; /* Pushes content down */
    padding-top: 150px; /* Leaves space at the top for faces on desktop */
}

/* DESKTOP GRADIENT: Fades to transparent at the top-right to reveal the image */
.retreat-hero-full::before {
    width: 100%;
    background: linear-gradient(to top right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.9) 45%, rgba(255, 255, 255, 0) 60%);
}

/* Replicate Contact Page Tag Styles */
.ct-hero-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
}
.ct-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(11, 32, 70, 0.05);
    border: 1px solid rgba(11, 32, 70, 0.1);
    color: var(--navy);
    font-family: var(--font-heading);
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    padding: 6px 14px;
    border-radius: 50px;
}

/* MOBILE RESPONSIVENESS */
@media (max-width: 992px) {
    .retreat-hero-full {
        padding-top: 250px;
    }
}

@media (max-width: 768px) {
    .retreat-hero-full {
        padding-top: 280px; 
        padding-bottom: 40px;
    }
    /* MOBILE GRADIENT: Solid white at the bottom, transparent at the top */
    .retreat-hero-full::before {
        display: block !important; /* Overrides style.css hiding ::before on mobile */
        background: linear-gradient(to top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.95) 55%, rgba(255, 255, 255, 0) 100%);
    }
    /* Overrides style.css forcing text to be white on mobile hero banners */
    .retreat-hero-full .hero-subtitle,
    .retreat-hero-full .hero-left h1,
    .retreat-hero-full .hero-left p,
    .retreat-hero-full .hero-list li,
    .retreat-hero-full .hero-right-header h3 {
        color: var(--navy) !important;
    }
    .retreat-hero-full .hero-right {
        margin-top: 20px;
    }
    .ct-hero-tags {
        justify-content: center;
    }
}
</style>

<main class="retreats-page">

    <!-- 1. REDESIGNED HERO SECTION -->
    <section class="hero retreat-hero-full">
        <div class="hero-container">
            
            <div class="hero-left anim-fade-right">
                <h2 class="hero-subtitle">PLAY. EXPLORE. CONNECT.</h2>
                <h1>RETREATS &amp;<br><span class="highlight">CRUISES</span></h1>
                <p>Combine your passion for pickleball with unforgettable vacations. Join us at breathtaking resorts and luxury cruises for world-class coaching, daily open play, and amazing new friends from around the world.</p>
                
                <div class="ct-hero-tags">
                    <span class="ct-tag">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
                        Daily Pickleball
                    </span>
                    <span class="ct-tag">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        New Friends
                    </span>
                    <span class="ct-tag">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        Epic Destinations
                    </span>
                </div>
            </div>
            
            <div class="hero-right anim-fade-left">
                <div class="hero-right-header">
                    <h3>WHY JOIN US?</h3>
                </div>
                <div class="hero-right-body">
                    <ul class="hero-list">
                        <li>Improve skills with expert coaching</li>
                        <li>Enjoy daily open play &amp; events</li>
                        <li>Discover beautiful new places</li>
                        <li>All-inclusive luxury &amp; convenience</li>
                        <li>Fun, safe, and beginner-friendly</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- 2. Upcoming Retreats & Cruises (Grid Section) -->
    <section class="r-section r-upcoming bg-gray">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">UPCOMING RETREATS & CRUISES</h2>
            
            <div class="r-grid r-grid--upcoming anim-fade-up">
                <!-- Card 1 -->
                <article class="r-card">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=800&auto=format&fit=crop')"></div>
                    <div class="r-card__content">
                        <h3 class="r-card__title">Punta Cana Paradise Retreat</h3>
                        <p class="r-card__location">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--gray-text)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Dominican Republic
                        </p>
                        <ul class="r-card__features">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Daily Pickleball Clinics</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> All-Inclusive Resort</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Beachfront Play</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Social Mixers</li>
                        </ul>
                        <a href="<?php echo site_url('/contact-us/'); ?>" class="btn btn-green">LEARN MORE <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 16px; height: 16px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="r-card">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1548574505-5e239809ee19?q=80&w=800&auto=format&fit=crop')"></div>
                    <div class="r-card__content">
                        <h3 class="r-card__title">Caribbean Explorer Cruise</h3>
                        <p class="r-card__location">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--gray-text)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Miami to Bahamas
                        </p>
                        <ul class="r-card__features">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> On-board Courts</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Island Excursions</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> VIP Dining</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Pro Exhibitions</li>
                        </ul>
                        <a href="<?php echo site_url('/contact-us/'); ?>" class="btn btn-green">LEARN MORE <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 16px; height: 16px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="r-card">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?q=80&w=800&auto=format&fit=crop')"></div>
                    <div class="r-card__content">
                        <h3 class="r-card__title">Aruba Sun & Sand Retreat</h3>
                        <p class="r-card__location">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--gray-text)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Palm Beach, Aruba
                        </p>
                        <ul class="r-card__features">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Advanced Coaching</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Luxury Villas</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Sunset Sails</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Spa Access</li>
                        </ul>
                        <a href="<?php echo site_url('/contact-us/'); ?>" class="btn btn-green">LEARN MORE <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 16px; height: 16px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                    </div>
                </article>

                <!-- Card 4 -->
                <article class="r-card">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=800&auto=format&fit=crop')"></div>
                    <div class="r-card__content">
                        <h3 class="r-card__title">Grecian Odyssey Retreat</h3>
                        <p class="r-card__location">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--gray-text)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Santorini, Greece
                        </p>
                        <ul class="r-card__features">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Mediterranean Views</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Cultural Tours</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Daily Match Play</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Wine Tasting</li>
                        </ul>
                        <a href="<?php echo site_url('/contact-us/'); ?>" class="btn btn-green">LEARN MORE <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 16px; height: 16px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                    </div>
                </article>

                <!-- Card 5 (CTA) -->
                <article class="r-card r-card--cta">
                    <div class="r-card__cta-content">
                        <svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="r-cta-icon"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle><path d="M12 22V10"></path></svg>
                        <h3>INTERESTED IN A FUTURE TRIP?</h3>
                        <p>Join our waitlist to get early access to new destinations, special pricing, and exclusive updates before they sell out.</p>
                        <a href="<?php echo site_url('/contact-us/'); ?>" class="btn btn-navy">JOIN THE LIST</a>
                    </div>
                </article>
            </div>

            <!-- Bottom Trust Bar -->
            <div class="r-trust-bar anim-fade-up">
                <div class="r-trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <div class="r-trust-text">
                        <h4>Safe & Well Organized</h4>
                        <p>We handle all the details so you can relax.</p>
                    </div>
                </div>
                <div class="r-trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    <div class="r-trust-text">
                        <h4>Expert Coaching</h4>
                        <p>Learn from certified, top-rated pros.</p>
                    </div>
                </div>
                <div class="r-trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <div class="r-trust-text">
                        <h4>Community & Friendship</h4>
                        <p>Connect with players who share your passion.</p>
                    </div>
                </div>
                <div class="r-trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    <div class="r-trust-text">
                        <h4>Fun & Relaxation</h4>
                        <p>The perfect balance of active play and downtime.</p>
                    </div>
                </div>
            </div>
            
            <div class="r-contact-banner anim-fade-up">
                <p>HAVE A DESTINATION IN MIND? <a href="/contact" class="btn btn-outline-white">CONTACT US</a></p>
            </div>
        </div>
    </section>

    <!-- 3. Retreats Deep Dive Section -->
    <section class="r-section r-deep-dive">
        <div class="container">
            <div class="r-intro-block anim-fade-up">
                <h2>What is a Pickleball Retreat?</h2>
                <div class="r-intro-content">
                    <p>A pickleball retreat is a curated vacation experience designed around your favorite sport. We combine world-class instruction, structured play, and breathtaking resort destinations into an all-inclusive package. It's the ultimate way to level up your game while enjoying a luxurious getaway.</p>
                    <ul class="r-checkmark-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Immersive pickleball experience</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Tailored instruction for all levels</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Luxury accommodations</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Organized social events</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Local cultural excursions</li>
                    </ul>
                </div>
            </div>
            
            <h3 class="r-subsection-title anim-fade-up">Types of Pickleball Retreats</h3>
            <div class="r-types-grid anim-fade-up">
                <div class="r-type-col">
                    <div class="r-type-img" style="background-image: url('https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=600&auto=format&fit=crop')"></div>
                    <h4>Weekend Getaway</h4>
                    <ul>
                        <li>2-3 Days</li>
                        <li>Intensive Clinics</li>
                        <li>Quick Recharge</li>
                    </ul>
                    <span class="r-tag">Best for: Busy schedules</span>
                </div>
                <div class="r-type-col">
                    <div class="r-type-img" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=600&auto=format&fit=crop')"></div>
                    <h4>Week-Long Escape</h4>
                    <ul>
                        <li>5-7 Days</li>
                        <li>Deep Skill Building</li>
                        <li>Balanced Pace</li>
                    </ul>
                    <span class="r-tag">Best for: Full vacations</span>
                </div>
                <div class="r-type-col">
                    <div class="r-type-img" style="background-image: url('https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=600&auto=format&fit=crop')"></div>
                    <h4>Luxury VIP</h4>
                    <ul>
                        <li>5-Star Resorts</li>
                        <li>Private Coaching</li>
                        <li>Gourmet Dining</li>
                    </ul>
                    <span class="r-tag">Best for: Premium comfort</span>
                </div>
                <div class="r-type-col">
                    <div class="r-type-img" style="background-image: url('https://images.unsplash.com/photo-1554469384-e58fac16e23a?q=80&w=600&auto=format&fit=crop')"></div>
                    <h4>Skill Focus</h4>
                    <ul>
                        <li>Level-Specific</li>
                        <li>Video Analysis</li>
                        <li>Strategy Sessions</li>
                    </ul>
                    <span class="r-tag">Best for: Competitive players</span>
                </div>
                <div class="r-type-col">
                    <div class="r-type-img" style="background-image: url('https://images.unsplash.com/photo-1527529482837-4698179dc6ce?q=80&w=600&auto=format&fit=crop')"></div>
                    <h4>Social & Fun</h4>
                    <ul>
                        <li>Open Play Focused</li>
                        <li>Round Robins</li>
                        <li>Evening Mixers</li>
                    </ul>
                    <span class="r-tag">Best for: Meeting people</span>
                </div>
            </div>

            <div class="r-split-section anim-fade-up">
                <div class="r-split-left">
                    <h3>Benefits of Going</h3>
                    <ul class="r-checkmark-list r-checkmark-list--stacked">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Rapidly improve your technique and game strategy</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Make lasting friendships with like-minded players</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Reduce stress through active, healthy travel</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Explore new cultures and stunning environments</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Enjoy a completely hassle-free, planned itinerary</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Return home refreshed and playing better than ever</li>
                    </ul>
                </div>
                <div class="r-split-right bg-navy">
                    <h3>What to Consider</h3>
                    <ul class="r-icon-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path></svg> <strong>Location:</strong> Beach, mountain, or city?</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg> <strong>Level:</strong> Ensure the clinic matches your DUPR/rating.</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <strong>Duration:</strong> How many days of play do you want?</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> <strong>Budget:</strong> From standard to ultra-luxury options.</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path></svg> <strong>Group Size:</strong> Intimate groups vs larger social events.</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg> <strong>Focus:</strong> Intense training or relaxed vacation?</li>
                    </ul>
                </div>
            </div>

            <div class="r-dest-sidebar-wrapper anim-fade-up">
                <div class="r-dest-grid-container">
                    <h3 class="r-subsection-title">Popular Retreat Destinations</h3>
                    <div class="r-image-grid r-image-grid-4">
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?q=80&w=800&auto=format&fit=crop')"><span>Beach Resorts</span></div>
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=800&auto=format&fit=crop')"><span>Mountain Lodges</span></div>
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1509316785289-025f5b846b35?q=80&w=800&auto=format&fit=crop')"><span>Desert Oasis</span></div>
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?q=80&w=800&auto=format&fit=crop')"><span>City Escapes</span></div>
                    </div>
                </div>
                <aside class="r-sidebar bg-gray">
                    <h3>What's Included?</h3>
                    <ul class="r-sidebar-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Daily Pickleball Court Time</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Expert Coaching & Clinics</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Friendly Tournaments</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Premium Accommodations</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Meals & Beverages</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Welcome Swag Bag</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Group Excursions</li>
                    </ul>
                </aside>
            </div>

            <!-- Reusable Component: Who Can Go -->
            <div class="r-who-can-go anim-fade-up">
                <h3>Who Can Go?</h3>
                <div class="r-who-grid">
                    <div class="r-who-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg><span>Beginners</span></div>
                    <div class="r-who-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg><span>Intermediate</span></div>
                    <div class="r-who-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><span>Advanced</span></div>
                    <div class="r-who-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg><span>Couples</span></div>
                    <div class="r-who-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><span>Friends</span></div>
                    <div class="r-who-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span>Solo Travelers</span></div>
                </div>
            </div>
            
            <!-- Reusable Component: Daily Schedule -->
            <div class="r-schedule-component anim-fade-up">
                <h3 class="r-subsection-title">Sample Daily Schedule</h3>
                <div class="r-schedule-table">
                    <div class="r-schedule-row">
                        <div class="r-time">7:00 AM</div>
                        <div class="r-activity">Breakfast & Coffee</div>
                    </div>
                    <div class="r-schedule-row">
                        <div class="r-time">8:30 AM</div>
                        <div class="r-activity">Morning Clinic (Drills & Strategy)</div>
                    </div>
                    <div class="r-schedule-row">
                        <div class="r-time">10:30 AM</div>
                        <div class="r-activity">Open Play / Round Robin</div>
                    </div>
                    <div class="r-schedule-row">
                        <div class="r-time">12:30 PM</div>
                        <div class="r-activity">Group Lunch</div>
                    </div>
                    <div class="r-schedule-row">
                        <div class="r-time">2:00 PM</div>
                        <div class="r-activity">Free Time (Beach, Spa, Explore)</div>
                    </div>
                    <div class="r-schedule-row">
                        <div class="r-time">4:30 PM</div>
                        <div class="r-activity">Sunset Match Play (Optional)</div>
                    </div>
                    <div class="r-schedule-row">
                        <div class="r-time">7:00 PM</div>
                        <div class="r-activity">Group Dinner & Social Mixer</div>
                    </div>
                </div>
            </div>

            <!-- Reusable Component: Tips -->
            <div class="r-tips-component anim-fade-up bg-gray">
                <h3>Tips for a Great Retreat</h3>
                <ul class="r-tips-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Bring a positive attitude and readiness to learn.</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Stay hydrated and pack plenty of sunscreen.</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Don't overdo it—listen to your body and rest when needed.</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Introduce yourself to new players early on.</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- 4. Cruises Deep Dive Section -->
    <section class="r-section r-deep-dive bg-gray">
        <div class="container">
            <div class="r-intro-block anim-fade-up">
                <h2>What is a Pickleball Cruise?</h2>
                <div class="r-intro-content">
                    <p>Imagine waking up in a new country every day, while never missing your morning pickleball game. Our pickleball cruises charter ships with dedicated onboard courts, allowing you to seamlessly blend the adventure of cruising with your love for the game.</p>
                </div>
            </div>

            <div class="r-feature-strip anim-fade-up">
                <h3 class="sr-only">The Ultimate Pickleball Vacation</h3>
                <div class="r-feature-strip-inner">
                    <div class="r-f-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--white)" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> Play Daily</div>
                    <div class="r-f-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--white)" stroke-width="1.5"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg> Coaching</div>
                    <div class="r-f-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--white)" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path></svg> Social Events</div>
                    <div class="r-f-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--white)" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Destinations</div>
                    <div class="r-f-item"><svg viewBox="0 0 24 24" fill="none" stroke="var(--white)" stroke-width="1.5"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line></svg> Relax</div>
                </div>
            </div>

            <div class="r-dest-sidebar-wrapper anim-fade-up">
                <div class="r-dest-grid-container">
                    <h3 class="r-subsection-title">Popular Cruise Destinations</h3>
                    <div class="r-image-grid r-image-grid-6">
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1548574505-5e239809ee19?q=80&w=800&auto=format&fit=crop')"><span>Caribbean</span></div>
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1454496522488-7a8e488e8606?q=80&w=800&auto=format&fit=crop')"><span>Alaska</span></div>
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1499678329028-101435549a4e?q=80&w=800&auto=format&fit=crop')"><span>Mediterranean</span></div>
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1542259009477-d625272157b7?q=80&w=800&auto=format&fit=crop')"><span>Hawaii</span></div>
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1519046904884-53103b34b206?q=80&w=800&auto=format&fit=crop')"><span>Bahamas</span></div>
                        <div class="r-grid-img" style="background-image: url('https://images.unsplash.com/photo-1599839619722-39751411ea63?q=80&w=800&auto=format&fit=crop')"><span>Panama Canal</span></div>
                    </div>
                </div>
                <aside class="r-sidebar bg-white">
                    <h3>What's Included?</h3>
                    <ul class="r-sidebar-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> On-board Court Access</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Sea-Day Clinics & Drills</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Private Cocktail Parties</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Port Excursions</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> All Cruise Dining & Entertainment</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Dedicated Group Host</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Ocean-view or Balcony Staterooms</li>
                    </ul>
                </aside>
            </div>

            <div class="r-cruise-logos anim-fade-up">
                <h3>Cruise Lines That Offer Pickleball</h3>
                <div class="r-logos-strip">
                    <div class="r-logo-placeholder">Margaritaville at Sea</div>
                    <div class="r-logo-placeholder">Royal Caribbean</div>
                    <div class="r-logo-placeholder">Princess Cruises</div>
                    <div class="r-logo-placeholder">Norwegian Cruise Line</div>
                    <div class="r-logo-placeholder">Celebrity Cruises</div>
                </div>
            </div>

        </div>
    </section>

    <!-- 6. Global CTA Footer -->
    <section class="r-global-cta anim-fade-up">
        <div class="r-global-cta__bg" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1920&auto=format&fit=crop');"></div>
        <div class="r-global-cta__overlay"></div>
        <div class="container r-global-cta__content">
            <h2>READY TO BOOK?</h2>
            <p class="r-global-cta__sub">Spots fill up fast!</p>
            <p class="r-global-cta__tagline">Play Hard. Relax More. Make Memories That Last.</p>
            <div class="r-global-cta__actions">
                <a href="#upcoming" class="btn btn-green">VIEW UPCOMING TRIPS</a>
                <a href="/contact" class="btn btn-outline-white">CONTACT SUPPORT</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>