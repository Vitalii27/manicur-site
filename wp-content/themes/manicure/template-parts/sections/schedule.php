<section class="section schedule-section">
    <div class="container-fluid">
        <?php if (get_field('new-section-resny') == 'true'): ?>
            <div class="schedule-section_top-block">
                
                <h3 class="top-title vip-title"><p><strong>Учебный план</strong></p><p><strong>курса «Мастер-лешмейкер»</strong></p></h3>

            </div>

        <?php else : ?>
            <div class="schedule-section_top-block">
                <h3 class="top-title vip-title">Учебно-тематический план программы</h3>
                <?php if (get_field('shcedule_title')): ?>
                    <h3 class="title "><?php the_field('shcedule_title') ?></h3>
                <?php endif; ?>
                <?php if (get_field('shcedule_subtitle')): ?>
                    <h4 class="subtitle "><?php the_field('shcedule_subtitle') ?></h4>
                <?php endif; ?>
                <?php if (get_field('shcedule_desc-title')): ?>
                    <div class="schedule-section_desc ">
                        <?php the_field('shcedule_desc-title') ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('shcedule_list-home')): $count = 1; ?>
            <ul class="schedule-section_list ">
                <?php while (have_rows('shcedule_list-home')): the_row(); ?>
                    <?php if ($count % 2 != 0) { ?>
                        <li class="schedule-section_item  schedule-section_item--reverse">
                            <div class="schedule-section_item-left">
                                <?php if (get_sub_field('shcedule_list-title')): ?>
                                    <h5 class="schedule-section_item-title"><?php the_sub_field('shcedule_list-title') ?></h5>
                                <?php endif; ?>
                                <?php if (have_rows('shcedule_list-list')): ?>
                                    <ul>
                                        <?php while (have_rows('shcedule_list-list')): the_row(); ?>
                                            <?php if (get_sub_field('shcedule_list-list-text')): ?>
                                                <li><span><?php the_sub_field('shcedule_list-list-text') ?></span></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php if (get_sub_field('shcedule_list-img')): ?>
                                <div class="schedule-section_item-right">
                                    <div class="schedule-section-border"></div>
                                    <div class="schedule-section_item-img"
                                         style="background-image: url(<?php the_sub_field('shcedule_list-img') ?>)"></div>
                                </div>
                            <?php endif; ?>

                        </li>
                    <?php } else { ?>
                        <li class="schedule-section_item">
                            <div class="schedule-section_item-left">
                                <?php if (get_sub_field('shcedule_list-title')): ?>
                                    <h5 class="schedule-section_item-title"><?php the_sub_field('shcedule_list-title') ?></h5>
                                <?php endif; ?>
                                <?php if (have_rows('shcedule_list-list')): ?>
                                    <ul>
                                        <?php while (have_rows('shcedule_list-list')): the_row(); ?>
                                            <?php if (get_sub_field('shcedule_list-list-text')): ?>
                                                <li><span><?php the_sub_field('shcedule_list-list-text') ?></span></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php if (get_sub_field('shcedule_list-img')): ?>
                                <div class="schedule-section_item-right">
                                    <div class="schedule-section-border"></div>
                                    <div class="schedule-section_item-img"
                                         style="background-image: url(<?php the_sub_field('shcedule_list-img') ?>)"></div>
                                </div>
                            <?php endif; ?>


                        </li>
                    <?php } ?>
                    <?php $count++; ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <img class="img-bg img-bg--1" src="<?php echo get_template_directory_uri() ?>/assets/images/course-img1.png"
         alt="img">
    <img class="img-bg img-bg--2" src="<?php echo get_template_directory_uri() ?>/assets/images/course-img2.png"
         alt="img">
    <img class="img-bg img-bg--3" src="<?php echo get_template_directory_uri() ?>/assets/images/course-img3.png"
         alt="img">
    <img class="img-bg img-bg--4" src="<?php echo get_template_directory_uri() ?>/assets/images/course-img4.png"
         alt="img">
</section>