<!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">

                <div class="footer-col">
                    <a href="<?php echo home_url('/'); ?>" style="display: inline-block; margin-bottom: 14px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/weblogo-footor.png" alt="PB Pickleball Academy" style="max-height: 110px; width: auto;">
                    </a>
                    <p>Pickleball instruction designed for active adults and seniors.</p>
                </div>

                <div class="footer-col">
                    <h4>CONTACT US</h4>
                    <ul>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            1375 E. Gateway Blvd., #545<br>Boynton Beach, FL 33426
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <a href="tel:5618559500">561-855-9500</a>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <a href="mailto:Info@gopbacademy.com">Info@gopbacademy.com</a>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                            PBPickleballAcademy.com
                        </li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>QUICK LINKS</h4>
                    <div class="footer-links">
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <a href="<?php echo home_url('/our-instructor/'); ?>">About Instructor Charles</a>
                            <a href="<?php echo home_url('/lessons-programs/'); ?>">Lessons &amp; Programs</a>
                            <a href="<?php echo home_url('/beginner-manual/'); ?>">Beginner Training Manual</a>
                            <a href="<?php echo home_url('/treats/'); ?>">Retreats &amp; Pickleball Vacations</a>
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <a href="<?php echo home_url('/page-court-directory/'); ?>">Court Directory</a>
                            <a href="<?php echo home_url('/shop/'); ?>">Shop</a>
                            <a href="<?php echo home_url('/contact-us/'); ?>">Contact Us</a>
                            <a href="<?php echo home_url('/book-a-lesson/'); ?>">Book a Lesson</a>
                            <a href="<?php echo home_url('/faq/'); ?>">FAQ</a>
                        </div>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>STAY CONNECTED</h4>
                    <p>Sign up for tips, drills, and pickleball updates!</p>
                    <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing!'); this.reset();">
                        <input type="email" placeholder="Your email address" required aria-label="Email address">
                        <button type="submit">SIGN UP</button>
                    </form>
                    <a href="<?php echo home_url('/join-our-team/'); ?>" class="btn btn-outline join-team-btn" style="margin-top: 15px; width: 100%; max-width: 320px; display: inline-flex; justify-content: center; align-items: center; box-sizing: border-box;">Join Our Team</a>
                </div>

            </div>

            <div class="copyright">
                &copy; <?php echo date('Y'); ?> PB Pickleball Academy. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
    /* ================================================================
       PB PICKLEBALL ACADEMY — Consolidated Page Scripts
       All JS in one place, running after DOM is ready.
       ================================================================ */
    (function () {
        'use strict';

        /* ────────────────────────────────────────────────────────────
           1. MOBILE NAV TOGGLE
        ──────────────────────────────────────────────────────────── */
        var navToggle = document.getElementById('navToggle');
        var mainNav   = document.getElementById('mainNav');

        if (navToggle && mainNav) {
            navToggle.addEventListener('click', function () {
                var isOpen = mainNav.classList.toggle('open');
                navToggle.setAttribute('aria-expanded', isOpen);
            });
            mainNav.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    mainNav.classList.remove('open');
                    navToggle.setAttribute('aria-expanded', 'false');
                });
            });
        }

        /* ────────────────────────────────────────────────────────────
           2. HERO TYPING ANIMATION
           Moved from front-page.php — runs once, types tagline,
           leaves blinking cursor. 80 ms/char for 60+ readability.
        ──────────────────────────────────────────────────────────── */
        (function () {
            var PHRASE      = 'Beginners Welcome. Friends for Life.';
            var SPEED_MS    = 80;
            var START_DELAY = 600;

            var tagline = document.querySelector('.hero-tagline.type-effect');
            if (!tagline) return;

            var cursor = document.createElement('span');
            cursor.className = 'cursor';
            cursor.setAttribute('aria-hidden', 'true');
            cursor.textContent = '|';

            var textNode = document.createTextNode('');
            tagline.appendChild(textNode);
            tagline.appendChild(cursor);

            var index = 0;

            function typeNext() {
                if (index < PHRASE.length) {
                    textNode.nodeValue += PHRASE.charAt(index);
                    index++;
                    setTimeout(typeNext, SPEED_MS);
                }
                /* Done — cursor stays, blinks forever. No loop. */
            }

            var prefersReduced = window.matchMedia &&
                                 window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            setTimeout(function () {
                if (prefersReduced) {
                    textNode.nodeValue = PHRASE; /* show instantly */
                } else {
                    typeNext();
                }
            }, START_DELAY);
        })();

        /* ────────────────────────────────────────────────────────────
           3. TESTIMONIALS CAROUSEL  +  AUTO-PLAY
           • Auto-advances every 4000 ms
           • Pauses on mouseenter — CRITICAL for senior readability
           • Resumes on mouseleave
           • Wraps back to first card for seamless looping
        ──────────────────────────────────────────────────────────── */
        (function () {
            var track             = document.getElementById('testimonialTrack');
            var prevBtn           = document.getElementById('prevBtn');
            var nextBtn           = document.getElementById('nextBtn');
            var carouselContainer = document.querySelector('.carousel-container');

            if (!track || !prevBtn || !nextBtn) return;

            var cards      = Array.from(track.children);
            var totalCards = cards.length;
            var currentIndex = 0;
            var autoTimer    = null;

            function getCardsPerView() {
                if (window.innerWidth <= 768) return 1;
                if (window.innerWidth <= 980) return 2;
                return 3;
            }

            function updateCarousel() {
                var cardsPerView = getCardsPerView();
                var cardWidth    = cards[0].getBoundingClientRect().width;
                var gap          = 20;
                track.style.transform = 'translateX(-' + (currentIndex * (cardWidth + gap)) + 'px)';
                prevBtn.disabled = currentIndex === 0;
                nextBtn.disabled = currentIndex >= (totalCards - cardsPerView);
            }

            function advance() {
                var cardsPerView = getCardsPerView();
                if (currentIndex < totalCards - cardsPerView) {
                    currentIndex++;
                } else {
                    currentIndex = 0; /* wrap to start */
                }
                updateCarousel();
            }

            function startAutoPlay() {
                stopAutoPlay();
                autoTimer = setInterval(advance, 4000);
            }

            function stopAutoPlay() {
                if (autoTimer) { clearInterval(autoTimer); autoTimer = null; }
            }

            nextBtn.addEventListener('click', advance);

            prevBtn.addEventListener('click', function () {
                if (currentIndex > 0) { currentIndex--; updateCarousel(); }
            });

            window.addEventListener('resize', function () {
                var cardsPerView = getCardsPerView();
                if (currentIndex > totalCards - cardsPerView) {
                    currentIndex = Math.max(0, totalCards - cardsPerView);
                }
                updateCarousel();
            });

            /* Hover pause — seniors must be able to read at their own pace */
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', stopAutoPlay);
                carouselContainer.addEventListener('mouseleave', startAutoPlay);
            }

            updateCarousel();
            startAutoPlay();
        })();

        /* ────────────────────────────────────────────────────────────
           4. SCROLL-REVEAL  +  CASCADE STAGGER
           • 150 ms between each staggered child (vs. old 80 ms)
             — slower cascade is far more legible for 60+ users
           • .founder-achievements li + .manual-list-new li both
             stagger so checkmarks draw the eye down the list
        ──────────────────────────────────────────────────────────── */
        (function () {
            var STAGGER_MS = 150; /* deliberate, visible cascade */

            var rules = [
                /* selector                              anim class        stagger */
                ['.features .feature-item',             'anim-fade-up',   true ],
                ['.programs-grid .program-card',        'anim-fade-up',   true ],
                ['.section-title',                      'anim-fade-up',   false],
                ['.manual-img-left',                    'anim-fade-left', false],
                ['.manual-content',                     'anim-fade-right',false],
                ['.t-card',                             'anim-fade-up',   true ],
                ['.founder-col:first-child',            'anim-fade-left', false],
                ['.founder-col.looking-ahead-col',      'anim-fade-right',false],
                ['.cta-left',                           'anim-fade-left', false],
                ['.cta-center',                         'anim-scale-in',  false],
                ['.cta-right',                          'anim-fade-right',false],
                ['.footer-col',                         'anim-fade-up',   true ],
                ['.la-item',                            'anim-fade-up',   true ],
                ['.manual-list-new li',                 'anim-fade-up',   true ], /* checklist cascade */
                ['.founder-achievements li',            'anim-fade-up',   true ], /* founder bullets cascade */
            ];

            rules.forEach(function (rule) {
                var selector  = rule[0];
                var animClass = rule[1];
                var stagger   = rule[2];

                document.querySelectorAll(selector).forEach(function (el, i) {
                    el.classList.add(animClass);
                    if (stagger) {
                        el.classList.add('anim-stagger');
                        el.style.setProperty('--stagger-delay', (i * STAGGER_MS) + 'ms');
                    }
                });
            });

            /* Main scroll observer — threshold 0.12 catches items near top of viewport */
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });

            document.querySelectorAll(
                '.anim-fade-up, .anim-fade-left, .anim-fade-right, .anim-scale-in'
            ).forEach(function (el) { io.observe(el); });

            /* Tighter observer for section titles — needs to be more visible */
            var titleIO = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) {
                        e.target.classList.add('is-visible');
                        titleIO.unobserve(e.target);
                    }
                });
            }, { threshold: 0.5 });

            document.querySelectorAll('.section-title').forEach(function (el) {
                titleIO.observe(el);
            });
        })();

    })(); /* end main IIFE */
    </script>


    <!-- ===== Mascot Scroll Companion ===== -->
    <div id="mascot-companion" role="complementary" aria-label="PB Academy Guide">
        <div id="mascot-bubble">
            <p id="mascot-text">Welcome to PB Academy! Scroll down to explore.</p>
        </div>
        <img
            src="<?php echo get_template_directory_uri(); ?>/media/mascot.png"
            alt="PB Mascot"
            id="mascot-avatar"
            class="mascot-img"
        >
    </div>

    <script>
        /* ================================================================
           PB PICKLEBALL ACADEMY — Mascot Scroll Companion Guide Engine
           Dependency-free Vanilla JS | IntersectionObserver API
           ================================================================ */
        (function () {
            'use strict';

            /* ── DOM refs ── */
            var bubble   = document.getElementById('mascot-bubble');
            var textEl   = document.getElementById('mascot-text');
            var sections = Array.from(document.querySelectorAll('section[data-mascot-msg]'));

            if (!bubble || !textEl || sections.length === 0) return;

            /* ── State ── */
            var currentMsg  = '';
            var hideTimer   = null;
            var isAnimating = false;

            /* ────────────────────────────────────────────────
               showBubble(msg)
               Fades bubble out → swaps text → fades back in.
               200 ms total per transition, per spec.
            ──────────────────────────────────────────────── */
            function showBubble(msg) {
                /* Skip duplicate messages that are already visible */
                if (msg === currentMsg && bubble.style.opacity === '1') return;

                /* Cancel any pending auto-hide */
                clearTimeout(hideTimer);

                if (isAnimating) return; /* don't stack transitions */
                isAnimating = true;

                /* PHASE 1 — fade OUT (200 ms) */
                bubble.style.opacity = '0';

                setTimeout(function () {
                    /* PHASE 2 — swap text while invisible */
                    textEl.textContent = msg;
                    currentMsg = msg;

                    /* PHASE 3 — fade IN (200 ms) */
                    bubble.style.opacity = '1';
                    isAnimating = false;

                    /* Auto-hide after 6 s of inactivity */
                    hideTimer = setTimeout(function () {
                        bubble.style.opacity = '0';
                    }, 6000);
                }, 200);
            }

            /* ────────────────────────────────────────────────
               setActiveSection(section)
               Applies .active-focus to the intersecting section
               and strips it from every other section.
            ──────────────────────────────────────────────── */
            function setActiveSection(activeEl) {
                sections.forEach(function (s) {
                    if (s === activeEl) {
                        s.classList.add('active-focus');
                    } else {
                        s.classList.remove('active-focus');
                    }
                });
            }

            /* ────────────────────────────────────────────────
               IntersectionObserver
               Threshold 0.35 — triggers when 35 % of a section
               is visible in the viewport.
            ──────────────────────────────────────────────── */
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        var msg = entry.target.getAttribute('data-mascot-msg');

                        /* Update speech bubble */
                        if (msg) showBubble(msg);

                        /* Highlight the active section */
                        setActiveSection(entry.target);
                    }
                });
            }, {
                threshold: 0.35
            });

            /* Observe every qualifying section */
            sections.forEach(function (s) { io.observe(s); });

            /* ────────────────────────────────────────────────
               Welcome message — shown 800 ms after page load
            ──────────────────────────────────────────────── */
            var welcomeMsg = textEl.textContent.trim();
            bubble.style.opacity = '0'; /* start hidden */

            setTimeout(function () {
                showBubble(welcomeMsg);
            }, 800);

        })();
    </script>


    <?php wp_footer(); ?>
</body>
</html>