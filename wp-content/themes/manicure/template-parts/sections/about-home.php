<section class="section about-school about-school--home" id="about">
    <?php if (get_field('about-home_title')): ?>
        <h3 class="title shadow-text--light"><?php the_field('about-home_title') ?></h3>
    <?php endif; ?>
    <?php if (get_field('about-us-img')): ?>
        <img src=" <?php the_field('about-us-img') ?>" alt="img" class="about-school_bg">
    <?php endif; ?>
    <div class="container-fluid">
        <div class="about-school_content">

            <div class="about-school_video-block">
                <div class="about-school_desc shadow-text--super-light">
                    <?php if (get_field('about-home_title-text')): ?>
                        <div class="about-school_desc-title"><?php the_field('about-home_title-text') ?></div>
                    <?php endif; ?>
                    <?php if (get_field('about-home_desc-text')): ?>
                        <div class="about-school_desc-text">
                            <?php the_field('about-home_desc-text') ?>
                        </div>
                    <?php endif; ?>
                    <a href="<?php the_field('about-home_link') ?>" class="button button--pink">Подробнее о нас</a>
                </div>
                <?php if (get_field('about-home_img')): ?>
                    <div class="about-school_img-bg" style="background-image: url(<?php the_field('about-home_img') ?>)">

                    </div>
                <?php endif; ?>

            </div>



        </div>
    </div>
    <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img1.png" alt="img">
    <img class="img-bg img-pos2" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
</section>