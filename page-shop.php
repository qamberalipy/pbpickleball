<?php
/**
 * Template Name: Shop Landing
 */
?>
<?php get_header(); ?>

<style>
/* Shop Global Styles */
.shop-container { max-width: 1400px; margin: 0 auto; padding: 0 20px; }

/* 1. Hero Section (Full Background Image + Navy Overlay) */
.shop-hero {
    position: relative;
    padding: 80px 0 100px 0;
    color: var(--white, #fff);
    min-height: 480px;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.shop-hero__bg {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background-size: cover;
    background-position: center;
    z-index: 1;
}

.shop-hero__bg::after {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(135deg, rgba(11, 25, 44, 0.92) 0%, rgba(11, 25, 44, 0.80) 100%);
}

.shop-hero__container {
    position: relative;
    z-index: 2;
    width: 100%;
}

.shop-hero__grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 40px;
    align-items: center;
}

.shop-hero__content {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.shop-hero__title {
    font-family: var(--font-heading, sans-serif);
    color: var(--white, #ffffff);
    font-size: clamp(2rem, 3.5vw, 2.8rem);
    text-transform: uppercase;
    margin-bottom: 8px;
    line-height: 1.1;
    font-weight: 900;
}

.shop-hero__subtitle {
    font-family: var(--font-heading, sans-serif);
    color: var(--green-bright, #00FF87);
    font-size: 1.35rem;
    font-style: italic;
    font-weight: 700;
    margin-bottom: 20px;
}

.shop-hero__text {
    font-family: var(--font-body, sans-serif);
    color: #e0e0e0;
    font-size: 1.05rem;
    line-height: 1.6;
    margin-bottom: 30px;
    max-width: 540px;
}

.shop-hero__features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.shop-hero__feature {
    display: flex;
    align-items: center;
    gap: 10px;
    font-family: var(--font-heading, sans-serif);
    font-weight: 700;
    color: var(--white, #ffffff);
    font-size: 0.95rem;
}

.shop-hero__feature svg {
    width: 22px;
    height: 22px;
    stroke: var(--green-bright, #00FF87);
    flex-shrink: 0;
}

/* Right Side Overlay Card Only */
.shop-hero__right {
    display: flex;
    justify-content: flex-end;
}

.shop-hero__overlay-card {
    background: rgba(11, 25, 44, 0.85);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 255, 135, 0.25);
    color: var(--white, #fff);
    padding: 35px;
    border-radius: var(--radius, 16px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.35);
    width: 100%;
    max-width: 440px;
}

.shop-hero__overlay-title {
    font-family: var(--font-heading, sans-serif);
    font-size: 1.25rem;
    margin-bottom: 20px;
    color: var(--green-bright, #00FF87);
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.shop-hero__list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
}

.shop-hero__list li {
    display: flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-body, sans-serif);
    font-size: 0.9rem;
    color: #ffffff;
    font-weight: 500;
}

.shop-hero__list svg {
    width: 16px;
    height: 16px;
    stroke: var(--green-bright, #00FF87);
    flex-shrink: 0;
}

/* Responsive Hero Fixes */
@media (max-width: 992px) {
    .shop-hero { padding: 60px 0; }
    .shop-hero__grid { grid-template-columns: 1fr; gap: 40px; }
    .shop-hero__right { justify-content: flex-start; }
    .shop-hero__overlay-card { max-width: 100%; }
}

@media (max-width: 576px) {
    .shop-hero__features,
    .shop-hero__list { grid-template-columns: 1fr; }
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

/* ==========================================================================
   Modern Industrial Product Section
   ========================================================================== */
.shop-featured {
    padding: 90px 0;
    background: #ffffff;
}

.shop-featured__header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 45px;
    border-bottom: 2px solid #f0f2f5;
    padding-bottom: 20px;
}

.shop-featured__title-wrap {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.shop-featured__tag {
    font-family: var(--font-heading, sans-serif);
    color: var(--green, #00D06C);
    font-size: 0.85rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.shop-featured__title {
    font-family: var(--font-heading, sans-serif);
    color: var(--navy, #0B192C);
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    text-transform: uppercase;
    font-weight: 900;
    margin: 0;
    line-height: 1.1;
}

.shop-featured__view-all {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-heading, sans-serif);
    color: var(--navy, #0B192C);
    text-decoration: none;
    font-weight: 800;
    font-size: 0.95rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 10px 20px;
    border-radius: 30px;
    background: #f4f5f7;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.shop-featured__view-all:hover {
    background: var(--navy, #0B192C);
    color: var(--green-bright, #00FF87);
    transform: translateX(4px);
}

.shop-featured__layout {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 35px;
}

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
    height: 180px;
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
    font-size: 1rem;
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
    margin-top: auto;
    padding-top: 16px;
    border-top: 1px solid rgba(11, 25, 44, 0.06);
}

.shop-guide-btn {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    padding: 12px;
    border-radius: 8px;
    font-family: var(--font-heading, sans-serif);
    font-size: 0.85rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    text-decoration: none;
    border: none;
}

.shop-guide-btn.btn-green {
    background: var(--green, #00D06C);
    color: var(--navy, #0B192C);
}

.shop-guide-btn.btn-green:hover {
    background: var(--green-bright, #00FF87);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 208, 108, 0.25);
}

.shop-guide-btn.btn-disabled {
    background: #f4f5f7;
    color: #a0aabf;
    border: 1.5px dashed #d1d6e0;
    cursor: not-allowed;
    pointer-events: none;
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
    position: sticky;
    top: 100px;
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

/* Responsive Grid Breakdown */
@media (max-width: 1024px) {
    .shop-featured__layout { grid-template-columns: 1fr; }
    .shop-products { grid-template-columns: repeat(3, 1fr); }
    .shop-trust-box { position: static; display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
}

@media (max-width: 820px) {
    .shop-products { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 576px) {
    .shop-products,
    .shop-trust-box { grid-template-columns: 1fr; }
    .shop-featured__header { flex-direction: column; align-items: flex-start; gap: 16px; }
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
        <div class="shop-hero__bg" style="background-image: url('https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?q=80&w=1920&auto=format&fit=crop');"></div>
        <div class="shop-container shop-hero__container">
            <div class="shop-hero__grid">
                
                <!-- Left Content -->
                <div class="shop-hero__content">
                    <h1 class="shop-hero__title">PBPA SHOP</h1>
                    <div class="shop-hero__subtitle">Gear You Can Trust. Performance You'll Love.</div>
                    <p class="shop-hero__text">We've hand-selected the best pickleball equipment so you don't have to guess. From pro-level paddles to premium court shoes, we have exactly what you need to elevate your game.</p>
                    
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
                </div>

                <!-- Right Visual Side (Overlay Card Only) -->
                <div class="shop-hero__right">
                    <div class="shop-hero__overlay-card">
                        <div class="shop-hero__overlay-title">Everything You Need To Play Your Best</div>
                        <ul class="shop-hero__list">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Premium Paddles</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Official Balls</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Court Footwear</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Bags & Gear</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Performance Apparel</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Training Aids</li>
                        </ul>
                    </div>
                </div>

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
                    <div class="shop-card">
                        <div class="shop-card__image-wrap">
                            <span class="shop-card__badge">Best Seller</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/paddle.png" alt="PBPA Signature Paddle" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Paddles</span>
                            <h3 class="shop-card__title">PBPA Signature Paddle</h3>
                            <div class="shop-card__subtitle">Carbon Fiber Power Core</div>
                            <div class="shop-card__bottom">
                                <a href="<?php echo get_template_directory_uri(); ?>/media/guide-pdfs/paddle-guide.pdf" class="shop-guide-btn btn-green" target="_blank" download>Download Guide</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="shop-card">
                        <div class="shop-card__image-wrap">
                            <span class="shop-card__badge shop-card__badge--alt">PBPA Approved</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/ball.png" alt="PBPA Outdoor Balls" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Balls</span>
                            <h3 class="shop-card__title">PBPA Outdoor Balls</h3>
                            <div class="shop-card__subtitle">Durable 3-Pack</div>
                            <div class="shop-card__bottom">
                                <a href="<?php echo get_template_directory_uri(); ?>/media/guide-pdfs/ball-guide.pdf" class="shop-guide-btn btn-green" target="_blank" download>Download Guide</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="shop-card">
                        <div class="shop-card__image-wrap">
                            <span class="shop-card__badge">New Arrival</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/shoe.png" alt="Court Pro Pickleball Shoes" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Footwear</span>
                            <h3 class="shop-card__title">Court Pro Shoes</h3>
                            <div class="shop-card__subtitle">Enhanced Grip &amp; Lateral Support</div>
                            <div class="shop-card__bottom">
                                <a href="<?php echo get_template_directory_uri(); ?>/media/guide-pdfs/shoes-guide.pdf" class="shop-guide-btn btn-green" target="_blank" download>Download Guide</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 (Bag) -->
                    <div class="shop-card">
                        <div class="shop-card__image-wrap">
                            <span class="shop-card__badge shop-card__badge--alt">Top Gear</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/bag.png" alt="PBPA Pro Backpack" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Bags</span>
                            <h3 class="shop-card__title">PBPA Pro Backpack</h3>
                            <div class="shop-card__subtitle">Fits 4 Paddles + Accessories</div>
                            <div class="shop-card__bottom">
                                <button class="shop-guide-btn btn-disabled" disabled>Guide Coming Soon</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="shop-card">
                        <div class="shop-card__image-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/glasses.png" alt="Performance Sunglasses" class="shop-card__image">
                        </div>
                        <div class="shop-card__content">
                            <span class="shop-card__category">Eyewear</span>
                            <h3 class="shop-card__title">Performance Eyewear</h3>
                            <div class="shop-card__subtitle">Polarized UV Protection</div>
                            <div class="shop-card__bottom">
                                <a href="<?php echo get_template_directory_uri(); ?>/media/guide-pdfs/safety-glasses-guide.pdf" class="shop-guide-btn btn-green" target="_blank" download>Download Guide</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 (Shirt) -->
                    <div class="shop-card">
                        <div class="shop-card__image-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/media/product/shirt.png" alt="PBPA Performance Shirt" class="shop-card__image">
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
                    <div class="shop-trust-item">
                        <div class="shop-trust-item__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="shop-trust-item__body">
                            <h4 class="shop-trust-item__title">Pro Recommended</h4>
                            <p class="shop-trust-item__text">Tested and approved by certified PBPA instructors.</p>
                        </div>
                    </div>

                    <div class="shop-trust-item">
                        <div class="shop-trust-item__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </div>
                        <div class="shop-trust-item__body">
                            <h4 class="shop-trust-item__title">Safe & Secure</h4>
                            <p class="shop-trust-item__text">Encrypted checkout for 100% safe transactions.</p>
                        </div>
                    </div>

                    <div class="shop-trust-item">
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
