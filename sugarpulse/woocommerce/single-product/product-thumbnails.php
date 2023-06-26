<?php

/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.1
 */

defined('ABSPATH') || exit;

global $product;
$main_img = $product->get_image_id() ? wp_get_attachment_image_url($product->get_image_id(), 'thumbnail') : wc_placeholder_img_src('thumbnail');
$gallery = $product->get_gallery_image_ids();
?>

<div class="product-single__product-slider-thumbs product-slider-thumbs">
	<div class="product-slider-thumbs__swiper-wrapper swiper-wrapper">
		<?php if ($main_img) : ?>
			<div class="product-slider-thumbs__swiper-slide swiper-slide">
				<picture class="product-slider-thumbs__thumbnail">
					<source srcset="<?= $main_img; ?>.webp" type="image/webp">
					<img src="<?= $main_img; ?>" alt="<?php the_title(); ?>">
				</picture>
			</div>
		<?php endif; ?>
		<?php foreach ($gallery as $item) : ?>
			<div class="product-slider-thumbs__swiper-slide swiper-slide">
				<picture class="product-slider-thumbs__thumbnail">
					<source srcset="<?= wp_get_attachment_image_url($item, 'thumbnail'); ?>.webp" type="image/webp">
					<img loading="lazy" src="<?= wp_get_attachment_image_url($item,  'thumbnail'); ?>" alt="<?= get_post_meta($item, '_wp_attachment_image_alt'); ?>">
				</picture>
			</div>
		<?php endforeach; ?>
	</div>
</div>