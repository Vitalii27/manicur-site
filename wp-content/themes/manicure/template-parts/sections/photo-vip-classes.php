<section class="section vip-photo-classes photo">
    <div class="container-fluid">
        <h3 class="vip-title">Фотографии учебных классов</h3>
        <ul class="vip-photo-classes-advantages">
            <li>
                <div class="vip-photo-classes_title">2 этажа</div>
                <div class="vip-photo-classes_desc">для комфортного обучения</div>
            </li>
            <li>
                <div class="vip-photo-classes_title">650 кв.м.</div>
                <div class="vip-photo-classes_desc">площадь которую мы занимаем</div>
            </li>
            <li>
                <div class="vip-photo-classes_title">8 залов</div>
                <div class="vip-photo-classes_desc">современных для лекций</div>
            </li>
        </ul>

        <div class="photo_content">

            <?php if (have_rows('photo-list-vip')): ?>
                <div class="photo_slider js-photo-slider-vip">
                    <?php while (have_rows('photo-list-vip')):
                        the_row(); ?>
                        <div class="photo_slider-elem">
                            <div class="photo_slider-wrapp js-pop-up-img">
                                <a href="<?php the_sub_field('photo-image-vip'); ?>" class="photo_slider-link"> <img
                                            src="<?php the_sub_field('photo-image-vip'); ?>" class="photo_img"
                                            alt="photo">

                                </a>

                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if (get_field('photo-list-vip-text')): ?>
                <div class="photo-vip_text">
                    <div class="photo-vip_title"><?php the_field('photo-list-vip-text'); ?></div>
                    <div class="photo-vip_desc"><?php the_field('photo-list-vip-desc'); ?></div>
                    <?php if (get_field('photo-list-vip-link')): ?>
                        <div class="btn-vip">
                            <a class="btn-vip-link" href="<?php the_field('photo-list-vip-link'); ?>">Больше
                                фотографий</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>