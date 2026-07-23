<?php
/**
 * Template Name: Shop All Products
 */
?>
<?php get_header(); ?>

<style>
/* Shop Global Styles */
.shop-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

/* 1. Page Header */
.shop-header { padding: 40px 0; background: var(--gray-bg, #f4f5f7); border-bottom: 1px solid #eaeaea; }
.shop-breadcrumbs { font-family: var(--font-body, sans-serif); font-size: 0.9rem; color: var(--gray-text, #666); margin-bottom: 10px; }
.shop-breadcrumbs a { color: var(--navy, #0B192C); text-decoration: none; font-weight: 600; }
.shop-header__title { font-family: var(--font-heading, sans-serif); color: var(--navy, #0B192C); font-size: 2.5rem; text-transform: uppercase; margin: 0; }

/* 2. Main Layout Split */
.shop-main-layout { display: grid; grid-template-columns: 25% 75%; gap: 40px; padding: 60px 0; }

/* Sidebar Categories & Filters */
.shop-sidebar { display: flex; flex-direction: column; gap: 40px; }
.shop-sidebar__section { display: flex; flex-direction: column; gap: 15px; }
.shop-sidebar__title { font-family: var(--font-heading, sans-serif); color: var(--navy, #0B192C); font-size: 1.25rem; font-weight: 800; border-bottom: 2px solid var(--green, #00D06C); padding-bottom: 10px; margin: 0; }
.shop-category-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; }
.shop-category-list a { font-family: var(--font-body, sans-serif); color: var(--gray-text, #666); text-decoration: none; font-size: 1rem; transition: color 0.3s ease; display: flex; justify-content: space-between; }
.shop-category-list a:hover { color: var(--green, #00D06C); font-weight: 600; }

.shop-filter-list { display: flex; flex-direction: column; gap: 10px; }
.shop-filter-label { display: flex; align-items: center; gap: 10px; font-family: var(--font-body, sans-serif); color: var(--gray-text, #666); font-size: 0.95rem; cursor: pointer; }
.shop-filter-label input { width: 16px; height: 16px; accent-color: var(--green, #00D06C); }

/* Main Product Area */
.shop-content { display: flex; flex-direction: column; gap: 30px; }
.shop-content__topbar { display: flex; justify-content: space-between; align-items: center; background: var(--gray-bg, #f4f5f7); padding: 15px 20px; border-radius: var(--radius, 8px); }
.shop-content__count { font-family: var(--font-body, sans-serif); color: var(--gray-text, #666); font-size: 0.95rem; }
.shop-sort { display: flex; align-items: center; gap: 10px; font-family: var(--font-body, sans-serif); font-size: 0.95rem; color: var(--navy, #0B192C); font-weight: 600; }
.shop-sort select { padding: 8px 15px; border: 1px solid #ddd; border-radius: 4px; font-family: var(--font-body, sans-serif); }

.shop-products { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }

.shop-load-more { text-align: center; margin-top: 40px; }
.shop-load-more .btn { padding: 15px 40px; font-size: 1.1rem; border: 2px solid var(--navy, #0B192C); color: var(--navy, #0B192C); text-decoration: none; border-radius: 30px; font-family: var(--font-heading, sans-serif); font-weight: 700; transition: all 0.3s ease; display: inline-block; background: transparent; }
.shop-load-more .btn:hover { background: var(--navy, #0B192C); color: var(--white, #fff); border-color: var(--navy, #0B192C); }

/* Reused Product Cards */
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

/* Reused Trust Box */
.shop-trust-box { background: rgba(0, 208, 108, 0.08); padding: 30px; border-radius: var(--radius, 8px); display: flex; flex-direction: column; gap: 30px; height: fit-content; }
.shop-trust-item { display: flex; flex-direction: column; align-items: flex-start; gap: 10px; }
.shop-trust-item__icon { width: 48px; height: 48px; background: var(--white, #fff); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
.shop-trust-item__icon svg { width: 24px; height: 24px; stroke: var(--green, #00D06C); }
.shop-trust-item__title { font-family: var(--font-heading, sans-serif); color: var(--navy, #0B192C); font-weight: 700; font-size: 1.1rem; margin: 0; }
.shop-trust-item__text { font-family: var(--font-body, sans-serif); color: var(--gray-text, #666); font-size: 0.9rem; line-height: 1.5; margin: 0; }

/* Reused Motivational CTA */
.shop-cta { background: var(--navy, #0B192C); padding: 60px 0; color: var(--white, #fff); }
.shop-cta__wrap { display: flex; justify-content: space-between; align-items: center; gap: 40px; }
.shop-cta__left h2 { font-family: var(--font-heading, sans-serif); font-size: 2.5rem; margin-bottom: 5px; color: var(--white, #fff); }
.shop-cta__left p { font-family: var(--font-heading, sans-serif); font-size: 1.2rem; color: var(--green-bright, #00FF87); font-style: italic; margin: 0; }
.shop-cta__middle { display: flex; gap: 30px; }
.shop-cta__prop { display: flex; align-items: center; gap: 10px; font-family: var(--font-heading, sans-serif); font-weight: 600; font-size: 1rem; }
.shop-cta__prop svg { width: 24px; height: 24px; stroke: var(--green-bright, #00FF87); }
.shop-cta__right { display: flex; align-items: center; gap: 15px; font-family: var(--font-body, sans-serif); font-size: 1.1rem; font-weight: 600; padding: 15px 25px; background: rgba(255,255,255,0.1); border-radius: 30px; }
.shop-cta__right svg { width: 24px; height: 24px; stroke: var(--white, #fff); }

/* Responsive Layouts */
@media (max-width: 992px) {
    .shop-main-layout { grid-template-columns: 1fr; }
    .shop-products { grid-template-columns: repeat(2, 1fr); }
    .shop-cta__wrap { flex-direction: column; text-align: center; }
    .shop-cta__middle { flex-direction: column; gap: 15px; align-items: center; }
    .shop-trust-box { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
}
@media (max-width: 576px) {
    .shop-products { grid-template-columns: 1fr; }
    .shop-trust-box { grid-template-columns: 1fr; }
    .shop-content__topbar { flex-direction: column; gap: 15px; align-items: flex-start; }
}
</style>

<main class="shop-all-products">

    <!-- 1. Page Header Bar -->
    <header class="shop-header">
        <div class="shop-container">
            <div class="shop-breadcrumbs">
                <a href="<?php echo esc_url(site_url('/shop')); ?>">Shop</a> / All Products
            </div>
            <h1 class="shop-header__title">All Products</h1>
        </div>
    </header>

    <!-- 2. Main Layout (Sidebar + Grid) -->
    <section class="shop-container shop-main-layout">
        
        <!-- Left Sidebar -->
        <aside class="shop-sidebar">
            <div class="shop-sidebar__section">
                <h3 class="shop-sidebar__title">Categories</h3>
                <ul class="shop-category-list">
                    <li><a href="#">Paddles <span>(24)</span></a></li>
                    <li><a href="#">Balls <span>(8)</span></a></li>
                    <li><a href="#">Footwear <span>(16)</span></a></li>
                    <li><a href="#">Bags & Backpacks <span>(12)</span></a></li>
                    <li><a href="#">Eyewear & Hats <span>(18)</span></a></li>
                    <li><a href="#">Apparel <span>(42)</span></a></li>
                    <li><a href="#">Training & Acc. <span>(9)</span></a></li>
                </ul>
            </div>

            <div class="shop-sidebar__section">
                <h3 class="shop-sidebar__title">Filter by Price</h3>
                <div class="shop-filter-list">
                    <label class="shop-filter-label"><input type="checkbox"> Under $25</label>
                    <label class="shop-filter-label"><input type="checkbox"> $25 to $50</label>
                    <label class="shop-filter-label"><input type="checkbox"> $50 to $100</label>
                    <label class="shop-filter-label"><input type="checkbox"> $100 to $150</label>
                    <label class="shop-filter-label"><input type="checkbox"> $150 & Above</label>
                </div>
            </div>

            <div class="shop-sidebar__section">
                <h3 class="shop-sidebar__title">Filter by Rating</h3>
                <div class="shop-filter-list">
                    <label class="shop-filter-label"><input type="checkbox"> <span style="color:#FFC107;">&#9733;&#9733;&#9733;&#9733;&#9733;</span> 5 Stars</label>
                    <label class="shop-filter-label"><input type="checkbox"> <span style="color:#FFC107;">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4 Stars & Up</label>
                    <label class="shop-filter-label"><input type="checkbox"> <span style="color:#FFC107;">&#9733;&#9733;&#9733;&#9734;&#9734;</span> 3 Stars & Up</label>
                </div>
            </div>

            <!-- Reused Trust Box -->
            <div class="shop-trust-box">
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
            </div>
        </aside>

        <!-- Main Product Area -->
        <div class="shop-content">
            <div class="shop-content__topbar">
                <div class="shop-content__count">Showing 1-9 of 129 results</div>
                <div class="shop-sort">
                    Sort by:
                    <select aria-label="Sort products">
                        <option value="featured">Featured</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating">Highest Rated</option>
                    </select>
                </div>
            </div>

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

                <!-- Card 7 (Placeholder) -->
                <a href="#" class="shop-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/product/paddle.png" alt="Tour Elite Paddle" class="shop-card__image">
                    <div class="shop-card__content">
                        <h3 class="shop-card__title">Tour Elite Paddle</h3>
                        <div class="shop-card__subtitle">Maximum Spin Control</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$149.99</span>
                            <span class="shop-card__rating"><span class="shop-card__stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4.4 (55)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 8 (Placeholder) -->
                <a href="#" class="shop-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/product/shoe.png" alt="Court Lite Shoes" class="shop-card__image">
                    <div class="shop-card__content">
                        <h3 class="shop-card__title">Court Lite Shoes</h3>
                        <div class="shop-card__subtitle">Breathable Mesh</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$95.00</span>
                            <span class="shop-card__rating"><span class="shop-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> 5.0 (22)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 9 (Placeholder) -->
                <a href="#" class="shop-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/product/ball.png" alt="PBPA Indoor Balls" class="shop-card__image">
                    <div class="shop-card__content">
                        <h3 class="shop-card__title">PBPA Indoor Balls</h3>
                        <div class="shop-card__subtitle">Precision Bounce 3-Pack</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$12.99</span>
                            <span class="shop-card__rating"><span class="shop-card__stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4.7 (104)</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Load More Button -->
            <div class="shop-load-more">
                <a href="#" class="btn">Load More Products</a>
            </div>

        </div>
    </section>

    <!-- 3. Closing CTA Banner -->
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

</main>

<?php get_footer(); ?>
