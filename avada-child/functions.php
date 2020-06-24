<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 1);

function my_theme_enqueue_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('fontawsome', get_stylesheet_directory_uri() . '/custom/fontawsome/css/all.css');
	wp_enqueue_script('jQuery-3.5.1', get_stylesheet_directory_uri() . '/custom/js/jquery-3.5.1.min.js');
	wp_enqueue_style('jquery-ui-css', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css');
	wp_enqueue_script('jQuery-ui-js', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js');
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');
	wp_enqueue_style('bootstrap-slim-js', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
	wp_enqueue_style('bootstrap-popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
	wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/custom/js/script.js', array(), '0.1.34');
	
   // 	CUSTOM-CSS-FILE
	wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/custom-style.css', array(), '0.1.32');
}

/*
 * Custom Field For Registration in WooCommerce
 */
add_action( 'woocommerce_register_form_start', 'bbloomer_add_name_woo_account_registration' );
  
function bbloomer_add_name_woo_account_registration() {
	?>
  
	<p class="form-row form-row-first">
	<label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
	<input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( filter_input(INPUT_POST,'billing_first_name') ) ) { esc_attr_e( filter_input(INPUT_POST,'billing_first_name') );} ?>" />
	</p>
  
	<p class="form-row form-row-last">
	<label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
	<input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( filter_input(INPUT_POST,'billing_last_name') ) ) { esc_attr_e( filter_input(INPUT_POST,'billing_last_name') );} ?>" />
	</p>
	
	<p class="form-row form-row-phone">
	<label for="reg_billing_phone"><?php _e( 'Phone Number', 'woocommerce' ); ?> <span class="required">*</span></label>
	<input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php if ( ! empty( filter_input(INPUT_POST,'billing_phone') ) ) { esc_attr_e( filter_input(INPUT_POST,'billing_phone') );} ?>" />
	</p>

	<p class="form-row form-row-address1">
		<label for="reg_billing_address1"><?php _e( 'Address1', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="billing_address1" id="reg_billing_address1" value="<?php if ( ! empty( filter_input(INPUT_POST,'billing_address1') ) ) { esc_attr_e( filter_input(INPUT_POST,'billing_address1') ); }?>" />
	</p>
	
	<p class="form-row form-row-city">
		<label for="reg_billing_city"><?php _e( 'City', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="billing_city" id="reg_billing_phone" value="<?php if ( ! empty( filter_input(INPUT_POST,'billing_city') ) ) { esc_attr_e( filter_input(INPUT_POST,'billing_city') ); }?>" />
	</p>
	
	<p class="form-row form-row-postcode">
		<label for="reg_billing_postcode"><?php _e( 'Post Code', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="billing_postcode" id="reg_billing_phone" value="<?php if ( ! empty( filter_input(INPUT_POST,'billing_postcode') ) ) { esc_attr_e( filter_input(INPUT_POST,'billing_postcode') ); }?>" />
	</p>

	<div class="clear"></div>
  
	<?php
}

//validation
add_filter( 'woocommerce_registration_errors', 'bbloomer_validate_name_fields', 4, 3 );
  
function bbloomer_validate_name_fields( $errors, $username, $email ) {
	if (!empty(filter_input(INPUT_POST,'billing_first_name') ) ) {
		$errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
	}
	if (!empty( filter_input(INPUT_POST,'billing_last_name') ) ) {
		$errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
	}
	if (!empty( filter_input(INPUT_POST,'billing_phone') ) ) {
		$errors->add( 'billing_phone_error', __( '<strong>Error</strong>: Phone Number is required!.', 'woocommerce' ) );
	}
	if (!empty(filter_input(INPUT_POST,'billing_address1')) ) {
		$errors->add( 'billing_address1_error', __( '<strong>Error</strong>: Address is required!', 'woocommerce' ) );
	}
	if ( !empty( filter_input(INPUT_POST,'billing_city') ) ) {
		$errors->add( 'billing_city_error', __( '<strong>Error</strong>: City is required!.', 'woocommerce' ) );
	}
	if ( !empty( filter_input(INPUT_POST,'billing_postcode') ) ) {
		$errors->add( 'billing_postcode_error', __( '<strong>Error</strong>: Post Code is required!.', 'woocommerce' ) );
	}
	return $errors;
}
  
  
// 3. SAVE FIELDS
  
add_action( 'woocommerce_created_customer', 'bbloomer_save_name_fields' );
  
function bbloomer_save_name_fields( $customer_id ) {
	if ( !empty( filter_input(INPUT_POST,'billing_first_name') ) ) {
		update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( filter_input(INPUT_POST,'billing_first_name') ) );
		update_user_meta( $customer_id, 'first_name', sanitize_text_field(filter_input(INPUT_POST,'billing_first_name')) );
	}
	if ( !empty( filter_input(INPUT_POST,'billing_last_name') ) ) {
		update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( filter_input(INPUT_POST,'billing_last_name') ) );
		update_user_meta( $customer_id, 'last_name', sanitize_text_field(filter_input(INPUT_POST,'billing_last_name')) );
	}
	if ( !empty( filter_input(INPUT_POST,'billing_phone') ) ) {
		update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( filter_input(INPUT_POST,'billing_phone') ) );
		update_user_meta( $customer_id, 'phone', sanitize_text_field(filter_input(INPUT_POST,'billing_phone')) );
	}
	if ( !empty( filter_input(INPUT_POST,'billing_address1') ) ) {
		update_user_meta( $customer_id, 'billing_address1', sanitize_text_field( filter_input(INPUT_POST,'billing_address1') ) );
		update_user_meta( $customer_id, 'address1', sanitize_text_field(filter_input(INPUT_POST,'billing_address1')) );
	}
	if ( !empty( filter_input(INPUT_POST,'billing_city') ) ) {
		update_user_meta( $customer_id, 'billing_city', sanitize_text_field( filter_input(INPUT_POST,'billing_city') ) );
		update_user_meta( $customer_id, 'city', sanitize_text_field(filter_input(INPUT_POST,'billing_city')) );
	}
	if ( !empty( filter_input(INPUT_POST,'billing_postcode') ) ) {
		update_user_meta( $customer_id, 'billing_postcode', sanitize_text_field( filter_input(INPUT_POST,'billing_postcode') ) );
		update_user_meta( $customer_id, 'postcode', sanitize_text_field(filter_input(INPUT_POST,'billing_postcode')) );
	}
}


/*
 * Shortcode for Registeration Page
 */
add_shortcode( 'wc_reg_form_bbloomer', 'bbloomer_separate_registration_form',12 );
	
function bbloomer_separate_registration_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return;
   ob_start();
 
   // NOTE: THE FOLLOWING <FORM></FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
   // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY
 
   do_action( 'woocommerce_before_customer_login_form' );
 
   ?>
	  <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-form-row form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>
 <?php do_action( 'woocommerce_after_customer_login_form' ); ?>
   <?php
	 
   return ob_get_clean();
   
   
}


/**
  * Register new endpoints to use inside My Account page.
  */

add_action( 'init', 'my_account_new_endpoints' );

function my_account_new_endpoints() {
	add_rewrite_endpoint( 'resume', EP_ROOT | EP_PAGES );
}
/**
 * Get new endpoint content
 */
add_action( 'woocommerce_account_resume_endpoint', 'resume_endpoint_content' );
function resume_endpoint_content() {
	get_template_part('woocommerce/myaccount/my-account-resume', 'page');
}
/**
 * Edit my account menu order
 */

function my_account_menu_order() {
	$menuOrder = array(
		'dashboard'          => __( 'Dashboard', 'woocommerce' ),
		'resume'             => __( 'Resume', 'woocommerce' ),
		'orders'             => __( 'Your Orders', 'woocommerce' ),
		'downloads'          => __( 'Download', 'woocommerce' ),
		'edit-address'       => __( 'Addresses', 'woocommerce' ),
		'edit-account'       => __( 'Account Details', 'woocommerce' ),
		'customer-logout'    => __( 'Logout', 'woocommerce' )		
	);
	return $menuOrder;
}
add_filter ( 'woocommerce_account_menu_items', 'my_account_menu_order' );

/*
 * Custom
 */
// Hooking up our function to theme setup
add_action( 'init', 'create_custom_resume_posttype', 6 );

function create_custom_resume_posttype() {
 
	register_post_type( 'resume',
	// CPT Options
		array(
			'labels' => array(
				'name'               => __( 'Resume' ),  // display name
				'singular_name'      => __( 'resume' ),
				'add_new'            => __( 'Add New resume' ), 
				'add_new_item'       => __( 'Add New resume' ),
				'edit'               => __( 'Edit resume' ),
				'edit_item'          => __( 'Edit resume' ),
				'new_item'           => __( 'New resume' ),
				'view'               => __( 'View resume' ),
				'view_item'          => __( 'View resume' ),
				'search_items'       => __( 'Search resume' ),
				'not_found'          => __( 'No resume found' ),
				'not_found_in_trash' => __( 'No resume found in Trash' ),
				'parent'             => __( 'Parent resume' ),
			),
			'supports'            => array( 'title', 'editor', 'thumbnail', 'author' ),
			'public'              => true,
			'show_ui'             => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'menu_icon'           => 'dashicons-art',
			'rewrite'             => array('slug' => 'resume'),
			'has_archive'         => false
 
		)
	);
	register_taxonomy(
		'resume_cat',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'resume',             // post type name
		array(
			'hierarchical' => true,
			'label' => 'Resume Categories', // display name
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'themes',    // This controls the base slug that will display before each term
				'with_front' => false  // Don't display the category base before
			)
		)
	);
}

//redirect of page
add_action( 'template_redirect', 'redirect_to_specific_page' );

function redirect_to_specific_page() {

if ( is_page('1676') && ! is_user_logged_in() ) {

wp_redirect( get_home_url().'/my-account'); 
  exit;
    }
}
// Getting and storing the Value for Resume

add_action( 'init', 'add_custom_field_value_custom_resume_posttype', 10 );

function add_custom_field_value_custom_resume_posttype() {
	//$current_user = wp_get_current_user();
	//$current_user->user_login

	if (filter_input(INPUT_POST,'action') == "resume") {
		
        
		
		$new_post = array(
			'post_title'    => filter_input(INPUT_POST,'first_name'),
			'post_status'   => 'draft',
			'post_type'     => 'resume' 
		);
		//wp_redirect( get_home_url().'/resume/'.filter_input(INPUT_POST,'first_name') );
		//insert the the post into database by passing $new_post to wp_insert_post
		//store our post ID in a variable $pid
		//we now use $pid (post id) to help add out post meta data
		if ( !empty(filter_input( INPUT_POST, 'post_id' ) ) ) {
			$post_id = filter_input( INPUT_POST, 'post_id' );
			$post = array(
				'ID'             => $post_id,
				'post_title'     => $_POST['first_name'],
				'value' => '1'
			);
			wp_update_post($post);
			wp_redirect( get_home_url().'/my-account/resume' );
			
		} else {
			$post_id = wp_insert_post($new_post);
			wp_redirect( get_home_url().'/my-account/resume' );
		}

		// assign page template.
		if ( filter_input( INPUT_POST, 'page_template' ) ) {
			update_post_meta( $post_id, '_wp_page_template', 'page-template-'. filter_input( INPUT_POST, 'page_template' ) . '.php');
		} else {
			echo 'Your template is wrong';
			exit();
		}
				
		
		//we now use $pid (post id) to help add out post meta data
		$resume_form_inputs = [
			'logo_show_hide',
			'personal_profile_show_hide',
			'first_name',
			'last_name',
			'personal_profile',
			'hobbies_details',
			'call_time',
			'skype_call',
			'google_meet_call',
			'whatsapp_call',
			'zoom_call',
			'messenger_call',
			'facebook_url',
			'linkedin_url',
			'twitter_url',
			'youtube_url',
			'pinterest_url',
			'mobile_number',
			'phone_number',
		];
		foreach ($resume_form_inputs as $field_name) {
			update_post_meta( $post_id, $field_name, filter_input( INPUT_POST, $field_name ));
		}

		// unset keyskills
		delete_post_meta( $post_id,  'key_skill', '');
		
		// key skills
		foreach(array_filter($_POST['key_skills']) as $value){
			$row = array(
				'skills'   => $value,
			);
			add_row('key_skill', $row, $post_id);
		}

		// unset work experience
		for($i = 0; $i < 5; $i++ ) {
			update_post_meta( $post_id,  'work_from_' .  $i , '');
			update_post_meta( $post_id,  'work_to_' .  $i , '');
			update_post_meta( $post_id,  'job_title_' .  $i , '');
			update_post_meta( $post_id,  'employer_' .  $i , '');
			update_post_meta( $post_id,  'work_responsibilities_' .  $i , '');
		}

		// work experience
		if ( isset( $_POST['work_exp'] ) ) {
			foreach($_POST['work_exp'] as $meta_key => $work_experience) {
				foreach($work_experience as $key => $work_exp_value) {
					if ($key > 5) {
						continue; 
					}
					update_post_meta( $post_id, $meta_key . '_' .  $key , $work_exp_value);
				}
			}
			
			for($i = 0; $i < 5; $i++ ) {
				$value = array(
					'from_date_exp' => $_POST['work_exp']['work_from'][$i],
					'to_date_exp'    => $_POST['work_exp']['work_to'][$i],
					'job_title_name' => $_POST['work_exp']['job_title'][$i],
					'employer_id' => $_POST['work_exp']['employer'][$i],
				);
				add_row('work_exp', $value, $post_id);
				foreach($_POST['work_exp']['work_responsibilities'][$i] as $key => $val){
					$sub = array(
						'repons' => $val,
					);
					add_sub_row(array('work_exp', $key + 1, 'exp_responsibity'), $sub, $post_id);
				}
				
			}
		}
		
		

		// unset education
		for($i = 0; $i < 5; $i++ ) {
			update_post_meta( $post_id,  'education_from_' .  $i , '');	
			update_post_meta( $post_id,  'education_to_' .  $i , '');	
			update_post_meta( $post_id,  'education_institution_' .  $i , '');	
			update_post_meta( $post_id,  'education_qualification_' .  $i , '');	
			update_post_meta( $post_id,  'education_more_details_' .  $i , '');	
		}

		// education
		if ( isset( $_POST ) ) {
			foreach($_POST['education'] as $meta_key => $educations) {
				foreach($educations as $key => $education_value) {
					// Maximum 6
					if ($key > 5) {
						continue; 
					}
					update_post_meta( $post_id, $meta_key . '_' .  $key , $education_value);
				}
			}
		}
		// upload image fields
		$image_fields = [
			'profile_image',
			'personal_profile_image',
			'work_experience_image',
			'hobbies_image',
			'education_image',
			'contact_image'
		];
		if ( !function_exists('wp_handle_upload') ) {
			require_once(ABSPATH . 'wp-admin/includes/file.php');
		}

		foreach($image_fields as $image_field) {
			fileupload($image_field, $post_id);
		}
	}
}

/**
 * Upload the image file and link to the post.
 *
 * @param string $image_field
 * @param int    $post_id
 */
function fileupload($image_field, $post_id)
{
	// validations before upload
	$file_size = $_FILES[$image_field]["size"];
	$file_type = strtolower(pathinfo($_FILES[$image_field]["name"], PATHINFO_EXTENSION));
	$extensions = ['jpg', 'png', 'jpeg'];
	if (empty($file_type) || $file_size === 0 || ($file_size / 1024) > 1125 || !in_array($file_type, $extensions)) {
		return;
	}

	// Move file to media library
	$movefile = wp_handle_upload( $_FILES[$image_field], array('test_form' => false) );

	// If move was successful, insert WordPress attachment
	if ( $movefile && !isset($movefile['error']) ) {
		$wp_upload_dir = wp_upload_dir();
		$attachment = array(
			'guid' => $wp_upload_dir['url'] . '/' . basename($movefile['file']),
			'post_mime_type' => $movefile['type'],
			'post_title' => preg_replace( '/\.[^.]+$/', '', basename($movefile['file']) ),
			'post_content' => '',
			'post_status' => 'inherit',
		);
		$attach_id = wp_insert_attachment($attachment, $movefile['file']);

		// Assign the file as the featured image
		// set_post_thumbnail($post_id, $attach_id);
		update_field($image_field, $attach_id, $post_id);
	}
}