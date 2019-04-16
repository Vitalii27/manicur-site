<div class="section section schedule">
    <div class="container-fluid">
        <h3 class="vip-title">
            удобный график обучения
        </h3>
        <?php if (have_rows('schedule_list')): ?>
            <ul class="schedule_list">
                <?php while (have_rows('schedule_list')): the_row(); ?>
                    <li class="schedule_item">
                        <?php if (get_sub_field('schedule_item-title')): ?>
                            <div class="schedule_item-top">
                                <div class="schedule_item-content">
                                    <div class="schedule_item-title"><?php the_sub_field('schedule_item-title'); ?>
                                    </div>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('schedule_item-desc')): ?>
                            <div class="schedule_item-bottom">
                                <?php if (get_sub_field('schedule_item-icon')): ?>
                                    <div class="schedule_item-icon">
                                        <img src="<?php the_sub_field('schedule_item-icon'); ?>" alt="icon"
                                             class="schedule_item-img">
                                    </div>
                                <?php endif; ?>
                                <div class="schedule_table">
                                    <?php the_sub_field('schedule_item-desc'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>