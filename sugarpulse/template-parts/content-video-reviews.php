<?php
$args = array(
    'post_type' => 'video-review',
    'posts_per_page' => -1,
    'post_parent' => 0
);
$query = new WP_Query($args); ?>

<?php if ($query->have_posts()): ?>


<div class="reviews-slider-wrap__subtitle">
    <?php _e('Популярные товары', 'sugarpulse'); ?>
</div>
<h2 class="reviews-slider-wrap__title">
    <?php _e('Видеообзоры глюкометров', 'sugarpulse'); ?>
</h2>

<div class="reviews-slider-wrap__wrap">
    <div class="reviews-slider-wrap__reviews-slider reviews-slider">
        <div class="reviews-slider__swiper-wrapper swiper-wrapper">
            <?php while ($query->have_posts()):
        $query->the_post(); ?>
            <div class="reviews-slider__swiper-slide swiper-slide">

                <div class="reviews-slider__video-card video-card">
                    <div class="video-card__body">
                        <time class="video-card__date" datetime="<?= get_the_date('YYYY-mm-dd'); ?>">
                            <?= get_the_date(); ?>
                        </time>

                        <a href="/product-single.html" class="video-card__link">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                class="video-card__img">
                        </a>

                        <div class="video-card__name">
                            <?php the_title(); ?>
                        </div>

                        <div class="video-card__text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
        </div>
    </div>

    <?php if ($query->found_posts > 3): ?>
    <div class="reviews-slider-wrap__nav">
        <button class="reviews-slider-wrap__arrow reviews-slider-wrap__arrow--prev arrow-slider"></button>
        <button class="reviews-slider-wrap__arrow reviews-slider-wrap__arrow--next arrow-slider"></button>
    </div>

    <div class="reviews-slider-wrap__pagination pagination-standart"></div>
    <?php endif; ?>
</div>

<?php endif; ?>