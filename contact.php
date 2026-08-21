<?php
/*
Template Name: Contact Page
*/

// ── Form Processing Logic ──────────────────────────────────────────────────
$ct_errors  = array();$ct_success = false;

if ( isset( $_POST['ct_submit'] ) ) {

	if ( ! isset( $_POST['ct_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['ct_nonce'] ), 'pba_contact_form' ) ) {$ct_errors[] = __( 'Security check failed. Please refresh the page and try again.', 'pba' );
	} elseif ( ! empty( $_POST['ct_hp'] ) ) {
		// Honeypot triggered — silently accept without emailing.
		$ct_success = true;
	} else {
		$name     = isset( $_POST['name'] )     ? sanitize_text_field( wp_unslash( $_POST['name'] ) )     : '';
		$email    = isset($_POST['email'] )    ? sanitize_email( wp_unslash( $_POST['email'] ) )        : '';$phone    = isset( $_POST['phone'] )    ? sanitize_text_field( wp_unslash( $_POST['phone'] ) )    : '';
		$category = isset($_POST['category'] ) ? sanitize_text_field( wp_unslash( $_POST['category'] ) ) : '';$message  = isset( $_POST['message'] )  ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

		if ( '' === $name ) {$ct_errors[] = __( 'Please enter your name.', 'pba' );
		}
		if ( '' === $email || ! is_email( $email ) ) {$ct_errors[] = __( 'Please enter a valid email address.', 'pba' );
		}
		if ( '' === $category ) {$ct_errors[] = __( 'Please select what we can help you with.', 'pba' );
		}

		if ( empty( $ct_errors ) ) {$to      = 'contact@gopbacademy.com';
			$subject = sprintf( __( 'New Contact Form Submission from %s', 'pba' ), $name );$body    = "New contact form submission:\n\n"
				. "Name: {$name}\n"
				. "Email: {$email}\n"
				. "Phone: {$phone}\n"
				. "Category: {$category}\n\n"
				. "Message:\n{$message}\n";
			$headers = array(
				'Content-Type: text/plain; charset=UTF-8',
				'From: PB Academy <noreply@gopbacademy.com>',
				'Reply-To: ' . $name . ' <' .$email . '>',
			);

			$ct_success = (bool) wp_mail( $to,$subject, $body,$headers );

			if ( ! $ct_success ) {$ct_errors[] = __( 'Sorry, something went wrong sending your message. Please email us directly or call us.', 'pba' );
			}
		}
	}
}
// ─────────────────────────────────────────────────────────────────────────────

get_header();
?>

<main class="contact-page">

    <!-- ============================================================
         PHASE 1: REDESIGNED HERO SECTION (Static Image)
         ============================================================ -->
    <section class="ct-new-hero" data-mascot-msg="We'd love to hear from you! Send us a message or give us a call.">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/contact-hero-bg.webp" alt="Contact PB Academy" aria-hidden="true" style="object-fit: cover;">
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                
                <h1>CONTACT <br><span class="highlight">PB ACADEMY</span></h1>
                
                <div class="ct-hero-tags" style="margin-top: 25px;">
                    <span class="ct-tag">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="var(--green)">
                            <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.59.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.47 11.47 0 00.57 3.59 1 1 0 01-.25 1.01z"/>
                        </svg>
                        Quick Response
                    </span>
                    <span class="ct-tag">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="var(--green)">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                        </svg>
                        Beginners Welcome
                    </span>
                </div>

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#contact-info" class="qj-link">Contact Info</a>
                        <a href="#community" class="qj-link">Community</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PHASE 2: MAIN CONTACT SPLIT (Info + Refactored Form)
         ============================================================ -->
    <section id="contact-info" class="contact-split container anim-fade-up" data-mascot-msg="Fill out the form below and our team will get right back to you.">
        <div class="contact-split-grid">

            <!-- LEFT: Get In Touch (Phone, Email, Web) -->
            <div class="ct-info-card">
                <div class="ct-card-header">
                    <h2 class="ct-section-title">Get In Touch</h2>
                    <div class="ct-title-line"></div>
                    <p class="ct-card-intro">We'd love to connect with you. Reach out via phone, email, or explore our site!</p>
                </div>
                <ul class="ct-contact-list">
                    <li class="ct-contact-item">
                        <div class="ct-ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.59.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.47 11.47 0 00.57 3.59 1 1 0 01-.25 1.01z"/></svg>
                        </div>
                        <div class="ct-ci-text">
                            <span class="ct-ci-label">Phone</span>
                            <a href="tel:5618559500" class="ct-ci-value">561-855-9500</a>
                        </div>
                    </li>
                    <li class="ct-contact-item">
                        <div class="ct-ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div class="ct-ci-text">
                            <span class="ct-ci-label">Email</span>
                            <a href="mailto:info@gopbacademy.com" class="ct-ci-value">info@gopbacademy.com</a>
                        </div>
                    </li>
                    <li class="ct-contact-item">
                        <div class="ct-ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </div>
                        <div class="ct-ci-text">
                            <span class="ct-ci-label">Website</span>
                            <a href="https://GoPBAcademy.com" target="_blank" class="ct-ci-value">GoPBAcademy.com</a>
                        </div>
                    </li>
                </ul>
                <div class="ct-social-strip" style="margin-top: auto;">
                    <p class="ct-social-label">Follow us</p>
                    <div class="ct-social-icons">
                        <a href="#" class="ct-social-link si-fb" aria-label="Facebook">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                        </a>
                        <a href="#" class="ct-social-link si-ig" aria-label="Instagram">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Contact Form -->
            <div class="ct-form-card" id="ct-form">
                <div class="ct-card-header">
                    <h2 class="ct-section-title">Send Us a Message</h2>
                    <div class="ct-title-line"></div>
                </div>

                <?php if ( $ct_success ) : ?>
                    <div class="jt-alert jt-alert--success" role="status">
                        <?php esc_html_e( 'Thank you! Your message has been sent. We\'ll be in touch shortly.', 'pba' ); ?>
                    </div>
                <?php elseif ( ! empty( $ct_errors ) ) : ?>
                    <div class="jt-alert jt-alert--error" role="alert">
                        <ul>
                            <?php foreach ( $ct_errors as $ct_error ) : ?>
                                <li><?php echo esc_html( $ct_error ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form class="ct-form" action="<?php echo esc_url( get_permalink() . '#ct-form' ); ?>" method="post" novalidate>
                    <?php wp_nonce_field( 'pba_contact_form', 'ct_nonce' ); ?>
                    <input type="text" name="ct_hp" value="" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0;" tabindex="-1" autocomplete="off" aria-hidden="true">
                    
                    <div class="ct-form-row">
                        <div class="ct-form-group ct-form-group--full">
                            <label for="ct-name">Name <span aria-hidden="true">*</span></label>
                            <input type="text" id="ct-name" name="name" placeholder="Your full name" required value="<?php echo isset($name) ? esc_attr($name) : ''; ?>">
                        </div>
                    </div>
                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label for="ct-email">Email Address <span aria-hidden="true">*</span></label>
                            <input type="email" id="ct-email" name="email" placeholder="you@example.com" required value="<?php echo isset($email) ? esc_attr($email) : ''; ?>">
                        </div>
                        <div class="ct-form-group">
                            <label for="ct-phone">Phone Number</label>
                            <input type="tel" id="ct-phone" name="phone" placeholder="(561) 855-9500" value="<?php echo isset($phone) ? esc_attr($phone) : ''; ?>">
                        </div>
                    </div>
                    <div class="ct-form-row">
                        <div class="ct-form-group ct-form-group--full">
                            <label for="ct-category">What can we help you with? <span aria-hidden="true">*</span></label>
                            <select id="ct-category" name="category" required>
                                <option value="" disabled selected>Select a topic...</option>
                                <option value="Lessons & Programs" <?php selected(isset($category) && $category === 'Lessons & Programs'); ?>>Lessons & Programs</option>
                                <option value="Core 4" <?php selected(isset($category) && $category === 'Core 4'); ?>>Core 4</option>
                                <option value="Instructor Question" <?php selected(isset($category) && $category === 'Instructor Question'); ?>>Instructor Question</option>
                                <option value="Events" <?php selected(isset($category) && $category === 'Events'); ?>>Events</option>
                                <option value="Retreats" <?php selected(isset($category) && $category === 'Retreats'); ?>>Retreats</option>
                                <option value="Beginner Manual" <?php selected(isset($category) && $category === 'Beginner Manual'); ?>>Beginner Manual</option>
                                <option value="Shop / Order" <?php selected(isset($category) && $category === 'Shop / Order'); ?>>Shop / Order</option>
                                <option value="Community / HOA / Country Club" <?php selected(isset($category) && $category === 'Community / HOA / Country Club'); ?>>Community / HOA / Country Club</option>
                                <option value="General Question" <?php selected(isset($category) && $category === 'General Question'); ?>>General Question</option>
                                <option value="Other" <?php selected(isset($category) && $category === 'Other'); ?>>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="ct-form-row">
                        <div class="ct-form-group ct-form-group--full">
                            <label for="ct-message">Message</label>
                            <textarea id="ct-message" name="message" rows="4" placeholder="How can we assist you today?"><?php echo isset($message) ? esc_textarea($message) : ''; ?></textarea>
                        </div>
                    </div>
                    <button type="submit" name="ct_submit" value="1" class="btn btn-green ct-submit-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="flex-shrink:0;"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        SEND MESSAGE
                    </button>
                </form>
            </div>

        </div>
    </section>

    <!-- ============================================================
         PHASE 3: COMMUNITY / HOA CALLOUT
         ============================================================ -->
    <section id="community" class="container" style="padding-bottom: 80px;">
        <div class="ct-community-banner anim-fade-up">
            <div class="ct-cb-text">
                <h2>INTERESTED IN BRINGING PB ACADEMY TO YOUR COMMUNITY?</h2>
                <p>We partner with HOAs, country clubs, and local communities to build and manage world-class pickleball programs.</p>
            </div>
            <div class="ct-cb-action">
                <button id="trigger-community-contact" class="btn btn-outline-white">CONTACT US TO LEARN MORE</button>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var commBtn = document.getElementById('trigger-community-contact');
    var categorySelect = document.getElementById('ct-category');
    var formSection = document.getElementById('ct-form');

    if(commBtn && categorySelect && formSection) {
        commBtn.addEventListener('click', function(e) {
            e.preventDefault();
            // Scroll to the contact form smoothly
            formSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            
            // Auto-select the Community/HOA dropdown option
            categorySelect.value = 'Community / HOA / Country Club';
            
            // Provide a brief, accessible visual flash to show the user the field was updated
            categorySelect.style.transition = 'box-shadow 0.3s ease';
            categorySelect.style.boxShadow = '0 0 0 4px rgba(103, 155, 48, 0.4)';
            setTimeout(function() {
                categorySelect.style.boxShadow = 'none';
            }, 1500);
        });
    }
});
</script>

<?php get_footer(); ?>