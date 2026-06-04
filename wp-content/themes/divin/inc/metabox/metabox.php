<?php
/**
 * The template for displaying meta box in page/post
 *
 * This adds Select Sidebar, Header Featured Image Options, Single Page/Post Image Layout
 * This is only for the design purpose and not used to save any content
 *
 * @package Divin
 */



/**
 * Class to Renders and save metabox options
 *
 * @since Divin 0.1
 */
class divin_metabox {
	private $meta_box;

	private $fields;

	/**
	* Constructor
	*
	* @since Divin 0.1
	*
	* @access public
	*
	*/
	public function __construct( $meta_box_id, $meta_box_title, $post_type ) {

		$this->meta_box = array (
							'id' 		=> $meta_box_id,
							'title' 	=> $meta_box_title,
							'post_type' => $post_type,
							);

		$this->fields = array(
			'divin-header-image',
			'divin-featured-image',
		);


		// Add metaboxes
		add_action( 'add_meta_boxes', array( $this, 'add' ) );

		add_action( 'save_post', array( $this, 'save' ) );

		
   	}

	/**
	* Add Meta Box for multiple post types.
	*
	* @since Divin 0.1
	*
	* @access public
	*/
	public function add( $post_type ) {
        add_meta_box( $this->meta_box['id'], $this->meta_box['title'], array( $this, 'show' ), $post_type, 'side', 'high' );
    }

	/**
	* Renders metabox
	*
	* @since Divin 0.1
	*
	* @access public
	*/
	public function show() {
		global $post;

		$header_image_options 	= array(
			'default' => esc_html__( 'Default', 'divin' ),
			'enable'  => esc_html__( 'Enable', 'divin' ),
			'disable' => esc_html__( 'Disable', 'divin' ),
		);

		$featured_image_options	= array(
			'disabled'       => esc_html__( 'Disabled', 'divin' ),
			'default'        => esc_html__( 'Default', 'divin' ),
			'post-thumbnail' => esc_html__( 'Post Thumbnail (1060x596)', 'divin' ),
			'divin-featured' => esc_html__( 'Featured (664x373)', 'divin' ),
			'full'           => esc_html__( 'Original Image Size', 'divin' ),
		);


	    // Use nonce for verification
	    wp_nonce_field( basename( __FILE__ ), 'divin_custom_meta_box_nonce' );

	    // Begin the field table and loop  ?>
	    <p class="post-attributes-label-wrapper"><label class="post-attributes-label" for="divin-header-image"><?php esc_html_e( 'Header Featured Image Options', 'divin' ); ?></label></p>
		<select class="widefat" name="divin-header-image" id="divin-header-image">
			 <?php
				$meta_value = get_post_meta( $post->ID, 'divin-header-image', true );
				
				if ( empty( $meta_value ) ){
					$meta_value='default';
				}
				
				foreach ( $header_image_options as $field =>$label ) {	
				?>
					<option value="<?php echo esc_attr( $field ); ?>" <?php selected( $meta_value, $field ); ?>><?php echo esc_html( $label ); ?></option>
				<?php
				} // end foreach
			?>
		</select>
		<p class="post-attributes-label-wrapper"><label class="post-attributes-label" for="divin-featured-image"><?php esc_html_e( 'Single Page/Post Image', 'divin' ); ?></label></p>
		<select class="widefat" name="divin-featured-image" id="divin-featured-image">
			 <?php
				$meta_value = get_post_meta( $post->ID, 'divin-featured-image', true );
				
				if ( empty( $meta_value ) ){
					$meta_value='default';
				}
				
				foreach ( $featured_image_options as $field =>$label ) {	
				?>
					<option value="<?php echo esc_attr( $field ); ?>" <?php selected( $meta_value, $field ); ?>><?php echo esc_html( $label ); ?></option>
				<?php
				} // end foreach
			?>
		</select>
		<?php
	}

	/**
	 * Save custom metabox data
	 *
	 * @action save_post
	 *
	 * @since Divin 0.1
	 *
	 * @access public
	 */
	public function save( $post_id ) {
		global $post_type;

		$post_type_object = get_post_type_object( $post_type );

	    if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )                      // Check Autosave
	    || ( ! isset( $_POST['post_ID'] ) || $post_id != $_POST['post_ID'] )        // Check Revision
	    || ( ! in_array( $post_type, $this->meta_box['post_type'] ) )                  // Check if current post type is supported.
	    || ( ! check_admin_referer( basename( __FILE__ ), 'divin_custom_meta_box_nonce') )    // Check nonce - Security
	    || ( ! current_user_can( $post_type_object->cap->edit_post, $post_id ) ) )  // Check permission
	    {
	      return $post_id;
	    }

	    foreach ( $this->fields as $field ) {
			$new = $_POST[ $field ];

			delete_post_meta( $post_id, $field );

			if ( '' == $new || array() == $new ) {
				return;
			} else {
				if ( ! update_post_meta ( $post_id, $field, sanitize_key( $new ) ) ) {
					add_post_meta( $post_id, $field, sanitize_key( $new ), true );
				}
			}
		} // end foreach
	}
}

$divin_metabox = new divin_metabox(
	'divin-options', 					//metabox id
	esc_html__( 'Divin Options', 'divin' ), //metabox title
	array( 'page', 'post' )				//metabox post types
);
