<?php
/**
 * Template Name: Reviews
 */
get_header(); ?>

<main class="reviews-page">

    <!-- HERO -->
    <section class="hero retreat-hero-full" data-mascot-msg="See what real PB Academy players have to say!">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/review-hero-banner.webp" alt="PB Academy Reviews" aria-hidden="true" style="object-fit: cover;">
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h2 class="hero-subtitle">Real Players. Real Progress. Real Fun.</h2>
                <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1;">WHAT OUR PLAYERS <br><span class="highlight">ARE SAYING</span></h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; max-width: 800px; margin: 25px auto 0; line-height: 1.6; text-shadow: 0 2px 15px rgba(0,0,0,0.7);">Hear directly from students who have learned, improved and had fun with PB Academy.</p>

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#reviews" class="qj-link">Student Reviews</a>
                        <a href="#leave-review" class="qj-link">Leave A Review</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEW CARDS -->
    <section class="r-section bg-gray pattern-bg" id="reviews">
        <div class="container">
            <h2 class="r-section-title anim-fade-up">STUDENT REVIEWS</h2>

            <div class="r-grid r-grid--upcoming anim-fade-up">

                <!-- Review 1 -->
                <article class="t-card anim-fade-up anim-stagger" style="--stagger-delay: 0ms; max-width: none;">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=200&auto=format&fit=crop" alt="Margaret R.">
                    <div class="cd-stars" style="margin-bottom: 12px;">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                    </div>
                    <p>"I never thought I'd feel comfortable on a pickleball court at 68 years old. The instructors were so patient and made everything easy to follow."</p>
                    <div class="t-author">Margaret R. — Boca Raton, FL</div>
                    <div style="margin-top: 10px; font-size: 0.75rem; color: var(--gray-text);">PBA Core 4 &middot; Sept 2026</div>
                </article>

                <!-- Review 2 -->
                <article class="t-card anim-fade-up anim-stagger" style="--stagger-delay: 150ms; max-width: none;">
                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=200&auto=format&fit=crop" alt="Dennis K.">
                    <div class="cd-stars" style="margin-bottom: 12px;">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg class="empty" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                    </div>
                    <p>"Charles is an incredible instructor — clear, encouraging, and genuinely invested in helping you improve. The round robins are the highlight of my week."</p>
                    <div class="t-author">Dennis K. — Delray Beach, FL</div>
                    <div style="margin-top: 10px; font-size: 0.75rem; color: var(--gray-text);">Private Lessons &middot; Aug 2026</div>
                </article>

                <!-- Review 3 -->
                <article class="t-card anim-fade-up anim-stagger" style="--stagger-delay: 300ms; max-width: none;">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=200&auto=format&fit=crop" alt="Linda P.">
                    <div class="cd-stars" style="margin-bottom: 12px;">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                    </div>
                    <p>"The Beginner Manual paired with the Core 4 lessons made everything click. I finally understand the rules and I'm actually enjoying playing now!"</p>
                    <div class="t-author">Linda P. — Boynton Beach, FL</div>
                    <div style="margin-top: 10px; font-size: 0.75rem; color: var(--gray-text);">Beginner Manual &middot; Jul 2026</div>
                </article>

            </div>

            <div style="text-align:center; margin-top: 50px;" class="anim-fade-up">
                <a href="#leave-review" class="btn btn-green">LEAVE A REVIEW</a>
                <a href="#" target="_blank" rel="noopener" class="btn btn-outline" style="margin-left: 12px;">SEE OUR GOOGLE REVIEWS</a>
            </div>
        </div>
    </section>

    <!-- LEAVE A REVIEW FORM -->
    <section class="r-interest-section" id="leave-review" style="padding: 80px 20px; background-color: var(--white); border-top: 1px solid var(--gray-light);">
        <div class="container">
            <div class="r-interest-card anim-fade-up" style="max-width: 800px; margin: 0 auto; background: var(--gray-bg); border-radius: 16px; padding: 50px; box-shadow: 0 15px 40px rgba(11,32,70,0.08);">
                <div style="text-align:center; margin-bottom: 40px;">
                    <h2 style="font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.3rem); font-weight: 900; color: var(--navy); text-transform: uppercase; margin-bottom: 10px;">SHARE YOUR EXPERIENCE</h2>
                    <p style="font-size: 1.05rem; color: var(--gray-text); max-width: 600px; margin: 0 auto;">Your feedback helps other players feel confident joining PB Academy.</p>
                </div>

                <form class="r-interest-form ct-form" action="#" method="post" novalidate>
                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="rev-name">Name <span aria-hidden="true">*</span></label>
                            <input type="text" id="rev-name" name="rev_name" required>
                        </div>
                        <div class="ct-form-group">
                            <label for="rev-email">Email <span aria-hidden="true">*</span></label>
                            <input type="email" id="rev-email" name="rev_email" required>
                        </div>
                    </div>

                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="rev-program">Program / Service <span aria-hidden="true">*</span></label>
                            <select id="rev-program" name="rev_program" required>
                                <option value="" disabled selected>Select a program...</option>
                                <option value="Private Lessons">Private Lessons</option>
                                <option value="Group Lessons">Group Lessons</option>
                                <option value="PBA Core 4">PBA Core 4</option>
                                <option value="Clinics">Clinics</option>
                                <option value="Events">Events</option>
                                <option value="Retreats">Retreats</option>
                                <option value="Beginner Manual">Beginner Manual</option>
                            </select>
                        </div>
                        <div class="ct-form-group">
                            <label for="rev-instructor">Instructor (if applicable)</label>
                            <input type="text" id="rev-instructor" name="rev_instructor" placeholder="e.g., Charles Azoulay">
                        </div>
                    </div>

                    <div class="ct-form-group">
                        <label for="rev-rating">Star Rating <span aria-hidden="true">*</span></label>
                        <select id="rev-rating" name="rev_rating" required>
                            <option value="" disabled selected>Select a rating...</option>
                            <option value="5">5 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="2">2 Stars</option>
                            <option value="1">1 Star</option>
                        </select>
                    </div>

                    <div class="ct-form-group">
                        <label for="rev-comments">Your Review <span aria-hidden="true">*</span></label>
                        <textarea id="rev-comments" name="rev_comments" rows="5" required placeholder="Tell us about your experience..."></textarea>
                    </div>

                    <div class="ct-form-group">
                        <label for="rev-photo">Optional Photo</label>
                        <input type="file" id="rev-photo" name="rev_photo" accept="image/*">
                    </div>

                    <div class="ct-form-group" style="flex-direction: row; align-items: center; gap: 10px;">
                        <input type="checkbox" id="rev-permission" name="rev_permission" style="width:auto;">
                        <label for="rev-permission" style="margin:0;">I give PB Academy permission to publicly display my review and photo (if provided).</label>
                    </div>

                    <button type="submit" class="btn btn-green ct-submit-btn" style="width: 100%; justify-content: center; padding: 18px; font-size: 1rem; margin-top: 15px;">
                        SUBMIT REVIEW
                    </button>
                </form>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
