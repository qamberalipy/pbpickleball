<?php
/**
 * PB Pickleball Academy Theme Functions
 *
 * @package PBPickleball
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// =========================================================================
// 1. THEME SUPPORT FOR WOOCOMMERCE
// =========================================================================
add_action( 'after_setup_theme', 'pba_add_woocommerce_support' );
function pba_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// =========================================================================
// 2. WOOCOMMERCE: SKIP CART & GO DIRECTLY TO CHECKOUT
// =========================================================================
add_filter( 'woocommerce_add_to_cart_redirect', 'pba_skip_cart_redirect_checkout' );
function pba_skip_cart_redirect_checkout() {
    return wc_get_checkout_url();
}

// =========================================================================
// 3. WOOCOMMERCE: CUSTOM CHECKOUT FIELDS (PLAYER SKILL LEVEL)
// =========================================================================
add_action( 'woocommerce_before_order_notes', 'pba_custom_checkout_fields' );
function pba_custom_checkout_fields( $checkout ) {
    echo '<div id="pba_custom_checkout_field"><h3>' . esc_html__( 'Player Details', 'pba' ) . '</h3>';

    woocommerce_form_field( 'player_skill_level', array(
        'type'     => 'select',
        'class'    => array( 'pba-field form-row-wide' ),
        'label'    => esc_html__( 'Player Skill Level', 'pba' ),
        'required' => true,
        'options'  => array(
            ''                            => esc_html__( 'Select your level...', 'pba' ),
            'Beginner (Never Played)'     => esc_html__( 'Beginner (Never Played)', 'pba' ),
            'Novice (Played a Few Times)' => esc_html__( 'Novice (Played a Few Times)', 'pba' ),
            'Intermediate (2.5 - 3.5)'    => esc_html__( 'Intermediate (2.5 - 3.5)', 'pba' ),
            'Advanced (4.0+)'             => esc_html__( 'Advanced (4.0+)', 'pba' ),
        ),
    ), $checkout->get_value( 'player_skill_level' ) );

    echo '</div>';
}

add_action( 'woocommerce_checkout_process', 'pba_custom_checkout_field_validation' );
function pba_custom_checkout_field_validation() {
    if ( empty( $_POST['player_skill_level'] ) ) {
        wc_add_notice( esc_html__( 'Please select your Player Skill Level before checking out.', 'pba' ), 'error' );
    }
}

add_action( 'woocommerce_checkout_update_order_meta', 'pba_custom_checkout_field_update_order_meta' );
function pba_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['player_skill_level'] ) ) {
        update_post_meta( $order_id, 'Player Skill Level', sanitize_text_field( wp_unslash($_POST['player_skill_level'] ) ) );
    }
}

