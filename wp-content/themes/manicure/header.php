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
</head>

<body <?php body_class(); ?>>
<?php $header = get_option('header');?>

<div class="header_btn-mobile-pay">
    <a href="#" class="header_btn-link btn"><img
                src="<?php echo $header['header-btn-mobile']; ?>"
                alt="img"></a>
<!--            onclick="ipayCheckout({-->
<!--            amount:  --><?php //echo $header['header-btn-price']; ?>
<!--//            currency:'RUB',-->
<!--//            order_number:'',-->
<!--//            description:  '--><?php ////echo $header['header-btn-name']; ?><!--//'},-->
<!--//            function(order) { showSuccessfulPurchase(order) },-->
<!--//            function(order) { showFailurefulPurchase(order) })" -->

</div>
<div><a class="arrow-to-up" href="#hero"><i class="fa fa-angle-up" aria-hidden="true"></i></a></div>
<header class="header js-header" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="header_container">
                <div class="header_logo">
                    <?php if (!empty($header['header-logo'])) {
                    ?>
                        <a href="<?php echo get_home_url(); ?>" class="header_link"> <img src="<?php echo $header['header-logo']; ?>"
                                                                  alt="logo"
                                                                  class="header_img">
                           <p class="shadow-text--super-light"><strong><?php echo $header['header-logo-text']; ?></strong></p>
                        </a>
                    <?php } ?>
                </div>
                <?php get_template_part('./template-parts/blocks/swipe-menu'); ?>   <?php get_template_part('./template-parts/blocks/menu-btn'); ?>
                <div class="header_btn">
                    <a  href="#" class="header_btn-link btn">Оплатить<br>онлайн</a>
<!--                            onclick="ipayCheckout({-->
<!--                            amount:  --><?php //echo $header['header-btn-price']; ?>
<!--//                            currency:'RUB',-->
<!--//                            order_number:'',-->
<!--//                            description:  '--><?php ////echo $header['header-btn-name']; ?><!--//,'},-->
<!--//                            function(order) { showSuccessfulPurchase(order) },-->
<!--//                            function(order) { showFailurefulPurchase(order) })" -->

                </div>
                <div class="header_phone">
                    <div class="header_number-wrapp">
                        <?php if (!empty($header['header-logo'])) {
                        ?>
                            <div class="shadow-text--super-light header_top-text"><?php echo $header['header_top-text']; ?></div>
                        <?php } ?>
<!--                        --><?php //if (get_field('header_tel')): ?>
                            <div class="header_number">+7 (495) 181-11-21</div>
<!--                        --><?php //endif; ?>
                        <?php if (!empty($header['header-logo'])) {
                        ?>
                        <a href="#sing-up" class="header_call js-pop-up"><?php echo $header['header_tel-text']; ?></a>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<main class="main-content">
