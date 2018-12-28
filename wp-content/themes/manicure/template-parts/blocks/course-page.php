<div class="course course--page">
    <div class="course-left">
        <div class="course-img_block">
            <?php if (get_sub_field('all-courses_img')): ?>
                <img src="<?php the_sub_field('all-courses_img') ?>" >
            <?php endif; ?>
        </div>

    </div>
    <div class="course-right shadow-text--super-light">
        <?php if (get_sub_field('all-courses_title')): ?>
            <h5 class="course_title"><?php the_sub_field('all-courses_title') ?></h5>
        <?php endif; ?>
        <?php the_sub_field('all-courses_desc') ?>
        <div class="course_icon">
            <?php if (get_sub_field('all-courses_time')): ?>
                <div class="course_block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/652.png" alt="img">
                    <?php the_sub_field('all-courses_time') ?>
                </div>
            <?php endif; ?>
            <?php if (get_sub_field('all-courses_icon-price-text')): ?>
                <div class="course_block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/68998.png" alt="img">
                    <?php the_sub_field('all-courses_icon-price-text') ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if (get_sub_field('all-courses_link')): ?>
            <div class="course_btn ">
                <a href="<?php the_sub_field('all-courses_link') ?>" class="button">Подробнее</a>
            </div>
        <?php endif; ?>
    </div>
</div>