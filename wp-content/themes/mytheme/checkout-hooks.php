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

<<<<<<< HEAD
=======
add_filter('woocommerce_checkout_fields', 'remove_billing_address_2_field');

function remove_billing_address_2_field($fields) {
    // Kontrollera om faktureringsadressen har ett andra radfält
    if (isset($fields['billing']['billing_address_2'])) {
        // Ta bort faktureringsadressens andra radfält
        unset($fields['billing']['billing_address_2']);
    }
    return $fields;
}

>>>>>>> checkout
