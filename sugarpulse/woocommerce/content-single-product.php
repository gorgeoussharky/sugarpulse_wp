<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<main class="product-single">
	<div class="product-single__wrap">
		<div class="container">

			<?php woocommerce_template_single_title(); ?>

			<div class="product-single__header">

				<div class="product-single__col product-single__col--left">
					<?php
					/**
					 * Hook: woocommerce_before_single_product_summary.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action('woocommerce_before_single_product_summary');
					?>
				</div>

				<div class="product-single__col product-single__col--mid">
					<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action('woocommerce_single_product_summary');
					?>
				</div>

				<div class="product-single__col product-single__col--right">

					<picture class="product-single__logo">
						<source srcset="data:image/avif;base64,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&#x3D;" type="image/avif">
						<img loading="lazy" src="data:image/webp;base64,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&#x3D;&#x3D;" alt="">
					</picture>

					<?php
					$in_stock = $product->get_stock_quantity() > 0;
					$modifier = $in_stock ? 'product-single__status--in-stock' : 'product-single__status--not-in-stock';
					?>

					<div class="product-single__status product-single__status--mobile <?= $modifier; ?>">
						<?= $in_stock ? _e('В наличии', 'sugarpulse') : _e('Нет в наличии', 'sugarpulse'); ?>
					</div>

					<?= woocommerce_template_single_price(); ?>

					<?= woocommerce_template_single_add_to_cart(); ?>

					<div class="product-single__like-wrap">

						<button class="product-single__like-btn like-btn">
							<svg width="18" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path stroke="#0098C7" d="M8 15.1099C7.77222 15.1099 7.55261 15.0273 7.38147 14.8774C6.73511 14.3123 6.11194 13.7811 5.56213 13.3126L5.55933 13.3102C3.94739 11.9365 2.55542 10.7502 1.58691 9.58167C0.504272 8.27527 0 7.03662 0 5.68347C0 4.36877 0.450806 3.15588 1.26929 2.26807C2.09753 1.36975 3.23401 0.875 4.46973 0.875C5.39331 0.875 6.23914 1.16699 6.98364 1.7428C7.35938 2.03345 7.69995 2.38916 8 2.80408C8.30017 2.38916 8.64062 2.03345 9.01648 1.7428C9.76099 1.16699 10.6068 0.875 11.5304 0.875C12.766 0.875 13.9026 1.36975 14.7308 2.26807C15.5493 3.15588 16 4.36877 16 5.68347C16 7.03662 15.4958 8.27527 14.4132 9.58154C13.4447 10.7502 12.0529 11.9364 10.4412 13.3099C9.89038 13.7792 9.26624 14.3112 8.61841 14.8777C8.44739 15.0273 8.22766 15.1099 8 15.1099Z" fill="#fff" />
							</svg>
						</button>

						<span><?php _e('Добавить в избранное', 'sugarpulse'); ?></span>

					</div>

				</div>

			</div>

			<div class="product-single__content">
				<?php
				/**
				 * Hook: woocommerce_after_single_product_summary.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * 
				 */
				do_action('woocommerce_after_single_product_summary');
				?>
			</div>



			<div class="product-single__small-benefits small-benefits">

				<h2 class="small-benefits__title">Почему стоит покупать именно у нас</h2>

				<ul class="small-benefits__list">

					<li class="small-benefits__item">

						<div class="small-benefits__icon-wrap">

							<img class="small-benefits__icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTI2Ljk2IDE5LjA0N1Y2LjE5NWMwLS4zLS4yNDUtLjU0Ny0uNTQ2LS41NDdIMTIuMTk1Yy0uMyAwLS41NDcuMjQ3LS41NDcuNTQ3djEyLjg1MmMwIC4zLjI0Ny41NDcuNTQ3LjU0N2gxNC4yMmMuMyAwIC41NDYtLjI0Ni41NDYtLjU0N1ptLTEuMDkzLS41NDdIMTIuNzQyVjYuNzQyaDEzLjEyNVYxOC41WiIvPjxwYXRoIGZpbGw9IiMxRDFEMUQiIGQ9Ik0yNS4zMiAxSDEzLjI5QTYuMjkgNi4yOSAwIDAgMCA3IDcuMjl2MTUuODU4YTYuMjkgNi4yOSAwIDAgMCA2LjI5IDYuMjloMi4xODd2Ni4wMTVjMCAuMy4yNDYuNTQ3LjU0Ni41NDdoNi41NjNjLjMgMCAuNTQ3LS4yNDYuNTQ3LS41NDd2LTYuMDE2aDIuMTg3YTYuMjkgNi4yOSAwIDAgMCA2LjI5LTYuMjg5VjcuMjlBNi4yOSA2LjI5IDAgMCAwIDI1LjMyIDFabS0zLjI4IDMzLjkwNmgtNS40N3YtOS44NDNoNS40N3Y5Ljg0M1ptOC40NzYtMTEuNzU4YTUuMTkzIDUuMTkzIDAgMCAxLTUuMTk2IDUuMTk2aC0yLjE4N3YtMy4yODJoMS4wOTRjLjMgMCAuNTQ2LS4yNDYuNTQ2LS41NDYgMC0uMzAxLS4yNDYtLjU0Ny0uNTQ2LS41NDdoLTkuODQ0Yy0uMzAxIDAtLjU0Ny4yNDYtLjU0Ny41NDcgMCAuMy4yNDYuNTQ3LjU0Ny41NDdoMS4wOTR2My4yOGgtMi4xODhhNS4xOTMgNS4xOTMgMCAwIDEtNS4xOTUtNS4xOTVWNy4yOWE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NS01LjE5NUgyNS4zMmE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NiA1LjE5NXYxNS44NloiLz48cGF0aCBmaWxsPSIjMUQxRDFEIiBkPSJNMTkuMzA1IDMzLjgxM2MuOTAyIDAgMS42NC0uNzM5IDEuNjQtMS42NDFzLS43MzgtMS42NC0xLjY0LTEuNjRjLS45MDMgMC0xLjY0LjczOC0xLjY0IDEuNjQgMCAuOTAyLjczNyAxLjY0IDEuNjQgMS42NFptMC0yLjE4OGMuMyAwIC41NDcuMjQ2LjU0Ny41NDcgMCAuMy0uMjQ3LjU0Ny0uNTQ3LjU0N2EuNTQ5LjU0OSAwIDAgMS0uNTQ3LS41NDdjMC0uMy4yNDYtLjU0Ny41NDctLjU0N1oiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMTkuMzA1IDE2Ljg2YzEuNjEzIDAgMi45NTMtMS4zMTMgMi45NTMtMi45MjYgMC0yLjk4LTIuNDg4LTUuMzA1LTIuNTctNS4zODdhLjU1NC41NTQgMCAwIDAtLjc2Ni4wMjdjLS4xMS4xMS0yLjU3IDIuNzA3LTIuNTcgNS4zNiAwIDEuNjEzIDEuMzQgMi45MjYgMi45NTMgMi45MjZabS4wMjctNy4xMWMuNjI5LjczOSAxLjgzMiAyLjM1MiAxLjgzMiA0LjE4NCAwIDEuMDM5LS44NDggMS44Ni0xLjg2IDEuODYtMS4wMzggMC0xLjg1OS0uODIxLTEuODU5LTEuODYgMC0xLjY2OCAxLjIzLTMuNDE4IDEuODg3LTQuMTg0WiIvPjwvc3ZnPg==" alt="">
							<img class="small-benefits__icon small-benefits__icon--dark" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI2Ljk2IDE5LjA0N1Y2LjE5NWMwLS4zLS4yNDUtLjU0Ny0uNTQ2LS41NDdIMTIuMTk1Yy0uMyAwLS41NDcuMjQ3LS41NDcuNTQ3djEyLjg1MmMwIC4zLjI0Ny41NDcuNTQ3LjU0N2gxNC4yMmMuMyAwIC41NDYtLjI0Ni41NDYtLjU0N1ptLTEuMDkzLS41NDdIMTIuNzQyVjYuNzQyaDEzLjEyNVYxOC41WiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yNS4zMiAxSDEzLjI5QTYuMjkgNi4yOSAwIDAgMCA3IDcuMjl2MTUuODU4YTYuMjkgNi4yOSAwIDAgMCA2LjI5IDYuMjloMi4xODd2Ni4wMTVjMCAuMy4yNDYuNTQ3LjU0Ni41NDdoNi41NjNjLjMgMCAuNTQ3LS4yNDYuNTQ3LS41NDd2LTYuMDE2aDIuMTg3YTYuMjkgNi4yOSAwIDAgMCA2LjI5LTYuMjg5VjcuMjlBNi4yOSA2LjI5IDAgMCAwIDI1LjMyIDFabS0zLjI4IDMzLjkwNmgtNS40N3YtOS44NDNoNS40N3Y5Ljg0M1ptOC40NzYtMTEuNzU4YTUuMTkzIDUuMTkzIDAgMCAxLTUuMTk2IDUuMTk2aC0yLjE4N3YtMy4yODJoMS4wOTRjLjMgMCAuNTQ2LS4yNDYuNTQ2LS41NDYgMC0uMzAxLS4yNDYtLjU0Ny0uNTQ2LS41NDdoLTkuODQ0Yy0uMzAxIDAtLjU0Ny4yNDYtLjU0Ny41NDcgMCAuMy4yNDYuNTQ3LjU0Ny41NDdoMS4wOTR2My4yOGgtMi4xODhhNS4xOTMgNS4xOTMgMCAwIDEtNS4xOTUtNS4xOTVWNy4yOWE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NS01LjE5NUgyNS4zMmE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NiA1LjE5NXYxNS44NloiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTkuMzA1IDMzLjgxM2MuOTAyIDAgMS42NC0uNzM5IDEuNjQtMS42NDFzLS43MzgtMS42NC0xLjY0LTEuNjRjLS45MDMgMC0xLjY0LjczOC0xLjY0IDEuNjQgMCAuOTAyLjczNyAxLjY0IDEuNjQgMS42NFptMC0yLjE4OGMuMyAwIC41NDcuMjQ2LjU0Ny41NDcgMCAuMy0uMjQ3LjU0Ny0uNTQ3LjU0N2EuNTQ5LjU0OSAwIDAgMS0uNTQ3LS41NDdjMC0uMy4yNDYtLjU0Ny41NDctLjU0N1oiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMTkuMzA1IDE2Ljg2YzEuNjEzIDAgMi45NTMtMS4zMTMgMi45NTMtMi45MjYgMC0yLjk4LTIuNDg4LTUuMzA1LTIuNTctNS4zODdhLjU1NC41NTQgMCAwIDAtLjc2Ni4wMjdjLS4xMS4xMS0yLjU3IDIuNzA3LTIuNTcgNS4zNiAwIDEuNjEzIDEuMzQgMi45MjYgMi45NTMgMi45MjZabS4wMjctNy4xMWMuNjI5LjczOSAxLjgzMiAyLjM1MiAxLjgzMiA0LjE4NCAwIDEuMDM5LS44NDggMS44Ni0xLjg2IDEuODYtMS4wMzggMC0xLjg1OS0uODIxLTEuODU5LTEuODYgMC0xLjY2OCAxLjIzLTMuNDE4IDEuODg3LTQuMTg0WiIvPjwvc3ZnPg==" alt="">

						</div>

						<div class="small-benefits__info">
							Ассортимент товаров более 100 брендов и 5 000 товаров
						</div>

					</li>

					<li class="small-benefits__item">

						<div class="small-benefits__icon-wrap">

							<img class="small-benefits__icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTMxLjU0NSA0Ljk2OGgtMi40NnYtLjQ5MmMwLS44MTQtLjY2MS0xLjQ3Ni0xLjQ3NS0xLjQ3Ni0uODE0IDAtMS40NzYuNjYyLTEuNDc2IDEuNDc2di40OTJIMTEuMzc4di0uNDkyYzAtLjgxNC0uNjYyLTEuNDc2LTEuNDc2LTEuNDc2LS44MTMgMC0xLjQ3NS42NjItMS40NzUgMS40NzZ2LjQ5MmgtMi40NkExLjk3IDEuOTcgMCAwIDAgNCA2LjkzNHYyMC42NTlhMS45NyAxLjk3IDAgMCAwIDEuOTY4IDEuOTY3aDYuODg2YS40OTIuNDkyIDAgMCAwIDAtLjk4M0g1Ljk2OGEuOTg1Ljk4NSAwIDAgMS0uOTg0LS45ODRWMTAuODdoMjcuNTQ1djE2LjcyNGEuOTg1Ljk4NSAwIDAgMS0uOTg0Ljk4M2gtNS40MWEuNDkyLjQ5MiAwIDAgMCAwIC45ODRoNS40MWExLjk3IDEuOTcgMCAwIDAgMS45NjgtMS45NjdWNi45MzVhMS45NyAxLjk3IDAgMCAwLTEuOTY4LTEuOTY3Wm0tNC40MjctLjQ5MmEuNDkyLjQ5MiAwIDAgMSAuOTg0IDB2Mi40NTlhLjQ5Mi40OTIgMCAwIDEtLjk4NCAwdi0yLjQ2Wm0tMTcuNzA3IDBhLjQ5Mi40OTIgMCAwIDEgLjk4MyAwdjIuNDU5YS40OTIuNDkyIDAgMCAxLS45ODMgMHYtMi40NlptLTQuNDI3IDUuNDFWNi45MzVjMC0uNTQyLjQ0MS0uOTg0Ljk4NC0uOTg0aDIuNDU5di45ODRjMCAuODE0LjY2MiAxLjQ3NiAxLjQ3NiAxLjQ3Ni44MTMgMCAxLjQ3NS0uNjYyIDEuNDc1LTEuNDc2di0uOTg0aDE0Ljc1NnYuOTg0YzAgLjgxNC42NjIgMS40NzYgMS40NzYgMS40NzZzMS40NzYtLjY2MiAxLjQ3Ni0xLjQ3NnYtLjk4NGgyLjQ1OWMuNTQyIDAgLjk4NC40NDIuOTg0Ljk4NHYyLjk1MUg0Ljk4NFoiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMjcuMTE4IDIzLjY1OWEyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MS0yLjk1MiAyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MiAyLjk1MiAyLjk1NiAyLjk1NiAwIDAgMCAyLjQ2IDIuOTF2Mi43NDZhNC4xODYgNC4xODYgMCAwIDEtNC4xODEgNC4xODEgNC4xODYgNC4xODYgMCAwIDEtNC4xODEtNC4xOHYtMi43MzRhNC40MzMgNC40MzMgMCAwIDAgMy45MzUtNC4zOTl2LTQuNDI3YTEuOTcgMS45NyAwIDAgMC0xLjk2OC0xLjk2Ny40OTIuNDkyIDAgMCAwIDAgLjk4M2MuNTQzIDAgLjk4NC40NDIuOTg0Ljk4NHY0LjQyN2EzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0MyAzLjQ0MyAzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0My0zLjQ0M3YtNC40MjdjMC0uNTQyLjQ0MS0uOTg0Ljk4My0uOTg0YS40OTIuNDkyIDAgMSAwIDAtLjk4MyAxLjk3IDEuOTcgMCAwIDAtMS45NjcgMS45Njd2NC40MjdhNC40MzMgNC40MzMgMCAwIDAgMy45MzUgNC4zOTl2Mi43MzNhNS4xNyA1LjE3IDAgMCAwIDUuMTY1IDUuMTY1IDUuMTcgNS4xNyAwIDAgMCA1LjE2NC01LjE2NXYtMi43NDdhMi45NTYgMi45NTYgMCAwIDAgMi40Ni0yLjkxWm0tNC45MTkgMGExLjk3IDEuOTcgMCAwIDEgMS45NjgtMS45NjggMS45NyAxLjk3IDAgMCAxIDEuOTY3IDEuOTY4IDEuOTcgMS45NyAwIDAgMS0xLjQ3NiAxLjkwNXYtMS4wNTVhLjk4My45ODMgMCAxIDAtLjk4MyAwdjEuMDU1YTEuOTcgMS45NyAwIDAgMS0xLjQ3Ni0xLjkwNVoiLz48L3N2Zz4=" alt="">
							<img class="small-benefits__icon small-benefits__icon--dark" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMiIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI3LjU0NSAxLjk2OGgtMi40NnYtLjQ5MkMyNS4wODYuNjYyIDI0LjQyNSAwIDIzLjYxIDBjLS44MTQgMC0xLjQ3Ni42NjItMS40NzYgMS40NzZ2LjQ5Mkg3LjM3OHYtLjQ5MkM3LjM3OC42NjIgNi43MTYgMCA1LjkwMiAwIDUuMDkgMCA0LjQyOC42NjIgNC40MjggMS40NzZ2LjQ5MmgtMi40NkExLjk3IDEuOTcgMCAwIDAgMCAzLjkzNHYyMC42NTlhMS45NyAxLjk3IDAgMCAwIDEuOTY4IDEuOTY3aDYuODg2YS40OTIuNDkyIDAgMCAwIDAtLjk4M0gxLjk2OGEuOTg1Ljk4NSAwIDAgMS0uOTg0LS45ODRWNy44N2gyNy41NDV2MTYuNzI0YS45ODUuOTg1IDAgMCAxLS45ODQuOTgzaC01LjQxYS40OTIuNDkyIDAgMCAwIDAgLjk4NGg1LjQxYTEuOTcgMS45NyAwIDAgMCAxLjk2Ny0xLjk2N1YzLjkzNWExLjk3IDEuOTcgMCAwIDAtMS45NjctMS45NjhabS00LjQyNy0uNDkyYS40OTIuNDkyIDAgMCAxIC45ODQgMHYyLjQ1OWEuNDkyLjQ5MiAwIDAgMS0uOTg0IDB2LTIuNDZabS0xNy43MDcgMGEuNDkyLjQ5MiAwIDAgMSAuOTgzIDB2Mi40NTlhLjQ5Mi40OTIgMCAwIDEtLjk4MyAwdi0yLjQ2Wk0uOTg0IDYuODg2VjMuOTM1YzAtLjU0Mi40NDEtLjk4NC45ODQtLjk4NGgyLjQ1OXYuOTg0YzAgLjgxNC42NjIgMS40NzYgMS40NzYgMS40NzYuODEzIDAgMS40NzUtLjY2MiAxLjQ3NS0xLjQ3NnYtLjk4NGgxNC43NTZ2Ljk4NGMwIC44MTQuNjYyIDEuNDc2IDEuNDc2IDEuNDc2czEuNDc2LS42NjIgMS40NzYtMS40NzZ2LS45ODRoMi40NTljLjU0MiAwIC45ODQuNDQyLjk4NC45ODR2Mi45NTFILjk4NFoiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMjMuMTE4IDIwLjY1OWEyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MS0yLjk1MiAyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MiAyLjk1MiAyLjk1NSAyLjk1NSAwIDAgMCAyLjQ2IDIuOTF2Mi43NDZhNC4xODYgNC4xODYgMCAwIDEtNC4xODEgNC4xODEgNC4xODYgNC4xODYgMCAwIDEtNC4xODEtNC4xOHYtMi43MzRhNC40MzMgNC40MzMgMCAwIDAgMy45MzUtNC4zOTl2LTQuNDI3YTEuOTcgMS45NyAwIDAgMC0xLjk2OC0xLjk2Ny40OTIuNDkyIDAgMSAwIDAgLjk4M2MuNTQzIDAgLjk4NC40NDIuOTg0Ljk4NHY0LjQyN2EzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0MyAzLjQ0MyAzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0My0zLjQ0M3YtNC40MjdjMC0uNTQyLjQ0MS0uOTg0Ljk4NC0uOTg0YS40OTIuNDkyIDAgMSAwIDAtLjk4MyAxLjk3IDEuOTcgMCAwIDAtMS45NjggMS45Njd2NC40MjdhNC40MzMgNC40MzMgMCAwIDAgMy45MzUgNC4zOTl2Mi43MzNhNS4xNyA1LjE3IDAgMCAwIDUuMTY1IDUuMTY1IDUuMTcgNS4xNyAwIDAgMCA1LjE2NC01LjE2NXYtMi43NDdhMi45NTYgMi45NTYgMCAwIDAgMi40Ni0yLjkxWm0tNC45MTkgMGExLjk3IDEuOTcgMCAwIDEgMS45NjctMS45NjggMS45NyAxLjk3IDAgMCAxIDEuOTY4IDEuOTY4IDEuOTcgMS45NyAwIDAgMS0xLjQ3NiAxLjkwNXYtMS4wNTVhLjk4My45ODMgMCAxIDAtLjk4MyAwdjEuMDU1YTEuOTcgMS45NyAwIDAgMS0xLjQ3Ni0xLjkwNVoiLz48L3N2Zz4=" alt="">

						</div>

						<div class="small-benefits__info">
							Индивидуальная консультация врачами и помощь клиентам
						</div>

					</li>

					<li class="small-benefits__item">

						<div class="small-benefits__icon-wrap">

							<img class="small-benefits__icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTMzLjQ2IDMzLjk2aC0xLjk5N2EuNS41IDAgMCAxIDAtLjk5OGgxLjQ5OFYxNC43NDlMMTguOTggNS4xMDYgNC45OTkgMTQuNzQ5djE4LjIxM2gxLjQ5OGEuNS41IDAgMCAxIDAgLjk5OUg0LjQ5OWEuNS41IDAgMCAxLS40OTktLjVWMTQuNDg3YS41LjUgMCAwIDEgLjIxNi0uNDEybDE0LjQ4LTkuOTg3YS41LjUgMCAwIDEgLjU2OCAwbDE0LjQ4IDkuOTg3YS41LjUgMCAwIDEgLjIxNi40MTJWMzMuNDZhLjUuNSAwIDAgMS0uNS41WiIvPjxwYXRoIGZpbGw9IiMxRDFEMUQiIGQ9Ik0xNS40ODUgMjYuOTdIOC40OTRhLjUuNSAwIDAgMS0uNS0uNXYtNi45OWEuNS41IDAgMCAxIC41LS41aDYuOTlhLjUuNSAwIDAgMSAuNS41djYuOTlhLjUuNSAwIDAgMS0uNS41Wm0tNi40OTItLjk5OWg1Ljk5MlYxOS45OEg4Ljk5M3Y1Ljk5MloiLz48cGF0aCBmaWxsPSIjMUQxRDFEIiBkPSJNMTEuOTkgMjEuOTc3YS41LjUgMCAwIDEtLjUtLjVWMTkuNDhhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0yMi40NzUgMjYuOTdoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNXYtNi45OWEuNS41IDAgMCAxIC41LS41aDYuOTlhLjUuNSAwIDAgMSAuNS41djYuOTlhLjUuNSAwIDAgMS0uNS41Wm0tNi40OTEtLjk5OWg1Ljk5MlYxOS45OGgtNS45OTJ2NS45OTJaIi8+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTE4Ljk4IDIxLjk3N2EuNS41IDAgMCAxLS40OTktLjVWMTkuNDhhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0yMi40NzUgMzMuOTZoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk4aDUuOTkyVjI2Ljk3aC01Ljk5MnY1Ljk5MloiLz48cGF0aCBmaWxsPSIjMUQxRDFEIiBkPSJNMTguOTggMjguOTY3YS41LjUgMCAwIDEtLjQ5OS0uNXYtMS45OTZhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0xNS40ODUgMzMuOTZIOC40OTRhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5Mi0uOTk4aDUuOTkyVjI2Ljk3SDguOTkzdjUuOTkyWiIvPjxwYXRoIGZpbGw9IiMxRDFEMUQiIGQ9Ik0xMS45OSAyOC45NjdhLjUuNSAwIDAgMS0uNS0uNXYtMS45OTZhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41WiIvPjxwYXRoIGZpbGw9IiMwMDk4QzciIGQ9Ik0yOS40NjYgMzMuOTZoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk4aDUuOTkyVjI2Ljk3aC01Ljk5MnY1Ljk5MloiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMjUuOTcxIDI4Ljk2N2EuNS41IDAgMCAxLS41LS41di0xLjk5NmEuNS41IDAgMCAxIDEgMHYxLjk5N2EuNS41IDAgMCAxLS41LjVaIi8+PC9zdmc+" alt="">
							<img class="small-benefits__icon small-benefits__icon--dark" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI5LjQ2IDI5Ljk2aC0xLjk5N2EuNS41IDAgMCAxIDAtLjk5OGgxLjQ5OFYxMC43NDlMMTQuOTggMS4xMDYuOTk5IDEwLjc0OXYxOC4yMTNoMS40OThhLjUuNSAwIDAgMSAwIC45OTlILjQ5OWEuNS41IDAgMCAxLS40OTktLjVWMTAuNDg3YS41LjUgMCAwIDEgLjIxNi0uNDEyTDE0LjY5Ni4wODhhLjUuNSAwIDAgMSAuNTY4IDBsMTQuNDggOS45ODdhLjUuNSAwIDAgMSAuMjE2LjQxMlYyOS40NmEuNS41IDAgMCAxLS41LjVaIi8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTExLjQ4NSAyMi45N2gtNi45OWEuNS41IDAgMCAxLS41LS41di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk5aDUuOTkyVjE1Ljk4SDQuOTk0djUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik03Ljk5IDE3Ljk3N2EuNS41IDAgMCAxLS41LS41VjE1LjQ4YS41LjUgMCAwIDEgLjk5OSAwdjEuOTk3YS41LjUgMCAwIDEtLjUuNVpNMTguNDc1IDIyLjk3aC02Ljk5YS41LjUgMCAwIDEtLjUtLjV2LTYuOTlhLjUuNSAwIDAgMSAuNS0uNWg2Ljk5YS41LjUgMCAwIDEgLjUuNXY2Ljk5YS41LjUgMCAwIDEtLjUuNVptLTYuNDkxLS45OTloNS45OTJWMTUuOThoLTUuOTkydjUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNC45OCAxNy45NzdhLjUuNSAwIDAgMS0uNS0uNVYxNS40OGEuNS41IDAgMCAxIDEgMHYxLjk5N2EuNS41IDAgMCAxLS41LjVaTTE4LjQ3NSAyOS45NmgtNi45OWEuNS41IDAgMCAxLS41LS40OTl2LTYuOTlhLjUuNSAwIDAgMSAuNS0uNWg2Ljk5YS41LjUgMCAwIDEgLjUuNXY2Ljk5YS41LjUgMCAwIDEtLjUuNVptLTYuNDkxLS45OThoNS45OTJWMjIuOTdoLTUuOTkydjUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNC45OCAyNC45NjdhLjUuNSAwIDAgMS0uNS0uNXYtMS45OTZhLjUuNSAwIDAgMSAxIDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0xMS40ODUgMjkuOTZoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk4aDUuOTkyVjIyLjk3SDQuOTk0djUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik03Ljk5IDI0Ljk2N2EuNS41IDAgMCAxLS41LS41di0xLjk5NmEuNS41IDAgMCAxIC45OTkgMHYxLjk5N2EuNS41IDAgMCAxLS41LjVaIi8+PHBhdGggZmlsbD0iIzAwOThDNyIgZD0iTTI1LjQ2NiAyOS45NmgtNi45OWEuNS41IDAgMCAxLS41LS40OTl2LTYuOTlhLjUuNSAwIDAgMSAuNS0uNWg2Ljk5YS41LjUgMCAwIDEgLjUuNXY2Ljk5YS41LjUgMCAwIDEtLjUuNVptLTYuNDkxLS45OThoNS45OTJWMjIuOTdoLTUuOTkydjUuOTkyWiIvPjxwYXRoIGZpbGw9IiMwMDk4QzciIGQ9Ik0yMS45NzEgMjQuOTY3YS41LjUgMCAwIDEtLjUtLjV2LTEuOTk2YS41LjUgMCAwIDEgMSAwdjEuOTk3YS41LjUgMCAwIDEtLjUuNVoiLz48L3N2Zz4=" alt="">

						</div>

						<div class="small-benefits__info">
							Доставляем наши товары в любую точку мира
						</div>

					</li>

					<li class="small-benefits__item">

						<div class="small-benefits__icon-wrap">

							<img class="small-benefits__icon" src="/wp-content/themes/sugarpulse/assets/img/icons/ben4.svg" alt="">
							<img class="small-benefits__icon small-benefits__icon--dark" src="/wp-content/themes/sugarpulse/assets/img/icons/ben-dark3.svg" alt="">

						</div>

						<div class="small-benefits__info">
							Склад с соответствующим нормам хранения товаров
						</div>

					</li>

				</ul>

			</div>

		</div>

		<?= woocommerce_output_related_products(); ?>

		<?= woocommerce_upsell_display(); ?>



	</div>

</main>

<?php do_action('woocommerce_after_single_product'); ?>