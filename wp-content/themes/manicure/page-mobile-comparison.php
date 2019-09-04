<?php
/**
 * Template Name: Mobile Comparison
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>
<?php $vip = get_option('table-vip'); ?>
<?php $premium = get_option('form-premium'); ?>

<section class="advantages-table-mobile advantages-table-mobile-new-page">
    <div class="container-fluid">
        <div class="title-wrap">
            <div class="h2">Курсы <br>обучения <br>с нуля <br>до профи</div>
        </div>
        <div class="mobile-courses-wrapp">
            <div class="mobile-courses" id="float-block">
                <div class="vip">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/course2.png" alt="img">
                    <p>VIP–Мастер Универсал</p>
                </div>
                <div class="premium">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/course3.png" alt="img">
                    <p>Premium Мастер Универсал</p>
                </div>
            </div>
        </div>
        <div class="comparison">
            Сравнение программ обучения
        </div>


        <ul class="js-accordions">
            <li class="accordion" id="item1">
                <a href="#item1">
                    <div class="h5 js-open-down" style="background-color: #E01171">Маникюр и педикюр</div>
                </a>
                <div class="accordion_content">
                    <span>Разновидности маникюра:</span>
                    <p>Классический маникюр и педикюр<br>
                        (уникальная авторская программа)</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Комбинированный маникюр и педикюр</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Европейский маникюр</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Детский маникюр</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Горячий (лечебный)</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Сухой (обрезной и необрезной</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Аппаратный (комбинированный)</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>SPA-маникюр </p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Мужской </p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Ремонт сломанных ногтей </p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Обучение массажу рук </p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>
            <li class="accordion" id="item2">
                <a href="#item2">
                    <div class="h5 js-open-down" style="background-color: #E01171;">Покрытие Ногтей:</div>
                </a>
                <div class="accordion_content">
                    <span>Виды покрытий:</span>
                    <p>Покрытие лаком</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Покрытие гель лаком</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Снятие покрытий</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>
            <li class="accordion" id="item3">
                <a href="#item3">
                    <div class="h5 js-open-down" style="background-color: #E01171;">Дизайн Ногтей:</div>
                </a>
                <div class="accordion_content">
                    <span>Обучение дизайну:</span>
                    <p>Френч классический</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Экспресс-дизайн по мокрому лаку иглой</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Бульонки, стемпинг, блестки, матовый топ</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Работа дотсом, акриловые краски, жидкие стразы</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Чешуя дракона, камифубики, рыбья чешуя</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Дизайн с эффектом растекания</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Гель - краски, шагрень</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>
            <li class="accordion" id="item4">
                <a href="#item4">
                    <div class="h5 js-open-down" style="background-color: #E01171;">Заболевание Ногтей и Кожи:</div>
                </a>
                <div class="accordion_content">
                    <span>Рекомендации:</span>
                    <p>Грибковые и не грибковые</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Методы профилактики и рекомендации</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>
            <li class="accordion" id="item5">
                <a href="#item5">
                    <div class="h5 js-open-down" style="background-color: #E01171;">Наращивание Ногтей –Гелевые
                        технологии:
                    </div>
                </a>
                <div class="accordion_content">
                    <span>ВИДЫ НАРАЩИВАНИЯ:</span>
                    <p>Обучение техникам выкладки геля</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Работа с прозрачным гелем</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Работа с камуфлирующим гелем</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Наращивание на типсы</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Наращивание на формы</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Коррекция наращенных ногтей</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Снятие наращенных ногтей</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>
            <li class="accordion" id="item6">
                <a href="#item6">
                    <div class="h5 js-open-down" style="background-color: #B80C54;">Аппаратные Технологии:</div>
                </a>
                <div class="accordion_content">
                    <span>ВИДЫ НАРАЩИВАНИЯ:</span>
                    <p>Обучение техникам выкладки геля</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Работа с прозрачным гелем</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Работа с камуфлирующим гелем</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Наращивание на типсы</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Наращивание на формы</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Коррекция наращенных ногтей</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Снятие наращенных ногтей</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>
            <li class="accordion" id="item7">
                <a href="#item7">
                    <div class="h5 js-open-down" style="background-color: #B80C54;">Аппаратные Технологии - Углубленный
                        курс:
                    </div>
                </a>
                <div class="accordion_content">
                    <span>ИЗУЧАЕМЫЕ ДИСЦИПЛИНЫ: </span>
                    <p>Снятие иску стенного покрытия (гель лак и геля)
                        керамической и твердосплавными фрезами</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Обработка птеригия корундовой фрезой</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Обучение правильной работе в боковых</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Пазухах (снятие ороговевшей кожи, не касаясь ногтя); </p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Чистый срез кутикулы шаровидной фрезой</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Обучение деликатной обработке боковых валиков</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>обучение финальной шлифовке кожи и кутикулы</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Обработка стопы одноразовыми песочными колпачками</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Обучение финальной шлифовке кожи и кутикулы</p>
                </div>

            </li>
            <li class="accordion" id="item8">
                <a href="#item8">
                    <div class="h5 js-open-down" style="background-color: #A90B84;">Организация Рабочего Места:</div>
                </a>
                <div class="accordion_content">
                    <span>Рекомендации по:</span>
                    <p>Выбору инструментов, материалов</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Выбору оборудования и освещения</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Расходным материалам (салфетки, пилки, бафы, кисти т.д.)</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>

            </li>
            <li class="accordion" id="item9">
                <a href="#item9">
                    <div class="h5 js-open-down" style="background-color: #A90B84;">Обучение работе с Инструментами и
                        Оборудованием:
                    </div>
                </a>
                <div class="accordion_content">
                    <span>Рекомендации по:</span>
                    <p>Работа с 3-мя видами ламп: УФ-лампа, LED-лампа, гибридная лампа</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Работа с фрезером и насадками, работа с шабером, ремувером</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Работа с кюреткой, инструментом и щипцами для вросшего ногтя</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Обучение правилам дезинфекции и стерилизации инструментов</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>

                </div>
            </li>
            <li class="accordion" id="item10">
                <a href="#item10">
                    <div class="h5 js-open-down" style="background-color: #A90B84;">Этика Взаимоотношений с Клиентом
                    </div>

                </a>
                <div class="accordion_content">
                    <span>Рекомендации по:</span>
                    <p>Запретные темы при работе с клиентом</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Правила поведения с клиентом</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Искусство общения с клиентом</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>
            <li class="accordion" id="item11">
                <a href="#item11">
                    <div class="h5 js-open-down" style="background-color:  #7C0BAA;">Курс – «Японский Маникюр и
                        Педикюр»:
                    </div>
                </a>
                <div class="accordion_content">
                    <span>ИЗУЧАЕМЫЕ ДИСЦИПЛИНЫ:</span>
                    <p>Особенности японского маникюра</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>Преимущества японского маникюра</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <div class="big-title">Демонстрация и отработка техники:</div>
                    <p>– восстановление ногтевой пластины;</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>– оздоровление ногтевой пластины;</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>– уход за ногтями и кожей рук.</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>
            <li class="accordion" id="item12">
                <a href="#item12">
                    <div class="h5 js-open-down" style="background-color:  #7C0BAA;">Курс - «Бразильский Маникюр и
                        Педикюр»:
                    </div>
                </a>
                <div class="accordion_content">
                    <span>ИЗУЧАЕМЫЕ ДИСЦИПЛИНЫ:</span>
                    <p>- особенности Бразильского маникюра;</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>- преимущества Бразильского маникюра;</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <div class="big-title">Демонстрация и отработка техники:</div>
                    <p>– обучение технике ухода за кожей рук;</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>– обучение технике ухода за ногтями.</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>
            <li class="accordion" id="item13">
                <a href="#item13">
                    <div class="h5 js-open-down" style="background-color:  #7C0BAA;">Курс – «Горячий Маникюр»:</div>

                </a>
                <div class="accordion_content">
                    <span>ИЗУЧАЕМЫЕ ДИСЦИПЛИНЫ:</span>
                    <p>- особенности Горячего маникюра;</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>- преимущества Горячего маникюра;</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <div class="big-title">Демонстрация и отработка техники:</div>
                    <p>– обучение уходу за кожей рук;</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                    <p>– восстановление сухих и ломких ногтей.</p>
                    <div class="img-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/cancel.png" alt="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" alt="icon">
                    </div>
                </div>
            </li>

        </ul>
        <ul class="link-course-list">
            <li class="table-price">
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

            </li>
            <li class="table-price table-price--premium">
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

            </li>
        </ul>
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
<?php get_footer();?>
<?php get_template_part( './template-parts/blocks/popup' ); ?>
<?php get_template_part( './template-parts/blocks/alert' ); ?>
</body>

</html>

