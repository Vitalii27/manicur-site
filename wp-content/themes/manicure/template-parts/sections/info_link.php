<section class="section section-info section-info--link ">
    <div class="section-info_content shadow-text">
        <div class="section-info_left section-info-block ">
            <a href="<?php the_field('section-link-left-block-link') ?>" class="section-info-link">
                <div class="section-info_wrap-left">
                    <?php if (get_field('section-link-left-block-img')): ?>
                                            <img src="<?php the_field('section-link-left-block-img') ?>" alt="img">
                    <?php endif; ?>
                    <div class="section-info_text">
                        <?php if (get_field('section-link-left-block-title')): ?>
                            <h3 class="section-info_title"><?php the_field('section-link-left-block-title') ?></h3>
                        <?php endif; ?>

                    </div>
                </div>
            </a>
        </div>
        <div class="section-info_right section-info-block">
            <a href="<?php the_field('section-link-right-block-link') ?>" class="section-info-link">
                <div class="section-info_wrap-right">
                    <?php if (get_field('section-link-right-block-img')): ?>
                                            <img src="<?php the_field('section-link-right-block-img') ?>" alt="img">
                    <?php endif; ?>
                    <div class="section-info_text">
                        <?php if (get_field('section-link-right-block-title')): ?>
                            <h3 class="section-info_title"><?php the_field('section-link-right-block-title') ?></h3>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
        </div>
</section>