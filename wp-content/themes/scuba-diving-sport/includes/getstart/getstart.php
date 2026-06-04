<?php

function get_page_id_by_title($scuba_diving_sport_pagename){
  $scuba_diving_sport_args = array(
 'post_type' => 'page',
 'posts_per_page' => 1,
 'title' => $scuba_diving_sport_pagename
  );
  $scuba_diving_sport_query = new WP_Query( $scuba_diving_sport_args );    $scuba_diving_sport_page_id = '1';
 if (isset($scuba_diving_sport_query->post->ID)) {
      $scuba_diving_sport_page_id = $scuba_diving_sport_query->post->ID;
  } return $scuba_diving_sport_page_id;
}
//about theme info
add_action( 'admin_menu', 'scuba_diving_sport_gettingstarted' );
function scuba_diving_sport_gettingstarted() {
	add_theme_page( esc_html__('Scuba Diving Sport', 'scuba-diving-sport'), esc_html__('Scuba Diving Sport', 'scuba-diving-sport'), 'edit_theme_options', 'scuba_diving_sport_about', 'scuba_diving_sport_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function scuba_diving_sport_admin_theme_style() {
	wp_enqueue_style('scuba-diving-sport-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('scuba-diving-sport-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );

	// Admin notice code START
	wp_register_script('scuba-diving-sport-notice', esc_url(get_template_directory_uri()) . '/includes/getstart/js/notice.js', array('jquery'), time(), true);
	wp_enqueue_script('scuba-diving-sport-notice');
	// Admin notice code END
}
add_action('admin_enqueue_scripts', 'scuba_diving_sport_admin_theme_style');

// Changelog
if ( ! defined( 'SCUBA_DIVING_SPORT_CHANGELOG_URL' ) ) {
    define( 'SCUBA_DIVING_SPORT_CHANGELOG_URL', get_template_directory() . '/readme.txt' );
}

function scuba_diving_sport_changelog_screen() {
	global $wp_filesystem;
	$scuba_diving_sport_changelog_file = apply_filters( 'scuba_diving_sport_changelog_file', SCUBA_DIVING_SPORT_CHANGELOG_URL );

	if ( $scuba_diving_sport_changelog_file && is_readable( $scuba_diving_sport_changelog_file ) ) {
		WP_Filesystem();
		$scuba_diving_sport_changelog = $wp_filesystem->get_contents( $scuba_diving_sport_changelog_file );
		$scuba_diving_sport_changelog_list = scuba_diving_sport_parse_changelog( $scuba_diving_sport_changelog );

		
		echo '<div id="scuba-diving-sport-changelog-container">';
		echo wp_kses_post( $scuba_diving_sport_changelog_list );
		echo '</div>';
		echo '<button id="scuba-diving-sport-load-more" class="button button-primary" style="margin-top:15px;">Load More</button>';
	}
}

function scuba_diving_sport_parse_changelog( $scuba_diving_sport_content ) {
	$scuba_diving_sport_content = explode ( '== ', $scuba_diving_sport_content );
	$scuba_diving_sport_changelog_isolated = '';

	foreach ( $scuba_diving_sport_content as $key => $scuba_diving_sport_value ) {
		if ( strpos( $scuba_diving_sport_value, 'Changelog ==' ) === 0 ) {
	    	$scuba_diving_sport_changelog_isolated = str_replace( 'Changelog ==', '', $scuba_diving_sport_value );
	    }
	}

	$scuba_diving_sport_changelog_array = explode( '= ', $scuba_diving_sport_changelog_isolated );
	unset( $scuba_diving_sport_changelog_array[0] );

	$scuba_diving_sport_changelog = '<div class="changelog">';
	foreach ( $scuba_diving_sport_changelog_array as $scuba_diving_sport_value ) {
		$scuba_diving_sport_value = preg_replace( '/\n+/', '</span><span>', $scuba_diving_sport_value );
		$scuba_diving_sport_value = '<div class="block-changelog"><span class="heading">= ' . $scuba_diving_sport_value . '</span></div>';
		$scuba_diving_sport_changelog .= str_replace( '<span></span>', '', $scuba_diving_sport_value );
	}
	$scuba_diving_sport_changelog .= '</div>';

	return wp_kses_post( $scuba_diving_sport_changelog );
}

//guidline for about theme
function scuba_diving_sport_mostrar_guide() { 
	//custom function about theme customizer
	$scuba_diving_sport_return = add_query_arg( array()) ;
	$scuba_diving_sport_theme = wp_get_theme( 'scuba-diving-sport' );
	?>
<div class="container-getstarted">
		<div class="inner-side-content1">
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/includes/getstart/images/sticky-header-logo.png" />
			</div>
		    <div class="coupon-container-box-left">
			    <div class="iner-sidebar-pro-btn">
				    <span class="premium-btn"><a href="<?php echo esc_url( SCUBA_DIVING_SPORT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium Theme', 'scuba-diving-sport'); ?></a>
				    </span>
			    </div>
		    </div>
        </div>					
   <div class="top-head">
	    <div class="top-title">
		     <h2><?php esc_html_e( 'Scuba Diving Sport', 'scuba-diving-sport' ); ?></h2>
		     <h4><?php esc_html_e( 'Welcome to WP Elemento Theme!', 'scuba-diving-sport' ); ?></h4>
		     <p><?php esc_html_e( 'Click on the quick start button to import the demo.', 'scuba-diving-sport' ); ?></p>
			    <div class="iner-sidebar-pro-btn">
					<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
						$scuba_diving_sport_plugin_ins = Scuba_Diving_Sport_Plugin_Activation_WPElemento_Importer::get_instance();
						$scuba_diving_sport_actions = $scuba_diving_sport_plugin_ins->scuba_diving_sport_recommended_actions;
					?>
					<div class="scuba-diving-sport-recommended-plugins ">
						<div class="scuba-diving-sport-action-list">
							<?php if ($scuba_diving_sport_actions): foreach ($scuba_diving_sport_actions as $scuba_diving_sport_key => $scuba_diving_sport_actionValue): ?>
									<div class="scuba-diving-sport-action" id="<?php echo esc_attr($scuba_diving_sport_actionValue['id']);?>">
										<div class="action-inner plugin-activation-redirect">
											<?php echo wp_kses_post($scuba_diving_sport_actionValue['link']); ?>
										</div>
									</div>
								<?php endforeach;
							endif; ?>
						</div>
					</div>
				   <?php }else{ ?>
					<span class="quick-btn">
				    <?php if (isset($_GET['imported']) && $_GET['imported'] == 'true'): ?>
                        <a href="<?php echo esc_url( site_url() ); ?>" target="_blank"><?php esc_html_e('Visit Site', 'scuba-diving-sport'); ?></a>
						<?php
						$scuba_diving_sport_page_id = get_page_id_by_title('Home');
						?>
						<a href="<?php echo esc_url( admin_url('post.php?post=' . $scuba_diving_sport_page_id . '&action=elementor') ); ?>" 
							target="_blank" class="elementor-edit-btn"><?php esc_html_e('Edit With Elementor', 'scuba-diving-sport'); ?>
						</a>
                    <?php else: ?>
                        <a href="<?php echo esc_url( admin_url('admin.php?page=wpelementoimporter-wizard') ); ?>"><?php esc_html_e('Quick Start', 'scuba-diving-sport'); ?></a>
                    <?php endif; ?>
					<?php } ?>
				   </span>
				    <span class="premium-btn"><a href="<?php echo esc_url( SCUBA_DIVING_SPORT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium', 'scuba-diving-sport'); ?></a>
				    </span>
				    <span class="demo-btn"><a href="<?php echo esc_url( SCUBA_DIVING_SPORT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'scuba-diving-sport'); ?></a>
				    </span>
				    <span class="doc-btn"><a href="<?php echo esc_url( SCUBA_DIVING_SPORT_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Theme Bundle at $79', 'scuba-diving-sport'); ?></a>
				    </span>
			    </div>
            </div>			
		<div class="inner-side-content">
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" />
			</div>
			<div class="top-right">
			  <span class="version"><?php esc_html_e( 'Version', 'scuba-diving-sport' ); ?>: <?php echo esc_html($scuba_diving_sport_theme['Version']);?></span>
		    </div>
		</div>
    </div>
    <div class="inner-cont">
	    <div class="tab-outer-box1">
		   <div class="tab-inner-box">
			   <div class= "bundle-box">
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/includes/getstart/images/bundle.png"/>
				    <h1><?php esc_html_e('ELEMENTOR WORDPRESS THEME BUNDLE', 'scuba-diving-sport'); ?></h1>
			     <div>
				    <p class="product-price"><?php esc_html_e('Price:', 'scuba-diving-sport'); ?>
                        <span class="regular-price"><?php esc_html_e('$1,999.00', 'scuba-diving-sport'); ?></span>
                        <span class="sale-price"><?php esc_html_e('$79.00', 'scuba-diving-sport'); ?></span>
                    </p>
					<p><?php esc_html_e('The Elementor WordPress Theme Bundle offers a stunning collection of 76+ Premium Elementor Themes', 'scuba-diving-sport'); ?></p>
                 </div>
				</div> 
			    <div class="offer-box"> 
				    <div class="offer1-box">
                       <span class="off-text1"><a href="<?php echo esc_url( SCUBA_DIVING_SPORT_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Buy Bundle at 20% Discount', 'scuba-diving-sport'); ?></a></span>
				    </div> 
		        </div>
			</div>	
		</div>	
		<div class="tab-outer-box2">
			<div class="tab-outer-box-2-1">
			  <h3><?php esc_html_e( 'Customizer Setting', 'scuba-diving-sport' ); ?></h3>
			  <div class="lite-theme-inner">
				<div>
					<h3><?php esc_html_e('Theme Customizer', 'scuba-diving-sport'); ?></h3>
					<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'scuba-diving-sport'); ?></p>
					<div class="info-link">
					   <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Open customizer', 'scuba-diving-sport'); ?></a>
					</div>
				</div>
				<div>
					<h3><?php esc_html_e('Help Docs', 'scuba-diving-sport'); ?></h3>
					<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'scuba-diving-sport'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( SCUBA_DIVING_SPORT_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'scuba-diving-sport'); ?></a>
					</div>
				</div>
				<div>
					<h3><?php esc_html_e('Need Support?', 'scuba-diving-sport'); ?></h3>
					<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'scuba-diving-sport'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( SCUBA_DIVING_SPORT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'scuba-diving-sport'); ?></a>
					</div>
				</div>
				<div>
					<h3><?php esc_html_e('Reviews & Testimonials', 'scuba-diving-sport'); ?></h3>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'scuba-diving-sport'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( SCUBA_DIVING_SPORT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'scuba-diving-sport'); ?></a>
					</div>
				</div>
            </div>	
		</div>
			<div class="tab-outer-box-2-2">
			  <h3><?php esc_html_e( 'Link to customizer', 'scuba-diving-sport' ); ?></h3>
				<div class="first-row">
					<div class="row-box">
						<div class="row-box1">
							<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your Website logo','scuba-diving-sport'); ?></a>
						</div>
						<div class="row-box2">
							<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Edit Your Menus','scuba-diving-sport'); ?></a>
						</div>
					</div>
							
					<div class="row-box">
						<div class="row-box1">
							<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Add Header Image','scuba-diving-sport'); ?></a>
						</div>
						<div class="row-box2">
							<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Add Footer Widget','scuba-diving-sport'); ?></a>
						</div>
					</div>
				</div>
            </div>	
			<div class="tab-outer-box-2-3">
				<h3><?php esc_html_e( 'Change log', 'scuba-diving-sport' ); ?></h3>	
		     <?php scuba_diving_sport_changelog_screen(); ?>
          </div>	
        </div>
    </div>
</div>	
<?php } ?>