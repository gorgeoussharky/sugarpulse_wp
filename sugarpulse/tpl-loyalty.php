<?php

/*
Template Name: Программа лояльности
*/

get_header();
?>

<main class="loyalty-page">
    <div class="loyalty-page__wrap">

        <div class="container">

            <div class="loyalty-page__loyalty-banner loyalty-banner">

                <div class="loyalty-banner__content">

                    <div class="loyalty-banner__text-wrap">

                        <h1 class="loyalty-banner__title">
                            <?php the_title(); ?>
                        </h1>

                        <div class="loyalty-banner__text">
                            <?php _e('При полной регистрации в приложении доступно накопление баллов, которыми потом можно расплачиваться'); ?>
                        </div>

                        <?php if (is_user_logged_in()) : ?>
                            <a href="<?= get_permalink(wc_get_page_id('myaccount')) ?>?action=register" class="loyalty-banner__btn">
                                <?php _e('Зарегистрироваться', 'sugarpulse'); ?>
                            </a>
                        <?php endif; ?>

                    </div>

                    <div class="loyalty-banner__img-wrap">
                        <img src="<?= THEME_PATH; ?>/assets/img/loyal-banner.svg" alt="">
                    </div>
                </div>

            </div>

            <div class="loyalty-page__small-list small-list">

                <ul class="small-list__list">

                    <li class="small-list__item">
                        <div class="small-list__desc">
                            <?php _e('При полной регистрации в приложении доступно накопление баллов', 'sugarpulse'); ?>
                        </div>
                        <div class="small-list__meta">
                            <?php _e('Полная регистрация = 500 баллов', 'sugarpulse'); ?>
                        </div>
                    </li>

                    <li class="small-list__item">
                        <div class="small-list__desc">
                            <?php _e('За каждую покупку начисляется 2% от суммы покупки, что позволяет копить баллы и расплачиваться ими', 'sugarpulse'); ?>
                        </div>
                        <div class="small-list__meta">
                            <?php _e('1 балл = 1 рубль', 'sugarpulse'); ?>
                        </div>
                    </li>

                </ul>

            </div>

        </div>

    </div>
</main>

<?php get_footer();
