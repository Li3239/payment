<?php

require_once('vite.php');

require_once("hooks.php");

require_once("checkout-hooks.php");

if (!defined('ABSPATH')) {
    exit;
}

require_once(get_template_directory() . "/init.php");




/**
 * support Woocommerce function
 */
function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

/**
 * change checkout button text
 */
add_filter('woocommerce_proceed_to_checkout', 'customize_checkout_button_text');
function customize_checkout_button_text()
{
    return 'Check Out';
}

