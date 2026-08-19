<!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">

                <!-- Col 1: Branding & Contact -->
                <div class="footer-col footer-brand-col">
                    <a href="<?php echo home_url('/'); ?>" class="footer-logo-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/weblogo-footor.png" alt="PB Academy" class="footer-logo-img">
                    </a>
                    <ul class="footer-contact-list">
                        <li class="fc-bold">PB ACADEMY</li>
                        <li><a href="https://gopbacademy.com">GoPBAcademy.com</a></li>
                        <li><a href="tel:5618559500">561.855.9500</a></li>
                        <li><a href="mailto:info@gopbacademy.com">info@gopbacademy.com</a></li>
                    </ul>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="footer-col">
                    <h4>QUICK LINKS</h4>
                    <div class="footer-links">
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <a href="<?php echo home_url('/about-pba/'); ?>">About</a>
                            <a href="<?php echo home_url('/program-and-lessons/'); ?>">Programs</a>
                            <a href="<?php echo home_url('/book-a-lesson/'); ?>">Book Now</a>
                            <a href="<?php echo home_url('/beginner-manual/'); ?>">Manual</a>
                            <a href="<?php echo home_url('/retreats/'); ?>">Retreats</a>
                            <a href="<?php echo home_url('/events/'); ?>">Events</a>
                            <a href="<?php echo home_url('/shop/'); ?>">Shop</a>
                            <a href="<?php echo home_url('/reviews/'); ?>">Reviews</a>
                            <a href="<?php echo home_url('/resources/'); ?>">Resources</a>
                            <a href="<?php echo home_url('/contact-us/'); ?>">Contact</a>
                        </div>
                    </div>
                </div>

                <!-- Col 3: Legal / Policy Links -->
                <div class="footer-col">
                    <h4>LEGAL / POLICY LINKS</h4>
                    <div class="footer-links">
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms &amp; Conditions</a>
                            <a href="#">Copyright / Intellectual Property</a>
                            <a href="#">Cancellation &amp; Refund Policy</a>
                            <a href="#">Shipping / Returns Policy</a>
                            <a href="#">Accessibility Statement</a>
                        </div>
                    </div>
                </div>

                <!-- Col 4: Social Media & Stay Connected -->
                <div class="footer-col">
                    <h4>SOCIAL MEDIA</h4>
                    <div class="social-icons" style="margin-bottom: 16px;">
                        <a href="https://www.facebook.com/gopbacademy" target="_blank" rel="noopener noreferrer" class="social-icon si-fb" aria-label="Facebook">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/gopbacademy" target="_blank" rel="noopener noreferrer" class="social-icon si-ig" aria-label="Instagram">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@gopbacademy" target="_blank" rel="noopener noreferrer" class="social-icon si-yt" aria-label="YouTube">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#fff"/></svg>
                        </a>
                    </div>
                    <p>Sign up for tips, drills, and pickleball updates!</p>
                    <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing!'); this.reset();">
                        <input type="email" placeholder="Your email address" required aria-label="Email address">
                        <button type="submit">SIGN UP</button>
                    </form>
                </div>

            </div>

            <div class="copyright">
                &copy; <?php echo date('Y'); ?> PB Academy. All Rights Reserved.
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


    <!-- ===== Mascot Greet & Disappear ===== -->
    <div id="mascot-companion" role="complementary" aria-label="PB Academy Guide" style="transition: opacity 0.8s ease, transform 0.8s ease;">
        <div id="mascot-bubble">
            <p id="mascot-text">Welcome to PB Academy!</p>
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
           PB PICKLEBALL ACADEMY — Mascot "Greet & Disappear" Engine
           ================================================================ */
        (function () {
            'use strict';

            var companion = document.getElementById('mascot-companion');
            var bubble    = document.getElementById('mascot-bubble');
            var textEl    = document.getElementById('mascot-text');

            if (!companion || !bubble || !textEl) return;

            // 1. Initial State
            bubble.style.opacity = '0';
            
            // 2. Slide in & Greet after 800ms
            setTimeout(function () {
                textEl.textContent = "Welcome to PB Academy! Let's get playing.";
                bubble.style.opacity = '1';
            }, 800);

            // 3. Disappear completely after 7 seconds
            setTimeout(function () {
                bubble.style.opacity = '0'; // Hide bubble
                companion.style.transform = 'translateY(50px)'; // Slide down slightly
                companion.style.opacity = '0'; // Fade out entire mascot
                companion.style.pointerEvents = 'none'; // Prevent invisible clicks
                
                // 4. Remove from DOM to keep memory clean
                setTimeout(function() {
                    companion.remove();
                }, 1000);
            }, 7000);

        })();
    </script>

<!-- PBA Core 4 Global Modal -->
<div id="core4Modal" class="pba-modal" aria-hidden="true">
    <div class="pba-modal-overlay" data-modal-close></div>
    <div class="pba-modal-content" role="dialog" aria-modal="true" aria-labelledby="core4ModalTitle">
        <button class="pba-modal-close" data-modal-close aria-label="Close modal">&times;</button>
        <div class="pba-modal-body">
            <img src="<?php echo get_template_directory_uri(); ?>/media/core4.jpeg" alt="PBA Core 4 Lesson Plan" class="core4-flyer-img">
        </div>
    </div>
</div>

<script>
    /* Modal Trigger Engine */
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('core4Modal');
        var openBtns = document.querySelectorAll('[data-modal-target="core4Modal"]');
        var closeBtns = document.querySelectorAll('[data-modal-close]');

        if(!modal) return;

        openBtns.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.add('is-open');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            });
        });

        closeBtns.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.remove('is-open');
                document.body.style.overflow = '';
            });
        });
    });
</script>

    <!-- Global Back to Top Button -->
    <button id="globalBackToTop" class="back-to-top-btn" aria-label="Scroll to top">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>

    <script>
        /* Back to Top Engine */
        document.addEventListener('DOMContentLoaded', function() {
            var bttButton = document.getElementById('globalBackToTop');
            if(!bttButton) return;

            // Show button after scrolling 300px
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    bttButton.classList.add('btt-visible');
                } else {
                    bttButton.classList.remove('btt-visible');
                }
            });

            // Smooth scroll to top
            bttButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>
