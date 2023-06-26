<?php

/*
Template Name: brands-single
Template Post Type: post, page, brands

@package sugarpulse
*/

get_header();
?>

<main class="brands-single-page">

    <div class="container"><?php woocommerce_breadcrumb(); ?></div>

    <div class="brands-single-page__wrap">

        <div class="container">

            <div class="brands-single-page__content">

                <h1 class="brands-single-page__heading"><?= the_title(); ?></h1>

                <div class="brands-single-page__header">

                    <div class="brands-single-page__info">
                        <?php the_content(); ?>
                    </div>

                    <div class="brands-single-page__logo-wrap">
                        <picture class="brands-single-page__logo">
                            <source srcset="<?php the_post_thumbnail_url('medium'); ?>.webp" type="image/webp">
                            <img loading="lazy" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?= the_title(); ?>">
                        </picture>
                    </div>

                </div>

                <div class="brands-single-page__catalog-type catalog-type">

                    <div class="catalog-type__main-content">

                        <?php $query = new WP_Query(array('post_type' => 'product'));?>

                        <?= get_template_part('template-parts/content', 'catalog', array('query' => $query)); ?>

                    </div>

                </div>

            </div>

        </div>

        <div class="scroll-end"></div>

    </div>

</main>

<?php get_footer();
