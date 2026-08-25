<?php
/**
 * Template Name: Retreats & Cruises
 */
get_header(); ?>

<main class="retreats-page">

    <!-- ============================================================
         PHASE 1: REDESIGNED HERO SECTION (Static Image)
         ============================================================ -->
    <section class="hero retreat-hero-full" data-mascot-msg="Combine your passion for pickleball with unforgettable vacations!" style="padding: 40px 19px!important;  ">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/new-retreat-hero-bg.webp" alt="Pickleball Retreats" aria-hidden="true" style="object-fit: cover; " >
        <div class="hero-container" style="padding-bottom: 0px !important;">
            <div class="hero-content anim-fade-up">
                <!-- <h2 class="hero-subtitle">Play. Learn. Travel. Connect.</h2> -->
                <!-- <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1;">PB ACADEMY <br><span class="highlight">PICKLEBALL RETREATS</span></h1> -->
                <!-- <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.15rem; max-width: 800px; margin: 25px auto 0; line-height: 1.6; text-shadow: 0 2px 15px rgba(0, 0, 0, 0.7);">PB Academy Retreats bring together pickleball instruction, organized play, travel, relaxation and social activities in carefully selected destinations. The experience should especially appeal to adults and seniors who enjoy pickleball but also want to meet people, travel and have fun.</p> -->

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#upcoming" class="qj-link">Upcoming Retreats</a>
                        <a href="#retreats-info" class="qj-link">About Retreats</a>
                        <a href="#cruises-info" class="qj-link">About Cruises</a>
                        <a href="#interest-list" class="qj-link">Join Interest List</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PHASE 2: UPCOMING RETREATS (Data-Heavy Cards)
         ============================================================ -->
    <section class="r-section r-upcoming bg-gray" id="upcoming" data-mascot-msg="Check out our upcoming retreats and secure your spot before they sell out.">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">UPCOMING RETREATS</h2>
            
            <div class="r-grid r-grid--upcoming anim-fade-up">
                <!-- Card 1 -->
                <article class="r-card anim-fade-up anim-stagger" style="--stagger-delay: 0ms;">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=800&auto=format&fit=crop')">
                        <span class="r-card__badge">Register Now</span>
                    </div>
                    <div class="r-card__content">
                        <h3 class="r-card__title" style="margin-bottom: 5px;">Punta Cana Paradise Retreat</h3>
                        <p class="r-card__location" style="margin-bottom: 20px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <strong>Destination:</strong> Dominican Republic
                        </p>
                        
                        <ul class="r-card-data-grid">
                            <li><strong>Resort/Hotel:</strong> Grand Bavaro Luxury</li>
                            <li><strong>Dates:</strong> Oct 12 - 18, 2026</li>
                            <li><strong>Duration:</strong> 6 Days / 5 Nights</li>
                            <li><strong>Courts:</strong> 8 Dedicated Courts</li>
                            <li><strong>Skill Level:</strong> All Levels (2.5 - 4.0+)</li>
                            <li><strong>Max Participants:</strong> 24 Players</li>
                            <li><strong>Instructors:</strong> Charles Azoulay & Team</li>
                            <li><strong>Package Price:</strong> From $2,499 pp</li>
                            <li><strong>Availability:</strong> <span style="color: var(--green); font-weight: bold;">Available</span></li>
                        </ul>

                        <div class="r-card__actions" style="display: flex; gap: 10px; margin-top: auto;">
                            <a href="#" class="btn btn-outline" style="flex: 1; padding: 12px 10px; font-size: 0.75rem;">VIEW RETREAT</a>
                            <a href="#" class="btn btn-green" style="flex: 1; padding: 12px 10px; font-size: 0.75rem;">RESERVE / JOIN RETREAT</a>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="r-card anim-fade-up anim-stagger" style="--stagger-delay: 150ms;">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?q=80&w=800&auto=format&fit=crop')">
                        <span class="r-card__badge" style="background: var(--accent-orange); color: var(--navy);">Only 4 Spots Left</span>
                    </div>
                    <div class="r-card__content">
                        <h3 class="r-card__title" style="margin-bottom: 5px;">Aruba Sun & Sand Retreat</h3>
                        <p class="r-card__location" style="margin-bottom: 20px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <strong>Destination:</strong> Palm Beach, Aruba
                        </p>
                        
                        <ul class="r-card-data-grid">
                            <li><strong>Resort/Hotel:</strong> Aruba Marriott Resort</li>
                            <li><strong>Dates:</strong> Jan 10 - 15, 2027</li>
                            <li><strong>Duration:</strong> 5 Days / 4 Nights</li>
                            <li><strong>Courts:</strong> 6 Dedicated Courts</li>
                            <li><strong>Skill Level:</strong> Intermediate (3.0 - 4.0)</li>
                            <li><strong>Max Participants:</strong> 16 Players</li>
                            <li><strong>Instructors:</strong> Sarah Jenkins</li>
                            <li><strong>Package Price:</strong> From $2,199 pp</li>
                            <li><strong>Availability:</strong> <span style="color: var(--accent-orange); font-weight: bold;">Limited</span></li>
                        </ul>

                        <div class="r-card__actions" style="display: flex; gap: 10px; margin-top: auto;">
                            <a href="#" class="btn btn-outline" style="flex: 1; padding: 12px 10px; font-size: 0.75rem;">VIEW RETREAT</a>
                            <a href="#" class="btn btn-green" style="flex: 1; padding: 12px 10px; font-size: 0.75rem;">RESERVE / JOIN RETREAT</a>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="r-card anim-fade-up anim-stagger" style="--stagger-delay: 300ms;">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1548574505-5e239809ee19?q=80&w=800&auto=format&fit=crop')">
                        <span class="r-card__badge" style="background: var(--navy); color: var(--white);">Waitlist Available</span>
                    </div>
                    <div class="r-card__content">
                        <h3 class="r-card__title" style="margin-bottom: 5px;">Caribbean Explorer Cruise</h3>
                        <p class="r-card__location" style="margin-bottom: 20px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <strong>Destination:</strong> Miami to Bahamas
                        </p>
                        
                        <ul class="r-card-data-grid">
                            <li><strong>Resort/Hotel:</strong> Celebrity Apex Ship</li>
                            <li><strong>Dates:</strong> March 5 - 12, 2027</li>
                            <li><strong>Duration:</strong> 8 Days / 7 Nights</li>
                            <li><strong>Courts:</strong> 4 On-Board Courts</li>
                            <li><strong>Skill Level:</strong> All Levels Welcome</li>
                            <li><strong>Max Participants:</strong> 32 Players</li>
                            <li><strong>Instructors:</strong> Charles & Team</li>
                            <li><strong>Package Price:</strong> From $1,899 pp</li>
                            <li><strong>Availability:</strong> <span style="color: var(--navy); font-weight: bold;">Waitlist Only</span></li>
                        </ul>

                        <div class="r-card__actions" style="display: flex; gap: 10px; margin-top: auto;">
                            <a href="#" class="btn btn-outline" style="flex: 1; padding: 12px 10px; font-size: 0.75rem;">VIEW RETREAT</a>
                            <a href="#" class="btn btn-navy" style="flex: 1; padding: 12px 10px; font-size: 0.75rem;">JOIN WAITLIST</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 3. Retreats Deep Dive Section -->
    <section id="retreats-info" class="r-section r-deep-dive" data-mascot-msg="A curated vacation experience designed entirely around your favorite sport.">
        <div class="container">
            <div class="r-intro-block anim-fade-up">
                <h2>What is a Pickleball Retreat?</h2>
                <div class="r-intro-content">
                    <p>A pickleball retreat is a curated vacation experience designed around your favorite sport. We combine world-class instruction, structured play, and breathtaking resort destinations into an all-inclusive package. It's the ultimate way to level up your game while enjoying a luxurious getaway.</p>
                    <ul class="r-checkmark-list">
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 0ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Immersive pickleball experience</li>
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 150ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Tailored instruction for all levels</li>
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 300ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Luxury accommodations</li>
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 450ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Organized social events</li>
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 600ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Local cultural excursions</li>
                    </ul>
                </div>
            </div>
            
            <h3 class="r-subsection-title anim-fade-up">Types of Pickleball Retreats</h3>
            <div class="r-types-grid anim-fade-up">
                <div class="r-type-col anim-fade-up anim-stagger" style="--stagger-delay: 0ms;">
                    <div class="r-type-img" style="background-image: url('https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=600&auto=format&fit=crop')"></div>
                    <h4>Weekend Getaway</h4>
                    <ul>
                        <li>2-3 Days</li>
                        <li>Intensive Clinics</li>
                        <li>Quick Recharge</li>
                    </ul>
                    <span class="r-tag">Best for: Busy schedules</span>
                </div>
                <div class="r-type-col anim-fade-up anim-stagger" style="--stagger-delay: 150ms;">
                    <div class="r-type-img" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=600&auto=format&fit=crop')"></div>
                    <h4>Week-Long Escape</h4>
                    <ul>
                        <li>5-7 Days</li>
                        <li>Deep Skill Building</li>
                        <li>Balanced Pace</li>
                    </ul>
                    <span class="r-tag">Best for: Full vacations</span>
                </div>
                <div class="r-type-col anim-fade-up anim-stagger" style="--stagger-delay: 300ms;">
                    <div class="r-type-img" style="background-image: url('https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=600&auto=format&fit=crop')"></div>
                    <h4>Luxury VIP</h4>
                    <ul>
                        <li>5-Star Resorts</li>
                        <li>Private Coaching</li>
                        <li>Gourmet Dining</li>
                    </ul>
                    <span class="r-tag">Best for: Premium comfort</span>
                </div>
                <div class="r-type-col anim-fade-up anim-stagger" style="--stagger-delay: 450ms;">
                    <div class="r-type-img" style="background-image: url('https://images.unsplash.com/photo-1554469384-e58fac16e23a?q=80&w=600&auto=format&fit=crop')"></div>
                    <h4>Skill Focus</h4>
                    <ul>
                        <li>Level-Specific</li>
                        <li>Video Analysis</li>
                        <li>Strategy Sessions</li>
                    </ul>
                    <span class="r-tag">Best for: Competitive players</span>
                </div>
                <div class="r-type-col anim-fade-up anim-stagger" style="--stagger-delay: 600ms;">
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
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 0ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Rapidly improve your technique and game strategy</li>
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 150ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Make lasting friendships with like-minded players</li>
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 300ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Reduce stress through active, healthy travel</li>
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 450ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Explore new cultures and stunning environments</li>
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 600ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Enjoy a completely hassle-free, planned itinerary</li>
                        <li class="anim-fade-up anim-stagger" style="--stagger-delay: 750ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Return home refreshed and playing better than ever</li>
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
            <div class="r-who-can-go anim-fade-up" data-mascot-msg="No matter your skill level or who you travel with, there's a spot for you!">
                <h3>Who Can Go?</h3>
                <div class="r-who-grid">
                    <div class="r-who-item anim-fade-up anim-stagger" style="--stagger-delay: 0ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg><span>Beginners</span></div>
                    <div class="r-who-item anim-fade-up anim-stagger" style="--stagger-delay: 150ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg><span>Intermediate</span></div>
                    <div class="r-who-item anim-fade-up anim-stagger" style="--stagger-delay: 300ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><span>Advanced</span></div>
                    <div class="r-who-item anim-fade-up anim-stagger" style="--stagger-delay: 450ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg><span>Couples</span></div>
                    <div class="r-who-item anim-fade-up anim-stagger" style="--stagger-delay: 600ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><span>Friends</span></div>
                    <div class="r-who-item anim-fade-up anim-stagger" style="--stagger-delay: 750ms;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--navy)" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span>Solo Travelers</span></div>
                </div>
            </div>
            
            <!-- TRAVEL COMPANION CALLOUT (Phase 3) -->
            <div class="r-companion-banner anim-fade-up" style="background: var(--white); border: 2px dashed var(--green); border-radius: var(--radius); padding: 40px; text-align: center; margin-bottom: 80px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" style="width: 48px; height: 48px; margin-bottom: 15px;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                <h3 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: var(--navy); text-transform: uppercase; margin-bottom: 15px;">Bring Your Favorite Travel Companion</h3>
                <p style="font-size: 1.1rem; color: var(--gray-text); line-height: 1.6; margin: 0; max-width: 850px; margin-left: auto; margin-right: auto;">A spouse, partner, or travel companion does <strong>not necessarily have to play pickleball</strong> to enjoy the retreat. With luxury resort amenities, beautiful beaches, cultural excursions, and relaxing pools, there is plenty for everyone to enjoy while you are on the courts!</p>
            </div>

            <!-- Reusable Component: Daily Schedule -->
            <div class="r-schedule-component anim-fade-up" data-mascot-msg="A perfect balance of intensive training, open play, and relaxing downtime.">
                <h3 class="r-subsection-title">Sample Daily Schedule</h3>
                <div class="r-schedule-table">
                    <div class="r-schedule-row anim-fade-up anim-stagger" style="--stagger-delay: 0ms;">
                        <div class="r-time">7:00 AM</div>
                        <div class="r-activity">Breakfast & Coffee</div>
                    </div>
                    <div class="r-schedule-row anim-fade-up anim-stagger" style="--stagger-delay: 150ms;">
                        <div class="r-time">8:30 AM</div>
                        <div class="r-activity">Morning Clinic (Drills & Strategy)</div>
                    </div>
                    <div class="r-schedule-row anim-fade-up anim-stagger" style="--stagger-delay: 300ms;">
                        <div class="r-time">10:30 AM</div>
                        <div class="r-activity">Open Play / Round Robin</div>
                    </div>
                    <div class="r-schedule-row anim-fade-up anim-stagger" style="--stagger-delay: 450ms;">
                        <div class="r-time">12:30 PM</div>
                        <div class="r-activity">Group Lunch</div>
                    </div>
                    <div class="r-schedule-row anim-fade-up anim-stagger" style="--stagger-delay: 600ms;">
                        <div class="r-time">2:00 PM</div>
                        <div class="r-activity">Free Time (Beach, Spa, Explore)</div>
                    </div>
                    <div class="r-schedule-row anim-fade-up anim-stagger" style="--stagger-delay: 750ms;">
                        <div class="r-time">4:30 PM</div>
                        <div class="r-activity">Sunset Match Play (Optional)</div>
                    </div>
                    <div class="r-schedule-row anim-fade-up anim-stagger" style="--stagger-delay: 900ms;">
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
    <section id="cruises-info" class="r-section r-deep-dive bg-gray">
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

    <!-- ============================================================
         PHASE 3: COMING SOON / INTEREST LIST FORM
         ============================================================ -->
    <section class="r-interest-section" id="interest-list" style="padding: 80px 20px; background-color: var(--gray-bg); border-top: 1px solid var(--gray-light);">
        <div class="container">
            <div class="r-interest-card anim-fade-up" style="max-width: 900px; margin: 0 auto; background: var(--white); border-radius: 16px; padding: 50px; box-shadow: 0 15px 40px rgba(11, 32, 70, 0.08);">
                <div class="r-ic-header" style="text-align: center; margin-bottom: 40px;">
                    <h2 style="font-family: var(--font-heading); font-size: clamp(2rem, 4vw, 2.5rem); font-weight: 900; color: var(--navy); text-transform: uppercase; margin-bottom: 10px;">PB ACADEMY RETREATS — COMING SOON</h2>
                    <p style="font-size: 1.1rem; color: var(--gray-text); max-width: 700px; margin: 0 auto;">Join the retreat interest list to get early access to new destinations, special pricing, and exclusive updates before they sell out to the public.</p>
                </div>

                <!-- Reusing the robust .ct-form framework from style.css -->
                <form class="r-interest-form ct-form" action="#" method="post" novalidate>
                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="ri-name">Name <span aria-hidden="true">*</span></label>
                            <input type="text" id="ri-name" name="ri_name" required>
                        </div>
                        <div class="ct-form-group">
                            <label for="ri-email">Email Address <span aria-hidden="true">*</span></label>
                            <input type="email" id="ri-email" name="ri_email" required>
                        </div>
                    </div>
                    
                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="ri-phone">Phone Number <span aria-hidden="true">*</span></label>
                            <input type="tel" id="ri-phone" name="ri_phone" required>
                        </div>
                        <div class="ct-form-group">
                            <label for="ri-level">Pickleball Level <span aria-hidden="true">*</span></label>
                            <select id="ri-level" name="ri_level" required>
                                <option value="" disabled selected>Select your level...</option>
                                <option value="Beginner (Never Played)">Beginner (Never Played)</option>
                                <option value="Novice (Played a Few Times)">Novice (Played a Few Times)</option>
                                <option value="Intermediate (2.5 - 3.5)">Intermediate (2.5 - 3.5)</option>
                                <option value="Advanced (4.0+)">Advanced (4.0+)</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="ri-dest">Preferred Destinations</label>
                            <input type="text" id="ri-dest" name="ri_dest" placeholder="e.g., Caribbean, Europe, Mexico...">
                        </div>
                        <div class="ct-form-group">
                            <label for="ri-months">Preferred Travel Months</label>
                            <input type="text" id="ri-months" name="ri_months" placeholder="e.g., January, Fall, Any...">
                        </div>
                    </div>
                    
                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="ri-companion">Traveling Alone or With Someone?</label>
                            <select id="ri-companion" name="ri_companion">
                                <option value="Traveling Alone">Traveling Alone</option>
                                <option value="With Spouse/Partner">With Spouse/Partner</option>
                                <option value="With Friend(s)">With Friend(s)</option>
                                <option value="With a Group">With a Group</option>
                            </select>
                        </div>
                        <div class="ct-form-group">
                            <label for="ri-companion-play">Does Your Companion Play Pickleball?</label>
                            <select id="ri-companion-play" name="ri_companion_play">
                                <option value="N/A (Traveling Alone)" selected>N/A (Traveling Alone)</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-green ct-submit-btn" style="width: 100%; justify-content: center; padding: 18px; font-size: 1rem; margin-top: 15px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        JOIN THE RETREAT INTEREST LIST
                    </button>
                </form>
            </div>
        </div>
    </section>

</main>

<style>
@media (max-width: 768px) {
    .r-interest-card {
        padding: 35px 25px !important;
    }
    .r-companion-banner {
        padding: 30px 20px !important;
    }
}
</style>

<?php get_footer(); ?>