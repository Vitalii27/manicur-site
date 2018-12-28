<div class="section section diplom-old">
    <div class="container-fluid">
        <div class="diplom-old_content">
            <div class="diplom-old_left">
                <?php if (get_field('diplom-title')): ?>
                    <h3 class="diplom-old_title shadow-text--light">
                        <?php the_field('diplom-title') ?>
                    </h3>
                <?php endif; ?>
                <?php if (have_rows('diplom-list')): ?>
                    <ul class="diplom-old_list">
                        <?php while (have_rows('diplom-list')): the_row(); ?>
                            <?php if (get_sub_field('diplom-item')): ?>
                                <li class="diplom-old_item shadow-text--light">
                                    <?php the_sub_field('diplom-item'); ?>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <?php if (get_field('diplom-img')): ?>
                <div class="diplom-old_right">
                    <img src="<?php the_field('diplom-img') ?>" alt="<?php the_field('diplom-img_alt') ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>