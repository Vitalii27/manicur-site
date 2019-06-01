<?php if (have_rows('course-list')): ?>
    <section class="section hero-courses">
        <?php if (get_field('all_courses_block-text')): ?>
            <div class="text-block">
                <div class="container-fluid">
                    <img class="quete-img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/quete.png" alt="img">
                    <?php the_field('all_courses-block-text') ?>

                </div>
            </div>
        <?php endif; ?>
        <!--        <div class="text-block">-->
        <!--            <div class="container-fluid">-->
        <!--                <img class="quete-img" src="http://manicure-site/wp-content/themes/manicure/assets/images/quete.png" alt="img">-->
        <!--                <p>Существует огромное количество нужных профессий. Нужных, и при том интересных — сравнительно меньше. Профессий, которые объединяли бы эти два качества, гарантируя стабильную прибыль, совсем немного.</p>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->

        <div class="container-fluid">
            <!--            --><?php //if (get_field('all_courses-block-desc')): ?>
            <!--                <div class="text-block-new">-->
            <!--                    <div class="hero-courses-text">-->
            <!--                        --><?php //the_field('all_courses-block-desc') ?>
            <!--                    </div>-->
            <!--                    <img class="arrow-bold"-->
            <!--                         src="-->
            <?php //echo get_template_directory_uri() ?><!--/assets/images/arrow-bold.png" alt="img">-->
            <!--                </div>-->
            <!--            --><?php //endif; ?>
            <div class="text-block-new">
                <div class="hero-courses-text">
                    <h4>Курс для новичков</h4>
                    <h3><strong>Обучение с нуля до уровня мастер-универсал!</strong></h3>
                    <p>156 часов обучения — 90% практики. Трудоустройство!</p>
                </div>
                <img class="arrow-bold"
                     src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/arrow-bold.png" alt="img">
            </div>
            <?php get_template_part('./template-parts/blocks/course'); ?>
<!--            <div class="text-block-new">-->
<!--                <div class="hero-courses-text">-->
<!--                    <h2>Дополнительные курсы</h2>-->
<!--                    <h3><strong>по маникюру, педикюру, дизайну и уходу за ногтями и кожей рук и ног</strong></h3>-->
<!--                    <!--                <p>156 часов обучения — 90% практики. Трудоустройство!</p>-->
<!--                </div>-->
<!--                <img class="arrow-bold"-->
<!--                     src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/arrow-bold.png" alt="img">-->
<!--            </div>-->
            <div class="virtical-course program--vip">
                <div class="course-filtering">
                    <button class="course-filtering_item active-filter" data-filter="*">Все курсы</button>
                    <button class="course-filtering_item" data-filter=".manikyr">Курсы по маникюру</button>
                    <button class="course-filtering_item" data-filter=".pedicyr">Курсы по педикюру</button>
                    <button class="course-filtering_item" data-filter=".desing-nogtey">Курсы дизайна ногтей</button>
                    <button class="course-filtering_item" data-filter=".resnis">Курсы по наращиванию ресниц</button>
                    <button class="course-filtering_item" data-filter=".kos">Курсы плетения кос</button>
                    <button class="course-filtering_item" data-filter=".brovist">Курс мастер - бровист</button>
                </div>
                <ul class="course_list">
                    <li class="program_item resnis">
                        <a href="https://www.shkola-nika.ru/kurs-po-narashchivaniyu-resnic-master-leshmejker">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/6aca1bee-e857-4d83-9e45-00089311d7b9_1.png"
                                     alt="Наращивание ресниц" class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>4990                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Мастер — Лешмейкер</div>
                                <div class="course-title-bub">Курс по наращиванию ресниц</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>За курс продолжительностью 8 часов вы станете профессиональным lash-мастером. Вы
                                        научитесь правильно выбирать материалы для наращивания, используя для этого
                                        соответствующие инструменты, а также освоите профессию лэшмейкера, который не
                                        только
                                        наращивает ресницы, но и выполняет их ламинирование или биозавивку.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item manikyr pedicyr">
                        <a href="https://www.shkola-nika.ru/kurs-po-manikyuru-apparatnyj-manikyur-i-pedikyur"
                        >
                            <div class="program_img-container">
                                <img alt="Аппаратный Маникюр и Педикюр" src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/apprat.jpg"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5500                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Аппаратный Маникюр и Педикюр</div>
                                <div class="course-title-bub">Курс по маникюру и педикюру</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>На курсах аппаратного маникюра и педикюра вы научитесь безопасно ухаживать за
                                        ногтями рук
                                        и ног, удалять омертвевшие клетки кожи и отросшую кутикулу с помощью аппаратной
                                        фрезы.
                                        Во время обучения вы узнаете о типах аппаратов, вариантах насадок-фрез для них,
                                        каждая
                                        из которых имеет свое предназначение.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/obuchenie-nail-art">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/nail-art-preview.jpg"
                                     alt="Курс по дизайну Nail Art" class="program_img-course">

                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Nail Art</div>
                                <div class="course-title-bub">Курс по дизайну</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Красивые ногти – в ваших руках, ведь мы научим вас создавать на них самые
                                        необычные
                                        рисунки, узоры и дизайны. Nail art – это искусство по украшению ногтей, и мы
                                        готовы
                                        обучить ему вас! За программу вы узнаете, как правильно наносить покрытие, как
                                        украшать
                                        ногти разными способами и как их готовить к маникюру.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                                <span class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item manikyr">
                        <a href="https://www.shkola-nika.ru/kursy-vyravnivanie-nogtevoj-plastiny-i-pokrytie-gel-lakom">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/vir-1.jpg" alt="Выравнивание ногтевой пластины и покрытие гель-лаком под кутикулу"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Выравнивание ногтевой пластины и покрытие гель-лаком под кутикулу</div>
                                <div class="course-title-bub">Курс по маникюру</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Хороший маникюр предполагает правильную подготовку ногтей к дальнейшему их
                                        покрытию
                                        гель-лаками. Во время обучения вы поймете, как правильно укреплять ногти и
                                        выполнять их
                                        коррекцию, чтобы покрытие держалось несколько недель. Мы также расскажем о
                                        создании
                                        правильной архитектуры ногтя.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item pedicyr">
                        <a href="https://www.shkola-nika.ru/kursy-kislotnyj-pedikyur">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/02/Depositphotos_10895858_m-2015.png"
                                     alt="Кислотный педикюр" class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>2000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Кислотный педикюр</div>
                                <div class="course-title-bub">Курс по педикюру</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Эта косметологическая процедура используется для приведения в порядок стоп с
                                        помощью
                                        специального средства с фруктовыми и овощными кислотами в составе. Оно глубоко
                                        проникает
                                        в клетки, эффективно растворяя уплотнения, огрубевшие участки. Вы научитесь
                                        работать с
                                        инструментами и материалами с соблюдением всех правил безопасности.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                                <span class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item manikyr">
                        <a href="https://www.shkola-nika.ru/yaponskij-manikyur-goryachij-manikyur-brazilskij-manikyur-i-pedikyur">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/yap-1.jpg" alt="Японский маникюр + Бразильский маникюр + Горячий маникюр"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Японский маникюр + <br>Бразильский маникюр + <br> Горячий маникюр</div>
                                <div class="course-title-bub">Курс по маникюру</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>После обучения у нас вы станете профессиональным мастером, который умеет
                                        выполнять такие
                                        необычные виды работ, как японский, бразильский и горячий маникюр. Эти техники
                                        предполагают пристальное внимание здоровью и уходу за ногтями, а не только их
                                        украшению.
                                        Освоив программу, вы сможете порадовать своих клиенток необычными умениями.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/kitajskaya-rospis-lite-folgoj-zhidkie-kamni">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview.jpg" alt="Китайская роспись, Литье фольгой, Жидкие камни"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Китайская роспись, Литье фольгой, Жидкие камни</div>
                                <div class="course-title-bub">Курс по дизайну</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Этот курс позволит вам научиться делать китайскую роспись, украшать ногти литьем
                                        фольгой
                                        или жидкими камнями. Все инструменты и материалы предоставим! Мы научим вас
                                        правильно
                                        пользоваться различными типами кисточек – плоскими или скошенными, кистью-щеткой
                                        или
                                        кистью-лайнером в зависимости от типа рисунка.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/kursy-mekhendi">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/mehendi.jpg" alt="Основы традиционной росписи Мехенди"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Основы традиционной росписи Мехенди</div>
                                <div class="course-title-bub">Курс росписи хной</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>После обучения на этом курсе вы станете настоящим мастером мехенди! Это искусство
                                        росписи
                                        на руках или теле с помощью хны. Мы расскажем о происхождении этой техники,
                                        научим
                                        правильно держать руку и конус с хной, познакомим с основными схемами узоров и
                                        составлением композиций. Нанесение мехенди обязательно отрабатываются на
                                        практике!</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                                <span class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item">
                        <a href="https://www.shkola-nika.ru/kursy-tekhniki-spa-shugaring-bandazhnaya-i-manualnaya">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-4.jpg" alt="Техники SPA-шугаринг: бандажная и мануальная"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Техники SPA-шугаринг: бандажная и мануальная</div>
                                <div class="course-title-bub">Курс по шугарингу</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Спа-шугаринг – это популярная услуга, позволяющая избавиться от лишних волос на
                                        теле. За
                                        один курс мы сделаем из вас профессионального мастера, который будет легко
                                        выполнять
                                        депиляцию сахаром и воском по мануальной и бандажной технике. Отработаем все
                                        этапы
                                        деликатного удаления волос на ногах, руках, подмышечных впадинах и лице.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item">
                        <a href="https://www.shkola-nika.ru/kursy-spa-uhod-za-kozhej-ruk-i-nog-piling-obertyvanie-parafinoterapiya"
                        >
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-3.jpg" alt="SPA-уход за кожей рук и ног: пилинг, обертывание, парафинотерапия"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> SPA-уход за кожей рук и ног: пилинг, обертывание, парафинотерапия</div>
                                <div class="course-title-bub">Курс по SPA процедурам</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Хороший мастер должен не только делать маникюр, но и грамотно ухаживать за кожей
                                        рук и
                                        ног. Во время этого курса вы научитесь таким видам спа-ухода, как
                                        парафинотерапия,
                                        обертывание, пилинг. Мы расскажем вам о необходимых средствах и видах
                                        косметического
                                        парафина, научим бережно ухаживать за руками с учетом типа кожи.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                                <span class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item">
                        <a href="https://www.shkola-nika.ru/kursy-arochnoe-modelirovanie-i-dizajn">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-5.jpg" alt="Арочное моделирование и Дизайн с использованием новейших систем в гелевых технология"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>4000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Арочное моделирование и Дизайн с использованием новейших систем в гелевых
                                    технология
                                </div>
                                <div class="course-title-bub">Курс по наращиванию ногтей</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>В рамках этого курса вы получите знания о современной технологии нейл-дизайна –
                                        арочном
                                        моделировании. Оно позволит увеличить длину ногтей, укрепить их, создав
                                        идеальный
                                        С-изгиб и безупречную форму. Овладев этой техникой, вы станете универсальным
                                        мастером,
                                        который одинаково хорошо работает с акрилом и гелем.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                                <span class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/kursy-aehrografiya-vozdushnaya-kist-v-nail-art">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-6.jpg" alt="Аэрография – воздушная кисть в Nail Art"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Аэрография – воздушная кисть в Nail Art</div>
                                <div class="course-title-bub">Курс по дизайну</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Во время этого курса вы научитесь создавать на ногтях самые настоящие
                                        произведения
                                        искусства посредством трафаретов и красок. Аэрография выполняется гель-лаком с
                                        помощью
                                        специального распылителя. Он аккуратно наносит краску, благодаря чему получаются
                                        четкие
                                        переходы цветов, объемные рисунки и фактуры.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item kos">
                        <a href="https://www.shkola-nika.ru/kursy-po-pleteniyu-kos">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/plet.jpg" alt="Плетение кос"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>2500                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Плетение кос</div>
                                <div class="course-title-bub">Курс по укладке волос</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Плести красивые косы – целое искусство! В рамках этого курса мы научим вас
                                        создавать
                                        простые и креативные прически на волосах любой длины. Программа рассчитана на 8
                                        часов,
                                        за которые вы научитесь делать французские косы, круговые плетения и многое
                                        другое. Все
                                        полученные навыки обязательно отрабатываются на практике.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                                <span class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item brovist">
                        <a href="https://www.shkola-nika.ru/kursy-master-brovist-ili-kurs-master-leshmejker">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-8.jpg" alt="Мастер - бровист: архитектура бровей; Коррекция бровей; Окрашивание бровей хной; Окрашивание бровей краской"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Мастер - бровист: архитектура бровей; Коррекция бровей; Окрашивание бровей хной;
                                    Окрашивание бровей краской
                                </div>
                                <div class="course-title-bub">Курс коррекции бровей</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Пройдя обучение по этому курсу, вы станете профессиональным мастером-бровистом.
                                        Вы
                                        узнаете о том, как выполнять коррекцию, архитектуру и окрашивание бровей,
                                        научитесь
                                        выбирать инструменты и материалы, подбирать эффекты и пропорции в зависимости от
                                        формы
                                        лица. Расскажем о технологии работы с тенями, гелем, карандашами, помадкой.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                                <span class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/kursy-hudozhestvennaya-lepka-gelem-3d-4d">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-9.jpg" alt="Художественная лепка гелем 3D, 4D"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Художественная лепка гелем 3D, 4D</div>
                                <div class="course-title-bub">Курс по дизайну</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Этот курс направлен на обучение художественной лепке гелем для создания объемных
                                        рисунков
                                        3D, 4D на ногтях. Мы расскажем о техниках моделирования и разнообразии дизайнов,
                                        научим
                                        правильно выбирать материалы. Вы сможете создавать самые разные узоры на
                                        поверхности
                                        ногтевой пластины с помощью прочного и долговечного геля.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/kursy-po-multidizajnu-nogtej">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/mult.jpg" alt="Мультидизайн ногтей"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Мультидизайн</div>
                                <div class="course-title-bub">Курс по дизайну</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Курс «Мультидизайн» познакомит вас с такими понятиями, как набросок, тени, блики,
                                        заливка, прорисовка. Все это выполняется с помощью кистей, красок, гель-лаков и
                                        карандашей. Вы научитесь готовить типсы к работе, проработаете основные этапы
                                        нанесения
                                        дизайна и топового покрытия, а также примете участие в мастер-классах.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item">
                        <a href="https://www.shkola-nika.ru/kursy-ukreplenie-nogtevoj-plastiny-biogelem">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-11.jpg" alt="Укрепление ногтевой пластины Биогелем"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Укрепление ногтевой пластины Биогелем</div>
                                <div class="course-title-bub">Курс укрепление биогелем</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Во время маникюра важно уделить внимание укреплению ногтевой пластины. Мы научим
                                        вас
                                        делать это с помощью биогеля – материала с органическими протеинами в составе. В
                                        рамках
                                        курса вы узнаете о свойствах биогеля, правилах нанесения классической и
                                        корректирующей
                                        базы, цветного покрытия, научитесь укреплять ногтевую пластину по
                                        последовательным
                                        этапам.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/kursy-osnovy-dekorativnoj-rospisi">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/decorro.jpg" alt="Основы декоративной росписи"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Основы декоративной росписи</div>
                                <div class="course-title-bub">Курс по дизайну</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Умение создавать декоративную роспись – одно из основных достоинств мастера
                                        ногтевого
                                        сервиса. Мы готовы научить вас основам декоративной росписи, расскажем о
                                        материалах для
                                        выполнения дизайна, подборе кистей, гель-лаков и гель-красок. Вы потренируетесь
                                        на
                                        практике создавать самые разные дизайны – вензеля, втирку, бархатный песок,
                                        матовое
                                        покрытие, трафаретную розу.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                                <span class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/kursy-po-manikyuru-crystal-nails">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/crystal.jpg" alt="Курс по дизайну Cristal Nails"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Cristal Nails</div>
                                <div class="course-title-bub">Курс по дизайну</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Во время этого курса мы научим вас выполнять инкрустацию на ногтях стразами и
                                        бульонками.
                                        В теории вы узнаете о видах этих декоративных элементов, особенностях их
                                        крепления. На
                                        практике мы научимся прорисовывать различные дизайны (вишенка, подсолнух,
                                        гранат,
                                        снегирь, новогодний венок) и украшать с помощью страз.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                                <span class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/kursy-po-manikyuru-akvarelnaya-tekhnika-v-dizajne-nogtej">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-12.jpg" alt="Акварельная техника в дизайне ногтей"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Акварельная техника в дизайне ногтей</div>
                                <div class="course-title-bub">Курс по дизайну</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Этот курс познакомит вас с использованием акварельных гель-лаков в дизайне
                                        ногтей.
                                        Акварельная техника позволяет создать нежный, воздушный маникюр с легким
                                        эффектом
                                        градиента. Наши мастера расскажут о спектре цветов лаков, материалах для
                                        выполнения
                                        дизайна. А на практике вы научитесь таким дизайнам, как камень, дым, космос,
                                        перо,
                                        бабочка.</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                    <li class="program_item desing-nogtey">
                        <a href="https://www.shkola-nika.ru/kursy-po-manikyuru-tonkie-linii-v-dizajne">
                            <div class="program_img-container">
                                <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/line.jpg" alt="Тонкие линии в дизайне"
                                     class="program_img-course">
                                <div class="border-trap">
                                    <div class="program-vip-child-border">
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/stopwatch2.png"
                                                 alt="img"><span>8 часов</span></div>
                                        <!--                                        -->
                                        <div>
                                            <img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/wallet.png"
                                                 alt="img"><span>5000                                                    руб</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_text">
                                <div> Тонкие линии в дизайне</div>
                                <div class="course-title-bub">Курс по дизайну</div>
                                <div class="vip-teachers_border">

                                </div>
                                <div class="program_text-desc">
                                    <p>Программа этого курса рассчитана на 8 часов. За это время вы узнаете о секретах
                                        рисования
                                        тонких линий на ногтях, о выборе кистей и материалах. На практических занятиях
                                        будут
                                        отработаны такие дизайны, как сетка, геометрия, пейзаж, цветок, ветка или
                                        трафаретная
                                        кошка. Всего за один курс вы научитесь создавать самые сложные дизайны на
                                        ногтях!</p>
                                </div>
                            </div>
                            <div class="program_btn--vip ">
                            <span
                                    class="program_link">Подробнее</span>
                            </div>
                        </a>
                    </li>

                </ul>
                <img class="img-bg img-bg--1"
                     src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/course-img1.png"
                     alt="img">
                <img class="img-bg img-bg--2"
                     src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/bg-img-section2.png"
                     alt="img">
                <img class="img-bg img-bg--3"
                     src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/course-img1.png"
                     alt="img">
                <img class="img-bg img-bg--5"
                     src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/course-img1.png"
                     alt="img">
                <img class="img-bg img-bg--4"
                     src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/bg-img-section2.png"
                     alt="img">
            </div>
        </div>

    </section>
<?php endif; ?>