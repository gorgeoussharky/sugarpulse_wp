<?php

/**
 * Lost password reset form.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-reset-password.php.
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

do_action('woocommerce_before_reset_password_form');
?>

<main class="profile-pages">

	<div class="profile-pages__wrap">

		<div class="container">


			<h1 class="profile-pages__heading">
				<?php _e('Восстановление пароля', 'sugarpulse'); ?>
			</h1>

			<div class="profile-pages__reset-tip"><?php echo apply_filters('woocommerce_reset_password_message', esc_html__('Enter a new password below.', 'woocommerce')); ?></div><?php // @codingStandardsIgnoreLine 
																																													?>
			<form method="post" class="profile-pages__form-main form-main">

				<div class="form-main__reg-content">
					<div class="form-main__tip-wrap">
						<div class="form-main__group">
							<label for="password_1" class="form-main__label">
								<?php esc_html_e('New password', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
							</label>

							<input type="password" name="password_1" id="password_1" autocomplete="new-password" class="form-main__control form-main__control--password">
						</div>

						<div class="form-main__tip">
							<?php _e('Длина пароля не менее 8 символов', 'sugarpulse'); ?>
						</div>
					</div>

					<div class="form-main__group">
						<label for="password_2" class="form-main__label">
							<?php esc_html_e('Re-enter new password', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
						</label>

						<input type="password" name="password_2" id="password_2" autocomplete="new-password" class="form-main__control form-main__control--password">
					</div>
				</div>

				<input type="hidden" name="reset_key" value="<?php echo esc_attr($args['key']); ?>" />
				<input type="hidden" name="reset_login" value="<?php echo esc_attr($args['login']); ?>" />

				<?php do_action('woocommerce_resetpassword_form'); ?>

				<?php wp_nonce_field('reset_password', 'woocommerce-reset-password-nonce'); ?>

				<p class="woocommerce-form-row form-row">
					<input type="hidden" name="wc_reset_password" value="true" />
					<button type="submit" class="form-main__submit form-main__submit--reset" value="<?php esc_attr_e('Save', 'woocommerce'); ?>"><?php esc_html_e('Save', 'woocommerce'); ?></button>
				</p>
			</form>

		</div>
	</div>
</main>
<?php
do_action('woocommerce_after_reset_password_form');
