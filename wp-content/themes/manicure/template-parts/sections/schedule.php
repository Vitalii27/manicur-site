<section class="section schedule-section">
    <div class="container-fluid">
        <div class="schedule-section_top-block">
            <?php if (get_field('shcedule_title')): ?>
                <h3 class="title shadow-text--light"><?php the_field('shcedule_title') ?></h3>
            <?php endif; ?>
            <?php if (get_field('shcedule_subtitle')): ?>
                <h4 class="subtitle shadow-text--light"><?php the_field('shcedule_subtitle') ?></h4>
            <?php endif; ?>
            <?php if (get_field('shcedule_desc-title')): ?>
                <div class="schedule-section_desc shadow-text--super-light">
                    <?php the_field('shcedule_desc-title') ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if (have_rows('shcedule_list-home')): $count = 1; ?>
            <ul class="schedule-section_list shadow-text--super-light">
                <?php while (have_rows('shcedule_list-home')): the_row(); ?>
                    <?php if ($count%2 != 0) { ?>
                        <li class="schedule-section_item">
                            <div class="schedule-section_item-left">
                                <?php if (get_sub_field('shcedule_list-title')): ?>
                                    <h5 class="schedule-section_item-title"><?php the_sub_field('shcedule_list-title') ?></h5>
                                <?php endif; ?>
                                <?php if (have_rows('shcedule_list-list')): ?>
                                    <ul>
                                        <?php while (have_rows('shcedule_list-list')): the_row(); ?>
                                            <?php if (get_sub_field('shcedule_list-list-text')): ?>
                                                <li><?php the_sub_field('shcedule_list-list-text') ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php if (get_sub_field('shcedule_list-img')): ?>
                                <div class="schedule-section_item-right">
                                    <img src="<?php the_sub_field('shcedule_list-img') ?>" alt="<?php the_sub_field('shcedule_list-img-alt') ?>">
                                </div>
                            <?php endif; ?>
                                <img class="img-bg" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
                        </li>
                    <?php } else { ?>
                        <li class="schedule-section_item schedule-section_item--reverse">
                            <div class="schedule-section_item-left">
                                <?php if (get_sub_field('shcedule_list-title')): ?>
                                    <h5 class="schedule-section_item-title"><?php the_sub_field('shcedule_list-title') ?></h5>
                                <?php endif; ?>
                                <?php if (have_rows('shcedule_list-list')): ?>
                                    <ul>
                                        <?php while (have_rows('shcedule_list-list')): the_row(); ?>
                                            <?php if (get_sub_field('shcedule_list-list-text')): ?>
                                                <li><?php the_sub_field('shcedule_list-list-text') ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php if (get_sub_field('shcedule_list-img')): ?>
                                <div class="schedule-section_item-right">
                                    <img src="<?php the_sub_field('shcedule_list-img') ?>" alt="img">
                                </div>
                            <?php endif; ?>
                                <img class="img-bg" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">

                        </li>
                    <?php } ?>
                    <?php $count++; ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>