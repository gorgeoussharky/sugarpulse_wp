<?php

/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

global $product;

if (!wc_review_ratings_enabled()) {
	return;
}

$rating = round($product->get_average_rating());
$rating_count = $product->get_rating_count();

?>
<div class="product-card__rating-wrap">
	<?php if ($rating) : ?>
		<ul class="product-card__rating-list">
			<?php for ($i = 1; $i < $rating; $i++) : ?>
				<li class="product-card__ratig-item">
					<img class="product-card__icon" src="<?= THEME_PATH; ?>/assets/img/icons/rate.svg" alt="<?= $i; ?>">
				</li>
			<?php endfor; ?>
		</ul>

		<a href="" class="product-card__reviews-count">
			<span><?= $rating_count; ?></span> <?php _e('отзыв(ов)', 'sugarpulse'); ?>
		</a>
	<?php endif; ?>
</div>
<?php
