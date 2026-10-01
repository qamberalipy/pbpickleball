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

    <!-- Hero Section -->
    <section class="hero shop-hero-full">
        <div class="shop-hero__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/media/shop-hero-banner.webp');"></div>
        <div class="hero-container">
            <div class="hero-content anim-fade-up">
                <h1><span style="color: var(--navy);text-shadow: 0 2px 15px rgb(255 255 255 / 70%)!important;">PBA </span><br><span class="highlight program-hero-main">SHOP</span></h1>
            </div>
        </div>
    </section>

    <!-- Modern eCommerce Layout -->
    <section class="real-ecommerce-store" style="padding: 60px 20px; max-width: 1400px; margin: 0 auto;">
        
        <!-- Grid: Left Sidebar (Filters) + Right Content (Products) -->
        <div class="shop-layout-grid" style="display: grid; grid-template-columns: 280px 1fr; gap: 50px; align-items: start;">

            <!-- LEFT SIDEBAR: HUSKY FILTERS -->
            <aside class="shop-filter-sidebar" style="background: var(--white); padding: 30px; border-radius: 16px; border: 1px solid var(--gray-light); box-shadow: 0 10px 30px rgba(11,32,70,0.05); position: sticky; top: 120px;">
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: var(--navy); margin-bottom: 25px; border-bottom: 3px solid var(--green); padding-bottom: 12px; text-transform: uppercase;">
                    Filter Gear
                </h3>
                
                <!-- The Standard Free Husky Shortcode -->
                <div class="husky-filter-wrap">
                    <?php echo do_shortcode('[woof]'); ?>
                </div>
            </aside>

            <!-- RIGHT MAIN: PRODUCTS & PAGINATION -->
            <div class="shop-product-grid">
                
                <!-- Top Bar: Title & Sorting -->
                <header class="woocommerce-products-header" style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 30px; border-bottom: 2px solid var(--gray-light); padding-bottom: 15px; flex-wrap: wrap; gap: 15px;">
                    <div>
                        <span style="font-family: var(--font-heading); color: var(--green); font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Pro Equipment</span>
                        <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--navy); text-transform: uppercase; margin: 0; line-height: 1.1;">All Gear</h2>
                    </div>
                    <div class="store-sorting">
                        <?php woocommerce_catalog_ordering(); ?>
                    </div>
                </header>

                <!-- Product Loop -->
                <?php
                if ( woocommerce_product_loop() ) {
                    woocommerce_product_loop_start();

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();
                            // Loads the native WooCommerce product card template so it matches the Related Products perfectly
                            wc_get_template_part( 'content', 'product' );
                        }
                    }

                    woocommerce_product_loop_end();

                    // Native WooCommerce Pagination
                    echo '<div class="pba-pagination-wrapper">';
                    woocommerce_pagination();
                    echo '</div>';

                } else {
                    do_action( 'woocommerce_no_products_found' );
                }
                ?>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>