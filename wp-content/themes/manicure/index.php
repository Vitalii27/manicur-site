<?php
/**
 *
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header();
?>


    <section class="section blog-page">

        <div class="container-fluid">
            <div class="blog-page_container">
                <div class="blog-page_left">
                    <?php
                    if (have_posts()) :
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();


                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part('template-parts/content', get_post_format());

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part('template-parts/content', 'none');

                    endif;
                    ?>
                </div>
                <div class="blog-page_sidebar-wrap">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>



    </section>
<?php the_posts_pagination(); ?>
<?php if (get_field('text-section', get_option('page_for_posts'))): ?>
    <section class="section text">
        <div class="container-fluid">

            <div class="text_content">
                <?php the_field('text-section', get_option('page_for_posts')) ?>
            </div>
        </div>
    </section>

<?php endif; ?>


<?php

get_footer(); ?>
