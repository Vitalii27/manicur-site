<section class="section faq faq--vip">
<!--    <img class="img-br" src="--><?php //echo get_template_directory_uri() ?><!--/assets/images/border-img.png" alt="img">-->
<!--    <img class="img-bg img-pos1" src="--><?php //echo get_template_directory_uri() ?><!--/assets/images/bg-img3.png" alt="img">-->
<!--    <img class="img-bg img-pos3" src="--><?php //echo get_template_directory_uri() ?><!--/assets/images/bg-img2.png" alt="img">-->

    <?php if (get_field('faq_top-image')): ?>
        <img src="<?php the_field('faq_top-image') ?>" alt="img" class="faq_top">
    <?php endif; ?>
    <?php if (get_field('faq_bottom-image')): ?>
        <img src="<?php the_field('faq_bottom-image') ?>" alt="img" class="faq_bottom">
    <?php endif; ?>
    <div class="container-fluid">

            <h3 class="vip-title">часто задаваемые вопросы</h3>
<div class="faq--vip_columns">
    <?php if (have_rows('faq_list')): ?>
        <ul class="faq_list js-accordions">
            <?php while (have_rows('faq_list')): the_row(); ?>
                <li class="faq_item accordion ">
                    <div class="faq_item_content js-open-down">
                        <div class="faq_item_wrapp">
                            <div class="faq_item-icon"></div>
                            <?php if (get_sub_field('faq_list_title')): ?>
                                <span class="faq_triangle "><?php the_sub_field('faq_list_title'); ?></span>
                            <?php endif; ?>
                        </div>

                        <?php if (get_sub_field('faq_list_desc')): ?>
                            <div class="faq_acco_content accordion_content">
                                <?php the_sub_field('faq_list_desc'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    <?php if (have_rows('faq_list-right')): ?>
        <ul class="faq_list js-accordions">
            <?php while (have_rows('faq_list-right')): the_row(); ?>
                <li class="faq_item accordion ">
                    <div class="faq_item_content js-open-down">
                        <div class="faq_item_wrapp">
                            <div class="faq_item-icon"></div>
                            <?php if (get_sub_field('faq_list_title-right')): ?>
                                <span class="faq_triangle "><?php the_sub_field('faq_list_title-right'); ?></span>
                            <?php endif; ?>
                        </div>

                        <?php if (get_sub_field('faq_list_desc-right')): ?>
                            <div class="faq_acco_content accordion_content">
                                <?php the_sub_field('faq_list_desc-right'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>

    </div>
    <img class="bg-img-section1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img-section3.png" alt="img">
    <img class="bg-img-section2" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img-section4.png" alt="img">
</section>