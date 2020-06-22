<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<h2> Resume </h2>
<div>
	<?php
		$default_template = 'standard1';
		// esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) .'?template=standard1' );
		// $customer_id = get_current_user_id();
	?>
	<div id="content">
		<?php

			$template_configs = [
				'standard1' => 'page-template-standard1.php',
				'standard2' => '', // TODO
				'standard3' => '', // TODO
				'standard4' => '', // TODO
			];

			if (isset($_GET['id'])) {
				$edit_post_id = $_GET['id'];
				$page_template = get_page_template_slug( $edit_post_id );
				$template_name = array_search ($page_template, $template_configs);
				$_GET['template'] = $template_name;
			}
			
			$input_template = isset($_GET['template']) ? $_GET['template'] : $default_template;

			
			$resume_filter_args = array(
				'author'        => get_current_user_id(), // I could also use $user_ID, right?
				'post_type'     => 'resume',
				'orderby'       => 'post_date',
				'order'         => 'ASC' 
			);

			// get his posts 'ASC'
			$logged_user_resumes = get_posts( $resume_filter_args );

			$resume_post_id = 0; ?>
		<div class="row">
		<?php
			foreach ($logged_user_resumes as $user_resume) {
				?>
		
		<div class="card col-sm-3 p-0 mr-2 mb-2" style="width: 8rem;">
			  <div class="card-body">
				  <?php 
							$edit_url = get_permalink().'standard'. '?id=' . $user_resume->ID;
						?>
					<h5 class="card-title text-center"><?php echo get_the_title( $user_resume->ID ); ?></h5>
				  <div class="text-center">
					  <a href="<?php echo get_post_permalink($user_resume->ID ); ?>" target="_blank" class="card-link">View</a>
					  <a href="<?php echo esc_url( $edit_url)?>" class="card-link">Edit</a>
				  </div>
			  </div>
			</div>
		
		<?php
				$resume_post_id = $edit_post_id;
// 				$page_template = get_page_template_slug( $user_resume->ID );
// 				$template_name = array_search ($page_template, $template_configs);
// 				if ($template_name === $input_template) {
// 					$resume_post_id = $user_resume->ID;
// 					break;
// 				}
			}
			//require_once( get_stylesheet_directory() . "/acf-forms/" . $input_template . ".php" );
		?>
			</div>
	</div>
</div>
