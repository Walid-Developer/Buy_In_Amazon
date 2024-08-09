<?php
/*
Plugin Name: Buy In Amazon Custom
Description: Buy In Amazon Custom. Sharmin PHP Developer And Walid
Version: 1.0
Author: Sharmin PHP Developer ANd Walid
*/

// Define constants
define('MY_PLUGIN_DIR', plugin_dir_path(__FILE__));

function custom_product_extra_button($product_id) {
	global $product;
    $product_id = $product->get_id();
    $button_url = get_post_meta($product_id, "buy_in_amazon", true);
   if($button_url){
   	

   // Output your custom button HTML here
   ?>
      <style>
        .woocommerce-variation-add-to-cart.variations_button.woocommerce-variation-add-to-cart-disabled {
        display: flex;
        align-items: center;
    }

    a.extra-button-class {
        margin-left: 12px;
        margin-bottom: 15px;
        background: #7abde7;
        padding: 3px 20px;
        color: #FFFF;
    }
   </style>
    <a href="<?=esc_url($button_url)?>" class="extra-button-class">Buy In Amazon</a>
    <?php
       }
}
add_action('woocommerce_after_add_to_cart_button', 'custom_product_extra_button', 10);
