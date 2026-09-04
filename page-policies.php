<?php
/**
 * Template Name: Policies & Refunds
 */
get_header(); ?>

<style>
/* Scoped Typography for Legal Document Readability */
.privacy-document { color: var(--gray-text); line-height: 1.7; font-size: 1.05rem; font-family: var(--font-body); }
.privacy-document h2 { font-family: var(--font-heading); color: var(--navy); font-size: 1.5rem; font-weight: 900; text-transform: uppercase; margin: 2.5rem 0 1rem; padding-bottom: 0.5rem; border-bottom: 2px solid var(--gray-light); }
.privacy-document p { margin-bottom: 1.2rem; }
.privacy-document ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1.5rem; }
.privacy-document li { margin-bottom: 0.5rem; }
.privacy-document a { color: var(--green); font-weight: 600; text-decoration: none; transition: color 0.2s ease; }
.privacy-document a:hover { color: var(--navy); text-decoration: underline; }
@media (max-width: 768px) { .privacy-document h2 { font-size: 1.3rem; } .privacy-document { font-size: 0.95rem; } }
</style>

<main class="privacy-page pba-bg-pattern">
    <section class="hero retreat-hero-full" style="min-height: 35vh; padding-top: 80px;">
        <img class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/media/resource-hero-banner.webp" alt="PB Academy Policies" aria-hidden="true" style="object-fit: cover; object-position: center;">
        <div class="hero-container" style="padding-bottom: 20px !important;">
            <div class="hero-content anim-fade-up">
                <h1 class="retreat-hero-title" style="margin: 0 auto; text-align: center;">
                    <span style="color: var(--navy); text-shadow: 0 2px 15px rgb(255 255 255 / 70%)!important;">ACADEMY</span><br>
                    <span class="highlight program-hero-main">POLICIES</span>
                </h1>
            </div>
        </div>
    </section>

    <section style="padding: 60px 20px 100px;">
        <div class="container">
            <!-- FIX: Removed 'anim-fade-up' so this massive block shows instantly -->
            <div class="ct-premium-card privacy-document" style="max-width: 1000px;">
                
                <!-- CANCELLATION & REFUND POLICY -->
                <h1 style="color: var(--navy); font-family: var(--font-heading); text-align: center; margin-bottom: 10px; font-weight: 900;">CANCELLATION & REFUND POLICY</h1>
                <p style="text-align: center; margin-bottom: 40px;"><strong>Effective Date:</strong> September 3, 2026</p>
                
                <p>At PB Academy, we understand that plans can change. This Cancellation and Refund Policy explains the terms that apply to cancellations, rescheduling, refunds, programs, events, retreats, and other services offered by PB Academy.</p>

                <h2>1. Lessons and Training Sessions</h2>
                <p>Cancellation and rescheduling policies may vary depending on the type of lesson or program booked. Unless otherwise stated at the time of booking, participants are encouraged to provide as much advance notice as possible if they need to cancel or reschedule.</p>
                <p>PB Academy reserves the right to determine whether a cancellation is eligible for:</p>
                <ul>
                    <li>A refund</li>
                    <li>A credit</li>
                    <li>A transfer to another session</li>
                    <li>Rescheduling</li>
                </ul>
                <p>No-shows or late cancellations may not be eligible for a refund.</p>

                <h2>2. Programs and Clinics</h2>
                <p>For group programs, clinics, camps, and training sessions, cancellation and refund eligibility may depend on:</p>
                <ul>
                    <li>The date of cancellation</li>
                    <li>The start date of the program</li>
                    <li>Whether a replacement participant can be accommodated</li>
                    <li>Expenses already incurred by PB Academy</li>
                </ul>
                <p>Where applicable, participants may be offered a credit toward a future PB Academy program instead of a refund.</p>

                <h2>3. Events and Retreats</h2>
                <p>Events and retreats may involve advance planning, venue reservations, accommodations, transportation, instructors, and other non-refundable expenses.</p>
                <p>Specific cancellation terms for an event or retreat may be provided at the time of registration. Those specific terms will take precedence over this general policy.</p>
                <p>Unless otherwise required by applicable law, certain deposits, reservation fees, or amounts already paid to third-party providers may be non-refundable. We strongly encourage participants to review the cancellation terms carefully before registering for an event or retreat.</p>

                <h2>4. Cancellations by PB Academy</h2>
                <p>PB Academy reserves the right to cancel, postpone, reschedule, or modify a lesson, program, clinic, event, or retreat due to circumstances including:</p>
                <ul>
                    <li>Severe weather</li>
                    <li>Facility closures</li>
                    <li>Safety concerns</li>
                    <li>Instructor illness or unavailability</li>
                    <li>Insufficient enrollment</li>
                    <li>Government restrictions</li>
                    <li>Events beyond our reasonable control</li>
                </ul>
                <p>If PB Academy cancels a service, we will make reasonable efforts to provide affected participants with one of the following, where appropriate:</p>
                <ul>
                    <li>Rescheduling</li>
                    <li>A credit toward a future service</li>
                    <li>A refund of the applicable amount paid</li>
                </ul>
                <p>The available option may depend on the nature of the service and expenses already incurred.</p>

                <h2>5. No-Shows and Late Arrivals</h2>
                <p>Participants are responsible for arriving on time for their scheduled lesson, program, or event. Late arrival does not automatically extend the scheduled session.</p>
                <p>Participants who fail to attend a scheduled service without providing notice may forfeit the amount paid, subject to applicable law and any specific booking terms.</p>

                <h2>6. Refund Processing</h2>
                <p>Approved refunds will generally be returned to the original method of payment whenever possible. The time required for a refund to appear in your account may depend on your financial institution or payment provider.</p>
                <p>PB Academy is not responsible for delays caused by banks, credit card companies, or third-party payment processors.</p>

                <h2>7. Non-Refundable Fees</h2>
                <p>Certain fees, deposits, registration fees, or third-party expenses may be non-refundable. Any non-refundable amount will be identified in the applicable booking, registration, event, retreat, or purchase terms whenever possible.</p>

                <h2>8. How to Request a Cancellation or Refund</h2>
                <p>To request a cancellation, rescheduling, or refund, please contact us as soon as possible:</p>
                <p><strong>PB Academy</strong><br>
                Email: <a href="mailto:info@gopbacademy.com">info@gopbacademy.com</a><br>
                Phone: <a href="tel:5618559500">561-855-9500</a></p>
                <p>Please include:</p>
                <ul>
                    <li>Your full name</li>
                    <li>Booking or order information</li>
                    <li>The service or event involved</li>
                    <li>The reason for your request</li>
                </ul>

                <h2>9. Changes to This Policy</h2>
                <p>PB Academy reserves the right to update this Cancellation and Refund Policy at any time. Any changes will become effective when posted on our website.</p>

                <!-- DIVIDER BETWEEN POLICIES -->
                <hr style="margin: 80px 0; border: none; border-top: 2px dashed var(--gray-light);">

                <!-- SHIPPING & RETURN POLICY -->
                <h1 style="color: var(--navy); font-family: var(--font-heading); text-align: center; margin-bottom: 10px; font-weight: 900;">SHIPPING & RETURN POLICY</h1>
                <p style="text-align: center; margin-bottom: 40px;"><strong>Effective Date:</strong> September 3, 2026</p>

                <p>This Shipping and Return Policy applies to physical products and merchandise purchased from PB Academy through GoPBAcademy.com or other authorized PB Academy sales channels.</p>

                <h2>1. Order Processing</h2>
                <p>We make reasonable efforts to process and prepare orders promptly. Order processing times may vary depending on:</p>
                <ul>
                    <li>Product availability</li>
                    <li>Order volume</li>
                    <li>Customization requirements</li>
                    <li>Holidays</li>
                    <li>Shipping destination</li>
                </ul>
                <p>Orders may not be processed or shipped on weekends or public holidays.</p>

                <h2>2. Shipping</h2>
                <p>PB Academy may offer shipping options based on the customer's location and the products ordered. Shipping costs, delivery estimates, and available shipping methods may be displayed during checkout.</p>
                <p>Delivery estimates are not guaranteed and may be affected by circumstances outside our control, including:</p>
                <ul>
                    <li>Carrier delays</li>
                    <li>Weather conditions</li>
                    <li>Customs delays</li>
                    <li>Incorrect shipping information</li>
                    <li>Other unexpected events</li>
                </ul>

                <h2>3. Shipping Address</h2>
                <p>Customers are responsible for providing an accurate and complete shipping address. PB Academy is not responsible for delays or delivery issues caused by incorrect or incomplete address information provided by the customer.</p>
                <p>If you notice an error in your shipping address after placing an order, please contact us as soon as possible. We cannot guarantee that changes can be made after an order has been processed or shipped.</p>

                <h2>4. Lost, Delayed, or Damaged Packages</h2>
                <p>Once an order has been transferred to the shipping carrier, delivery times and handling are generally outside PB Academy's direct control.</p>
                <p>If your package is significantly delayed, lost, or arrives damaged, please contact us, and we will make reasonable efforts to assist you in resolving the issue. Customers may be required to provide:</p>
                <ul>
                    <li>Order number</li>
                    <li>Photos of damaged items</li>
                    <li>Photos of damaged packaging</li>
                    <li>Additional information requested by the shipping carrier</li>
                </ul>

                <h2>5. Returns</h2>
                <p>We want you to be satisfied with your purchase. If you are not satisfied with an eligible physical product, please contact PB Academy to request return instructions.</p>
                <p>To be eligible for a return, items may need to be:</p>
                <ul>
                    <li>Unused</li>
                    <li>Unworn</li>
                    <li>In their original condition</li>
                    <li>Returned with original packaging, where applicable</li>
                </ul>
                <p>PB Academy reserves the right to determine whether an item meets the requirements for a return.</p>

                <h2>6. Return Requests</h2>
                <p>Before returning an item, please contact us for return instructions. Do not send products back without contacting PB Academy first, as unauthorized returns may not be accepted or processed.</p>
                <p>To request a return, contact:</p>
                <p>Email: <a href="mailto:info@gopbacademy.com">info@gopbacademy.com</a><br>
                Phone: <a href="tel:5618559500">561-855-9500</a></p>
                <p>Please include:</p>
                <ul>
                    <li>Your full name</li>
                    <li>Order number</li>
                    <li>Product name</li>
                    <li>Reason for the return</li>
                    <li>Photos, if the item is damaged or defective</li>
                </ul>

                <h2>7. Return Shipping Costs</h2>
                <p>Unless the item is defective, damaged, or incorrectly shipped by PB Academy, the customer may be responsible for return shipping costs.</p>
                <p>If PB Academy determines that an item was sent incorrectly or arrived defective due to an issue within our control, we may provide appropriate return instructions or assistance.</p>

                <h2>8. Refunds for Returned Products</h2>
                <p>Once an approved return is received and inspected, PB Academy will determine whether the return meets the applicable return requirements.</p>
                <p>If approved, the refund will generally be issued to the original method of payment. Shipping charges and other non-refundable fees may not be refundable unless required by applicable law or the return resulted from an error by PB Academy.</p>

                <h2>9. Exchanges</h2>
                <p>Product exchanges may be available depending on product availability. If you need a different size, color, or product, please contact us to determine whether an exchange is available.</p>

                <h2>10. Non-Returnable Items</h2>
                <p>Certain items may not be eligible for return, including:</p>
                <ul>
                    <li>Personalized or customized products</li>
                    <li>Items that have been used or worn</li>
                    <li>Products that are damaged after delivery due to customer misuse</li>
                    <li>Final-sale items</li>
                    <li>Gift cards</li>
                    <li>Digital products or downloadable content, unless required by applicable law</li>
                </ul>
                <p>Any additional non-returnable products will be identified at the time of purchase where applicable.</p>

                <h2>11. International Orders</h2>
                <p>If PB Academy offers international shipping, customers may be responsible for applicable:</p>
                <ul>
                    <li>Customs duties</li>
                    <li>Import taxes</li>
                    <li>Fees imposed by local authorities</li>
                </ul>
                <p>These charges are generally separate from the product price and shipping fees unless otherwise stated. PB Academy is not responsible for delays caused by customs or international shipping processes.</p>

                <h2>12. Contact Us</h2>
                <p>For questions regarding shipping, returns, exchanges, cancellations, or refunds, please contact:</p>
                <p><strong>PB Academy</strong><br>
                Website: <a href="https://GoPBAcademy.com">GoPBAcademy.com</a><br>
                Email: <a href="mailto:info@gopbacademy.com">info@gopbacademy.com</a><br>
                Phone: <a href="tel:5618559500">561-855-9500</a></p>

            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>