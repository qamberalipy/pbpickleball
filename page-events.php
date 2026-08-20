<?php
/**
 * Template Name: Events
 */
get_header(); ?>

<main class="events-page">

    <!-- HERO -->
    <section class="hero retreat-hero-full" data-mascot-msg="See what's happening at PB Academy and join the fun!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/event-hero-banner.webp" alt="PB Academy Events" aria-hidden="true" style="object-fit: cover;">
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h2 class="hero-subtitle">Play. Socialize. Connect.</h2>
                <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1;">PB ACADEMY <br><span class="highlight">EVENTS</span></h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; max-width: 800px; margin: 25px auto 0; line-height: 1.6; text-shadow: 0 2px 15px rgba(0,0,0,0.7);">Clinics, round robins, organized play and social gatherings — discover what's happening in the PB Academy community and reserve your spot.</p>

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#upcoming" class="qj-link">Upcoming Events</a>
                        <a href="#calendar" class="qj-link">Event Calendar</a>
                        <a href="#past-events" class="qj-link">Past Events</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section class="r-section r-upcoming bg-gray" id="upcoming" data-mascot-msg="Check out what's coming up and register before it sells out.">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">UPCOMING EVENTS</h2>

            <div class="r-grid r-grid--upcoming anim-fade-up">

                <!-- Card 1 -->
                <article class="r-card anim-fade-up anim-stagger" style="--stagger-delay: 0ms;">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1747027694225-cbf12dd20826?q=80&w=800&auto=format&fit=crop');">
                        <span class="r-card__badge">Open</span>
                    </div>
                    <div class="r-card__content">
                        <h3 class="r-card__title" style="margin-bottom: 5px;">Saturday Social Round Robin</h3>
                        <p class="r-card__location" style="margin-bottom: 20px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <strong>Location:</strong> PB Academy Courts, Boca Raton
                        </p>
                        <ul class="r-card-data-grid">
                            <li><strong>Date:</strong> Sept 6, 2026</li>
                            <li><strong>Time:</strong> 9:00 AM - 11:30 AM</li>
                            <li><strong>Type:</strong> Round Robin / Social Play</li>
                            <li><strong>Level:</strong> All Levels Welcome</li>
                            <li><strong>Host:</strong> Charles Azoulay</li>
                            <li><strong>Max Spots:</strong> 24 Players</li>
                            <li><strong>Cost:</strong> $25 per player</li>
                            <li><strong>Availability:</strong> <span style="color: var(--green); font-weight: bold;">12 Spots Left</span></li>
                        </ul>
                        <div class="r-card__actions" style="display:flex; gap:10px; margin-top:auto;">
                            <a href="#" class="btn btn-outline" style="flex:1; padding:12px 10px; font-size:0.75rem;">VIEW DETAILS</a>
                            <a href="#" class="btn btn-green" style="flex:1; padding:12px 10px; font-size:0.75rem;">REGISTER</a>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="r-card anim-fade-up anim-stagger" style="--stagger-delay: 150ms;">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1693142518820-78d7a05f1546?q=80&w=800&auto=format&fit=crop');">
                        <span class="r-card__badge" style="background: var(--accent-orange); color: var(--navy);">Only 3 Spots Left</span>
                    </div>
                    <div class="r-card__content">
                        <h3 class="r-card__title" style="margin-bottom: 5px;">Beginner Skills Clinic</h3>
                        <p class="r-card__location" style="margin-bottom: 20px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <strong>Location:</strong> Delray Beach Community Courts
                        </p>
                        <ul class="r-card-data-grid">
                            <li><strong>Date:</strong> Sept 13, 2026</li>
                            <li><strong>Time:</strong> 10:00 AM - 12:00 PM</li>
                            <li><strong>Type:</strong> Skills Clinic</li>
                            <li><strong>Level:</strong> Beginner</li>
                            <li><strong>Host:</strong> Sarah Jenkins</li>
                            <li><strong>Max Spots:</strong> 12 Players</li>
                            <li><strong>Cost:</strong> $35 per player</li>
                            <li><strong>Availability:</strong> <span style="color: var(--accent-orange); font-weight: bold;">Limited</span></li>
                        </ul>
                        <div class="r-card__actions" style="display:flex; gap:10px; margin-top:auto;">
                            <a href="#" class="btn btn-outline" style="flex:1; padding:12px 10px; font-size:0.75rem;">VIEW DETAILS</a>
                            <a href="#" class="btn btn-green" style="flex:1; padding:12px 10px; font-size:0.75rem;">REGISTER</a>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="r-card anim-fade-up anim-stagger" style="--stagger-delay: 300ms;">
                    <div class="r-card__image" style="background-image: url('https://images.unsplash.com/photo-1778180883807-19962eda4d99?q=80&w=800&auto=format&fit=crop');">
                        <span class="r-card__badge" style="background: var(--navy); color: var(--white);">Sold Out</span>
                    </div>
                    <div class="r-card__content">
                        <h3 class="r-card__title" style="margin-bottom: 5px;">Strategy & Tournament Prep</h3>
                        <p class="r-card__location" style="margin-bottom: 20px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <strong>Location:</strong> PB Academy Courts, Boca Raton
                        </p>
                        <ul class="r-card-data-grid">
                            <li><strong>Date:</strong> Sept 20, 2026</li>
                            <li><strong>Time:</strong> 1:00 PM - 3:30 PM</li>
                            <li><strong>Type:</strong> Strategy Clinic</li>
                            <li><strong>Level:</strong> Intermediate / Advanced</li>
                            <li><strong>Host:</strong> Charles Azoulay</li>
                            <li><strong>Max Spots:</strong> 16 Players</li>
                            <li><strong>Cost:</strong> $40 per player</li>
                            <li><strong>Availability:</strong> <span style="color: var(--navy); font-weight: bold;">Sold Out</span></li>
                        </ul>
                        <div class="r-card__actions" style="display:flex; gap:10px; margin-top:auto;">
                            <a href="#" class="btn btn-outline" style="flex:1; padding:12px 10px; font-size:0.75rem;">VIEW DETAILS</a>
                            <a href="#" class="btn btn-green" style="flex:1; padding:12px 10px; font-size:0.75rem;">SOLD OUT — JOIN WAITLIST</a>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- EVENT CALENDAR -->
    <section class="r-section pattern-bg" id="calendar" data-mascot-msg="See everything happening this month at a glance.">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">EVENT CALENDAR</h2>
            <div class="anim-fade-up" style="max-width: 900px; margin: 0 auto; background: var(--white); border-radius: 16px; padding: 40px; box-shadow: 0 15px 40px rgba(11,32,70,0.08); text-align:center;">
                <p style="font-size: 1.1rem; color: var(--gray-text); margin-bottom: 25px;">A quick, easy-to-read view of everything coming up this month — no digging through pages required.</p>
                <ul style="list-style:none; text-align:left; max-width:560px; margin:0 auto; display:flex; flex-direction:column; gap:14px;">
                    <li style="display:flex; justify-content:space-between; border-bottom:1px solid var(--gray-light); padding-bottom:10px;"><strong>Sept 6</strong><span>Saturday Social Round Robin</span></li>
                    <li style="display:flex; justify-content:space-between; border-bottom:1px solid var(--gray-light); padding-bottom:10px;"><strong>Sept 13</strong><span>Beginner Skills Clinic</span></li>
                    <li style="display:flex; justify-content:space-between; border-bottom:1px solid var(--gray-light); padding-bottom:10px;"><strong>Sept 20</strong><span>Strategy & Tournament Prep</span></li>
                    <li style="display:flex; justify-content:space-between;"><strong>Sept 27</strong><span>Instructor-Observed Play</span></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- PAST EVENTS -->
    <!-- <section class="r-section bg-gray" id="past-events" data-mascot-msg="See the fun our community has already had together.">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">PAST EVENTS</h2>
            <div class="r-grid r-grid--upcoming anim-fade-up">
                <div class="r-grid-img" style="background-image:url('https://images.unsplash.com/photo-1554068865-24cecd4e34b8?q=80&w=800&auto=format&fit=crop');">
                    <span>Summer Round Robin Series</span>
                </div>
                <div class="r-grid-img" style="background-image:url('https://images.unsplash.com/photo-1595435742656-5272d0b3fa82?q=80&w=800&auto=format&fit=crop');">
                    <span>Beginner Bootcamp Weekend</span>
                </div>
                <div class="r-grid-img" style="background-image:url('https://images.unsplash.com/photo-1600965962361-9035dbfd1c50?q=80&w=800&auto=format&fit=crop');">
                    <span>Community Social Mixer</span>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CTA -->
    <section class="r-section" style="padding: 70px 20px; text-align:center;">
        <div class="container anim-fade-up">
            <h2 style="font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.3rem); font-weight: 900; color: var(--navy); text-transform: uppercase; margin-bottom: 15px;">Not Sure Which Event Is Right For You?</h2>
            <p style="font-size: 1.05rem; color: var(--gray-text); max-width: 650px; margin: 0 auto 30px;">Contact PB Academy and we'll help you find the right event for your skill level and schedule.</p>
            <div style="display:flex; gap:15px; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-outline">CONTACT US</a>
                <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-green">REGISTER NOW</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
