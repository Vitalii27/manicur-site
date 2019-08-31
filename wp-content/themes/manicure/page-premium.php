<?php
/**
 * Template Name: Page Premium
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>


<section class="section hero hero--vip hero--premium" id="hero">
    <div class="hero-vip-bg" style="background-image: url(<?php the_field('hero_img-phone2') ?>)">

        <div class="hero-vip-red border-trap"></div>
        <div class="container-fluid">
            <div class="hero_content">
                <?php if (get_field('action-title-hero2')): ?>
                    <div class="hero--vip_action">
                        <div class="hero--vip_action-title"> <?php the_field('action-title-hero2') ?></div>
                        <?php the_field('action-data-hero2') ?>
                    </div>
                <?php endif; ?>
                <?php if (get_field('action-full-hero2')): ?>
                    <div class="hero--vip_sub">
                        <?php the_field('action-full-hero2') ?>
                    </div>
                <?php endif; ?>
                <?php if (get_field('action-name-hero2')): ?>
                    <div class="hero_title"> <?php the_field('action-name-hero2') ?></div>
                <?php endif; ?>
                <?php if (get_field('action-current-price-hero2')): ?>
                    <div class="hero--vip_price">
                        <div class="price_yellow">
                            <span class="price-underline"><?php the_field('action-current-price-hero2') ?> руб</span>
                            вместо
                            <span class="price-black"><?php the_field('action-old-price-hero2') ?> руб</span>
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
                                        ногтевой пластине правильную форму, бережно обрабатывая кутикулу, ногти и
                                        боковые
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

                                <p><em>Во время практических занятий вы узнаете об основах наращивания ногтей гелем на
                                        форму
                                        и типсы, правилах построения искусственных ногтей, технологии коррекции ногтей и
                                        их
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
                            <p class="program_text-desc">Покрытие ногтей выполняется после их тщательной подготовки. За
                                курс
                                вы научитесь правильно наносить гель-лаки и Shellac, снимать покрытия и ухаживать за
                                ногтями.</p>
                        </div>
                        <div class="program_btn--vip ">
                            <a href="#popup2" class="js-pop-up  program_link">Подробнее</a>
                        </div>


                        <div class="program_popup-block popup">

                            <div class="pop-up_content program_popup-content" id="popup2">

                                <p><em>Покрытие ногтей гель-лаками и другими составами – это целое искусство. Важно
                                        сделать
                                        это красиво и аккуратно, чтобы ноги украшали женщину и подчеркивали ее изюминку.
                                        Мы
                                        научим вас правильно выбирать гель-лаки, правильно наносить их и украшать
                                        разными
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

                                <p><em>Аппаратные технологии идеально подходят для обработки ломких, проблемных и
                                        наращенных
                                        ногтей. Этот способ абсолютно безопасен и исключает повреждения кожи или
                                        ногтевой
                                        пластины. Аппаратный маникюр и педикюр – это находка для тех, кто не желает
                                        тратить
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
                                профессиональных средств. Вы научитесь современным SPA-процедурам для омоложения,
                                увлажнения
                                кожи рук.</p>
                        </div>
                        <div class="program_btn--vip ">
                            <a href="#popup4" class="js-pop-up  program_link">Подробнее</a>
                        </div>
                        <div class="program_popup-block popup">

                            <div class="pop-up_content program_popup-content" id="popup4">

                                <p><em>За руками, как и за ногтями, нужен уход с использованием профессиональных
                                        средств. Вы
                                        научитесь современным SPA-процедурам для омоложения, увлажнения кожи рук.</em>
                                </p>

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
                                стразами, дизайн акриловой краской, дизайн на матовом покрытии, различные наклейки,
                                дизайн с
                                бульенками, классический френч, дизайн профессиональной иглой по мокрому лаку и дизайн
                                стемпинг. Обработка на тренировачных картах.</p>
                        </div>
                        <div class="program_btn--vip ">
                            <a href="#popup5" class="js-pop-up  program_link">Подробнее</a>
                        </div>
                        <div class="program_popup-block popup">

                            <div class="pop-up_content program_popup-content" id="popup5">

                                <p><em>Во время практических занятий вы научитесь создавать на ногтях самые красивые
                                        дизайны
                                        с использованием дополнительных элементов – страз, акриловой пудры, гель-пасты.
                                        Мы
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
                            <p class="program_text-desc">Мы расскажем, как работать с проблемными ногтями, как ухаживать
                                за
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
                                        профессиональный уход. За время курса вы узнаете о самых популярных болезнях
                                        ногтей,
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

                                <p><em>Рабочее место мастера маникюра должно быть чистым, аккуратным и эргономичным.
                                        Очень
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
</section>
<section class="section program program--vip program--premium" id="program">

    <div class="container-fluid">
        <div class="program_content">
            <h3 class="vip-title ">Специально для курса Premium</h3>

            <ul class="program_list ">
                <li class="program_item">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/course4.jpg)">
                        <div class="program_img-name">
                        </div>


                    </div>
                    <div class="program_text">
                        <div>Аппаратные технологии</div>
                        <p class="program_text-desc">Для создания аппаратного маникюра и педикюра используются
                            современные фрезеры. Они бережно ухаживают за ногтями, делая процесс обработки
                            безболезненным и быстрым.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup8" class="js-pop-up  program_link">Подробнее</a>
                    </div>


                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup8">

                            <p><em>Аппаратные технологии идеально подходят для обработки ломких, проблемных и
                                    наращенных
                                    ногтей. Этот способ абсолютно безопасен и исключает повреждения кожи или
                                    ногтевой
                                    пластины. Аппаратный маникюр и педикюр – это находка для тех, кто не желает
                                    тратить
                                    много времени на уход за ногтями.</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item program_item--fix">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/nail.jpg)">
                        <div class="program_img-name">
                        </div>


                    </div>
                    <div class="program_text">
                        <div>Курс Японский маникюр и педикюр</div>
                        <p class="program_text-desc">После обучения у нас вы станете профессиональным мастером, который
                            умеет выполнять такие необычные виды работ, как японский, бразильский и горячий маникюр. Эти
                            техники предполагают пристальное внимание здоровью и уходу за ногтями, а не только их
                            украшению.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup9" class="js-pop-up  program_link">Подробнее</a>
                    </div>


                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup9">

                            <p><em>После обучения у нас вы станете профессиональным мастером, который умеет выполнять
                                    такие необычные виды работ, как японский, бразильский и горячий маникюр. Эти техники
                                    предполагают пристальное внимание здоровью и уходу за ногтями, а не только их
                                    украшению.</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item">
                    <div class="program_img"
                        style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/japan.jpg)">

                        <div class="program_img-name">
                        </div>


                    </div>
                    <div class="program_text">
                        <div>Курс Горячий маникюр</div>
                        <p class="program_text-desc">После обучения у нас вы станете профессиональным мастером, который
                            умеет выполнять такие необычные виды работ, как японский, бразильский и горячий маникюр. Эти
                            техники предполагают пристальное внимание здоровью и уходу за ногтями, а не только их
                            украшению.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup10" class="js-pop-up  program_link">Подробнее</a>
                    </div>


                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup10">

                            <p><em>После обучения у нас вы станете профессиональным мастером, который умеет выполнять
                                    такие необычные виды работ, как японский, бразильский и горячий маникюр. Эти техники
                                    предполагают пристальное внимание здоровью и уходу за ногтями, а не только их
                                    украшению.</em></p>

                        </div>
                    </div>
                </li>
                <li class="program_item program_item--fix">
                    <div class="program_img"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/hot.jpg)">
                        <div class="program_img-name">
                        </div>
                   

                    </div>
                    <div class="program_text">
                        <div>Курс бразильский маникюр и педикюр</div>
                        <p class="program_text-desc">После обучения у нас вы станете профессиональным мастером, который
                            умеет выполнять такие необычные виды работ, как японский, бразильский и горячий маникюр.</p>
                    </div>
                    <div class="program_btn--vip ">
                        <a href="#popup11" class="js-pop-up  program_link">Подробнее</a>
                    </div>


                    <div class="program_popup-block popup">

                        <div class="pop-up_content program_popup-content" id="popup11">

                            <p><em>После обучения у нас вы станете профессиональным мастером, который умеет выполнять
                                    такие необычные виды работ, как японский, бразильский и горячий маникюр.</em></p>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <img class="bg-img-section1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img-section1.png"
         alt="img">
    <img class="bg-img-section2" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img-section2.png"
         alt="img">
</section>
<?php $action = get_option('action3'); ?>
<section class="section action action--premium">
    <div class="action_content-img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/action-premium.png" alt="img">

    </div>
    <div class="container-fluid">
        <div class="action_content">

            <div class="action_content-time">
                <div class="action-text">
                    <?php if (get_field('premium-master-course-title')): ?>
                        <div class="action-text_subtitle"><?php the_field('premium-master-course-title') ?></div>
                    <?php endif; ?>
                    <?php if (get_field('premium-master-course-title-name')): ?>
                        <div class="action-text_title"><?php the_field('premium-master-course-title-name') ?></div>
                    <?php endif; ?>
                    <?php if (get_field('premium-master-course-title-price')): ?>
                        <div class="action-text_subtitle-price">
                            <?php the_field('premium-master-course-title-price') ?>
                        </div>
                    <?php endif; ?>
                    <p>До конца акции осталось:</p>
                </div>
                <?php if (!empty($action['action-year2'])) {
                ?>

                <!--                    --><?php //the_field('action-remained') ?>
                <div id="js-timer" class="action_content-timer"></div>
                <?php if (!empty($action['action-form2'])) {
                    ?>
                    <div class="action_form action--new-form">
                        <?php echo do_shortcode($action['action-form2']); ?>
                    </div>
                <?php } ?>
                <div class="action_bottom-text">
                    <p> *Внимание! Нажимая на кнопку, вы соглашаетесь с
                        <a href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf"
                           target="_blank">политикой обработки персональных данных.</a>

                    </p>
                </div>
            </div>
            <?php } ?>

        </div>


    </div>
</section>

<script>

    <?php if (!empty($action['action-year2'])) {
    ?>
    var yearData =  <?php echo $action['action-year2']; ?> ;
    <?php } ?>
    <?php if (!empty($action['action-month2'])) {   ?>
    var monthData = <?php echo $action['action-month2']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-day2'])) {
    ?>
    var dayData = <?php echo $action['action-day2']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-hour2'])) {
    ?>
    var hoursData = <?php echo $action['action-hour2']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-minute2'])) {
    ?>
    var minutesData = <?php echo $action['action-minute2']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-second2'])) {
    ?>
    var secondsData = <?php echo $action['action-second2']; ?>;
    <?php } ?>

    function timer() {

        var nowDate = new Date();

        var achiveDate = new Date(yearData, monthData - 1, dayData, hoursData, minutesData, secondsData); //Задаем дату, к которой будет осуществляться обратный отсчет
        var result = (achiveDate - nowDate) + 1000;

        var seconds = Math.floor((result / 1000) % 60);
        var minutes = Math.floor((result / 1000 / 60) % 60);
        var hours = Math.floor((result / 1000 / 60 / 60) % 24);
        var days = Math.floor(result / 1000 / 60 / 60 / 24);
        if (days < 10) days = '0' + days;
        if (seconds < 10) seconds = '0' + seconds;
        if (minutes < 10) minutes = '0' + minutes;
        if (hours < 10) hours = '0' + hours;
        var elmnt = document.getElementById('js-timer');

        elmnt.innerHTML =
            '<div>' + '<div class="timer-number">' + days + '</div>' + '<div class="timer-name">' + 'дня' + '</div>' + '</div>' + '<p>:</p>' +
            '<div>' + '<div class="timer-number">' + hours + '</div>' + '<div class="timer-name">' + 'часа' + '</div>' + '</div>' + '<p>:</p>' +
            '<div>' + '<div class="timer-number">' + minutes + '</div>' + '<div class="timer-name">' + 'минут' + '</div>' + '</div>' + '<p>:</p>' +
            '<div>' + '<div class="timer-number">' + seconds + '</div>' + '<div class="timer-name">' + 'секунд' + '</div>' + '</div>';

        setTimeout(timer, 1000);
    }

    window.onload = function () {

        timer();


    }
</script>


<?php get_template_part('./template-parts/sections/text'); ?>

<?php get_template_part('./template-parts/sections/contacts-vip'); ?>


<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>


