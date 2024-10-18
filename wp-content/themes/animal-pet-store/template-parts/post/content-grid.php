<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Animal Pet Store
 * @subpackage animal_pet_store
 */

?>
<article class="col-lg-4 col-md-6">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="page-box">
	        <div class="box-image">
	            <?php the_post_thumbnail();  ?>
	        </div>
		    <div class="box-content text-center">
		    	<h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
		        <div class="box-info">
			        <?php $animal_pet_store_blog_archive_ordering = get_theme_mod('blog_meta_order', array('date', 'author', 'comment', 'category'));
			        foreach ($animal_pet_store_blog_archive_ordering as $animal_pet_store_blog_data_order) : 
			            if ('date' === $animal_pet_store_blog_data_order) : ?>
				            	<i class="far fa-calendar-alt mb-1"></i><span class="entry-date"><?php echo get_the_date('j F, Y'); ?></span>
				            <?php elseif ('author' === $animal_pet_store_blog_data_order) : ?>
			              		<i class="fas fa-user mb-1"></i><span class="entry-author"><?php the_author(); ?></span>
				            <?php elseif ('comment' === $animal_pet_store_blog_data_order) : ?>
			              		<i class="fas fa-comments mb-1"></i><span class="entry-comments"><?php comments_number(__('0 Comments', 'animal-pet-store'), __('0 Comments', 'animal-pet-store'), __('% Comments', 'animal-pet-store')); ?></span>
				            <?php elseif ('category' === $animal_pet_store_blog_data_order) :?>
			              		<i class="fas fa-list mb-1"></i><span class="entry-category"><?php animal_pet_store_display_post_category_count(); ?></span>
				            <?php endif;
			        endforeach; ?>
		        </div>
		        <p><?php echo esc_html(animal_pet_store_excerpt_function());?></p>
	        	<?php if(get_theme_mod('animal_pet_store_remove_read_button',true) != ''){ ?>
		            <div class="readmore-btn">
		                <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'animal-pet-store' ); ?>"><?php echo esc_html(get_theme_mod('animal_pet_store_read_more_text',__('Read More','animal-pet-store')));?></a>
		            </div>
	        	<?php }?>
		    </div>
		    <div class="clearfix"></div>
		</div>
	</div>
</article>