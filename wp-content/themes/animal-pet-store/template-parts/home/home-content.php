<?php
/**
 * Template part for displaying home page content
 *
 * @package Animal Pet Store
 * @subpackage animal_pet_store
 */

?>

<div id="main-content" class="container py-5">
  	<?php while ( have_posts() ) : the_post(); ?>
  		<?php the_content(); ?>
  	<?php endwhile; // end of the loop. ?>
</div>
