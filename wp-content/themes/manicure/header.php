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
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!--    <script src="https://securepayments.sberbank.ru/payment/docsite/assets/js/ipay.js"></script>-->

    <?php wp_head(); ?>
    <!--    <script src="//st.yagla.ru/js/y.c.js?h=ee7f27a2337c939835e600bed3d1cfe3"></script>-->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5JBQ8JL');</script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
<?php $header = get_option('header'); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JBQ8JL"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div><a class="arrow-to-up" href="#hero"><i class="fa fa-angle-up" aria-hidden="true"></i></a></div>
<header class="header js-header" id="header">
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
                </div>



            </div>
        </div>
    </div>
</header>

<main class="main-content">
