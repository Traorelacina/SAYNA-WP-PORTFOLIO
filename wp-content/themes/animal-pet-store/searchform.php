<?php
/**
 * Template for displaying search forms in Animal Pet Store
 *
 * @package Animal Pet Store
 * @subpackage animal_pet_store
 */
?>

<?php $animal_pet_store_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
	<input type="search" id="<?php echo esc_attr( $animal_pet_store_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'animal-pet-store' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'animal-pet-store' ); ?></button>
</form>
