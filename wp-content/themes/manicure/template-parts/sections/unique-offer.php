<?php $action = get_option('action2'); ?>
<section class="section unique-vip" style="background-image: url(<?php the_field('unique-vip-bg') ?>)">
    <div class="container-fluid">
        <div class="unique-vip_content">
            <?php if (get_field('unique-vip-text')): ?>
                <div class="unique-vip_title">
                    <?php the_field('unique-vip-text') ?>
                </div>
            <?php endif; ?>
            <div class="unique-vip_form">
                <div class="unique-vip_form-title">
                    <p>Запишитесь на курс «VIP - мастер универсал» прямо сейчас</p>
                    <div class="action_form action--new-form">
                        <?php echo do_shortcode($action['action-form']); ?>
                    </div>
                    <div class="action_bottom-text">
                        <p> *Внимание! Нажимая на кнопку, вы соглашаетесь с
                            <a href="<?php echo get_template_directory_uri() ?>/assets/pdf/privacy-policy.pdf"
                               target="_blank">политикой обработки персональных данных.</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>