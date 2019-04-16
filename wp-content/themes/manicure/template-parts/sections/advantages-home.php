<section class="section advantages-home">
    <div class="container-fluid">
        <?php if (get_field('advantages-home_title')): ?>
            <h3 class="title shadow-text--light"><?php the_field('advantages-home_title') ?></h3>
        <?php endif; ?>
        <div class="advantages-home_blocks">

            <?php if (have_rows('advantages-home_list')): ?>

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

            <?php endif; ?>
        </div>
    </div>
</section>