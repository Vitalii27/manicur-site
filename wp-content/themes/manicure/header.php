<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package manicure
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="b59cc5f407bab4a7"/>
    <meta property="og:image" content="http://shkola-nika.ru/ogp.jpg" />
    <meta property="og:image:secure_url" content="https://secure.shkola-nika.ru/ogp.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta property="og:image:alt" content="A shiny red apple with a bite taken out" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://www.shkola-nika.ru/canonical-link.html"/>
        <script src="https://securepayments.sberbank.ru/payment/docsite/assets/js/ipay.js"></script>

    <?php wp_head(); ?>
    <!--    <script src="//st.yagla.ru/js/y.c.js?h=ee7f27a2337c939835e600bed3d1cfe3"></script>-->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5JBQ8JL');</script>
    <!-- End Google Tag Manager -->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '565697163839312');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=565697163839312&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body <?php body_class(); ?>>
<?php $header = get_option('header'); ?>
<script>
    var ipay = new IPAY({api_token: 'cik3gednh4tctj4oi6s9057s3c'});
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JBQ8JL"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div><a class="arrow-to-up" href="#hero"><i class="fa fa-angle-up" aria-hidden="true"></i></a></div>
<header class="header js-header" id="header">
    <div class="header_btn-mobile-pay">
        <a onclick="ipayCheckout({
                amount:  <?php echo $header['header-btn-price']; ?>,
                currency:'RUB',
                order_number:'',
                description:  '<?php echo $header['header-btn-name']; ?>'},
                function(order) { showSuccessfulPurchase(order) },
                function(order) { showFailurefulPurchase(order) })" href="#" class="header_btn-link btn"><img
                    src="<?php echo $header['header-btn-mobile']; ?>"
                    alt="img"></a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="header_container">
                <div class="header_logo">
                    <?php if (!empty($header['header-logo'])) {
                        ?>
                        <a href="<?php echo get_home_url(); ?>" class="header_link"> <img
                                    src="<?php echo $header['header-logo']; ?>"
                                    alt="logo"
                                    class="header_img">
                            <p >
                                <strong><?php echo $header['header-logo-text']; ?></strong></p>
                        </a>
                    <?php } ?>
                </div>
                <div class="header_menu">
                    <?php get_template_part('./template-parts/blocks/swipe-menu'); ?>   <?php get_template_part('./template-parts/blocks/menu-btn'); ?>
                    <div class="header-sber-container">
                        <div class="header_phone">
                            <div class="header_number-wrapp">
                                <?php if (!empty($header['header-logo'])) {
                                    ?>
                                    <div class="header_top-text"><?php echo $header['header_top-text']; ?></div>
                                <?php } ?>

                                <div class="header_number">+7 (495) 181-11-21</div>

                                <?php if (!empty($header['header-logo'])) {
                                    ?>
                                    <a href="#callback-vip"
                                       class="header_call js-pop-up"><?php echo $header['header_tel-text']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="header_btn">
                            <a onclick="ipayCheckout({
                                    amount:  <?php echo $header['header-btn-price']; ?>,
                                    currency:'RUB',
                                    order_number:'',
                                    description:  '<?php echo $header['header-btn-name']; ?>,'},
                                    function(order) { showSuccessfulPurchase(order) },
                                    function(order) { showFailurefulPurchase(order) })" href="#" class="header_btn-link btn">Оплатить<br>онлайн</a>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
</header>

<main class="main-content">
