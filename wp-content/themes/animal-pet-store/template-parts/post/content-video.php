<?php
/**
 * Template part for displaying posts
 *
 * @package Animal Pet Store
 * @subpackage animal_pet_store
 */

?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<?php $animal_pet_store_column_layout = get_theme_mod( 'animal_pet_store_sidebar_post_layout');
if($animal_pet_store_column_layout == 'four-column' || $animal_pet_store_column_layout == 'three-column' ){ ?>
  <div id="category-post">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="page-box">
        <?php
          if ( ! is_single() ) {
            // If not a single post, highlight the video file.
            if ( ! empty( $video ) ) {
              foreach ( $video as $video_html ) {
                echo '<div class="entry-video">';
                  echo $video_html;
                echo '</div>';
              }
            };
          };
        ?> 
        <div class="box-content mt-2 text-center">
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
    </article>
  </div>
<?php } else{ ?>
<div id="category-post">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="page-box row">
    <?php $animal_pet_store_post_layout = get_theme_mod( 'animal_pet_store_post_layout','image-content');
    if($animal_pet_store_post_layout == 'image-content'){ ?>
      <div class="col-lg-6 col-md-12 align-self-center">
        <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the video file.
          if ( ! empty( $video ) ) {
            foreach ( $video as $video_html ) {
              echo '<div class="entry-video">';
                echo $video_html;
              echo '</div>';
            }
          };
        };
        ?> 
      </div>
      <div class="box-content col-lg-6 col-md-12">
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
    <?php }
    else if($animal_pet_store_post_layout == 'content-image'){ ?>
      <div class="box-content col-lg-6 col-md-12">
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
      <div class="col-lg-6 col-md-12 align-self-center  pt-lg-0 pt-3">
        <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the video file.
          if ( ! empty( $video ) ) {
            foreach ( $video as $video_html ) {
              echo '<div class="entry-video">';
                echo $video_html;
              echo '</div>';
            }
          };
        };
        ?> 
      </div>
    <?php }?>
      <div class="clearfix"></div>
    </div>
  </article>
</div>
<?php } ?>