<section class="section all-courses shadow-text--super-light" >
    <div class="container-fluid">
        <?php if (get_field('all_courses_block-text')): ?>
            <div class="text-block">
                <div class="quotes">"</div>
                <?php the_field('all_courses_block-text') ?>
            </div>
        <?php endif; ?>


        <?php
        /*
         * Paginate Advanced Custom Field repeater
         */

        if( get_query_var('page') ) {
            $page = get_query_var( 'page' );
        } else {
            $page = 1;
        }

        // Variables
        $row              = 0;
        $block_per_page  = 6; // How many images to display on each page
        $block           = get_field( 'all_courses_list' );
        $total            = count( $block );
        $pages            = ceil( $total / $block_per_page );
        $min              = ( ( $page * $block_per_page ) - $block_per_page ) + 1;
        $max              = ( $min + $block_per_page ) - 1;

        // ACF Loop
        if( have_rows( 'all_courses_list' ) )  : $counter = 0; ?>
            <ul class="review-section_list shadow-text--super-light">
                <?php while( have_rows( 'all_courses_list' ) ): the_row();

                    $row++;

                    // Ignore this image if $row is lower than $min
                    if($row < $min) { continue; }

                    // Stop loop completely if $row is higher than $max
                    if($row > $max) { break; } ?>
                    <?php get_template_part('./template-parts/blocks/course-page'); ?>

                <?php endwhile;

                // Pagination
                echo paginate_links( array(
                    'base' => get_permalink() . '%#%' . '/',
                    'format' => '?page=%#%',
                    'current' => $page,
                    'total' => $pages,
                    'prev_text'    => '',
                    'next_text'    => '',
                ) );
                ?>
            </ul>
        <?php else: ?>

            No images found

        <?php endif; ?>


<!--        --><?php //if (have_rows('all_courses_list')): ?>
<!--            <div class="all-courses_list">-->
<!--                --><?php //while (have_rows('all_courses_list')): the_row(); ?>
<!---->
<!---->
<!---->
<!---->
<!---->
<!--                    --><?php //get_template_part('./template-parts/blocks/course-page'); ?>
<!--                --><?php //endwhile; ?>
<!--            </div>-->
<!--        --><?php //endif; ?>
    </div>
    <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
    <img class="img-bg img-pos2" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
    <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
</section>