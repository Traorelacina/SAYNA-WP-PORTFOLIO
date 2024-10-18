<?php

$animal_pet_store_tp_theme_css = '';

//theme-color
$animal_pet_store_tp_color_option = get_theme_mod('animal_pet_store_tp_color_option');

if($animal_pet_store_tp_color_option != false){
$animal_pet_store_tp_theme_css .='.main-navigation .menu > ul > li.highlight, .box:before,.box:after,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn,.toggle-nav i, #return-to-top,.error-404 [type="submit"],.news-detail:after,.newsletter_shortcode input[type="submit"],#about h6, a.top-btn:hover, .top-btn ,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale, .wc-block-cart__submit-container a ,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button, .wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link,.more-btn a:hover,#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon,.custom_product_meta,.category-btn,button[type="submit"] ,.category-dropdown::-webkit-scrollbar-thumb,.category-dropdown::-webkit-scrollbar,.category-dropdown::-webkit-scrollbar-track,#theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before{';
$animal_pet_store_tp_theme_css .='background-color: '.esc_attr($animal_pet_store_tp_color_option).';';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_color_option != false){
$animal_pet_store_tp_theme_css .='a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3,.page-box h4 a,.readmore-btn a,.box-content a ,.woocommerce-message::before ,.wp-block-search .wp-block-search__label,#theme-sidebar h2.wp-block-heading,.timebox i,#theme-sidebar .wp-block-search .wp-block-search__label,.box-info i, .post_category a , .innermenubox .more-btn a,.innermenubox .more-btn a:hover ,.main-navigation ul ul li.page_item_has_children:after,.header-details i,#slider h6,.wc-block-checkout__actions_row a,a:hover,#theme-sidebar a:hover,#footer li a:hover,#theme-sidebar .widget_tag_cloud a:hover,#theme-sidebar .tagcloud a:hover ,#footer p.wp-block-tag-cloud a:hover,#footer .tagcloud a:hover,.main-navigation a:hover, .logo a:hover, #slider .inner_carousel h1 a:hover, #product h3 a:hover, #product .more-btn a:hover,#slider .inner_carousel p.slider-text {';
$animal_pet_store_tp_theme_css .='color: '.esc_attr($animal_pet_store_tp_color_option).';';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_color_option != false){
$animal_pet_store_tp_theme_css .='.headerbox a:hover{';
$animal_pet_store_tp_theme_css .='color: '.esc_attr($animal_pet_store_tp_color_option).'!important;';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_color_option != false){
$animal_pet_store_tp_theme_css .='.main-navigation .current_page_item > a,.wp-block-quote:not(.is-large):not(.is-style-large),#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon,#about .advice-box ,.readmore-btn a,#product button.owl-prev i, #product button.owl-next i,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,#footer .tagcloud a:hover,.wp-block-tag-cloud a:hover,.post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
	$animal_pet_store_tp_theme_css .='border-color: '.esc_attr($animal_pet_store_tp_color_option).';';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_color_option != false){
$animal_pet_store_tp_theme_css .='.page-box,#theme-sidebar section {';
    $animal_pet_store_tp_theme_css .='border-left-color: '.esc_attr($animal_pet_store_tp_color_option).';';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_color_option != false){
$animal_pet_store_tp_theme_css .='.page-box,#theme-sidebar section {';
    $animal_pet_store_tp_theme_css .='border-bottom-color: '.esc_attr($animal_pet_store_tp_color_option).';';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_color_option != false){
$animal_pet_store_tp_theme_css .='.woocommerce-message {';
$animal_pet_store_tp_theme_css .='border-top-color: '.esc_attr($animal_pet_store_tp_color_option).';';
$animal_pet_store_tp_theme_css .='}';
}


//preloader

$animal_pet_store_tp_preloader_color1_option = get_theme_mod('animal_pet_store_tp_preloader_color1_option');
$animal_pet_store_tp_preloader_color2_option = get_theme_mod('animal_pet_store_tp_preloader_color2_option');
$animal_pet_store_tp_preloader_bg_color_option = get_theme_mod('animal_pet_store_tp_preloader_bg_color_option');

if($animal_pet_store_tp_preloader_color1_option != false){
$animal_pet_store_tp_theme_css .='.center1{';
	$animal_pet_store_tp_theme_css .='border-color: '.esc_attr($animal_pet_store_tp_preloader_color1_option).' !important;';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_preloader_color1_option != false){
$animal_pet_store_tp_theme_css .='.center1 .ring::before{';
	$animal_pet_store_tp_theme_css .='background: '.esc_attr($animal_pet_store_tp_preloader_color1_option).' !important;';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_preloader_color2_option != false){
$animal_pet_store_tp_theme_css .='.center2{';
	$animal_pet_store_tp_theme_css .='border-color: '.esc_attr($animal_pet_store_tp_preloader_color2_option).' !important;';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_preloader_color2_option != false){
$animal_pet_store_tp_theme_css .='.center2 .ring::before{';
	$animal_pet_store_tp_theme_css .='background: '.esc_attr($animal_pet_store_tp_preloader_color2_option).' !important;';
$animal_pet_store_tp_theme_css .='}';
}
if($animal_pet_store_tp_preloader_bg_color_option != false){
$animal_pet_store_tp_theme_css .='.loader{';
	$animal_pet_store_tp_theme_css .='background: '.esc_attr($animal_pet_store_tp_preloader_bg_color_option).';';
$animal_pet_store_tp_theme_css .='}';
}

// footer-bg-color
$animal_pet_store_tp_footer_bg_color_option = get_theme_mod('animal_pet_store_tp_footer_bg_color_option');

if($animal_pet_store_tp_footer_bg_color_option != false){
$animal_pet_store_tp_theme_css .='#footer{';
	$animal_pet_store_tp_theme_css .='background: '.esc_attr($animal_pet_store_tp_footer_bg_color_option).' !important;';
$animal_pet_store_tp_theme_css .='}';
}

// logo tagline color
$animal_pet_store_site_tagline_color = get_theme_mod('animal_pet_store_site_tagline_color');

if($animal_pet_store_site_tagline_color != false){
$animal_pet_store_tp_theme_css .='.logo h1 a, .logo p.site-title a{';
$animal_pet_store_tp_theme_css .='color: '.esc_attr($animal_pet_store_site_tagline_color).' !important;';
$animal_pet_store_tp_theme_css .='}';
}