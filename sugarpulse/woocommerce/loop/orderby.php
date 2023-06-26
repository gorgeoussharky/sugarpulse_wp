<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

?>
<form class="catalog-type__select-dropdown select-dropdown select-dropdown--filter" data-catalog-filter>
	<div class="select-dropdown__wrap">

		<button class="select-dropdown__current" type="button" data-current="Услуга 1">
			<span>
				По умолчанию
			</span>
		</button>

		<ul class="select-dropdown__list">
			<?php foreach ($catalog_orderby_options as $id => $name): ?>
				<li class="select-dropdown__item">
					<div class="select-dropdown__link" data-value="<?php echo esc_attr($id); ?>">
						<?php echo esc_html($name); ?>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
		<input type="hidden" name="paged" value="1" />
		<input type="hidden" name="orderby" value="" />
		<?php wc_query_string_form_fields(null, array('orderby', 'submit', 'paged', 'product-page')); ?>
	</div>
</form>