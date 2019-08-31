<?php
/*
 * Template Name: Grafic Page
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>

<section class="section section schedule  schedule-page">
    <div class="container-fluid">
        <h3 class="vip-title">
            удобный график обучения
        </h3>
        <div class="schedule-page-desc">
            <p>В нашей школе есть <strong>3 группы обучения – дневная, вечерняя и группа выходного дня!
                И вы можете чередовать эти группы, по вашему желанию.</strong></p>
            <p>Например, вы можете прийти в дневную группу на обучение на первое занятие, а если у вас есть неотложные
                дела, то на второе и последующие занятия вы можете прийти в вечернюю группу или в группу выходного дня,
                по вашему желанию.
            </p>
            <p><strong>Именно Вы сами выбираете удобный для себя график посещения нашей школы.</strong>
            </p>
            <p>Если у вас появились вопросы, то наши менеджеры ответят на них по телефону:<br> <span><strong>8 (800) 222-37-43</strong></span>
            </p>
        </div>

        <ul class="schedule_list">
            <li class="schedule_item">
                <div class="schedule_item-top">
                    <div class="schedule_item-content">
                        <div class="schedule_item-title">Дневная группа обучения</div>

                    </div>
                </div>
                <div class="schedule_item-bottom">
                    <div class="schedule_item-icon">
                        <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/03/sun2.png" alt="icon"
                             class="schedule_item-img">
                    </div>
                    <div class="schedule_table">
                        <p><strong>Пн:</strong> с 12:00 — 18:00</p>
                        <p><strong>Вт</strong>: с 12:00 — 18:00</p>
                        <p><strong>Ср:</strong> с 12:00 — 18:00</p>
                        <p><strong> Чт</strong>: с 12:00 — 18:00</p>
                        <p><strong> Пт:</strong> с 12:00 — 18:00</p>
                    </div>
                </div>
            </li>
            <li class="schedule_item">
                <div class="schedule_item-top">
                    <div class="schedule_item-content">
                        <div class="schedule_item-title">Вечерняя группа обучения</div>

                    </div>
                </div>
                <div class="schedule_item-bottom">
                    <div class="schedule_item-icon">
                        <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/03/moon2.png" alt="icon"
                             class="schedule_item-img">
                    </div>
                    <div class="schedule_table">
                        <p><strong>Вт</strong>: с 19:00 — 22:00</p>
                        <p><strong>Ср:</strong> с 19:00 — 22:00</p>
                        <p><strong> Чт</strong>: с 19:00 — 22:00</p>
                    </div>
                </div>
            </li>
            <li class="schedule_item">
                <div class="schedule_item-top">
                    <div class="schedule_item-content">
                        <div class="schedule_item-title">Группа выходного дня</div>

                    </div>
                </div>
                <div class="schedule_item-bottom">
                    <div class="schedule_item-icon">
                        <img src="https://www.shkola-nika.ru/wp-content/uploads/2019/03/balloons2.png" alt="icon"
                             class="schedule_item-img">
                    </div>
                    <div class="schedule_table">
                        <p><strong>Сб</strong>: с 10:00 — 15:00</p>
                        <p><strong>Вс:</strong> с 10:00 — 15:00</p>
                    </div>
                </div>
            </li>
        </ul>
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


