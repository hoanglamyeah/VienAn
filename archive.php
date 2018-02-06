<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <main>
        <div class="wrapper">
            <section class="row multi-post">
                <div class="category small-12">
                    <div class="category-left">
                        <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                    </div>
                </div>
                    <div class="row small-up-2 medium-up-3 large-up-4 small-12">
                        <?php
                        if ( have_posts() ) : ?>
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/post/content-featured', get_post_format() );

                            endwhile;

                        else :

                            get_template_part( 'template-parts/post/content-featured', 'none' );

                        endif; ?>
                    </div>
            </section>
        </div>
    </main>

<?php get_footer();
