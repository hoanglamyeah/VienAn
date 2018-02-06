<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="small-12 subscribe">
    <div class="wrapper grid-x">
        <div class="large-auto cell">
            <h4 class="title">ĐĂNG KÝ NHẬN BẢN TIN VÀ NHIỀU TÀI LIỆU BỔ ÍCH</h4>
        </div>
        <div class="large-auto cell">
            <div class="medium-12 input-group">
                <input class="input-group-field" type="text">
                <div class="input-group-button">
                    <input type="submit" class="button" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <?php
    if ( is_active_sidebar( 'sidebar-footer-1' ) ||
        is_active_sidebar( 'sidebar-footer-2' ) ) :
        ?>

        <div class="wrapper">
            <div class="grid-x">
                <?php
                if ( is_active_sidebar( 'sidebar-footer-1' ) ) { ?>
                    <div class="large-auto cell footer-widget">
                        <?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
                    </div>
                <?php }
                if ( is_active_sidebar( 'sidebar-footer-2' ) ) { ?>
                    <div class="large-auto cell footer-widget">
                        <?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
                    </div>
                <?php } ?>
                <?php
                if ( is_active_sidebar( 'sidebar-footer-3' ) ) { ?>
                    <div class="large-auto cell footer-widget">
                        <?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
                    </div>
                <?php } ?>
                <?php
                if ( is_active_sidebar( 'sidebar-footer-4' ) ) { ?>
                    <div class="large-auto cell footer-widget">
                        <?php dynamic_sidebar( 'sidebar-footer-4' ); ?>
                    </div>
                <?php } ?>
            </div>
        </div>

    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
