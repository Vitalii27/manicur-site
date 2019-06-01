<div class="course">
    <div class="course-container">
        <div class="course-left ">
            <div class="course-img_block">
                <?php if (get_field('hero_course_img')): ?>
                    <div>
                        <div class="schedule-section-border"></div>
                        <div class="schedule-section_item-img"
                             style="background-image: url(<?php the_field('hero_course_img') ?>)"></div>
                    </div>
                <?php endif; ?>
            </div>
            <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/course-bubs.png"
                 alt="img">
        </div>
        <div class="course-right">
            <?php if (get_field('hero_course_title')): ?>
                <h5 class="course_title"><?php the_field('hero_course_title') ?></h5>
            <?php endif; ?>
            <div class="vip-teachers_border">

            </div>
            <?php the_field('hero_course_desc') ?>

            <div class="course_icon border-trap">
                <div class="course-icons">
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
            <?php if (get_field('hero_course_img')): ?>
                <div class="new-btn">
                    <a href="<?php the_field('hero_course_link') ?>">
                        Подробнее</a>
                </div>

            <?php endif; ?>

        </div>
    </div>
    <div class="course-vip-desc">
        <h3>Количество часов обучения</h3>
        <div class="course-vip-list">
            <div class="course-vip-list-wrap">
                <div class="course-vip-item">
                    <div class="course-vip-item-title">Маникюр и педикюр</div>
                    <span>50 часов</span>
                </div>
                <div class="course-vip-item">
                    <div class="course-vip-item-title">Аппаратные технологии</div>
                    <span>20 часов</span>
                </div>
                <div class="course-vip-item">
                    <div class="course-vip-item-title">Заболевания ногтей</div>
                    <span>7 часов </span>
                </div>
            </div>
            <div class="course-vip-list-wrap">
                <div class="course-vip-item">
                    <div class="course-vip-item-title">Наращивание ногтей</div>
                    <span>25 часов</span>
                </div>
                <div class="course-vip-item">
                    <div class="course-vip-item-title">SPA-процедуры</div>
                    <span>8 часов</span>
                </div>
                <div class="course-vip-item">
                    <div class="course-vip-item-title">Дезинфекция и подготовка
                        рабочего места
                    </div>
                    <span>6 часов </span>
                </div>
            </div>
            <div class="course-vip-list-wrap">
                <div class="course-vip-item">
                    <div class="course-vip-item-title">Покрытие ногтей</div>
                    <span>20 часов</span>
                </div>
                <div class="course-vip-item">
                    <div class="course-vip-item-title">Дизайн ногтей</div>
                    <span>20 часов</span>
                </div>
            </div>
        </div>
    </div>

</div>