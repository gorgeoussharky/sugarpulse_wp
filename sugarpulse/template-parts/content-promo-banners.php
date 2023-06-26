<div class="promo-banners__wrap">

    <div class="container">

        <div class="promo-banners__banners-slider-mobile banners-slider-mobile">


            <?php
            $args = array(
                'post_type' => 'promo',
                'posts_per_page' => -1,
                'post_parent' => 0
            );
            $query = new WP_Query($args); ?>

            <?php if ($query->have_posts()): ?>
                <div class="banners-slider-mobile__swiper-wrapper swiper-wrapper">

                    <?php while ($query->have_posts()):
                        $query->the_post(); ?>
                        <div class="banners-slider-mobile__swiper-slide swiper-slide">

                            <div class="promo-banners promo-banners__item">

                                <a href="<?php echo carbon_get_the_post_meta('promo_btn_link'); ?>" class="promo-banners__link">

                                    <div class="promo-banners__text-wrap">

                                        <div class="promo-banners__title">
                                            <?= the_title(); ?>
                                        </div>

                                        <div class="promo-banners__info">
                                            <?php echo the_content(); ?>
                                        </div>


                                        <div class="promo-banners__btn-link">
                                            <?php echo carbon_get_the_post_meta('promo_btn_text'); ?>
                                        </div>

                                    </div>

                                    <picture class="promo-banners__img-wrap">
                                        <source srcset="<?php the_post_thumbnail_url('full'); ?>" type="image/avif">
                                        <img loading="lazy" src="<?php the_post_thumbnail_url('full'); ?>"
                                            alt="<?= the_title(); ?>">
                                    </picture>

                                </a>

                            </div>

                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>


                <div class="banners-slider-mobile__pagination pagination-standart"></div>

            <?php endif; ?>

        </div>

    </div>

</div>