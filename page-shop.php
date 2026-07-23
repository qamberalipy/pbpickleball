<?php
/**
 * Template Name: Shop Landing
 */
?>
<?php get_header(); ?>

<style>
/* Shop Global Styles */
.shop-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

/* 1. Hero Section */
.shop-hero { display: grid; grid-template-columns: 1fr 1fr; align-items: stretch; min-height: 500px; background-color: var(--gray-bg, #f4f5f7); position: relative; }
.shop-hero__content { padding: 80px 40px; display: flex; flex-direction: column; justify-content: center; }
.shop-hero__title { font-family: var(--font-heading, sans-serif); color: var(--navy, #0B192C); font-size: 3.5rem; text-transform: uppercase; margin-bottom: 10px; line-height: 1.1; }
.shop-hero__subtitle { font-family: var(--font-heading, sans-serif); color: var(--green-bright, #00FF87); font-size: 1.5rem; font-style: italic; margin-bottom: 20px; }
.shop-hero__text { font-family: var(--font-body, sans-serif); color: var(--gray-text, #666); font-size: 1.1rem; line-height: 1.6; margin-bottom: 40px; }
.shop-hero__features { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.shop-hero__feature { display: flex; align-items: center; gap: 10px; font-family: var(--font-heading, sans-serif); font-weight: 600; color: var(--navy, #0B192C); font-size: 1rem; }
.shop-hero__feature svg { width: 24px; height: 24px; stroke: var(--green, #00D06C); flex-shrink: 0; }
.shop-hero__image { background-image: url('https://images.unsplash.com/photo-1554068865-24cecd4e34b8?q=80&w=1200&auto=format&fit=crop'); background-size: cover; background-position: center; position: relative; }
.shop-hero__overlay { position: absolute; bottom: -30px; left: -50px; background: var(--navy, #0B192C); color: var(--white, #fff); padding: 40px; border-radius: var(--radius, 8px); box-shadow: 0 20px 40px rgba(0,0,0,0.15); max-width: 350px; }
.shop-hero__overlay-title { font-family: var(--font-heading, sans-serif); font-size: 1.5rem; margin-bottom: 20px; color: var(--green-bright, #00FF87); }
.shop-hero__list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px; }
.shop-hero__list li { display: flex; align-items: center; gap: 10px; font-family: var(--font-body, sans-serif); font-size: 0.95rem; }
.shop-hero__list svg { width: 18px; height: 18px; stroke: var(--green-bright, #00FF87); flex-shrink: 0; }

/* Responsive Hero */
@media (max-width: 992px) {
    .shop-hero { grid-template-columns: 1fr; }
    .shop-hero__image { min-height: 400px; }
    .shop-hero__overlay { left: 20px; bottom: 20px; right: 20px; max-width: calc(100% - 40px); }
}

/* 2. Category Nav Strip */
.shop-cats { padding: 80px 0; border-bottom: 1px solid #eaeaea; }
.shop-cats__grid { display: grid; grid-template-columns: repeat(7, 1fr); gap: 20px; }
.shop-cat-card { display: flex; flex-direction: column; align-items: center; text-align: center; text-decoration: none; padding: 20px 10px; border-radius: var(--radius, 8px); transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1); background: transparent; }
.shop-cat-card:hover { background: var(--white, #fff); box-shadow: 0 10px 30px rgba(11, 25, 44, 0.08); transform: translateY(-5px); }
.shop-cat-card__icon { width: 60px; height: 60px; background: rgba(0, 208, 108, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; transition: all 0.3s ease; }
.shop-cat-card:hover .shop-cat-card__icon { background: var(--green, #00D06C); }
.shop-cat-card__icon svg { width: 28px; height: 28px; stroke: var(--navy, #0B192C); transition: all 0.3s ease; }
.shop-cat-card:hover .shop-cat-card__icon svg { stroke: var(--white, #fff); }
.shop-cat-card__title { font-family: var(--font-heading, sans-serif); color: var(--navy, #0B192C); font-weight: 700; font-size: 1.1rem; margin-bottom: 5px; }
.shop-cat-card__desc { font-family: var(--font-body, sans-serif); color: var(--gray-text, #666); font-size: 0.85rem; line-height: 1.4; }

@media (max-width: 992px) { .shop-cats__grid { grid-template-columns: repeat(4, 1fr); } }
@media (max-width: 576px) { .shop-cats__grid { grid-template-columns: repeat(2, 1fr); } }

/* 3. Featured Products Section */
.shop-featured { padding: 80px 0; background: var(--white, #fff); }
.shop-featured__header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; }
.shop-featured__title { font-family: var(--font-heading, sans-serif); color: var(--navy, #0B192C); font-size: 2.5rem; text-transform: uppercase; margin: 0; }
.shop-featured__view-all { font-family: var(--font-heading, sans-serif); color: var(--green, #00D06C); text-decoration: none; font-weight: 700; font-size: 1.1rem; transition: color 0.3s ease; }
.shop-featured__view-all:hover { color: var(--navy, #0B192C); }
.shop-featured__layout { display: grid; grid-template-columns: 75% 25%; gap: 40px; }

/* Product Cards */
.shop-products { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
.shop-card { background: var(--white, #fff); border: 1px solid #eaeaea; border-radius: var(--radius, 8px); padding: 20px; display: flex; flex-direction: column; transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1); text-decoration: none; height: 100%; }
.shop-card:hover { box-shadow: 0 15px 35px rgba(11, 25, 44, 0.1); border-color: transparent; transform: translateY(-5px); }
.shop-card__image { width: 100%; height: 220px; object-fit: contain; background: #f8f9fa; mix-blend-mode: multiply; border-radius: 4px; margin-bottom: 20px; padding: 20px; }
.shop-card__content { display: flex; flex-direction: column; flex-grow: 1; }
.shop-card__title { font-family: var(--font-heading, sans-serif); color: var(--navy, #0B192C); font-size: 1.25rem; font-weight: 700; margin-bottom: 5px; line-height: 1.3; }
.shop-card__subtitle { font-family: var(--font-body, sans-serif); color: var(--gray-text, #666); font-size: 0.9rem; margin-bottom: 15px; }
.shop-card__bottom { display: flex; justify-content: space-between; align-items: center; margin-top: auto; }
.shop-card__price { font-family: var(--font-heading, sans-serif); color: var(--navy, #0B192C); font-size: 1.4rem; font-weight: 800; }
.shop-card__rating { display: flex; align-items: center; gap: 5px; font-family: var(--font-body, sans-serif); font-size: 0.85rem; color: var(--gray-text, #666); }
.shop-card__stars { color: #FFC107; font-size: 1rem; }

/* Trust Box Sidebar */
.shop-trust-box { background: rgba(0, 208, 108, 0.08); padding: 30px; border-radius: var(--radius, 8px); display: flex; flex-direction: column; gap: 30px; height: fit-content; position: sticky; top: 100px; }
.shop-trust-item { display: flex; flex-direction: column; align-items: flex-start; gap: 10px; }
.shop-trust-item__icon { width: 48px; height: 48px; background: var(--white, #fff); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
.shop-trust-item__icon svg { width: 24px; height: 24px; stroke: var(--green, #00D06C); }
.shop-trust-item__title { font-family: var(--font-heading, sans-serif); color: var(--navy, #0B192C); font-weight: 700; font-size: 1.1rem; margin: 0; }
.shop-trust-item__text { font-family: var(--font-body, sans-serif); color: var(--gray-text, #666); font-size: 0.9rem; line-height: 1.5; margin: 0; }

@media (max-width: 992px) {
    .shop-featured__layout { grid-template-columns: 1fr; }
    .shop-products { grid-template-columns: repeat(2, 1fr); }
    .shop-trust-box { position: static; display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
}
@media (max-width: 576px) {
    .shop-products { grid-template-columns: 1fr; }
    .shop-trust-box { grid-template-columns: 1fr; }
    .shop-featured__header { flex-direction: column; align-items: flex-start; gap: 15px; }
}

/* 4. Motivational CTA Banner */
.shop-cta { background: var(--navy, #0B192C); padding: 60px 0; color: var(--white, #fff); }
.shop-cta__wrap { display: flex; justify-content: space-between; align-items: center; gap: 40px; }
.shop-cta__left h2 { font-family: var(--font-heading, sans-serif); font-size: 2.5rem; margin-bottom: 5px; color: var(--white, #fff); }
.shop-cta__left p { font-family: var(--font-heading, sans-serif); font-size: 1.2rem; color: var(--green-bright, #00FF87); font-style: italic; margin: 0; }
.shop-cta__middle { display: flex; gap: 30px; }
.shop-cta__prop { display: flex; align-items: center; gap: 10px; font-family: var(--font-heading, sans-serif); font-weight: 600; font-size: 1rem; }
.shop-cta__prop svg { width: 24px; height: 24px; stroke: var(--green-bright, #00FF87); }
.shop-cta__right { display: flex; align-items: center; gap: 15px; font-family: var(--font-body, sans-serif); font-size: 1.1rem; font-weight: 600; padding: 15px 25px; background: rgba(255,255,255,0.1); border-radius: 30px; }
.shop-cta__right svg { width: 24px; height: 24px; stroke: var(--white, #fff); }

@media (max-width: 992px) {
    .shop-cta__wrap { flex-direction: column; text-align: center; }
    .shop-cta__middle { flex-direction: column; gap: 15px; align-items: center; }
}

/* 5. Brand Trust Footer Strip */
.shop-brand-footer { background: var(--gray-bg, #f4f5f7); padding: 40px 0; border-top: 1px solid #eaeaea; }
.shop-brand-footer__wrap { display: flex; align-items: center; justify-content: space-between; gap: 30px; }
.shop-brand-footer__logo { display: flex; flex-direction: column; gap: 5px; }
.shop-brand-footer__logo span { font-family: var(--font-heading, sans-serif); font-size: 1.5rem; font-weight: 900; color: var(--navy, #0B192C); }
.shop-brand-footer__logo small { font-family: var(--font-heading, sans-serif); font-size: 0.9rem; color: var(--green, #00D06C); text-transform: uppercase; letter-spacing: 1px; font-weight: 700; }
.shop-brand-footer__props { display: flex; gap: 20px; }
.shop-brand-footer__prop { display: flex; align-items: center; gap: 8px; font-family: var(--font-body, sans-serif); font-size: 0.9rem; color: var(--navy, #0B192C); font-weight: 600; }
.shop-brand-footer__prop svg { width: 18px; height: 18px; stroke: var(--green, #00D06C); }
.shop-brand-footer__quote { font-family: var(--font-body, sans-serif); font-style: italic; color: var(--gray-text, #666); font-size: 1rem; }

@media (max-width: 992px) {
    .shop-brand-footer__wrap { flex-direction: column; text-align: center; }
    .shop-brand-footer__props { flex-wrap: wrap; justify-content: center; }
}
</style>

<main class="shop-landing">

    <!-- 1. Hero Section -->
    <section class="shop-hero">
        <div class="shop-hero__content">
            <h1 class="shop-hero__title">PBPA SHOP</h1>
            <div class="shop-hero__subtitle">Gear You Can Trust. Performance You'll Love.</div>
            <p class="shop-hero__text">We've hand-selected the best pickleball equipment so you don't have to guess. From pro-level paddles to premium court shoes, we have exactly what you need to elevate your game.</p>
            <div class="shop-hero__features">
                <div class="shop-hero__feature">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    Quality Products
                </div>
                <div class="shop-hero__feature">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><line x1="12" y1="18" x2="12" y2="22"></line><line x1="12" y1="2" x2="12" y2="6"></line></svg>
                    Great Value
                </div>
                <div class="shop-hero__feature">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    Fast Shipping
                </div>
                <div class="shop-hero__feature">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    Expert Support
                </div>
            </div>
        </div>
        <div class="shop-hero__image">
            <div class="shop-hero__overlay">
                <div class="shop-hero__overlay-title">Everything You Need to Play Your Best!</div>
                <ul class="shop-hero__list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Premium Paddles</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Official Tournament Balls</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Court Footwear</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Bags & Accessories</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Apparel & Headwear</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 2. Category Nav Strip -->
    <section class="shop-cats">
        <div class="shop-container">
            <div class="shop-cats__grid">
                <a href="#" class="shop-cat-card">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect></svg></div>
                    <div class="shop-cat-card__title">Paddles</div>
                    <div class="shop-cat-card__desc">Pro & Beginner</div>
                </a>
                <a href="#" class="shop-cat-card">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle></svg></div>
                    <div class="shop-cat-card__title">Balls</div>
                    <div class="shop-cat-card__desc">Indoor/Outdoor</div>
                </a>
                <a href="#" class="shop-cat-card">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4-8 4-8-4 8-4z"></path></svg></div>
                    <div class="shop-cat-card__title">Footwear</div>
                    <div class="shop-cat-card__desc">Court Shoes</div>
                </a>
                <a href="#" class="shop-cat-card">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></div>
                    <div class="shop-cat-card__title">Bags & Backpacks</div>
                    <div class="shop-cat-card__desc">Gear Transport</div>
                </a>
                <a href="#" class="shop-cat-card">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></div>
                    <div class="shop-cat-card__title">Eyewear & Hats</div>
                    <div class="shop-cat-card__desc">Sun Protection</div>
                </a>
                <a href="#" class="shop-cat-card">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg></div>
                    <div class="shop-cat-card__title">Apparel</div>
                    <div class="shop-cat-card__desc">Performance Wear</div>
                </a>
                <a href="#" class="shop-cat-card">
                    <div class="shop-cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></div>
                    <div class="shop-cat-card__title">Training & Acc.</div>
                    <div class="shop-cat-card__desc">Nets & Extras</div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. Featured Products Section -->
    <section class="shop-featured">
        <div class="shop-container">
            <div class="shop-featured__header">
                <h2 class="shop-featured__title">FEATURED PRODUCTS</h2>
                <a href="<?php echo esc_url(site_url('/shop-all')); ?>" class="shop-featured__view-all">View All Products &rarr;</a>
            </div>
            
            <div class="shop-featured__layout">
                <!-- Main Grid -->
                <div class="shop-products">
                    
                    <!-- Card 1 -->
                    <a href="#" class="shop-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/paddle.png" alt="PBPA Signature Paddle" class="shop-card__image">
                        <div class="shop-card__content">
                            <h3 class="shop-card__title">PBPA Signature Paddle</h3>
                            <div class="shop-card__subtitle">Carbon Fiber Power Core</div>
                            <div class="shop-card__bottom">
                                <span class="shop-card__price">$129.99</span>
                                <span class="shop-card__rating"><span class="shop-card__stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4.5 (128)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="#" class="shop-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/ball.png" alt="PBPA Outdoor Balls" class="shop-card__image">
                        <div class="shop-card__content">
                            <h3 class="shop-card__title">PBPA Outdoor Balls</h3>
                            <div class="shop-card__subtitle">Durable 3-Pack</div>
                            <div class="shop-card__bottom">
                                <span class="shop-card__price">$14.99</span>
                                <span class="shop-card__rating"><span class="shop-card__stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4.8 (342)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 3 -->
                    <a href="#" class="shop-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/shoe.png" alt="Court Pro Pickleball Shoes" class="shop-card__image">
                        <div class="shop-card__content">
                            <h3 class="shop-card__title">Court Pro Shoes</h3>
                            <div class="shop-card__subtitle">Enhanced Grip & Support</div>
                            <div class="shop-card__bottom">
                                <span class="shop-card__price">$119.99</span>
                                <span class="shop-card__rating"><span class="shop-card__stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4.6 (85)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 4 -->
                    <a href="#" class="shop-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/bag.png" alt="PBPA Pro Backpack" class="shop-card__image">
                        <div class="shop-card__content">
                            <h3 class="shop-card__title">PBPA Pro Backpack</h3>
                            <div class="shop-card__subtitle">Fits 4 Paddles + Gear</div>
                            <div class="shop-card__bottom">
                                <span class="shop-card__price">$89.99</span>
                                <span class="shop-card__rating"><span class="shop-card__stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4.9 (42)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 5 -->
                    <a href="#" class="shop-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/glasses.png" alt="Performance Sunglasses" class="shop-card__image">
                        <div class="shop-card__content">
                            <h3 class="shop-card__title">Performance Sunglasses</h3>
                            <div class="shop-card__subtitle">Polarized UV Protection</div>
                            <div class="shop-card__bottom">
                                <span class="shop-card__price">$45.00</span>
                                <span class="shop-card__rating"><span class="shop-card__stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4.5 (61)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 6 -->
                    <a href="#" class="shop-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/shirt.png" alt="PBPA Performance Shirt" class="shop-card__image">
                        <div class="shop-card__content">
                            <h3 class="shop-card__title">PBPA Performance Shirt</h3>
                            <div class="shop-card__subtitle">Moisture Wicking</div>
                            <div class="shop-card__bottom">
                                <span class="shop-card__price">$34.99</span>
                                <span class="shop-card__rating"><span class="shop-card__stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4.7 (112)</span>
                            </div>
                        </div>
                    </a>

                </div>

                <!-- Right Sidebar / Trust Box -->
                <aside class="shop-trust-box">
                    <div class="shop-trust-item">
                        <div class="shop-trust-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></div>
                        <h4 class="shop-trust-item__title">PBPA Recommended</h4>
                        <p class="shop-trust-item__text">Every item in our shop is tested and approved by our professional coaching staff.</p>
                    </div>
                    <div class="shop-trust-item">
                        <div class="shop-trust-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></div>
                        <h4 class="shop-trust-item__title">Safe & Secure</h4>
                        <p class="shop-trust-item__text">Shop with confidence. All transactions are securely encrypted for your protection.</p>
                    </div>
                    <div class="shop-trust-item">
                        <div class="shop-trust-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2v6h-6"></path><path d="M3 12a9 9 0 0 1 15-6.7L21 8"></path><path d="M3 22v-6h6"></path><path d="M21 12a9 9 0 0 1-15 6.7L3 16"></path></svg></div>
                        <h4 class="shop-trust-item__title">Easy Returns</h4>
                        <p class="shop-trust-item__text">Not quite right? We offer a hassle-free 30-day return policy on all unworn gear.</p>
                    </div>
                </aside>

            </div>
        </div>
    </section>

    <!-- 4. Motivational CTA Banner -->
    <section class="shop-cta">
        <div class="shop-container">
            <div class="shop-cta__wrap">
                <div class="shop-cta__left">
                    <h2>GEAR UP. SHOW UP. HAVE FUN!</h2>
                    <p>The right gear makes every game better.</p>
                </div>
                <div class="shop-cta__middle">
                    <div class="shop-cta__prop">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Play Better
                    </div>
                    <div class="shop-cta__prop">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                        Stay Comfortable
                    </div>
                    <div class="shop-cta__prop">
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

<?php get_footer(); ?>
