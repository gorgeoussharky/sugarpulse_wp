<?php

/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
get_header('shop');
?>

<main class="catalog-page">
	<div class="container">

		<?php
		/**
		 * Hook: woocommerce_before_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action('woocommerce_before_main_content');

		?>
		<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
			<h1 class="catalog-page__heading">
				<?php woocommerce_page_title(); ?>
			</h1>
		<?php endif; ?>

		<div class="catalog-page__catalog-type catalog-type">
			<div class="catalog-type__content">

				<div class="catalog-type__sidebar">
					<?php
					/**
					 * Hook: woocommerce_sidebar.
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action('woocommerce_sidebar');
					?>
				</div>



				<div class="catalog-type__main-content">

					<?= get_template_part('template-parts/content', 'catalog'); ?>

					<div class="catalog-type__text-content text-content">
						<?php
						/**
						 * Hook: woocommerce_archive_description.
						 *
						 * @hooked woocommerce_taxonomy_archive_description - 10
						 * @hooked woocommerce_product_archive_description - 10
						 */
						do_action('woocommerce_archive_description'); ?>
					</div>

				</div>

				<?php
				/**
				 * Hook: woocommerce_after_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action('woocommerce_after_main_content'); ?>

				<div class="catalog-page__promo-banners promo-banners">
					<?= get_template_part('template-parts/content', 'promo-banners'); ?>
				</div>

				<div class="catalog-page__reviews-slider-wrap reviews-slider-wrap">
					<?= get_template_part('template-parts/content', 'video-reviews'); ?>
				</div>

				<div class="catalog-page__reviews-slider-wrap reviews-slider-wrap">
					<?= get_template_part('template-parts/content', 'reviews'); ?>
				</div>

			</div>
		</div>

		<?php



		get_footer('shop');
