<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop'); ?>

<main class="categories-page">

    <div class="categories-page__wrap">
        <div class="container">

            <h1 class="categories-page__heading">
                <?php the_archive_title(); ?>
            </h1>

            <?php

            $args = array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'parent' => 0
            );

            $product_cats = get_terms($args);

            if (!empty($product_cats)): ?>

                <ul class="categories-page__list">

                    <?php foreach ($product_cats as $cat):
                        $args = array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            'parent' => $cat->term_id
                        );
                        $subcats = get_terms($args);
                        ?>

                        <li class="categories-page__categories-card categories-card">

                            <div class="categories-card__body">

                                <h2 class="categories-card__title">
                                    <?= $cat->name; ?>
                                </h2>

                                <div class="categories-card__quantity">
                                    <span>
                                        <?= count($subcats); ?>
                                    </span>
                                    <?php _e('разделов', 'sugarpulse'); ?>
                                </div>

                                <?php if (count($subcats)): ?>
                                    <ul class="categories-card__list">
                                        <?php foreach ($subcats as $subcat): ?>
                                            <li class="categories-card__item">
                                                <a href="<?= get_term_link($subcat->term_id, 'product_cat'); ?>"
                                                    class="categories-card__link"><?= $subcat->name; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <a href="<?= get_term_link($cat->term_id, 'product_cat'); ?>"
                                    class="categories-card__main-link">
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

            <?php endif; ?>

            </ul>

        </div>
    </div>
</main>

<?php get_footer();