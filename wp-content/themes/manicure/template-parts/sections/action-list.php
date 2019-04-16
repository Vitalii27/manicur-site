<section class="section action-page">

    <div class="container-fluid">
        <?php
        /*
         * Paginate Advanced Custom Field repeater
         */

        if (get_query_var('page')) {
            $page = get_query_var('page');
        } else {
            $page = 1;
        }

        // Variables
        $row = 0;
        $block_per_page = 4; // How many images to display on each page
        $block = get_field('action-page_list');
        $total = count($block);
        $pages = ceil($total / $block_per_page);
        $min = (($page * $block_per_page) - $block_per_page) + 1;
        $max = ($min + $block_per_page) - 1;

        // ACF Loop
        if (have_rows('action-page_list'))  : $counter = 0; ?>
            <ul class="action-list">
                <?php while (have_rows('action-page_list')): the_row();

                    $row++;

                    // Ignore this image if $row is lower than $min
                    if ($row < $min) {
                        continue;
                    }

                    // Stop loop completely if $row is higher than $max
                    if ($row > $max) {
                        break;
                    } ?>

                    <li class="action-item">
                        <?php if (get_sub_field('action-page_img')): ?>
                            <div class="action-img">
                                <img src="<?php the_sub_field('action-page_img') ?>"
                                     alt="<?php the_sub_field('action-page_alt') ?>">
                            </div>
                        <?php endif; ?>
                        <div class="action-content">
                            <?php if (get_sub_field('action-page_title')): ?>
                                <h3 class="action-page_title">
                                    <?php the_sub_field('action-page_title') ?>
                                </h3>
                            <?php endif; ?>
                            <?php if (get_sub_field('action-page_subtitle')): ?>
                                <h5 class="action-page_subtitle">
                                    <?php the_sub_field('action-page_subtitle') ?>
                                </h5>
                            <?php endif; ?>
                            <div class="action-page_desc">
                            <?php the_sub_field('action-page_desc') ?>
                            </div>
                            <?php if (get_sub_field('action-page_link')): ?>
                                <div class="new-btn">
                                    <a href="<?php the_sub_field('action-page_link') ?>"
                                       >
                                        <?php the_sub_field('action-page_btn-text') ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
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