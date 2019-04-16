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

<?php get_template_part('./template-parts/sections/faq'); ?>
<?php get_template_part('./template-parts/sections/unique-offer'); ?>
<?php get_template_part('./template-parts/sections/we-study-vip'); ?>
<?php get_template_part('./template-parts/sections/licenses'); ?>

<?php get_template_part('./template-parts/sections/reviews-vip'); ?>


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
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/info-img2.jpg" alt="img">
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

<?php get_template_part('./template-parts/sections/text'); ?>

<?php get_template_part('./template-parts/sections/contacts-vip'); ?>


<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>


