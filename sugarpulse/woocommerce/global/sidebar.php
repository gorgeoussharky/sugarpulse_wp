<?php

/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
} ?>

<div class="catalog-type__drop-list drop-list">
	<ul class="drop-list__list">
		<?php

		$taxonomy = 'product_cat';

		if (is_post_type_archive('post')) {
			$taxonomy = 'category';
		}

		$args = array(
			'taxonomy' => $taxonomy,
			'hide_empty' => false,
			'parent' => 0
		);

		$cats = get_terms($args);

		if (!empty($cats)) : ?>

			<?php foreach ($cats as $cat) : ?>

				<li class="drop-list__item">
					<button class="drop-list__toggle">
						<?= $cat->name; ?>
					</button>

					<?php
					$args = array(
						'taxonomy' => $taxonomy,
						'hide_empty' => false,
						'parent' => $cat->term_id
					);
					$subcats = get_terms($args); ?>

					<ul class="drop-list__sublist">
						<?php foreach ($subcats as $subcat) : ?>

							<li class="drop-list__subitem">
								<a href="<?= get_term_link($subcat->term_id, $taxonomy);?>" class="drop-list__sublink">
									<?= $subcat->name; ?>
								</a>
							</li>

						<?php endforeach; ?>
					</ul>
				</li>

		<?php endforeach;
		endif; ?>
	</ul>
</div>

<?php

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */