<?php
/**
 * Scuba Diving Sport functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Scuba Diving Sport
 */

/* Enqueue script and styles */

function scuba_diving_sport_enqueue_google_fonts() {

	require_once get_theme_file_path( 'includes/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'Figtree',
		scuba_diving_sport_wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' ),
		array(),
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'scuba_diving_sport_enqueue_google_fonts' );

if (!function_exists('scuba_diving_sport_enqueue_scripts')) {

	function scuba_diving_sport_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/assets/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/assets/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style('scuba-diving-sport-style', get_stylesheet_uri(), array() );

		wp_enqueue_style(
			'scuba-diving-sport-responsive-css',
			get_template_directory_uri() . '/assets/css/responsive.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'scuba-diving-sport-navigation',
			get_template_directory_uri() . '/assets/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'scuba-diving-sport-script',
			get_template_directory_uri() . '/assets/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );

		wp_enqueue_script( 'wow-js', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );

		require get_parent_theme_file_path( '/includes/color-setting/custom-color-control.php' );
		wp_add_inline_style( 'scuba-diving-sport-style',$scuba_diving_sport_theme_custom_setting_css );
		wp_style_add_data('scuba-diving-sport-style', 'rtl', 'replace');

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$css = '';

		if ( get_header_image() ) :

			$css .=  '
				.header-image-box{
					background-image: url('.esc_url(get_header_image()).') !important;
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
					height: 550px;
				    display: flex;
				    align-items: center;
				}';

		endif;

		wp_add_inline_style( 'scuba-diving-sport-style', $css );

	}

	add_action( 'wp_enqueue_scripts', 'scuba_diving_sport_enqueue_scripts' );

}

/* Setup theme */

if (!function_exists('scuba_diving_sport_after_setup_theme')) {

	function scuba_diving_sport_after_setup_theme() {

		load_theme_textdomain( 'scuba-diving-sport', get_template_directory() . '/languages' );
		if ( ! isset( $content_width ) ) $content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'scuba-diving-sport' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 120,
			'width'       => 240,
			'flex-height' => true,
		) );

		add_theme_support( 'custom-header', array(
			'default-image' => get_parent_theme_file_uri( '/assets/images/default-header-image.png' ),
			'width' => 1920,
			'flex-width' => true,
			'height' => 550,
			'flex-height' => true,
			'header-text' => false,
		));

		register_default_headers( array(
			'default-image' => array(
				'url'           => '%s/assets/images/default-header-image.png',
				'thumbnail_url' => '%s/assets/images/default-header-image.png',
				'description'   => __( 'Default Header Image', 'scuba-diving-sport' ),
			),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_editor_style( array( '/assets/css/editor-style.css' ) );

		global $pagenow;
		
		if ( is_admin() && $pagenow === 'themes.php' && (!isset($_GET['page']) || $_GET['page'] !== 'scuba_diving_sport_about')) {
			add_action('admin_notices', 'scuba_diving_sport_activation_notice');
		}

	}

	add_action( 'after_setup_theme', 'scuba_diving_sport_after_setup_theme', 999 );

}

function scuba_diving_sport_activation_notice() {
	$scuba_diving_sport_meta = get_option( 'scuba_diving_sport_admin_notice' );
	if (!$scuba_diving_sport_meta) {
			echo '<div id="scuba-diving-sport-welcome-notice" class="notice notice-info wpele-activation-notice is-dismissible">';
			echo '<div class="notice-body">';
				echo '<div class="notice-content">';
					echo '<h2>'. esc_html__( 'Welcome to WPElemento', 'scuba-diving-sport' ) .'</h2>';
					echo '<p>'. esc_html__( 'Thank you for choosing Scuba Diving Sport theme .To setup the theme, please visit the get started page.', 'scuba-diving-sport' ) .'</p>';
					echo '<span><a href="'. esc_url( admin_url( 'themes.php?page=scuba_diving_sport_about' ) ) .'" class="button button-notice">'. esc_html__( 'GET STARTED', 'scuba-diving-sport' ) .'</a></span>';
					echo '<span><a href="'. esc_url( SCUBA_DIVING_SPORT_BUY_NOW ) .'" class="button button-notice" target="_blank" >'. esc_html__( 'BUY NOW', 'scuba-diving-sport' ) .'</a></span>';
					echo '<span><a href="'. esc_url( SCUBA_DIVING_SPORT_LIVE_DEMO ) .'" class="button button-notice" target="_blank" >'. esc_html__( 'DEMO', 'scuba-diving-sport' ) .'</a></span>';
				echo '</div>';
				echo '<div class="notice-icon">';
					echo '<img src="'.esc_url(get_template_directory_uri()).'/includes/getstart/images/get-logo.png ">';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
}

/* Get post comments */

if (!function_exists('scuba_diving_sport_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function scuba_diving_sport_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'scuba-diving-sport');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'scuba-diving-sport'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_html__('%1$s at %2$s','scuba-diving-sport'), esc_html( get_comment_date() ), esc_html( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'scuba-diving-sport' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'scuba-diving-sport'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for scuba_diving_sport_comment()

if (!function_exists('scuba_diving_sport_widgets_init')) {

	function scuba_diving_sport_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','scuba-diving-sport'),
			'id'   => 'scuba-diving-sport-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'scuba-diving-sport'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Page Sidebar','scuba-diving-sport'),
			'id'   => 'sidebar-2',
			'description'   => esc_html__('This sidebar will be shown on pages.', 'scuba-diving-sport'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar three','scuba-diving-sport'),
			'id'   => 'sidebar-3',
			'description'   => esc_html__('This sidebar will be shown on blog pages.', 'scuba-diving-sport'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar 1','scuba-diving-sport'),
			'id'   => 'footer1-sidebar',
			'description'   => esc_html__('It appears in the footer 1.', 'scuba-diving-sport'),
			'before_widget' => '<aside id="%1$s" class="%2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar 2','scuba-diving-sport'),
			'id'   => 'footer2-sidebar',
			'description'   => esc_html__('It appears in the footer 2.', 'scuba-diving-sport'),
			'before_widget' => '<aside id="%1$s" class="%2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar 3','scuba-diving-sport'),
			'id'   => 'footer3-sidebar',
			'description'   => esc_html__('It appears in the footer 3.', 'scuba-diving-sport'),
			'before_widget' => '<aside id="%1$s" class="%2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar 4','scuba-diving-sport'),
			'id'   => 'footer4-sidebar',
			'description'   => esc_html__('It appears in the footer 4.', 'scuba-diving-sport'),
			'before_widget' => '<aside id="%1$s" class="%2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'scuba_diving_sport_widgets_init' );

}

function scuba_diving_sport_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo esc_url( home_url() );
		echo '">';
		bloginfo('name');
		echo "</a> >> ";
		if (is_category() || is_single()) {
			the_category(' , ');
			if (is_single()) {
				echo " >> ";
				the_title();
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}

/**
 * logo resizer
 */

 function scuba_diving_sport_logo_resizer() {

    $scuba_diving_sport_theme_logo_size_css = '';
	$scuba_diving_sport_theme_custom_logo_id = get_theme_mod( 'custom_logo' );
	$scuba_diving_sport_theme_logo_width = get_theme_mod( 'scuba_diving_sport_logo_resizer', 150 ); // Default to 200 if not set
	$scuba_diving_sport_theme_logo_height = $scuba_diving_sport_theme_logo_width * 0.5;

	if ( $scuba_diving_sport_theme_custom_logo_id ) {
		$scuba_diving_sport_theme_logo_data = wp_get_attachment_image_src( $scuba_diving_sport_theme_custom_logo_id, 'full' );
		$scuba_diving_sport_theme_logo_url = $scuba_diving_sport_theme_logo_data[0];
		$scuba_diving_sport_theme_original_width = $scuba_diving_sport_theme_logo_data[1];
		$scuba_diving_sport_theme_original_height = $scuba_diving_sport_theme_logo_data[2];
		$scuba_diving_sport_theme_aspect_ratio = $scuba_diving_sport_theme_original_height / $scuba_diving_sport_theme_original_width;
		$scuba_diving_sport_theme_logo_height = $scuba_diving_sport_theme_logo_width * $scuba_diving_sport_theme_aspect_ratio;
   
	}
	$scuba_diving_sport_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($scuba_diving_sport_theme_logo_height).'px !important;
			width: '.esc_attr($scuba_diving_sport_theme_logo_width).'px !important;
		}
	';
    wp_add_inline_style( 'scuba-diving-sport-style',$scuba_diving_sport_theme_logo_size_css );

}

add_action( 'wp_enqueue_scripts', 'scuba_diving_sport_logo_resizer' );

add_filter( 'woocommerce_single_product_image_thumbnail_html', function( $html ) {
    return '<div class="product-img">' . $html . '</div>';
});

/**
 * Change number or products per row to 3
 */

add_filter('loop_shop_columns', 'scuba_diving_sport_loop_columns', 999);
if (!function_exists('scuba_diving_sport_loop_columns')) {
	function scuba_diving_sport_loop_columns() {
		return get_theme_mod( 'scuba_diving_sport_products_per_row', '3' ); 
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'scuba_diving_sport_products_per_page' );
function scuba_diving_sport_products_per_page( $cols ) {
  	return  get_theme_mod( 'scuba_diving_sport_products_per_page',9);
}

function scuba_diving_sport_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function scuba_diving_sport_customize_css() {
	?>
	<?php if ( 'right' == get_theme_mod( 'scuba_diving_sport_sale_badge_position', 'right' ) ) : ?>
		<style>
		.woocommerce ul.products li.product .onsale {
			left: auto !important; right: 10px !important;
			clip-path: polygon(0 0, 100% 0, 100% 100%, 30% 100%) !important;
		}
		</style>
	<?php elseif ( 'left' == get_theme_mod( 'scuba_diving_sport_sale_badge_position', 'right' ) ) : ?>
		<style>
		.woocommerce ul.products li.product .onsale{
			left: 10px !important; right: auto !important;
		}
		</style>
	<?php endif; ?>

	<?php
}

add_action( 'wp_head', 'scuba_diving_sport_customize_css');


function scuba_diving_sport_enqueue_setting() {
	define('SCUBA_DIVING_SPORT_FREE_THEME_DOC',__('https://preview.wpelemento.com/theme-documentation/scuba-diving-sport-elementor/','scuba-diving-sport'));
	define('SCUBA_DIVING_SPORT_SUPPORT',__('https://wordpress.org/support/theme/scuba-diving-sport/','scuba-diving-sport'));
	define('SCUBA_DIVING_SPORT_REVIEW',__('https://wordpress.org/support/theme/scuba-diving-sport/reviews/','scuba-diving-sport'));
	define('SCUBA_DIVING_SPORT_BUY_NOW',__('https://www.wpelemento.com/products/scuba-diving-wordpress-theme','scuba-diving-sport'));
	define('SCUBA_DIVING_SPORT_LIVE_DEMO',__('https://preview.wpelemento.com/scuba-diving-sport/','scuba-diving-sport'));
	define('SCUBA_DIVING_SPORT_THEME_BUNDLE',__('https://www.wpelemento.com/products/wordpress-theme-bundle','scuba-diving-sport'));

	require get_template_directory() .'/includes/tgm/tgm.php';
	require get_template_directory() . '/includes/customizer.php';
	load_template( trailingslashit( get_template_directory() ) . '/includes/go-pro/class-upgrade-pro.php' );

	/* Plugin Activation */
	require get_template_directory() . '/includes/getstart/plugin-activation.php';

	/* Implement the About theme page */
	require get_template_directory() . '/includes/getstart/getstart.php';

	require get_template_directory() . '/includes/product-create.php';

	if( class_exists( 'Whizzie' ) ) {
		$Whizzie = new Whizzie();
	}

}
add_action('after_setup_theme', 'scuba_diving_sport_enqueue_setting');


add_filter('wpelemento_importer_plugins_list', function ($plugins) {
    $desired_order = ['woocommerce', 'yith-woocommerce-wishlist' , 'woolentor-addons'];
    foreach (['all', 'install', 'update', 'activate'] as $section) {
        if (!isset($plugins[$section])) continue;

        $reordered = [];

        foreach ($desired_order as $slug) {
            if (isset($plugins[$section][$slug])) {
                $reordered[$slug] = $plugins[$section][$slug];
                unset($plugins[$section][$slug]);
            }
        }
        $plugins[$section] = $reordered + $plugins[$section];
    }

    return $plugins;
});

function scuba_diving_sport_dismissed_notice() {
	update_option( 'scuba_diving_sport_admin_notice', true );
}
add_action( 'wp_ajax_scuba_diving_sport_dismissed_notice', 'scuba_diving_sport_dismissed_notice' );

add_action('after_switch_theme', 'scuba_diving_sport_getstart_setup_options');
function scuba_diving_sport_getstart_setup_options () {
    update_option('scuba_diving_sport_admin_notice', false );
}

?>