<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package manicure
 */

?>

</main>
<?php $header = get_option('header'); ?>
<?php $footer = get_option('footer'); ?>
<footer class="footer" id="footer">
    <div class="container-fluid">
        <div class="footer_container">

                <div class="footer_logo">
                    <div class="footer_logo-wrap">


                    <?php if (!empty($header['header-logo'])) {
                        ?>
                        <a href="#hero" class="footer_link"> <img src="<?php echo $header['header-logo']; ?>" alt="logo"
                                                                  class="footer_img">

                        </a>
                    <?php } ?>
                    </div>
                    <div class="footer_social">
                        <?php if (!empty($footer['insta-icon'])) {
                            ?>
                            <a href="<?php echo $footer['insta-link']; ?>"><img
                                        src="<?php echo $footer['insta-icon']; ?>" alt="icon"></a>
                        <?php } ?>
                        <?php if (!empty($footer['vk-icon'])) {
                            ?>
                            <a href="<?php echo $footer['vk-link']; ?>"><img
                                        src="<?php echo $footer['vk-icon']; ?>" alt="icon"></a>
                        <?php } ?>
                        <?php if (!empty($footer['fb-icon'])) {
                            ?>
                            <a href="<?php echo $footer['fb-link']; ?>"><img
                                        src="<?php echo $footer['fb-icon']; ?>" alt="icon"></a>
                        <?php } ?>


                    </div>
                </div>

            <div class="footer_copy">
                <div class="footer_menu">
                    <?php
                    $args = array(
                        'theme_location' => 'footer',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => '',
                        'walker' => '',
                        'container' => 'ul',

                    );
                    wp_nav_menu($args);

                    ?>
                    <div class="footer_all-course">
                        <a href="https://www.shkola-nika.ru/vse-kursy-po-manikyuru-i-pedikyuru/">Все курсы по маникюру и педикюру</a> </div>
                </div>
                <?php if (!empty($footer['footer-menu-text'])) {
                    ?>
                    <div class="footer_copy-text"><?php echo $footer['footer-menu-text']; ?></div>
                    <div class="footer_links">
                        <?php if (!empty($footer['footer_link-text-web'])) {
                            ?>
                            <a href="<?php echo $footer['link-wb-st']; ?>" target="_blank"
                               class="footer_link-web"><?php echo $footer['footer_link-text-web']; ?></a>
                        <?php } ?>
                        <?php if (!empty($footer['footer_link-data'])) {
                            ?>
                            <a href="<?php echo get_template_directory_uri() ?>/assets/pdf/dates.pdf" target="_blank"
                               class="footer_link-web"><?php echo $footer['footer_link-data']; ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>



        </div>

    </div>
</footer>

<?php wp_footer(); ?>

<!-- BEGIN LIVETEX INTEGRATION WITH ROISTAT -->
<script>
    var cacheMessageLivetex = '';
    var LiveTex = {
        onLiveTexReady: function() {
            // код, выполняемый после инициализации LiveTex Client API
            // Поле с введенным текстом - исчезает после отправки, поэтому отлавливаем изменения в поле.
            jQuery('.lt-offline [name="message"]').on('input keyup', function(e) {
                cacheMessageLivetex = $(this).val();
            });

            window.LiveTex.addEventListener(window.LiveTex.Event.OFFLINE_MESSAGE_SENT, function(event){

                var name    = jQuery('.lt-offline [name="name"]').val();
                var email = '';
                var phone = '';
                // Это поле может быть и номером, и почтой одновременно.
                var cacheEmailPhoneLivetex = jQuery('.lt-offline [name="phone"]').val();
                if (cacheEmailPhoneLivetex.indexOf('@') != -1) {
                    email = cacheEmailPhoneLivetex;
                }else{
                    phone = cacheEmailPhoneLivetex;
                }
                roistat.event.send('livetex',{'Текущая страница' : location.href});
                roistatGoal.reach({leadName: 'Новый лид (LiveTex) - Сообщение', name: name, phone: phone, email: email, text: "Текст сообщения: "+cacheMessageLivetex+"\n"+"Со страницы: "+document.location.href});

            });

            // Отлавливаем обратный звонок
            window.LiveTex.addEventListener(window.LiveTex.Event.CALL_STARTED, function(event){

                var phone = jQuery(".lt-xbutton-form-action input.lt-xbutton-input").val();
                roistat.event.send('callback',{'Текущая страница' : location.href});
                roistatGoal.reach({leadName: "Новый лид (LiveTex) - Обратный звонок", name: "Неизвестный контакт", phone: phone, text: 'Со страницы: '+document.location.href});

            });

            window.LiveTex.addEventListener(window.LiveTex.Event.CONVERSATION_STARTED, function(event){

                var name  = jQuery('.lt-welcome input[name="name"]').val();
                var email = jQuery(".lt-welcome input[valid-type='prechat_email']").val();
                var phone = jQuery(".lt-welcome input[valid-type='prechat_phone']").val();
                var text = jQuery(".lt-welcome textarea[name='message']").val();
                roistat.event.send('livetex',{'Текущая страница' : location.href});
                roistatGoal.reach({leadName: "Новый лид (LiveTex) - Чат", name: name, phone: phone, email: email, text: "Текст сообщения: "+text+"\n"+"Со страницы: "+document.location.href});

            });

        }
    };
</script>
<!-- END LIVETEX INTEGRATION WITH ROISTAT -->
<script>
    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', 'af1c039af443f087a76b1d1f95181fc8');
</script>
<!-- ROISTAT END -->	</div>
<!-- {literal} -->
<script type='text/javascript'>
    window['li'+'v'+'eT'+'ex'] = true,
        window['l'+'ive'+'T'+'ex'+'I'+'D'] = 91075,
        window['live'+'Tex_'+'object'] = true;
    (function() {
        var t = document['creat'+'eEle'+'ment']('script');
        t.type ='text/javascript';
        t.async = true;
        t.src = '/'+'/cs15'+'.livete'+'x'+'.ru/js/client.'+'js';
        var c = document['g'+'etElement'+'sByTagNam'+'e']('script')[0];
        if ( c ) c['pa'+'ren'+'tNod'+'e']['in'+'ser'+'tBe'+'fore'](t, c);
        else document['do'+'cu'+'mentEl'+'ement']['fi'+'rst'+'Chil'+'d']['ap'+'pe'+'ndChi'+'ld'](t);
    })();
</script>
<!-- {/literal} -->
<script>
    window.onRoistatAllModulesLoaded = function() {
        window.roistat.leadHunter.onAfterSubmit = function(leadData) {
            yaCounter16846048.reachGoal('LEADHUNTER'); //XXXXXX — номер вашего счетчика Яндекс.Метрики; TARGET_NAME — идентификатор цели.
        }
    };
</script>
</body>
</html>
