<?php
/**
 * Template Name: Home Page
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>

<?php get_template_part('./template-parts/sections/hero'); ?>
<?php get_template_part('./template-parts/sections/courses-home'); ?>


<?php //get_template_part( './template-parts/sections/advantages' ); ?>

<?php get_template_part('./template-parts/sections/about-home'); ?>
<?php get_template_part('./template-parts/sections/about-number'); ?>
<?php get_template_part('./template-parts/sections/photo'); ?>
<?php get_template_part('./template-parts/sections/video-home'); ?>
<?php get_template_part('./template-parts/sections/realy-study'); ?>

<?php get_template_part('./template-parts/sections/teachers'); ?>
<?php get_template_part('./template-parts/sections/photo2'); ?>
<?php get_template_part('./template-parts/sections/grafic'); ?>
<?php get_template_part('./template-parts/sections/info'); ?>
<?php //get_template_part( './template-parts/sections/numbers' ); ?>
<?php get_template_part('./template-parts/sections/advantages-home'); ?>
<?php get_template_part('./template-parts/sections/info_link'); ?>
<?php get_template_part('./template-parts/sections/reviews'); ?>


<?php get_template_part('./template-parts/sections/text'); ?>
<?php get_template_part('./template-parts/sections/contacts'); ?>


<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>


