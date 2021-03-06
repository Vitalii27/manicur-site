<section class="section hero" id="hero" style="background-image: url(<?php the_field('hero_img-phone') ?>)">
    <?php if (get_field('hero_img-bg')): ?>
        <div class="hero_img">
            <img src="<?php the_field('hero_img-bg') ?>" alt="img">
        </div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="hero_content shadow-text--light">
            <?php if (get_field('hero_title')): ?>
                <div class="hero_title"><?php the_field('hero_title') ?></div>
            <?php endif; ?>

            <?php if (get_field('hero_subtitle')): ?>
                <div class="hero_subtitle"><?php the_field('hero_subtitle') ?></div>
            <?php endif; ?>

            <?php if (get_field('sing-up-button-hero')): ?>
                <div class="sub-section_btn-block">
                    <a href="#sing-up"
                       class="sub-section_link button button--pink js-pop-up"><?php the_field('sing-up-button-hero') ?></a>
                </div>
            <?php endif; ?>
            <?php if (have_rows('icon-hero-reap')): ?>
                <ul class="hero_list">
                    <?php while (have_rows('icon-hero-reap')): the_row(); ?>
                        <li class="hero_item shadow-text--super-light">
                            <?php if (get_sub_field('icon-img-hero')): ?>
                                <div class="hero_item-block">
                                    <img src="<?php the_sub_field('icon-img-hero'); ?>" alt="icon"
                                         class="hero_icon">
                                </div>
                            <?php endif; ?>
                            <?php the_sub_field('icon-hero-text'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </div>
    </div>

</section>
