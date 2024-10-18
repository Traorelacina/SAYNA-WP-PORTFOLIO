<?php
/*
* Display Logo and nav
*/
?>

<div class="headerbox">
  <div class="container">
    <div class="row">
      <div class="rtl-cl col-lg-4 col-md-4 align-self-center px-md-0">
        <span class="currency">
          <?php if( get_theme_mod('animal_pet_store_currency_switcher', false) ) : ?>
              <?php
              // Check if WooCommerce Currency Switcher shortcode exists
              if( shortcode_exists('woocommerce_currency_switcher_drop_down_box') ) {
                  echo do_shortcode('[woocommerce_currency_switcher_drop_down_box]');
              } else {
                  echo 'Currency switcher not available';
              }
              ?>
          <?php endif; ?>
      </span>

      <span class="translate-btn">
          <?php if( get_theme_mod('animal_pet_store_cart_language_translator', false) ) : ?>
              <?php
              // Check if Google Translator shortcode exists
              if( shortcode_exists('google-translator') ) {
                  echo do_shortcode('[gtranslate]');
              } else {
                  echo 'Translator not available';
              }
              ?>
          <?php endif; ?>
      </span>

      </div>
      <div class="col-lg-4 col-md-4 align-self-center">
        <?php $animal_pet_store_logo_settings = get_theme_mod( 'animal_pet_store_logo_settings','Different Line');
          if($animal_pet_store_logo_settings == 'Different Line'){ ?>
            <div class="logo mb-md-0 text-center">
              <?php if( has_custom_logo() ) animal_pet_store_the_custom_logo(); ?>
              <?php if(get_theme_mod('animal_pet_store_site_title',true) == 1){ ?>
                <?php if (is_front_page() && is_home()) : ?>
                  <h1 class="text-capitalize">
                      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                  </h1> 
                <?php else : ?>
                    <p class="text-capitalize site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </p>
                <?php endif; ?>
              <?php }?>
              <?php $animal_pet_store_description = get_bloginfo( 'description', 'display' );
              if ( $animal_pet_store_description || is_customize_preview() ) : ?>
                <?php if(get_theme_mod('animal_pet_store_site_tagline',false)){ ?>
                  <p class="site-description mb-0"><?php echo esc_html($animal_pet_store_description); ?></p>
                <?php }?>
              <?php endif; ?>
            </div>
          <?php }else if($animal_pet_store_logo_settings == 'Same Line'){ ?>
            <div class="logo logo-same-line mb-md-0 text-center text-lg-left">
              <div class="row">
                <div class="col-lg-5 col-md-5 align-self-md-center">
                  <?php if( has_custom_logo() ) animal_pet_store_the_custom_logo(); ?>
                </div>
                <div class="col-lg-7 col-md-7 align-self-md-center">
                  <?php if(get_theme_mod('animal_pet_store_site_title',true) == 1){ ?>
                    <?php if (is_front_page() && is_home()) : ?>
                      <h1 class="text-capitalize">
                          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                      </h1> 
                    <?php else : ?>
                        <p class="text-capitalize site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                        </p>
                    <?php endif; ?>
                    <?php }?>
                    <?php $animal_pet_store_description = get_bloginfo( 'description', 'display' );
                    if ( $animal_pet_store_description || is_customize_preview() ) : ?>
                    <?php if(get_theme_mod('animal_pet_store_site_tagline',false)){ ?>
                      <p class="site-description mb-0"><?php echo esc_html($animal_pet_store_description); ?></p>
                    <?php }?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php }?>
      </div>
      <div class="col-lg-4 col-md-4 align-self-center px-0">
        <div class="header-details">
          <?php if(get_theme_mod('animal_pet_store_user_icon',true) != ''){ ?>
            <p class="mb-0">
              <?php if(class_exists('woocommerce')){ ?>
                <?php if (is_user_logged_in()) : ?>
                  <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-sign-out-alt px-lg-2"></i><?php esc_html_e( 'Logout', 'animal-pet-store' ); ?></a>
                <?php else : ?>
                  <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="far fa-user px-lg-2"></i><?php esc_html_e( 'Login', 'animal-pet-store' ); ?></a>
                <?php endif;?>
              <?php } ?>
            </p>
          <?php }?>
           <?php if(get_theme_mod('animal_pet_store_cart_icon',true) != ''){ ?>
            <p class="mb-0">
              <?php if(class_exists('woocommerce')){ ?>
              <span class="cartbox"><a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-basket px-lg-2"></i><span class="cart-value simplep"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count()));?></span><?php esc_html_e( 'Shopping Cart', 'animal-pet-store' ); ?></a>   
              </span>
              <?php } ?>
            </p>
          <?php } ?>
          
          <?php if(class_exists('woocommerce')){ ?>
            <p class="mb-0"><i class="far fa-heart px-lg-2"></i><a href="<?php echo esc_url(home_url('/index.php/wishlist')); ?>"><?php esc_html_e( 'Wishlist', 'animal-pet-store' ); ?></a></p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>