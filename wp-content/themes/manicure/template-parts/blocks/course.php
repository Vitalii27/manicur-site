<div class="course">
    <div class="course-left">
        <div class="course-img_block">
            <?php if (get_field('hero_course_img')): ?>
                <img src="<?php the_field('hero_course_img') ?>" >
            <?php endif; ?>
        </div>

        <?php if (get_field('hero_course_img')): ?>
            <div class="course_btn ">
                <a href="<?php the_field('hero_course_link') ?>" class="button">Подробнее</a>
            </div>
        <?php endif; ?>
    </div>
    <div class="course-right shadow-text--super-light">
        <?php if (get_field('hero_course_title')): ?>
            <h5 class="course_title"><?php the_field('hero_course_title') ?></h5>
        <?php endif; ?>
        <?php the_field('hero_course_desc') ?>
        <div class="course_icon">
            <?php if (get_field('hero_course_time-text')): ?>
                <div class="course_block">

                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/652.png" alt="img">

                    <?php the_field('hero_course_time-text') ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('hero_course_price-text')): ?>
                <div class="course_block">

                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/68998.png" alt="img">

                    <?php the_field('hero_course_price-text') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>