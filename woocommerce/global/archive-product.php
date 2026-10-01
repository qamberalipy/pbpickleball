<?php
/**
 * The Template for displaying product archives, including the main shop page.
 *
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main class="shop-landing pba-bg-pattern">

    <!-- 1. Hero Section -->
    <section class="hero shop-hero-full" data-mascot-msg="Gear up and play your best! We've hand-selected the perfect equipment for your game.">
        <div class="shop-hero__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/media/shop-hero-banner.webp');"></div>
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h1><span style="color: var(--navy);text-shadow: 0 2px 15px rgb(255 255 255 / 70%)!important;">PBA </span><br><span class="highlight program-hero-main">SHOP</span></h1>
                <div class="hero-quick-jump anim-fade-up" style="animation-delay: 1.1s;">
                    <span class="qj-label">Click To View More:</span>
                    <div class="qj-links">
                        <a href="#featured" class="qj-link">Featured Products</a>
                        <a href="#contact" class="qj-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Featured Products Section (Native WooCommerce Loop) -->
    <section id="featured" class="shop-featured" data-mascot-msg="Check out our featured products, tested and approved by PBA pros!">
        <div class="shop-container">
            
            <!-- Filter & Sorting Header -->
            <div class="shop-featured__header" style="display: flex; flex-direction: column; align-items: flex-start; gap: 20px;">
                <div class="shop-featured__title-wrap" style="width: 100%; display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 15px;">
                    <div>
                        <span class="shop-featured__tag">Curated Selection</span>
                        <h2 class="shop-featured__title" style="margin-bottom: 0;">Featured Products</h2>
                    </div>
                    <!-- Native WooCommerce sorting dropdown -->
                    <div class="shop-featured__sorting">
                        <?php woocommerce_catalog_ordering(); ?>
                    </div>
                </div>
                
                <!-- HUSKY HORIZONTAL FILTER BAR -->
                <div class="pba-filter-bar" style="width: 100%; background: var(--white); padding: 20px; border-radius: 12px; border: 1px solid var(--gray-light); box-shadow: 0 4px 15px rgba(11,32,70,0.03);">
                    <?php echo do_shortcode('[woof]'); ?>
                </div>
            </div>
            
            <div class="shop-featured__layout">
                <!-- Main Grid -->
                <div class="shop-products">

                    <?php
                    if ( woocommerce_product_loop() ) {
                        woocommerce_product_loop_start();

                        if ( wc_get_loop_prop( 'total' ) ) {
                            while ( have_posts() ) {
                                the_post();
                                do_action( 'woocommerce_shop_loop' );

                                global $product;
                                $price_html       = $product->get_price_html();
                                $add_to_cart_url  = '?add-to-cart=' . get_the_ID();
                                $img_url          = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                                if ( empty( $img_url ) ) {
                                    $img_url = wc_placeholder_img_src();
                                }

                                $cat_name = 'Gear';
                                $terms    = get_the_terms( get_the_ID(), 'product_cat' );
                                if ( $terms && ! is_wp_error( $terms ) ) {
                                    foreach ( $terms as $term ) {
                                        if ( $term->slug !== 'shop' ) {
                                            $cat_name = $term->name;
                                            break;
                                        }
                                    }
                                }
                                ?>

                                <div class="anim-fade-up shop-card">
                                    <a href="<?php the_permalink(); ?>" class="shop-card__image-wrap">
                                        <?php if ( $product->is_on_sale() ) : ?>
                                            <span class="shop-card__badge shop-card__badge--alt">Sale!</span>
                                        <?php endif; ?>
                                        <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="shop-card__image">
                                        
                                        <!-- QUICK VIEW MODAL TRIGGER -->
                                        <span class="shop-card__action-btn woosq-btn" data-id="<?php echo get_the_ID(); ?>">Quick View</span>
                                    </a>

                                    <div class="shop-card__content">
                                        <span class="shop-card__category"><?php echo esc_html( $cat_name ); ?></span>
                                        <h3 class="shop-card__title"><?php the_title(); ?></h3>
                                        <div class="shop-card__subtitle" style="font-weight: 800; color: var(--green);"><?php echo $price_html; ?></div>
                                        <div class="shop-card__bottom">
                                            <?php woocommerce_template_loop_add_to_cart(); ?>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        }

                        woocommerce_product_loop_end();

                        // Native WooCommerce Pagination
                        woocommerce_pagination();

                    } else {
                        do_action( 'woocommerce_no_products_found' );
                    }
                    ?>

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

    <!-- 3. Motivational CTA Banner -->
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

    <!-- 4. Brand Trust Footer Strip -->
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