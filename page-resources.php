<?php
/**
 * Template Name: Resources
 */
get_header(); ?>

<main class="resources-page">

    <!-- HERO -->
    <section class="hero retreat-hero-full" data-mascot-msg="Everything you need to feel confident on the court!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/resource-hero-banner.webp" alt="PB Academy Player Resources" aria-hidden="true" style="object-fit: cover;">
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h2 class="hero-subtitle">Learn. Prepare. Play With Confidence.</h2>
                <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1;">PLAYER <br><span class="highlight">RESOURCES</span></h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; max-width: 800px; margin: 25px auto 0; line-height: 1.6; text-shadow: 0 2px 15px rgba(0,0,0,0.7);">Helpful guides on rules, equipment, safety and where to play — built especially for beginners, adults and seniors.</p>

                <div class="mobile-search-wrap" style="max-width: 500px; margin: 30px auto 0;">
                    <form role="search" class="premium-search-form" onsubmit="return false;">
                        <input type="search" class="premium-search-input" placeholder="Search resources (e.g. scoring, paddles...)" aria-label="Search resources" />
                        <button type="submit" class="premium-search-btn" aria-label="Submit Search">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </button>
                    </form>
                </div>

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#topics" class="qj-link">Getting Started</a>
                        <a href="#courts" class="qj-link">Court Directory</a>
                        <a href="#shop-articles" class="qj-link">Shop & Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RESOURCE TOPICS -->
    <section class="r-section bg-gray" id="topics" data-mascot-msg="Browse topics to build your pickleball knowledge.">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">GETTING STARTED TOPICS</h2>

            <div class="programs-grid anim-fade-up" style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px;">

                <!-- NOTE: Added 'resource-trigger' class and removed target="_blank" -->
                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Player Levels & Skills.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f4ca.png" alt="bar chart">
                    <h4>Player Levels & Skills</h4>
                    <p>Understand skill ratings from 2.0 to 5.0 and where you fit as you improve.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Choosing the Right Paddle.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f3d3.png" alt="paddle & ball">
                    <h4>Choosing the Right Paddle</h4>
                    <p>Weight, grip size and material basics to help you pick your first paddle.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Indoor vs. Outdoor Balls.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f3be.png" alt="ball">
                    <h4>Indoor vs. Outdoor Balls</h4>
                    <p>Why ball type matters and how to choose the right one for your court.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Shoes & Court Safety.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f45f.png" alt="shoe">
                    <h4>Shoes & Court Safety</h4>
                    <p>Proper court footwear to prevent slips and support quick lateral moves.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Hydration & Sun Safety.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f4a7.png" alt="droplet">
                    <h4>Hydration & Sun Safety</h4>
                    <p>Simple tips to stay safe and comfortable playing outdoors.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Eye Protection.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f576.png" alt="sunglasses">
                    <h4>Eye Protection</h4>
                    <p>Why safety glasses matter and what to look for in the right pair.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Court Types & Surfaces.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f3df.png" alt="stadium">
                    <h4>Court Types & Surfaces</h4>
                    <p>Learn the differences between indoor, outdoor and hybrid court surfaces.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Handling a Court Emergency.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f6a8.png" alt="siren">
                    <h4>Handling a Court Emergency</h4>
                    <p>What to do if you or another player experiences an injury on the court.</p>
                </a>

                <!-- NO RESOURCE TRIGGER HERE: This just scrolls down -->
                <a href="#courts" class="program-card">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f4cd.png" alt="pin">
                    <h4>Where to Play</h4>
                    <p>Find courts near you — see our full Court Directory below.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Basic rule.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f4cb.png" alt="clipboard">
                    <h4>Basic Rules</h4>
                    <p>The essential rules every new player needs to know before stepping on court.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Scoring.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f522.png" alt="numbers">
                    <h4>Scoring</h4>
                    <p>A simple breakdown of how scoring and side-outs work.</p>
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/media/resources/Pickleball Terminology.png" class="program-card resource-trigger">
                    <img class="program-icon" src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f4d6.png" alt="open book">
                    <h4>Pickleball Terminology</h4>
                    <p>Kitchen, dink, dead ball and other common terms explained simply.</p>
                </a>

            </div>
        </div>
    </section>

    <!-- COURT DIRECTORY -->
    <section class="r-section" id="courts" data-mascot-msg="Find a place to play near you.">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">COURT DIRECTORY — WHERE TO PLAY</h2>

            <div class="r-grid r-grid--upcoming anim-fade-up">

                <article class="r-card anim-fade-up anim-stagger" style="--stagger-delay: 0ms;">
                    <div class="r-card__image" style="background-image:url('https://images.unsplash.com/photo-1778180883807-19962eda4d99?q=80&w=800&auto=format&fit=crop');">
                        <span class="r-card__badge">Public</span>
                    </div>
                    <div class="r-card__content">
                        <h3 class="r-card__title" style="margin-bottom:5px;">Sunset Park Courts</h3>
                        <p class="r-card__location" style="margin-bottom:20px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Boca Raton, FL
                        </p>
                        <ul class="r-card-data-grid">
                            <li><strong>Courts:</strong> 8 Outdoor</li>
                            <li><strong>Surface:</strong> Cushioned Acrylic</li>
                            <li><strong>Lighting:</strong> Yes</li>
                            <li><strong>Access:</strong> Public / Free</li>
                            <li><strong>Phone:</strong> 561-555-0110</li>
                        </ul>
                        <div class="r-card__actions" style="display:flex; gap:10px; margin-top:auto;">
                            <a href="#" class="btn btn-outline" style="flex:1; padding:12px 10px; font-size:0.75rem;">DIRECTIONS</a>
                            <a href="#" class="btn btn-green" style="flex:1; padding:12px 10px; font-size:0.75rem;">WEBSITE</a>
                        </div>
                    </div>
                </article>

                <article class="r-card anim-fade-up anim-stagger" style="--stagger-delay: 150ms;">
                    <div class="r-card__image" style="background-image:url('https://images.unsplash.com/photo-1747027694225-cbf12dd20826?q=80&w=800&auto=format&fit=crop');">
                        <span class="r-card__badge" style="background: var(--navy); color: var(--white);">Private</span>
                    </div>
                    <div class="r-card__content">
                        <h3 class="r-card__title" style="margin-bottom:5px;">Delray Racquet Club</h3>
                        <p class="r-card__location" style="margin-bottom:20px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Delray Beach, FL
                        </p>
                        <ul class="r-card-data-grid">
                            <li><strong>Courts:</strong> 6 Indoor</li>
                            <li><strong>Surface:</strong> Sport Court Tile</li>
                            <li><strong>Lighting:</strong> Yes</li>
                            <li><strong>Access:</strong> Members Only</li>
                            <li><strong>Phone:</strong> 561-555-0134</li>
                        </ul>
                        <div class="r-card__actions" style="display:flex; gap:10px; margin-top:auto;">
                            <a href="#" class="btn btn-outline" style="flex:1; padding:12px 10px; font-size:0.75rem;">DIRECTIONS</a>
                            <a href="#" class="btn btn-green" style="flex:1; padding:12px 10px; font-size:0.75rem;">WEBSITE</a>
                        </div>
                    </div>
                </article>

                <article class="r-card anim-fade-up anim-stagger" style="--stagger-delay: 300ms;">
                    <div class="r-card__image" style="background-image:url('https://images.unsplash.com/photo-1762423570127-c36ff11b883f?q=80&w=800&auto=format&fit=crop');">
                        <span class="r-card__badge">Public</span>
                    </div>
                    <div class="r-card__content">
                        <h3 class="r-card__title" style="margin-bottom:5px;">Boynton Beach Community Courts</h3>
                        <p class="r-card__location" style="margin-bottom:20px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Boynton Beach, FL
                        </p>
                        <ul class="r-card-data-grid">
                            <li><strong>Courts:</strong> 10 Outdoor</li>
                            <li><strong>Surface:</strong> Standard Asphalt</li>
                            <li><strong>Lighting:</strong> Limited</li>
                            <li><strong>Access:</strong> Public / Free</li>
                            <li><strong>Phone:</strong> 561-555-0187</li>
                        </ul>
                        <div class="r-card__actions" style="display:flex; gap:10px; margin-top:auto;">
                            <a href="#" class="btn btn-outline" style="flex:1; padding:12px 10px; font-size:0.75rem;">DIRECTIONS</a>
                            <a href="#" class="btn btn-green" style="flex:1; padding:12px 10px; font-size:0.75rem;">WEBSITE</a>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- WHERE TO SHOP + ARTICLES -->
    <section class="r-section bg-gray" id="shop-articles">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">WHERE TO SHOP</h2>
            <div class="programs-grid anim-fade-up" style="display:grid; grid-template-columns:repeat(3,1fr); gap:20px; margin-bottom:70px;">
                <div class="program-card">
                    <svg class="program-icon" viewBox="0 0 24 24"><path d="M6 2l12 12-4 4L2 6l4-4z"/></svg>
                    <h4>PB Academy Shop</h4>
                    <p>Paddles, balls and apparel selected and sold directly by PB Academy.</p>
                    <a href="<?php echo home_url('/shop/'); ?>" class="btn btn-outline">VISIT SHOP</a>
                </div>
                <div class="program-card">
                    <svg class="program-icon" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a4 4 0 0 1 8 0v2"/></svg>
                    <h4>Local Sporting Goods</h4>
                    <p>Area retailers that carry beginner-friendly paddles and gear.</p>
                    <a href="#" class="btn btn-outline">VIEW GUIDE</a>
                </div>
                <div class="program-card">
                    <svg class="program-icon" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.6 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.6L23 6H6"/></svg>
                    <h4>Trusted Online Retailers</h4>
                    <p>A short list of reputable online stores for pickleball equipment.</p>
                    <a href="#" class="btn btn-outline">VIEW GUIDE</a>
                </div>
            </div>

            <h2 class="r-section-title anim-fade-up">EDUCATIONAL ARTICLES & TIPS</h2>
            <div class="r-grid r-grid--upcoming anim-fade-up">
                <div class="r-grid-img" style="background-image:url('https://images.unsplash.com/photo-1554068865-24cecd4e34b8?q=80&w=800&auto=format&fit=crop');">
                    <span>5 Beginner Tips for Your First Game</span>
                </div>
                <div class="r-grid-img" style="background-image:url('https://images.unsplash.com/photo-1600965962361-9035dbfd1c50?q=80&w=800&auto=format&fit=crop');">
                    <span>Understanding the Kitchen Rule</span>
                </div>
                <div class="r-grid-img" style="background-image:url('https://images.unsplash.com/photo-1595435742656-5272d0b3fa82?q=80&w=800&auto=format&fit=crop');">
                    <span>How to Choose Your First Paddle</span>
                </div>
            </div>
        </div>
    </section>

    <!-- MANUAL CALLOUT -->
    <section class="r-section" style="padding: 70px 20px; text-align:center;">
        <div class="container anim-fade-up" style="max-width:750px;">
            <h2 style="font-family: var(--font-heading); font-size: clamp(1.6rem, 3vw, 2.1rem); font-weight: 900; color: var(--navy); text-transform: uppercase; margin-bottom: 15px;">Want The Complete Beginner Reference?</h2>
            <p style="font-size: 1.05rem; color: var(--gray-text); margin-bottom: 30px;">Explore the PB Academy Beginner Manual — Volume 1 for a full, structured guide to learning the game.</p>
            <a href="<?php echo home_url('/beginner-manual/'); ?>" class="btn btn-green">EXPLORE THE BEGINNER MANUAL</a>
        </div>
    </section>

    <!-- READY TO PRACTICE CTA -->
    <section class="r-section bg-gray" style="padding: 70px 20px; text-align:center;">
        <div class="container anim-fade-up">
            <h2 style="font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.3rem); font-weight: 900; color: var(--navy); text-transform: uppercase; margin-bottom: 15px;">Ready To Practice This On The Court?</h2>
            <p style="font-size: 1.05rem; color: var(--gray-text); max-width: 650px; margin: 0 auto 30px;">Reading is a great start — but nothing beats hands-on instruction with a PB Academy coach.</p>
            <div style="display:flex; gap:15px; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo home_url('/program-and-lessons/'); ?>" class="btn btn-outline">EXPLORE PROGRAMS</a>
                <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-green">BOOK A SESSION</a>
            </div>
        </div>
    </section>

    <!-- EMAIL SIGNUP -->
    <section class="r-interest-section" style="padding: 70px 20px; background-color: var(--white); border-top: 1px solid var(--gray-light);">
        <div class="container">
            <div class="r-interest-card anim-fade-up" style="max-width: 700px; margin: 0 auto; background: var(--gray-bg); border-radius: 16px; padding: 45px; text-align:center; box-shadow: 0 15px 40px rgba(11,32,70,0.08);">
                <h2 style="font-family: var(--font-heading); font-size: clamp(1.5rem, 3vw, 1.9rem); font-weight: 900; color: var(--navy); text-transform: uppercase; margin-bottom: 10px;">GET PB ACADEMY TIPS & UPDATES</h2>
                <p style="font-size: 1rem; color: var(--gray-text); margin-bottom: 25px;">Sign up for helpful pickleball tips, resource updates and Academy news.</p>
                <form class="ct-form" action="#" method="post" novalidate style="display:flex; gap:10px; max-width:480px; margin:0 auto; flex-wrap:wrap;">
                    <input type="email" name="tips_email" placeholder="Your email address" required style="flex:1; min-width:220px; padding:14px 16px; border-radius:6px; border:1px solid var(--gray-light);">
                    <button type="submit" class="btn btn-green" style="padding:14px 24px;">SIGN UP</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Dynamic Resource Modal -->
    <div id="dynamicResourceModal" class="pba-modal" aria-hidden="true">
        <div class="pba-modal-overlay" data-dynamic-close></div>
        <div class="pba-modal-content" role="dialog" aria-modal="true" style="background: transparent; box-shadow: none; display: flex; justify-content: center;">
            <button class="pba-modal-close" data-dynamic-close aria-label="Close modal" style="top: 0; right: 0; z-index: 100;">&times;</button>
            <div class="pba-modal-body" style="padding: 0; max-height: 90vh; overflow-y: auto;">
                <!-- The img src will be injected here by JS -->
                <img id="dynamicResourceImage" src="" alt="PB Academy Resource" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 15px 40px rgba(0,0,0,0.5);">
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('dynamicResourceModal');
            var modalImg = document.getElementById('dynamicResourceImage');
            var triggers = document.querySelectorAll('.resource-trigger');
            var closeBtns = document.querySelectorAll('[data-dynamic-close]');

            if(!modal || !modalImg) return;

            // Open modal and inject image
            triggers.forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    var targetImage = this.getAttribute('href');
                    modalImg.setAttribute('src', targetImage);
                    modal.classList.add('is-open');
                    document.body.style.overflow = 'hidden'; // Stop background scrolling
                });
            });

            // Close modal and clear image
            closeBtns.forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    modal.classList.remove('is-open');
                    document.body.style.overflow = '';
                    // Slight delay before clearing src so it doesn't blink out during fade
                    setTimeout(function() {
                        modalImg.setAttribute('src', '');
                    }, 300);
                });
            });
        });
    </script>
</main>

<?php get_footer(); ?>
