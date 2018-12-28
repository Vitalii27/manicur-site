<section class="section review-form" style="background-image: url(<?php the_field('banner-title-bg') ?>)">
    <div class="container-fluid">
        <?php if (get_field('form-review_title')): ?>
            <h2 class="title title--white review-form_title"><?php the_field('form-review_title') ?></h2>
        <?php endif; ?>
        <?php if (get_field('form-review_subtitle')): ?>
            <h3 class="subtitle subtitle--white review-form_subtitle"><?php the_field('form-review_subtitle') ?></h3>
        <?php endif; ?>


        <div class="review-form_form-block">
            <?php echo do_shortcode(get_field('form-review_shortcode')); ?>
        </div>
    </div>
</section>