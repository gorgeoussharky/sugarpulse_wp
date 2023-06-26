<?php
$args = array(
    'post_type' => 'review',
    'posts_per_page' => -1,
    'post_parent' => 0
);
$query = new WP_Query($args); ?>

<?php if ($query->have_posts()) : ?>


    <div class="reviews-slider-wrap__subtitle">
        <?php _e('Нам доверяют много лет', 'sugarpulse'); ?>
    </div>
    <h2 class="reviews-slider-wrap__title">
        <?php _e('Отзывы покупателей', 'sugarpulse'); ?>
    </h2>

    <div class="reviews-slider-wrap__wrap">
        <div class="reviews-slider-wrap__reviews-slider reviews-slider">
            <div class="reviews-slider__swiper-wrapper swiper-wrapper">
                <?php while ($query->have_posts()) :
                    $query->the_post(); ?>
                    <div class="reviews-slider__swiper-slide swiper-slide">

                        <div class="reviews-slider__review-card review-card">

                            <div class="review-card__body">

                                <div class="review-card__dec-quote">
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 7.75H3.75L5.25 4.75V0.25H0.75V4.75H3L1.5 7.75ZM7.5 7.75H9.75L11.25 4.75V0.25H6.75V4.75H9L7.5 7.75Z" fill="#0098C7" />
                                    </svg>
                                </div>

                                <div class="review-card__name">
                                    <?php the_title(); ?>
                                </div>

                                <ul class="review-card__rating-list">
                                    <li class="review-card__rating-item">
                                        <img class="review-card__icon" src="<?= THEME_PATH; ?>/assets/img/icons/rate.svg" alt="">
                                    </li>
                                </ul>

                                <div class="review-card__text">
                                    <?php the_content(); ?>
                                </div>

                                <div class="review-card__footer">
                                    <button class="review-card__btn" data-langopen="<?php _e('Развернуть', 'sugarpulse'); ?>" data-langclose="<?php _e('Свернуть', 'sugarpulse'); ?>">
                                        <?php _e('Развернуть', 'sugarpulse'); ?>
                                    </button>

                                    <time class="review-card__date" datetime="<?= get_the_date('YYYY-mm-dd'); ?>"><?= get_the_date(); ?></time>
                                </div>

                            </div>

                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>

        <?php if ($query->found_posts > 3) : ?>
            <div class="reviews-slider-wrap__nav">
                <button class="reviews-slider-wrap__arrow reviews-slider-wrap__arrow--prev arrow-slider"></button>
                <button class="reviews-slider-wrap__arrow reviews-slider-wrap__arrow--next arrow-slider"></button>
            </div>

            <div class="reviews-slider-wrap__pagination pagination-standart"></div>
        <?php endif; ?>
    </div>

<?php endif; ?>