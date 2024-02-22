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

//change text on proceed to checkout btn
function woocommerce_button_proceed_to_checkout()
{

    $new_checkout_url = WC()->cart->get_checkout_url();
?>
    <a href="<?php echo $new_checkout_url; ?>" class="checkout-button button alt wc-forward">

        <?php _e('Check Out', 'woocommerce'); ?></a>

<?php
}
