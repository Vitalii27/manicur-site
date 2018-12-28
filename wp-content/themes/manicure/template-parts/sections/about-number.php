<?php if (have_rows('number_list-home')): ?>
    <section class="section about-number">
        <div class="container-fluid">
            <ul class="about-number_list">
                <?php while (have_rows('number_list-home')): the_row(); ?>
                    <li class="about-number_item shadow-text--super-light <?php the_sub_field('number_list-radio') ?>" >
                        <div class="about-number_top">
                            <?php if (get_sub_field('number_list-number')): ?>
                                <div class="about-number_number"><?php the_sub_field('number_list-number') ?></div>
                            <?php endif; ?>
                            <?php if (get_sub_field('number_list-title')): ?>
                                <div class="about-number_title"><?php the_sub_field('number_list-title') ?></div>
                            <?php endif; ?>
                             <?php if (get_sub_field('number_list-desc')): ?>
                            <div class="about-number_desc">
                                <?php the_sub_field('number_list-desc') ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if (get_sub_field('number_list-bg')): ?>
                            <div class="about-number_bottom"
                                 style="background-image: url(<?php the_sub_field('number_list-bg') ?>)"></div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>