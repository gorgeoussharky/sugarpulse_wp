<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sugarpulse
 */

get_header();
?>

<main class="error-page">

    <div class="error-page__wrap">

        <div class="container">

            <div class="error-page__content">

                <div class="error-page__header">

                    <div class="error-page__title">
                        <?php _e('ошибка', 'sugarpulse'); ?>

                        <span>404</span>
                    </div>

                    <img class="error-page__img" src="<?php echo THEME_PATH; ?>/assets/img/404.svg" alt="error-image">

                </div>

                <div class="error-page__text-wrap">

                    <div class="error-page__info">
                        <b><?php _e('Похоже, мы не можем найти нужную вам страницу', 'sugarpulse'); ?></b>
                    </div>

                    <div class="error-page__info">
                        <?php _e('Возможно, вы воспользовались недействительной ссылкой или страница
                        была удалена.', 'sugarpulse'); ?>
                    </div>

                    <div class="error-page__info">
                        <?php _e('Пока мы возвращаем ее на место, вы можете: перейти на', 'sugarpulse'); ?>
                        <a href="<?= site_url(); ?>"> <?php _e('главную', 'sugarpulse'); ?></a>
                        <?php _e('или выбрать товар в', 'sugarpulse'); ?>
                        <a href="<?= get_permalink(wc_get_page_id('shop')); ?>"> <?php _e('Каталоге', 'sugarpulse'); ?></a>
                    </div>

                </div>

            </div>

            <div class="catalog__catalog-type catalog-type">

                <div class="catalog-type__main-content">
                    <section class="catalog-type__products-tabs products-tabs">
                        <?php get_template_part('template-parts/content', 'featured-products'); ?>
                    </section>
                </div>

            </div>

        </div>


        <div class="scroll-end"></div>

    </div>

</main>


<?php get_footer();
