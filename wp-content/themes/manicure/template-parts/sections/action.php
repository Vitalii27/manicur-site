<?php $action = get_option('action2'); ?>
<section class="section action">
    <div class="container-fluid">
        <div class="action_content">
            <div class="action_content-img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/action-img.png" alt="img">

            </div>
            <div class="action_content-time">
                <div class="action-text">
                    <?php if (get_field('vip-master-course-title')): ?>
                        <div class="action-text_subtitle"><?php the_field('vip-master-course-title') ?></div>
                    <?php endif; ?>
                    <?php if (get_field('vip-master-course-title-name')): ?>
                        <div class="action-text_title"><?php the_field('vip-master-course-title-name') ?></div>
                    <?php endif; ?>
                    <?php if (get_field('vip-master-course-title-price')): ?>
                        <div class="action-text_subtitle-price">
                            <?php the_field('vip-master-course-title-price') ?>
                        </div>
                    <?php endif; ?>
                    <p>До конца акции осталось:</p>
                </div>
                <?php if (!empty($action['action-year'])) {
                ?>

                <!--                    --><?php //the_field('action-remained') ?>
                <div id="js-timer" class="action_content-timer"></div>
                <?php if (!empty($action['action-form'])) {
                    ?>
                    <div class="action_form action--new-form">
                        <?php echo do_shortcode($action['action-form']); ?>
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