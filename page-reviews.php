<?php
$rev_errors  = array();
$rev_success = false;

if ( isset( $_POST['rev_submit'] ) ) {
    if ( ! isset( $_POST['rev_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['rev_nonce'] ), 'pba_review_form' ) ) {
        $rev_errors[] = __( 'Security check failed. Please refresh and try again.', 'pba' );
    } elseif ( ! empty( $_POST['rev_hp'] ) ) {
        $rev_success = true; // Honeypot catch
    } else {
        $name       = isset($_POST['rev_name']) ? sanitize_text_field(wp_unslash($_POST['rev_name'])) : '';
        $email      = isset($_POST['rev_email']) ? sanitize_email(wp_unslash($_POST['rev_email'])) : '';
        $program    = isset($_POST['rev_program']) ? sanitize_text_field(wp_unslash($_POST['rev_program'])) : '';
        $instructor = isset($_POST['rev_instructor']) ? sanitize_text_field(wp_unslash($_POST['rev_instructor'])) : '';
        $rating     = isset($_POST['rev_rating']) ? sanitize_text_field(wp_unslash($_POST['rev_rating'])) : '';
        $comments   = isset($_POST['rev_comments']) ? sanitize_textarea_field(wp_unslash($_POST['rev_comments'])) : '';
        $permission = isset($_POST['rev_permission']) ? 'Yes' : 'No';

        if ( '' === $name ) $rev_errors[] = 'Please enter your name.';
        if ( '' === $email || ! is_email( $email ) ) $rev_errors[] = 'Please enter a valid email address.';
        if ( '' === $rating ) $rev_errors[] = 'Please select a star rating.';
        if ( '' === $comments ) $rev_errors[] = 'Please write your review.';

        if ( empty( $rev_errors ) ) {
            $to      = 'support@gopbacademy.com';
            $subject = sprintf( 'New Student Review from %s', $name );
            $body    = "New Review Submitted:\n\nName: {$name}\nEmail: {$email}\nProgram: {$program}\nInstructor: {$instructor}\nRating: {$rating} Stars\nPermission to Publish: {$permission}\n\nReview:\n{$comments}";
            $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: PB Academy <noreply@gopbacademy.com>', 'Reply-To: ' . $name . ' <' . $email . '>');

            $attachments = array();
            if ( ! empty( $_FILES['rev_photo']['name'] ) ) {
                if ( ! function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );
                $upload_overrides = array( 'test_form' => false );
                $movefile = wp_handle_upload( $_FILES['rev_photo'], $upload_overrides );
                if ( $movefile && ! isset( $movefile['error'] ) ) {
                    $attachments[] = $movefile['file'];
                }
            }

            $rev_success = (bool) wp_mail( $to, $subject, $body, $headers, $attachments );
            if ( ! $rev_success ) $rev_errors[] = 'Sorry, your review failed to send. Please try again.';
        }
    }
}

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
                <!-- <h2 class="hero-subtitle">Real Players. Real Progress. Real Fun.</h2> -->
                <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1;"><span style="color: var(--navy);text-shadow: 0 2px 15px rgb(255 255 255 / 70%)!important;">WHAT OUR PLAYERS </span><br><span class="highlight program-hero-main" style="">ARE SAYING</span></h1>
                <!-- <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; max-width: 800px; margin: 25px auto 0; line-height: 1.6; text-shadow: 0 2px 15px rgba(0,0,0,0.7);">Hear directly from students who have learned, improved and had fun with PB Academy.</p> -->

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

                <article class="t-card anim-fade-up anim-stagger" style="--stagger-delay: 0ms; max-width: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/t3.jpg" alt="Danita M.">
                    <div class="cd-stars" style="margin-bottom: 12px;">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                    </div>
                    <p>"Coach Charles has a gift for making pickleball easy to understand. His first lesson was simple: 'Keep your eyes on the ball.' That one tip alone improved my game immediately. His classes are fun, encouraging, and stress-free."</p>
                    <div class="t-author">Danita M.</div>
                </article>

                <article class="t-card anim-fade-up anim-stagger" style="--stagger-delay: 150ms; max-width: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/t1.jpg" alt="Harvey M.">
                    <div class="cd-stars" style="margin-bottom: 12px;">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                    </div>
                    <p>"I was nervous about learning pickleball, but Coach Charles made me feel comfortable from day one. He breaks the game down into simple steps and focuses on building confidence. I now look forward to playing every week."</p>
                    <div class="t-author">Harvey M.</div>
                </article>

                <article class="t-card anim-fade-up anim-stagger" style="--stagger-delay: 300ms; max-width: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/t2.jpg" alt="Lisa P.">
                    <div class="cd-stars" style="margin-bottom: 12px;">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                    </div>
                    <p>"I thought pickleball was difficult until I took Coach Charles beginner clinic. His explanation of serving and court positioning made everything easy."</p>
                    <div class="t-author">Lisa P.</div>
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

<!-- Success/Error Messages -->
<?php if ( $rev_success ) : ?>
    <div class="jt-alert jt-alert--success" role="status" style="margin-bottom: 30px;">
        Thank you! Your review has been submitted successfully.
    </div>
<?php elseif ( ! empty( $rev_errors ) ) : ?>
    <div class="jt-alert jt-alert--error" role="alert" style="margin-bottom: 30px;">
        <ul>
            <?php foreach ( $rev_errors as $error ) echo '<li>' . esc_html( $error ) . '</li>'; ?>
        </ul>
    </div>
<?php endif; ?>

<form class="r-interest-form ct-form" action="<?php echo esc_url( get_permalink() . '#leave-review' ); ?>" method="post" enctype="multipart/form-data" novalidate>
    <?php wp_nonce_field( 'pba_review_form', 'rev_nonce' ); ?>
    <input type="text" name="rev_hp" value="" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0;" tabindex="-1" autocomplete="off" aria-hidden="true">

    <div class="ct-form-row">
        <div class="ct-form-group">
            <label for="rev-name">Name <span aria-hidden="true">*</span></label>
            <input type="text" id="rev-name" name="rev_name" required value="<?php echo isset($name) && !$rev_success ? esc_attr($name) : ''; ?>">
        </div>
        <div class="ct-form-group">
            <label for="rev-email">Email <span aria-hidden="true">*</span></label>
            <input type="email" id="rev-email" name="rev_email" required value="<?php echo isset($email) && !$rev_success ? esc_attr($email) : ''; ?>">
        </div>
    </div>

    <div class="ct-form-row">
        <div class="ct-form-group">
            <label for="rev-program">Program / Service <span aria-hidden="true">*</span></label>
            <select id="rev-program" name="rev_program" required>
                <option value="" disabled <?php selected(empty($program) || $rev_success); ?>>Select a program...</option>
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
            <input type="text" id="rev-instructor" name="rev_instructor" placeholder="e.g., Charles Azoulay" value="<?php echo isset($instructor) && !$rev_success ? esc_attr($instructor) : ''; ?>">
        </div>
    </div>

    <div class="ct-form-group" style="margin-bottom: 16px;">
        <label for="rev-rating">Star Rating <span aria-hidden="true">*</span></label>
        <select id="rev-rating" name="rev_rating" required>
            <option value="" disabled <?php selected(empty($rating) || $rev_success); ?>>Select a rating...</option>
            <option value="5">5 Stars</option>
            <option value="4">4 Stars</option>
            <option value="3">3 Stars</option>
            <option value="2">2 Stars</option>
            <option value="1">1 Star</option>
        </select>
    </div>

    <div class="ct-form-group" style="margin-bottom: 16px;">
        <label for="rev-comments">Your Review <span aria-hidden="true">*</span></label>
        <textarea id="rev-comments" name="rev_comments" rows="5" required placeholder="Tell us about your experience..."><?php echo isset($comments) && !$rev_success ? esc_textarea($comments) : ''; ?></textarea>
    </div>

    <div class="ct-form-group" style="margin-bottom: 16px;">
        <label for="rev-photo">Optional Photo</label>
        <input type="file" id="rev-photo" name="rev_photo" accept="image/*" style="padding: 10px; background: transparent; border: 1px dashed var(--gray-light);">
    </div>

    <div class="ct-form-group" style="flex-direction: row; align-items: center; gap: 10px; margin-bottom: 16px;">
        <input type="checkbox" id="rev-permission" name="rev_permission" style="width:auto; cursor: pointer;">
        <label for="rev-permission" style="margin:0; text-transform: none; font-family: var(--font-body); cursor: pointer;">I give PB Academy permission to publicly display my review and photo (if provided).</label>
    </div>

    <button type="submit" name="rev_submit" value="1" class="btn btn-green ct-submit-btn" style="width: 100%; justify-content: center; padding: 18px; font-size: 1rem; margin-top: 15px;">
        SUBMIT REVIEW
    </button>
</form>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
