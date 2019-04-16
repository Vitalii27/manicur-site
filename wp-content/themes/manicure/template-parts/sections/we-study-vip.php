<section class="section we-study-vip">
    <div class="container-fluid">
        <h3 class="vip-title">мы реально учим!</h3>
        <?php if (have_rows('we-realy-study-vip-list')): $count = 0; ?>
            <ul class="we-study-vip_list">
                <?php while (have_rows('we-realy-study-vip-list')): the_row(); ?>
                    <?php if ($count % 2) { ?>
                        <li class="we-study-vip_item we-study-vip_item--reverse">
                    <?php } else { ?>
                        <li class="we-study-vip_item">
                    <?php } ?>
                    <?php if (get_sub_field('we-realy-study-vip-img')): ?>
                        <div class="we-study-vip_img-block">
                            <img src="<?php the_sub_field('we-realy-study-vip-img'); ?>" alt="img">
                        </div>
                    <?php endif; ?>
                    <div class="we-study-vip_content">
                        <?php if (get_sub_field('we-realy-study-vip-first-block')): ?>
                            <div class="we-study-vip_first-block">
                                <?php the_sub_field('we-realy-study-vip-first-block'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="vip-teachers_border"></div>
                        <?php if (get_sub_field('we-realy-study-vip-second-block')): ?>

                            <div class="we-study-vip_first-block">
                                <?php the_sub_field('we-realy-study-vip-second-block'); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if (get_sub_field('we-realy-study-bg-img')): ?>
                        <img src="   <?php the_sub_field('we-realy-study-bg-img'); ?>" alt="img"
                             class="we-realy-study-bg-img">
                    <?php endif; ?>
                    </li>
                    <?php $count++; ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>