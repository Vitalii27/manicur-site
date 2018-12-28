<?php $action = get_option('action2'); ?>
<section class="section action">
    <img class="img-bg img-pos1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img3.png" alt="img">
    <img class="img-bg img-pos3" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <div class="container-fluid">
        <div class="action_content shadow-text--light">

            <div class="action_content-period">
                <div class="action_content-top">

                    <h2><strong>Акция, только с<span>
                                <span
                                > <?php echo $action['action-top']; ?></span>&nbsp;<span
                                >по</span> <span
                                ><?php echo $action['action-po']; ?></span>&nbsp;<span
                                ><?php echo $action['action-section-month']; ?></span></span>!</strong>
                    </h2>
                </div>
                <div class="action_content-top-border"></div>
                <h2><strong><span style="color: #000000;">Полный курс <br></span><span style="color: #ff0000;">«Vip Мастер — Универсал»</span></strong>
                </h2>
                <h2 style="margin-top: 1rem;"><strong class="border-str"><span style="color: #000000;"> всего за</span>
                        <span
                                style="color: #00ff00;"><span
                                    style="color: #339966;"><?php echo $action['action-old-price']; ?> ₽</span> </span>&nbsp;<span
                                style="color: #000000;">вместо</span>
                        <span style="color: #ff0000;"><?php echo $action['action-new-price']; ?> ₽!</span></strong>
                </h2>
                <div class="h3-wrapp">
                    <h3><span style="color: #000000;"><strong>Без Доплат. Срок обучения Месяц. </strong></span></h3>
                    <h3><span style="color: #ff0000;"><strong>Диплом. Трудоустройство!</strong></span></h3>
                </div>


            </div>
            <p class="action-last-time"><span style="color: #000000;"><strong>Спешите! Осталось:</strong></span></p>


            <?php if (!empty($action['action-year'])) {
                ?>
                <div class="action_content-time">
                    <!--                    --><?php //the_field('action-remained') ?>
                    <div id="js-timer" class="action_content-timer"></div>
                </div>
            <?php } ?>

        </div>
        <?php if (!empty($action['action-form'])) {
            ?>
            <div class="action_form">
                <?php echo do_shortcode($action['action-form']); ?>
            </div>
        <?php } ?>

        <div class="action_bottom-text shadow-text--super-light">
            <p> Нажимая на кнопку, вы даёте согласие на обработку персональных данных и соглашаетесь с

                <a href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf"
                   target="_blank">политикой обработки персональных данных.</a>

            </p>
        </div>


    </div>
    <!--    --><?php //if (get_field('action-img')): ?>
    <img src="https://shkola-manikyura.com/wp-content/uploads/2018/08/action.png" alt="img" class="action_bg">
    <!--    --><?php //endif; ?>
</section>

<script>

    <?php if (!empty($action['action-year'])) {
    ?>
    var yearData =  <?php echo $action['action-year']; ?> ;
    <?php } ?>
    <?php if (!empty($action['action-month'])) {   ?>
    var monthData = <?php echo $action['action-month']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-day'])) {
    ?>
    var dayData = <?php echo $action['action-day']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-hour'])) {
    ?>
    var hoursData = <?php echo $action['action-hour']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-minute'])) {
    ?>
    var minutesData = <?php echo $action['action-minute']; ?>;
    <?php } ?>
    <?php if (!empty($action['action-second'])) {
    ?>
    var secondsData = <?php echo $action['action-second']; ?>;
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
            '<div>' + '<div class="timer-number">' + days + '</div>' + '<div class="timer-name">' + 'дня' + '</div>' + '</div>' +
            '<div>' + '<div class="timer-number">' + hours + '</div>' + '<div class="timer-name">' + 'часа' + '</div>' + '</div>' +
            '<div>' + '<div class="timer-number">' + minutes + '</div>' + '<div class="timer-name">' + 'минут' + '</div>' + '</div>' +
            '<div>' + '<div class="timer-number">' + seconds + '</div>' + '<div class="timer-name">' + 'секунд' + '</div>' + '</div>';

        setTimeout(timer, 1000);
    }

    window.onload = function () {

        timer();



    }
</script>