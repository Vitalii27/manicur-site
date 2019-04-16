<section class="section section-info-new">
    <div class="container-fluid">
        <div class="section-info-new_content shadow-text--super-light">
            <div class="section-info-new-block ">
                <div class="section-info-new_wrap">
                    <?php if (get_field('info-left-img')): ?>
                        <div class="section-info-new_img">
                            <img src="<?php the_field('info-left-img') ?>" alt="img">

                        </div>
                    <?php endif; ?>
                    <div class="section-info-new_text">
                        <?php if (get_field('info-left-title')): ?>
                            <h3 class="section-info-new_title"><?php the_field('info-left-title') ?></h3>
                        <?php endif; ?>
                        <?php if (get_field('info-left-desc')): ?>
                            <div class="section-info-new_desc"><?php the_field('info-left-desc') ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="section-info-new-block">
                <div class="section-info-new_wrap">
                    <?php if (get_field('info-right-img')): ?>
                        <div class="section-info-new_img">
                            <img src="<?php the_field('info-right-img') ?>" alt="img">
                        </div>
                    <?php endif; ?>
                    <div class="section-info-new_text">
                        <?php if (get_field('info-right-title')): ?>
                            <h3 class="section-info-new_title"><?php the_field('info-right-title') ?></h3>
                        <?php endif; ?>
                        <?php if (get_field('info-right-desc')): ?>
                            <div class="section-info-new_desc"><?php the_field('info-right-desc') ?></div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <img class="img-bg img-pos2" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png"
         alt="img">
    <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png"
         alt="img">
</section>