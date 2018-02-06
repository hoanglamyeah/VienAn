<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<article id="post-<?php the_ID(); ?>" class="product column column-block large-3">
    <div class="image">
        <div class="discount">
            <div class="discount-number">- 13%</div>
        </div>
        <a href="">
            <img src="https://picsum.photos/300/300" alt="">
        </a>
    </div>
    <div class="product-name">
        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    </div>
    <div class="price">Liên hệ</div>
</article>
