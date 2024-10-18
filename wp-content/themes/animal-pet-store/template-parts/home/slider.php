<?php
/**
 * Template part for displaying slider section
 *
 * @package Animal Pet Store
 * @subpackage animal_pet_store
 */

?>
<?php $animal_pet_store_static_image = get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'animal_pet_store_slider_arrows', true) != '') { ?>
  <section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php $animal_pet_store_slide_pages = array();
      for ( $count = 1; $count <= 4; $count++ ) {
        $mod = intval( get_theme_mod( 'animal_pet_store_slider_page' . $count ));
        if ( 'page-none-selected' != $mod ) {
          $animal_pet_store_slide_pages[] = $mod;
        }
      }
      if( !empty($animal_pet_store_slide_pages) ) :
        $animal_pet_store_args = array(
          'post_type' => 'page',
          'post__in' => $animal_pet_store_slide_pages,
          'orderby' => 'post__in'
        );
        $animal_pet_store_query = new WP_Query( $animal_pet_store_args );
        if ( $animal_pet_store_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $animal_pet_store_query->have_posts() ) : $animal_pet_store_query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <?php if(has_post_thumbnail()){ ?>
               <img src="<?php the_post_thumbnail_url('full'); ?>"/> <?php }else {echo ('<img src="'.$animal_pet_store_static_image.'">'); } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <?php if( get_theme_mod( 'animal_pet_store_slider_short_heading' ) != '' ) { ?>
                <p class="slider-text"><?php echo esc_html( get_theme_mod( 'animal_pet_store_slider_short_heading','' ) ); ?></p>
              <?php } ?>
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <p><?php echo esc_html( wp_trim_words( get_the_content(), 20 ) );?></p>
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Shop Now','animal-pet-store'); ?>  <i class="fas fa-shopping-basket"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Previous','animal-pet-store'); ?></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Next','animal-pet-store'); ?></span>
    </a>
  </div>
  <div class="clearfix"></div>
</section>

<?php } ?>
