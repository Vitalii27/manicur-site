<section class="section advantages-home">
    <div class="container-fluid">
        <?php if (get_field('advantages-home_title')): ?>
            <h3 class="title shadow-text--light"><?php the_field('advantages-home_title') ?></h3>
        <?php endif; ?>
        <div class="advantages-home_blocks">


            <div class="advantages-home_left">
                <?php if (get_field('advantages-img1')): ?>
                <div class="advantages-home_top" style="background-image: url(<?php the_field('advantages-img1') ?>)">
                    <?php endif; ?>
                </div>
                <div class="advantages-home_bottom">
                    <?php if (get_field('advantages-img2')): ?>
                        <div style="background-image: url(<?php the_field('advantages-img2') ?>)"></div>
                    <?php endif; ?>
                    <?php if (get_field('advantages-img3')): ?>
                        <div style="background-image: url(<?php the_field('advantages-img3') ?>)"></div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (have_rows('advantages-home_list')): ?>
                <div class="advantages-home_right">
                    <ul class="advantages-home_list shadow-text--super-light">
                        <?php while (have_rows('advantages-home_list')): the_row(); ?>
                            <li class="advantages-home_item">
                                <?php if (get_sub_field('advantages-home_icon')): ?>
                                    <img src="<?php the_sub_field('advantages-home_icon') ?>" alt="img">
                                <?php endif; ?>
                                <?php if (get_sub_field('advantages-home_list-title')): ?>
                                    <div class="advantages-home_title"><?php the_sub_field('advantages-home_list-title') ?></div>
                                <?php endif; ?>
                                <?php the_sub_field('advantages-home_list-desc') ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>