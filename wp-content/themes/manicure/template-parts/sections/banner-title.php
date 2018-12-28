<section class="section banner-title">
    <img class="img-banner" src="<?php echo get_template_directory_uri() ?>/assets/images/image-border.png" alt="img">
    <div class="container-fluid">
        <?php if (get_field('banner-title-bg-title')): ?>
            <h3 class="title-center banner-title_bg"><?php the_field('banner-title-bg-title') ?></h3>
        <?php endif; ?>
        <?php if (get_field('banner-title')): ?>
            <h2 class="title-center banner-title_text"><?php the_field('banner-title') ?></h2>
        <?php endif; ?>
    </div>
</section>