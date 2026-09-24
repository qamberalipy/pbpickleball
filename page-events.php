<?php
/**
 * Template Name: Events
 */
get_header(); ?>

<main class="events-page pba-bg-pattern">

    <!-- HERO -->
    <section class="hero retreat-hero-full" data-mascot-msg="See what's happening at PB Academy and join the fun!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/event-hero-banner.webp" alt="PB Academy Events" aria-hidden="true" style="object-fit: cover;">
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h2 class="hero-subtitle" style="color: var(--navy) !important; text-shadow: 0 2px 15px rgba(255, 255, 255, 0.8) !important; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 10px; letter-spacing: 2px;">COMING SOON</h2>
                
                <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1;">
                    <span style="color: var(--navy);text-shadow: 0 2px 15px rgb(255 255 255 / 70%)!important;">PB ACADEMY</span><br>
                    <span class="highlight program-hero-main" style="">EVENTS</span>
                </h1>
                <!-- <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; max-width: 800px; margin: 25px auto 0; line-height: 1.6; text-shadow: 0 2px 15px rgba(0,0,0,0.7);">Clinics, round robins, organized play and social gatherings — discover what's happening in the PB Academy community and reserve your spot.</p> -->

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

                <?php
                $delay = 0; // For cascading animations

                // Query the Events CPT
                $events_query = new WP_Query(array(
                    'post_type'      => 'pba_event',
                    'posts_per_page' => -1,
                    'meta_key'       => 'date', // Assuming ACF Date picker is used for sorting
                    'orderby'        => 'meta_value',
                    'order'          => 'ASC'
                ));

                if ( $events_query->have_posts() ) :
                    while ( $events_query->have_posts() ) : $events_query->the_post(); 

                        // Get ACF Fields
                        $location = get_field('location');
                        $date = get_field('date');
                        $time = get_field('time');
                        $event_type = get_field('event_type');
                        $level = get_field('level');
                        $host = get_field('host');
                        $cost = get_field('cost');
                        $max_spots = get_field('max_spots');
                        $reg_link = get_field('registration_button_link');
                        
                        // Safeguard for Availability String
                        $raw_avail = get_field('availability');
                        $availability = is_array($raw_avail) ? (isset($raw_avail['label']) ? $raw_avail['label'] : $raw_avail[0]) : $raw_avail;

                        // Dynamic UI Logic based on Availability
                        $badge_bg_color = 'var(--green)'; // Default (Available)
                        $badge_text_color = 'var(--white)';
                        $avail_text_color = 'var(--green)';
                        $btn_class = 'btn-green';
                        $btn_text = 'REGISTER';
                        
                        if ($availability === 'Limited') {
                            $badge_bg_color = 'var(--accent-orange)';
                            $badge_text_color = 'var(--navy)';
                            $avail_text_color = 'var(--accent-orange)';
                        } elseif ($availability === 'Waitlist Only') {
                            $badge_bg_color = 'var(--navy)';
                            $badge_text_color = 'var(--white)';
                            $avail_text_color = 'var(--navy)';
                            $btn_class = 'btn-navy';
                            $btn_text = 'JOIN WAITLIST';
                        } elseif ($availability === 'Sold Out') {
                            $badge_bg_color = 'var(--navy)';
                            $badge_text_color = 'var(--white)';
                            $avail_text_color = 'var(--navy)';
                            $btn_class = 'btn-navy';
                            $btn_text = 'SOLD OUT';
                        }

                        // Get Featured Image
                        $bg_image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        if(empty($bg_image_url)) {
                            $bg_image_url = 'https://images.unsplash.com/photo-1747027694225-cbf12dd20826?q=80&w=800&auto=format&fit=crop'; // Fallback
                        }
                        
                        // Fallback for Reg Link
                        if(empty($reg_link)) {
                            $reg_link = '#';
                        }
                        ?>

                        <article class="r-card anim-fade-up" style="transition-delay: <?php echo esc_attr($delay); ?>ms;">
                            <div class="r-card__image" style="background-image: url('<?php echo esc_url($bg_image_url); ?>');">
                                <?php if($availability): ?>
                                    <span class="r-card__badge" style="background: <?php echo esc_attr($badge_bg_color); ?>; color: <?php echo esc_attr($badge_text_color); ?>;"><?php echo esc_html($availability); ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="r-card__content">
                                <h3 class="r-card__title" style="margin-bottom: 5px;"><?php the_title(); ?></h3>
                                
                                <?php if($location): ?>
                                <p class="r-card__location" style="margin-bottom: 20px;">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    <strong>Location:</strong> <?php echo esc_html($location); ?>
                                </p>
                                <?php endif; ?>
                                
                                <ul class="r-card-data-grid">
                                    <?php if($date): ?><li><strong>Date:</strong> <?php echo esc_html($date); ?></li><?php endif; ?>
                                    <?php if($time): ?><li><strong>Time:</strong> <?php echo esc_html($time); ?></li><?php endif; ?>
                                    <?php if($event_type): ?><li><strong>Type:</strong> <?php echo esc_html($event_type); ?></li><?php endif; ?>
                                    <?php if($level): ?><li><strong>Level:</strong> <?php echo esc_html($level); ?></li><?php endif; ?>
                                    <?php if($host): ?><li><strong>Host:</strong> <?php echo esc_html($host); ?></li><?php endif; ?>
                                    <?php if($max_spots): ?><li><strong>Max Spots:</strong> <?php echo esc_html($max_spots); ?></li><?php endif; ?>
                                    <?php if($cost): ?><li><strong>Cost:</strong> <?php echo esc_html($cost); ?></li><?php endif; ?>
                                    
                                    <?php if($availability): ?>
                                        <li><strong>Availability:</strong> <span style="color: <?php echo esc_attr($avail_text_color); ?>; font-weight: bold;"><?php echo esc_html($availability); ?></span></li>
                                    <?php endif; ?>
                                </ul>

                                <div class="r-card__actions" style="margin-top: auto;">
                                    <a href="<?php echo esc_url($reg_link); ?>" class="btn <?php echo esc_attr($btn_class); ?>" style="width: 100%; padding: 16px 10px; font-size: 0.85rem; text-align: center; justify-content: center; display: flex;"><?php echo esc_html($btn_text); ?></a>
                                </div>
                            </div>
                        </article>

                        <?php
                        $delay += 150; 
                    endwhile;
                    wp_reset_postdata();
                else: ?>
                    <p>New events announcing soon!</p>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- EVENT CALENDAR -->
    <!-- <section class="r-section pattern-bg" id="calendar" data-mascot-msg="See everything happening this month at a glance.">
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
    </section> -->

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
