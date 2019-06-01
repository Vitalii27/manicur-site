<?php
/**
 * Template Name: Course page Template
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package manicure
 */

get_header(); ?>
<?php $form = get_option('form-course'); ?>
<section class="section hero hero--course" id="hero"
         style="background-image: url(<?php the_field('hero_img-phone') ?>)">

    <div class="container-fluid">
        <div class="hero_content ">
            <?php if (get_field('hero_title')): ?>
                <div class="hero_title"><?php the_field('hero_title') ?></div>
            <?php endif; ?>

            <?php if (get_field('hero_subtitle')): ?>
                <div class="hero_subtitle"><?php the_field('hero_subtitle') ?></div>
            <?php endif; ?>
            <?php if (have_rows('icon-hero-reap')): ?>
                <ul class="hero_list">
                    <?php while (have_rows('icon-hero-reap')): the_row(); ?>
                        <li class="hero_item ">
                            <?php if (get_sub_field('icon-img-hero')): ?>
                                <div class="hero_item-block">
                                    <img src="<?php the_sub_field('icon-img-hero'); ?>" alt="icon"
                                         class="hero_icon">
                                </div>
                            <?php endif; ?>
                            <?php the_sub_field('icon-hero-text'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <div class="sub-section_btn-block">
                <a href="#sing-up"
                   class="sub-section_link button button-vip js-pop-up">
                    <span class="btn-yallow"></span>
                    Записаться на курс</a>
            </div>


        </div>
    </div>
    <img class="hero--course--mobile" src="<?php the_field('hero_img-phone-mobile') ?>" alt="banner">
</section>

<?php get_template_part('./template-parts/sections/photo3'); ?>
<?php get_template_part('./template-parts/sections/schedule'); ?>

<section class="section unique-vip unique-course"
         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/form-bg.jpg)">
    <div class="container-fluid">
        <div class="unique-vip_content">
            <div class="unique-vip_title">
                <h3>Запишись на обучение прямо сейчас!</h3>
                <p>Пока действует СКИДКА!!!</p>
                <div class="price_red">
                    <?php if (get_field('course_new-price')): ?>

                        <span class="price-underline"><?php the_field('course_new-price') ?> руб</span> вместо
                    <?php endif; ?>
                    <?php if (get_field('course_old-price')): ?>
                        <span class="price-black"><?php the_field('course_old-price') ?> руб</span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="unique-vip_form">
                <div class="unique-vip_form-title">
                    <p>Запишитесь на курс прямо сейчас</p>
                    <div class="action_form action--new-form">
                        <div role="form" class="wpcf7" id="wpcf7-f1933-o2" lang="ru-RU" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <?php if (!empty($form['form_shortcode'])) {
                                ?>
                                <div class="action_form">
                                    <?php echo do_shortcode($form['form_shortcode']) ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="action_bottom-text">
                        <p> *Внимание! Нажимая на кнопку, вы соглашаетесь с
                            <a href="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/pdf/privacy-policy.pdf"
                               target="_blank">политикой обработки персональных данных.</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('./template-parts/sections/plus-section'); ?>
<?php get_template_part('./template-parts/sections/photo2'); ?>
<section class="section vip-advantages_parent course-advantages_parent">
    <div class="container-fluid">
        <ul class="vip-advantages">
            <li class="vip-advantages_item">
                <div class="vip-advantages_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/iconad31.png" alt="img">
                </div>
                <h4 class="vip-advantages_title">Диплом</h4>
                <div class="vip-advantages_desc">
                    <p>Наличие Диплома нашего Учебного Центра – залог того, что вы будете нарасхват в Лучших Салонах
                        России.

                    </p>
                </div>
            </li>
            <li class="vip-advantages_item">
                <div class="vip-advantages_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/icon-ad1-1-1.png" alt="img">
                </div>
                <h4 class="vip-advantages_title">Опытные преподаватели</h4>
                <div class="vip-advantages_desc">
                    <p>Практикующие преподаватели с Опытом Работы 15 лет. Обучение ведется с учетом Модных Тенденций
                        2018-2019 года.

                    </p>
                </div>
            </li>
            <li class="vip-advantages_item">
                <div class="vip-advantages_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/iconad12-1.png" alt="img">
                </div>
                <h4 class="vip-advantages_title">Никаких доплат</h4>
                <div class="vip-advantages_desc">
                    <p>Оборудование, Материалы, Модели включены в Стоимость Курса. Вам не нужно ничего покупать для
                        обучения!

                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="section about-school--vip about-school--home" id="about">
    <h3 class="vip-title">О нашей школе</h3>

    <div class="container-fluid">
        <div class="about-school_content">

            <div class="about-school_video-block">
                <div class="about-school_video">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7Kp2g_KGPtE" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                </div>
                <div class="about-school_desc ">
                    <div class="about-school_desc-title">Школа «Золотая Ника»</div>
                    <div class="about-school_desc-text">
                        <p> Это 8 Учебных Аудиторий площадью 650 м², расположенных на Двух Этажах. В них проводятся
                            лекции и практические занятия для закрепления полученных знаний. Аудитории оснащены нужным
                            Оборудованием, Мультимедийными Системами, Наглядными Пособиями, поэтому вы сможете получить
                            профессию в Максимально Удобных Условиях.</p>

                        <p> Главная задача Учебного Центра состоит в обучении Маникюру, Педикюру и Наращиванию ногтей на
                            VIP-уровне, а главная цель школы — максимально полно и гармонично обучить Любого Желающего
                            бесценным знаниям в области Ногтевого Сервиса.</p>
                    </div>

                </div>


            </div>

            <div class="about_info-block">
                <div class="about_img-block about_img-block--text">
                    <img class="about-img-text-bg"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/shoud2.png" alt="img">
                    <div class="about-img-text-content">
                        <?php if (get_field('diplom-title-top')): ?>
                            <h3 class="about-block-top-title"><?php the_field('diplom-title-top') ?></h3>
                        <?php endif; ?>
                        <?php if (get_field('diplom-title')): ?>
                            <h3 class="about-block-title"><?php the_field('diplom-title') ?></h3>
                        <?php endif; ?>
                        <?php if (have_rows('diplom-list')): ?>
                            <ul>
                                <?php while (have_rows('diplom-list')): the_row(); ?>
                                    <?php if (get_sub_field('diplom-item')): ?>
                                        <li><?php the_sub_field('diplom-item') ?></li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="about_img-block">
                    <?php if (get_field('diplom-img')): ?>
                        <img src="<?php the_field('diplom-img') ?>" alt="img">
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>


</section>
<section class="section vip-photo-classes photo">
    <div class="container-fluid">
        <h3 class="vip-title"> Фотографии учебных классов и кабинетов</h3>
        <div class="photo_content">
            <div class="photo_slider js-photo-slider-vip">
                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0889-1.jpg"
                           class="photo_slider-link" tabindex="0"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0889-1.jpg"
                                    class="photo_img"
                                    alt="Класс для обучения и отработки практики по  педикюру">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0891-1.jpg"
                           class="photo_slider-link" tabindex="0"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0891-1.jpg"
                                    class="photo_img" alt="Класс для обучения педикюру">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0892-1.jpg"
                           class="photo_slider-link" tabindex="0"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0892-1.jpg"
                                    class="photo_img"
                                    alt="Класс для обучения и отработки практики по  педикюру">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0904-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0904-1.jpg"
                                    class="photo_img" alt="Лекционный класс">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0907-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0907-1.jpg"
                                    class="photo_img" alt="Лекционный класс">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0928-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0928-1.jpg"
                                    class="photo_img" alt="Класс по маникюру и покрытию лаком ногтей">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0936-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0936-1.jpg"
                                    class="photo_img" alt="Класс по маникюру и покрытию лаком ногтей">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0938-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/DSC_0938-1.jpg"
                                    class="photo_img" alt="Класс по маникюру и покрытию лаком ногтей">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6136-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6136-1.jpg"
                                    class="photo_img" alt="Класс по обучению маникюру">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6141-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6141-1.jpg"
                                    class="photo_img" alt="Класс по обучению маникюру">

                        </a>
                    </div>
                </div>


                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6149-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6149-1.jpg"
                                    class="photo_img" alt="Кабинет дезинфекции и стерилизации">

                        </a>
                    </div>
                </div>

                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6156-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6156-1.jpg"
                                    class="photo_img" alt="Класс по обучению маникюру">

                        </a>
                    </div>
                </div>

                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6161-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6161-1.jpg"
                                    class="photo_img" alt="Класс по обучению Мехенди и Нейл Арт">

                        </a>
                    </div>
                </div>

                <div class="photo_slider-elem">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6168-1.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://www.shkola-nika.ru/wp-content/uploads/2018/10/IMG_6168-1.jpg"
                                    class="photo_img"
                                    alt="Класс аппаратного маникюра, педикюра,  японский маникюр">

                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="photo-vip_text">

        <div class="btn-vip">
            <a class="btn-vip-link" href="https://www.shkola-nika.ru/photo-vip-master/">Больше фотографий</a>
        </div>

    </div>

</section>
<section class="section we-study-vip" style="padding-top: 2rem;">
    <div class="container-fluid">
        <h3 class="vip-title">мы реально учим!</h3>
        <ul class="we-study-vip_list">
            <li class="we-study-vip_item">
                <div class="we-study-vip_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/240_F_209383310_vE59lDqPibohlNOfXpspvcvL48BU8GWu.jpg"
                         alt="img">
                </div>
                <div class="we-study-vip_content">
                    <div class="we-study-vip_first-block">
                        <h3>8 залов для обучения</h3>
                        <p>Обучение ведется в оборудованных и уютных аудиториях. Учебный центр находится в 5 минутах от
                            м. Красносельская и м. Бауманская</p>
                    </div>
                    <div class="vip-teachers_border"></div>

                    <div class="we-study-vip_first-block">
                        <h3>высокий уровень мастерства за 8 часов обучения</h3>
                        <p>Наша программа – это целых 8 часов обучения, минимум теории и максимум практики. За один
                            курс обучения вы станете квалифицированным мастером и получите все знания и навыки для
                            дальнейшей успешной работы.

                        </p>

                    </div>
                </div>
                <img src="   https://www.shkola-nika.ru/wp-content/uploads/2019/02/img1.png" alt="img"
                     class="we-realy-study-bg-img">
            </li>
            <li class="we-study-vip_item we-study-vip_item--reverse">
                <div class="we-study-vip_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/manicure1.jpg" alt="img">
                </div>
                <div class="we-study-vip_content">
                    <div class="we-study-vip_first-block">
                        <h3>Сертификат установленного образца</h3>
                        <p>По окончанию курса вы получите сертификат, который высоко котируется в лучших салонах красоты
                            и
                            ногтевых студиях Москвы и Московской области. Обучим всех даже при отсутствии гражданства
                            России.

                        </p>

                    </div>
                </div>
                <img src="   https://www.shkola-nika.ru/wp-content/uploads/2019/02/img2.png" alt="img"
                     class="we-realy-study-bg-img">
            </li>
            <li class="we-study-vip_item">
                <div class="we-study-vip_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/shutterstock_1056423641.jpg"
                         alt="img">
                </div>
                <div class="we-study-vip_content">

                    <div class="we-study-vip_first-block">
                        <h3>доход от 60 000 рублей</h3>
                        <p>Получив образование у нас, вы легко найдете высокооплачиваемую работу. Минимальная зарплата
                            мастера в Москве и области – 60000 рублей. Мы готовим специалистов профессионального уровня,
                            которые легко найдут работу даже без стажа.

                        </p>

                    </div>
                </div>
                <img src="   https://www.shkola-nika.ru/wp-content/uploads/2019/02/img3.png" alt="img"
                     class="we-realy-study-bg-img">
            </li>
        </ul>
    </div>
</section>

<section class="section course-advantages"
         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course-bg.jpg)">
    <div class="container-fluid">
        <ul>
            <li>
                <div class="course-advantages_title">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/course-icon1.png" alt="img">
                    <span>2017</span>
                </div>
                <div class="course-advantages_desc">
                    <p>в 2017 году наш учебный <br> центр признан самым <br> большим в Москве</p>
                </div>
            </li>
            <li>
                <div class="course-advantages_title">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/course-icon2.png" alt="img">
                    <span>22857</span>
                </div>
                <div class="course-advantages_desc">
                    <p>выпускнков получили <br> диплом учебного <br> центра</p>
                </div>
            </li>
            <li>
                <div class="course-advantages_title">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/course-icon3.png" alt="img">
                    <span>115</span>
                </div>
                <div class="course-advantages_desc">
                    <p>мастеров открыли<br> собственные<br> салоны</p>
                </div>
            </li>
            <li>
                <div class="course-advantages_title">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/course-icon4.png" alt="img">
                    <span>70%</span>
                </div>
                <div class="course-advantages_desc">
                    <p>наших выпускников<br> работают в салонах <br>Москвы и области</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="section vip-teachers">
    <div class="container-fluid">
        <h3 class="vip-title">Наши преподаватели</h3>
        <ul class="vip-teachers_list">
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block-container">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/12/12.jpg" alt="Преподаватель курсов: Технологии современных трендов — NAil Art, Тонкие линии в дизайне, Мехенди"
                         class="vip-teachers_img-block">

                </div>
                <div class="vip-teachers_name">Шерри магомедова</div>
                <div class="vip-teachers_position">Завуч школы «Золотая Ника»</div>
                <div class="vip-teachers_border">

                </div>
                <div class="vip-teachers_desc">
                    <p>Технологии современных трендов - Nail Art;
                        Тонкие линии в дизайне; Мехенди.</p>
                </div>
            </li>
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block-container">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/12/543.jpg" alt="Ирина Лобода Преподаватель курсов: Арочное моделирование, ЗD и 4D лепка гелем, Акварельная техника в Дизайне"
                         class="vip-teachers_img-block">

                </div>
                <div class="vip-teachers_name">олеся солодилова</div>
                <div class="vip-teachers_position">Преподаватель курсов</div>
                <div class="vip-teachers_border">

                </div>
                <div class="vip-teachers_desc">
                    <p>Аппаратные технологии; Японский маникюр; Бразильский маникюр; Горячий маникюр.</p>
                </div>
            </li>
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block-container">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/12/563.jpg" alt="Олеся Солодилова Преподаватель курсов: Аппаратный маникюр и педикюр, Укрепление ногтей биогелем"
                         class="vip-teachers_img-block">
                </div>
                <div class="vip-teachers_name">Ирина лабода</div>
                <div class="vip-teachers_position">Преподаватель курсов</div>
                <div class="vip-teachers_border">

                </div>
                <div class="vip-teachers_desc">
                    <p>Арочное моделирование;
                        3D и 4D лепка гелем; Акварельная техника в дизайне.</p>
                </div>
            </li>
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block-container">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/12/36485.jpg" alt="Елена Донская Преподаватель курсов: Китайская роспись, Основы декоративной росписи, Аэрография"
                         class="vip-teachers_img-block">
                </div>
                <div class="vip-teachers_name">Любовь Светличная</div>
                <div class="vip-teachers_position">Преподаватель курсов</div>
                <div class="vip-teachers_border">

                </div>
                <div class="vip-teachers_desc">
                    <p>Японский маникюр; Бразильский маникюр; Горячий маникюр;
                        SPA-уход за кожей рук и ног..</p>
                </div>
            </li>
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block-container"
                >
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/IMG_6535.jpg" alt="Любовь Светличная Преподаватель курсов: Японский маникюр, Бразильский маникюр, Горячий маникюр, SPA-уход за кожей рук и ног"
                         class="vip-teachers_img-block">
                </div>
                <div class="vip-teachers_name">Елена Донская</div>
                <div class="vip-teachers_position">Преподаватель курсов</div>
                <div class="vip-teachers_border">

                </div>
                <div class="vip-teachers_desc">
                    <p>Китайская роспись, Основы декоративной росписи, Аэрография</p>
                </div>
            </li>
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block-container"
                >
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/IMG_6866.jpg" alt=""
                         class="vip-teachers_img-block">
                </div>
                <div class="vip-teachers_name">Миронова Наталья</div>
                <div class="vip-teachers_position">Преподаватель курсов</div>
                <div class="vip-teachers_border">

                </div>
                <div class="vip-teachers_desc">
                    <p>Мультидизайн, Шугаринг</p>
                </div>
            </li>
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block-container"
                >
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/IMG_6554.jpg" alt=""
                         class="vip-teachers_img-block">
                </div>
                <div class="vip-teachers_name">Муллина Ольга</div>
                <div class="vip-teachers_position">Преподаватель курсов</div>
                <div class="vip-teachers_border">

                </div>
                <div class="vip-teachers_desc">
                    <p>Японский маникюр, Crystal Nails</p>
                </div>
            </li>
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block-container"
                >
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/IMG_6823.jpg" alt=""
                         class="vip-teachers_img-block">
                </div>
                <div class="vip-teachers_name">Ким Наталья</div>
                <div class="vip-teachers_position">Преподаватель курсов</div>
                <div class="vip-teachers_border">

                </div>
                <div class="vip-teachers_desc">
                    <p>Плетение кос, Плетение кос с лентами</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="section section reviews reviews--vip" id="reviews">
    <div class="container-fluid">
        <div class="reviews_content">
            <h3 class="vip-title">Отзывы учениц</h3>
            <div class="reviews_slider js-review-slider-vip">


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/08/avatar.png"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Бурцева Анна.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Ноготки" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Обучалась в школе «Золотая Ника»- огромное спасибо всем преподавателям,
                                очень терпеливые, дружелюбные, объяснят по несколько раз если что-то не
                                понятно! Тепло, уютно, дружелюбно!</p>
                            <p class="reviews_bottom-text">Выпуск 10.08.2018 г.</p>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/11.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Кожедуб Анна.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Сплетница" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Всем доброго времени суток.&nbsp;&nbsp; Хочу выразить благодарность школе
                                «Золотая Ника» и отдельное спасибо учителям за их труд и терпение! Школа
                                превосходная, учителя замечательные, всему научили.</p>
                            <p class="reviews_bottom-text">Выпуск 15.07.2016 г.</p>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/22.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Смольникова Светлана.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Ноготки" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Хочу поблагодарить школу Золотая Ника за возможность осуществить мечту и
                                стать Вип мастером ногтевого сервиса! Спасибо вам преподаватели вы
                                волшебницы и феи !!! Смольникова Светлана!</p>
                            <p class="reviews_bottom-text">Выпуск 06.07.2017 г.</p>
                        </div>
                    </div>
                </div>

                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/33.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Кокорева Виктория.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Леал-Люкс" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Я Кокорева Виктория, ученица школы «золотая ника». Здесь самые добрые
                                учителя которые я вообще видела. У меня даже с мое время таких
                                преподавателей в своей школе не было ! И это очень радует.&nbsp;Если у
                                вас что-то не получается на уроке, никто вас за это ругать не будет, а
                                наоборот помогут и&nbsp;всегда похвалятсяю. С учителями всегда можно
                                посмеяться, и никогда не бывает грустно Всегда узнаем что-то новое ) Я
                                всем бы посоветовала ходить к нам в школу «золотая ника » !</p>
                            <p class="reviews_bottom-text">Выпуск 05.07.2018 г.</p>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/44.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Колымагина Елисавета.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Шок Шоколад" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Учусь в школе маникюра Золотая Ника. Школа хорошая. Добрые учителя.
                                Объясняют все понятно. Очень внимательны. Помогают освоить все нужные
                                техники. А самое главное приятная рабочая атмосфера. Очень рада что
                                пришла именно в эту школу. С уважением, ученица Золотой Ники, Колымагина
                                Елисавета.</p>
                            <p class="reviews_bottom-text">Выпуск 15.02.2018 г.</p>
                        </div>
                    </div>
                </div>

                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/55.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Похоменко Надежда.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Luck" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Отличная школа！Рекомендую всем！Учат здесь оооочень хорошо！Преподаватели
                                находят подход ко всем ученицам！И смотрят за каждой из нас, уделяют
                                внимание всем！Мы с радостью посещаем «Золотую Нику»</p>
                            <p class="reviews_bottom-text">Выпуск 02.02.2018 г.</p>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/66.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Орчунова Динара.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Сплетница" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Супер Школа вежливые учителя учить все чётко и график свободный? люблю и
                                уважаю только в перед Золотая Ника. Ученица Орчунова Динара?</p>
                            <p class="reviews_bottom-text">Выпуск 15.05.2018 г.</p>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/77.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Кокорина Эльвира .</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "La beaute" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Добрый день!!!долго выбирала какую же школу выбрать по обучению ногтевого
                                сервиса и выбрала Золотую Нику, и ни капельки не сожалела об этом! Все
                                преподаватели профессионалы своего дела! Все покажут все расскажут!!,
                                всегда на позитиве!!!</p>
                            <p class="reviews_bottom-text">Выпуск 01.11.2017 г.</p>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/88.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Сагдулаева Диана.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Chick-Chirick" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Всем добрый день. Хочу поделиться своими впечатлениями об обучении в
                                школе маникюра Золотая Ника. Обучаюсь уже третью неделю, меня все
                                устраивает и график, и преподавание, и обстановка. Доходчиво и детально
                                все объясняют. Все расходные материалы предоставляют, лекции, отработки.
                                Все замечательно, всем рекомендую. Ника лучше всех！</p>
                            <p class="reviews_bottom-text">Выпуск 09.12.2017 г.</p>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/99.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Алиева Патимат.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Свой Почерк" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Добрый день! Я Алиева Патимат ! Учусь в школе «Золотая Ника» мне так
                                нравится здесь учиться, преподаватели все такие милые хорошие, я все
                                сдала, хочу на выпуск но не хочу покидать моих преподавателей, огромное
                                спасибо им большое !</p>
                            <p class="reviews_bottom-text">Выпуск 08.07.2018 г.</p>
                        </div>
                    </div>
                </div>

                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/1010.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Минченко Ольга.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "СВОЙ ПОЧЕРК" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Добрый день!!! Меня зовут Минченко Ольга, я прохожу обучение в школе
                                &nbsp;«Золотая Ника» Курсы на VIP-Мастера. Я очень довольна и очень рада
                                что выбрала эту школу. Преподаватели очень внимательны, к каждой ученице
                                индивидуальный поход. Что не мало важно, особенно для начинающих.</p>
                            <p class="reviews_bottom-text">Выпуск 06.07.2017 г.</p>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/1111.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Мирошниченко Ирина.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "Merrym" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Всем привет. Школа «Золотая Ника» самая лучшая школа на свете! Я очень
                                довольна! Индивидуальный подход к каждой ученице. Учителя большие
                                умнички! Всему нас научили! За это огромное им спасибо! Мы теперь
                                мастера! Ура! ???</p>
                            <p class="reviews_bottom-text">Выпуск 04.08.2018 г.</p>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/09/1212.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Вышковец Олеся.</div>
                                <div class="reviews_link-block">
                                    <p> Работает в салоне "LA SUPREMA" </p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Обучаюсь в школе «Золотая ника». Я очень рада, что попала именно в эту
                                школу и, то как преподаватели преподносят информацию. Спасибо им за
                                терпение и любовь!!!?</p>
                            <p class="reviews_bottom-text">Выпуск 05.09.2018 г.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="http://manicure-site/wp-content/uploads/2019/01/gVjc2iTpxy0.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>ИРИНА МЕРКУЛОВА</div>
                                <div class="reviews_link-block">
                                    <p>Работает в салоне «Merrym»</p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Добрый вечер!
                                Я тоже хочу оставить отзыв о данной школе!!! Учусь уже около месяца, если быть точнее 3
                                недели, за это время я прошла много интересных лекций, без которых прошу заметить нас не
                                выпускают из школы.
                                Так вот, после лекции аппаратные технологии я легко смогла отработать данный вид
                                маникюра. Плюс когда я сдала покрытие лаком я без всяких проблем отработала и покрытие
                                гель лаком. Моделей всегда хватает а если мы хотим привести своих, это пожалуйста и хочу
                                заметить за бесплатно. Не люблю когда говорят неправду….
                                Вот и решила написать……настоящую правду ШКОЛЕ. Вы ЛУЧШИЕ…..и наши замечательные ПЕДАГОГИ
                                низкий вам ПОКЛОН.</p>
                            <p class="reviews_bottom-text">Выпуск 04.08.2018 г.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="http://manicure-site/wp-content/uploads/2019/01/FLz39Hj2iPQ.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>ОЛЬГА ЗАЙЦЕВА</div>
                                <div class="reviews_link-block">
                                    <p>Работает в салоне "Ноготки"</p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Добрый день, любимая школа «ЗОЛОТАЯ НИКА»!!!!
                                На данный момент, являюсь ученицей этой замечательной школы!!!!! Хочу сказать только
                                одно…..она лучшая и преподаватели самые лучшие и очень сильные. Я раньше училась в
                                другой школе и мне есть с чем сравнить. Здесь пока информацию не донесут до ученика (не
                                разложат все по полочкам) так сказать не упакуются. Опросы по техникам маникюра и
                                педикюра, каждый день. Спасибо вам огромное за это. Лекции просто суперские..а как их
                                читают преподаватели просто можно прислушаться, очень интересно. Что касается
                                доп.курсов, девочки так кто хочет тот и идет, здесь принудиловки нет…хочешь иди хочешь
                                нет. Вобщем писать можно долго….но хочу сказать одно, спасибо вам мои преподаватели за
                                все, что вы для нам делаете. Но в первую очередь Виктории Вагифовне за такую мега супер
                                школу и преподавателей. Вы лучшие!!!!!!</p>
                            <p class="reviews_bottom-text">Выпуск 08.09.2018 г.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="http://manicure-site/wp-content/uploads/2019/01/e9_ee5k_U2M.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>ЕКАТЕРИНА ПЛЕХАНОВА</div>
                                <div class="reviews_link-block">
                                    <p>Работает в салоне "Сплетница"</p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Спасибо школе! Учебный процесс отлажен, график посещения удобный, ты сам планируешь своё
                                время, свой темп обучения. Особая благодарность, организатору и персоналу. В процессе
                                обучения всегда рядом, помогут и подскажут, только попроси и даже не проси-следят за
                                исполнением.))
                                Поддержат словом, если включилась самокритика;), вдохновят на успех. Всегда улыбчивы и
                                позитивны. Спасибо Вам Феи!!!
                                Материалы слабенькие, но нас там много, и мы не особо экономны и аккуратны, так что
                                можно понять. На примере своего лака- поняла, как бы он не был хорош, после 2 дней
                                тренировок покрытия-засох. Рада что училась в этой школе! Спасибо!</p>
                            <p class="reviews_bottom-text">Выпуск 15.03.2018 г.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="http://manicure-site/wp-content/uploads/2019/01/0Soj1wqfjYw.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>ЛАРИСА НОВИКОВА</div>
                                <div class="reviews_link-block">
                                    <p>Работает в салоне "Ноготки"</p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Совсем недавно я стала ученицей этой школы. У меня уже был опыт обучения на курсах и хочу
                                заметить, что столько внимания и добродушного отношения к учащимся как здесь я не
                                встречала. Удивительный преподавательский состав. Всегда подскажут приободрят ответят на
                                любой вопрос. Сегодня была на лекции по заболеваниям ногтей осталась в восторге. Я даже
                                представить не могла, что такую информацию можно так интересно преподнести. Дорогие
                                девочки преподаватели огромное ВАМ спасибо! Шерри, Любовь, Ирины, Наталья мы Вас
                                любим!!! И огромное спасибо руководителю за такую школу и таких преподавателей.
                                СПАСИБО!!!!!!!</p>
                            <p class="reviews_bottom-text">Выпуск 11.02.2019 г.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="http://manicure-site/wp-content/uploads/2019/01/4T0L-Vzwz7I.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>МАРИЯ СМИРНОВА</div>
                                <div class="reviews_link-block">
                                    <p>Работает в салоне "Леал-Люкс"</p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Всем, кто читает мой отзыв доброго времени суток.
                                Думала напишу отзыв после окончания курса, но нет. хочу написать сегодня и сейчас.
                                Дорогая школа, школа для меня реальна стала ДОРОГОЙ. Мне осталось еще заболевание ногтей
                                пройти и на выпуск. Мне все нравиться в этой школе, я и подругу свою записала на ВИП
                                МАСТЕРА. График супер, обучение за такую цену супер, подход к нам супер, преподаватели
                                лучшие, никогда без внимания не оставят.
                                Виктория Вагифовна все у вас просто супер. Спасибо. Не жалею, что пришла именно к
                                вам.)))))))</p>
                            <p class="reviews_bottom-text">Выпуск 04.03.2019 г.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="http://manicure-site/wp-content/uploads/2019/01/5qNypALRk14.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>АНАСТАСИЯ ЕРОФЕЕВА</div>
                                <div class="reviews_link-block">
                                    <p>Работает в салоне "Свой Почерк"</p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Долго выбирала школу маникюра. Я уже не юная дама и со всей серьезностью подошла к
                                выбору. Долго собирала информацию и перечитывала отзывы снова и снова. Решилась. И вот я
                                в школе Золотая Ника. Жутко волновалась смогу ли получится ли. Но все мои сомнения и
                                страхи развеял преподаватель с красивым именем Любовь. Она провела нас в класс(кроме
                                меня были еще девочки) и провела с нами целый день. За одно занятие я узнала много новой
                                и нужной информации. Занятие прошло очень интересно. На все наши вопросы мы получили
                                подробные ответы (Вопросов было много и задавала я их не одна теперь понимаю, что
                                критинизм заразная штука) Я удивилась сколько же профессионализма и выдержки у этого
                                улыбчивого преподавателя. В этот день была еще и экскурсия по школе и куда бы мы не
                                вошли нас встречали счастливые лица учеников и улыбки преподавателей. С занятия ушла с
                                ощущением безграничного счастья. Занятие было вчера, но состояние счастья и сегодня со
                                мной. Сегодня уже делала маникюр мужу. Сомнений нет в этой школе научат. Большое спасибо
                                директору школы за это счастье и за таких преподавателей.</p>
                            <p class="reviews_bottom-text">Выпуск 13.09.2018 г.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="http://manicure-site/wp-content/uploads/2019/01/5UjVhbxrzfQ.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>ВИКТОРИЯ АБРАМОВА</div>
                                <div class="reviews_link-block">
                                    <p>Работает в салоне "Luck"</p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Доброе утро. Мы вчера в вашей школе заключили договор. Прошли очень много школ, но ваша
                                школа привлекла нас своим приветствием. Придя к вам нас встретила девушка Нина. Очень
                                веселая, с улыбкой, ласковая). Все рассказала. Предложила остаться на вечер и начать
                                обучение, т. к. мы пришли очень рано она очень приветливо предложила нам где можно
                                попить чай. Спасибо директору за прекрасный персонал. Ну вот и первое наше занятие. Все
                                прошло на ура. Преподаватель Яна проводила нас в класс. Занятие прошло очень интересно.
                                В дальнейшем напишу ещё отзыв. Пока вся в эмоциях. Спасибо огромное директору за такой
                                персонал. Буду всем советовать вас.</p>
                            <p class="reviews_bottom-text">Выпуск 16.01.2019 г.</p>
                        </div>
                    </div>
                </div>
                <div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="http://manicure-site/wp-content/uploads/2019/01/6vZvqjT4kS0.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>ЕВГЕНИЯ ЧУНУСОВА</div>
                                <div class="reviews_link-block">
                                    <p>Работает в салоне "Сплетница"</p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Добрый вечер!) Я УЖЕ выпускница этой замечательной школы. Обучалась очень долго, из-за
                                проблем с учебой. Хочу сказать, что выбрала эту школу чисто случайно и не разу, не на
                                секундочку не пожалела, об этом. А только в миллиардный раз убедилась, что сделала
                                верное решение. Преподаватели все без исключения добрые и отзывчивые. Когда я пришла в
                                школу, то не умела работать с щипцами. И каждый раз, я как можно дольше старалась в
                                маникюре отложить работу с ними. Каждый раз тряслись руки, боялась порезать свою
                                модельку.. Преподавателям приходилось подходить ко мне чуть ли не по 10 раз на один
                                только палец. и что в итоге?! Мне поставили руку!!!! Я очень благодарна этому!
                                Много слышу, читаю отзывов » учителя придираются, я им (ей) не нравлюсь…» Уважаемые
                                учителя, «придирайтесь» как можно больше. Потому что сейчас всеми любимые «единички» и
                                птеригий я убираю. Мне не стыдно за свою работу, перед клиентом и самое главное я вижу
                                ошибки чужих мастеров, даже на фото. В учебном центре «Золотая Ника» всегда царит уют,
                                что не мало важно. Учителя не побоюсь этого выражения «разжевывают «каждую информацию.
                                Что не понять, ну никак невозможно.
                                Единственный минус: расставаться тяжело, настолько ко всем привык…Но рано или поздно
                                приходится это делать.
                                P.S т.к в школе очень много крутых и полезных доп. курсов, приходить к вам я буду
                                часто!)))
                                Безумно всем довольно, а те кто не знает, какой учебный центр выбрать, приходите и не
                                пожалеете.</p>
                            <p class="reviews_bottom-text">Выпуск 21.11.2018 г.</p>
                        </div>
                    </div>
                </div><div class="reviews_wrapp " style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="http://manicure-site/wp-content/uploads/2019/01/7NPqqJM_Guo.jpg"
                                     alt="avatar" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>АЙГУЛЬ МУРЗАБЕКОВА</div>
                                <div class="reviews_link-block">
                                    <p>Работает в салоне «Merrym»</p>
                                </div>

                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Думала написать отзыв о школе после обучения.
                                Девочки мне лично в школе очень комфортно. Прекрасные педагоги. И мне очень нравятся правила. Для меня не всегда удобно ходить в школу каждый день. Есть работа, дом, ребёнок. Я могу взять вечернюю и дневную смену в один день, прийти через день или два. Но потом добрать знания выходными. Мне так удобно. Девочки самое главное не опаздывать, это неуважение не только к педагогам, но и к учащимся. Педагог начнёт отвлекаться, начнёт объяснять все заново — на практике все отвлекуться на вновь прошедшего. Считаю правило не опаздывать — оправданным. Много Болтушек в курилке, сводящих сплетни — то вам педагог не так свистит, не так стоит. Вы бы хоть удосужились обратить внимание что педагоги тоже выходят отдохнуть, покурить и попить кофе, и слышат ваши сплетни. И им может быть по человечески обидно такое отношение. Они ведь ничего сверхъестественного не просят, разве внимания. Согласитесь объяснять в пустоту, когда тебя не хотят слушать не очень приятно. Шерри удивительная, у неё потрясающая энергетика. Она может тихим голосом, не повышая объяснить все и всем. В ней редкое сочетание педагогического дара и мастерства. Я не понимаю как с ней нельзя найти общий язык. Разве ленивый не найдет с не взаимопонимания. Очень понравилась педагог Ирина с каштанвыми волосами — в ней и простота и требовательность сочеталась одновременно. Ольга превосходно провела лекцию по заболеваниям ногтей. Виктория замечательно ставит руку. Девочки нужно трудиться и выполнять требования, не гнуть свою линию. И все будет хорошо. Ведь не они к вам пришли учиться, а вы в школу. Отдельное спасибо Виктории Вагифовне за обучающую программу и педагогов. Мне все нравится!</p>
                            <p class="reviews_bottom-text">Выпуск 09.12.2018 г.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</section>

<section class="section section-info-new section-info-new--vip section-info-new--course">
    <div class="container-fluid">
        <div class="section-info-new_content ">
            <div class="section-info-new-block ">
                <div class="section-info-new_wrap">
                    <div class="section-info-new_img">
                        <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/info-img1.jpg"
                             alt="img">

                    </div>
                    <div class="section-info-new_text">
                        <h3 class="section-info-new_title">запись моделей</h3>
                        <div class="vip-teachers_border"></div>
                        <div class="section-info-new_desc"><p>Хотите стать Моделью для наших мастеров и получить
                                стильный маникюр или педикюр совершенно бесплатно?</p>
                            <p>Приходите в школу «Золотая Ника» и подчеркните свою красоту и изящество красивыми
                                ноготками!</p>
                            <p>&nbsp;</p>
                        </div>
                        <div class="border-trap section-info-absl">
                            <p>Ждем ваших заявок по телефону&nbsp;—&nbsp;8-915-494-82-64</p>

                        </div>

                    </div>
                </div>
            </div>
            <div class="section-info-new-block">
                <div class="section-info-new_wrap section-info-new_wrap--reverse">
                    <div class="section-info-new_img">
                        <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/info-img2.jpg"
                             alt="img">
                    </div>
                    <div class="section-info-new_text">
                        <h3 class="section-info-new_title">информация для салонов</h3>
                        <div class="vip-teachers_border"></div>
                        <div class="section-info-new_desc"><p>Если вашему салону нужны Профессиональные мастера Маникюра
                                и Педикюра, высылайте свои Резюме для Соискательниц на нашу электронную почту</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p><strong><span style="color: #ff0000;">В заявке укажите:</span> Требования к мастерам, %,
                                    который будет им выплачиваться, Условия работы и территориальное Расположение вашего
                                    Салона. </strong></p>
                            <p>&nbsp;</p>
                        </div>
                        <div class="border-trap border-trap--reverse section-info-absl">
                            <p>info@shkola-nika.ru</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</section>

<?php get_template_part('./template-parts/sections/text'); ?>
<section class="section contacts contacts--vip" id="contacts">
    <div class="container-fluid">
        <h3 class="vip-title">Контакты</h3>

        <div class="contacts_content">
            <div id="map" class="contacts_map map"></div>
            <div class="contacts_text">

                <div class="contacts_desc ">

                    <p class="contacts-icon"><img
                                src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/clock.png"
                                alt="img"><strong>График работы:</strong></p>
                    <div>
                        <p>Понедельник — Пятница <strong> с 12:00 до 18:00</strong></p>
                        <p>Вторник, Среда, Четверг<strong> с 12:00 до 22:00</strong></p>
                        <p>Суббота — Воскресенье <strong>с 10:00 до 15:00</strong></p>
                    </div>
                    <p class="contacts-icon"><img
                                src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/phone.png"
                                alt="img"><strong>Телефон:</strong></p>
                    <div><p>8 (800) 333-83-19</p></div>
                    <p class="contacts-icon">
                        <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/marker.png"
                             alt="img"><strong>Адрес:&nbsp;</strong></p>
                    <div><p><span>г. Москва</span>, м. Красносельская или м. Бауманская,<br>
                            <span>ул. Ольховская, д. 22</span></p></div>
                    <p class="contacts-icon">
                        <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/04/email-red-1.png"
                             alt="img"><strong>E-mail:&nbsp;</strong></p>
                    <div><p><strong>info@shkola-nika<span>.ru</span> </strong></p></div>

                </div>

            </div>

        </div>
        <div class="contacts_desc contacts_desc--bottom">
            <p><strong>Как добраться:</strong></p>

            <p><span style="color: #ff0000;"><strong> М. Красносельская&nbsp;</strong></span>— выходите,идете вперед,в
                сторону
                церкви. Вдоль трамвайных путей до бензозаправки и поворачиваете налево вместе с путями. Метров через
                100 пешеходный переход. Переходите, перед Вами ворота и дверь. Улица Ольховская 22. Заходите в
                дверь, поворачиваете налево, через 30 м. справа подъезд . Этаж 3, вторая дверь по правой стороне
                «ЗОЛОТАЯ НИКА».</p>
            <p><span style="color: #ff0000;"><strong>М. Баумаская</strong> <span
                            style="color: #333333;">— в</span></span>ыходите из
                дверей направо на ул. Бауманская, переходим на противоположную сторону, идем вдоль трамвайных путей,
                нумерация на уменьшение, прямо мин 5-7 пешком, никуда не сворачиваем. Доходим до пересечения ул.
                Бауманская с ул. Ольховская, Т-образный перекрёсток, трамвайные пути поворачивают налево, и мы
                вместе с ними, проходим остановку, за ней коричневые ворота и дверь с вывеской Ольховская 22.Заходим
                в дверь, поворачиваем налево, через 30 м справа подъезд . Этаж 3, вторая дверь по правой стороне
                «Золотая Ника».</p>
            <p><strong>Будем рады Вас видеть! С уважением.</strong></p>
        </div>
    </div>
</section>


<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>


