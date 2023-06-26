<?php

/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
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

global $product;

$categories = $product->get_category_ids();
$tags = $product->get_tag_ids();
$in_stock = $product->get_stock_quantity() > 0;
$modifier = $in_stock ? 'product-single__status--in-stock' : 'product-single__status--not-in-stock';
?>

<?php do_action('woocommerce_product_meta_start'); ?>
<div class="product-single__status <?=$modifier;?>">
	<?= $in_stock ? _e('В наличии', 'sugarpulse') : _e('Нет в наличии', 'sugarpulse'); ?>
</div>

<?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) : ?>

	<div class="product-single__article">
		<?php esc_html_e('SKU:', 'woocommerce'); ?>
		<?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'woocommerce'); ?>
	</div>

<?php endif; ?>

<?php if (count($categories)) : ?>
	<div class="product-single__title"><?php _e('Категории', 'sugarpulse'); ?></div>

	<ul class="product-single__categories-list">

		<?php foreach ($categories as $category) :
			$term = get_term_by('id', $category, 'product_cat'); ?>
			<li class="product-single__categories-item">
				<a href="<?= get_term_link($category); ?>" class="product-single__category-name"><?= $term->name; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<?php if (count($tags)) : ?>
	<div class="product-single__title"><?php _e('Теги', 'sugarpulse'); ?></div>

	<ul class="product-single__main-tags-list">

		<?php foreach ($tags as $tag) :
			$term = get_term_by('id', $category, 'product_tag'); ?>
			<li class="product-single__categories-item">
				<div class="product-single__category-name"><?= $term->name; ?></div>
			</li>
		<?php endforeach; ?>

	</ul>
<?php endif; ?>

<?php do_action('woocommerce_product_meta_end'); ?>