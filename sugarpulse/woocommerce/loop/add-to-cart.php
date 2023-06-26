<?php

/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}

global $product;
$in_stock = $product->get_stock_quantity() > 0;
?>

<div class="product-card__counter-form counter-form">

	<div class="counter-form__group">
		<div class="counter-form__counter">

			<button class="counter-form__count-btn counter-form__count-btn--increase">
				<svg width="5" height="2" viewBox="0 0 5 2" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.822078 1.052H4.16808V0.142H0.822078V1.052Z" fill="#0098C7"></path>
				</svg>
			</button>
			<input class="counter-form__count" placeholder="1">
			<button class="counter-form__count-btn counter-form__count-btn--decrease">
				<svg width="8" height="7" viewBox="0 0 8 7" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.49901 6.768H4.56301V4.066H7.12501V3.114H4.56301V0.454H3.49901V3.114H0.867008V4.066H3.49901V6.768Z" fill="#0098C7"></path>
				</svg>

			</button>

		</div>
	</div>

	<div class="product-card__btns-wrap">
		<?php echo apply_filters(
			'woocommerce_loop_add_to_cart_link',
			// WPCS: XSS ok.
			sprintf(
				'<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
				esc_url($product->add_to_cart_url()),
				esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
				'product-card__btn product-card__btn--accent',
				isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
				esc_html($product->add_to_cart_text())
			),
			$product,
			$args
		); ?>


		<?php if ($in_stock) : ?>
			<button class="product-card__btn">
				В 1 клик
			</button>
		<?php endif; ?>

	</div>
</div>