<?php

  $scuba_diving_sport_theme_custom_setting_css = '';

	// Global Color
	$scuba_diving_sport_theme_color = get_theme_mod('scuba_diving_sport_theme_color', '#004375');
	$scuba_diving_sport_theme_color_second = get_theme_mod('scuba_diving_sport_theme_color', '#48bf84');

	$scuba_diving_sport_theme_custom_setting_css .=':root {';
		$scuba_diving_sport_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($scuba_diving_sport_theme_color ).'!important;';
		$scuba_diving_sport_theme_custom_setting_css .='--secondary-theme-color: '.esc_attr($scuba_diving_sport_theme_color_second ).'!important;';
	$scuba_diving_sport_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$scuba_diving_sport_scroll_alignment = get_theme_mod('scuba_diving_sport_scroll_alignment', 'right');

    if($scuba_diving_sport_scroll_alignment == 'right'){
        $scuba_diving_sport_theme_custom_setting_css .='.scroll-up{';
            $scuba_diving_sport_theme_custom_setting_css .='right: 30px;!important;';
			$scuba_diving_sport_theme_custom_setting_css .='left: auto;!important;';
        $scuba_diving_sport_theme_custom_setting_css .='}';
    }else if($scuba_diving_sport_scroll_alignment == 'center'){
        $scuba_diving_sport_theme_custom_setting_css .='.scroll-up{';
            $scuba_diving_sport_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
        $scuba_diving_sport_theme_custom_setting_css .='}';
    }else if($scuba_diving_sport_scroll_alignment == 'left'){
        $scuba_diving_sport_theme_custom_setting_css .='.scroll-up{';
            $scuba_diving_sport_theme_custom_setting_css .='left: 30px;!important;';
			$scuba_diving_sport_theme_custom_setting_css .='right: auto;!important;';
        $scuba_diving_sport_theme_custom_setting_css .='}';
    }

    // Related Product

	$scuba_diving_sport_show_related_product = get_theme_mod('scuba_diving_sport_show_related_product', true );

	if($scuba_diving_sport_show_related_product != true){
		$scuba_diving_sport_theme_custom_setting_css .='.related.products{';
			$scuba_diving_sport_theme_custom_setting_css .='display: none;';
		$scuba_diving_sport_theme_custom_setting_css .='}';
	}	

	// Featured Image Hover Effect
    $scuba_diving_sport_show_featured = get_theme_mod('scuba_diving_sport_featured_image_hide_show', 1);
    $scuba_diving_sport_hover_effect = get_theme_mod('scuba_diving_sport_single_post_featured_image_hover','none');

    if ( $scuba_diving_sport_show_featured && $scuba_diving_sport_hover_effect !== 'none' ) {

    $scuba_diving_sport_theme_custom_setting_css .= '
    .post-img img{
        transition: all 0.4s ease;
    }';

    if ( $scuba_diving_sport_hover_effect === 'zoom-in' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .post-img:hover img{
            transform: scale(1.2);
        }';
    }

    if ( $scuba_diving_sport_hover_effect === 'zoom-out' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .post-img img{ transform: scale(1.2); }
        .post-img:hover img{ transform: scale(1); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'grayscale' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .post-img img{ filter: grayscale(100%); }
        .post-img:hover img{ filter: grayscale(0); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'sepia' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .post-img:hover img{ filter: sepia(100%); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'blur' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .post-img:hover img{ filter: blur(3px); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'bright' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .post-img:hover img{ filter: brightness(1.3); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'translate' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .post-img:hover img{ transform: translateY(-10px); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'scale' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .post-img:hover img{ transform: scale(1.1); }';
    }
}

// Product Featured Image Hover Effect
    $scuba_diving_sport_show_featured = get_theme_mod('scuba_diving_sport_featured_image_hide_show', 1);
    $scuba_diving_sport_hover_effect = get_theme_mod('scuba_diving_sport_product_featured_image_hover','none');

    if ( $scuba_diving_sport_show_featured && $scuba_diving_sport_hover_effect !== 'none' ) {

    $scuba_diving_sport_theme_custom_setting_css .= '
    .product-img img{
        transition: all 0.4s ease;
    }';

    if ( $scuba_diving_sport_hover_effect === 'zoom-in' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .product-img:hover img{
            transform: scale(1.2);
        }';
    }

    if ( $scuba_diving_sport_hover_effect === 'zoom-out' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .product-img img{ transform: scale(1.2); }
        .product-img:hover img{ transform: scale(1); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'grayscale' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .product-img img{ filter: grayscale(100%); }
        .product-img:hover img{ filter: grayscale(0); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'sepia' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .product-img:hover img{ filter: sepia(100%); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'blur' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .product-img:hover img{ filter: blur(3px); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'bright' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .product-img:hover img{ filter: brightness(1.3); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'translate' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .product-img:hover img{ transform: translateY(-10px); }';
    }

    if ( $scuba_diving_sport_hover_effect === 'scale' ) {
        $scuba_diving_sport_theme_custom_setting_css .= '
        .product-img:hover img{ transform: scale(1.1); }';
    }
}   