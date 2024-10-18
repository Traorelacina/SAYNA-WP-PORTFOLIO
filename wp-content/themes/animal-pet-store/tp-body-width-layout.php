<?php

	$animal_pet_store_tp_theme_css = "";

$animal_pet_store_theme_lay = get_theme_mod( 'animal_pet_store_tp_body_layout_settings','Full');
if($animal_pet_store_theme_lay == 'Container'){
$animal_pet_store_tp_theme_css .='body{';
	$animal_pet_store_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$animal_pet_store_tp_theme_css .='}';
$animal_pet_store_tp_theme_css .='@media screen and (max-width:575px){';
		$animal_pet_store_tp_theme_css .='body{';
			$animal_pet_store_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$animal_pet_store_tp_theme_css .='} }';
$animal_pet_store_tp_theme_css .='#slider .carousel-control-next{';
	$animal_pet_store_tp_theme_css .='right: 47%;';
$animal_pet_store_tp_theme_css .='}';
$animal_pet_store_tp_theme_css .='.page-template-front-page .menubar{';
	$animal_pet_store_tp_theme_css .='position: static;';
$animal_pet_store_tp_theme_css .='}';
$animal_pet_store_tp_theme_css .='.scrolled{';
	$animal_pet_store_tp_theme_css .='width: auto; left:0; right:0;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_theme_lay == 'Container Fluid'){
$animal_pet_store_tp_theme_css .='body{';
	$animal_pet_store_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$animal_pet_store_tp_theme_css .='}';
$animal_pet_store_tp_theme_css .='@media screen and (max-width:575px){';
		$animal_pet_store_tp_theme_css .='body{';
			$animal_pet_store_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$animal_pet_store_tp_theme_css .='} }';
$animal_pet_store_tp_theme_css .='.page-template-front-page .menubar{';
	$animal_pet_store_tp_theme_css .='width: 99%';
$animal_pet_store_tp_theme_css .='}';		
$animal_pet_store_tp_theme_css .='.scrolled{';
	$animal_pet_store_tp_theme_css .='width: auto; left:0; right:0;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_theme_lay == 'Full'){
$animal_pet_store_tp_theme_css .='body{';
	$animal_pet_store_tp_theme_css .='max-width: 100%;';
$animal_pet_store_tp_theme_css .='}';
}

$animal_pet_store_scroll_position = get_theme_mod( 'animal_pet_store_scroll_top_position','Right');
if($animal_pet_store_scroll_position == 'Right'){
$animal_pet_store_tp_theme_css .='#return-to-top{';
    $animal_pet_store_tp_theme_css .='right: 20px;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_scroll_position == 'Left'){
$animal_pet_store_tp_theme_css .='#return-to-top{';
    $animal_pet_store_tp_theme_css .='left: 20px;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_scroll_position == 'Center'){
$animal_pet_store_tp_theme_css .='#return-to-top{';
    $animal_pet_store_tp_theme_css .='right: 50%;left: 50%;';
$animal_pet_store_tp_theme_css .='}';
}

    
//Social icon Font size
$animal_pet_store_social_icon_fontsize = get_theme_mod('animal_pet_store_social_icon_fontsize');
	$animal_pet_store_tp_theme_css .='.media-links a i{';
$animal_pet_store_tp_theme_css .='font-size: '.esc_attr($animal_pet_store_social_icon_fontsize).'px;';
$animal_pet_store_tp_theme_css .='}';

// site title font size option
$animal_pet_store_site_title_font_size = get_theme_mod('animal_pet_store_site_title_font_size', 25);{
$animal_pet_store_tp_theme_css .='.logo h1 , .logo p a{';
	$animal_pet_store_tp_theme_css .='font-size: '.esc_attr($animal_pet_store_site_title_font_size).'px;';
$animal_pet_store_tp_theme_css .='}';
}

//site tagline font size option
$animal_pet_store_site_tagline_font_size = get_theme_mod('animal_pet_store_site_tagline_font_size', 15);{
$animal_pet_store_tp_theme_css .='.logo p{';
	$animal_pet_store_tp_theme_css .='font-size: '.esc_attr($animal_pet_store_site_tagline_font_size).'px;';
$animal_pet_store_tp_theme_css .='}';
}

// related post
$animal_pet_store_related_post_mob = get_theme_mod('animal_pet_store_related_post_mob', true);
$animal_pet_store_related_post = get_theme_mod('animal_pet_store_remove_related_post', true);
$animal_pet_store_tp_theme_css .= '.related-post-block {';
if ($animal_pet_store_related_post == false) {
    $animal_pet_store_tp_theme_css .= 'display: none;';
}
$animal_pet_store_tp_theme_css .= '}';
$animal_pet_store_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($animal_pet_store_related_post == false || $animal_pet_store_related_post_mob == false) {
    $animal_pet_store_tp_theme_css .= '.related-post-block { display: none; }';
}
$animal_pet_store_tp_theme_css .= '}';

// slider btn
$animal_pet_store_slider_buttom_mob = get_theme_mod('animal_pet_store_slider_buttom_mob', true);
$animal_pet_store_slider_button = get_theme_mod('animal_pet_store_slider_button', true);
$animal_pet_store_tp_theme_css .= '#slider .more-btn {';
if ($animal_pet_store_slider_button == false) {
    $animal_pet_store_tp_theme_css .= 'display: none;';
}
$animal_pet_store_tp_theme_css .= '}';
$animal_pet_store_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($animal_pet_store_slider_button == false || $animal_pet_store_slider_buttom_mob == false) {
    $animal_pet_store_tp_theme_css .= '#slider .more-btn { display: none; }';
}
$animal_pet_store_tp_theme_css .= '}';

//return to header mobile				
$animal_pet_store_return_to_header_mob = get_theme_mod('animal_pet_store_return_to_header_mob', true);
$animal_pet_store_return_to_header = get_theme_mod('animal_pet_store_return_to_header', true);
$animal_pet_store_tp_theme_css .= '.return-to-header{';
if ($animal_pet_store_return_to_header == false) {
    $animal_pet_store_tp_theme_css .= 'display: none;';
}
$animal_pet_store_tp_theme_css .= '}';
$animal_pet_store_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($animal_pet_store_return_to_header == false || $animal_pet_store_return_to_header_mob == false) {
    $animal_pet_store_tp_theme_css .= '.return-to-header{ display: none; }';
}
$animal_pet_store_tp_theme_css .= '}';

//footer image
$animal_pet_store_footer_widget_image = get_theme_mod('animal_pet_store_footer_widget_image');
if($animal_pet_store_footer_widget_image != false){
$animal_pet_store_tp_theme_css .='#footer{';
	$animal_pet_store_tp_theme_css .='background: url('.esc_attr($animal_pet_store_footer_widget_image).');';
$animal_pet_store_tp_theme_css .='}';
}

// related product
$animal_pet_store_related_product = get_theme_mod('animal_pet_store_related_product',true);
if($animal_pet_store_related_product == false){
$animal_pet_store_tp_theme_css .='.related.products{';
	$animal_pet_store_tp_theme_css .='display: none;';
$animal_pet_store_tp_theme_css .='}';
}

//menu font size
$animal_pet_store_menu_font_size = get_theme_mod('animal_pet_store_menu_font_size', 14);{
$animal_pet_store_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$animal_pet_store_tp_theme_css .='font-size: '.esc_attr($animal_pet_store_menu_font_size).'px;';
$animal_pet_store_tp_theme_css .='}';
}

// menu text tranform
$animal_pet_store_menu_text_tranform = get_theme_mod( 'animal_pet_store_menu_text_tranform','Capitalize');
if($animal_pet_store_menu_text_tranform == 'Uppercase'){
$animal_pet_store_tp_theme_css .='.main-navigation a {';
	$animal_pet_store_tp_theme_css .='text-transform: uppercase;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_menu_text_tranform == 'Lowercase'){
$animal_pet_store_tp_theme_css .='.main-navigation a {';
	$animal_pet_store_tp_theme_css .='text-transform: lowercase;';
$animal_pet_store_tp_theme_css .='}';
}
else if($animal_pet_store_menu_text_tranform == 'Capitalize'){
$animal_pet_store_tp_theme_css .='.main-navigation a {';
	$animal_pet_store_tp_theme_css .='text-transform: capitalize;';
$animal_pet_store_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

//sale position
$animal_pet_store_scroll_position = get_theme_mod( 'animal_pet_store_sale_tag_position','right');
if($animal_pet_store_scroll_position == 'right'){
$animal_pet_store_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $animal_pet_store_tp_theme_css .='right: 25px !important;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_scroll_position == 'left'){
$animal_pet_store_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $animal_pet_store_tp_theme_css .='left: 25px !important;';
$animal_pet_store_tp_theme_css .='}';
}

//Font Weight
$animal_pet_store_menu_font_weight = get_theme_mod( 'animal_pet_store_menu_font_weight','400');
if($animal_pet_store_menu_font_weight == '100'){
$animal_pet_store_tp_theme_css .='.main-navigation a{';
    $animal_pet_store_tp_theme_css .='font-weight: 100;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_menu_font_weight == '200'){
$animal_pet_store_tp_theme_css .='.main-navigation a{';
    $animal_pet_store_tp_theme_css .='font-weight: 200;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_menu_font_weight == '300'){
$animal_pet_store_tp_theme_css .='.main-navigation a{';
    $animal_pet_store_tp_theme_css .='font-weight: 300;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_menu_font_weight == '400'){
$animal_pet_store_tp_theme_css .='.main-navigation a{';
    $animal_pet_store_tp_theme_css .='font-weight: 400;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_menu_font_weight == '500'){
$animal_pet_store_tp_theme_css .='.main-navigation a{';
    $animal_pet_store_tp_theme_css .='font-weight: 500;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_menu_font_weight == '600'){
$animal_pet_store_tp_theme_css .='.main-navigation a{';
    $animal_pet_store_tp_theme_css .='font-weight: 600;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_menu_font_weight == '700'){
$animal_pet_store_tp_theme_css .='.main-navigation a{';
    $animal_pet_store_tp_theme_css .='font-weight: 700;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_menu_font_weight == '800'){
$animal_pet_store_tp_theme_css .='.main-navigation a{';
    $animal_pet_store_tp_theme_css .='font-weight: 800;';
$animal_pet_store_tp_theme_css .='}';
}else if($animal_pet_store_menu_font_weight == '900'){
$animal_pet_store_tp_theme_css .='.main-navigation a{';
    $animal_pet_store_tp_theme_css .='font-weight: 900;';
$animal_pet_store_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
	$animal_pet_store_post_image_round = get_theme_mod('animal_pet_store_post_image_round', 0);
	if($animal_pet_store_post_image_round != false){
		$animal_pet_store_tp_theme_css .='.blog .box-image img{';
			$animal_pet_store_tp_theme_css .='border-radius: '.esc_attr($animal_pet_store_post_image_round).'px;';
		$animal_pet_store_tp_theme_css .='}';
	}

	$animal_pet_store_post_image_width = get_theme_mod('animal_pet_store_post_image_width', '');
	if($animal_pet_store_post_image_width != false){
		$animal_pet_store_tp_theme_css .='.blog .box-image img{';
			$animal_pet_store_tp_theme_css .='Width: '.esc_attr($animal_pet_store_post_image_width).'px;';
		$animal_pet_store_tp_theme_css .='}';
	}

	$animal_pet_store_post_image_length = get_theme_mod('animal_pet_store_post_image_length', '');
	if($animal_pet_store_post_image_length != false){
		$animal_pet_store_tp_theme_css .='.blog .box-image img{';
			$animal_pet_store_tp_theme_css .='height: '.esc_attr($animal_pet_store_post_image_length).'px;';
		$animal_pet_store_tp_theme_css .='}';
	}