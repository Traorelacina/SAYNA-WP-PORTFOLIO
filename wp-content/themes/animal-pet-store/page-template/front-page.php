<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Animal Pet Store
 * @subpackage animal_pet_store
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php do_action( 'animal_pet_store_before_slider' ); ?>

	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php do_action( 'animal_pet_store_after_slider' ); ?>

	<?php get_template_part( 'template-parts/home/shop-product' ); ?>
	<?php do_action( 'animal_pet_store_after_shop-product' ); ?>
	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'animal_pet_store_after_home_content' ); ?>
</main>

<?php get_footer();
