<?php



function get_subcategories($parent) {
    $terms = get_terms(array(
        'taxonomy' => 'product_cat',
        'parent' => $parent
    ));
    foreach ($terms as $term){
        $sub_cat = get_subcategories($term->term_id);
        $term->sub_categories = $sub_cat;
    }
    return $terms;
}

function get_all_categories($slug = '') {
    $terms = get_terms(array(
        'taxonomy' => 'product_cat',
        'slug' => $slug,
    ));
    return $terms;
}


function get_sale_percentage($product) {
    return round( ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100 );
}