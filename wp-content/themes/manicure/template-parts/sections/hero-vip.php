<section class="section hero hero--vip" id="hero" >
    <div class="hero-vip-bg" style="background-image: url(<?php the_field('hero_img-phone') ?>)">

    <div class="hero-vip-red border-trap"></div>
    <div class="container-fluid">
        <div class="hero_content">
            <?php if (get_field('action-title-hero')): ?>
                <div class="hero--vip_action">
                    <div class="hero--vip_action-title"> <?php the_field('action-title-hero') ?></div>
                    <?php the_field('action-data-hero') ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('action-full-hero')): ?>
                <div class="hero--vip_sub">
                    <?php the_field('action-full-hero') ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('action-name-hero')): ?>
                <div class="hero_title"> <?php the_field('action-name-hero') ?></div>
            <?php endif; ?>
            <?php if (get_field('action-current-price-hero')): ?>
                <div class="hero--vip_price">
                    <div class="price_yellow">
                        <span class="price-underline"><?php the_field('action-current-price-hero') ?> руб</span> вместо
                        <span class="price-black"><?php the_field('action-old-price-hero') ?> руб</span>
                    </div>
                </div>
            <?php endif; ?>
            <div class="sub-section_btn-block">
                <a href="#form-page-banner"
                   class="sub-section_link button button-vip js-pop-up">
                    <span class="btn-yallow"></span>
                    Записаться на курс</a>
            </div>

        </div>

    </div>
    <div class="hero-vip-red border-trap border-trap--reverse">
        <ul class="hero--vip_list">
            <li class="hero--vip_item">
                <div>Без доплат</div>
                <div>Трудоустройство</div>
            </li>
            <li class="hero--vip_item">
                <div>Диплом</div>
                <div>Срок обучения - 1 месяц</div>
            </li>

        </ul>
    </div>
    </div>
    <?php if (have_rows('vip-adbatages-list')): ?>
    <section class="section vip-advantages_parent">
        <div class="container-fluid">
            <ul class="vip-advantages">
                <?php while (have_rows('vip-adbatages-list')): the_row(); ?>
                    <li class="vip-advantages_item">
                        <?php if (get_sub_field('vip-adbatages-img')): ?>
                            <div class="vip-advantages_img-block">
                                <img src="<?php the_sub_field('vip-adbatages-img') ?>" alt="img">
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('vip-adbatages-title')): ?>
                            <h4 class="vip-advantages_title"><?php the_sub_field('vip-adbatages-title') ?></h4>
                        <?php endif; ?>
                        <?php if (get_sub_field('vip-adbatages-desc')): ?>
                            <div class="vip-advantages_desc">
                                <?php the_sub_field('vip-adbatages-desc') ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>

    <?php endif; ?>
</section>