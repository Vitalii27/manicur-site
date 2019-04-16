<section class="section photo-section">

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
        $block_per_page = 1; // How many images to display on each page
        $block = get_field('photo-page_wrap');
        $total = count($block);
        $pages = ceil($total / $block_per_page);
        $min = (($page * $block_per_page) - $block_per_page) + 1;
        $max = ($min + $block_per_page) - 1;

        // ACF Loop
        if (have_rows('photo-page_wrap'))  : ?>
            <div class="photo-section_wrap ">

                <?php while (have_rows('photo-page_wrap')): the_row();

                    $row++;

                    // Ignore this image if $row is lower than $min
                    if ($row < $min) {
                        continue;
                    }

                    // Stop loop completely if $row is higher than $max
                    if ($row > $max) {
                        break;
                    } ?>

                    <div class="photo-section_container">


                        <div class="photo-section_list">
                            <?php if (get_field('photo-section-title')): ?>
                                <div class="photo-section_title">
                                    <h4> <?php the_field('photo-section-title') ?></h4>
                                    <p> <?php the_field('photo-section-time') ?></p>
                                </div>
                            <?php endif; ?>
                            <div class="photo-section_item photo-section_item--top">
                                <?php if (have_rows('photo-top')): ?>
                                    <?php while (have_rows('photo-top')):
                                        the_row(); ?>
                                        <div class="photo-section_img-block js-pop-up-img">
                                            <a href="<?php the_sub_field('photo-top-img') ?>"
                                               class="photo-section_image ">
                                                <img src="<?php the_sub_field('photo-top-img') ?>"
                                                     alt="<?php the_sub_field('photo-top-alt') ?>">
                                                <span class="photo-section_plus"></span>
                                            </a>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>

                            <div class="photo-section_item photo-section_item--bottom">

                                <?php if (have_rows('photo-bottom')): ?>
                                    <?php while (have_rows('photo-bottom')):
                                        the_row(); ?>
                                        <div class="photo-section_img-block js-pop-up-img">
                                            <a href="<?php the_sub_field('photo-bottom-img') ?>"
                                               class="photo-section_image ">
                                                <img src="<?php the_sub_field('photo-bottom-img') ?>"
                                                     alt="<?php the_sub_field('photo-bottom-alt') ?>">
                                                <span class="photo-section_plus"></span>
                                            </a>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                            <?php if (get_field('link-to-course')): ?>
                                <div class="photo-section_btn photo-section_btn--mobile"><a href="<?php the_field('link-to-course') ?>"
                                                                  class="button">Подробнее о курсе</a></div>
                            <?php endif; ?>
                        </div>
                        <div class="photo-sidebar">
                            <?php if (get_field('link-to-course')): ?>
                                <div class="photo-section_btn"><a href="<?php the_field('link-to-course') ?>"
                                                                  class="button">Подробнее о курсе</a></div>
                            <?php endif; ?>
                            <div class="photo-sidebar-title">
                                Выберите курс <i class="animation-arrow fa fa-long-arrow-right" aria-hidden="true"></i>
                            </div>
                            <nav id="photo-menu" class="photo-menu ">
                                <?php
                                $args = array(
                                    'theme_location' => 'photo',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'menu_class' => 'photo-menu__list',

                                    'walker' => '',
                                    'container' => 'ul',

                                );
                                wp_nav_menu($args);

                                ?>
                                <!-- swipe-menu -->

                            </nav>
                        </div>
                    </div>
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
            </div>
        <?php else: ?>

            No images found

        <?php endif; ?>

    </div>


</section>