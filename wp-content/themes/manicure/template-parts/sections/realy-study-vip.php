<?php $action = get_option('action2'); ?>
<section class="section program realy-study realy-study--vip">
    <div class="container-fluid">
        <div class="program_content">

            <?php if (have_rows('realy-list')): ?>
                <ul class="program_list">
                    <?php while (have_rows('realy-list')): the_row(); ?>

                        <li class="program_item shadow-text--super-light">
                            <?php if (get_sub_field('realy-bg')): ?>
                                <div class="program_img"
                                     style="background-image: url(<?php the_sub_field('realy-bg'); ?>)">
                                    <div class="program_img-name"><?php the_sub_field('program_img-name'); ?></div>

                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('realy-list-title')): ?>
                                <div class="program_text">
                                    <div class="program_text-bold"><?php the_sub_field('realy-list-title'); ?></div>
                                    <?php the_sub_field('realy-list-desc'); ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <?php if (!empty($action['action-form'])) {
            ?>
            <div class="action_form">
                <?php echo do_shortcode($action['action-form']); ?>
            </div>
        <?php } ?>
    </div>
</section>