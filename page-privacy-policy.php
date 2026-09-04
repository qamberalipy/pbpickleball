<?php
/**
 * Template Name: Privacy Policy
 */
get_header(); ?>

<style>
/* Scoped Typography for Legal Document Readability */
.privacy-document {
    color: var(--gray-text);
    line-height: 1.7;
    font-size: 1.05rem;
    font-family: var(--font-body);
}
.privacy-document h2 {
    font-family: var(--font-heading);
    color: var(--navy);
    font-size: 1.5rem;
    font-weight: 900;
    text-transform: uppercase;
    margin: 2.5rem 0 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid var(--gray-light);
}
.privacy-document p {
    margin-bottom: 1.2rem;
}
.privacy-document ul {
    list-style-type: disc;
    padding-left: 1.5rem;
    margin-bottom: 1.5rem;
}
.privacy-document li {
    margin-bottom: 0.5rem;
}
.privacy-document a {
    color: var(--green);
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s ease;
}
.privacy-document a:hover {
    color: var(--navy);
    text-decoration: underline;
}
@media (max-width: 768px) {
    .privacy-document h2 { font-size: 1.3rem; }
    .privacy-document { font-size: 0.95rem; }
    .privacy-content-section { padding: 40px 15px 60px !important; }
}
</style>

<main class="privacy-page pba-bg-pattern">

    <!-- HERO SECTION (Mirrored from Resources Page to fix mobile layout) -->
    <section class="hero retreat-hero-full" style="min-height: 35vh; padding-top: 80px;">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/resource-hero-banner.webp" alt="PB Academy Privacy Policy" aria-hidden="true" style="object-fit: cover; object-position: center;">
        <div class="hero-container" style="padding-bottom: 20px !important;">
            <div class="hero-content anim-fade-up">
                <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1; margin: 0 auto; text-align: center;">
                    <span style="color: var(--navy); text-shadow: 0 2px 15px rgb(255 255 255 / 70%)!important;">PRIVACY</span><br>
                    <span class="highlight program-hero-main">POLICY</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="privacy-content-section" style="padding: 60px 20px 100px;">
        <div class="container">
            <!-- Removed anim-fade-up and forced visibility to prevent mobile hiding -->
            <div class="ct-premium-card privacy-document" style="max-width: 1000px; margin: 0 auto; opacity: 1 !important; transform: none !important; visibility: visible !important;">
                
                <p><strong>Effective Date:</strong> September 3, 2026</p>
                
                <p>PB Academy ("PB Academy," "we," "us," or "our") respects your privacy and is committed to protecting the personal information you share with us. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit GoPBAcademy.com, use our services, book lessons or programs, purchase products, register for events or retreats, or otherwise interact with us.</p>
                
                <p>By using our website or services, you agree to the practices described in this Privacy Policy.</p>

                <h2>1. Information We Collect</h2>
                <p>We may collect personal information that you voluntarily provide to us, including:</p>
                <ul>
                    <li>Name</li>
                    <li>Email address</li>
                    <li>Phone number</li>
                    <li>Billing and payment information</li>
                    <li>Booking and registration information</li>
                    <li>Information submitted through contact forms</li>
                    <li>Information related to lessons, programs, retreats, events, or purchases</li>
                    <li>Any other information you choose to provide when communicating with us</li>
                </ul>
                <p>We may also automatically collect certain information when you visit our website, such as:</p>
                <ul>
                    <li>IP address</li>
                    <li>Browser type</li>
                    <li>Device information</li>
                    <li>Operating system</li>
                    <li>Pages viewed</li>
                    <li>Date and time of visits</li>
                    <li>Referring website addresses</li>
                    <li>General website usage and interaction data</li>
                </ul>

                <h2>2. How We Use Your Information</h2>
                <p>We may use your information to:</p>
                <ul>
                    <li>Provide and manage our pickleball lessons, programs, and services</li>
                    <li>Process bookings, registrations, and purchases</li>
                    <li>Communicate with you regarding your appointments or inquiries</li>
                    <li>Send confirmations, updates, and service-related communications</li>
                    <li>Respond to customer service requests</li>
                    <li>Send newsletters, tips, drills, promotions, and pickleball updates, where permitted</li>
                    <li>Improve our website, services, and customer experience</li>
                    <li>Analyze website usage and performance</li>
                    <li>Maintain the security and functionality of our website</li>
                    <li>Comply with legal obligations</li>
                </ul>

                <h2>3. Email Communications</h2>
                <p>If you subscribe to our email list, we may send you information about:</p>
                <ul>
                    <li>Pickleball tips and drills</li>
                    <li>Programs and lessons</li>
                    <li>Events and retreats</li>
                    <li>Special offers and promotions</li>
                    <li>PB Academy news and updates</li>
                </ul>
                <p>You may unsubscribe from marketing emails at any time by using the unsubscribe link included in our emails or by contacting us.</p>
                <p>Please note that even if you opt out of marketing communications, we may still send you important transactional or service-related communications.</p>

                <h2>4. Payments and Transactions</h2>
                <p>If you make a purchase or book a paid service through our website, payment information may be processed by a third-party payment processor.</p>
                <p>PB Academy may not directly store your complete payment card information. Payment processors handle your payment information according to their own privacy policies and security practices.</p>

                <h2>5. Cookies and Similar Technologies</h2>
                <p>Our website may use cookies and similar technologies to help us:</p>
                <ul>
                    <li>Remember preferences</li>
                    <li>Improve website functionality</li>
                    <li>Understand how visitors use our website</li>
                    <li>Analyze website traffic and performance</li>
                    <li>Improve our marketing efforts</li>
                </ul>
                <p>You may choose to disable cookies through your browser settings. However, disabling cookies may affect certain features or functionality of the website.</p>

                <h2>6. How We Share Information</h2>
                <p>We may share your information with trusted third-party service providers that help us operate our business and provide services, including providers that assist with:</p>
                <ul>
                    <li>Website hosting</li>
                    <li>Booking and scheduling</li>
                    <li>Payment processing</li>
                    <li>Email communications</li>
                    <li>Analytics</li>
                    <li>Marketing</li>
                    <li>E-commerce and order fulfillment</li>
                </ul>
                <p>We may also disclose information when required by law or when reasonably necessary to:</p>
                <ul>
                    <li>Comply with legal obligations</li>
                    <li>Protect the rights, safety, and property of PB Academy or others</li>
                    <li>Prevent fraud or security issues</li>
                    <li>Enforce our policies and agreements</li>
                </ul>
                <p>We do not sell your personal information in exchange for money.</p>

                <h2>7. Third-Party Links</h2>
                <p>Our website may contain links to third-party websites, services, or social media platforms. PB Academy is not responsible for the privacy practices, content, or security of third-party websites. We encourage you to review the privacy policies of any third-party website you visit.</p>

                <h2>8. Data Security</h2>
                <p>We take reasonable administrative, technical, and organizational measures to help protect your personal information.</p>
                <p>However, no method of transmitting information over the internet or storing electronic data is completely secure. While we strive to protect your information, we cannot guarantee absolute security.</p>

                <h2>9. Children's Privacy</h2>
                <p>Our services are primarily intended for adults. We do not knowingly collect personal information from children under the age of 13 without appropriate consent where required by applicable law.</p>
                <p>If you believe that a child has provided us with personal information without appropriate authorization, please contact us, and we will take appropriate steps to address the matter.</p>

                <h2>10. Your Privacy Choices</h2>
                <p>Depending on your location and applicable law, you may have certain rights regarding your personal information, including the right to:</p>
                <ul>
                    <li>Request access to personal information we hold about you</li>
                    <li>Request correction of inaccurate information</li>
                    <li>Request deletion of certain personal information</li>
                    <li>Opt out of marketing communications</li>
                    <li>Ask questions about how we collect and use your information</li>
                </ul>
                <p>To make a privacy-related request, please contact us using the information below.</p>

                <h2>11. California Privacy Rights</h2>
                <p>If you are a California resident, you may have additional rights regarding your personal information under applicable California privacy laws.</p>
                <p>These rights may include the right to request information about the categories of personal information we collect, use, and disclose, as well as the right to request deletion or correction of certain personal information.</p>
                <p>To submit a privacy-related request, please contact us using the contact information below.</p>

                <h2>12. Changes to This Privacy Policy</h2>
                <p>We may update this Privacy Policy from time to time to reflect changes in our practices, services, or applicable laws.</p>
                <p>When we make changes, we will update the Effective Date at the top of this page. We encourage you to review this Privacy Policy periodically.</p>

                <h2>13. Contact Us</h2>
                <p>If you have questions about this Privacy Policy or our privacy practices, please contact us:</p>
                <p>
                    <strong>PB Academy</strong><br>
                    Website: <a href="https://GoPBAcademy.com">GoPBAcademy.com</a><br>
                    Email: <a href="mailto:info@gopbacademy.com">info@gopbacademy.com</a><br>
                    Phone: <a href="tel:5618559500">561-855-9500</a>
                </p>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>