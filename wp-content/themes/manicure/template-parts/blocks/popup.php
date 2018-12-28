<?php $popup = get_option('popup');?>
<div class="popup" role="dialog">

    <div class="pop-up_content callback" id="sing-up">

            <div class="title">Оставьте Заявку</div>

            <div class="pop-up_subtitle">Менеджер перезвонит Вам через 20 секунд.</div>

        <?php echo do_shortcode($popup['popup_shortcode']); ?>
        <?php if (get_field('popup-link-text')): ?>
            <div class="pop-up_link">
                <p>Нажимая на кнопку, вы даёте согласие на обработку персональных данных и соглашаетесь с<a target="_blank" href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf">политикой обработки персональных данных.</a></p>
            </div>
        <?php endif; ?>
    </div>

</div>
