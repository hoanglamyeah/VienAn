<?php
add_filter('woocommerce_single_product_summary', 'woo_rename_tabs', 70);

function woo_rename_tabs($tabs)
{

    global $product;

    if ($product->has_attributes() || $product->has_dimensions() || $product->has_weight()) { // Check if product has attributes, dimensions or weight
        $tabs = array(
            'additional_information' => array(
                'priority'=>'Quynh Data'
            )
        );
//        $tabs['additional_information']['title'] = __('Quynh DATA');
    }
    return $tabs;

}

?>