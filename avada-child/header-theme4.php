<?php
/**
 * Header template.
 *
 * @package Avada
 * @subpackage Templates
 */
// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
	exit('Direct script access denied.');
}
?>
<!DOCTYPE html>
<html class="<?php avada_the_html_class(); ?>" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<?php Avada()->head->the_viewport(); ?>

		<?php wp_head(); ?>

		<?php
		/**
		 * The setting below is not sanitized.
		 * In order to be able to take advantage of this,
		 * a user would have to gain access to the database
		 * in which case this is the least of your worries.
		 */
		echo apply_filters('avada_space_head', Avada()->settings->get('space_head')); // phpcs:ignore WordPress.Security.EscapeOutput
		?>
	</head>

	<?php
	$object_id = get_queried_object_id();
	$c_page_id = Avada()->fusion_library->get_page_id();
	$wrapper_class = 'fusion-wrapper';
	$wrapper_class .= ( is_page_template('blank.php') ) ? ' wrapper_blank' : '';
	?>
	<body <?php body_class(); ?> <?php fusion_element_attributes('body'); ?>>
		<?php do_action('avada_before_body_content'); ?>
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'Avada'); ?></a>

		<div id="boxed-wrapper">
			<div class="fusion-sides-frame"></div>
			<div id="wrapper" class="<?php echo esc_attr($wrapper_class); ?>">
				<div id="home" style="position:relative;top:-1px;"></div>
				<header id="site-header" class="header-footer-group theme4 layout-theme" role="banner">

					<div class="header-inner section-inner">

						<div class="header-titles-wrapper">

							<div class="site-logo fauxz">
								<a href="/" class="custom-logo-link" rel="home">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cvbrandmelogo.png" class="custom-logo" alt="cv">
								</a>
							</div>

							<a class="toggle nav-toggle cursor mobile-toggle">
								<i class="fas fa-bars"></i>
							</a><!-- .nav-toggle -->

						</div><!-- .header-titles-wrapper -->

						<div class="header-navigation-wrapper">

							<nav class="primary-menu-wrapper" aria-label="Horizontal" role="navigation">

								<ul class="primary-menu reset-list-style">
									<li class="menu-item">
										<a href="#home" class="active">
											<i class="fas fa-home"></i>
											<span>Home</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#about">
											<i class="fas fa-user"></i>
											<span>About</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#work">
											<i class="fa fa-briefcase"></i>
											<span>Work History</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#skills">
											<i class="far fa-chart-bar"></i>
											<span>Skills</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#hobbies">
											<i class="fas fa-hands-helping"></i>
											<span>Hobbies &amp; Interests</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#references">
											<i class="far fa-heart"></i>
											<span>References</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#contact">
											<i class="fas fa-phone"></i>
											<span>Contact</span>
										</a>
									</li>
								</ul>

							</nav><!-- .primary-menu-wrapper -->


						</div><!-- .header-navigation-wrapper -->

					</div><!-- .header-inner -->

				</header>
				<div class="layout-theme">
					<div class="menu-modal">

						<div class="menu-modal-inner modal-inner">

							<nav class="mobile-menu">

								<ul class="modal-menu">
									<li class="menu-item">
										<a href="#home" class="active">
											<span>Home</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#about">
											<span>About</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#work">
											<span>Work History</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#skills">
											<span>Skills</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#hobbies">
											<span>Hobbies &amp; Interests</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#references">
											<span>References</span>
										</a>
									</li>
									<li class="menu-item">
										<a href="#contact">
											<span>Contact</span>
										</a>
									</li>
								</ul>

							</nav>

						</div> 

					</div>
				</div>
