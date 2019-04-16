<?php $popup = get_option('popup'); ?>
<div class="popup" role="dialog">

    <div class="pop-up_content callback" id="sing-up">
        <img class="popup-img-1"
             src="<?php echo get_template_directory_uri() ?>/assets/images/popup-img1.png" alt="img">
        <img class="popup-img-2"
             src="<?php echo get_template_directory_uri() ?>/assets/images/popup-img2.png" alt="img">
        <div class="callback-block-wrap">
            <div class="title">Оставьте Заявку</div>

            <div class="pop-up_subtitle">Менеджер перезвонит Вам через 20 секунд.</div>

            <?php echo do_shortcode($popup['popup_shortcode']); ?>
            <?php if (get_field('popup-link-text')): ?>
                <div class="pop-up_link">
                    <p>*Внимание! Нажимая на кнопку, вы соглашаетесь с <a
                                target="_blank"
                                href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf">
                            политикой персональных данных.</a></p>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>

<div class="popup" role="dialog">

    <div class="pop-up_content callback" id="callback-vip">
        <img class="popup-img-1"
             src="<?php echo get_template_directory_uri() ?>/assets/images/popup-img1.png" alt="img">
        <img class="popup-img-2"
             src="<?php echo get_template_directory_uri() ?>/assets/images/popup-img2.png" alt="img">
        <div class="callback-block-wrap">
            <div class="title">Оставьте Заявку</div>

            <div class="pop-up_subtitle">Менеджер перезвонит Вам через 20 секунд.</div>

            <?php echo do_shortcode($popup['popup_shortcodeVip']); ?>
            <?php if (get_field('popup-link-text')): ?>
                <div class="pop-up_link">
                    <p>*Внимание! Нажимая на кнопку, вы соглашаетесь с <a
                                target="_blank"
                                href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf">
                            политикой персональных данных.</a></p>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>

<div class="popup" role="dialog">

    <div class="pop-up_content callback" id="form-page-vip">
        <img class="popup-img-1"
             src="<?php echo get_template_directory_uri() ?>/assets/images/popup-img1.png" alt="img">
        <img class="popup-img-2"
             src="<?php echo get_template_directory_uri() ?>/assets/images/popup-img2.png" alt="img">
        <div class="callback-block-wrap">
            <div class="title">Оставьте Заявку</div>

            <div class="pop-up_subtitle">Менеджер перезвонит Вам через 20 секунд.</div>

            <?php echo do_shortcode($popup['shortcodeVip']); ?>
            <?php if (get_field('popup-link-text')): ?>
                <div class="pop-up_link">
                    <p>*Внимание! Нажимая на кнопку, вы соглашаетесь с <a
                                target="_blank"
                                href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf">
                            политикой персональных данных.</a></p>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>

<div class="popup" role="dialog">

    <div class="pop-up_content callback" id="form-page-banner">
        <img class="popup-img-1"
             src="<?php echo get_template_directory_uri() ?>/assets/images/popup-img1.png" alt="img">
        <img class="popup-img-2"
             src="<?php echo get_template_directory_uri() ?>/assets/images/popup-img2.png" alt="img">
        <div class="callback-block-wrap">
            <div class="title">Оставьте Заявку</div>

            <div class="pop-up_subtitle">Менеджер перезвонит Вам через 20 секунд.</div>

            <?php echo do_shortcode($popup['popup_shortcode-vipbanner']); ?>
            <?php if (get_field('popup-link-text')): ?>
                <div class="pop-up_link">
                    <p>*Внимание! Нажимая на кнопку, вы соглашаетесь с <a
                                target="_blank"
                                href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf">
                            политикой персональных данных.</a></p>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>
