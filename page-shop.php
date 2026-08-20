<?php
/**
 * Template Name: Shop Landing
 */
?>
<?php get_header(); ?>

<main class="shop-landing">

    <!-- 1. Hero Section -->
    <section class="hero shop-hero-full" data-mascot-msg="Gear up and play your best! We've hand-selected the perfect equipment for your game.">
        <div class="shop-hero__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/media/shop-hero-banner.webp');"></div>
        
        <!-- FIX: Restored global hero-container to pull text above the overlay -->
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h1>PBA SHOP</h1>
                <h3 class="hero-tagline type-effect"></h3>
                
                <div class="shop-hero__features">
                    <div class="shop-hero__feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Quality Products
                    </div>
                    <div class="shop-hero__feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><line x1="12" y1="18" x2="12" y2="22"></line><line x1="12" y1="2" x2="12" y2="6"></line></svg>
                        Great Value
                    </div>
                    <div class="shop-hero__feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        Fast Shipping
                    </div>
                    <div class="shop-hero__feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        Expert Support
                    </div>
                </div>

                <!-- Quick-Jump Anchor Bar -->
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <!-- <a href="#categories" class="qj-link">Categories</a> -->
                        <a href="#featured" class="qj-link">Featured Products</a>
                        <a href="#contact" class="qj-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Category Nav Strip -->
    <!-- <section id="categories" class="shop-cats" data-mascot-msg="From premium paddles to court shoes, explore our top categories.">
        <div class="shop-container">
            <div class="shop-cats__grid">
                <a href="#" class="anim-fade-up anim-stagger shop-cat-card" style="--stagger-delay: 0ms;">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect></svg></div>
                    <div class="shop-cat-card__title">Paddles</div>
                    <div class="shop-cat-card__desc">Pro & Beginner</div>
                </a>
                <a href="#" class="anim-fade-up anim-stagger shop-cat-card" style="--stagger-delay: 100ms;">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle></svg></div>
                    <div class="shop-cat-card__title">Balls</div>
                    <div class="shop-cat-card__desc">Indoor/Outdoor</div>
                </a>
                <a href="#" class="anim-fade-up anim-stagger shop-cat-card" style="--stagger-delay: 200ms;">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4-8 4-8-4 8-4z"></path></svg></div>
                    <div class="shop-cat-card__title">Footwear</div>
                    <div class="shop-cat-card__desc">Court Shoes</div>
                </a>
                <a href="#" class="anim-fade-up anim-stagger shop-cat-card" style="--stagger-delay: 300ms;">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></div>
                    <div class="shop-cat-card__title">Bags & Backpacks</div>
                    <div class="shop-cat-card__desc">Gear Transport</div>
                </a>
                <a href="#" class="anim-fade-up anim-stagger shop-cat-card" style="--stagger-delay: 400ms;">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></div>
                    <div class="shop-cat-card__title">Eyewear & Hats</div>
                    <div class="shop-cat-card__desc">Sun Protection</div>
                </a>
                <a href="#" class="anim-fade-up anim-stagger shop-cat-card" style="--stagger-delay: 500ms;">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg></div>
                    <div class="shop-cat-card__title">Apparel</div>
                    <div class="shop-cat-card__desc">Performance Wear</div>
                </a>
                <a href="#" class="anim-fade-up anim-stagger shop-cat-card" style="--stagger-delay: 600ms;">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></div>
                    <div class="shop-cat-card__title">Training & Acc.</div>
                    <div class="shop-cat-card__desc">Nets & Extras</div>
                </a>
            </div>
        </div>
    </section> -->

    <!-- 3. Featured Products Section -->
    <section id="featured" class="shop-featured" data-mascot-msg="Check out our featured products, tested and approved by PBA pros!">
        <div class="shop-container">
            <div class="shop-featured__header">
                <div class="shop-featured__title-wrap">
                    <span class="shop-featured__tag">Curated Selection</span>
                    <h2 class="shop-featured__title">Featured Products</h2>
                </div>
                <!-- View Catalog removed -->
            </div>
            
            <div class="shop-featured__layout">
                <!-- Main Grid -->
                <div class="shop-products">

                    <!-- Card 1 -->
                    <div class="anim-fade-up anim-stagger shop-card" style="--stagger-delay: 0ms;">
                        <div class="shop-card__image-wrap">
                            <span class="shop-card__badge">Best Seller</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/paddle.png" alt="PBA Signature Paddle" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Paddles</span>
                            <h3 class="shop-card__title">PBA Signature Paddle</h3>
                            <div class="shop-card__subtitle">Carbon Fiber Power Core</div>
                            <div class="shop-card__bottom">
                                <a href="<?php echo get_template_directory_uri(); ?>/media/guide-pdfs/paddle-guide.pdf" class="shop-guide-btn btn-green" target="_blank">View Guide</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="anim-fade-up anim-stagger shop-card" style="--stagger-delay: 100ms;">
                        <div class="shop-card__image-wrap">
                            <span class="shop-card__badge shop-card__badge--alt">PBA Approved</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/ball.png" alt="PBA Outdoor Balls" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Balls</span>
                            <h3 class="shop-card__title">PBA Outdoor Balls</h3>
                            <div class="shop-card__subtitle">Durable 3-Pack</div>
                            <div class="shop-card__bottom">
                                <a href="<?php echo get_template_directory_uri(); ?>/media/guide-pdfs/ball-guide.pdf" class="shop-guide-btn btn-green" target="_blank">View Guide</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="anim-fade-up anim-stagger shop-card" style="--stagger-delay: 200ms;">
                        <div class="shop-card__image-wrap">
                            <span class="shop-card__badge">New Arrival</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/shoe.png" alt="Court Pro Pickleball Shoes" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Footwear</span>
                            <h3 class="shop-card__title">Court Pro Shoes</h3>
                            <div class="shop-card__subtitle">Enhanced Grip &amp; Lateral Support</div>
                            <div class="shop-card__bottom">
                                <a href="<?php echo get_template_directory_uri(); ?>/media/guide-pdfs/shoes-guide.pdf" class="shop-guide-btn btn-green" target="_blank">View Guide</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 (Bag) -->
                    <div class="anim-fade-up anim-stagger shop-card" style="--stagger-delay: 300ms;">
                        <div class="shop-card__image-wrap">
                            <span class="shop-card__badge shop-card__badge--alt">Top Gear</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/bag.png" alt="PBA Pro Backpack" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Bags</span>
                            <h3 class="shop-card__title">PBA Pro Backpack</h3>
                            <div class="shop-card__subtitle">Fits 4 Paddles + Accessories</div>
                            <div class="shop-card__bottom">
                                <button class="shop-guide-btn btn-disabled" disabled>Guide Coming Soon</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="anim-fade-up anim-stagger shop-card" style="--stagger-delay: 400ms;">
                        <div class="shop-card__image-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/glasses.png" alt="Performance Sunglasses" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Eyewear</span>
                            <h3 class="shop-card__title">Performance Eyewear</h3>
                            <div class="shop-card__subtitle">Polarized UV Protection</div>
                            <div class="shop-card__bottom">
                                <a href="<?php echo get_template_directory_uri(); ?>/media/guide-pdfs/safety-glasses-guide.pdf" class="shop-guide-btn btn-green" target="_blank">View Guide</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 (Shirt) -->
                    <div class="anim-fade-up anim-stagger shop-card" style="--stagger-delay: 500ms;">
                        <div class="shop-card__image-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/shirt.png" alt="PBA Performance Shirt" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Apparel</span>
                            <h3 class="shop-card__title">Performance Tech Tee</h3>
                            <div class="shop-card__subtitle">Breathable Moisture Wicking</div>
                            <div class="shop-card__bottom">
                                <button class="shop-guide-btn btn-disabled" disabled>Guide Coming Soon</button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Sidebar / Trust Box -->
                <aside class="shop-trust-box">
                    <div class="anim-fade-up anim-stagger shop-trust-item" style="--stagger-delay: 0ms;">
                        <div class="shop-trust-item__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="shop-trust-item__body">
                            <h4 class="shop-trust-item__title">Pro Recommended</h4>
                            <p class="shop-trust-item__text">Tested and approved by certified PBA instructors.</p>
                        </div>
                    </div>

                    <div class="anim-fade-up anim-stagger shop-trust-item" style="--stagger-delay: 100ms;">
                        <div class="shop-trust-item__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </div>
                        <div class="shop-trust-item__body">
                            <h4 class="shop-trust-item__title">Safe & Secure</h4>
                            <p class="shop-trust-item__text">Encrypted checkout for 100% safe transactions.</p>
                        </div>
                    </div>

                    <div class="anim-fade-up anim-stagger shop-trust-item" style="--stagger-delay: 200ms;">
                        <div class="shop-trust-item__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2v6h-6"></path><path d="M3 12a9 9 0 0 1 15-6.7L21 8"></path><path d="M3 22v-6h6"></path><path d="M21 12a9 9 0 0 1-15 6.7L3 16"></path></svg>
                        </div>
                        <div class="shop-trust-item__body">
                            <h4 class="shop-trust-item__title">30-Day Guarantee</h4>
                            <p class="shop-trust-item__text">Easy, hassle-free returns on all unworn equipment.</p>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </section>

    <!-- 4. Motivational CTA Banner -->
    <section id="contact" class="shop-cta" data-mascot-msg="Questions about gear? Give us a call, we are happy to help!">
        <div class="shop-container">
            <div class="shop-cta__wrap">
                <div class="shop-cta__left">
                    <h2>GEAR UP. SHOW UP. HAVE FUN!</h2>
                    <p>The right gear makes every game better.</p>
                </div>
                <div class="shop-cta__middle">
                    <div class="anim-fade-up anim-stagger shop-cta__prop" style="--stagger-delay: 0ms;">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Play Better
                    </div>
                    <div class="anim-fade-up anim-stagger shop-cta__prop" style="--stagger-delay: 100ms;">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                        Stay Comfortable
                    </div>
                    <div class="anim-fade-up anim-stagger shop-cta__prop" style="--stagger-delay: 200ms;">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        Support Your Academy
                    </div>
                </div>
                <div class="shop-cta__right">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.29 11.45c-.1.5.31.95.82.95h13.94c.51 0 .92-.45.82-.95L17 13"></path><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle></svg>
                    Questions about gear? We're happy to help!<br>Call: 561-855-9500
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Brand Trust Footer Strip -->
    <section class="shop-brand-footer">
        <div class="shop-container">
            <div class="shop-brand-footer__wrap">
                <div class="shop-brand-footer__logo">
                    <span>PB Pickleball Academy</span>
                    <small>Learn. Play. Improve.</small>
                </div>
                <div class="shop-brand-footer__props">
                    <div class="shop-brand-footer__prop">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> Beginner Focused
                    </div>
                    <div class="shop-brand-footer__prop">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> Active Adults
                    </div>
                    <div class="shop-brand-footer__prop">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> Real Results
                    </div>
                    <div class="shop-brand-footer__prop">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> Community First
                    </div>
                </div>
                <div class="shop-brand-footer__quote">
                    "We don't just sell gear. We help you play your best!"
                </div>
            </div>
        </div>
    </section>

</main>

<style>
.shop-hero-full .shop-hero__bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    z-index: 0;
}
</style>

<?php get_footer(); ?>