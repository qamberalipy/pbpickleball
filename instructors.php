<?php
/*
Template Name: Our Instructors
*/
get_header();
?>

<main class="instructors-page">

    <!-- ============================================================
         PHASE 1: HERO SECTION
         ============================================================ -->
    <section class="hero instructors-hero-full">
        <div class="hero-container">
            <div class="hero-left anim-fade-right">
                <h2 class="hero-subtitle">Experienced, Friendly &amp; Passionate Instructors</h2>
                <h1>OUR <br><span class="highlight">INSTRUCTORS</span></h1>
                <p>We believe that a great coach makes all the difference. Our team of certified professionals is dedicated to helping you achieve your goals, whether you're just starting out or looking to master advanced techniques.</p>
                <div class="inst-hero-tagline">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <span>We teach. We play. We care.</span>
                </div>
            </div>
            
            <div class="hero-right anim-fade-left">
                <div class="hero-right-header">
                    <h3>WHAT MAKES OUR TEAM SPECIAL?</h3>
                </div>
                <div class="hero-right-body">
                    <ul class="hr-list">
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            Experienced
                        </li>
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            Specialized in beginners
                        </li>
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            Patient
                        </li>
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            Safety focused
                        </li>
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            Committed to success
                        </li>
                        <li>
                            <div class="hr-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            Passionate about growing the game
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PHASE 2: FEATURED INSTRUCTOR (CHARLES AZOULAY)
         ============================================================ -->
    <section class="container" style="padding: 80px 20px 40px;">
        <div class="featured-instructor anim-fade-up">
            
            <div class="fi-col fi-photo">
                <img src="<?php echo get_template_directory_uri(); ?>/media/about-founder-charles.jpg" alt="Charles Azoulay">
            </div>
            
            <div class="fi-col fi-info">
                <h2>Charles Azoulay</h2>
                <h4 class="fi-title">Founder &amp; Lead Instructor</h4>
                <ul class="fi-stats">
                    <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> USA Pickleball Ambassador</li>
                    <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Experienced Instructor</li>
                    <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg> Beginner Specialist</li>
                    <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Serving Palm Beach</li>
                </ul>
            </div>
            
            <div class="fi-col fi-philosophy">
                <span class="fi-quote-mark">"</span>
                <p class="fi-quote-text">My goal is to create a welcoming environment where everyone can experience the joy and camaraderie of pickleball.</p>
                <p class="fi-bio">With years of coaching experience, Charles has developed a proven methodology that helps players of all ages grasp the fundamentals quickly and safely, while ensuring every lesson is filled with fun.</p>
            </div>
            
            <div class="fi-col fi-expertise">
                <h3 class="fi-exp-title">EXPERTISE</h3>
                <ul class="fi-exp-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Beginner Instruction</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Fundamentals</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Dink &amp; Control</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Court Positioning</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Transition Zone</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Serve &amp; Return</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Doubles Strategy</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Injury Prevention</li>
                </ul>
                <div class="fi-badges">
                    <span class="fi-badge">Certified</span>
                    <span class="fi-badge">Pickleball Ambassador</span>
                    <span class="fi-badge">10 Years of Experience</span>
                </div>
            </div>
            
        </div>
    </section>

    <!-- ============================================================
         PHASE 3: INSTRUCTOR GRID (5 Cards)
         ============================================================ -->
    <section class="container" style="padding: 0 20px 80px;">
        <div class="team-grid">
            
            <!-- Instructor Card 1 -->
            <div class="team-card anim-fade-up anim-stagger" style="--stagger-delay: 0ms;">
                <div class="tc-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/female-avatar-1.png" alt="Sarah Jenkins">
                </div>
                <div class="tc-content">
                    <h3 class="tc-name">Sarah Jenkins</h3>
                    <span class="tc-title">Senior Instructor</span>
                    <p class="tc-bio">A former tennis pro who found a new passion in pickleball, bringing elite athletic insights to her lessons.</p>
                    <ul class="tc-specialties">
                        <li>Advanced Drills</li>
                        <li>Tournament Prep</li>
                        <li>Agility &amp; Footwork</li>
                    </ul>
                    <a href="#" class="btn btn-navy tc-btn">View Profile</a>
                </div>
            </div>

            <!-- Instructor Card 2 -->
            <div class="team-card anim-fade-up anim-stagger" style="--stagger-delay: 100ms;">
                <div class="tc-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/male-avatar-2.png" alt="David Chen">
                </div>
                <div class="tc-content">
                    <h3 class="tc-name">David Chen</h3>
                    <span class="tc-title">Clinic Specialist</span>
                    <p class="tc-bio">Known for his energetic group sessions, David makes learning the fundamentals an absolute blast.</p>
                    <ul class="tc-specialties">
                        <li>Group Clinics</li>
                        <li>Beginner Basics</li>
                        <li>Serve Mechanics</li>
                    </ul>
                    <a href="#" class="btn btn-navy tc-btn">View Profile</a>
                </div>
            </div>

            <!-- Instructor Card 3 -->
            <div class="team-card anim-fade-up anim-stagger" style="--stagger-delay: 200ms;">
                <div class="tc-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/female-avatar-3.png" alt="Elena Rodriguez">
                </div>
                <div class="tc-content">
                    <h3 class="tc-name">Elena Rodriguez</h3>
                    <span class="tc-title">Program Director</span>
                    <p class="tc-bio">Elena focuses on the next generation of players, designing fun, engaging programs for kids and teens.</p>
                    <ul class="tc-specialties">
                        <li>Youth Coaching</li>
                        <li>After-School Programs</li>
                        <li>Paddles &amp; Play</li>
                    </ul>
                    <a href="#" class="btn btn-navy tc-btn">View Profile</a>
                </div>
            </div>

            <!-- Instructor Card 4 -->
            <div class="team-card anim-fade-up anim-stagger" style="--stagger-delay: 300ms;">
                <div class="tc-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/male-avatar-1.png" alt="Michael Thompson">
                </div>
                <div class="tc-content">
                    <h3 class="tc-name">Michael Thompson</h3>
                    <span class="tc-title">Adult League Coach</span>
                    <p class="tc-bio">Michael helps intermediate players refine their strategies and push past plateaus in their game.</p>
                    <ul class="tc-specialties">
                        <li>Doubles Strategy</li>
                        <li>Kitchen Play</li>
                        <li>Shot Selection</li>
                    </ul>
                    <a href="#" class="btn btn-navy tc-btn">View Profile</a>
                </div>
            </div>

            <!-- Instructor Card 5 -->
            <div class="team-card anim-fade-up anim-stagger" style="--stagger-delay: 400ms;">
                <div class="tc-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/female-avatar-2.png" alt="Jessica Lee">
                </div>
                <div class="tc-content">
                    <h3 class="tc-name">Jessica Lee</h3>
                    <span class="tc-title">Active Adult Specialist</span>
                    <p class="tc-bio">Jessica specializes in coaching 50+ players, focusing on safety, mobility, and lifelong enjoyment.</p>
                    <ul class="tc-specialties">
                        <li>Senior Programs</li>
                        <li>Mobility Training</li>
                        <li>Injury Prevention</li>
                    </ul>
                    <a href="#" class="btn btn-navy tc-btn">View Profile</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================================
         PHASE 4: WANT TO JOIN OUR TEAM? (CTA Banner)
         ============================================================ -->
    <section class="container" style="padding-bottom: 80px;">
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
                <a href="#" class="btn btn-outline jcb-btn">APPLY TO BECOME AN INSTRUCTOR &rarr;</a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PHASE 5: CREDENTIALS & AFFILIATIONS STRIP
         ============================================================ -->


</main>

<?php get_footer(); ?>