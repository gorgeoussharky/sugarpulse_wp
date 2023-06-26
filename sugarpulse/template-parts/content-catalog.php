<?php
if ($args['query']) {
    $wp_query = $args['query'];
    $show_filters = isset($args['show_filters']) ? $args['show_filters'] : false;

    $wc_loop_args = array(
        'total' => $GLOBALS['wp_query']->found_posts,
        'total_pages' => $GLOBALS['wp_query']->max_num_pages,
        'per_page' => $GLOBALS['wp_query']->get('posts_per_page'),
        'current_page' => max(1, $GLOBALS['wp_query']->get('paged', 1)),
    );
    wc_setup_loop($wc_loop_args);
}

$item_modifier = 'product-card--grid';

if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'grid':
            $item_modifier = 'product-card--grid';
            break;
        case 'list':
            $item_modifier = 'product-card--list';
            break;
        case 'table':
            $item_modifier = 'product-card--table';
            break;
        default:
            $item_modifier = 'product-card--grid';
            break;
    }
}

if (woocommerce_product_loop()) { ?>

    <?php if ($show_filters) : ?>
        <form class="catalog-type__filters-form filters-form" data-catalog-filter>

            <div class="filters-form__content">

                <div class="catalog-type__filter-name">
                    <?php _e('Фильтр:', 'sugarpulse'); ?>
                </div>

                <?php
                $product_attributes = wc_get_attribute_taxonomies();

                foreach ($product_attributes as $attribute) :
                    $terms = get_terms(array('taxonomy' => 'pa_' . $attribute->attribute_name, 'hide_empty' => false));
                ?>
                    <div class="catalog-type__select-dropdown select-dropdown">

                        <div class="select-dropdown__wrap">

                            <input type="hidden" name="<?= 'pa_' . $attribute->attribute_name; ?>" value="">

                            <button class="select-dropdown__current" type="button" data-current="Услуга 1">
                                <span>
                                    <?= $attribute->attribute_label ?>
                                </span>
                            </button>

                            <ul class="select-dropdown__list">
                                <?php foreach ($terms as $term) : ?>
                                    <li class="select-dropdown__item">
                                        <div class="select-dropdown__link" data-value="<?= $term->term_id; ?>">
                                            <?= $term->name; ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        </div>

                    </div>
                <?php endforeach; ?>

                <div class="filters-form__group filters-form__group--checkbox">

                    <input id="instock" name="instock" type="checkbox" class="filters-form__control">
                    <label for="instock" class="filters-form__label">
                        В наличии
                        <span class="filters-form__in-stock">(46)</span>
                    </label>

                </div>

            </div>

        </form>
    <?php endif; ?>

    <div class="catalog-type__content-header">

        <?php
        /**
         * Hook: woocommerce_before_shop_loop.
         *
         * @hooked woocommerce_output_all_notices - 10
         * @hooked woocommerce_result_count - 20
         * @hooked woocommerce_catalog_ordering - 30
         */
        do_action('woocommerce_before_shop_loop');
        ?>

        <div class="catalog-type__header-right">


            <?php if (is_page_template('tpl-favorite.php')) : ?>
                <button class="catalog-type__clear-list">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.00417 12.9961C1.04481 13.0367 1.09306 13.069 1.14617 13.091C1.19928 13.113 1.25621 13.1244 1.31371 13.1244C1.3712 13.1244 1.42813 13.113 1.48124 13.091C1.53435 13.069 1.58261 13.0367 1.62324 12.9961L7.00011 7.61918L12.3792 12.9961C12.4613 13.0781 12.5726 13.1243 12.6887 13.1243C12.8048 13.1243 12.9161 13.0781 12.9982 12.9961C13.0803 12.914 13.1264 12.8026 13.1264 12.6865C13.1264 12.5704 13.0803 12.4591 12.9982 12.377L7.61918 7.00012L12.9961 1.62105C13.0781 1.53896 13.1243 1.42762 13.1243 1.31152C13.1243 1.19543 13.0781 1.08408 12.9961 1.00199C12.914 0.919899 12.8026 0.873779 12.6865 0.873779C12.5704 0.873779 12.4591 0.919899 12.377 1.00199L7.00011 6.38105L1.62105 1.00418C1.53736 0.932505 1.4297 0.895052 1.31959 0.899305C1.20948 0.903558 1.10503 0.949203 1.02712 1.02712C0.9492 1.10504 0.903554 1.20948 0.899301 1.31959C0.895048 1.4297 0.932501 1.53736 1.00417 1.62105L6.38105 7.00012L1.00417 12.3792C0.92269 12.4612 0.876953 12.572 0.876953 12.6876C0.876953 12.8032 0.92269 12.9141 1.00417 12.9961Z" fill="#1D1D1D" />
                    </svg>

                    Очистить список
                </button>
            <?php endif; ?>

            <form class="catalog-type__display-btns" data-catalog-filter>
                <input type="hidden" name="view" value="grid">

                <button class="catalog-type__toggle-display <?= (!isset($_GET['view'])) || (isset($_GET['view']) && $_GET['view']  === 'grid') ? 'catalog-type__toggle-display--active' : null; ?>" data-value="grid">
                    <img src="/wp-content/themes/sugarpulse/assets/img/icons/grid.svg" alt="">
                </button>

                <button class="catalog-type__toggle-display <?= (isset($_GET['view']) && $_GET['view'] === 'list') ? 'catalog-type__toggle-display--active' : null; ?>" data-value="list">
                    <img src="/wp-content/themes/sugarpulse/assets/img/icons/list.svg" alt="">
                </button>

                <button class="catalog-type__toggle-display <?= (isset($_GET['view']) && $_GET['view'] === 'table') ? 'catalog-type__toggle-display--active' : null; ?>" data-value="table">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSIxMiIgZmlsbD0ibm9uZSI+PGcgZmlsbD0iIzAwOThDNyIgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBkPSJNNC4xNjcgMy42MzNhLjMuMyAwIDAgMSAuMy0uM2gzLjA2NmEuMy4zIDAgMCAxIC4zLjN2MS43MzRhLjMuMyAwIDAgMS0uMy4zSDQuNDY3YS4zLjMgMCAwIDEtLjMtLjNWMy42MzNaTTguNSAzLjYzM2EuMy4zIDAgMCAxIC4zLS4zaDIuOWEuMy4zIDAgMCAxIC4zLjN2MS43MzRhLjMuMyAwIDAgMS0uMy4zSDguOGEuMy4zIDAgMCAxLS4zLS4zVjMuNjMzWk00LjE2NyA5LjYzM2EuMy4zIDAgMCAxIC4zLS4zaDMuMDY2YS4zLjMgMCAwIDEgLjMuM1YxMkg0LjE2N1Y5LjYzM1pNMCAzLjYzM2EuMy4zIDAgMCAxIC4zLS4zaDIuOWEuMy4zIDAgMCAxIC4zLjN2MS43MzRhLjMuMyAwIDAgMS0uMy4zSC4zYS4zLjMgMCAwIDEtLjMtLjNWMy42MzNaTTQuMTY3IDYuNjMzYS4zLjMgMCAwIDEgLjMtLjNoMy4wNjZhLjMuMyAwIDAgMSAuMy4zdjEuNzM0YS4zLjMgMCAwIDEtLjMuM0g0LjQ2N2EuMy4zIDAgMCAxLS4zLS4zVjYuNjMzWk0xMS43IDIuNjY3YS4zLjMgMCAwIDAgLjMtLjN2LS43QzEyIC43NDcgMTEuMjU0IDAgMTAuMzMzIDBIMS42NjdDLjc0NyAwIDAgLjc0NyAwIDEuNjY3di43YS4zLjMgMCAwIDAgLjMuM2gxMS40Wk0zLjUgOS42MzNhLjMuMyAwIDAgMC0uMy0uM0guM2EuMy4zIDAgMCAwLS4zLjN2LjdDMCAxMS4yNTMuNzQ3IDEyIDEuNjY3IDEySDMuNVY5LjYzM1pNMCA2LjYzM2EuMy4zIDAgMCAxIC4zLS4zaDIuOWEuMy4zIDAgMCAxIC4zLjN2MS43MzRhLjMuMyAwIDAgMS0uMy4zSC4zYS4zLjMgMCAwIDEtLjMtLjNWNi42MzNaTTguOCA5LjMzM2EuMy4zIDAgMCAwLS4zLjNWMTJoMS44MzNjLjkyIDAgMS42NjYtLjc0NyAxLjY2Ny0xLjY2N3YtLjdhLjMuMyAwIDAgMC0uMy0uM0g4LjhaTTguNSA2LjYzM2EuMy4zIDAgMCAxIC4zLS4zaDIuOWEuMy4zIDAgMCAxIC4zLjN2MS43MzRhLjMuMyAwIDAgMS0uMy4zSDguOGEuMy4zIDAgMCAxLS4zLS4zVjYuNjMzWiIvPjwvZz48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDBoMTJ2MTJIMHoiLz48L2NsaXBQYXRoPjwvZGVmcz48L3N2Zz4=" alt="">
                </button>

            </form>


        </div>

    </div>

    <?php

    woocommerce_product_loop_start();

    if (wc_get_loop_prop('total')) {
        while (have_posts()) {
            the_post(); ?>

            <li class="catalog-type__item">
                <div class="products-slider__product-card product-card <?= $item_modifier; ?>">

                    <?php

                    /**
                     * Hook: woocommerce_shop_loop.
                     */
                    do_action('woocommerce_shop_loop');

                    wc_get_template_part('content', 'product'); ?>

                </div>
            </li>

<?php
        }
    }

    woocommerce_product_loop_end();

    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action('woocommerce_after_shop_loop');
} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action('woocommerce_no_products_found');
} ?>