<?php

/*
Template Name: FAQ
*/

$faq_block = carbon_get_post_meta(get_the_ID(), 'faq_block');

get_header();
?>

<main class="faq-page">
    <div class="faq-page__wrap">

        <div class="container">

            <div class="faq-page__about-banner about-banner">

                <div class="about-banner__wrap">

                    <div class="about-banner__content">

                        <h1 class="about-banner__heading">
                            <?php _e('База популярных <b>вопросов-ответов</b>', 'sugarpulse'); ?>
                        </h1>

                        <div class="about-banner__text">
                            <?php _e('Здесь вы можете изучить уже имеющуюся базу вопросов-ответов от других людей.
                            Если у вас есть вопрос, которого нет в нашей базе часто задаваемых вопросов, <a href="#form">задайте вопрос</a> лучшим специалистам.', 'sugarpulse'); ?>
                        </div>

                    </div>

                    <div class="about-banner__img">
                        <img src="<?php echo THEME_PATH; ?>/assets/img/faq-banner.svg" alt="">
                    </div>

                </div>

            </div>

            <div class="faq-page__faq-block faq-block">

                <div class="faq-block__content">


                    <?php foreach ($faq_block as $item) : ?>
                        <div class="faq-block__block">
                            <h2 class="faq-block__title"><?= $item['faq_block_title']; ?></h2>

                            <ul class="faq-block__list">

                                <?php foreach ($item['faq_block_list'] as $subitem) : ?>
                                    <li class="faq-block__item">

                                        <div class="faq-block__body">

                                            <button class="faq-block__toggle">
                                                <span><?= $subitem['faq_block_list_title']; ?></span>
                                            </button>

                                            <div class="faq-block__text-content text-content">
                                                <?= $subitem['faq_block_list_text']; ?>
                                            </div>

                                            <div class="faq-block__arrow">

                                            </div>

                                        </div>

                                    </li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>

            <div class="faq-page__form-banner form-banner" id="form">

                <div class="form-banner__wrap">

                    <form action="" class="form-banner__content-two">

                        <div class="form-banner__title">
                            <?php _e('У вас возникают вопросы?
                            <span>Оставьте заявку!</span>', 'sugarpulse'); ?>
                        </div>

                        <div class="form-banner__small-wrap">

                            <div class="form-banner__group">

                                <label for="" class="form-banner__label sr-only">
                                    <?php _e('Ваше Имя*', 'sugarpulse'); ?>
                                </label>

                                <input class="form-banner__control" placeholder="<?php _e('Ваше Имя*', 'sugarpulse'); ?>">

                            </div>

                            <div class="form-banner__group">

                                <label for="" class="form-banner__label sr-only">
                                    <?php _e('Ваш Email или телефон*', 'sugarpulse'); ?>
                                </label>

                                <input class="form-banner__control" placeholder="<?php _e('Ваш Email или телефон*', 'sugarpulse'); ?>">

                            </div>

                            <div class="form-banner__group form-banner__group--textarea">

                                <label for="" class="form-banner__label sr-only"></label>

                                <textarea name="" id="" cols="30" rows="1" class="form-banner__textarea" placeholder="<?php _e('Ваш комментарий', 'sugarpulse'); ?>"></textarea>

                            </div>

                        </div>

                        <div class="form-banner__footer">

                            <button class="form-banner__btn">
                                <?php _e('Отправить заявку', 'sugarpulse'); ?>
                            </button>

                            <div class="form-banner__group form-banner__group--checkbox">
                                <input id="policy1" type="checkbox" class="form-banner__control">

                                <label for="policy1" class="form-banner__label">
                                    <?php _e('Нажимая на “Отправить заявку” я соглашаюсь на обработку
                                    <a href="/policy.html">персональных данных</a>', 'sugarpulse'); ?>
                                </label>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div class="scroll-end"></div>

    </div>

</main>

<?php get_footer();
