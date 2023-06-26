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
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
do_action('woocommerce_before_customer_login_form');
?>



<main class="profile-pages">

	<div class="profile-pages__wrap">

		<div class="container">



			<?php
			if (isset($_GET['reg'])) : ?>

				<h1 class="profile-pages__heading"><?php esc_html_e('Register', 'woocommerce'); ?></h1>
				<div class="profile-pages__autorization">
					<form method="post" class="profile-pages__form-main form-main" <?php do_action('woocommerce_register_form_tag'); ?>>

						<?php do_action('woocommerce_register_form_start'); ?>

						<div class="form-main__wrap form-main__wrap--registration">
							<div class="form-main__reg-content">

								<?php do_action('woocommerce_register_form'); ?>

								<?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>
									<div class="form-main__tip-wrap">
										<div class="form-main__group">
											<label for="reg_username" class="form-main__label">
												<?php esc_html_e('Username', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
											</label>
											<input class="form-main__control" name="username" id="reg_username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>">
										</div>

										<div class="form-main__tip">
											<?php _e('Мы хотим знать, как мы можем к Вам обращаться', 'sugarpulse'); ?>
										</div>
									</div>
								<?php endif; ?>

								<div class="form-main__tip-wrap">

									<div class="form-main__group">

										<label class="form-main__label" for="reg_email"><?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
										<input type="email" class="form-main__control" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" />

									</div>

									<div class="form-main__tip">
										<?php _e('Является логином для входа на сайт. На него будут приходить уведомления.', 'sugarpulse'); ?>
									</div>

								</div>




								<div class="form-main__tip-wrap">
									<?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
										<div class="form-main__group">
											<label for="reg_password" class="form-main__label">
												<?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
											</label>

											<input type="password" class="form-main__control form-main__control--password" name="password" id="reg_password" autocomplete="new-password">
										</div>

										<div class="form-main__tip">
											<?php _e('Длина пароля не менее 8 символов', 'sugarpulse'); ?>
										</div>
									<?php else : ?>
										<div class="form-main__tip">
											<?php esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce'); ?></p>
										</div>
									<?php endif; ?>

								</div>




								<div class="form-main__group form-main__group--checkbox">

									<input id="policy" type="checkbox" class="form-main__control" required>

									<label for="policy" class="form-main__label">
										<?php _e('Я соглашаюсь на обработку', 'sugarpulse'); ?>
										<a href="<?= get_privacy_policy_url(); ?>" target="_blank"><?php _e('персональных данных', 'sugarpulse'); ?></a>
									</label>
								</div>

								<button type="submit" class="form-main__submit" name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><?php esc_html_e('Register', 'woocommerce'); ?></button>


								<?php do_action('woocommerce_register_form_end'); ?>
							</div>
					</form>

				</div>

		</div>

	<?php else : ?>

		<h1 class="profile-pages__heading"><?php esc_html_e('Login', 'woocommerce'); ?></h1>
		<div class="profile-pages__autorization">
			<?php do_action('woocommerce_login_form_start'); ?>

			<form class="profile-pages__form-main form-main" method="post">

				<?php do_action('woocommerce_login_form'); ?>

				<div class="form-main__wrap form-main__wrap--autorization">
					<div class="form-main__autorization">

						<div class="form-main__group">
							<label for="username" class="form-main__label">
								<?php esc_html_e('Username', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
							</label>
							<input class="form-main__control" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>">
						</div>

						<div class="form-main__group">
							<label for="password" class="form-main__label">
								<?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
							</label>
							<input class="form-main__control" name="password" id="password" autocomplete="current-password">
						</div>

						<div class="form-main__small-wrap">

							<div class="form-main__group form-main__group--checkbox">

								<input id="rememberme" type="checkbox" class="form-main__control" name="rememberme" type="checkbox" id="rememberme" value="forever">
								<label for="rememberme" class="form-main__label">
									<?php esc_html_e('Remember me', 'woocommerce'); ?>
								</label>

							</div>

							<a href="<?php echo esc_url(wp_lostpassword_url()); ?>" class="form-main__link">
								<?php esc_html_e('Lost your password?', 'woocommerce'); ?>
							</a>
						</div>

						<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
						<button type="submit" class="form-main__submit" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>

						<div class="form-main__info">
							Впервые у нас? <a class="form-main__link" href="<?=get_permalink(wc_get_page_id('myaccount'));?>?reg">Зарегистрироваться</a>
						</div>

					</div>
				</div>

				<?php do_action('woocommerce_login_form_end'); ?>

			</form>
		</div>


	<?php endif; ?>

	</div>
	</div>
</main>
<?php do_action('woocommerce_after_customer_login_form'); ?>