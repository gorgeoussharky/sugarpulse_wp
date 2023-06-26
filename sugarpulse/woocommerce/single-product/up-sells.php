<?php

/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if ($upsells) : ?>

	<div class="products-slider__product-slider-wrap product-slider-wrap">
		<div class="product-slider-wrap__wrap product-slider-wrap__wrap--accent">
			<div class="container">

				<div class="product-slider-wrap__content">
					<?php
					$heading = apply_filters('woocommerce_product_upsells_products_heading', __('You may also like&hellip;', 'woocommerce'));

					if ($heading) :
					?>
						<h2 class="product-slider-wrap__title"><?php echo esc_html($heading); ?></h2>
					<?php endif; ?>

					<div class="product-slider-wrap__products-slider products-slider">

						<div class="products-slider__swiper-wrapper swiper-wrapper">

							<?php foreach ($related_products as $related_product) : ?>
								<div class="products-slider__swiper-slide swiper-slide">
									<div class="products-slider__product-card product-card">

										<?php
										$post_object = get_post($related_product->get_id());

										setup_postdata($GLOBALS['post'] = &$post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

										wc_get_template_part('content', 'product');
										?>

									</div>
								</div>

							<?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
endif;

wp_reset_postdata();
