<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

        <section class="post row">
            <div class="small-12 medium-9">
<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">

		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>

	</div><!-- .summary -->

	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>
            </div>
            <div id="product-sidebar" class="small-12 medium-3 sidebar">
                <div class="widget product-menu">
                    <span class="shop-sidebar">DANH MỤC SẢN PHẨM</span>
                    <ul class="vertical menu accordion-menu" data-accordion-menu>

                        <?php
                        /* Get all categories of woocommerce for making side-bar */
                        $taxonomy = 'product_cat';
                        $orderby = 'name';
                        $show_count = 0;      // 1 for yes, 0 for no
                        $pad_counts = 0;      // 1 for yes, 0 for no
                        $hierarchical = 1;      // 1 for yes, 0 for no
                        $title = '';
                        $empty = 0;

                        $args = array(
                            'taxonomy' => $taxonomy,
                            'orderby' => $orderby,
                            'show_count' => $show_count,
                            'pad_counts' => $pad_counts,
                            'hierarchical' => $hierarchical,
                            'title_li' => $title,
                            'hide_empty' => $empty
                        );
                        $all_categories = get_categories($args);
                        foreach ($all_categories as $cat) {
                            if ($cat->category_parent == 0) {
                                $category_id = $cat->term_id;
                                echo '<li><a href="' . get_term_link($cat->slug, 'product_cat') . '">' . $cat->name . '</a><ul class="menu vertical nested">';

                                $args2 = array(
                                    'taxonomy' => $taxonomy,
                                    'child_of' => 0,
                                    'parent' => $category_id,
                                    'orderby' => $orderby,
                                    'show_count' => $show_count,
                                    'pad_counts' => $pad_counts,
                                    'hierarchical' => $hierarchical,
                                    'title_li' => $title,
                                    'hide_empty' => $empty
                                );
                                $sub_cats = get_categories($args2);
                                if ($sub_cats) {
                                    foreach ($sub_cats as $sub_category) {
                                        echo '<li><a href="' . get_term_link($sub_category, 'product_cat') . '">' . $sub_category->name . '</a></li>';
                                    }
                                }
                                echo '</ul></li>';
                            }
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </section>
    </div>
</div><!-- #product-<?php the_ID(); ?> -->
</main>

<?php do_action( 'woocommerce_after_single_product' ); ?>
