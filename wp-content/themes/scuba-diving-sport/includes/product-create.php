<?php

class Whizzie {

	public function __construct() {
		$this->init();
	}

	public function init()
	
	{
	
	}

	public static function scuba_diving_sport_setup_widgets(){

	set_theme_mod( 'scuba_diving_sport_header_location', '61 Harrison St. waterioo' );
	set_theme_mod( 'scuba_diving_sport_header_phone_number', '123456789' );
	set_theme_mod( 'scuba_diving_sport_header_opening_heading', 'Mon - Sat 9:00 - 7:00' );
	set_theme_mod( 'scuba_diving_sport_header_button_text', 'Get Started' );
	set_theme_mod( 'scuba_diving_sport_header_button_url', '#' );
	set_theme_mod('scuba_diving_sport_social_links_settings', array(
		array(
			"link_text" => "fab fa-instagram",
			"link_url" => "www.instagram.com"
		),
		array(
			"link_text" => "fab fa-twitter",
			"link_url" => "www.twitter.com"
		),
		array(
			"link_text" => "fab fa-youtube",
			"link_url" => "www.youtube.com"
		),
		array(
			"link_text" => "fab fa-linkedin-in",
			"link_url" => "www.linkedin.com"
		)
	));

	$scuba_diving_sport_product_image_gallery = array();
	$scuba_diving_sport_product_ids = array();

	$scuba_diving_sport_product_category= array(
		'Product Category'       => array(
			'Product Title 01',
			'Product Title 02',
			'Product Title 03',
			'Product Title 04',
		),
	);

	$scuba_diving_sport_k = 1;
	foreach ( $scuba_diving_sport_product_category as $scuba_diving_sport_product_cats => $scuba_diving_sport_products_name ) { 
	// Insert porduct cats Start
	$content = 'This is sample product category';
	$scuba_diving_sport_parent_category	=	wp_insert_term(
	$scuba_diving_sport_product_cats, // the term
	'product_cat', // the taxonomy
		array(
		'description'=> $content,
		'slug' => str_replace( ' ', '-', $scuba_diving_sport_product_cats)
		)
	);

// -------------- create subcategory END -----------------

	$scuba_diving_sport_n=1;
	// create Product START
	foreach ( $scuba_diving_sport_products_name as $key => $scuba_diving_sport_product_title ) {
	$content = '
		<div class="main_content">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>';

	// Create post object
	$scuba_diving_sport_my_post = array(
		'post_title'    => wp_strip_all_tags( $scuba_diving_sport_product_title ),
		'post_content'  => $content,
		'post_status'   => 'publish',
		'post_type'     => 'product',
		'post_category' => [$scuba_diving_sport_parent_category['term_id']]
	);

	// Insert the post into the database

	$scuba_diving_sport_uqpost_id = wp_insert_post($scuba_diving_sport_my_post);
	wp_set_object_terms( $scuba_diving_sport_uqpost_id, str_replace( ' ', '-', $scuba_diving_sport_product_cats), 'product_cat', true );

	$scuba_diving_sport_product_price = array('35.89','35.89','35.89','35.89');
	$scuba_diving_sport_product_regular_price = array('68.99','68.99','68.99','68.99');
	$scuba_diving_sport_product_sale_price = array('35.89','35.89','35.89','35.89');
	
	update_post_meta( $scuba_diving_sport_uqpost_id, '_regular_price', $scuba_diving_sport_product_regular_price[$scuba_diving_sport_n-1] );
	update_post_meta( $scuba_diving_sport_uqpost_id, '_price', $scuba_diving_sport_product_price[$scuba_diving_sport_n-1] );
	update_post_meta( $scuba_diving_sport_uqpost_id, '_sale_price', $scuba_diving_sport_product_sale_price[$scuba_diving_sport_n-1] );
	array_push( $scuba_diving_sport_product_ids,  $scuba_diving_sport_uqpost_id );

	// Now replace meta w/ new updated value array
	$scuba_diving_sport_image_url = get_template_directory_uri().'/assets/images/product/'.$scuba_diving_sport_product_cats.'/' . str_replace(' ', '_', strtolower($scuba_diving_sport_product_title)).'.png';
	$scuba_diving_sport_image_name  = $scuba_diving_sport_product_title.'.png';
	$scuba_diving_sport_upload_dir = wp_upload_dir();
	// Set upload folder
	$scuba_diving_sport_image_data = file_get_contents(esc_url($scuba_diving_sport_image_url));
	// Get image data
	$unique_file_name = wp_unique_filename($scuba_diving_sport_upload_dir['path'], $scuba_diving_sport_image_name);
	// Generate unique name
	$scuba_diving_sport_filename = basename($unique_file_name);
	// Create image file name
	// Check folder permission and define file location
	if (wp_mkdir_p($scuba_diving_sport_upload_dir['path'])) {
	$scuba_diving_sport_file = $scuba_diving_sport_upload_dir['path'].'/'.$scuba_diving_sport_filename;
	} else {
	$scuba_diving_sport_file = $scuba_diving_sport_upload_dir['basedir'].'/'.$scuba_diving_sport_filename;
	}
	
	file_put_contents($scuba_diving_sport_file, $scuba_diving_sport_image_data);
	// Check image file type
	$wp_filetype = wp_check_filetype($scuba_diving_sport_filename, null);
	// Set attachment data
	$attachment = array(
	'post_mime_type' => $wp_filetype['type'],
	'post_title'     => sanitize_file_name($scuba_diving_sport_filename),
	'post_type'      => 'product',
	'post_status'    => 'inherit',
	);

	// Create the attachment
	$scuba_diving_sport_attach_id = wp_insert_attachment($attachment, $scuba_diving_sport_file, $scuba_diving_sport_uqpost_id);

	// Define attachment metadata
	$attach_data = wp_generate_attachment_metadata($scuba_diving_sport_attach_id, $scuba_diving_sport_file);

	// Assign metadata to attachment
	wp_update_attachment_metadata($scuba_diving_sport_attach_id, $attach_data);
	if ( count( $scuba_diving_sport_product_image_gallery ) < 3 ) {
		array_push( $scuba_diving_sport_product_image_gallery, $scuba_diving_sport_attach_id );
	}
	// // And finally assign featured image to post
	set_post_thumbnail($scuba_diving_sport_uqpost_id, $scuba_diving_sport_attach_id);
	++$scuba_diving_sport_n;
	}
	// Create product END
	++$scuba_diving_sport_k;
	}
	// Add Gallery in first simple product and second variable product START
	$scuba_diving_sport_product_image_gallery = implode( ',', $scuba_diving_sport_product_image_gallery );
	foreach ( $scuba_diving_sport_product_ids as $scuba_diving_sport_product_id ) {
	update_post_meta( $scuba_diving_sport_product_id, 'scuba_diving_sport_product_image_gallery', $scuba_diving_sport_product_image_gallery );
	}

	/* Create Menu */
            $scuba_diving_sport_menuname  = 'Main Menu';
            $scuba_diving_sport_location  = 'main-menu';

            $scuba_diving_sport_menu = wp_get_nav_menu_object( $scuba_diving_sport_menuname );

            if ( ! $scuba_diving_sport_menu ) {
            $scuba_diving_sport_menu_id = wp_create_nav_menu( $scuba_diving_sport_menuname );

           // Home Page 
			wp_update_nav_menu_item( $scuba_diving_sport_menu_id, 0, array(
				'menu-item-title'     => __( 'Home', 'scuba-diving-sport' ),
				'menu-item-url'       => home_url( '/' ),
				'menu-item-type'      => 'custom',
				'menu-item-status'    => 'publish',
				'menu-item-position'  => 1,
			) );

			// About Us Page 
			$scuba_diving_sport_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'About Us',
			'post_status' => 'publish',
			) );

			if ( $scuba_diving_sport_about_id ) {
			wp_update_nav_menu_item( $scuba_diving_sport_menu_id, 0, array(
			'menu-item-title'     => 'About Us',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $scuba_diving_sport_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
            'menu-item-position'  => 2,
			) );
			}

			// Services Page 
			$scuba_diving_sport_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'Services',
			'post_status' => 'publish',
			) );

			if ( $scuba_diving_sport_about_id ) {
			wp_update_nav_menu_item( $scuba_diving_sport_menu_id, 0, array(
			'menu-item-title'     => 'Services',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $scuba_diving_sport_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
            'menu-item-position'  => 3,
			) );
			}

			// Contact Us Page 
			$scuba_diving_sport_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'Contact Us',
			'post_status' => 'publish',
			) );

			if ( $scuba_diving_sport_about_id ) {
			wp_update_nav_menu_item( $scuba_diving_sport_menu_id, 0, array(
			'menu-item-title'     => 'Contact Us',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $scuba_diving_sport_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
            'menu-item-position'  => 4,
			) );
			}

			// Pages Page 
			$scuba_diving_sport_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'Pages',
			'post_status' => 'publish',
			) );

			if ( $scuba_diving_sport_about_id ) {
			wp_update_nav_menu_item( $scuba_diving_sport_menu_id, 0, array(
			'menu-item-title'     => 'Pages',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $scuba_diving_sport_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
            'menu-item-position'  => 4,
			) );
			}

            // Create Shop Page
                $scuba_diving_sport_about_title = 'Shop';
                $scuba_diving_sport_about_content = 'Lorem ipsum dolor sit amet...';

                $shop_page = get_page_by_path('shop');
                if ( !$shop_page ) {
                    $scuba_diving_sport_about = array(
                        'post_type'   => 'page',
                        'post_title'  => $scuba_diving_sport_about_title,
                        'post_content'=> $scuba_diving_sport_about_content,
                        'post_status' => 'publish',
                        'post_author' => 1,
                        'post_name'   => 'shop' 
                        );
                        $scuba_diving_sport_about_id = wp_insert_post($scuba_diving_sport_about);
                    } else {
                        $scuba_diving_sport_about_id = $shop_page->ID;
                    }

                    wp_update_nav_menu_item($scuba_diving_sport_menu_id, 0, array(
                        'menu-item-title'   => __('Shop', 'scuba-diving-sport'),
                        'menu-item-classes' => 'shop',
                        'menu-item-object-id' => $scuba_diving_sport_about_id,
                        'menu-item-object'  => 'page',
                        'menu-item-type'    => 'post_type',
                        'menu-item-status'  => 'publish'
                    ));
            
			/* ---------- Assign Menu Location ---------- */
			$scuba_diving_sport_locations = get_theme_mod( 'nav_menu_locations', array() );
			$scuba_diving_sport_locations[ $scuba_diving_sport_location ] = $scuba_diving_sport_menu_id;
			set_theme_mod( 'nav_menu_locations', $scuba_diving_sport_locations );
		}
   }
}
 