<?php
/**
 * Template Name: Page VIP
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>




<?php get_template_part('./template-parts/sections/hero-vip'); ?>

<section class="section program program--vip" id="program">

    <div class="container-fluid">
        <div class="program_content">
            <h3 class="vip-title ">Что входит в курс обучения</h3>

            <ul class="program_list ">
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course1.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="border-trap">
                            <div class="program-vip-child-border">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stopwatch1.png"
                                     alt="img"><span>50 часов</span>
                            </div>
                        </div>

                    </div>
                    <div class="program_text">
                        <div>Маникюр и педикюр</div>
                        <p class="program_text-desc">Во время нашего курса вы познакомитесь с видами маникюра и
                            педикюра, типами покрытий для ногтей, вариантами их дизайна. Максимум знаний за минимум
                            времени! </p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup0" class="js-pop-up  program_link">Подробнее</a>
                    </div>


                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup0">

                            <p><em>В рамках курса вы научитесь делать женский и мужской маникюр и педикюр, придавая
                                    ногтевой пластине правильную форму, бережно обрабатывая кутикулу, ногти и боковые
                                    валики. </em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course2.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="border-trap">
                            <div class="program-vip-child-border">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stopwatch1.png"
                                     alt="img"><span>25 часов</span>
                            </div>
                        </div>

                    </div>
                    <div class="program_text">
                        <div>Наращивание ногтей</div>
                        <p class="program_text-desc">Курсы наращивания ногтей – это возможность научиться правильной
                            выкладки геля, подбирать форму и длину ногтей, правильно готовить их к процедуре
                            моделирования и
                            коррекции</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup1" class="js-pop-up  program_link">Подробнее</a>
                    </div>


                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup1">

                            <p><em>Во время практических занятий вы узнаете об основах наращивания ногтей гелем на форму
                                    и типсы, правилах построения искусственных ногтей, технологии коррекции ногтей и их
                                    моделирования. Мы расскажем о типичных ошибках в наращивании, чтобы вы могли
                                    избежать их в своей работе.</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course3.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="border-trap">
                            <div class="program-vip-child-border">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stopwatch1.png"
                                     alt="img"><span>20 часов</span>
                            </div>
                        </div>

                    </div>
                    <div class="program_text">
                        <div>Покрытие ногтей</div>
                        <p class="program_text-desc">Покрытие ногтей выполняется после их тщательной подготовки. За курс
                            вы научитесь правильно наносить гель-лаки и Shellac, снимать покрытия и ухаживать за
                            ногтями.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup2" class="js-pop-up  program_link">Подробнее</a>
                    </div>


                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup2">

                            <p><em>Покрытие ногтей гель-лаками и другими составами – это целое искусство. Важно сделать
                                    это красиво и аккуратно, чтобы ноги украшали женщину и подчеркивали ее изюминку. Мы
                                    научим вас правильно выбирать гель-лаки, правильно наносить их и украшать разными
                                    способами, сохранив ногтевые пластины здоровыми.</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course4.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="border-trap">
                            <div class="program-vip-child-border">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stopwatch1.png"
                                     alt="img"><span>20 часов</span>
                            </div>
                        </div>

                    </div>
                    <div class="program_text">
                        <div>Аппаратные технологии</div>
                        <p class="program_text-desc">Для создания аппаратного маникюра и педикюра используются
                            современные фрезеры. Они бережно ухаживают за ногтями, делая процесс обработки
                            безболезненным и быстрым.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup3" class="js-pop-up  program_link">Подробнее</a>
                    </div>


                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup3">

                            <p><em>Аппаратные технологии идеально подходят для обработки ломких, проблемных и наращенных
                                    ногтей. Этот способ абсолютно безопасен и исключает повреждения кожи или ногтевой
                                    пластины. Аппаратный маникюр и педикюр – это находка для тех, кто не желает тратить
                                    много времени на уход за ногтями.</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course5.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="border-trap">
                            <div class="program-vip-child-border">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stopwatch1.png"
                                     alt="img"><span>8 часов</span>
                            </div>
                        </div>

                    </div>
                    <div class="program_text">
                        <div>SPA-процедуры</div>
                        <p class="program_text-desc">За руками, как и за ногтями, нужен уход с использованием
                            профессиональных средств. Вы научитесь современным SPA-процедурам для омоложения, увлажнения
                            кожи рук.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup4" class="js-pop-up  program_link">Подробнее</a>
                    </div>
                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup4">

                            <p><em>За руками, как и за ногтями, нужен уход с использованием профессиональных средств. Вы
                                    научитесь современным SPA-процедурам для омоложения, увлажнения кожи рук.</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course6.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="border-trap">
                            <div class="program-vip-child-border">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stopwatch1.png"
                                     alt="img"><span>20 часов</span>
                            </div>
                        </div>

                    </div>
                    <div class="program_text">
                        <div>Дизайн ногтей</div>
                        <p class="program_text-desc">Во время занятий вы научитесь выполнять дизайны с блестками, со
                            стразами, дизайн акриловой краской, дизайн на матовом покрытии, различные наклейки, дизайн с
                            бульенками, классический френч, дизайн профессиональной иглой по мокрому лаку и дизайн
                            стемпинг. Обработка на тренировачных картах.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup5" class="js-pop-up  program_link">Подробнее</a>
                    </div>
                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup5">

                            <p><em>Во время практических занятий вы научитесь создавать на ногтях самые красивые дизайны
                                    с использованием дополнительных элементов – страз, акриловой пудры, гель-пасты. Мы
                                    расскажем вам об уникальных секретах и хитростях создания шедевров на ногтях, о
                                    постановке руки для обработки простых и сложных линий.</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course7.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="border-trap">
                            <div class="program-vip-child-border">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stopwatch1.png"
                                     alt="img"><span>7 часов</span>
                            </div>
                        </div>

                    </div>
                    <div class="program_text">
                        <div>Заболевания ногтей</div>
                        <p class="program_text-desc">Мы расскажем, как работать с проблемными ногтями, как ухаживать за
                            ними, чтобы избежать грибковых и других заболеваний, которые возникают на ногтевых
                            пластинах.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup6" class="js-pop-up  program_link">Подробнее</a>
                    </div>
                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup6">

                            <p><em>Заболевания ногтей могут возникнуть по самым разным причинам – неправильный уход,
                                    травмы, нездоровое питание, инфекции и кожные болезни. За ногтями нужен
                                    профессиональный уход. За время курса вы узнаете о самых популярных болезнях ногтей,
                                    узнаете о способах ухода за ними</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item program_item--fix">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course8.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="border-trap">
                            <div class="program-vip-child-border">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stopwatch1.png"
                                     alt="img"><span>6 часов</span>
                            </div>
                        </div>

                    </div>
                    <div class="program_text">
                        <div>Дезинфекция и подготовка рабочего места</div>
                        <p class="program_text-desc">Мастер маникюра должен принимать клиентов на аккуратном и
                            безопасном рабочем месте, постоянно дезинфицировать, стерилизовать инструменты и рабочие
                            поверхности.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup7" class="js-pop-up  program_link">Подробнее</a>
                    </div>
                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup7">

                            <p><em>Рабочее место мастера маникюра должно быть чистым, аккуратным и эргономичным. Очень
                                    важна дезинфекция рабочего места и различная стерилизация инструментов. Все это
                                    направлено на то, чтобы сделать услуги маникюра и педикюра безопасными для
                                    клиентов.</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/li-img.jpg" alt="img">

                </li>

            </ul>
        </div>
    </div>
    <img class="bg-img-section1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img-section1.png"
         alt="img">
    <img class="bg-img-section2" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img-section2.png"
         alt="img">
</section>
<?php get_template_part('./template-parts/sections/action'); ?>
<section class="section new-vip-action">
    <div class="container-fluid">
        <div class="new-vip-action-content">
            <p><span class="text-yellow">Двойная выгода!</span><br>
                Запишись на <span class="text-red">«VIP – Мастер Универсал»</span> <br>
                и пройди <span class="text-yellow">21 дополнительный курс</span> школы <br>
                <span class="text-red">со скидкой 30%*</span></p>

            <div class="text-gray">* Предложение только для выпускников школы “Золотая ника” по курсу VIP – Мастер
                Универсал
            </div>
        </div>
        <ul class="new-vip-action_list">
            <li class="new-vip-action_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/vip-icon1.png" alt="img">
                <p>Бесплатные<br>
                    материалы<br>
                    для обучения</p>
            </li>
            <li class="new-vip-action_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/vip-icon2.png" alt="img">
                <p>21 курс<br>
                    повышения<br>
                    мастерства</p>
            </li>
            <li class="new-vip-action_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/vip-icon3.png" alt="img">
                <p>Лучшие<br>
                    преподоватли<br>
                    в Nail инлустрии</p>
            </li>
            <li class="new-vip-action_item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/vip-icon4.png" alt="img">
                <p>Высокое<br>
                    качество<br>
                    обучения</p>
            </li>
        </ul>
        <div class="sub-section_btn-block">
            <a href="#form-page-vip" class="sub-section_link button button-vip js-pop-up">
                <span class="btn-yallow"></span>
                Записаться на курс</a>
        </div>
    </div>
</section>

<?php get_template_part('./template-parts/sections/licenses'); ?>

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
                    <div class="about-school_desc-title">«Золотая Ника» - это</div>
                    <div class="about-school_desc-text">
                        <p> 8 Учебных Аудиторий площадью 650 м², расположенных на Двух Этажах. В них проводятся
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
                        <h3 class="about-block-top-title">Выдаем <br> диплом!</h3>
                        <h3 class="about-block-title">Мастер-универсал
                            ногтевого сервиса!</h3>
                        <ul>
                            <li>— После обучения Вы получите диплом
                                - Мастер-универсал ногтевого сервиса
                            </li>
                            <li>— Диплом утвержден Департаментом
                                образования г. Москва
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="about_img-block">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/image1.jpg" alt="img">

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

<section class="section advantages-vip-page">
    <div class="border-trap border-trap--reverse">
        <?php if (get_field('advantages-vip-title')): ?>
            <div class="advantages-vip_title">
                <?php the_field('advantages-vip-title') ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="container-fluid">
        <?php if (have_rows('advantages-vip--list')): ?>
            <ul class="vip-advantages">
                <?php while (have_rows('advantages-vip--list')): the_row(); ?>
                    <li class="vip-advantages_item">
                        <?php if (get_sub_field('advantages-vip--icon')): ?>
                            <div class="vip-advantages_img-block">
                                <img src="<?php the_sub_field('advantages-vip--icon') ?>" alt="img">
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('advantages-vip--text-title')): ?>
                            <h4 class="vip-advantages_title"><?php the_sub_field('advantages-vip--text-title') ?></h4>
                        <?php endif; ?>
                        <?php if (get_sub_field('advantages-vip--text-desc')): ?>
                            <div class="vip-advantages_desc">
                                <?php the_sub_field('advantages-vip--text-desc') ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>

            </ul>
        <?php endif; ?>
        <div class="advantages-vip-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/women-png.png" alt="img">

        </div>
    </div>
</section>
<?php get_template_part('./template-parts/sections/photo2'); ?>
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
                    <p>Аппаратные технологии; Японский; Бразильский; Горячий маникюр.</p>
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

<?php get_template_part('./template-parts/sections/faq'); ?>
<?php get_template_part('./template-parts/sections/unique-offer'); ?>
<?php get_template_part('./template-parts/sections/we-study-vip'); ?>

<?php //get_template_part('./template-parts/sections/reviews-vip'); ?>
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
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/gVjc2iTpxy0.jpg"
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
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/FLz39Hj2iPQ.jpg"
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
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/e9_ee5k_U2M.jpg"
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
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/0Soj1wqfjYw.jpg"
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
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/4T0L-Vzwz7I.jpg"
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
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/5qNypALRk14.jpg"
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
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/5UjVhbxrzfQ.jpg"
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
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/6vZvqjT4kS0.jpg"
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
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/7NPqqJM_Guo.jpg"
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

<div class="section section partners partners--vip">
    <div class="partners_title">
        300 Салонов-Партнеров, которые ждут Вас на Работу после Обучения!
    </div>
    <div class="container-fluid">

        <div class="partners_slider ">

            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/logo1.png" alt="">
                </div>
            </div>

            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/logo2.png" alt="">
                </div>
            </div>

            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/logo4.png" alt="">
                </div>
            </div>

            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/logo5.png" alt="">
                </div>
            </div>

            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/logo6.png" alt="">
                </div>
            </div>

            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/1.jpg" alt="">
                </div>
            </div>


            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/2.jpg" alt="">
                </div>
            </div>


            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/3.jpg" alt="">
                </div>
            </div>


            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/4.jpg" alt="">
                </div>
            </div>


            <div>
                <div class="partners_slider-elem">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/5.jpg" alt="">
                </div>
            </div>


        </div>
    </div>

</div>

<section class="section vip-photo-classes photo">
    <div class="container-fluid">
        <h3 class="vip-title">Фотографии c уроков</h3>
        <div class="photo_content">
            <?php if (have_rows('photo-list-vip-lesson')): ?>
                <div class="photo_slider js-photo-slider-vip">
                    <?php while (have_rows('photo-list-vip-lesson')):
                        the_row(); ?>
                        <div class="photo_slider-elem">
                            <div class="photo_slider-wrapp js-pop-up-img">
                                <a href="<?php the_sub_field('photo-list-vip-lesson-vip'); ?>"
                                   class="photo_slider-link"> <img
                                            src="<?php the_sub_field('photo-list-vip-lesson-vip'); ?>" class="photo_img"
                                            alt="photo">

                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <div class="photo-vip_text">

                <div class="btn-vip">
                    <a class="btn-vip-link" href="<?php the_field('photo-list-vip-lesson-link'); ?>">Больше
                        фотографий</a>
                </div>

            </div>

        </div>

    </div>
</section>
<section class="section section-info-new section-info-new--vip">
    <div class="container-fluid">
        <div class="section-info-new_content ">
            <div class="section-info-new-block ">
                <div class="section-info-new_wrap">
                    <div class="section-info-new_img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/info-img1.jpg" alt="img">

                    </div>
                    <div class="section-info-new_text">
                        <h3 class="section-info-new_title">запись моделей</h3>
                        <div class="vip-teachers_border"></div>
                        <div class="section-info-new_desc"><p>Хотите стать Моделью для наших мастеров и получить
                                стильные ногти  совершенно бесплатно?</p>
                            <p>Приходите в «Золотая Ника» и подчеркните свою красоту и изящество красивыми
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
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/info-img2.jpg" alt="img">
                    </div>
                    <div class="section-info-new_text">
                        <h3 class="section-info-new_title">информация для салонов</h3>
                        <div class="vip-teachers_border"></div>
                        <div class="section-info-new_desc"><p>Если вашему салону нужны Профессиональные мастера ногтевого сервиса, высылайте свои Резюме для Соискательниц на нашу электронную почту</p>
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

<?php get_template_part('./template-parts/sections/text'); ?>

<?php get_template_part('./template-parts/sections/contacts-vip'); ?>


<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>


