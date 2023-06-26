<?php

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package sugarpulse
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function sugarpulse_woocommerce_setup()
{
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width' => 300,
			'product_grid' => array(
				'default_rows' => 3,
				'min_rows' => 1,
				'default_columns' => 4,
				'min_columns' => 1,
				'max_columns' => 6,
			),
		)
	);
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'sugarpulse_woocommerce_setup');

add_filter('woocommerce_product_tabs', 'sugarpulse_new_product_tabs');
function sugarpulse_new_product_tabs($tabs)
{
	global $product;
	$id = $product->get_id();
	$files = carbon_get_post_meta($id, 'product_files');

	if (!empty($files)) {
		// Adds the new tab
		$tabs['document_tab'] = array(
			'title'     => __('Документы', 'sugarpulse'),
			'priority'  => 30,
			'callback'  => 'sugarpulse_document_product_tab'
		);
	}

	// $tabs['delivery'] = array(
	// 	'title'     => __('Документы', 'sugarpulse'),
	// 	'priority'  => 35,
	// 	'callback'  => 'sugarpulse_delivery_product_tab'
	// );

	return $tabs;
}

function sugarpulse_document_product_tab()
{

	global $product;
	$id = $product->get_id();
	$files = carbon_get_post_meta($id, 'product_files');

	if (!empty($files)) : ?>

		<div class="tabs-block__col">
			<ul class="tabs-block__file-list">

				<?php foreach ($files as $file) : ?>
					<li class="tabs-block__file-item">
						<div class="tabs-block__file-item">
							<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzAwOThDNyIgZmlsbC1vcGFjaXR5PSIuMSIgZD0iTTQ2Ljg3NSAxNS42MjV2MzEuMjVIMTIuNXYtNC44NDRsMjAuMDYzLjEyNWE1LjIwMSA1LjIwMSAwIDAgMCA1LjIzNC01LjE3MmwuMDYyLTEwLjE3MmE1LjIwMiA1LjIwMiAwIDAgMC01LjE3Mi01LjIzNEwxMi41IDIxLjQ1M1YzLjEyNWgyMS44NzVsMTIuNSAxMi41WiIvPjxwYXRoIGZpbGw9IiMwMDk4QzciIGQ9Ik00Ni44NzUgMTUuNjI1aC0xMi41di0xMi41bDEyLjUgMTIuNVpNMzcuODYgMjYuODEzbC0uMDYzIDEwLjE3MWE1LjIwMSA1LjIwMSAwIDAgMS01LjIzNCA1LjE3MkwxMi41IDQyLjAzMWwtMS4yNS0uMDE1YTUuMTk4IDUuMTk4IDAgMCAxLTUuMTcyLTUuMjE5bC4wNjMtMTAuMTg3YTUuMjA4IDUuMjA4IDAgMCAxIDUuMjM0LTUuMTU3SDEyLjVsMjAuMTg4LjEyNWE1LjIwMSA1LjIwMSAwIDAgMSA1LjE3MSA1LjIzNVoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMjEuMTE0IDM1Ljk1OGgtMS43MmwtLjY4NS0xLjc3OWgtMy4xMjhsLS42NDcgMS43NzloLTEuNjc2bDMuMDUtNy44M2gxLjY3MmwzLjEzNCA3LjgzWm0tMi45MS0zLjA5OS0xLjA3OS0yLjkwNS0xLjA1OCAyLjkwNWgyLjEzNlpNMjMuMTQgMzUuOTU4bC0yLjgtNy44M2gxLjcxNWwxLjk4MSA1Ljc5NCAxLjkxNy01Ljc5NGgxLjY3N2wtMi44MDMgNy44M2gtMS42ODhaTTI4LjM4OCAzNS45NTh2LTcuODNoMS41OHY3LjgzaC0xLjU4WiIvPjwvc3ZnPg==" alt="001-avi extension.svg" class="tabs-block__file-icon">

							<div class="tabs-block__file-info-wrap">
								<div class="tabs-block__file-name"><?= $file['title']; ?></div>
								<div class="tabs-block__file-size"><?= filesize(get_attached_file($file['file'])); ?></div>
							</div>
						</div>
					</li>
				<?php endforeach; ?>

			</ul>
		</div>

<?php endif;
}

require get_template_directory() . '/inc/woocommerce/hooks_content_product.php';
require get_template_directory() . '/inc/woocommerce/hooks_taxonomy-product-cat.php';
require get_template_directory() . '/inc/woocommerce/hooks_content_single_product.php';
