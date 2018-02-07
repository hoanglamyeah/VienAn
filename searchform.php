<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


$categories = get_all_categories();

$product_cat = get_query_var('product_cat', '');

?>

<?php $unique_id = esc_attr(uniqid('search-form-')); ?>
<div class="small-8 search-bar">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="input-group small-12">
        <span class="input-group-label">
                <select name="product_cat">
                    <option value="">Tất cả</option>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?php echo $cat->slug ?>" <?php if ($cat->slug == $product_cat) echo "selected" ?>><?php echo $cat->name ?></option>
                    <?php endforeach; ?>
                </select>
              </span>
            <input type="search" id="<?php echo $unique_id; ?>" class="input-group-field"
                   placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'twentyseventeen'); ?>"
                   value="<?php echo get_search_query(); ?>" name="s"/>
            <input type="hidden" name="post_type" value="product">
            <div class="input-group-button">
                <input type="submit" class="button" value="Tìm Kiếm">
            </div>
        </div>
    </form>
</div>