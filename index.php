<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <main id="homepage">
        <div class="wrapper">
            <section class="body-top row small-12">
                <div class="small-12 column column-block row">
                    <div class="row">
                        <div class="small-9 column column-block banner">
                            <img src="https://picsum.photos/773/365"/>
                        </div>
                        <div class="small-3 column column-block banner">
                            <img src="https://picsum.photos/255/370"/>
                        </div>
                    </div>
                </div>
            </section>

            <?php if (is_active_sidebar('sidebar-home-1')) : ?>
                <?php dynamic_sidebar('sidebar-home-1'); ?>
            <?php endif; ?>

            <?php if (is_active_sidebar('sidebar-home-2')) : ?>
                <?php dynamic_sidebar('sidebar-home-2'); ?>
            <?php endif; ?>

            <?php if (is_active_sidebar('sidebar-home-3')) : ?>
                <?php dynamic_sidebar('sidebar-home-3'); ?>
            <?php endif; ?>

            <?php if (is_active_sidebar('sidebar-home-4')) : ?>
                <?php dynamic_sidebar('sidebar-home-4'); ?>
            <?php endif; ?>

            <?php if (is_active_sidebar('sidebar-home-5')) : ?>
                <?php dynamic_sidebar('sidebar-home-5'); ?>
            <?php endif; ?>

            <?php if (is_active_sidebar('sidebar-home-6')) : ?>
                <?php dynamic_sidebar('sidebar-home-6'); ?>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer();
