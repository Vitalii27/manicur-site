<?php
/**
 * Template Name: Rerview Page
 *
 * This is the Rerview page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>

<?php get_template_part('./template-parts/sections/banner-title'); ?>
<?php get_template_part('./template-parts/sections/review-section'); ?>
<?php get_template_part('./template-parts/sections/form-review'); ?>
<?php get_template_part('./template-parts/sections/contacts'); ?>



<?php get_footer(); ?>
<?php get_template_part('./template-parts/blocks/popup'); ?>
<?php get_template_part('./template-parts/blocks/alert'); ?>


