<?php

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail_custom', 10);

function woocommerce_template_loop_product_thumbnail_custom()
{

	global $product;

	$img = $product->get_image_id() ? wp_get_attachment_image_url($product->get_image_id(), 'thumbnail') : wc_placeholder_img_src();
?>

	<picture class="product-card__thumbnail">
		<source srcset="<?= $img ?>.webp" type="image/webp">
		<img loading="lazy" src="<?= $img ?>" alt="<?= $product->get_title(); ?>">
	</picture>

<?php
}

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title_custom', 10);

function woocommerce_template_loop_product_title_custom()
{
	global $product;

?>

	<a href="<?= $product->get_permalink(); ?>" class="product-card__name">
		<?= $product->get_title(); ?>
	</a>

<?php
}

add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_excerpt', 20);

function woocommerce_template_loop_product_excerpt()
{
	global $product;
?>

	<div class="product-card__excerpt">
		<?php get_the_excerpt($product->get_id()); ?>
	</div>

<?php
}


add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_stock_status', 30);

function woocommerce_template_loop_stock_status()
{
	global $product;

	$in_stock = $product->get_stock_quantity() > 0;
	$modifier = $in_stock ? 'product-card__status--in-stock' : 'product-card__status--not-in-stock';
?>

	<div class="product-card__status-wrap">
		<div class="product-card__article">
			<?php esc_html_e('SKU:', 'woocommerce'); ?>
			<span> <?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'woocommerce'); ?></span>
		</div>
		<div class="product-card__status <?= $modifier; ?>">
			<?= $in_stock ? _e('В наличии', 'sugarpulse') : _e('Нет в наличии', 'sugarpulse'); ?>
		</div>
	</div>

<?php
}

add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_favorite_btn', 5);

function woocommerce_template_loop_favorite_btn()
{
	global $product; ?>

	<button class="product-card__like-btn like-btn" data-id="<?= $product->get_id(); ?>">
		<svg width="18" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path stroke="#0098C7" d="M8 15.1099C7.77222 15.1099 7.55261 15.0273 7.38147 14.8774C6.73511 14.3123 6.11194 13.7811 5.56213 13.3126L5.55933 13.3102C3.94739 11.9365 2.55542 10.7502 1.58691 9.58167C0.504272 8.27527 0 7.03662 0 5.68347C0 4.36877 0.450806 3.15588 1.26929 2.26807C2.09753 1.36975 3.23401 0.875 4.46973 0.875C5.39331 0.875 6.23914 1.16699 6.98364 1.7428C7.35938 2.03345 7.69995 2.38916 8 2.80408C8.30017 2.38916 8.64062 2.03345 9.01648 1.7428C9.76099 1.16699 10.6068 0.875 11.5304 0.875C12.766 0.875 13.9026 1.36975 14.7308 2.26807C15.5493 3.15588 16 4.36877 16 5.68347C16 7.03662 15.4958 8.27527 14.4132 9.58154C13.4447 10.7502 12.0529 11.9364 10.4412 13.3099C9.89038 13.7792 9.26624 14.3112 8.61841 14.8777C8.44739 15.0273 8.22766 15.1099 8 15.1099Z" fill="#fff"></path>
		</svg>
		<span>Добавить в избранное</span>
	</button>

<?php
}
