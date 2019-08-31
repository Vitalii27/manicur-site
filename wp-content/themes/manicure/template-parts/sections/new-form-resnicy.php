<?php $form = get_option('form-course'); ?>

<?php if (get_field('new-form-resny') == 'true'): ?>
<section class="new-diplom">
    <div class="container-fluid">
        <h3 class="vip-title"> Выдаем сертификат после прохождения курса</h3>
        <div class="new-diplom">
            <img src="https://www.shkola-nika.ru/wp-content/uploads/2018/12/nar-resnic.jpg" alt="diplom">
        </div>
    </div>
</section>
    <section class="section custom-section-res">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/face.png" alt="" class="hero-img-new">
        <div class="container-fluid">
            <div class="custom-section-res-title-block">
                <h2>Запишись на обучение прямо сейчас</h2>
                <p>за
                    <?php if (get_field('course_new-price')): ?>
                        <span><?php the_field('course_new-price') ?></span>
                    <?php endif; ?>
                    руб. <span class="text-red">*Вместо
                        <?php if (get_field('course_old-price')): ?>
                            <?php the_field('course_old-price') ?>
                        <?php endif; ?>
                        рублей</span></p>
            </div>
            <div class="custom-section-res-advantages-block">
                <p>И получи:</p>
                <ul>
                    <li>
                        <div class="custom-section-res-img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/new-icon1.png"
                                 alt="icon">
                        </div>
                        <p>5 часов интенсивной
                            практики и 3 часа
                            бесценной теории</p>
                    </li>
                    <li>
                        <div class="custom-section-res-img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/new-icon2.png"
                                 alt="icon">
                        </div>
                        <p>Отработка практики
                            по пореснечному
                            наращиванию
                            - Японская технология</p>
                    </li>
                    <li>
                        <div class="custom-section-res-img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/new-icon3.png"
                                 alt="icon">
                        </div>
                        <p>Мастер класс по
                            химической завивке
                            ресниц с ламинированием</p>
                    </li>
                </ul>
            </div>
            <div class="unique-vip_form">
                <div class="unique-vip_form-title">

                    <div class="action_form action_form-resnicy action--new-form">
                        <p>Просто оставь свои контакты:</p>

                        <div class="screen-reader-response"></div>
                        <?php if (!empty($form['form_shortcode'])) {
                            ?>

                            <?php echo do_shortcode($form['form_shortcode']) ?>

                        <?php } ?>
                    </div>

                    <div class="action_bottom-text">
                        <p> *Внимание! Нажимая на кнопку, вы соглашаетесь с
                            <a href="https://www.shkola-nika.ru/wp-content/themes/manicure/assets/pdf/privacy-policy.pdf"
                               target="_blank">политикой обработки персональных данных.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>