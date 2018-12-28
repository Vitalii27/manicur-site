<section class="section section-info section-info--vip"
         style="background-image: url(<?php the_field('vip-info-bg') ?>)">
    <div class="container-fluid">


        <div class="section-info_content ">
            <div class="section-info_content-block" style="background-image: url(<?php the_field('vip-info-img') ?>)">
                <div class="section-info_left section-info-block shadow-text--super-light">
                    <div class="section-info_wrap-left">

                        <div class="section-info_text">
                            <?php if (get_field('info-vip-title-l')): ?>
                                <h3 class="section-info_title"><?php the_field('info-vip-title-l') ?></h3>
                            <?php endif; ?>
                            <?php if (get_field('info-vip-desc-l')): ?>
                                <div class="section-info_desc"><?php the_field('info-vip-desc-l') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="section-info_right section-info-block shadow-text--super-light">
                    <div class="section-info_wrap-right">

                        <div class="section-info_text">
                            <?php if (get_field('info-vip-title-r')): ?>
                                <h3 class="section-info_title"><?php the_field('info-vip-title-r') ?></h3>
                            <?php endif; ?>
                            <?php if (get_field('info-vip-desc-r')): ?>
                                <div class="section-info_desc"><?php the_field('info-vip-desc-r') ?></div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>