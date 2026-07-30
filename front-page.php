<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-container">
        <div class="hero-left">
            <h2 class="hero-subtitle">WELCOME TO</h2>
            <h1>PB PICKLEBALL<br><span class="highlight">ACADEMY</span></h1>
            <h3 class="hero-tagline">Beginners Welcome. Friends for Life.</h3>
            <p>We make learning pickleball simple, fun, and rewarding. Our programs help active adults build skills,
                confidence, meet new friends, and enjoy one of America's fastest-growing sports.</p>
            <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-green">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                BOOK YOUR FIRST LESSON
            </a>
        </div>

        <div class="hero-right">
            <div class="hero-right-header">
                <h3>WHY CHOOSE PB ACADEMY?</h3>
            </div>
            <div class="hero-right-body">
                <ul class="hero-list">
                    <li>Friendly, patient instruction</li>
                    <li>Programs designed for beginners</li>
                    <li>Special focus on active adults &amp; seniors</li>
                    <li>Private and group lessons</li>
                    <li>Country club &amp; HOA programs</li>
                    <li>Beginner Training Manual</li>
                    <li>Retreats and special events</li>
                    <li>Growing team of qualified instructors</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="container features-grid">
        <div class="feature-item">
            <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path></svg>
            <span>PATIENT, FRIENDLY<br>INSTRUCTION</span>
        </div>
        <div class="feature-item">
            <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path></svg>
            <span>SAFE &amp; FUN<br>ENVIRONMENT</span>
        </div>
        <div class="feature-item">
            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
            <span>BEGINNER &amp; SENIOR<br>FOCUSED</span>
        </div>
        <div class="feature-item">
            <svg viewBox="0 0 24 24"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"></path></svg>
            <span>BUILD CONFIDENCE<br>&amp; SKILLS</span>
        </div>
        <div class="feature-item">
            <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path></svg>
            <span>SOUTH FLORIDA<br>LOCAL EXPERT</span>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="programs">
    <div class="container">
        <h2 class="section-title">PROGRAMS WE OFFER</h2>
        <div class="programs-grid">

            <div class="program-card">
                <svg class="program-icon" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
                <h4>PRIVATE LESSONS</h4>
                <p>Personalized one-on-one instruction at your pace.</p>
                <a href="<?php echo home_url('/program-and-lessons/'); ?>" class="btn btn-outline">LEARN MORE &gt;</a>
            </div>

            <div class="program-card">
                <svg class="program-icon" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path></svg>
                <h4>SMALL GROUP LESSONS</h4>
                <p>Learn with friends in a relaxed, social environment.</p>
                <a href="<?php echo home_url('/program-and-lessons/'); ?>" class="btn btn-outline">LEARN MORE &gt;</a>
            </div>

            <div class="program-card">
                <svg class="program-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="2" fill="var(--white)"></circle><circle cx="8" cy="10" r="1.5" fill="var(--white)"></circle><circle cx="16" cy="10" r="1.5" fill="var(--white)"></circle><circle cx="8" cy="14" r="1.5" fill="var(--white)"></circle><circle cx="16" cy="14" r="1.5" fill="var(--white)"></circle><circle cx="12" cy="7" r="1.5" fill="var(--white)"></circle><circle cx="12" cy="17" r="1.5" fill="var(--white)"></circle></svg>
                <h4>BEGINNER CLINICS</h4>
                <p>A complete introduction to pickleball from the ground up.</p>
                <a href="<?php echo home_url('/program-and-lessons/'); ?>" class="btn btn-outline">LEARN MORE &gt;</a>
            </div>

            <div class="program-card">
                <svg class="program-icon" viewBox="0 0 24 24"><path d="M12 2L2 12h3v8h6v-6h2v6h6v-8h3L12 2z"></path></svg>
                <h4>COUNTRY CLUB PROGRAM MANAGEMENT</h4>
                <p>Professional instruction and organized programs for country clubs, HOAs, and community associations.</p>
                <a href="<?php echo home_url('/program-and-lessons/'); ?>" class="btn btn-outline">LEARN MORE &gt;</a>
            </div>

            <div class="program-card">
                <svg class="program-icon" viewBox="0 0 24 24"><path d="M21.9 14.5c-1.3-1.6-3.1-2.5-4.9-2.5h-1V5.5c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5v6.5h-2V3.5c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5V12h-2V7.5C6 7.5 5.3 8.2 5.3 9s.7 1.5 1.5 1.5V12h-1c-1.8 0-3.6.9-4.9 2.5-.3.4-.1 1 .4 1.2 1.3.5 2.8.5 4.1 0v6.8c0 .8.7 1.5 1.5 1.5h10c.8 0 1.5-.7 1.5-1.5v-6.8c1.3.5 2.8.5 4.1 0 .5-.2.7-.8.4-1.2z"></path></svg>
                <h4>PICKLEBALL RETREATS</h4>
                <p>Combine learning, travel, and fun with future PB Pickleball Academy retreats.</p>
                <a href="<?php echo home_url('/program-and-lessons/'); ?>" class="btn btn-outline">LEARN MORE &gt;</a>
            </div>

        </div>
    </div>
</section>

<!-- Beginner Manual Banner -->
<section class="manual-banner">
    <div class="container manual-banner-inner">
        <div class="manual-img-left">
            <img src="<?php echo get_template_directory_uri(); ?>/media/manual-book.png" alt="Beginner Training Manual Book">
        </div>

        <div class="manual-content">
            <h2>WHAT'S PB</h2>
            <p>The <strong>PB Pickleball Academy Beginner Training Manual – Volume 1</strong> is the perfect companion to your lessons.</p>
            
            <ul class="manual-list-new">
                <li>Easy-to-follow illustrations</li>
                <li>Strategy basics</li>
                <li>Rules explained simply</li>
                <li>Equipment recommendations</li>
                <li>Practice drills</li>
                <li>Fun practice sessions</li>
                <li>Safety tips</li>
            </ul>

            <a href="<?php echo home_url('/beginner-manual/'); ?>" class="btn btn-navy manual-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                GET YOUR MANUAL NOW
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title" style="text-align: center; margin-bottom: 50px;">WHAT STUDENTS SAY</h2>
        
        <div class="carousel-container">
            <button class="nav-arrow prev-btn" id="prevBtn" aria-label="Previous testimonial">&lt;</button>
            
            <div class="carousel-track-wrapper">
                <div class="carousel-track" id="testimonialTrack">
                    
                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Sarah M.">
                        <p>Coach Charles completely changed my game. His tips on dinking and kitchen play helped me win my first local tournament. Unbelievable coaching!</p>
                        <span class="t-author">- Sarah M., Boynton Beach</span>
                    </div>

                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="David L.">
                        <p>As an active adult, I was worried about injuries, but Charles emphasizes proper form and safety. My 3rd shot drop has never been better!</p>
                        <span class="t-author">- David L., Delray Beach</span>
                    </div>

                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Linda K.">
                        <p>Learning the kitchen strategies from Coach Charles was a game-changer. He breaks down complex techniques into simple, repeatable steps.</p>
                        <span class="t-author">- Linda K., Lantana</span>
                    </div>

                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Robert T.">
                        <p>The beginner clinic was exactly what I needed. We focused on mastering the dink and court positioning. Great instruction and a fun group!</p>
                        <span class="t-author">- Robert T., West Palm Beach</span>
                    </div>

                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Mary J.">
                        <p>My partner and I took lessons to improve our 3rd shot drops and team communication. Charles is a fantastic instructor who really cares.</p>
                        <span class="t-author">- Mary J., Boca Raton</span>
                    </div>

                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="James P.">
                        <p>My serve and return of serve have improved dramatically. The coaching here focuses on the details that make a huge difference in match play.</p>
                        <span class="t-author">- James P., Wellington</span>
                    </div>

                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Susan W.">
                        <p>As an active senior, I really appreciate the focus on mobility and smart placement over power. Mastering the soft game has been incredibly rewarding.</p>
                        <span class="t-author">- Susan W., Lake Worth</span>
                    </div>

                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Michael B.">
                        <p>The private lessons helped me fix my backhand mechanics and understand when to speed up the ball at the kitchen line. Amazing, patient instructor!</p>
                        <span class="t-author">- Michael B., Boynton Beach</span>
                    </div>

                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Emily R.">
                        <p>Fun, engaging, and professional. Charles taught me how to reset the point with a soft block instead of just banging the ball. Highly recommend!</p>
                        <span class="t-author">- Emily R., Delray Beach</span>
                    </div>

                    <div class="t-card">
                        <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="John D.">
                        <p>If you want to learn proper pickleball techniques like the 3rd shot drop and dinking without picking up bad habits, this is the academy to join.</p>
                        <span class="t-author">- John D., Palm Beach Gardens</span>
                    </div>

                </div>
            </div>
            
            <button class="nav-arrow next-btn" id="nextBtn" aria-label="Next testimonial">&gt;</button>
        </div>
    </div>
</section>

<!-- Founder & Looking Ahead Section -->
<section class="founder-section" aria-labelledby="founderHeading">
    <div class="container">
        <div class="founder-grid">

            <div class="founder-col">
                <p class="founder-col-title">Our Story</p>
                <h3 id="founderHeading">Meet Our Founder</h3>
                <div class="founder-profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/about-founder-charles.jpg" alt="Charles Azoulay – Founder &amp; Lead Instructor" class="founder-photo">
                    <div class="founder-info">
                        <h4>Charles Azoulay</h4>
                        <p class="founder-role">Founder &amp; Lead Instructor</p>
                        <p>Charles discovered pickleball later in life and instantly fell in love with the game. With a background in teaching and a passion for helping others, he founded PB Pickleball Academy to create a positive place where beginners can learn, improve, and have a great time.</p>
                        <p style="font-weight: 700; color: var(--navy); font-style: italic; margin-top: 10px;">We're here to help you love the game!</p>
                    </div>
                </div>
            </div>

            <div class="founder-col looking-ahead-col">
                <p class="founder-col-title">The Future</p>
                <h3>Looking Ahead</h3>
                <p class="la-intro">PB Pickleball Academy is growing! We're expanding our reach to bring even more players into the game — here's what's on the horizon:</p>
                <div class="la-grid">
                    <div class="la-item"><div class="la-check">&#10003;</div> More Instructors</div>
                    <div class="la-item"><div class="la-check">&#10003;</div> More Courts</div>
                    <div class="la-item"><div class="la-check">&#10003;</div> More Programs</div>
                    <div class="la-item"><div class="la-check">&#10003;</div> More Retreats</div>
                    <div class="la-item"><div class="la-check">&#10003;</div> More Events</div>
                    <div class="la-item"><div class="la-check">&#10003;</div> More Fun!</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Redesigned CTA Bar -->
<section class="cta-bar" aria-label="Book a lesson call to action">
    <div class="container cta-container">

        <div class="cta-left">
            <div class="cta-icon-wrap" aria-hidden="true">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="var(--green-bright)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
            </div>
            <div class="cta-left-text">
                <h2>READY TO START?</h2>
                <p>Join our community and discover the joy of pickleball.</p>
            </div>
        </div>

        <div class="cta-center">
            <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="cta-btn-main" id="ctaBookLesson">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
                BOOK YOUR LESSON
            </a>
            <span class="cta-or-text">or call 561-855-9500</span>
        </div>

        <div class="cta-right">
            <div class="cta-right-text">
                <p>Spots fill up fast &ndash;<br>reserve your time today!</p>
            </div>
            <svg class="cta-paddle-icon" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <ellipse cx="32" cy="30" rx="22" ry="26" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.3)" stroke-width="2.5"/>
                <rect x="29" y="54" width="6" height="22" rx="3" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.3)" stroke-width="2"/>
                <circle cx="26" cy="22" r="3" fill="rgba(255,255,255,0.25)"/>
                <circle cx="38" cy="22" r="3" fill="rgba(255,255,255,0.25)"/>
                <circle cx="32" cy="30" r="3" fill="rgba(255,255,255,0.25)"/>
                <circle cx="26" cy="38" r="3" fill="rgba(255,255,255,0.25)"/>
                <circle cx="38" cy="38" r="3" fill="rgba(255,255,255,0.25)"/>
            </svg>
        </div>

    </div>
</section>

<?php get_footer(); ?>