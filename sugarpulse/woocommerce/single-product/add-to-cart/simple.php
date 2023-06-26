<?php

/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
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

global $product;

if (!$product->is_purchasable()) {
	return;
}

echo wc_get_stock_html($product); // WPCS: XSS ok.

if ($product->is_in_stock()) : ?>

	<div class="product-single__mobile-wrap">

		<?php do_action('woocommerce_before_add_to_cart_form'); ?>

		<form class="cart-product__product-counter product-counter product-counter--single" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
			<?php do_action('woocommerce_before_add_to_cart_button'); ?>

			<div class="product-counter__content">

				<div class="product-counter__counter">

					<button type="button" class="product-counter__count-btn product-counter__count-btn--minus">
						<svg width="5" height="2" viewBox="0 0 5 2" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.822078 1.052H4.16808V0.142H0.822078V1.052Z" fill="#0098C7" />
						</svg>

					</button>

					<?php
					do_action('woocommerce_before_add_to_cart_quantity');

					woocommerce_quantity_input(
						array(
							'classes' => 'product-counter__count',
							'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
							'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
							'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
						)
					);

					do_action('woocommerce_after_add_to_cart_quantity');
					?>

					<button type="button" class="product-counter__count-btn product-counter__count-btn--plus">
						<svg width="8" height="7" viewBox="0 0 8 7" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.49901 6.768H4.56301V4.066H7.12501V3.114H4.56301V0.454H3.49901V3.114H0.867008V4.066H3.49901V6.768Z" fill="#0098C7" />
						</svg>

					</button>
				</div>

			</div>

			<div class="product-single__btns-wrap">
				<button class="product-single__btn product-single__btn--accent" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
				<button class="product-single__btn">В 1 клик</button>
			</div>

			<?php do_action('woocommerce_after_add_to_cart_button'); ?>
		</form>

		<?php do_action('woocommerce_after_add_to_cart_form'); ?>

	</div>

<?php endif; ?>