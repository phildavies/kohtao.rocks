<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'scuba_diving_sport_logo_resizer',
        'label'       => __( 'Logo Size', 'scuba-diving-sport' ),
        'section'     => 'title_tagline',
        'default'     => 150,
        'choices'     => [
            'min'   => 50,
            'max'   => 300,
            'step'  => 1,
        ],
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'scuba_diving_sport_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'scuba-diving-sport' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'scuba-diving-sport' ),
			'off' => esc_html__( 'Disable', 'scuba-diving-sport' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'scuba_diving_sport_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'scuba-diving-sport' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'scuba-diving-sport' ),
			'off' => esc_html__( 'Disable', 'scuba-diving-sport' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_site_tittle_transform_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Text Transform', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'scuba_diving_sport_site_tittle_transform',
		'section'     => 'title_tagline',
		'default'     => 'none',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'scuba-diving-sport' ),
			'uppercase' => esc_html__( 'Uppercase', 'scuba-diving-sport' ),
			'lowercase' => esc_html__( 'Lowercase', 'scuba-diving-sport' ),
			'capitalize' => esc_html__( 'Capitalize', 'scuba-diving-sport' ),
		],
		'output' => array(
			array(
				'element'  => array( '.logo a'),
				'property' => ' text-transform',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'scuba-diving-sport' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'scuba-diving-sport' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'scuba-diving-sport' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'scuba-diving-sport' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'scuba-diving-sport' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/scuba-diving-wordpress-theme', 'scuba-diving-sport' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'scuba-diving-sport' ) .'</a></div>',
	) );

	// Theme color

	Kirki::add_section( 'scuba_diving_sport_theme_color_setting', array(
		'title'    => __( 'Color Option', 'scuba-diving-sport' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_theme_color',
		'label'       => __( 'First Theme color', 'scuba-diving-sport'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_theme_color_setting',
		'type'        => 'color',
		'default'     => '#004375',
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_theme_color_second',
		'label'       => __( 'Second Theme color', 'scuba-diving-sport'),
		'section'     => 'scuba_diving_sport_theme_color_setting',
		'type'        => 'color',
		'default'     => '#48bf84',
	) );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'scuba_diving_sport_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'scuba-diving-sport' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'scuba_diving_sport_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_h1_typography_heading',
		'section'     => 'scuba_diving_sport_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'scuba_diving_sport_h1_typography_font',
		'section'   =>  'scuba_diving_sport_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Figtree',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'scuba_diving_sport_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_h2_typography_heading',
		'section'     => 'scuba_diving_sport_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'scuba_diving_sport_h2_typography_font',
		'section'   =>  'scuba_diving_sport_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Figtree',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'scuba_diving_sport_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_h3_typography_heading',
		'section'     => 'scuba_diving_sport_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'scuba_diving_sport_h3_typography_font',
		'section'   =>  'scuba_diving_sport_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Figtree',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'scuba_diving_sport_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_h4_typography_heading',
		'section'     => 'scuba_diving_sport_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'scuba_diving_sport_h4_typography_font',
		'section'   =>  'scuba_diving_sport_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Figtree',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'scuba_diving_sport_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_h5_typography_heading',
		'section'     => 'scuba_diving_sport_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'scuba_diving_sport_h5_typography_font',
		'section'   =>  'scuba_diving_sport_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Figtree',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'scuba_diving_sport_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_h6_typography_heading',
		'section'     => 'scuba_diving_sport_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'scuba_diving_sport_h6_typography_font',
		'section'   =>  'scuba_diving_sport_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Figtree',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'scuba_diving_sport_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_body_typography_heading',
		'section'     => 'scuba_diving_sport_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'scuba_diving_sport_body_typography_font',
		'section'   =>  'scuba_diving_sport_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Figtree',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel
	Kirki::add_panel( 'scuba_diving_sport_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'scuba-diving-sport' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'scuba_diving_sport_section_header',array(
		'title' => esc_html__( 'Header Settings', 'scuba-diving-sport' ),
		'description'    => esc_html__( 'Here you can add header information.', 'scuba-diving-sport' ),
		'panel' => 'scuba_diving_sport_theme_options_panel',
		'tabs'  => [
			'header' => [
				'label' => esc_html__( 'Header', 'scuba-diving-sport' ),
			],
			'menu'  => [
				'label' => esc_html__( 'Menu', 'scuba-diving-sport' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'scuba_diving_sport_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => 1,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'scuba-diving-sport' ),
			'off' => esc_html__( 'Disable', 'scuba-diving-sport' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'scuba_diving_sport_menu_size_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_menu_size',
		'tab'      => 'menu',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'scuba-diving-sport' ),
		'type'        => 'text',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'scuba_diving_sport_menu_text_transform_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'menu',
		'settings'    => 'scuba_diving_sport_menu_text_transform',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'scuba-diving-sport' ),
			'uppercase' => esc_html__( 'Uppercase', 'scuba-diving-sport' ),
			'lowercase' => esc_html__( 'Lowercase', 'scuba-diving-sport' ),
			'capitalize' => esc_html__( 'Capitalize', 'scuba-diving-sport' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_menu_color',
		'tab'      => 'menu',
		'label'       => __( 'Menu Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_menu_hover_color',
		'tab'      => 'menu',
		'label'       => __( 'Menu Hover Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'default'     => '#48bf84',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),

		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_submenu_color',
		'tab'      => 'menu',
		'label'       => __( 'Submenu Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_submenu_hover_background_color',
		'label'       => __( 'Submenu Hover Background Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'default'     => '#004375',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'scuba_diving_sport_enable_location_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Address', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'scuba_diving_sport_header_location',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'scuba_diving_sport_header_phone_number_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'scuba_diving_sport_header_phone_number',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
		'sanitize_callback' => 'scuba_diving_sport_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'scuba_diving_sport_header_opentime_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Opening Time', 'scuba-diving-sport' ) . '</h3>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'scuba_diving_sport_header_opening_heading',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'scuba_diving_sport_enable_button_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Get Started Button', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    => esc_html__( 'Button Text', 'scuba-diving-sport' ),
		'settings' => 'scuba_diving_sport_header_button_text',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button Link', 'scuba-diving-sport' ),
		'settings' => 'scuba_diving_sport_header_button_url',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'scuba_diving_sport_enable_socail_link',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'tab'      => 'header',
		'section'     => 'scuba_diving_sport_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'scuba-diving-sport' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'scuba-diving-sport' ),
		'settings'     => 'scuba_diving_sport_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'scuba-diving-sport' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'scuba-diving-sport' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'scuba-diving-sport' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'scuba-diving-sport' ),
				'description' => esc_html__( 'Add the social icon url here.', 'scuba-diving-sport' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );
	
	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'scuba_diving_sport_logo_settings_premium_features_header',
		'section'     => 'scuba_diving_sport_section_header',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Enhance your header design now!', 'scuba-diving-sport' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customize your header background color', 'scuba-diving-sport' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Adjust icon and text font sizes', 'scuba-diving-sport' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Explore enhanced typography options', 'scuba-diving-sport' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'scuba-diving-sport' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/scuba-diving-wordpress-theme', 'scuba-diving-sport' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'scuba-diving-sport' ) .'</a></div>',
	) );

	Kirki::add_field( 'theme_config_id', [
    'type'     => 'custom',
    'settings' => 'scuba_diving_sport_show_product_featured_image_hover_heading',
    'section'  => 'scuba_diving_sport_woocommerce_settings',
    'default'  => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1;">' . __( 'Product Featured Image Hover Effect', 'scuba-diving-sport' ) . '</h3>',
    'priority' => 20,
   ] );

	Kirki::add_field( 'theme_config_id', [
    'type'     => 'select',
    'settings' => 'scuba_diving_sport_product_featured_image_hover',
    'label'    => esc_html__( 'Product Featured Image Hover Effect', 'scuba-diving-sport' ),
    'section'  => 'scuba_diving_sport_woocommerce_settings',
    'default'  => 'none',
    'priority' => 30,
    'choices'  => [
        'none'      => esc_html__( 'None', 'scuba-diving-sport' ),
        'zoom-in'   => esc_html__( 'Zoom In', 'scuba-diving-sport' ),
        'zoom-out'  => esc_html__( 'Zoom Out', 'scuba-diving-sport' ),
        'scale'     => esc_html__( 'Scale', 'scuba-diving-sport' ),
        'grayscale' => esc_html__( 'Grayscale', 'scuba-diving-sport' ),
        'blur'      => esc_html__( 'Blur', 'scuba-diving-sport' ),
        'bright'    => esc_html__( 'Bright', 'scuba-diving-sport' ),
        'sepia'     => esc_html__( 'Sepia', 'scuba-diving-sport' ),
        'translate' => esc_html__( 'Translate', 'scuba-diving-sport' ),
    ],
    ] );

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'scuba_diving_sport_additional_setting',array(
		'title' => esc_html__( 'Additional Settings', 'scuba-diving-sport' ),
		'panel' => 'scuba_diving_sport_theme_options_panel',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'scuba-diving-sport' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'scuba-diving-sport' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '0',
		'tab'      => 'general',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_enable_sidebar_animation_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Animation', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_enable_sidebar_animation',
		'label'       => esc_html__( 'Enable or Disable Sidebar Animation', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_enable_footer_animation',
		'label'       => esc_html__( 'Enable or Disable Footer Animation', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_enable_sidebar_sticky_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sticky Sidebar', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_enable_sticky_sidebar',
		'label'       => esc_html__( 'Enable or Disable Sticky Sidebar', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_scroll_alignment_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Position', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'radio-buttonset',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_scroll_alignment',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => 'right',
		'choices'     => [
			'left' => esc_html__( 'left', 'scuba-diving-sport' ),
			'center' => esc_html__( 'center', 'scuba-diving-sport' ),
			'right' => esc_html__( 'right', 'scuba-diving-sport' ),
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_scroller_border_radius_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Border Radius', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'slider',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_scroller_border_radius',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '3',
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
		'output' => array(
			array(
				'element'  => '.scroll-up a',
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_cursor_outline_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dot Cursor', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_cursor_outline',
		'label'       => esc_html__( 'Enable or Disable Dot Cursor', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_progress_bar_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_progress_bar',
		'label'       => esc_html__( 'Enable or Disable Progress Bar', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_progress_bar_position_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Position', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'scuba_diving_sport_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_progress_bar_position',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => 'top',
		'choices'     => [
			'top' => esc_html__( 'Top', 'scuba-diving-sport' ),
			'bottom' => esc_html__( 'Bottom', 'scuba-diving-sport' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'scuba_diving_sport_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_progress_bar_color_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Color', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'scuba_diving_sport_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_progress_bar_color',
		'tab'      => 'general',
		'label'       => __( 'Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'section'     => 'scuba_diving_sport_additional_setting',
		'transport' => 'auto',
		'default'     => '#004375',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '#elemento-progress-bar',
				'property' => 'background-color',
			),
		),
		'active_callback'  => [
			[
				'setting'  => 'scuba_diving_sport_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_single_page_layout_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'scuba_diving_sport_single_page_layout',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'scuba-diving-sport' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'scuba-diving-sport' ),
			'One Column' => esc_html__( 'One Column', 'scuba-diving-sport' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'scuba_diving_sport_header_background_attachment_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'scuba_diving_sport_header_background_attachment',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'scuba-diving-sport' ),
			'fixed' => esc_html__( 'Fixed', 'scuba-diving-sport' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'scuba_diving_sport_header_image_height_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image height', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_header_image_height',
		'label'       => __( 'Image Height', 'scuba-diving-sport' ),
		'description'    => esc_html__( 'Enter a value in pixels. Example:500px', 'scuba-diving-sport' ),
		'type'        => 'text',
		'tab'      => 'header-image',
		'default'    => [
			'desktop' => '550px',
			'tablet'  => '350px',
			'mobile'  => '200px',
		],
		'responsive' => true,
		'section'     => 'scuba_diving_sport_additional_setting',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.header-image-box'),
				'property' => 'height',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'scuba_diving_sport_header_overlay_heading',
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'tab'      => 'header-image',
		'section'     => 'scuba_diving_sport_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000066',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'scuba_diving_sport_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'scuba_diving_sport_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'scuba_diving_sport_blog_post',array(
		'title' => esc_html__( 'Post Settings', 'scuba-diving-sport' ),
		'description'    => esc_html__( 'Here you can add post information.', 'scuba-diving-sport' ),
		'panel' => 'scuba_diving_sport_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'scuba-diving-sport' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'scuba-diving-sport' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_enable_post_animation_heading',
		'section'     => 'scuba_diving_sport_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Animation', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_enable_post_animation',
		'label'       => esc_html__( 'Enable or Disable Blog Post Animation', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_post_layout_heading',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_post_layout',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'scuba-diving-sport' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'scuba-diving-sport' ),
			'One Column' => esc_html__( 'One Column', 'scuba-diving-sport' ),
			'Three Columns' => esc_html__( 'Three Columns', 'scuba-diving-sport' ),
			'Four Columns' => esc_html__( 'Four Columns', 'scuba-diving-sport' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_length_setting_heading',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_length_setting',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_show_pagination_heading',
		'section'     => 'scuba_diving_sport_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Pagination', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'scuba_diving_sport_show_pagination',
		'label'       => esc_html__( 'Enable or Disable Blog Post Pagination', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'scuba_diving_sport_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'scuba_diving_sport_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'scuba_diving_sport_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'scuba-diving-sport' ),
		'settings'    => 'scuba_diving_sport_single_post_tag',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'scuba-diving-sport' ),
		'settings'    => 'scuba_diving_sport_single_post_category',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'scuba_diving_sport_post_comment_show_hide',
		'label'       => esc_html__( 'Show / Hide Comment Box', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'scuba_diving_sport_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'scuba_diving_sport_single_post_radius',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'scuba-diving-sport' ),
		'type'        => 'text',
		'tab'      => 'single-post',
		'section'     => 'scuba_diving_sport_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'scuba_diving_sport_show_related_post_heading',
		'section'     => 'scuba_diving_sport_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related post', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'scuba_diving_sport_show_related_post',
		'label'       => esc_html__( 'Enable or Disable Related post', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'scuba_diving_sport_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'scuba-diving-sport' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'scuba-diving-sport' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'scuba-diving-sport' ),
		'settings'    => 'scuba_diving_sport_shop_page_layout',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'scuba-diving-sport' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'scuba-diving-sport' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'scuba_diving_sport_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'scuba-diving-sport' ),
		'settings'    => 'scuba_diving_sport_products_per_row',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'scuba-diving-sport' ),
		'settings'    => 'scuba_diving_sport_products_per_page',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'scuba-diving-sport' ),
		'settings'    => 'scuba_diving_sport_single_product_sidebar_layout',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'scuba-diving-sport' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'scuba-diving-sport' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'scuba_diving_sport_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_products_button_border_radius_heading',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'scuba_diving_sport_products_button_border_radius',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_sale_badge_position_heading',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'scuba_diving_sport_sale_badge_position',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'scuba-diving-sport' ),
			'left' => esc_html__( 'Left', 'scuba-diving-sport' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_products_sale_font_size_heading',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'scuba_diving_sport_products_sale_font_size',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_show_related_product_heading',
		'section'     => 'scuba_diving_sport_woocommerce_settings',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related Product', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_show_related_product',
		'label'       => esc_html__( 'Enable or Disable Related Product', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'custom',
        'tab'         => 'single-post',
        'settings'    => 'scuba_diving_sport_show_single_post_featured_image_hover_heading',
        'section'     => 'scuba_diving_sport_blog_post',
        'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Featured Image Hover Effect', 'scuba-diving-sport' ) . '</h3>',
        'priority'    => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
    'type'     => 'select',
    'tab'      => 'single-post',
    'settings' => 'scuba_diving_sport_single_post_featured_image_hover',
    'label'    => esc_html__( 'Select Featured Image Hover Effect', 'scuba-diving-sport' ),
    'section'  => 'scuba_diving_sport_blog_post',
    'default'  => 'none',
    'priority' => 20,
    'choices'  => [
        'none'      => esc_html__( 'None', 'scuba-diving-sport' ),
        'zoom-in'   => esc_html__( 'Zoom In', 'scuba-diving-sport' ),
        'zoom-out'  => esc_html__( 'Zoom Out', 'scuba-diving-sport' ),
        'scale'     => esc_html__( 'Scale', 'scuba-diving-sport' ),
        'grayscale' => esc_html__( 'Grayscale', 'scuba-diving-sport' ),
        'blur'      => esc_html__( 'Blur', 'scuba-diving-sport' ),
        'bright'    => esc_html__( 'Bright', 'scuba-diving-sport' ),
        'sepia'     => esc_html__( 'Sepia', 'scuba-diving-sport' ),
        'translate' => esc_html__( 'Translate', 'scuba-diving-sport' ),
    ],
    ] );

	// No Results Page Settings

	Kirki::add_section( 'scuba_diving_sport_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_page_not_found_title_heading',
		'section'     => 'scuba_diving_sport_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'scuba_diving_sport_page_not_found_title',
		'section'  => 'scuba_diving_sport_no_result_section',
		'default'  => esc_html__('404 Error!', 'scuba-diving-sport'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_page_not_found_text_heading',
		'section'     => 'scuba_diving_sport_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'scuba_diving_sport_page_not_found_text',
		'section'  => 'scuba_diving_sport_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'scuba-diving-sport'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'scuba_diving_sport_page_not_found_line_break',
		'section'  => 'scuba_diving_sport_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_no_results_title_heading',
		'section'     => 'scuba_diving_sport_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'scuba_diving_sport_no_results_title',
		'section'  => 'scuba_diving_sport_no_result_section',
		'default'  => esc_html__('Nothing Found', 'scuba-diving-sport'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_no_results_content_heading',
		'section'     => 'scuba_diving_sport_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'scuba_diving_sport_no_results_content',
		'section'  => 'scuba_diving_sport_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'scuba-diving-sport'),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'scuba_diving_sport_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'scuba-diving-sport' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_show_footer_widget_heading',
		'section'     => 'scuba_diving_sport_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_show_footer_widget',
		'label'       => esc_html__( 'Footer Widget', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_show_footer_copyright',
		'label'       => esc_html__( 'Footer Copyright', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_text_heading',
		'section'     => 'scuba_diving_sport_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'scuba_diving_sport_footer_text',
		'section'  => 'scuba_diving_sport_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_sticky_heading',
		'section'     => 'scuba_diving_sport_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Sticky Copyright', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'scuba_diving_sport_sticky_copyright_enable',
		'label'       => esc_html__( ' Sticky Copyright Section Enable / Disable', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_footer_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'scuba-diving-sport' ),
			'off' => esc_html__( 'Disable', 'scuba-diving-sport' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_enable_heading',
		'section'     => 'scuba_diving_sport_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'scuba_diving_sport_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'scuba-diving-sport' ),
			'off' => esc_html__( 'Disable', 'scuba-diving-sport' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_background_widget_heading',
		'section'     => 'scuba_diving_sport_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'scuba_diving_sport_footer_background_widget',
		'type'        => 'background',
		'section'     => 'scuba_diving_sport_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_widget_alignment_heading',
		'section'     => 'scuba_diving_sport_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'scuba_diving_sport_footer_widget_alignment',
		'section'     => 'scuba_diving_sport_footer_section',
		'default'     =>[
			'desktop' => 'left',
			'tablet'  => 'left',
			'mobile'  => 'center',
		],
		'responsive' => true,
		'label'       => __( 'Widget Alignment', 'scuba-diving-sport' ),
		'transport' => 'auto',
		'choices'     => [
			'center' => esc_html__( 'center', 'scuba-diving-sport' ),
			'right' => esc_html__( 'right', 'scuba-diving-sport' ),
			'left' => esc_html__( 'left', 'scuba-diving-sport' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_copright_color_heading',
		'section'     => 'scuba_diving_sport_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_copright_text_color_heading',
		'section'     => 'scuba_diving_sport_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_logo_settings_premium_features_footer',
		'section'     => 'scuba_diving_sport_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'scuba-diving-sport' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'scuba-diving-sport' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'scuba-diving-sport' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'scuba-diving-sport' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'scuba-diving-sport' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/scuba-diving-wordpress-theme', 'scuba-diving-sport' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'scuba-diving-sport' ) .'</a></div>',
	) );

	// Footer Social Icons Section

	Kirki::add_section( 'scuba_diving_sport_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'scuba-diving-sport' ),
		'panel'    => 'scuba_diving_sport_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_social_icon_hide_heading',
		'section'     => 'scuba_diving_sport_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_enable_footer_socail_link_align_heading',
		'section'     => 'scuba_diving_sport_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'scuba-diving-sport' ),
			'right' => esc_html__( 'right', 'scuba-diving-sport' ),
			'left' => esc_html__( 'left', 'scuba-diving-sport' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'scuba_diving_sport_enable_footer_socail_link',
		'section'     => 'scuba_diving_sport_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'scuba_diving_sport_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'scuba-diving-sport' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'scuba-diving-sport' ),
		'settings'     => 'scuba_diving_sport_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'scuba-diving-sport' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'scuba-diving-sport' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank">' . esc_html__( 'View All', 'scuba-diving-sport' ) . '</a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'scuba-diving-sport' ),
				'description' => esc_html__( 'Add the social icon url here.', 'scuba-diving-sport' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

}