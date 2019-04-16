<?php
/**
 * Template Name: Home Page
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>

<section class="section hero hero--vip hero--vip--home" id="hero">
    <div class="hero-vip-bg" style="background-image: url(<?php the_field('hero_img-bg-home') ?>)">
        <div class="hero-vip-bg-abs">
            <img class="img-bg-vip" src="<?php echo get_template_directory_uri() ?>/assets/images/vip-bg.png" alt="img">
        </div>
        <div class="hero-vip-red border-trap"></div>
        <div class="container-fluid">
            <div class="hero_content">
                <?php if (get_field('action-data-hero-home')): ?>
                    <div class="hero--vip_action">
                        <?php the_field('action-data-hero-home') ?>
                    </div>
                <?php endif; ?>
                <?php if (get_field('action-full-hero-home')): ?>
                    <div class="hero--vip_sub">
                        <?php the_field('action-full-hero-home') ?>
                    </div>
                <?php endif; ?>
                <?php if (get_field('action-name-hero-home')): ?>
                    <div class="hero_title"> <?php the_field('action-name-hero-home') ?></div>
                <?php endif; ?>
                <?php if (get_field('action-current-price-hero-home')): ?>
                    <div class="hero--vip_price">
                        <div class="price_yellow">
                            <span><?php the_field('action-current-price-hero-home') ?>

                        </div>
                    </div>
                <?php endif; ?>
                <div class="sub-section_btn-block">
                    <a href="#sing-up"
                       class="sub-section_link button button-vip js-pop-up">
                        <span class="btn-yallow"></span>
                        Записаться на курс</a>
                </div>

            </div>

        </div>
    </div>
</section>
<?php get_template_part('./template-parts/sections/courses-home'); ?>
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
                    <div class="about-school_desc-title">Учебный центр «Золотая Ника»</div>
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


        </div>
    </div>


</section>
<?php get_template_part('./template-parts/sections/photo'); ?>

<section class="section course-advantages"
         style="background-image: url(https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/course-bg.jpg)">
    <div class="container-fluid">
        <ul>
            <li>
                <div class="course-advantages_title">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon1.png"
                         alt="img">
                    <span>650</span>
                </div>
                <div class="course-advantages_desc">
                    <p>кв. м площадь,<br> которую занимает<br> школа</p>
                </div>
            </li>
            <li>
                <div class="course-advantages_title">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon2.png"
                         alt="img"> <span>8</span>
                </div>
                <div class="course-advantages_desc">
                    <p>просторных и<br> оборудованных <br>аудиторий</p>
                </div>
            </li>
            <li>
                <div class="course-advantages_title">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon3.png"
                         alt="img"> <span>2</span>
                </div>
                <div class="course-advantages_desc">
                    <p>этажа в 3х этажном<br> здании для<br> комфортного обучения</p>
                </div>
            </li>

        </ul>
    </div>
</section>
<section class="section we-study-vip">
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
                        <p>Приглашаем на занятия в уютные аудитории, оборудованные всем необходимым. Наша школа удобно
                            расположена в пешей доступности от станций метро Бауманская и Красносельская. В наших
                            группах – по 5-6 человек, поэтому никто не останется без внимания!</p>
                    </div>
                    <div class="vip-teachers_border"></div>

                    <div class="we-study-vip_first-block">
                        <h3>156 часов обучения</h3>
                        <p>Всего за один курс вы станете высококлассным мастером ногтевого сервиса и получите
                            креативную, а главное востребованную профессию. 90% занятий – это практика с обязательным
                            закреплением навыков на моделях.</p>

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
                        <h3>Гарантированное трудоустройство</h3>
                        <p>Среди наших партнеров – 400 салонов красоты, каждый из которых будет рад видеть вас своим
                            главным специалистом. Мы даем комплексное образование, поэтому вы будете нарасхват!</p>
                    </div>
                    <div class="vip-teachers_border"></div>

                    <div class="we-study-vip_first-block">
                        <h3>Диплом о квалификации</h3>
                        <p>Мы обучаем новичков и уже опытных мастеров, выдавая дипломы установленного образца о
                            переквалификации. Наш диплом станет трамплином в лучшие салоны и косметологические центры
                            Москвы и области. Наличие гражданства России необязательно!</p>

                    </div>
                </div>
                <img src="   https://www.shkola-nika.ru/wp-content/uploads/2019/02/img2.png" alt="img"
                     class="we-realy-study-bg-img">
            </li>
            <li class="we-study-vip_item">
                <div class="we-study-vip_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/shutterstock_1056423641.jpg" alt="img">
                </div>
                <div class="we-study-vip_content">
                    <div class="we-study-vip_first-block">
                        <h3>полное освоение курса</h3>
                        <p>Мы работаем на результат, поэтому каждый час из 156 часов обучения по курсу посвящен новым
                            знаниям и навыкам. Занимайтесь в утренних, дневных и вечерних группах, пока не достигнете
                            нужного уровня мастерства.</p>
                    </div>
                    <div class="vip-teachers_border"></div>

                    <div class="we-study-vip_first-block">
                        <h3>Финансовая независимость</h3>
                        <p>Образование в школе «Золотая Ника» — это возможность стать профессиональным мастером
                            ногтевого сервиса и зарабатывать от 60000 рублей уже после окончания обучения. Работа найдет
                            вас сама!</p>

                    </div>
                </div>
                <img src="   https://www.shkola-nika.ru/wp-content/uploads/2019/02/img3.png" alt="img"
                     class="we-realy-study-bg-img">
            </li>
        </ul>
    </div>
</section>
<section class="section licenses">
    <div class="container-fluid">
        <div class="licenses_images">
            <div class="licenses_single-img js-pop-up-img">
                <a href="https://www.shkola-nika.ru/wp-content/uploads/2019/02/5115.jpg"> <img
                            src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/5115.jpg" alt="img"></a>

            </div>
            <div class="licenses_single-img js-pop-up-img">
                <a href="https://www.shkola-nika.ru/wp-content/uploads/2019/02/5222.jpg"> <img
                            src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/5222.jpg" alt="img"></a>

            </div>
            <div class="licenses_single-img js-pop-up-img">
                <a href="https://www.shkola-nika.ru/wp-content/uploads/2019/02/533.jpg"> <img
                            src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/533.jpg" alt="img"></a>

            </div>

        </div>
    </div>
</section>
<section class="section vip-teachers">
    <div class="container-fluid">
        <h3 class="vip-title">Наши преподаватели</h3>
        <ul class="vip-teachers_list">
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block"
                     style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/12/12.jpg)">
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
                <div class="vip-teachers_img-block"
                     style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/12/543.jpg)">
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
                <div class="vip-teachers_img-block"
                     style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/12/563.jpg)">
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
                <div class="vip-teachers_img-block"
                     style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/12/36485.jpg)">
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
        </ul>
    </div>
</section>
<?php $action2 = get_option('form-course'); ?>

<section class="section unique-vip"
         style="background-image: url(https://www.shkola-nika.ru/wp-content/uploads/2019/02/91651.jpg)">
    <div class="container-fluid">
        <div class="unique-vip_content">
            <div class="unique-vip_title">
                <h3>Уникальное предложение!</h3>
                <p>Если после окончания обучения Вы не освоили материал</p>
                <h3>Мы вернем деньги!</h3>
            </div>
            <div class="unique-vip_form">
                <div class="unique-vip_form-title">
                    <p>Запишитесь на курс «VIP - мастер универсал» прямо сейчас</p>
                    <div class="action_form action--new-form">
                        <?php echo do_shortcode($action2['form_shortcode2']); ?>
                    </div>
                    <div class="action_bottom-text">
                        <p> *Внимание! Нажимая на кнопку, вы соглашаетесь с
                            <a href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf"
                               target="_blank">политикой обработки персональных данных.</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('./template-parts/sections/photo2'); ?>

<?php get_template_part('./template-parts/sections/grafic'); ?>
<section class="section advantages-vip-page">
    <div class="border-trap border-trap--reverse">
        <div class="advantages-vip_title">
            Наши преимущества
        </div>
    </div>
    <div class="container-fluid">
        <ul class="vip-advantages">
            <li class="vip-advantages_item">
                <div class="vip-advantages_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/iconad12-1.png" alt="img">
                </div>
                <h4 class="vip-advantages_title">Никаких доплат</h4>
                <div class="vip-advantages_desc">
                    <p>Вы платите только за курс! Все остальное – инструменты, модели, расходные материалы –
                        предоставляется бесплатно!</p>
                </div>
            </li>
            <li class="vip-advantages_item">
                <div class="vip-advantages_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/iconad21.png" alt="img">
                </div>
                <h4 class="vip-advantages_title">Удобный график</h4>
                <div class="vip-advantages_desc">
                    <p>Мы набираем дневные, вечерние и выходные группы. Возможно возобновление занятий при пропусках с
                        того места, где закончилось обучение.</p>
                </div>
            </li>
            <li class="vip-advantages_item">
                <div class="vip-advantages_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/iconad31.png" alt="img">
                </div>
                <h4 class="vip-advantages_title">Диплом</h4>
                <div class="vip-advantages_desc">
                    <p>Диплом установленного образца, выданный нашей школой, станет гарантией того, что ваши знания и
                        навыки будут востребованы в лучших салонах России.</p>
                </div>
            </li>
            <li class="vip-advantages_item">
                <div class="vip-advantages_img-block">
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/icon-ad1-1-1.png" alt="img">
                </div>
                <h4 class="vip-advantages_title">Квалифицированные преподаватели</h4>
                <div class="vip-advantages_desc">
                    <p>За ваше обучение отвечают практикующие преподаватели с 15-летним опытом работы! Они умело
                        совмещают в своей работе знания и навыки и модные тенденции сезона 2018-2019!</p>
                </div>
            </li>

        </ul>
        <div class="advantages-vip-img">
            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/women-png.png" alt="img">

        </div>
    </div>
</section>
<section class="section section-info-new section-info-new--vip">
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
                            <p>info@shkola-nika<span>.ru</span></p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
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

            </div>
        </div>


    </div>
</section>


<?php get_template_part('./template-parts/sections/text'); ?>
<section class="section contacts contacts--vip" id="contacts">
    <div class="container-fluid" itemscope="" itemtype="http://schema.org/Organization">

        <h3 class="vip-title">Контакты</h3>

        <div class="contacts_content">
            <div id="map" class="contacts_map map">
            </div>
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
                    <p itemprop="telephone" class="contacts-icon"><img
                                src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/phone.png"
                                alt="img"><strong>Телефон:</strong></p>
                    <div><p>8 (800) 333-83-19</p></div>
                    <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="contacts-icon">
                        <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/marker.png"
                             alt="img"><strong>Адрес:&nbsp;</strong></p>
                    <div><p><span itemprop="addressLocality">г. Москва</span>, м. Красносельская или м. Бауманская,<br>
                            <span itemprop="streetAddress">ул. Ольховская, д. 22</span></p></div>
                    <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="contacts-icon">
                        <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/04/email-red-1.png"
                             alt="img"><strong>E-mail:&nbsp;</strong></p>
                    <div><p><strong>info@shkola-nika<span>.ru</span> </strong> </p></div>

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
<script>
    var mapConfig = {
        maps: [{
            id: "map",
            markers: [{
                center: [55.776846, 37.672528]
            }],
            mapCenter: [55.776846, 37.672528],
            icon: 'https://www.shkola-nika.ru/wp-content/uploads/2018/08/marker-1.png',
            zoom: 15,

        }]

    }
</script>

<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>


