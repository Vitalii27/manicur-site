<?php
/**
 * Template Name: All courses Page
 *
 * This is the All courses page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>
<?php $vip = get_option('table-vip'); ?>
<?php $premium = get_option('form-premium'); ?>
<section class="section container-fluid title-page">
    <h1 class="vip-title">Курсы маникюра и педикюра в Москве</h1>
</section>

<?php //get_template_part('./template-parts/sections/courses-home'); ?>
<?php //get_template_part('./template-parts/sections/all-courses'); ?>
<section class="section hero-courses">
    <div class="text-block">
        <div class="container-fluid">
            <img class="quete-img" src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/quete.png"
                 alt="img">
            <p>Школа «Золотая Ника» предлагает профессиональные курсы маникюра. Вас будут обучать мастера, ежегодно
                подтверждающие свою квалификацию. Образование ведется по спланированным программам с преобладанием
                практики над теорией. Курсы маникюра и педикюра в Москве преподаются в просторном лекционном зале в
                центре столицы.</p>

        </div>
    </div>
<!--    --><?php //get_template_part('./template-parts/blocks/table-block'); ?>
    <section class="advantages-table">
        <div class="container-fluid hero-courses">
            <div class="text-block-new">
                <div class="hero-courses-text">
                    <h4>Курсы для новичков</h4>
                    <h3><strong>Обучение с нуля до уровня мастер-универсал!</strong></h3>
                    <p>90% практики. Трудоустройство!</p>
                </div>
                <img class="arrow-bold"
                     src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/arrow-bold.png" alt="img">
            </div>
        </div>
        <div class="container-fluid">

            <div class="table-column">
                <div class="title-wrap">
                    <div class="h2">Курсы обучения с нуля до профи</div>
                </div>
                <div class="title-list">
                <span>
                    Маникюр и педикюр
                </span>
                </div>
                <span class="subtitle-list">Разновидности маникюра:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- классический маникюр и педикюр <br>(уникальная авторская программа);</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- комбинированный маникюр и педикюр;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- европейский маникюр;</p>
                </div>

                <div class="title-row-wrap" style="background-color: #F7F7F7">
                    <p class="title-row">- детский маникюр;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- горячий (лечебный);</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- сухой (обрезной и необрезной);</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- аппаратный (комбинированный);</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- SPA-маникюр; </p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- мужской;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- ремонт сломанных ногтей;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- обучение массажу рук.</p>
                </div>

                <div class="title-list">
                <span>
Покрытие Ногтей:
                </span>
                </div>
                <span class="subtitle-list">Виды покрытий:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- покрытие лаком;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- покрытие гель лаком;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- покрытие гель лаком;</p>
                </div>

                <div class="title-list">
                    <span>Дизайн Ногтей:</span>
                </div>
                <span class="subtitle-list">Обучение дизайну:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- френч классический;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- экспресс-дизайн по мокрому лаку иглой;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- бульонки, стемпинг, блестки, матовый топ;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- работа дотсом, акриловые краски, жидкие стразы;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- чешуя дракона, камифубики, рыбья чешуя; </p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- дизайн с эффектом растекания; </p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- гель - краски, шагрень.</p>
                </div>
                <div class="title-list">
                    <span>Заболевание Ногтей и Кожи:</span>
                </div>
                <span class="subtitle-list">Изучаемые дисциплины:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- грибковые и не грибковые;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- методы профилактики и рекомендации.</p>
                </div>
                <div class="title-list">
                    <span>Наращивание Ногтей –Гелевые технологии:</span>
                </div>
                <span class="subtitle-list">ВИДЫ НАРАЩИВАНИЯ:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- обучение техникам выкладки геля;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- работа с прозрачным гелем;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- работа с камуфлирующим гелем;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- наращивание на типсы;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- наращивание на формы;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- коррекция наращенных ногтей;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- снятие наращенных ногтей.</p>
                </div>
                <div class="title-list">
                    <span>Аппаратные Технологии:</span>
                </div>
                <span class="subtitle-list">ИЗУЧАЕМЫЕ ДИСЦИПЛИНЫ:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- виды аппаратов для маникюра;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- техника безопасности при работе с аппаратом;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- виды и классификация фрез;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">-классификация и маркировка фрез;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- обучение технике аппаратному маникюру;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- обучение технике аппаратному педикюру;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- отработка техник.</p>
                </div>
                <div class="title-list">
                    <span>Аппаратные Технологии - Углубленный курс: </span>
                </div>
                <span class="subtitle-list">ИЗУЧАЕМЫЕ ДИСЦИПЛИНЫ:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- снятие иску стенного покрытия (гель лак и геля)<br>
                        керамической и твердосплавными фрезами;
                    </p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- обработка птеригия корундовой фрезой;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- обучение правильной работе в боковых;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- пазухах (снятие ороговевшей кожи, не касаясь ногтя); </p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- чистый срез кутикулы шаровидной фрезой;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- обучение деликатной обработке боковых валиков;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- обучение финальной шлифовке кожи и кутикулы;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- обработка стопы одноразовыми песочными колпачками. </p>
                </div>
                <div class="title-list">
                    <span>Организация Рабочего Места:</span>
                </div>
                <span class="subtitle-list">Рекомендации по:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- выбору инструментов, материалов;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- выбору оборудования и освещения;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- расходным материалам (салфетки, пилки, бафы, кисти т.д.).</p>
                </div>
                <div class="title-list">
                    <span>Обучение работе с Инструментами и Оборудованием:</span>
                </div>
                <span class="subtitle-list">Рекомендации по:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- работа с 3-мя видами ламп: УФ-лампа, LED-лампа, гибридная лампа;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- работа с фрезером и насадками, работа с шабером, ремувером;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- работа с кюреткой, инструментом и щипцами для вросшего ногтя;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- обучение правилам дезинфекции и стерилизации инструментов.</p>
                </div>
                <div class="title-list">
                    <span>Этика Взаимоотношений с Клиентом:</span>
                </div>
                <span class="subtitle-list">Рекомендации:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- запретные темы при работе с клиентом;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- правила поведения с клиентом;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- искусство общения с клиентом.</p>
                </div>
                <div class="title-list">
                    <span>Курс – «Японский Маникюр и Педикюр</span>
                </div>
                <span class="subtitle-list">ИЗУЧАЕМЫЕ ДИСЦИПЛИНЫ:</span>
                <div class="title-row-wrap">
                    <p class="title-row">Особенности японского маникюра;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">Преимущества японского маникюра.</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">Демонстрация и отработка техники:</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row"> – восстановление ногтевой пластины;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row"> – оздоровление ногтевой пластины;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row"> – уход за ногтями и кожей рук.</p>
                </div>
                <div class="title-list">
                    <span>Курс - «Бразильский Маникюр и Педикюр</span>
                </div>
                <span class="subtitle-list">ИЗУЧАЕМЫЕ ДИСЦИПЛИНЫ:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- особенности Бразильского маникюра;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- преимущества Бразильского маникюра;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">Демонстрация и отработка техники:</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row"> – обучение технике ухода за кожей рук;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row"> – обучение технике ухода за ногтями.</p>
                </div>
                <div class="title-list">
                    <span>Курс – «Горячий Маникюр»: </span>
                </div>
                <span class="subtitle-list">ИЗУЧАЕМЫЕ ДИСЦИПЛИНЫ:</span>
                <div class="title-row-wrap">
                    <p class="title-row">- особенности Горячего маникюра;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">- особенности Горячего маникюра;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row">Демонстрация и отработка техники:</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row"> – обучение уходу за кожей рук;</p>
                </div>
                <div class="title-row-wrap">
                    <p class="title-row"> – восстановление сухих и ломких ногтей.</p>
                </div>


            </div>

            <div class="table-column">
                <div class="vip">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/course2.png" alt="img">
                    <p>VIP–Мастер Универсал</p>
                </div>
                <div class="border"></div>
                <div class="img">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>

                <div class="img" style="background-color: #F7F7F7">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>

                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>

                <div class="img">
                </div>


                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>

                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>


                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                </div>


                <!---->
                <!--            <div class="img" style="min-height: 79px">-->
                <!--            </div>-->
                <!--            <div class="border"></div>-->
                <!---->
                <!--            <div class="img">-->
                <!--            </div>-->
                <!--            <div class="img">-->
                <!--            </div>-->
                <!--            <div class="img">-->
                <!--                <img src="-->
                <?php //echo get_template_directory_uri() ?><!--/assets/images/cancel.png" alt="icon">-->
                <!--            </div>-->
                <!--            <div class="img">-->
                <!--            </div>-->
                <!--            <div class="img">-->
                <!--            </div>-->
                <!---->
                <!--            <div class="img">-->
                <!--                <img src="-->
                <?php //echo get_template_directory_uri() ?><!--/assets/images/cancel.png" alt="icon">-->
                <!--            </div>-->
                <div class="img">
                </div>
                <div class="img">
                </div>

                <div class="table-price">
                    <div class="table-price-wrap">
                        <div class="old-price">
                            <?php echo $vip['block-table-price-vip-old']; ?> руб
                        </div>
                        <div class="price"><?php echo $vip['block-table-price-vip']; ?> руб</div>
                        <a href="<?php echo $vip['block-table-price-vip-link']; ?>" class="more">Подробнее о курсе</a>
                        <div class="btn">
                            <a href="#vip-form" class="js-pop-up">Выбрать курс</a>
                        </div>
                    </div>

                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/pattern-vip.png" alt="img">

                </div>
            </div>
            <div class="table-column">
                <div class="premium">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/course3.png" alt="img">
                    <p>Premium Мастер Универсал</p>
                </div>
                <div class="border"></div>
                <div class="img">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>

                <div class="img" style="background-color: #F7F7F7">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>

                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">

                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>


                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>

                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img" style="min-height: 79px">
                </div>
                <div class="border"></div>
                <div class="img">
                </div>

                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                </div>


                <!---->


                <!--            <div class="img" style="min-height: 79px">-->
                <!--            </div>-->
                <!--            <div class="border"></div>-->
                <!---->
                <!--            <div class="img">-->
                <!--            </div>-->
                <!--            <div class="img">-->
                <!--            </div>-->
                <!--            <div class="img">-->
                <!--                <img src="-->
                <?php //echo get_template_directory_uri() ?><!--/assets/images/checked.png" alt="icon">-->
                <!--            </div>-->
                <!--            <div class="img">-->
                <!--            </div>-->
                <!--            <div class="img">-->
                <!--            </div>-->
                <!---->
                <!--            <div class="img">-->
                <!--                <img src="-->
                <?php //echo get_template_directory_uri() ?><!--/assets/images/checked.png" alt="icon">-->
                <!--            </div>-->
                <div class="img">
                </div>
                <div class="img">
                </div>

                <div class="table-price table-price--premium">
                    <div class="table-price-wrap">
                        <div class="old-price">
                            <?php echo $premium['block-table-price-premium-old']; ?> руб
                        </div>
                        <div class="price"><?php echo $premium['block-table-price-premium']; ?> руб</div>
                        <a href="<?php echo $premium['block-table-price-premium-link']; ?>" class="more">Подробнее о
                            курсе</a>
                        <div class="btn">
                            <a href="#premium-form" class="js-pop-up">Выбрать курс</a>
                        </div>
                    </div>

                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/pattern-premium.png" alt="img">

                </div>
            </div>

        </div>

    </section>
    <section class="advantages-table-mobile advantages-table-mobile-new">
        <div class="container-fluid">
            <div class="title-wrap">
                <div class="h2">Курсы <br>обучения <br>с нуля <br>до профи</div>
            </div>
            <div class="mobile-courses-wrapp">
                <div class="mobile-courses" id="float-block">
                    <div class="vip">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/course2.png" alt="img">
                        <p>VIP–Мастер Универсал</p>

                        <div>Продолжительность курса - 156 часов, диплом, трудоустройство, без доплат </div>
                        <a href="<?php echo $vip['block-table-price-vip-link']; ?>" class="more">Подробнее о курсе</a>

                    </div>
                    <div class="premium">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/course3.png" alt="img">
                        <p>Premium Мастер Универсал</p>

                        <div>Продолжительность курса - 190 часов, диплом, трудоустройство, без доплат </div>
                        <a href="<?php echo $premium['block-table-price-premium-link']; ?>" class="more">Подробнее о
                            курсе</a>
                    </div>
                </div>
            </div>
            <div class="comparison">

                <div class="sub-section_btn-block">
                    <a href="https://www.shkola-nika.ru/sravnenie-programm-obucheniya/" class="sub-section_link button button-vip">
                        <span class="btn-yallow"></span>
                        Сравнение программ обучения</a>
                </div>
            </div>



        </div>
    </section>

    <div class="container-fluid">

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
                            <img alt="Аппаратный Маникюр и Педикюр"
                                 src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/apprat.jpg"
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
                                <p>В рамках этого курса вы научитесь безопасно ухаживать за
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
                                    обучить ему вас! За программу вы узнаете, как правильно наносить покрытие и как
                                    украшать
                                    ногти разными способами.</p>
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/vir-1.jpg"
                                 alt="Выравнивание ногтевой пластины и покрытие гель-лаком под кутикулу"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/yap-1.jpg"
                                 alt="Японский маникюр + Бразильский маникюр + Горячий маникюр"
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
                            <div> Японский + <br>Бразильский + <br> Горячий маникюр</div>
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview.jpg"
                                 alt="Китайская роспись, Литье фольгой, Жидкие камни"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/mehendi.jpg"
                                 alt="Основы традиционной росписи Мехенди"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-4.jpg"
                                 alt="Техники SPA-шугаринг: бандажная и мануальная"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-3.jpg"
                                 alt="SPA-уход за кожей рук и ног: пилинг, обертывание, парафинотерапия"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-5.jpg"
                                 alt="Арочное моделирование и Дизайн с использованием новейших систем в гелевых технология"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-6.jpg"
                                 alt="Аэрография – воздушная кисть в Nail Art"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-8.jpg"
                                 alt="Мастер - бровист: архитектура бровей; Коррекция бровей; Окрашивание бровей хной; Окрашивание бровей краской"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-9.jpg"
                                 alt="Художественная лепка гелем 3D, 4D"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/mult.jpg"
                                 alt="Мультидизайн ногтей"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-11.jpg"
                                 alt="Укрепление ногтевой пластины Биогелем"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/decorro.jpg"
                                 alt="Основы декоративной росписи"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/crystal.jpg"
                                 alt="Курс по дизайну Cristal Nails"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/preview-12.jpg"
                                 alt="Акварельная техника в дизайне ногтей"
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
                            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/line.jpg"
                                 alt="Тонкие линии в дизайне"
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
                 src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/course-img1.png" alt="img">
            <img class="img-bg img-bg--2"
                 src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/bg-img-section2.png"
                 alt="img">
            <img class="img-bg img-bg--3"
                 src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/course-img1.png" alt="img">
            <img class="img-bg img-bg--5"
                 src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/course-img1.png" alt="img">
            <img class="img-bg img-bg--4"
                 src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/bg-img-section2.png"
                 alt="img">
        </div>
    </div>

</section>
<section class="section about-school--all" id="about">
    <h3 class="vip-title">Видео о наших курсах маникюра</h3>

    <div class="container-fluid">
        <div class="about-school_content">

            <div class="about-school_video-block">
                <div class="about-school_video">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sNQfk0v113g" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                </div>


            </div>


        </div>
    </div>


</section>
<section class="section vip-teachers">
    <div class="container-fluid">
        <h3 class="vip-title">Наши преподаватели</h3>
        <ul class="vip-teachers_list">
            <li class="vip-teachers_item">
                <div class="vip-teachers_img-block-container">
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/12/12.jpg"
                         alt="Преподаватель курсов: Технологии современных трендов — NAil Art, Тонкие линии в дизайне, Мехенди"
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
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/12/543.jpg"
                         alt="Ирина Лобода Преподаватель курсов: Арочное моделирование, ЗD и 4D лепка гелем, Акварельная техника в Дизайне"
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
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/12/563.jpg"
                         alt="Олеся Солодилова Преподаватель курсов: Аппаратный маникюр и педикюр, Укрепление ногтей биогелем"
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
                    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/12/36485.jpg"
                         alt="Елена Донская Преподаватель курсов: Китайская роспись, Основы декоративной росписи, Аэрография"
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
                    <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/01/IMG_6535.jpg"
                         alt="Любовь Светличная Преподаватель курсов: Японский маникюр, Бразильский маникюр, Горячий маникюр, SPA-уход за кожей рук и ног"
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
<?php get_template_part('./template-parts/sections/payment'); ?>
<section class="section video-section">
    <div class="container-fluid">
        <h3 class="vip-title">Видео - Отзывы</h3>
        <div class=" video_content">
            <div class=" video_slider js-video-slider">
                <div class=" video_slider-elem">
                    <div class=" video_slider-wrapp ">
                        <div  class="video-custom" data-plyr-provider="youtube" data-plyr-embed-id="jEuZmPReIqY"></div>
                    </div>
                </div>


                <div class=" video_slider-elem">
                    <div class=" video_slider-wrapp ">
                        <div  class="video-custom1" data-plyr-provider="youtube" data-plyr-embed-id="FmZrfZiIvVw"></div>

                    </div>
                </div>


                <div class=" video_slider-elem">
                    <div class=" video_slider-wrapp ">
                        <div class="video-custom2"  data-plyr-provider="youtube" data-plyr-embed-id="gOnSS34QFBE"></div>

                    </div>
                </div>

                <div class=" video_slider-elem">
                    <div class=" video_slider-wrapp ">
                        <div class="video-custom3"  data-plyr-provider="youtube" data-plyr-embed-id="Funq3T1FI_Y"></div>

                    </div>
                </div>


                <div class=" video_slider-elem">
                    <div class=" video_slider-wrapp ">
                        <div  class="video-custom4" data-plyr-provider="youtube" data-plyr-embed-id="q1GwKxiv8-Q"></div>

                    </div>
                </div>

                <div class=" video_slider-elem">
                    <div class=" video_slider-wrapp ">
                        <div  class="video-custom5"  data-plyr-provider="youtube" data-plyr-embed-id="-Vsx-4FXXBU"></div>

                    </div>
                </div>
                <div class=" video_slider-elem">
                    <div class=" video_slider-wrapp ">
                        <div  class="video-custom6"  data-plyr-provider="youtube" data-plyr-embed-id="DA6k70sKa-s"></div>

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


