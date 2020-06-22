<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<main id="site-content" class="login-form" themeId="login-page" role="main">
    <div class="login-form-section">
        <div class="width-40">
            <div class="login-details">
                <div class="login-details-content">

<?php endif; ?>

		

		<form method="post">
			<h2 class="title">
				Log in <span class="account-link">or create </span><a class="account-link" href="#" style="pointer-events: none;">an account</a>
			</h2>
			<?php do_action( 'woocommerce_login_form_start' ); ?>
                        <div class="form-fields">
							<div class="user-name mb-3">
								<p class="input-name">User Name<span class="required">*</span></p>
								<input type="text" class="input-field text-field" name="username" id="username" autocomplete="username" value="<?php echo (!empty(filter_input(INPUT_POST, 'username')) ) ? esc_attr(wp_unslash(filter_input(INPUT_POST, 'username'))) : ''; ?>" /><?php // @codingStandardsIgnoreLine    ?>
								<a class="float-right mt-2" href="#">forgot username</a>
							</div>
							<div class="password mb-3">
								<p class="input-name">Password<span class="required">*</span></p>
								<div class="show-password">
									<input class="input-field text-field" type="password" name="password" id="password" autocomplete="current-password" />
									<span class="current-password" toggle="current-password">show password</span>
								</div>
								<a class="float-right mt-2" href="#"><?php esc_html_e('forgot password', 'woocommerce'); ?></a>
							</div>
                        </div>
                        <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                        <div class="form-buttons">
			<?php do_action( 'woocommerce_login_form' ); ?>
                            <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1" name="rememberme" /> <label for="styled-checkbox-1">Stay signed in</label>
                            
                        <button type="submit" name="login" value="<?php esc_attr_e( 'Sign in', 'woocommerce' ); ?>"><?php esc_html_e( 'Sign in', 'woocommerce' ); ?></button>
                         <p>This page in protected by reCAPTCHA and is subject to the <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a></p>
                        </div>
			<?php do_action( 'woocommerce_login_form_end' ); ?>
		</form>
                </div>
            </div>
        </div>
        <div class="width-60">
            <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/login/login-banner.png)">
                <div class="welcome-text">
                    <h1>Welcome,</h1>
                    <p>please log in to access your account</p>
                </div>
            </div>
        </div>
    </div><!--LOGIN-END-->	
</main><!-- #site-content -->
<?php do_action( 'woocommerce_after_customer_login_form' ); 
