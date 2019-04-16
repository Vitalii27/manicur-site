<section class="section contacts contacts--vip" id="contacts">
    <div class="container-fluid" itemscope="" itemtype="http://schema.org/Organization">

        <h3 class="vip-title">Контакты</h3>

        <div class="contacts_content">
            <div id="map" class="contacts_map map">
            </div>
            <div class="contacts_text">


                <div class="contacts_desc ">

                    <p class="contacts-icon"><img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/clock.png" alt="img"><strong>График работы:</strong></p>
                    <div>
                        <p>Понедельник — Пятница <strong> с 12:00 до 18:00</strong></p>
                        <p>Вторник, Среда, Четверг<strong> с 12:00 до 22:00</strong></p>
                        <p>Суббота — Воскресенье <strong>с 10:00 до 15:00</strong></p>
                    </div>
                    <p itemprop="telephone" class="contacts-icon"><img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/phone.png" alt="img"><strong>Телефон:</strong></p>
                    <div><p>8 (800) 333-83-19</p></div>
                    <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="contacts-icon"><img src="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/images/marker.png" alt="img"><strong>Адрес:&nbsp;</strong></p>
                    <div><p><span itemprop="addressLocality">г. Москва</span>, м. Красносельская или м. Бауманская,<br> <span  itemprop="streetAddress">ул. Ольховская, д. 22</span> </p></div>

                </div>

            </div>

        </div>
        <div class="contacts_desc contacts_desc--bottom">
            <p><strong>Как добраться:</strong></p>

            <p><span style="color: #ff0000;"><strong> М. Красносельская&nbsp;</strong></span>— выходите,идете вперед,в сторону
                церкви. Вдоль трамвайных путей до бензозаправки и поворачиваете налево вместе с путями. Метров через
                100 пешеходный переход. Переходите, перед Вами ворота и дверь. Улица Ольховская 22. Заходите в
                дверь, поворачиваете налево, через 30 м. справа подъезд . Этаж 3, вторая дверь по правой стороне
                «ЗОЛОТАЯ НИКА».</p>
            <p><span style="color: #ff0000;"><strong>М. Баумаская</strong> <span style="color: #333333;">— в</span></span>ыходите из
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
                center: [<?php the_field('contacts-coord') ?>]
            }],
            mapCenter: [<?php the_field('contacts-coord') ?>],
            icon: '<?php the_field('contacts-mark') ?>',
            zoom: <?php the_field('contacts-scale') ?>,

        }]

    }
</script>