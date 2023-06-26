<?php

/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;

$regular_price = $product->get_regular_price();
$sale_price = $product->get_sale_price();
?>

<?php if ($product->get_price()) : ?>

	<div class="product-single__price-mobile">
		<div class="product-single__discount">
			<span><?php _e('Прежняя цена:', 'sugarpulse'); ?></span>
			<span> <?= wc_price($sale_price); ?></span>
		</div>

		<div class="product-single__price">
			<?= wc_price($regular_price); ?>
		</div>
	</div>

<?php endif; ?>