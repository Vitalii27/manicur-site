<section class="section review-section">

    <div class="container-fluid">
        <?php

        if( have_rows( 'review-page_list' ) )  : $counter = 0; ?>
        <ul class="review-section_list ">
            <?php while( have_rows( 'review-page_list' ) ): the_row(); ?>

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

            ?>
        </ul>

        <?php endif; ?>

    </div>

</section>