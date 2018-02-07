<?php
//get product attributes
function woocommerce_custom_output_addtinonal_information()
{
    global $product;
    $attributes = $product->get_attributes();
    echo ' <table class="shop_attributes"><ul>';
    foreach ($attributes as $attribute) {
        echo '<tr><th>' . wc_attribute_label($attribute->get_name())
            . ':</th>';
        echo '<td>';
        $values = array();

        if ($attribute->is_taxonomy()) {
            $attribute_taxonomy = $attribute->get_taxonomy_object();
            $attribute_values = wc_get_product_terms($product->get_id(), $attribute->get_name(), array('fields' => 'all'));

            foreach ($attribute_values as $attribute_value) {
                $value_name = esc_html($attribute_value->name);

                if ($attribute_taxonomy->attribute_public) {
                    $values[] = '<a href="' . esc_url(get_term_link($attribute_value->term_id, $attribute->get_name())) . '" rel="tag">' . $value_name . '</a>';
                } else {
                    $values[] = $value_name;
                }
            }
        } else {
            $values = $attribute->get_options();

            foreach ($values as &$value) {
                $value = make_clickable(esc_html($value));
            }
        }

        echo apply_filters('woocommerce_attribute', wpautop(wptexturize(implode(', ', $values))), $attribute, $values);
        echo '</td></tr>';
    }
    echo '</table>';
}

add_action('woocommerce_single_product_summary', 'woocommerce_custom_output_addtinonal_information', 5);

//remove additional information tab
function woo_remove_product_tabs($tabs)
{
    unset($tabs['additional_information']);    // Remove the additional information tab
    return $tabs;
}

add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

?>