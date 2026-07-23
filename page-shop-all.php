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

/* Modern Product Card Grid */
.shop-products {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.shop-card {
    background: #ffffff;
    border: 1px solid rgba(11, 25, 44, 0.08);
    border-radius: 16px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    position: relative;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    text-decoration: none;
}

.shop-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(11, 25, 44, 0.12);
    border-color: rgba(0, 208, 108, 0.4);
}

/* Image Container & Hover Effects */
.shop-card__image-wrap {
    position: relative;
    width: 100%;
    height: 240px;
    background: linear-gradient(135deg, #f8f9fa 0%, #edf0f4 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 25px;
    overflow: hidden;
}

.shop-card__badge {
    position: absolute;
    top: 14px;
    left: 14px;
    background: var(--navy, #0B192C);
    color: var(--green-bright, #00FF87);
    font-family: var(--font-heading, sans-serif);
    font-size: 0.72rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 5px 12px;
    border-radius: 20px;
    z-index: 2;
    box-shadow: 0 4px 12px rgba(11, 25, 44, 0.15);
}

.shop-card__badge--alt {
    background: var(--green, #00D06C);
    color: var(--navy, #0B192C);
}

.shop-card__image {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    mix-blend-mode: multiply;
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.shop-card:hover .shop-card__image {
    transform: scale(1.08);
}

/* Hover Action Button Overlay */
.shop-card__action-btn {
    position: absolute;
    bottom: -45px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--navy, #0B192C);
    color: #ffffff;
    font-family: var(--font-heading, sans-serif);
    font-size: 0.8rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 10px 22px;
    border-radius: 25px;
    opacity: 0;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    white-space: nowrap;
    box-shadow: 0 8px 20px rgba(11, 25, 44, 0.25);
}

.shop-card:hover .shop-card__action-btn {
    bottom: 15px;
    opacity: 1;
}

/* Card Content Details */
.shop-card__content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.shop-card__category {
    font-family: var(--font-heading, sans-serif);
    font-size: 0.75rem;
    color: var(--gray-text, #888888);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    margin-bottom: 4px;
}

.shop-card__title {
    font-family: var(--font-heading, sans-serif);
    color: var(--navy, #0B192C);
    font-size: 1.15rem;
    font-weight: 800;
    margin: 0 0 6px 0;
    line-height: 1.35;
    transition: color 0.2s ease;
}

.shop-card:hover .shop-card__title {
    color: var(--green, #00D06C);
}

.shop-card__subtitle {
    font-family: var(--font-body, sans-serif);
    color: var(--gray-text, #666);
    font-size: 0.85rem;
    margin-bottom: 18px;
}

.shop-card__bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
    padding-top: 12px;
    border-top: 1px dashed rgba(11, 25, 44, 0.08);
}

.shop-card__price {
    font-family: var(--font-heading, sans-serif);
    color: var(--navy, #0B192C);
    font-size: 1.35rem;
    font-weight: 900;
}

.shop-card__rating {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: #fff9e6;
    padding: 4px 10px;
    border-radius: 12px;
    font-family: var(--font-body, sans-serif);
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--navy, #0B192C);
}

.shop-card__rating svg {
    width: 14px;
    height: 14px;
    fill: #FFC107;
}

/* Modern Glassmorphic Trust Sidebar */
.shop-trust-box {
    background: linear-gradient(180deg, rgba(0, 208, 108, 0.06) 0%, rgba(11, 25, 44, 0.03) 100%);
    border: 1px solid rgba(0, 208, 108, 0.15);
    padding: 32px 24px;
    border-radius: 16px;
    display: flex;
    flex-direction: column;
    gap: 28px;
    height: fit-content;
}

.shop-trust-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
}

.shop-trust-item__icon {
    width: 44px;
    height: 44px;
    background: #ffffff;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 8px 18px rgba(11, 25, 44, 0.06);
    border: 1px solid rgba(11, 25, 44, 0.05);
}

.shop-trust-item__icon svg {
    width: 22px;
    height: 22px;
    stroke: var(--navy, #0B192C);
}

.shop-trust-item__body {
    display: flex;
    flex-direction: column;
}

.shop-trust-item__title {
    font-family: var(--font-heading, sans-serif);
    color: var(--navy, #0B192C);
    font-weight: 800;
    font-size: 1.02rem;
    margin: 0 0 4px 0;
}

.shop-trust-item__text {
    font-family: var(--font-body, sans-serif);
    color: var(--gray-text, #666);
    font-size: 0.85rem;
    line-height: 1.45;
    margin: 0;
}

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
        
        <!-- Left Sidebar Filters -->
        <aside class="shop-sidebar">
            <div class="shop-sidebar__section">
                <h3 class="shop-sidebar__title">Categories</h3>
                <ul class="shop-category-list">
                    <li><a href="#" class="cat-filter active" data-cat="all">All Categories</a></li>
                    <li><a href="#" class="cat-filter" data-cat="paddles">Paddles <span>(2)</span></a></li>
                    <li><a href="#" class="cat-filter" data-cat="balls">Balls <span>(2)</span></a></li>
                    <li><a href="#" class="cat-filter" data-cat="footwear">Footwear <span>(2)</span></a></li>
                    <li><a href="#" class="cat-filter" data-cat="bags">Bags & Backpacks <span>(1)</span></a></li>
                    <li><a href="#" class="cat-filter" data-cat="eyewear">Eyewear & Hats <span>(1)</span></a></li>
                    <li><a href="#" class="cat-filter" data-cat="apparel">Apparel <span>(1)</span></a></li>
                </ul>
            </div>

            <div class="shop-sidebar__section">
                <h3 class="shop-sidebar__title">Filter by Price</h3>
                <div class="shop-filter-list" id="price-filters">
                    <label class="shop-filter-label"><input type="checkbox" value="0-25"> Under $25</label>
                    <label class="shop-filter-label"><input type="checkbox" value="25-50"> $25 to $50</label>
                    <label class="shop-filter-label"><input type="checkbox" value="50-100"> $50 to $100</label>
                    <label class="shop-filter-label"><input type="checkbox" value="100-150"> $100 to $150</label>
                    <label class="shop-filter-label"><input type="checkbox" value="150-999"> $150 & Above</label>
                </div>
            </div>

            <div class="shop-sidebar__section">
                <h3 class="shop-sidebar__title">Filter by Rating</h3>
                <div class="shop-filter-list" id="rating-filters">
                    <label class="shop-filter-label"><input type="checkbox" value="5"> <span style="color:#FFC107;">&#9733;&#9733;&#9733;&#9733;&#9733;</span> 5 Stars</label>
                    <label class="shop-filter-label"><input type="checkbox" value="4"> <span style="color:#FFC107;">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4 Stars & Up</label>
                    <label class="shop-filter-label"><input type="checkbox" value="3"> <span style="color:#FFC107;">&#9733;&#9733;&#9733;&#9734;&#9734;</span> 3 Stars & Up</label>
                </div>
            </div>

            <!-- Trust Box Sidebar -->
            <div class="shop-trust-box">
                <div class="shop-trust-item">
                    <div class="shop-trust-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></div>
                    <div class="shop-trust-item__body">
                        <h4 class="shop-trust-item__title">Pro Recommended</h4>
                        <p class="shop-trust-item__text">Tested and approved by certified PBPA instructors.</p>
                    </div>
                </div>
                <div class="shop-trust-item">
                    <div class="shop-trust-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></div>
                    <div class="shop-trust-item__body">
                        <h4 class="shop-trust-item__title">Safe & Secure</h4>
                        <p class="shop-trust-item__text">Encrypted checkout for 100% safe transactions.</p>
                    </div>
                </div>
                <div class="shop-trust-item">
                    <div class="shop-trust-item__icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2v6h-6"></path><path d="M3 12a9 9 0 0 1 15-6.7L21 8"></path><path d="M3 22v-6h6"></path><path d="M21 12a9 9 0 0 1-15 6.7L3 16"></path></svg></div>
                    <div class="shop-trust-item__body">
                        <h4 class="shop-trust-item__title">30-Day Guarantee</h4>
                        <p class="shop-trust-item__text">Easy, hassle-free returns on all unworn equipment.</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Product Area -->
        <div class="shop-content">
            <div class="shop-content__topbar">
                <div class="shop-content__count" id="product-count">Showing 9 of 9 results</div>
                <div class="shop-sort">
                    Sort by:
                    <select id="shop-sort-select" aria-label="Sort products">
                        <option value="featured">Featured</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating">Highest Rated</option>
                    </select>
                </div>
            </div>

            <div class="shop-products" id="product-grid">
                <!-- Card 1 -->
                <a href="#" class="shop-card" data-category="paddles" data-price="129.99" data-rating="4.9" data-featured="1">
                    <div class="shop-card__image-wrap">
                        <span class="shop-card__badge">Best Seller</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/paddle.png" alt="PBPA Signature Paddle" class="shop-card__image">
                        <span class="shop-card__action-btn">View Details</span>
                    </div>
                    <div class="shop-card__content">
                        <span class="shop-card__category">Paddles</span>
                        <h3 class="shop-card__title">PBPA Signature Paddle</h3>
                        <div class="shop-card__subtitle">Carbon Fiber Power Core</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$129.99</span>
                            <span class="shop-card__rating"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.9 (128)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="#" class="shop-card" data-category="balls" data-price="14.99" data-rating="4.8" data-featured="2">
                    <div class="shop-card__image-wrap">
                        <span class="shop-card__badge shop-card__badge--alt">PBPA Approved</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/ball.png" alt="PBPA Outdoor Balls" class="shop-card__image">
                        <span class="shop-card__action-btn">View Details</span>
                    </div>
                    <div class="shop-card__content">
                        <span class="shop-card__category">Balls</span>
                        <h3 class="shop-card__title">PBPA Outdoor Balls</h3>
                        <div class="shop-card__subtitle">Durable 3-Pack</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$14.99</span>
                            <span class="shop-card__rating"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.8 (342)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="#" class="shop-card" data-category="footwear" data-price="119.99" data-rating="4.6" data-featured="3">
                    <div class="shop-card__image-wrap">
                        <span class="shop-card__badge">New Arrival</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/shoe.png" alt="Court Pro Pickleball Shoes" class="shop-card__image">
                        <span class="shop-card__action-btn">View Details</span>
                    </div>
                    <div class="shop-card__content">
                        <span class="shop-card__category">Footwear</span>
                        <h3 class="shop-card__title">Court Pro Shoes</h3>
                        <div class="shop-card__subtitle">Enhanced Grip & Lateral Support</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$119.99</span>
                            <span class="shop-card__rating"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.6 (85)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 4 -->
                <a href="#" class="shop-card" data-category="bags" data-price="89.99" data-rating="4.9" data-featured="4">
                    <div class="shop-card__image-wrap">
                        <span class="shop-card__badge shop-card__badge--alt">Top Gear</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/bag.png" alt="PBPA Pro Backpack" class="shop-card__image">
                        <span class="shop-card__action-btn">View Details</span>
                    </div>
                    <div class="shop-card__content">
                        <span class="shop-card__category">Bags</span>
                        <h3 class="shop-card__title">PBPA Pro Backpack</h3>
                        <div class="shop-card__subtitle">Fits 4 Paddles + Accessories</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$89.99</span>
                            <span class="shop-card__rating"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.9 (42)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 5 -->
                <a href="#" class="shop-card" data-category="eyewear" data-price="45.00" data-rating="4.5" data-featured="5">
                    <div class="shop-card__image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/glasses.png" alt="Performance Sunglasses" class="shop-card__image">
                        <span class="shop-card__action-btn">View Details</span>
                    </div>
                    <div class="shop-card__content">
                        <span class="shop-card__category">Eyewear</span>
                        <h3 class="shop-card__title">Performance Eyewear</h3>
                        <div class="shop-card__subtitle">Polarized UV Protection</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$45.00</span>
                            <span class="shop-card__rating"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.5 (61)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 6 -->
                <a href="#" class="shop-card" data-category="apparel" data-price="34.99" data-rating="4.7" data-featured="6">
                    <div class="shop-card__image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/shirt.png" alt="PBPA Performance Shirt" class="shop-card__image">
                        <span class="shop-card__action-btn">View Details</span>
                    </div>
                    <div class="shop-card__content">
                        <span class="shop-card__category">Apparel</span>
                        <h3 class="shop-card__title">Performance Tech Tee</h3>
                        <div class="shop-card__subtitle">Breathable Moisture Wicking</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$34.99</span>
                            <span class="shop-card__rating"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.7 (112)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 7 -->
                <a href="#" class="shop-card" data-category="paddles" data-price="149.99" data-rating="4.4" data-featured="7">
                    <div class="shop-card__image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/paddle.png" alt="Tour Elite Paddle" class="shop-card__image">
                        <span class="shop-card__action-btn">View Details</span>
                    </div>
                    <div class="shop-card__content">
                        <span class="shop-card__category">Paddles</span>
                        <h3 class="shop-card__title">Tour Elite Paddle</h3>
                        <div class="shop-card__subtitle">Maximum Spin Control</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$149.99</span>
                            <span class="shop-card__rating"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.4 (55)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 8 -->
                <a href="#" class="shop-card" data-category="footwear" data-price="95.00" data-rating="5.0" data-featured="8">
                    <div class="shop-card__image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/shoe.png" alt="Court Lite Shoes" class="shop-card__image">
                        <span class="shop-card__action-btn">View Details</span>
                    </div>
                    <div class="shop-card__content">
                        <span class="shop-card__category">Footwear</span>
                        <h3 class="shop-card__title">Court Lite Shoes</h3>
                        <div class="shop-card__subtitle">Breathable Mesh</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$95.00</span>
                            <span class="shop-card__rating"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 5.0 (22)</span>
                        </div>
                    </div>
                </a>

                <!-- Card 9 -->
                <a href="#" class="shop-card" data-category="balls" data-price="12.99" data-rating="4.7" data-featured="9">
                    <div class="shop-card__image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/product/ball.png" alt="PBPA Indoor Balls" class="shop-card__image">
                        <span class="shop-card__action-btn">View Details</span>
                    </div>
                    <div class="shop-card__content">
                        <span class="shop-card__category">Balls</span>
                        <h3 class="shop-card__title">PBPA Indoor Balls</h3>
                        <div class="shop-card__subtitle">Precision Bounce 3-Pack</div>
                        <div class="shop-card__bottom">
                            <span class="shop-card__price">$12.99</span>
                            <span class="shop-card__rating"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.7 (104)</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Empty State Message container -->
            <div id="no-products-msg" style="display: none; text-align: center; padding: 50px 20px; background: #f8f9fa; border-radius: 12px; font-family: var(--font-heading, sans-serif);">
                <h3 style="color: var(--navy, #0B192C); margin-bottom: 10px;">No Products Found</h3>
                <p style="color: var(--gray-text, #666); font-family: var(--font-body, sans-serif);">Try clearing some of your active filters to see more results.</p>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = Array.from(document.querySelectorAll('#product-grid .shop-card'));
    const grid = document.getElementById('product-grid');
    const noProductsMsg = document.getElementById('no-products-msg');
    const productCount = document.getElementById('product-count');
    
    const catFilters = document.querySelectorAll('.cat-filter');
    const priceFilters = document.querySelectorAll('#price-filters input');
    const ratingFilters = document.querySelectorAll('#rating-filters input');
    const sortSelect = document.getElementById('shop-sort-select');

    function updateProducts() {
        // 1. Get active category
        const activeCatBtn = document.querySelector('.cat-filter.active');
        const activeCat = activeCatBtn ? activeCatBtn.getAttribute('data-cat') : 'all';

        // 2. Get active prices
        const activePrices = Array.from(priceFilters).filter(cb => cb.checked).map(cb => cb.value);

        // 3. Get active ratings
        const activeRatings = Array.from(ratingFilters).filter(cb => cb.checked).map(cb => parseInt(cb.value));

        // 4. Filter
        let filtered = cards.filter(card => {
            const cat = card.getAttribute('data-category');
            const price = parseFloat(card.getAttribute('data-price'));
            const rating = parseFloat(card.getAttribute('data-rating'));

            // Category check
            if (activeCat !== 'all' && cat !== activeCat) return false;

            // Price check
            if (activePrices.length > 0) {
                const passesPrice = activePrices.some(range => {
                    const [minStr, maxStr] = range.split('-');
                    const min = parseFloat(minStr);
                    const max = parseFloat(maxStr);
                    return price >= min && price <= max;
                });
                if (!passesPrice) return false;
            }

            // Rating check
            if (activeRatings.length > 0) {
                const passesRating = activeRatings.some(minRating => rating >= minRating);
                if (!passesRating) return false;
            }

            return true;
        });

        // 5. Sort
        const sortVal = sortSelect.value;
        filtered.sort((a, b) => {
            if (sortVal === 'price-low') {
                return parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price'));
            } else if (sortVal === 'price-high') {
                return parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price'));
            } else if (sortVal === 'rating') {
                return parseFloat(b.getAttribute('data-rating')) - parseFloat(a.getAttribute('data-rating'));
            } else {
                // featured
                return parseInt(a.getAttribute('data-featured')) - parseInt(b.getAttribute('data-featured'));
            }
        });

        // 6. Render
        grid.innerHTML = '';
        if (filtered.length === 0) {
            grid.style.display = 'none';
            noProductsMsg.style.display = 'block';
            productCount.textContent = 'Showing 0 results';
        } else {
            grid.style.display = '';
            noProductsMsg.style.display = 'none';
            filtered.forEach(card => grid.appendChild(card));
            productCount.textContent = `Showing ${filtered.length} result${filtered.length !== 1 ? 's' : ''}`;
        }
    }

    // Attach events
    catFilters.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            catFilters.forEach(f => f.classList.remove('active'));
            btn.classList.add('active');
            updateProducts();
        });
    });

    priceFilters.forEach(cb => cb.addEventListener('change', updateProducts));
    ratingFilters.forEach(cb => cb.addEventListener('change', updateProducts));
    sortSelect.addEventListener('change', updateProducts);
});
</script>
<style>
/* Active state for Category Links */
.shop-category-list a.active {
    color: var(--green, #00D06C) !important;
    font-weight: 800 !important;
}
</style>
<?php get_footer(); ?>
