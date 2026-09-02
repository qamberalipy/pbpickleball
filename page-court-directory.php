<?php
/**
 * Template Name: Court Directory
 */
?>
<?php get_header(); ?>



<main class="court-directory-page pba-bg-pattern">


    <!-- 2. Hero Section -->
    <section class="cd-hero" data-mascot-msg="Explore the best pickleball courts in your area!">
        <video class="hero-video-bg" autoplay loop muted playsinline aria-hidden="true"><source src="<?php echo get_template_directory_uri(); ?>/media/hero-court-directory.mp4" type="video/mp4"></video>
        <div class="hero-container">
            <div class="hero-content">
                <h1>PICKLEBALL COURT DIRECTORY</h1>
                <h3 class="hero-tagline type-effect"></h3>
                
                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#stats" class="qj-link">Quick Stats</a>
                        <a href="#find-a-court" class="qj-link">Find A Court</a>
                        <a href="#surfaces-guide" class="qj-link">Surfaces Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Stats Section -->
    <section id="stats" class="cd-stats-search" data-mascot-msg="We track hundreds of locations, from public parks to private clubs.">
        <div class="container">
            <div class="cd-stats-grid anim-fade-up is-visible">
                <!-- Stat 1 -->
                <div class="cd-stat-card">
                    <div class="cd-stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div class="cd-stat-info">
                        <span class="cd-stat-num">200+</span>
                        <span class="cd-stat-label">Court Locations</span>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="cd-stat-card">
                    <div class="cd-stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    </div>
                    <div class="cd-stat-info">
                        <span class="cd-stat-num">150+</span>
                        <span class="cd-stat-label">Outdoor Courts</span>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="cd-stat-card">
                    <div class="cd-stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg>
                    </div>
                    <div class="cd-stat-info">
                        <span class="cd-stat-num">40+</span>
                        <span class="cd-stat-label">Indoor Facilities</span>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="cd-stat-card">
                    <div class="cd-stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div class="cd-stat-info">
                        <span class="cd-stat-num">60+</span>
                        <span class="cd-stat-label">Private Clubs</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Directory Section -->
    <section id="find-a-court" class="cd-directory-section" data-mascot-msg="Check out our featured courts and see what they offer.">
        <div class="container">
            <div class="cd-directory-split">
                <!-- Main Grid -->
                <div class="cd-directory-grid anim-fade-up">
                    
                    <!-- Card 1 -->
                    <article class="cd-featured-card">
                        <div class="cd-fc-content">
                            <span class="cd-fc-badge">Public Outdoor</span>
                            <h4>Palm Beach Gardens Regional Park</h4>
                            <div class="cd-fc-city">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                Palm Beach Gardens
                            </div>
                            <ul class="cd-fc-details">
                                <li>Courts: <span>12</span></li>
                                <li>Lighting: <span>Yes</span></li>
                                <li>Fee: <span>Free</span></li>
                                <li>Reservation: <span>No</span></li>
                            </ul>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article class="cd-featured-card">
                        <div class="cd-fc-content">
                            <span class="cd-fc-badge">Public Indoor</span>
                            <h4>Jupiter Community Center</h4>
                            <div class="cd-fc-city">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                Jupiter
                            </div>
                            <ul class="cd-fc-details">
                                <li>Courts: <span>4</span></li>
                                <li>Lighting: <span>Yes</span></li>
                                <li>Fee: <span>$5 Drop-in</span></li>
                                <li>Reservation: <span>No</span></li>
                            </ul>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </article>

                    <!-- Card 3 -->
                    <article class="cd-featured-card">
                        <div class="cd-fc-content">
                            <span class="cd-fc-badge">Private Club</span>
                            <h4>The Pickleball Club at Boca</h4>
                            <div class="cd-fc-city">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                Boca Raton
                            </div>
                            <ul class="cd-fc-details">
                                <li>Courts: <span>24</span></li>
                                <li>Lighting: <span>Yes</span></li>
                                <li>Fee: <span>Members Only</span></li>
                                <li>Reservation: <span>Required</span></li>
                            </ul>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </article>

                </div>

                <!-- Sidebar -->
                <aside class="cd-info-sidebar anim-fade-left">
                    <h3>Court Information Includes</h3>
                    <ul class="cd-info-list">
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Location & Directions</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Court Surface Type</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Indoor vs Outdoor</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Number of Courts</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Lighting Availability</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Public vs Private Access</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Cost / Drop-in Fees</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Reservation Requirements</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> On-site Amenities</li>
                    </ul>
                </aside>
            </div>
        </div>
    </section>

    <!-- Secondary CTA Strip -->
    <div class="cd-cta-strip anim-fade-up" data-mascot-msg="Don't see your favorite court? Let us know!">
        <div class="container">
            <div class="cd-cta-box">
                <h3>Don't See Your Favorite Court?</h3>
                <a href="<?php echo esc_url(site_url('/contact')); ?>" class="btn btn-navy">Submit a Court</a>
            </div>
            <div class="cd-cta-box">
                <h3>Traveling to Pickle Ball Academy?</h3>
                <a href="<?php echo esc_url(site_url('/retreats')); ?>" class="btn btn-navy">Plan Your Trip</a>
            </div>
        </div>
    </div>

    <!-- 5. Court Surfaces Guide -->
    <section id="surfaces-guide" class="cd-surfaces-guide" data-mascot-msg="Every surface plays differently. Learn how to adjust your game here.">
        <div class="container">
            <div class="cd-surfaces-header anim-fade-up">
                <h2>Types of Pickleball Court Surfaces</h2>
                <p>Every Surface Plays Different – Know the Court. Adjust Your Game.</p>
            </div>

            <!-- Cards -->
            <div class="cd-surface-cards">
                <div class="cd-scard anim-fade-up anim-stagger" style="--stagger-delay: 0ms;">
                    <div class="cd-scard-body">
                        <h4>Hard Court</h4>
                        <p>Standard tennis court surface, usually asphalt or concrete coated with acrylic.</p>
                        <h5>Advantages:</h5>
                        <ul class="cd-scard-list">
                            <li>True, consistent bounce</li>
                            <li>Low maintenance</li>
                        </ul>
                        <h5>Ideal For:</h5>
                        <ul class="cd-scard-list">
                            <li>Most players</li>
                            <li>Consistent play</li>
                        </ul>
                        <div class="cd-scard-note">Things to Know: High impact on joints.</div>
                    </div>
                </div>

                <div class="cd-scard anim-fade-up anim-stagger" style="--stagger-delay: 150ms;">
                    <div class="cd-scard-body">
                        <h4>Indoor Court</h4>
                        <p>Typically wood or synthetic gym floor, common in rec centers.</p>
                        <h5>Advantages:</h5>
                        <ul class="cd-scard-list">
                            <li>Climate controlled</li>
                            <li>Fast-paced play</li>
                        </ul>
                        <h5>Ideal For:</h5>
                        <ul class="cd-scard-list">
                            <li>Bad weather days</li>
                            <li>Fast reflex games</li>
                        </ul>
                        <div class="cd-scard-note">Things to Know: Ball skips more, can be slippery.</div>
                    </div>
                </div>

                <div class="cd-scard anim-fade-up anim-stagger" style="--stagger-delay: 300ms;">
                    <div class="cd-scard-body">
                        <h4>Clay Court</h4>
                        <p>Crushed stone or brick. Very rare for pickleball but exists at some clubs.</p>
                        <h5>Advantages:</h5>
                        <ul class="cd-scard-list">
                            <li>Softest on joints</li>
                            <li>Slower play</li>
                        </ul>
                        <h5>Ideal For:</h5>
                        <ul class="cd-scard-list">
                            <li>Older players</li>
                            <li>Strategic games</li>
                        </ul>
                        <div class="cd-scard-note">Things to Know: Irregular bounce, requires specific shoes.</div>
                    </div>
                </div>

                <div class="cd-scard anim-fade-up anim-stagger" style="--stagger-delay: 450ms;">
                    <div class="cd-scard-body">
                        <h4>Grass/Turf</h4>
                        <p>Synthetic turf or real grass, usually temporary backyard setups.</p>
                        <h5>Advantages:</h5>
                        <ul class="cd-scard-list">
                            <li>Extremely soft impact</li>
                            <li>Fun and casual</li>
                        </ul>
                        <h5>Ideal For:</h5>
                        <ul class="cd-scard-list">
                            <li>Casual backyard play</li>
                            <li>Social events</li>
                        </ul>
                        <div class="cd-scard-note">Things to Know: Very low bounce, requires a special ball.</div>
                    </div>
                </div>
            </div>

            <!-- Quick Tips Banner -->
            <div class="cd-quick-tips">
                <div class="cd-qt-col anim-fade-up anim-stagger" style="--stagger-delay: 0ms;">
                    <h5>Hard Court Tips</h5>
                    <p>Bend your knees more. Prepare for fast, high bounces and a solid grip.</p>
                </div>
                <div class="cd-qt-col anim-fade-up anim-stagger" style="--stagger-delay: 150ms;">
                    <h5>Indoor Tips</h5>
                    <p>Stay low and expect the ball to skid and stay low after the bounce.</p>
                </div>
                <div class="cd-qt-col anim-fade-up anim-stagger" style="--stagger-delay: 300ms;">
                    <h5>Clay Tips</h5>
                    <p>Be patient. Points last longer. Prepare for irregular, unpredictable bounces.</p>
                </div>
                <div class="cd-qt-col anim-fade-up anim-stagger" style="--stagger-delay: 450ms;">
                    <h5>Turf Tips</h5>
                    <p>Attack the net quickly. Hard drives and baseline games are less effective.</p>
                </div>
            </div>

            <!-- Bottom Grid -->
            <div class="cd-surfaces-bottom anim-fade-up">
                <!-- Comparison Table -->
                <div class="cd-table-container">
                    <table class="cd-comparison-table">
                        <thead>
                            <tr>
                                <th>Surface</th>
                                <th>Speed</th>
                                <th>Bounce</th>
                                <th>Traction</th>
                                <th>Impact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Hard Court</strong></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                            </tr>
                            <tr>
                                <td><strong>Indoor</strong></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                            </tr>
                            <tr>
                                <td><strong>Clay Court</strong></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                            </tr>
                            <tr>
                                <td><strong>Turf</strong></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Sidebar Grid -->
                <div class="cd-surface-sidebar">
                    <div class="cd-ss-card">
                        <h4><svg viewBox="0 0 24 24"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> Shoe Matters!</h4>
                        <ul>
                            <li><strong>Court Shoes:</strong> Designed for lateral movement, essential for hard and indoor courts.</li>
                            <li><strong>Running Shoes:</strong> Avoid these. The tread can catch on hard courts and cause injuries.</li>
                        </ul>
                    </div>
                    <div class="cd-ss-card">
                        <h4><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> General Tips</h4>
                        <p>Always inspect the surface before playing. Look for dead spots, slick areas, or moisture that can drastically alter how the ball bounces and how your shoes grip.</p>
                    </div>
                    <div class="cd-ss-card">
                        <h4><svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg> Maintenance Matters</h4>
                        <p>A well-maintained public court plays better than a neglected private one. Let the facility managers know if you notice significant cracks or dead spots.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 6. Consolidated Closing Banner -->
    <section class="cd-closing-banner anim-fade-up" data-mascot-msg="Great players adapt. Know the court and trust your game!">
        <div class="cd-closing__bg" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1920&auto=format&fit=crop');"></div>
        <div class="container cd-closing__content">
            <div class="cd-cb-props">
                <div class="cd-cb-prop">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span>Local Knowledge</span>
                </div>
                <div class="cd-cb-prop">
                    <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span>Trusted Info</span>
                </div>
                <div class="cd-cb-prop">
                    <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <span>Play More</span>
                </div>
            </div>
            <h2>Great Players Adapt to Any Surface. Know the Court. Trust Your Game.</h2>
            <blockquote>"Great courts. Great people. Better together. – PBA Team"</blockquote>
        </div>
    </section>

</main>

<?php get_footer(); ?>
