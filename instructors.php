<?php
/*
Template Name: Our Instructors
*/

// --- INSTRUCTOR MANUAL FORM LOGIC ---
$im_errors  = array();
$im_success = false;
$inst_manual_url = get_template_directory_uri() . '/media/Instructor-Manual.pdf'; // Update filename when you have the real PDF

if ( isset( $_POST['im_submit'] ) ) {
    // 1. Security Check
    if ( ! isset( $_POST['im_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['im_nonce'] ), 'pba_inst_manual_form' ) ) {
        $im_errors[] = __( 'Security check failed. Please refresh the page.', 'pba' );
    } 
    // 2. Spam Check
    elseif ( ! empty( $_POST['im_hp'] ) ) {
        $im_success = true; 
    } 
    // 3. Process Valid Form
    else {
        $name  = isset( $_POST['im_name'] ) ? sanitize_text_field( wp_unslash( $_POST['im_name'] ) ) : '';
        $email = isset( $_POST['im_email'] ) ? sanitize_email( wp_unslash( $_POST['im_email'] ) ) : '';

        if ( '' === $name ) { $im_errors[] = __( 'Please enter your first name.', 'pba' ); }
        if ( '' === $email || ! is_email( $email ) ) { $im_errors[] = __( 'Please enter a valid email address.', 'pba' ); }

        if ( empty( $im_errors ) ) {
            // Email 1: Admin
            $admin_to      = 'support@gopbacademy.com';
            $admin_subject = sprintf( __( 'New Instructor Guide Download from %s', 'pba' ), $name );
            $admin_body    = "A user requested the Instructor Guide.\n\nName: {$name}\nEmail: {$email}";
            wp_mail( $admin_to, $admin_subject, $admin_body );

            // Email 2: User
            $user_subject = "Your PB Academy Instructor Guide";
            $user_body    = "Hi {$name},\n\nThanks for your interest in coaching! Access your guide here:\n\n{$inst_manual_url}\n\n- PB Academy";
            $user_headers = array('Content-Type: text/plain; charset=UTF-8', 'From: PB Academy <noreply@gopbacademy.com>');
            
            // Send email in background
            wp_mail( $email, $user_subject, $user_body, $user_headers );

            // Force success to trigger JS download
            $im_success = true;
        }
    }
}
get_header();
?>

<main class="instructors-page">



    <!-- ============================================================
         PHASE 1: HERO SECTION
         ============================================================ -->
    <section class="hero instructors-hero-full" data-mascot-msg="Meet the passionate professionals who make learning pickleball a breeze!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/new-our-instructor-hero.webp" alt="PB Academy Instructors" aria-hidden="true" style="object-position: center top !important;">
        
        <div class="hero-container" style="padding-bottom: 10px !important;">
            <div class="hero-content anim-fade-up">
                <h1 class="inst-hero-title anim-fade-up">
                    <span class="inst-hero-sub">MEET OUR</span><br>
                    <span class="inst-hero-main highlight program-hero-main">PBA INSTRUCTORS</span>
                </h1>

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#featured" class="qj-link">Featured Instructor</a>
                        <a href="#all-instructors" class="qj-link">Instructor Directory</a>
                        <a href="#join-team" class="qj-link">Join Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PHASE 2: FEATURED INSTRUCTOR (CHARLES AZOULAY)
         ============================================================ -->

    <section id="featured" class="container featured-instructor-section" style="padding: 80px 20px 40px;" data-mascot-msg="Coach Charles brings years of expertise to help you master the fundamentals.">
        <div class="fi-2col-layout anim-fade-up">
            
            <!-- Left Column: Photo & Massive CTA -->
            <div class="fi-left-col">
                <div class="fi-photo-large">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/about-founder-charles.jpg" alt="Charles Azoulay">
                </div>
                <div class="fi-name-block">
                    <h2>Charles Azoulay</h2>
                    <h4>PB Academy Founder & Lead Instructor</h4>
                </div>
                <div style="margin-top: 10px;">
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-green" style="width: 100%; font-size: 0.95rem; padding: 18px 20px; text-align: center; white-space: normal; line-height: 1.4;">REGISTER NOW</a>
                </div>
            </div>
            
            <!-- Right Column: Data, Bio & Philosophy -->
            <div class="fi-right-col">
                
                <div>
                    <h3 class="fi-section-title">Teaching Philosophy</h3>
                    <div class="fi-philosophy-box">
                        <p>"My goal is to create a welcoming environment where everyone can experience the joy and camaraderie of pickleball. Learning should never be intimidating."</p>
                    </div>
                </div>

                <div>
                    <h3 class="fi-section-title">Biography & Background</h3>
                    <p class="fi-text-content">Discovered pickleball later in life and turned a teaching background into a mission: make every beginner feel confident. With years of coaching experience, Charles has developed a proven methodology that helps adult and senior players grasp the fundamentals quickly and safely, while ensuring every lesson is filled with fun.</p>
                </div>

                <div>
                    <h3 class="fi-section-title">Credentials & Specialties</h3>
                    <ul class="fi-icon-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg> Certified Pickleball Instructor</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg> USA Pickleball Ambassador</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg> Beginner & Senior Specialist</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg> Core 4 Fundamentals</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg> Dink & Control Strategy</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg> Injury Prevention Focus</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="fi-section-title">Areas Served</h3>
                    <p class="fi-text-content" style="font-weight: 600; color: var(--navy);">Proudly serving Boynton Beach, FL and surrounding Palm Beach communities.</p>
                </div>

            </div>
            
        </div>
    </section>

    <!-- ============================================================
         PHASE 3: INSTRUCTOR DIRECTORY GRID
         ============================================================ -->
    <section id="all-instructors" class="container inst-grid-section" style="padding: 0 20px 80px;" data-mascot-msg="Find the perfect instructor for your skill level and schedule.">
        <div class="inst-dir-grid">
            
            <!-- Instructor Card 1 -->
            <div class="inst-card anim-fade-up">
                <div class="inst-card-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/female-avatar-1.png" alt="Sarah Jenkins">
                    <div class="inst-header-text">
                        <h3>Sarah Jenkins</h3>
                        <span class="inst-title">PB Academy Instructor</span>
                    </div>
                </div>
                <div class="inst-card-body">
                    <p class="inst-intro">"A former tennis pro bringing elite athletic insights to her lessons, focusing on making the game fun, strategic, and accessible."</p>
                    
                    <ul class="inst-data-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> <strong>Credentials:</strong> PPR Certified Professional</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <strong>Experience:</strong> 6 Years (4.5+ Player Level)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <strong>Areas Served:</strong> Boca Raton, Delray Beach</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> <strong>Courts:</strong> Caloosa Park, Delray Tennis Center</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <strong>Specialties:</strong> Advanced Drills, Tournament Prep</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> <strong>Lessons:</strong> Private, Small Group, Clinics</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Availability:</strong> Weekday Mornings, Saturdays</li>
                    </ul>
                </div>
                <div class="inst-card-footer">
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy" style="width: 100%; font-size: 0.85rem; padding: 16px;">REGISTER NOW</a>
                    <a href="#" style="display:block; text-align:center; font-size:0.8rem; margin-top:14px; font-weight:700; color:var(--green); text-transform:uppercase; text-decoration:none;">View Full Profile &rarr;</a>
                </div>
            </div>

            <!-- Instructor Card 2 -->
            <div class="inst-card anim-fade-up" style="transition-delay: 100ms;">
                <div class="inst-card-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/male-avatar-2.png" alt="David Chen">
                    <div class="inst-header-text">
                        <h3>David Chen</h3>
                        <span class="inst-title">PB Academy Instructor</span>
                    </div>
                </div>
                <div class="inst-card-body">
                    <p class="inst-intro">"Known for energetic group sessions, David makes learning the fundamentals of the game an absolute blast for seniors and beginners."</p>
                    
                    <ul class="inst-data-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> <strong>Credentials:</strong> IPTPA Level 1</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <strong>Experience:</strong> 4 Years (4.0 Player Level)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <strong>Areas Served:</strong> Boynton Beach</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> <strong>Courts:</strong> Caloosa Park, Private HOAs</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <strong>Specialties:</strong> Group Clinics, Beginner Basics</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> <strong>Lessons:</strong> Core 4, Group Lessons</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Availability:</strong> Weekday Afternoons, Sundays</li>
                    </ul>
                </div>
                <div class="inst-card-footer">
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy" style="width: 100%; font-size: 0.85rem; padding: 16px;">REGISTER NOW</a>
                    <a href="#" style="display:block; text-align:center; font-size:0.8rem; margin-top:14px; font-weight:700; color:var(--green); text-transform:uppercase; text-decoration:none;">View Full Profile &rarr;</a>
                </div>
            </div>

            <!-- Instructor Card 3 -->
            <div class="inst-card anim-fade-up" style="transition-delay: 200ms;">
                <div class="inst-card-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/female-avatar-2.png" alt="Jessica Lee">
                    <div class="inst-header-text">
                        <h3>Jessica Lee</h3>
                        <span class="inst-title">PB Academy Instructor</span>
                    </div>
                </div>
                <div class="inst-card-body">
                    <p class="inst-intro">"Jessica specializes in coaching 50+ players, focusing on safety, mobility, and fostering lifelong enjoyment on the court."</p>
                    
                    <ul class="inst-data-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> <strong>Credentials:</strong> PPR Certified Coach</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <strong>Experience:</strong> 8 Years (4.5 Player Level)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <strong>Areas Served:</strong> Wellington, Lake Worth</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> <strong>Courts:</strong> Wellington Tennis Center</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <strong>Specialties:</strong> Senior Programs, Injury Prevention</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> <strong>Lessons:</strong> Private, Semi-Private</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Availability:</strong> Mon-Wed Mornings</li>
                    </ul>
                </div>
                <div class="inst-card-footer">
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy" style="width: 100%; font-size: 0.85rem; padding: 16px;">REGISTER NOW</a>
                    <a href="#" style="display:block; text-align:center; font-size:0.8rem; margin-top:14px; font-weight:700; color:var(--green); text-transform:uppercase; text-decoration:none;">View Full Profile &rarr;</a>
                </div>
            </div>

            <!-- Instructor Card 4 -->
            <div class="inst-card anim-fade-up" style="transition-delay: 300ms;">
                <div class="inst-card-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/male-avatar-1.png" alt="Michael Thompson" onerror="this.style.display='none'">
                    <div class="inst-header-text">
                        <h3>Michael Thompson</h3>
                        <span class="inst-title">PB Academy Instructor</span>
                    </div>
                </div>
                <div class="inst-card-body">
                    <p class="inst-intro">"Michael helps intermediate players refine their strategies, perfect their kitchen play, and push past plateaus in their game."</p>
                    
                    <ul class="inst-data-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> <strong>Credentials:</strong> PPR Certified Coach</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <strong>Experience:</strong> 7 Years (5.0 Player Level)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <strong>Areas Served:</strong> Boca Raton, Parkland</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> <strong>Courts:</strong> Patch Reef Park, Private Clubs</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <strong>Specialties:</strong> Doubles Strategy, Third Shot Drops</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> <strong>Lessons:</strong> Private, Strategy Clinics</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Availability:</strong> Weekday Evenings, Weekends</li>
                    </ul>
                </div>
                <div class="inst-card-footer">
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy" style="width: 100%; font-size: 0.85rem; padding: 16px;">REGISTER NOW</a>
                    <a href="#" style="display:block; text-align:center; font-size:0.8rem; margin-top:14px; font-weight:700; color:var(--green); text-transform:uppercase; text-decoration:none;">View Full Profile &rarr;</a>
                </div>
            </div>

            <!-- Instructor Card 5 -->
            <div class="inst-card anim-fade-up" style="transition-delay: 400ms;">
                <div class="inst-card-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/female-avatar-3.png" alt="Elena Rodriguez" onerror="this.style.display='none'">
                    <div class="inst-header-text">
                        <h3>Elena Rodriguez</h3>
                        <span class="inst-title">PB Academy Instructor</span>
                    </div>
                </div>
                <div class="inst-card-body">
                    <p class="inst-intro">"Elena brings high energy and patience to the court, designing fun, engaging programs that make mastering the basics effortless."</p>
                    
                    <ul class="inst-data-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> <strong>Credentials:</strong> IPTPA Level 2</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <strong>Experience:</strong> 5 Years (4.5 Player Level)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <strong>Areas Served:</strong> West Palm Beach, Wellington</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> <strong>Courts:</strong> Okeeheelee Park, Public Centers</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <strong>Specialties:</strong> Beginner Programs, Core 4</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> <strong>Lessons:</strong> Core 4 Package, Small Groups</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Availability:</strong> Daily (Morning &amp; Afternoon)</li>
                    </ul>
                </div>
                <div class="inst-card-footer">
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy" style="width: 100%; font-size: 0.85rem; padding: 16px;">REGISTER NOW</a>
                    <a href="#" style="display:block; text-align:center; font-size:0.8rem; margin-top:14px; font-weight:700; color:var(--green); text-transform:uppercase; text-decoration:none;">View Full Profile &rarr;</a>
                </div>
            </div>

            <!-- Instructor Card 6 -->
            <div class="inst-card anim-fade-up" style="transition-delay: 500ms;">
                <div class="inst-card-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/male-avatar-3.jpg" alt="Marcus Johnson" onerror="this.src='<?php echo get_template_directory_uri(); ?>/media/male-avatar-1.png'">
                    <div class="inst-header-text">
                        <h3>Marcus Johnson</h3>
                        <span class="inst-title">PB Academy Instructor</span>
                    </div>
                </div>
                <div class="inst-card-body">
                    <p class="inst-intro">"A deeply patient coach who prioritizes safety and court awareness, ensuring every player feels confident and comfortable."</p>
                    
                    <ul class="inst-data-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> <strong>Credentials:</strong> PPR Certified Professional</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <strong>Experience:</strong> 3 Years (4.0 Player Level)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <strong>Areas Served:</strong> Jupiter, Palm Beach Gardens</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> <strong>Courts:</strong> Jupiter Community Park</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <strong>Specialties:</strong> Novice Players, Mobility Focus</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> <strong>Lessons:</strong> Private, Semi-Private</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <strong>Availability:</strong> Weekday Mornings</li>
                    </ul>
                </div>
                <div class="inst-card-footer">
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-navy" style="width: 100%; font-size: 0.85rem; padding: 16px;">REGISTER NOW</a>
                    <a href="#" style="display:block; text-align:center; font-size:0.8rem; margin-top:14px; font-weight:700; color:var(--green); text-transform:uppercase; text-decoration:none;">View Full Profile &rarr;</a>
                </div>
            </div>
            
        </div>
    </section>

    <!-- ============================================================
         PHASE 3.5: INSTRUCTOR GUIDE DOWNLOAD
         ============================================================ -->
    <section id="instructor-guide" class="bm-purchase-section container anim-fade-up im-theme" data-mascot-msg="Want to teach? Download our free guide to see what it takes!" style="margin-bottom: 80px;">
        <div class="bm-purchase-container" style="border-top: 5px solid var(--accent-orange);">
            
            <!-- Left Side: Value Proposition -->
            <div class="bm-purchase-content">
                <span class="bm-purchase-eyebrow" style="color: var(--accent-orange);">Coach The PBA Way</span>
                <h2>Get The Instructor Playbook</h2>
                <p>Curious about what it takes to be a PB Academy Coach? Download our free overview guide covering our teaching philosophy, core drill structures, and certification paths.</p>
                
                <div class="bm-purchase-features">
                    <div class="bm-pf-item anim-fade-up anim-stagger" style="--stagger-delay:0ms;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-orange)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <span><strong>Teaching Frameworks:</strong> Learn how we break down complex shots for beginners.</span>
                    </div>
                    <div class="bm-pf-item anim-fade-up anim-stagger" style="--stagger-delay:150ms;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-orange)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <span><strong>Career Pathways:</strong> See exactly how to get certified and join our growing roster.</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Lead Capture Form -->
            <div class="bm-purchase-action anim-fade-up anim-stagger" style="--stagger-delay:300ms; background-color: var(--navy-light) !important;">
                <div class="bm-action-card">
                    <h3>Download Your Free Guide</h3>
                    <p>Enter your details below to get instant access.</p>
                    
                    <div id="inst-download-form" style="scroll-margin-top: 100px;">
                        
                        <?php if ( $im_success ) : ?>
                            <!-- Success State -->
                            <div class="bm-success-state" style="text-align: center; padding: 20px 0;">
                                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="var(--accent-orange)" stroke-width="2" style="margin-bottom: 15px;">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <h3 style="color: white; font-family: var(--font-heading); font-size: 1.4rem; margin-bottom: 10px;">Check Your Downloads!</h3>
                                <p style="color: rgba(255,255,255,0.85); font-size: 0.95rem;">Your guide is downloading now. We've also emailed you a backup copy.</p>
                            </div>

                            <!-- Auto-Download JS -->
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var pointer = document.createElement('div');
                                    pointer.className = 'dl-pointer-overlay';
                                    pointer.innerHTML = '<div class="dl-pointer-box" style="border-color: var(--accent-orange);"><svg class="dl-arrow" viewBox="0 0 24 24" fill="none" stroke="var(--accent-orange)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg><h3 style="color: var(--navy); margin: 0 0 5px; font-family: var(--font-heading); font-weight: 900; text-transform: uppercase;">Download Starting!</h3><p style="color: var(--gray-text); margin: 0; font-family: var(--font-body); font-size: 0.85rem;">Check the top right of your browser.</p></div>';
                                    document.body.appendChild(pointer);

                                    var link = document.createElement('a');
                                    link.href = '<?php echo $inst_manual_url; ?>';
                                    link.download = 'Instructor-Guide.pdf';
                                    document.body.appendChild(link);
                                    link.click();
                                    document.body.removeChild(link);

                                    setTimeout(function() {
                                        pointer.style.opacity = '0';
                                        pointer.style.transition = 'opacity 0.5s ease';
                                        setTimeout(function() { pointer.remove(); }, 500);
                                    }, 6000);
                                });
                            </script>

                        <?php else : ?>

                            <?php if ( ! empty( $im_errors ) ) : ?>
                                <div class="jt-alert jt-alert--error" role="alert">
                                    <ul>
                                        <?php foreach ( $im_errors as $im_error ) : ?>
                                            <li><?php echo esc_html( $im_error ); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <!-- Form -->
                            <form class="bm-download-form" method="post" action="<?php echo esc_url( get_permalink() . '#inst-download-form' ); ?>" novalidate>
                                <?php wp_nonce_field( 'pba_inst_manual_form', 'im_nonce' ); ?>
                                <input type="text" name="im_hp" value="" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0;" tabindex="-1" autocomplete="off" aria-hidden="true">

                                <div class="bm-form-group">
                                    <input type="text" id="im-name" name="im_name" placeholder="Your First Name" required value="<?php echo isset($name) ? esc_attr($name) : ''; ?>">
                                </div>
                                <div class="bm-form-group">
                                    <input type="email" id="im-email" name="im_email" placeholder="Your Email Address" required value="<?php echo isset($email) ? esc_attr($email) : ''; ?>">
                                </div>
                                <button type="submit" name="im_submit" value="1" class="bm-btn-order" style="background: var(--accent-orange); color: var(--navy); box-shadow: 0 10px 20px rgba(242, 169, 0, 0.25);">
                                    GET THE GUIDE NOW
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </button>
                            </form>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PHASE 4: WANT TO JOIN OUR TEAM? (CTA Banner)
         ============================================================ -->
    <section id="join-team" class="container join-team-section" style="padding-bottom: 80px;" data-mascot-msg="Passionate about pickleball? We are always looking for great instructors!">
        <div class="join-cta-banner anim-fade-up">
            <div class="jcb-left">
                <h2>Want to Join Our Team?</h2>
                <p>We're always looking for passionate instructors to help grow the game.</p>
            </div>
            
            <div class="jcb-middle">
                <div class="jcb-icon-block">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    <span>Great Community</span>
                </div>
                <div class="jcb-icon-block">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    <span>Ongoing Training</span>
                </div>
                <div class="jcb-icon-block">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <span>Flexible Schedule</span>
                </div>
                <div class="jcb-icon-block">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <span>Make an Impact</span>
                </div>
            </div>
            
            <div class="jcb-right">
                <a href="<?php echo home_url('/join-our-team/'); ?>" class="btn btn-outline jcb-btn">APPLY TO BECOME AN INSTRUCTOR &rarr;</a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PHASE 5: CREDENTIALS & AFFILIATIONS STRIP
         ============================================================ -->


</main>

<?php get_footer(); ?>