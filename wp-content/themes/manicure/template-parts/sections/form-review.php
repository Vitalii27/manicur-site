<section class="section review-form" style="background-image: url(<?php the_field('banner-title-bg') ?>)">
    <div class="container-fluid">
        <div class="review-form_wrapper">
            <div class="review-form-img-block">
                <img class=""
                     src="<?php echo get_template_directory_uri() ?>/assets/images/form-girl.png" alt="img">
            </div>
            <div class="review-form_form-block">
                <?php echo do_shortcode(get_field('form-review_shortcode')); ?>
            </div>
        </div>
    </div>
</section>