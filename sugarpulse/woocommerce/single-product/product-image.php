<?php

/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined('ABSPATH') || exit;

global $product;
$main_img = $product->get_image_id() ? wp_get_attachment_image_url($product->get_image_id(), 'large') : wc_placeholder_img_src('woocommerce_single');
$gallery = $product->get_gallery_image_ids();
?>

<?php do_action('woocommerce_product_thumbnails'); ?>

<div class="product-single__product-slider product-slider">
	<div class="product-slider__swiper-wrapper swiper-wrapper">
		<?php if ($main_img) : ?>
			<div class="product-slider__swiper-slide swiper-slide">
				<picture class="product-slider__thumbnail">
					<source srcset="<?= $main_img; ?>.webp" type="image/webp">
					<img src="<?= $main_img; ?>" alt="<?php the_title(); ?>">
				</picture>
			</div>
		<?php endif; ?>

		<?php foreach ($gallery as $item) : ?>
			<div class="product-slider__swiper-slide swiper-slide">
				<picture class="product-slider__thumbnail">
					<source srcset="<?= wp_get_attachment_image_url($item, 'large'); ?>.webp" type="image/webp">
					<img src="<?= wp_get_attachment_image_url($item, 'large'); ?>" alt="<?php the_title(); ?>">
				</picture>
			</div>
		<?php endforeach; ?>
	</div>
</div>