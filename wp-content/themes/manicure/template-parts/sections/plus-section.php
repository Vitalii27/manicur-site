<section class="setion plus-section">
    <div class="container-fluid">
        <h3 class="title vip-title">Плюсы обучения</h3>
        <h4 class="subtitle">маникюру и педикюру в нашей школе</h4>

        <?php if (have_rows('plus-section-list')): ?>
            <ul class="plus-section_list ">
                <?php while (have_rows('plus-section-list')): the_row(); ?>
                    <li class="plus-section_item">
                        <div class="plus-section_top">
                            <?php if (get_sub_field('plus-section-list-num')): ?>
                                <div class="plus-section_num">
                                    <span><?php the_sub_field('plus-section-list-num') ?></span></div>
                            <?php endif; ?>
                            <?php if (get_sub_field('plus-section-list-img')): ?>
                                <div class="plus-section_img"
                                     style="background-image: url(<?php the_sub_field('plus-section-list-img') ?>)">
                                    <!--                                    <img src="-->
                                    <?php //the_sub_field('plus-section-list-img') ?><!--"-->
                                    <!--                                         alt="-->
                                    <?php //the_sub_field('plus-section-list-img-alt') ?><!--">-->
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="plus-section_text">
                            <?php if (get_sub_field('plus-section-list-title')): ?>
                                <h4 class="plus-section_title"><?php the_sub_field('plus-section-list-title') ?></h4>
                            <?php endif; ?>
                            <div class="vip-teachers_border">

                            </div>
                            <?php if (get_sub_field('plus-section-list-desc')): ?>
                                <div class="plus-section_desc">
                                    <?php the_sub_field('plus-section-list-desc') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <img class="img-bg2" src="<?php echo get_template_directory_uri() ?>/assets/images/foot2.png" alt="img">
</section>
<img class="img-bg" src="<?php echo get_template_directory_uri() ?>/assets/images/foot1.png" alt="img">
