<section class="contacts-section section shadow-text--super-light">
    <div class="container-fluid">
        <?php if (have_rows('contacts-section_list')): ?>
            <ul class="contacts-section_list ">
                <?php while (have_rows('contacts-section_list')): the_row(); ?>
                    <li class="contacts-section_item">
                        <?php if (get_sub_field('contacts-section_list-icon')): ?>
                            <div class="contacts-section_img-block">
                                <img src="<?php the_sub_field('contacts-section_list-icon') ?>"
                                     alt="<?php the_sub_field('contacts-section_list-iconalt') ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('contacts-section_list-title')): ?>
                            <h6 class="contacts-section_title"><?php the_sub_field('contacts-section_list-title') ?></h6>
                        <?php endif; ?>
                        <?php if (get_sub_field('contacts-section_list-desc')): ?>
                            <div class="contacts-section_desc">
                                <?php the_sub_field('contacts-section_list-desc') ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php if (get_field('contacts-section_list-desc_block')): ?>
            <div class="text-block">
                <div>Как добраться:</div>
                <?php the_field('contacts-section_list-desc_block') ?>
            </div>
        <?php endif; ?>
    </div>
    <img class="img-bg" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
</section>