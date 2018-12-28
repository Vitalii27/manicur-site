<?php if (have_rows('course-list')): ?>
    <section class="section hero-courses">
        <div class="container-fluid">
            <?php if (get_field('all_courses_block-text')): ?>
                <div class="text-block">
                    <div class="quotes">"</div>
                    <?php the_field('all_courses_block-text') ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('section-hero-courses-title')): ?>
                <h3 class="title shadow-text--light"><?php the_field('section-hero-courses-title') ?></h3>
            <?php endif; ?>
            <?php get_template_part('./template-parts/blocks/course'); ?>
            <div class="virtical-course">

                <ul class="course_list">
                    <?php while (have_rows('course-list')): the_row(); ?>
                        <li class="course_item shadow-text--super-light">
                            <a href="<?php the_sub_field('course-list-link') ?>">
                                <?php if (get_sub_field('course-list-img')): ?>
                                    <div class="course_item-img-block">
                                        <img src="<?php the_sub_field('course-list-img') ?>" alt="img"
                                             class="course_item-img">
                                    </div>

                                <?php endif; ?>
                                <?php if (get_sub_field('course-list-title')): ?>
                                    <div class="course_title">  <?php the_sub_field('course-list-title') ?></div>
                                <?php endif; ?>
                                <div class="course_desc">
                                    <?php the_sub_field('course-list-desc') ?>
                                </div>

                                <div class="course_icon">
                                    <?php if (get_sub_field('course-list-desc-text')): ?>
                                        <div class="course_block">
                                            <!--                                            --><?php //if (get_sub_field('course-list-desc-tile')): ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/652.png"
                                                 alt="img">
                                            <!--                                            --><?php //endif; ?>
                                            <?php the_sub_field('course-list-desc-text') ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('course-list-price-text')): ?>
                                        <div class="course_block">
                                            <!--                                            --><?php //if (get_sub_field('course-list-price-img')): ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/68998.png"
                                                 alt="img">
                                            <!--                                            --><?php //endif; ?>
                                            <?php the_sub_field('course-list-price-text') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <!--                            --><?php //if (get_sub_field('course-list-link')): ?>
                            <div class="course-list_btn ">
                                <a href="<?php the_sub_field('course-list-link') ?>" class="button">Подробнее</a>
                            </div>

                            <!--                            --><?php //endif; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>

            </div>
        </div>
        <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img1.png"
             alt="img">
        <img class="img-bg img-pos2" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png"
             alt="img">
        <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png"
             alt="img">
    </section>
<?php endif; ?>