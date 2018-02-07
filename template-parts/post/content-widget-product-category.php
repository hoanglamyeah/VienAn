<?php
/**
 * The template for displaying product widget entries
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see    https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

global $product; ?>
<div class="product column column-block">
    <div class="image">
        <div class="discount">
            <?php if ($product->is_on_sale()): ?>
                <div class="discount-number">
                    - <?php echo get_sale_percentage($product) ?>%
                </div>
            <?php endif; ?>
        </div>
        <a href="<?php echo esc_url(get_the_permalink()) ?>">
            <img src="<?php echo get_the_post_thumbnail_url($product->get_id(), 'shop_catalog') ?>" alt="">

        </a>
    </div>
    <div class="product-name">
        <a href="<?php echo esc_url(get_the_permalink()) ?>">
            <?php
            echo $product->get_title();
            ?>
        </a>
    </div>
    <?php if (empty($product->get_price())) : ?>
        <div class="price">
            Liên hệ
        </div>
    <?php else: ?>
        <div class="price number">
            <?php
            echo $product->get_price();
            ?>
        </div>
    <?php endif; ?>
</div>
