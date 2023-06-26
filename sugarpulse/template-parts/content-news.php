<div class="news-block__wrap">

    <div class="container">

        <div class="news-block__header">
            <div class="news-block__title">
                <?php _e('Последние новости', 'sugarpulse'); ?>
            </div>
            <a href="<?= get_permalink(get_option('page_for_posts')); ?>" class="news-block__link">
                <?php _e('Все статьи', 'sugarpulse'); ?>
            </a>
        </div>

        <div class="news-block__content">

            <div class="news-block__news-slider news-slider">


                <?php
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => -1,
                    'post_parent' => 0
                );
                $query = new WP_Query($args); ?>

                <?php if ($query->have_posts()) : ?>
                    <div class="news-slider__swiper-wrapper swiper-wrapper">

                        <?php while ($query->have_posts()) :
                            $query->the_post(); ?>
                            <div class="news-slider__swiper-slider swiper-slide">

                                <div class="news-slider__news-card news-card">

                                    <a href="<?= the_permalink(); ?>" class="news-card__body">

                                        <picture class="news-card__thumbnail">
                                            <source srcset="<?php the_post_thumbnail_url('full'); ?>" type="image/avif">
                                            <img loading="lazy" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?= the_title(); ?>">
                                        </picture>
                                        <div class="news-card__name">
                                            <?= the_title(); ?>
                                        </div>

                                        <div class="news-card__info">
                                            <?php echo the_content(); ?>
                                        </div>

                                        <div class="news-card__footer">
                                            <time class="news-card__date" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
                                            <div class="news-card__link">
                                                <?php _e('Читать новость', 'sugarpulse'); ?>
                                            </div>
                                        </div>

                                    </a>

                                </div>

                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    </div>

                    <div class="news-slider__nav">

                        <button class="news-slider__arrow news-slider__arrow--prev arrow-slider"></button>
                        <button class="news-slider__arrow news-slider__arrow--next arrow-slider"></button>

                    </div>
                <?php endif; ?>

            </div>

        </div>

    </div>

</div>