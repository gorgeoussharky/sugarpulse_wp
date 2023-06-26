<div class="products-tabs__wrap">

    <div class="container">

        <div class="products-tabs__header">

            <div class="products-tabs__title">
                <?php _e('Популярные товары', 'sugarpulse'); ?>
            </div>

            <?php

            $args = array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'parent' => 0
            );

            $product_cats = get_terms($args);

            if (!empty($product_cats)) : ?>

                <ul class="products-tabs__nav-list">
                    <?php foreach ($product_cats as $cat) : ?>
                        <li class="products-tabs__nav-item">
                            <a href="<?= get_term_link($cat->term_id, 'product_cat'); ?>" class="products-tabs__nav-link">
                                <?= $cat->name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

            <?php endif; ?>
        </div>

        <div class="products-tabs__content">

            <?php
            global $product;

            $args = array(
                'limit' => 10,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $query = new WC_Product_Query($args);
            $products = $query->get_products();
            ?>

            <ul class="products-tabs__list products-tabs__list--five">
                <?php foreach ($products as $product) : ?>
                    <li class="products-tab__item">
                        <div class="products-slider__product-card product-card">
                            <?= wc_get_template_part('content', 'product'); ?>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>

        </div>

    </div>

</div>