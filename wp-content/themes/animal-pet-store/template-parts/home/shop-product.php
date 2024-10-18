<?php
/**
 * Template part for displaying product section
 *
 * @package Animal Pet Store
 * @subpackage animal_pet_store
 */

?>
<?php $animal_pet_store_static_image = get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>

<?php if( get_theme_mod( 'animal_pet_store_show_hide_product_section', true) != '') { ?>
<section id="product" class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
			<?php $animal_pet_store_about_page = array();
	        $animal_pet_store_mod = absint( get_theme_mod( 'animal_pet_store_about_page' ));
	        if ( 'page-none-selected' != $animal_pet_store_mod ) {
	          $animal_pet_store_about_page[] = $animal_pet_store_mod;
	        }
		      if( !empty($animal_pet_store_about_page) ) :
		        $animal_pet_store_args = array(
		          'post_type' => 'page',
		          'post__in' => $animal_pet_store_about_page,
		          'orderby' => 'post__in'
		        );
	        $animal_pet_store_query = new WP_Query( $animal_pet_store_args );
        	if ( $animal_pet_store_query->have_posts() ) :
          	while ( $animal_pet_store_query->have_posts() ) : $animal_pet_store_query->the_post(); ?>
          	<div class="product-main-img">
          		<?php if(has_post_thumbnail()){ ?>
               <img src="<?php the_post_thumbnail_url('full'); ?>"/> <?php }else {echo ('<img src="'.$animal_pet_store_static_image.'">'); } ?>
          		<div class="product-info">
   					<h3><?php the_title(); ?></h3>
		            <div class="more-btn">
		              <a href="<?php the_permalink(); ?>"><?php esc_html_e('Shop Now','animal-pet-store'); ?></a>
		            </div>
   						</div>
          	</div>
          <?php endwhile; ?>
        	<?php else : ?>
          <div class="no-postfound"></div>
        	<?php endif;
      		endif;
      			wp_reset_postdata();?>
      		<div class="clearfix"></div>
			</div>
			<div class="col-lg-9">
				<div class="heading-det">
					<?php if( get_theme_mod( 'animal_pet_store_product_short_heading' ) != '' ) { ?>
				  	<h2><?php echo esc_html( get_theme_mod( 'animal_pet_store_product_short_heading','' ) ); ?></h2>
					<?php } ?>
					<?php if( get_theme_mod( 'animal_pet_store_product_heading' ) != '' ) { ?>
					  <p><?php echo esc_html( get_theme_mod( 'animal_pet_store_product_heading','' ) ); ?></p>
					<?php } ?>
				</div>
				<?php if(class_exists('woocommerce')){ ?> 
				<div class="product_kit">
		      <div class="owl-carousel">
	          <?php
	            $animal_pet_store_args = array(
	              'post_type'      => 'product',
	              'posts_per_page' => 10,
	              'product_cat'    => get_theme_mod('animal_pet_store_recent_product_category')
	            );
	            $loop = new WP_Query( $animal_pet_store_args );
	            while ( $loop->have_posts() ) : $loop->the_post();
							?>
									<div class="product-box text-center m-1">
										<?php	global $product; ?>
											<div class="product-image">
												<?php echo woocommerce_get_product_thumbnail(); ?>
													<div class="pro-buttons">
														<?php if(class_exists('YITH_WCWL')){ ?>
		                        	<span class="wishlist align-self-center"><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?></span>
					                  <?php }?>
					                  <div class="custom_product_meta">
				                      <span class="mr-1 align-self-center"><?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?><i class="fas fa-shopping-basket"></i></span>
				                    </div>
				                    <?php if (class_exists('YITH_WCQV')) { ?>
													    <span class="align-self-center">
													        <?php echo do_shortcode('[yith_quick_view]'); ?>
													    </span>
														<?php } ?>
												</div>
												<div class="sale-tag">
													<?php woocommerce_show_product_sale_flash( $product ); ?>
												</div>
											</div>
											<div class="product-content mt-2">
													<p class="pro-cat mb-0"><?php echo wc_get_product_category_list( $product->get_id(),); ?></p>
													<h3><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a></h3>
													<p><?php echo $product->get_price_html(); ?></p>
													 <div class="product-rating">
				                    <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
				                  </div>
											</div>
									</div>
								<?php
								endwhile;
								wp_reset_query();
	          	?>
		      </div>
				</div>
					<?php }?>
			</div>
		</div>		
	</div>
</section>
<?php }?>
