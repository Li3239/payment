<?php
//Tar bort kupong-meddelandet
function remove_coupon_message() {
    remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
}
add_action( 'init', 'remove_coupon_message' );



add_filter('woocommerce_checkout_heading', 'remove_order_review_heading');

function remove_order_review_heading() {
    return '';
}

