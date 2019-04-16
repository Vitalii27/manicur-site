<?php if (have_rows('photo-list')): ?>
    <section class="section vip-photo-classes photo">
        <div class="container-fluid">
            <?php if (get_field('photo-title')): ?>
                <h3 class="vip-title"> <?php the_field('photo-title') ?></h3>
            <?php endif; ?>
            <div class="photo_content">
                <div class="photo_slider js-photo-slider-vip ">
                    <?php while (have_rows('photo-list')): the_row(); ?>
                        <div class="photo_slider-elem">
                            <div class="photo_slider-wrapp js-pop-up-img">
                                <a href="<?php the_sub_field('photo-image') ?>"
                                   class="photo_slider-link" > <img
                                            src="<?php the_sub_field('photo-image') ?>"
                                            class="photo_img" alt="<?php the_sub_field('photo_img-name') ?>">

                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>

        </div>
        <?php if (get_field('photo-link-home')): ?>
            <div class="photo-vip_text">

                <div class="btn-vip">
                    <a class="btn-vip-link" href="<?php the_field('photo-link-home') ?>">Больше фотографий</a>
                </div>

            </div>

        <?php endif; ?>
    </section>
<?php endif; ?>