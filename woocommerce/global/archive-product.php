<?php
/**
 * The Template for displaying product archives.
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
            </div>
        </div>
    </section>

    <!-- 2. Featured Products Section -->
    <section id="featured" class="shop-featured" data-mascot-msg="Check out our featured products, tested and approved by PBA pros!">
        <div class="shop-container">
            
            <!-- Filter & Sorting Header -->
            <div class="shop-featured__header" style="display: flex; flex-direction: column; align-items: flex-start; gap: 20px;">
                <div class="shop-featured__title-wrap" style="width: 100%; display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 15px;">
                    <div>
                        <span class="shop-featured__tag">Curated Selection</span>
                        <h2 class="shop-featured__title" style="margin-bottom: 0;">Featured Products</h2>
                    </div>
                    <div class="shop-featured__sorting">
                        <?php woocommerce_catalog_ordering(); ?>
                    </div>
                </div>
                
                <!-- HUSKY HORIZONTAL FILTER BAR -->
                <div class="pba-filter-bar" style="width: 100%; background: var(--white); padding: 20px; border-radius: 12px; border: 1px solid var(--gray-light); box-shadow: 0 4px 15px rgba(11,32,70,0.03);">
                    <?php echo do_shortcode('[woof_front_builder]'); ?>
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
                                $price_html = $product->get_price_html();
                                $img_url    = get_the_post_thumbnail_url( get_the_ID(), 'large' );
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
                                    <div class="shop-card__image-wrap">
                                        <a href="<?php the_permalink(); ?>" style="display: block; width: 100%; height: 100%;">
                                            <?php if ( $product->is_on_sale() ) : ?>
                                                <span class="shop-card__badge shop-card__badge--alt">Sale!</span>
                                            <?php endif; ?>
                                            <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="shop-card__image">
                                        </a>
                                        
                                        <!-- NO MODALS: ROUTES DIRECTLY TO FULL PRODUCT PAGE -->
                                        <a href="<?php the_permalink(); ?>" class="shop-card__action-btn">View Details</a>
                                    </div>

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
                </aside>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>