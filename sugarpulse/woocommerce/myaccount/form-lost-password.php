<?php

/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_lost_password_form');
?>

<main class="profile-pages">

	<div class="profile-pages__wrap">

		<div class="container">
			<div class="profile-pages__reset">
				<h1 class="profile-pages__heading">
					<?php _e('Восстановление пароля', 'sugarpulse');?>
				</h1>

				<div class="profile-pages__reset-tip">
					<?php echo apply_filters('woocommerce_lost_password_message', esc_html__('Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce')); ?>
				</div>

				<form class="profile-pages__form-main form-main" method="post" >
					<div class="form-main__group">

						<label for="user_login" class="form-main__label">
							<?php esc_html_e('Username or email', 'woocommerce'); ?>
						</label>

						<input class="form-main__control" type="text" name="user_login" id="user_login" autocomplete="username">
					</div>

					<?php do_action('woocommerce_lostpassword_form'); ?>

					<input type="hidden" name="wc_reset_password" value="true" />
					<button class="form-main__submit form-main__submit--reset" value="<?php esc_attr_e('Reset password', 'woocommerce'); ?>">
						<?php esc_html_e('Reset password', 'woocommerce'); ?>
					</button>

					<?php wp_nonce_field('lost_password', 'woocommerce-lost-password-nonce'); ?>

				</form>


			</div>
		</div>

	</div>

</main>

<?php
do_action('woocommerce_after_lost_password_form');
