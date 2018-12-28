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
<?php get_template_part('./template-parts/sections/hero'); ?>
<?php get_template_part('./template-parts/sections/schedule'); ?>
<section class="section new-form">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-from1.png" alt="img"
         class="new-form_bg new-form_bg--left">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-from2.png" alt="img"
         class="new-form_bg new-form_bg--right">
    <div class="container-fluid">
        <h3 class="title shadow-text--light">Запишись на обучение прямо сейчас</h3>
        <h5 class="sub-title shadow-text--light">Запишись на обучение прямо сейчас</h5>
        <div class="new-form_price">
            <?php if (get_field('course_old-price')): ?>
                <div class="new-form_old-price"><?php the_field('course_old-price') ?> руб</div>
            <?php endif; ?>
            <?php if (get_field('course_old-price')): ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/custom-arrow.png" alt="arrow">
            <?php endif; ?>
            <?php if (get_field('course_new-price')): ?>
                <div class="new-form_new-price"><?php the_field('course_new-price') ?> руб</div>
            <?php endif; ?>
        </div>
        <?php if (!empty($form['form_shortcode'])) {
            ?>
            <div class="action_form">
                <?php echo do_shortcode($form['form_shortcode']) ?>
            </div>
        <?php } ?>
    </div>
</section>
<?php get_template_part('./template-parts/sections/plus-section'); ?>
<?php get_template_part('./template-parts/sections/course-photo'); ?>
<?php get_template_part('./template-parts/sections/diplom'); ?>

<section class="section advantages">
    <div class="container-fluid">
        <div class="advantages_content ">
            <h3 class="title shadow-text--light">Наши преимущества:</h3>
            <ul class="advantages_list shadow-text--super-light">

                <li class="advantages_item">
                    <div class="advantages_icon-block">
                        <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/advantages-icon4.png"
                             alt="icon" class="advanyages_icon">
                    </div>
                    <div class="advantages_item-title">Диплом Установленного Образца!</div>
                    <div class="advantages_item-desc">
                        <p><strong>Наличие Диплома нашего Учебного Центра – залог того, что вы будете нарасхват в Лучших
                                Салонах России.</strong></p>
                    </div>
                </li>
                <li class="advantages_item">
                    <div class="advantages_icon-block">
                        <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/advantages-icon5.png"
                             alt="icon" class="advanyages_icon">
                    </div>
                    <div class="advantages_item-title">Опытные Преподаватели!</div>
                    <div class="advantages_item-desc">
                        <p><strong>Практикующие преподаватели с Опытом Работы 15 лет. Обучение ведется с учетом Модных
                                Тенденций 2018-2019 года.</strong></p>
                    </div>
                </li>
                <li class="advantages_item">
                    <div class="advantages_icon-block">
                        <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/advantages-icon1.png"
                             alt="icon" class="advanyages_icon">
                    </div>
                    <div class="advantages_item-title">Отсутствие Доплат!</div>
                    <div class="advantages_item-desc">
                        <p><strong>Оборудование, Материалы, Модели включены в Стоимость Курса. Вам не нужно ничего
                                покупать для обучения!</strong></p>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</section>
<section class="section about-school" id="about">
    <img src=" https://shkola-manikyura.com/wp-content/uploads/2018/08/gel-system.png" alt="img"
         class="about-school_bg">
    <div class="container-fluid">
        <h3 class="title shadow-text--light">О нашей школе</h3>
        <div class="about-school_content">
            <h3 class="title"></h3>
            <div class="about-school_video-block">
                <div class="about-school_video">
                    <!--                        <video poster="--><!--" id="video-about-school" muted playsinline-->
                    <!--                               preload="auto" loop="loop" controls="controls">-->
                    <!--                            <source type="video/mp4" src="--><!--">-->
                    <!--                            <source type="video/webm" src="--><!--">-->
                    <!--                        </video>-->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7Kp2g_KGPtE" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                </div>
                <div class="about-school_desc shadow-text--super-light">
                    <div class="about-school_desc-title">Учебный Центр «Золотая Ника»</div>
                    <div class="about-school_desc-text">
                        <p>Это 8 Учебных Аудиторий площадью 650 м², расположенных на Двух Этажах. В них проводятся
                            лекции и практические занятия для закрепления полученных знаний. Аудитории оснащены нужным
                            Оборудованием, Мультимедийными Системами, Наглядными Пособиями, поэтому вы сможете получить
                            профессию в Максимально Удобных Условиях.</p>
                        <p>Главная задача Учебного Центра состоит в обучении Маникюру, Педикюру и Наращиванию ногтей на
                            VIP-уровне, а главная цель школы — максимально полно и гармонично обучить Любого Желающего
                            бесценным знаниям в области Ногтевого Сервиса.</p>
                    </div>
                </div>
            </div>
            <div class="about-school_icon-block">
                <ul class="about-school_list">

                    <li class="about-school_item shadow-text--super-light">
                        <div class="about-school_item-block">
                            <img src=" https://shkola-manikyura.com/wp-content/uploads/2018/08/about-school-icon1.png"
                                 alt="icon" class="about-school_icon">
                        </div>
                        <p>2 этажа для Комфортного Обучения!</p>
                    </li>

                    <li class="about-school_item shadow-text--super-light">
                        <div class="about-school_item-block">
                            <img src=" https://shkola-manikyura.com/wp-content/uploads/2018/08/about-school-icon2.png"
                                 alt="icon" class="about-school_icon">
                        </div>
                        <p>650 м² — это площадь, которую занимает Школа!</p>
                    </li>

                    <li class="about-school_item shadow-text--super-light">
                        <div class="about-school_item-block">
                            <img src=" https://shkola-manikyura.com/wp-content/uploads/2018/08/about-school-icon3.png"
                                 alt="icon" class="about-school_icon">
                        </div>
                        <p>8 современных&nbsp; Лекционных залов!</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section program realy-study">
    <div class="container-fluid">
        <div class="program_content">
            <h3 class="title shadow-text--light">Школа «Золотая Ника»: мы реально учим!</h3>
            <ul class="program_list">

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/123.jpg)">
                        <div class="program_img-name"></div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">8 учебных аудиторий</div>
                        <p>Обучение ведется в оборудованных и уютных аудиториях. Учебный центр находится в 5 минутах от
                            м. Красносельская и м. Бауманская</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/111.jpg)">
                        <div class="program_img-name"></div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Высокий уровень мастерства за 156 часов</div>
                        <p>Наша программа – это целых 156 часов обучения, минимум теории и максимум практики. За один
                            курс обучения вы станете квалифицированным мастером и получите все знания и навыки для
                            дальнейшей успешной работы.</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/22.jpg)">
                        <div class="program_img-name"></div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Наше образование гарантирует Вам трудоустройство в любой салон!
                        </div>
                        <p>Получив диплом, вы сможете устроиться к одному из 300 наших партнеров или практиковать
                            индивидуально. Наши ученицы – одни из лучших мастеров, услуги которых востребованы в ведущих
                            салонах города.</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/33.jpg)">
                        <div class="program_img-name"></div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Диплом установленного образца о переквалификации</div>
                        <p>По окончанию курса вы получите диплом, который высоко котируется в лучших салонах красоты и
                            ногтевых студиях Москвы и Московской области. Обучим всех даже при отсутствии гражданства
                            России.</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/b-pSLEjRj-M.jpg)">
                        <div class="program_img-name"></div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Работа на результат</div>
                        <p>Наша программа – это 156 часов обучения, за которые вы научитесь всему. Вы сможете заниматься
                            в утренних, дневных или вечерних группах до тех пор, пока не достигнете желаемого уровня
                            мастерства.</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/1437377556-582.jpg)">
                        <div class="program_img-name"></div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Доход – от 60 000 рублей</div>
                        <p>Получив образование у нас, вы легко найдете высокооплачиваемую работу. Минимальная зарплата
                            мастера в Москве и области – 60000 рублей. Мы готовим специалистов профессионального уровня,
                            которые легко найдут работу даже без стажа.</p>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</section>
<section class="section program teachers">
    <div class="container-fluid">
        <div class="program_content">
            <h3 class="title shadow-text--light">Наши преподаватели:</h3>
            <ul class="program_list">

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/1.jpg)">
                        <div class="program_img-name"></div>

                    </div>

                    <div class="program_text">
                        <div class="program_text-bold">Шерри Магамедова</div>
                        <p><strong>Завуч школы «Золотая Ника»</strong>.</p>
                        <p><strong>Преподает курсы:</strong> Технологии современных трендов — NAil Art,&nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Тонкие линии в дизайне,
                            Мехенди</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/2.jpg)">
                        <div class="program_img-name"></div>

                    </div>

                    <div class="program_text">
                        <div class="program_text-bold">Ирина Васенина</div>
                        <p><strong>Преподаватель курсов:</strong>&nbsp; Аппаратные технологии,&nbsp; Японский маникюр,
                            Бразильский маникюр, Горячий маникюр</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/3.jpg)">
                        <div class="program_img-name"></div>

                    </div>

                    <div class="program_text">
                        <div class="program_text-bold">Ирина Лобода</div>
                        <p><strong>Преподаватель курсов:</strong>&nbsp; Арочное моделирование,&nbsp; &nbsp; ЗD и 4D
                            лепка гелем, Акварельная техника в Дизайне</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/4.jpg)">
                        <div class="program_img-name"></div>

                    </div>

                    <div class="program_text">
                        <div class="program_text-bold">Олеся Солодилова</div>
                        <p><strong>Преподаватель курсов:&nbsp; </strong>Аппаратный маникюр и педикюр,&nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            Укрепление ногтей биогелем</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/5.jpg)">
                        <div class="program_img-name"></div>

                    </div>

                    <div class="program_text">
                        <div class="program_text-bold">Елена Донская</div>
                        <p><strong>Преподаватель курсов:</strong> Китайская роспись,&nbsp; &nbsp; &nbsp; Основы
                            декоративной росписи, Аэрография</p>
                    </div>
                </li>

                <li class="program_item shadow-text--super-light">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/6.jpg)">
                        <div class="program_img-name"></div>

                    </div>

                    <div class="program_text">
                        <div class="program_text-bold">Любовь Светличная</div>
                        <p><strong>Преподаватель курсов:</strong> Японский маникюр, Бразильский маникюр, Горячий
                            маникюр,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SPA-уход за кожей рук и ног</p>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <img class="img-bg" src="<?php echo get_template_directory_uri() ?>/assets/images/img-teach.png" alt="img">
</section>
<section class="section numbers"
         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/numbers-bg.jpg)">
    <div class="container-fluid">
        <div class="numbers_content shadow-text">
            <p>О нас в цифрах:</p>
        </div>
        <ul class="numbers_list">
            <li class="numbers_item">
                <div class="numbers_count js-counter shadow-text">
                    2017
                </div>
                <div class="numbers_desc shadow-text">
                    <p>В 2017 году наш учебный центр признан Самым Большим в Москве!</p>
                </div>
            </li>
            <li class="numbers_item">
                <div class="numbers_count js-counter shadow-text">
                    22 857
                </div>
                <div class="numbers_desc shadow-text">
                    <p>Выпускников получили Диплом учебного центра!</p>
                </div>
            </li>
            <li class="numbers_item">
                <div class="numbers_count js-counter shadow-text">
                    115
                </div>
                <div class="numbers_desc shadow-text">
                    <p>Мастеров открыли Собственные салоны!</p>
                </div>
            </li>
            <li class="numbers_item">
                <div class="numbers_count js-counter shadow-text">
                    70%
                </div>
                <div class="numbers_desc shadow-text">
                    <p>Наших выпускников работают в салонах Москвы и Московской области!</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="section section reviews" id="reviews">
    <div class="container-fluid">
        <div class="reviews_content">
            <h3 class="title shadow-text--light">Отзывы</h3>
            <div class="reviews_slider js-review-slider">
                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/avatar.png"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Бурцева Анна.</div>
                                <p>Выпуск 10.08.2018 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Обучалась в школе «Золотая Ника»- огромное спасибо всем преподавателям,
                                очень терпеливые, дружелюбные, объяснят по несколько раз если что-то не
                                понятно! Тепло, уютно, дружелюбно!</p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Ноготки" </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/1212.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Вышковец Олеся.</div>
                                <p>Выпуск 05.09.2018 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Обучаюсь в школе «Золотая ника». Я очень рада, что попала именно в эту
                                школу и, то как преподаватели преподносят информацию. Спасибо им за
                                терпение и любовь!!!<img draggable="false" class="emoji" alt="🙏"
                                                         src="https://s.w.org/images/core/emoji/11/svg/1f64f.svg">
                            </p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "LA SUPREMA" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/11.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Кожедуб Анна.</div>
                                <p>Выпуск 15.07.2016 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Всем доброго времени суток.&nbsp;&nbsp; Хочу выразить благодарность школе
                                «Золотая Ника» и отдельное спасибо учителям за их труд и терпение! Школа
                                превосходная, учителя замечательные, всему научили.</p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Сплетница" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/22.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Смольникова Светлана.</div>
                                <p>Выпуск 06.07.2017 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Хочу поблагодарить школу Золотая Ника за возможность осуществить мечту и
                                стать Вип мастером ногтевого сервиса! Спасибо вам преподаватели вы
                                волшебницы и феи !!! Смольникова Светлана!</p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Ноготки" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/33.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Кокорева Виктория.</div>
                                <p>Выпуск 05.07.2018 г.</p>
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
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Леал-Люкс" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/99.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Алиева Патимат.</div>
                                <p>Выпуск 08.07.2018 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Добрый день! Я Алиева Патимат ! Учусь в школе «Золотая Ника» мне так
                                нравится здесь учиться, преподаватели все такие милые хорошие, я все
                                сдала, хочу на выпуск но не хочу покидать моих преподавателей, огромное
                                спасибо им большое !</p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Свой Почерк" </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/55.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Похоменко Надежда.</div>
                                <p>Выпуск 02.02.2018 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Отличная школа！Рекомендую всем！Учат здесь оооочень хорошо！Преподаватели
                                находят подход ко всем ученицам！И смотрят за каждой из нас, уделяют
                                внимание всем！Мы с радостью посещаем «Золотую Нику»</p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Luck" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/66.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Орчунова Динара.</div>
                                <p>Выпуск 15.05.2018 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Супер Школа вежливые учителя учить все чётко и график свободный<img
                                        draggable="false" class="emoji" alt="💋"
                                        src="https://s.w.org/images/core/emoji/11/svg/1f48b.svg"> люблю
                                и уважаю только в перед Золотая Ника. Ученица Орчунова Динара<img
                                        draggable="false" class="emoji" alt="💅"
                                        src="https://s.w.org/images/core/emoji/11/svg/1f485.svg"></p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Сплетница" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/77.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Кокорина Эльвира .</div>
                                <p>Выпуск 01.11.2017 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Добрый день!!!долго выбирала какую же школу выбрать по обучению ногтевого
                                сервиса и выбрала Золотую Нику, и ни капельки не сожалела об этом! Все
                                преподаватели профессионалы своего дела! Все покажут все расскажут!!,
                                всегда на позитиве!!!</p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "La beaute" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/88.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Сагдулаева Диана.</div>
                                <p>Выпуск 09.12.2017 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Всем добрый день. Хочу поделиться своими впечатлениями об обучении в
                                школе маникюра Золотая Ника. Обучаюсь уже третью неделю, меня все
                                устраивает и график, и преподавание, и обстановка. Доходчиво и детально
                                все объясняют. Все расходные материалы предоставляют, лекции, отработки.
                                Все замечательно, всем рекомендую. Ника лучше всех！</p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Chick-Chirick" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/44.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Колымагина Елисавета.</div>
                                <p>Выпуск 15.02.2018 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Учусь в школе маникюра Золотая Ника. Школа хорошая. Добрые учителя.
                                Объясняют все понятно. Очень внимательны. Помогают освоить все нужные
                                техники. А самое главное приятная рабочая атмосфера. Очень рада что
                                пришла именно в эту школу. С уважением, ученица Золотой Ники, Колымагина
                                Елисавета.</p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Шок Шоколад" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/1010.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Минченко Ольга.</div>
                                <p>Выпуск 06.07.2017 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Добрый день!!! Меня зовут Минченко Ольга, я прохожу обучение в школе
                                &nbsp;«Золотая Ника» Курсы на VIP-Мастера. Я очень довольна и очень рада
                                что выбрала эту школу. Преподаватели очень внимательны, к каждой ученице
                                индивидуальный поход. Что не мало важно, особенно для начинающих.</p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "СВОЙ ПОЧЕРК" </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="reviews_wrapp shadow-text--super-light"
                     style="width: 100%; display: inline-block;">
                    <div class="reviews_block">
                        <div class="reviews_inform">
                            <div class="reviews_avatar">
                                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/1111.jpg"
                                     alt="" class="reviews_img">
                            </div>
                            <div class="reviews_name">
                                <div>Мирошниченко Ирина.</div>
                                <p>Выпуск 04.08.2018 г.</p>
                            </div>
                        </div>
                        <div class="reviews_desc">
                            <p>Всем привет. Школа «Золотая Ника» самая лучшая школа на свете! Я очень
                                довольна! Индивидуальный подход к каждой ученице. Учителя большие
                                умнички! Всему нас научили! За это огромное им спасибо! Мы теперь
                                мастера! Ура! <img draggable="false" class="emoji" alt="😊"
                                                   src="https://s.w.org/images/core/emoji/11/svg/1f60a.svg"><img
                                        draggable="false" class="emoji" alt="👌🏻"
                                        src="https://s.w.org/images/core/emoji/11/svg/1f44c-1f3fb.svg">
                            </p>
                            <div class="reviews_link-block">
                                <p> Работает в салоне "Merrym" </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>
<section class="section section-info">
    <div class="section-info_content ">
        <div class="section-info_left section-info-block shadow-text--super-light">
            <div class="section-info_wrap-left">
                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/561-1.png" alt="img">
                <div class="section-info_text">
                    <h3 class="section-info_title">запись <br> моделей</h3>
                    <div class="section-info_desc"><p>Хотите стать Моделью для наших мастеров и получить стильный
                            маникюр или педикюр совершенно бесплатно?</p>
                        <p>Приходите в школу «Золотая Ника» и подчеркните свою красоту и изящество красивыми
                            ноготками!</p>
                        <p class="shadow-text"><strong>Ждем ваших заявок по телефону</strong>&nbsp;—&nbsp;<strong>8-915-494-82-64</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-info_right section-info-block">
            <div class="section-info_wrap-right">
                <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/81.png" alt="img">
                <div class="section-info_text">
                    <h3 class="section-info_title">информация <br> для салонов</h3>
                    <div class="section-info_desc"><p>Если вашему салону нужны Профессиональные мастера Маникюра и
                            Педикюра, высылайте свои Резюме для Соискательниц на нашу электронную почту —&nbsp;<strong
                                    class="shadow-text">info+270985@shkola-nika.ru</strong></p>
                        <p class="shadow-text"><strong><span style="color: #ff0000;">В заявке укажите</span>: Требования
                                к мастерам, %, который будет им выплачиваться, Условия работы и территориальное
                                Расположение вашего Салона. </strong></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
        </div>


    </div>
</section>
<section class="section photo">
    <div class="container-fluid">
        <div class="photo_content">
            <h3 class="title shadow-text--light">Фотогалерея:</h3>
            <div class="photo_slider js-photo-slider ">


                <div class="photo_slider-elem" style="width: 100%; display: inline-block;">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://shkola-manikyura.com/wp-content/uploads/2018/09/m6.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://shkola-manikyura.com/wp-content/uploads/2018/09/m6.jpg"
                                    class="photo_img" alt="">
                        </a>

                    </div>
                </div>

                <div class="photo_slider-elem" style="width: 100%; display: inline-block;">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://shkola-manikyura.com/wp-content/uploads/2018/09/m7.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://shkola-manikyura.com/wp-content/uploads/2018/09/m7.jpg"
                                    class="photo_img" alt="">
                        </a>

                    </div>
                </div>

                <div class="photo_slider-elem" style="width: 100%; display: inline-block;">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://shkola-manikyura.com/wp-content/uploads/2018/09/m12.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://shkola-manikyura.com/wp-content/uploads/2018/09/m12.jpg"
                                    class="photo_img" alt="">
                        </a>

                    </div>
                </div>

                <div class="photo_slider-elem" style="width: 100%; display: inline-block;">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://shkola-manikyura.com/wp-content/uploads/2018/09/maxresdefault.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://shkola-manikyura.com/wp-content/uploads/2018/09/maxresdefault.jpg"
                                    class="photo_img" alt="">
                        </a>

                    </div>
                </div>

                <div class="photo_slider-elem" style="width: 100%; display: inline-block;">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://shkola-manikyura.com/wp-content/uploads/2018/09/original_53afc1cb40c0885c1a8b456c_58468dcb75486.jpg"
                           class="photo_slider-link" tabindex="-1"> <img
                                    src="https://shkola-manikyura.com/wp-content/uploads/2018/09/original_53afc1cb40c0885c1a8b456c_58468dcb75486.jpg"
                                    class="photo_img" alt="">
                        </a>

                    </div>
                </div>

                <div class="photo_slider-elem" style="width: 100%; display: inline-block;">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://shkola-manikyura.com/wp-content/uploads/2018/09/00000000000000000000000000000000000000000125412.jpg"
                           class="photo_slider-link" tabindex="0"> <img
                                    src="https://shkola-manikyura.com/wp-content/uploads/2018/09/00000000000000000000000000000000000000000125412.jpg"
                                    class="photo_img" alt="">
                        </a>

                    </div>
                </div>

                <div class="photo_slider-elem" style="width: 100%; display: inline-block;">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://shkola-manikyura.com/wp-content/uploads/2018/09/m2.jpg"
                           class="photo_slider-link" tabindex="0"> <img
                                    src="https://shkola-manikyura.com/wp-content/uploads/2018/09/m2.jpg"
                                    class="photo_img" alt="">
                        </a>

                    </div>
                </div>


                <div class="photo_slider-elem" style="width: 100%; display: inline-block;">
                    <div class="photo_slider-wrapp js-pop-up-img">
                        <a href="https://shkola-manikyura.com/wp-content/uploads/2018/09/m4.jpg"
                           class="photo_slider-link" tabindex="0"> <img
                                    src="https://shkola-manikyura.com/wp-content/uploads/2018/09/m4.jpg"
                                    class="photo_img" alt="">
                        </a>

                    </div>
                </div>


            </div>
        </div>
    </div>

</section>
<section class="section contacts" id="contacts">
    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/contacts-bg.png" alt="img" class="contacts_bg">
    <div class="container-fluid">
        <div class="contacts_content">
            <div id="map" class="contacts_map map"></div>
            <div class="contacts_text">
                <h3 class="title shadow-text--light">Контакты</h3>
                <div class="contacts_desc shadow-text--super-light">
                    <p><strong>График работы:</strong></p>
                    <p><strong>Понедельник — Пятница с <span style="color: #ff0000;">12:00 до 18:00</span></strong></p>
                    <p><strong>Вторник, Среда, Четверг с <span style="color: #ff0000;">12:00 до 22:00</span></strong>
                    </p>
                    <p><strong>Суббота — Воскресенье с <span style="color: #ff0000;">10:00 до 15:00</span></strong></p>
                    <p><strong>Телефон:</strong>&nbsp;+7 (495) 181-11-21</p>
                    <p><strong>Адрес:&nbsp;</strong>г. Москва, <span style="color: #ff0000;">м. Красносельская</span>
                        или <span style="color: #ff0000;">м. Бауманская</span>, ул. Ольховская, д. 22</p>
                    <p><strong>Как добраться:</strong></p>
                    <p><span style="color: #ff0000;"> М. Красносельская&nbsp;</span>— выходите,идете вперед,в сторону
                        церкви. Вдоль трамвайных путей до бензозаправки и поворачиваете налево вместе с путями. Метров
                        через 100 пешеходный переход. Переходите, перед Вами ворота и дверь. Улица Ольховская 22.
                        Заходите в дверь, поворачиваете налево, через 30 м. справа подъезд . Этаж 3, вторая дверь по
                        правой стороне «ЗОЛОТАЯ НИКА».</p>
                    <p><span style="color: #ff0000;">М. Баумаская <span style="color: #333333;">— в</span></span>ыходите
                        из дверей направо на ул. Бауманская, переходим на противоположную сторону, идем вдоль трамвайных
                        путей, нумерация на уменьшение, прямо мин 5-7 пешком, никуда не сворачиваем. Доходим до
                        пересечения ул. Бауманская с ул. Ольховская, Т-образный перекрёсток, трамвайные пути
                        поворачивают налево, и мы вместе с ними, проходим остановку, за ней коричневые ворота и дверь с
                        вывеской Ольховская 22.Заходим в дверь, поворачиваем налево, через 30 м справа подъезд . Этаж 3,
                        вторая дверь по правой стороне «Золотая Ника».</p>
                    <p>Будем рады Вас видеть! С уважением.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>


