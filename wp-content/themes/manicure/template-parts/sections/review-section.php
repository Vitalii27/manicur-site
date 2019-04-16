<section class="section review-section">

    <div class="container-fluid">
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
        $block_per_page  = 4; // How many images to display on each page
        $block           = get_field( 'review-page_list' );
        $total            = count( $block );
        $pages            = ceil( $total / $block_per_page );
        $min              = ( ( $page * $block_per_page ) - $block_per_page ) + 1;
        $max              = ( $min + $block_per_page ) - 1;

        // ACF Loop
        if( have_rows( 'review-page_list' ) )  : $counter = 0; ?>
        <ul class="review-section_list ">
            <?php while( have_rows( 'review-page_list' ) ): the_row();

                $row++;

                // Ignore this image if $row is lower than $min
                if($row < $min) { continue; }

                // Stop loop completely if $row is higher than $max
                if($row > $max) { break; } ?>

                <?php if ($counter % 2 == 0) { ?>
                    <li class="review-section_item">
                <?php } else { ?>
                    <li class="review-section_item review-section_item--reverse">
                <?php } ?>
                <?php if (get_sub_field('review-page_list-img')): ?>
                    <div class="review-section_img-block">
                        <img class="review-section_img-abs" src="<?php echo get_template_directory_uri() ?>/assets/images/scop.png" alt="img">
                        <img class="review-section_avatar" src="<?php the_sub_field('review-page_list-img') ?>"
                             alt="<?php the_sub_field('review-page_list-alt') ?>">
                    </div>
                <?php endif; ?>
                <div class="review-section_text">
                    <?php if (get_sub_field('review-page_list-name')): ?>
                        <h4 class="review-section_title"><?php the_sub_field('review-page_list-name') ?></h4>
                    <?php endif; ?>
                    <?php if (get_sub_field('review-page_list-work')): ?>
                        <h5 class="review-section_work"><?php the_sub_field('review-page_list-work') ?></h5>
                    <?php endif; ?>
                    <?php if (get_sub_field('review-page_list-desc')): ?>
                        <div class="review-section_desc">
                            <?php the_sub_field('review-page_list-desc') ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_sub_field('review-page_list-exit')): ?>
                        <div class="review-section_exit"><?php the_sub_field('review-page_list-exit') ?></div>
                    <?php endif; ?>
                </div>
                </li>
                <?php $counter++; ?>
            <?php endwhile;

            // Pagination
            echo paginate_links(array(
                'base' => get_permalink() . '%#%' . '/',
                'format' => '?page=%#%',
                'current' => $page,
                'total' => $pages,
                'prev_text' => '',
                'next_text' => '',
                'prev_next'    => true,
                'type' => 'list'
            ));
            ?>
        </ul>
        <?php else: ?>

            No images found

        <?php endif; ?>

    </div>

</section>