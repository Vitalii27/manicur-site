<section class="section teachers-vip all-courses shadow-text--super-light">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
    <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
    <div class="container-fluid">

            <h3 class="title shadow-text--light">Наши преподаватели</h3>

        <?php if (have_rows('teachers-list-vip')): ?>
            <ul class="review-section_list shadow-text--super-light">
                <?php while (have_rows('teachers-list-vip')): the_row(); ?>
                    <div class="course course--page">
                        <div class="course-left">
                            <?php if (get_sub_field('teacher-bg-vip')): ?>
                            <div class="course-img_block">
                                <img src="<?php the_sub_field('teacher-bg-vip'); ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="course-right shadow-text--super-light">
                            <?php the_sub_field('teacher-desc-vip'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>