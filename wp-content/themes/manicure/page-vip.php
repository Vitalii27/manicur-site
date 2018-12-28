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

<section class="section hero hero--vip" id="hero" style="background-image: url(<?php the_field('hero_img-phone') ?>)">
    <?php if (get_field('hero_img-bg')): ?>
        <div class="hero_img">
            <img src="<?php the_field('hero_img-bg') ?>" alt="img">
        </div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="hero_content shadow-text--light">
            <?php if (get_field('hero_title')): ?>
                <div class="hero_title"><?php the_field('hero_title') ?></div>
            <?php endif; ?>

            <?php if (get_field('hero_subtitle')): ?>
                <div class="hero_subtitle"><?php the_field('hero_subtitle') ?></div>
            <?php endif; ?>
            <div class="pink-block pink-line-block">
                <p>156 часов обучения!</p>
            </div>

            <div class="hero_subtitle hero_subtitle--bottom">
                <p>Трудоустройство в лучшие салоны <br>
                    Москвы и Подмосковья!</p>
            </div>


        </div>
    </div>

</section>


<?php get_template_part('./template-parts/sections/action'); ?>

<section class="section program program--vip" id="program">
    <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
    <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <div class="container-fluid">
        <div class="program_content">
            <h3 class="program_title shadow-text--light"><p>Программа обучения —&nbsp;<span
                            style="color: #8400ff;"><strong>«VIP Мастер — Универсал»</strong></span>:</p>
            </h3>
            <div class="program_subtitle shadow-text--light">Полный Курс Обучения — 156 часов!</div>
            <ul class="program_list shadow-text--super-light">
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/program-bg.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="btn">50 часов</div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Маникюр и педикюр</div>
                        <p class="program_text-desc">Во время нашего курса вы познакомитесь с видами маникюра и
                            педикюра, типами покрытий для ногтей, вариантами их дизайна. Максимум знаний за минимум
                            времени! </p>
                    </div>
                    <div class="program_btn ">
                        <a href="#popup0" class="js-pop-up btn program_link">Подробнее...</a>
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
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/Narashhivanie-nogtey-Melitopol.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="btn">25 часов</div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Наращивание ногтей</div>
                        <p class="program_text-desc">Курсы наращивания ногтей – это возможность научиться выбирать
                            гель-лаки, подбирать форму и длину ногтей, правильно готовить их к процедуре моделирования и
                            коррекции</p>
                    </div>
                    <div class="program_btn ">
                        <a href="#popup1" class="js-pop-up btn program_link">Подробнее...</a>
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
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/jfjdkf.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="btn">20 часов</div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Покрытие ногтей</div>
                        <p class="program_text-desc">Покрытие ногтей выполняется после их тщательной подготовки. За курс
                            вы научитесь правильно наносить гель-лаки и Shellac, снимать покрытия и ухаживать за
                            ногтями.</p>
                    </div>
                    <div class="program_btn ">
                        <a href="#popup2" class="js-pop-up btn program_link">Подробнее...</a>
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
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/7-14-768x512.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="btn">20 часов</div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Аппаратные технологии</div>
                        <p class="program_text-desc">Для создания аппаратного маникюра и педикюра используются
                            современные фрезеры. Они бережно ухаживают за ногтями, делая процесс обработки
                            безболезненным и быстрым. </p>
                    </div>
                    <div class="program_btn ">
                        <a href="#popup3" class="js-pop-up btn program_link">Подробнее...</a>
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
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/43621.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="btn">8 часов</div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">SPA-процедуры</div>
                        <p class="program_text-desc">За руками, как и за ногтями, нужен уход с использованием
                            профессиональных средств. Вы научитесь современным SPA-процедурам для омоложения, увлажнения
                            кожи рук. </p>
                    </div>
                    <div class="program_btn ">
                        <a href="#popup4" class="js-pop-up btn program_link">Подробнее...</a>
                    </div>


                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup4">

                            <p><em>За руками, как и за ногтями, нужен уход с использованием профессиональных средств. Вы
                                    научитесь современным SPA-процедурам для омоложения, увлажнения кожи рук. </em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/7c0e0b77765d99eb55d5835e5b52681c.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="btn">20 часов</div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Дизайн ногтей</div>
                        <p class="program_text-desc">Во время занятий вы научитесь выполнять втирку блестками, дизайну
                            бархатным песком и 3D, 4D гелями, инкрустации стразами, китайской росписи и другим
                            художественным приемам. </p>
                    </div>
                    <div class="program_btn ">
                        <a href="#popup5" class="js-pop-up btn program_link">Подробнее...</a>
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
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/1636064.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="btn">7 часов</div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Заболевания ногтей</div>
                        <p class="program_text-desc">Мы расскажем, как работать с проблемными ногтями, как ухаживать за
                            ними, чтобы избежать грибковых и других заболеваний, которые возникают на ногтевых
                            пластинах. </p>
                    </div>
                    <div class="program_btn ">
                        <a href="#popup6" class="js-pop-up btn program_link">Подробнее...</a>
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
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(https://shkola-manikyura.com/wp-content/uploads/2018/08/metody-i-sredstva-dezinfekcii-manikyurnyh-instrumentov.jpg)">
                        <div class="program_img-name">
                        </div>
                        <div class="btn">6 часов</div>

                    </div>
                    <div class="program_text">
                        <div class="program_text-bold">Дезинфекция и подготовка рабочего места</div>
                        <p class="program_text-desc">Мастер маникюра должен принимать клиентов на аккуратном и
                            безопасном рабочем месте, постоянно дезинфицировать, стерилизовать инструменты и рабочие
                            поверхности. </p>
                    </div>
                    <div class="program_btn ">
                        <a href="#popup7" class="js-pop-up btn program_link">Подробнее...</a>
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
            </ul>
        </div>
    </div>
</section>


<section class="section action">
    <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
    <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <div class="container-fluid">
        <div class="action_content shadow-text--light">

            <div class="action_content-period" style="padding-bottom: 6rem;">
                <div class="action_content-top">

                    <h2>
                        <strong>Внимание!</strong>
                    </h2>
                </div>
                <div class="action_content-top-border"></div>
                <h2><strong>Во время обучения вы<br>
                        <span style="color: #ff0000;">НЕ ДОПЛАЧИВАЕТЕ</span> за инструменты, <br>модели, как в других
                        школах.</strong>
                </h2>
                <h2 class="border-str" style="margin: 2rem auto 0; max-width: 111rem; "><strong><span
                                style="color: #000000;"> Мы предоставляем расходные материалы </span>
                        <span
                                style="color: #00ff00;"><span
                                    style="color: #339966;">БЕСПЛАТНО!</span> </span>&nbsp;
                    </strong>
                </h2>


            </div>

        </div>
        <?php if (!empty($action['action-form'])) {
            ?>
            <div class="action_form">
                <?php echo do_shortcode($action['action-form']); ?>
            </div>
        <?php } ?>
    </div>

</section>

<?php get_template_part('./template-parts/sections/faq'); ?>

<div class="section section diplom"


     style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/diploma-clipart-2.png)">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <div class="container-fluid">
        <div class="diplom_content">
            <div class="diplom_left">
                <h3 class="diplom_title shadow-text--light">
                    <p>Выдаем Диплом: </p>

                </h3>
                <div class="diplom_green">
                    <div style="color: #f03866;"><strong>«Мастер — универсал Ногтевого Сервиса»</strong></div>
                    <div class="diplom_right">
                        <img src="https://shkola-manikyura.com/wp-content/uploads/2018/09/1301_Золотая-Ника_ДИПЛОМ-01.jpg"
                             alt="Диплом школа маникюра ">
                    </div>
                </div>
                <ul class="diplom_list">
                    <li class="diplom_item shadow-text--light">
                        После обучения вы получите Диплом — "Мастер — Универсал Ногтевого Сервиса"
                    </li>
                    <li class="diplom_item shadow-text--light">
                        Диплом утверждён Департаментом образования г. Москва
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>


<section class="section pass-section shadow-text--light">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">

    <div class="container-fluid">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/link-img.png" alt="img">
        <div class="pink-block pink-line-block">
            <p>Пропустили занятие?</p>
        </div>
        <div class="pass-section-desc">
            <p>Вы сможете возобновить обучение!</p>

            <p> В любое время с того места, на котором остановились!</p>

            <p> Даже через Неделю, Месяц или Год!</p>
        </div>
    </div>
</section>

<section class="section advantages-main"


         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/bg-png.png)">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <div class="container-fluid">
        <div class="advantages-main_content ">
            <h3 class="title shadow-text--light">Наши преимущества:</h3>
            <ul class="advantages-main_list shadow-text--super-light">

                <li class="advantages-main_item">
                    <div class="advantages-main_icon-block">
                        <img src="https://shkola-manikyura.com/wp-content/uploads/2018/11/4.svg" alt="icon"
                             class="advanyages_icon">
                    </div>
                    <div class="advantages-main_item-title">Никаких доплат!</div>
                    <div class="advantages-main_item-desc">
                        <p><strong>Вы платите только за курс! Все остальное – инструменты, модели, расходные материалы –
                                предоставляется бесплатно! </strong></p>
                    </div>
                </li>


                <li class="advantages-main_item">
                    <div class="advantages-main_icon-block">
                        <img src="https://shkola-manikyura.com/wp-content/uploads/2018/11/6565.svg" alt="icon"
                             class="advanyages_icon">
                    </div>
                    <div class="advantages-main_item-title">Гарантия трудоустройства</div>
                    <div class="advantages-main_item-desc">
                        <p><strong>Как только обучение закончится, ваши контакты и выпускные работы будут разосланы по
                                салонам красоты Москвы и Московской области. Где работать и получать высокий доход, вы
                                выберете сами! </strong></p>
                    </div>
                </li>


                <li class="advantages-main_item">
                    <div class="advantages-main_icon-block">
                        <img src="https://shkola-manikyura.com/wp-content/uploads/2018/11/2306.svg" alt="icon"
                             class="advanyages_icon">
                    </div>
                    <div class="advantages-main_item-title">Удобный график</div>
                    <div class="advantages-main_item-desc">
                        <p><strong>Мы набираем дневные, вечерние и выходные группы. Возможно возобновление занятий при
                                пропусках с того места, где закончилось обучение. </strong></p>
                    </div>
                </li>


                <li class="advantages-main_item">
                    <div class="advantages-main_icon-block">
                        <img src="https://shkola-manikyura.com/wp-content/uploads/2018/11/564456.svg" alt="icon"
                             class="advanyages_icon">
                    </div>
                    <div class="advantages-main_item-title">Диплом установленного образца</div>
                    <div class="advantages-main_item-desc">
                        <p><strong>Диплом, выданный нашей школой, станет гарантией того, что ваши знания и навыки будут
                                востребованы в лучших салонах России. </strong></p>
                    </div>
                </li>


                <li class="advantages-main_item">
                    <div class="advantages-main_icon-block">
                        <img src="https://shkola-manikyura.com/wp-content/uploads/2018/11/56265.svg" alt="icon"
                             class="advanyages_icon">
                    </div>
                    <div class="advantages-main_item-title">Квалифицированные преподаватели</div>
                    <div class="advantages-main_item-desc">
                        <p><strong>За ваше обучение отвечают практикующие преподаватели с 15-летним опытом работы! Они
                                умело совмещают в своей работе знания и навыки и модные тенденции сезона
                                2018-2019! </strong></p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</section>


<section class="section action">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
    <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
    <div class="container-fluid">
        <div class="action_content shadow-text--light">

            <div class="action_content-period" style="padding-bottom: 6rem;">
                <div class="action_content-top">

                    <h2>
                        <strong>Уникальное предложение!</strong>
                    </h2>
                </div>
                <div class="action_content-top-border"></div>
                <h2><strong>Если по окончанию обучения Вы не <br> освоите материал.</strong>
                </h2>
                <h2 class="border-str" style="margin: 2rem auto 0; max-width: 111rem; "><strong>
                     <span
                             style="color: #339966;">Вернем Деньги!</span>
                    </strong>
                </h2>

                <div class="h3-wrapp">
                    <h3><span style="color: #000000;"><strong>Мы единственная школа, которая дает <br>Финансовую Гарантию!</strong></span>
                    </h3>

                </div>
            </div>

        </div>

    </div>

</section>


<div class="section section partners">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
    <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
    <div class="container-fluid">
        <div class="partners_title shadow-text--light">
            300 Салонов-Партнеров, которые ждут Вас на Работу после Обучения!
        </div>
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


<section class="section about-school about-school--main" id="about">
    <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
    <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
    <div class="container-fluid">
        <div class="about-school_content">
            <h3 class="title shadow-text--light">О нашей школе</h3>
            <div class="about-school_wrap">


                <div class="about-school_video-block">

                    <div class="about-school_desc shadow-text--super-light">
                        <img class="text-img"
                             src="<?php echo get_template_directory_uri() ?>/assets/images/img111.png)" alt="img">
                        <div class="about-school_desc-title">Учебный Центр «Золотая Ника»</div>
                        <div class="about-school_desc-text">

                            <p>Это 8 Учебных Аудиторий площадью 650 м², расположенных на Двух Этажах. В них проводятся
                                лекции и практические занятия для закрепления полученных знаний. Аудитории оснащены
                                нужным Оборудованием, Мультимедийными Системами, Наглядными Пособиями, поэтому вы
                                сможете получить профессию в Максимально Удобных Условиях.</p>
                            <p>Главная задача Учебного Центра состоит в обучении Маникюру, Педикюру и Наращиванию ногтей
                                на VIP-уровне, а главная цель школы — максимально полно и гармонично обучить Любого
                                Желающего бесценным знаниям в области Ногтевого Сервиса.</p>
                        </div>
                    </div>
                </div>
                <div class="about-school_video">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7Kp2g_KGPtE" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                </div>

            </div>
            <ul class="about-school_list">

                <li class="about-school_item shadow-text--super-light">
                    <div class="about-school_item-block">
                        <p>2 этажа</p>
                    </div>
                    <p>2 этажа для Комфортного Обучения!</p>
                </li>

                <li class="about-school_item shadow-text--super-light">
                    <div class="about-school_item-block">
                        <p>650 кв. м.</p>
                    </div>
                    <p>650 м² — это площадь, которую занимает Школа!</p>
                </li>

                <li class="about-school_item shadow-text--super-light">
                    <div class="about-school_item-block">
                        <p>8 заллов</p>
                    </div>
                    <p>8 современных&nbsp; Лекционных залов!</p>
                </li>
            </ul>
        </div>
    </div>
</section>


<?php get_template_part('./template-parts/sections/photo-study-vip'); ?>
<section class="section pink-line-block shadow-text--light">
    <div class="container-fluid">
        <div class="pink-line-block-content">
            <p>Школа «Золотая Ника»: мы реально учим!</p>
        </div>
    </div>
</section>
<?php //get_template_part('./template-parts/sections/about-number'); ?>

<?php //get_template_part('./template-parts/sections/video-home'); ?>
<?php get_template_part('./template-parts/sections/realy-study-vip'); ?>
<!---->
<?php get_template_part('./template-parts/sections/teachers-vip'); ?>
<?php //get_template_part('./template-parts/sections/photo2'); ?>
<?php //get_template_part('./template-parts/sections/grafic'); ?>
<?php //get_template_part('./template-parts/sections/info'); ?>
<?php get_template_part('./template-parts/sections/numbers-vip'); ?>
<?php //get_template_part('./template-parts/sections/advantages-main-home'); ?>
<?php //get_template_part('./template-parts/sections/info_link'); ?>

<?php get_template_part('./template-parts/sections/reviews-vip'); ?>
<?php get_template_part('./template-parts/sections/info-vip'); ?>
<?php get_template_part('./template-parts/sections/photo'); ?>

<!---->
<!---->
<?php //get_template_part('./template-parts/sections/text'); ?>
<?php get_template_part('./template-parts/sections/contacts-vip'); ?>


<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>


