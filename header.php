<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;0,800;0,900;1,800&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Announcement Bar -->
    <div class="announcement-bar" role="banner" aria-label="Site announcement">
        <div class="container announcement-inner">
            <div class="announcement-left">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Serving Palm Beach County, FL</span>
                &nbsp;|&nbsp; Beginner Focused. Active Adults. Real Results.
            </div>
            <div class="announcement-right">
                <a href="tel:5618559500" class="ann-contact">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.21 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.11 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
                    561-855-9500
                </a>
                <div class="ann-divider"></div>
                <a href="mailto:info@pbpickleballacademy.com" class="ann-contact">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    info@pbpickleballacademy.com
                </a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container header-content">

            <div class="logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/weblogo.png" alt="PB Pickleball Academy" class="logo-img">
                </a>
            </div>

            <!-- Main Navigation -->
            <nav id="mainNav">
                <ul class="nav-links">
                    <li><a href="<?php echo home_url('/'); ?>" <?php if (is_front_page() || is_home() || is_page('home')) echo 'class="active"'; ?>>HOME</a></li>
                    <li><a href="<?php echo home_url('/about-pba/'); ?>" <?php if (is_page('about-pba')) echo 'class="active"'; ?>>ABOUT PBA</a></li>
                    <li><a href="<?php echo home_url('/program-and-lessons/'); ?>" <?php if (is_page('lessons-programs')) echo 'class="active"'; ?>>LESSONS &amp; PROGRAMS</a></li>
                    <li><a href="<?php echo home_url('/our-instructor/'); ?>" <?php if (is_page('our-instructor')) echo 'class="active"'; ?>>OUR INSTRUCTORS</a></li>
                    <li><a href="<?php echo home_url('/beginner-manual/'); ?>" <?php if (is_page('beginner-manual')) echo 'class="active"'; ?>>BEGINNER MANUAL</a></li>
                    <li><a href="<?php echo home_url('/treats/'); ?>" <?php if (is_page('retreats')) echo 'class="active"'; ?>>RETREATS</a></li>
                    <li><a href="<?php echo home_url('/page-court-directory/'); ?>" <?php if (is_page('court-directory')) echo 'class="active"'; ?>>COURT DIRECTORY</a></li>
                    <li><a href="<?php echo home_url('/shop/'); ?>" <?php if (is_page('shop')) echo 'class="active"'; ?>>SHOP</a></li>
                    <li><a href="<?php echo home_url('/contact-us/'); ?>" <?php if (is_page('contact-us')) echo 'class="active"'; ?>>CONTACT</a></li>
                    <li class="nav-btn-item">
                        <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-green">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            Book a Lesson
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header-right-actions">
                <div class="header-actions">
                    <a href="<?php echo home_url('/book-a-lesson/'); ?>" class="btn btn-green">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        Book a Lesson
                    </a>
                </div>

                <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="mainNav"
                    aria-label="Toggle navigation menu">
                    <span></span><span></span><span></span>
                </button>
            </div>

        </div>
    </header>