<?php
get_header();
?>


<main class="blog-page">

    <div class="blog-page__wrap">

        <div class="container">

            <div class="blog-page__about-banner about-banner">

                <div class="about-banner__wrap">

                    <div class="about-banner__content">

                        <h1 class="about-banner__heading">
                            <?php _e('База знаний <b>полезных тем</b>', 'sugarpulse'); ?>
                        </h1>

                        <div class="about-banner__text">
                            <?php _e('Здесь вы можете изучить уже имеющуюся базу полезных статей и историй о сахарном диабете.', 'sugarpulse'); ?>
                        </div>
                    </div>

                    <div class="about-banner__img">
                        <img src="<?= THEME_PATH; ?>/assets/img/about-blog.svg" alt="">
                    </div>

                </div>

            </div>

            <h2 class="blog-page__title">
                <?php _e('Полезные статьи', 'sugarpulse'); ?>
            </h2>

            <div class="blog-page__content">

                <div class="blog-page__main-content">

                    <?php
                    $args = array(
                        'posts_per_page' => 10,
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                    );
                    $query = new WP_Query($args); ?>

                    <ul class="blog-page__list">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <li class="blog-page__item">
                                <div class="blog-page__blog-card blog-card">
                                    <?php get_template_part('template-parts/content', 'blog-item'); ?>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>


                    <?php if ($query->max_num_pages > 1) : ?>
                        <button class="blog-page__show-more-btn show-more-btn show-more-btn--loading" data-load-more="our_works" data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1; ?>">
                            <span>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7677 4.77692C15.5247 4.61128 15.1937 4.67387 15.028 4.91672L13.9424 6.50846C13.6604 5.19449 13.0072 3.98712 12.0351 3.01515C10.7032 1.68323 8.93234 0.949707 7.04864 0.949707C5.16502 0.949707 3.3941 1.68323 2.06218 3.01515C-0.687392 5.76472 -0.687392 10.2386 2.06218 12.9881C3.43696 14.3629 5.2428 15.0503 7.04864 15.0503C8.85449 15.0503 10.6603 14.3629 12.0351 12.9881C12.243 12.7802 12.243 12.4432 12.0351 12.2353C11.8272 12.0275 11.4902 12.0275 11.2824 12.2353C8.94788 14.5698 5.14948 14.5698 2.815 12.2353C0.480522 9.90085 0.480522 6.10231 2.815 3.76783C3.94587 2.63703 5.44939 2.01422 7.04871 2.01422C8.64804 2.01422 10.1516 2.63703 11.2824 3.7679C12.1553 4.64066 12.7241 5.73732 12.9388 6.92788L11.0494 5.63925C10.8066 5.47361 10.4755 5.5362 10.3098 5.77905C10.1442 6.0219 10.2068 6.35304 10.4496 6.51868L13.268 8.44098C13.2682 8.44105 13.2683 8.44119 13.2685 8.44133C13.313 8.4717 13.3606 8.49406 13.4095 8.50932C13.411 8.50981 13.4124 8.5106 13.4139 8.51102C13.4222 8.51358 13.4306 8.51457 13.439 8.5167C13.4816 8.52734 13.5247 8.53387 13.5679 8.53387C13.7379 8.53387 13.905 8.45254 14.0081 8.30152L15.9075 5.51661C16.0731 5.27369 16.0105 4.94256 15.7677 4.77692Z" fill="#0098C7" />
                                </svg>
                            </span>
                            <?php _e('Показать еще', 'sugarpulse'); ?>
                        </button>

                    <?php endif; ?>

                </div>

                <div class="blog-page__sidebar">
                    <?php
                    /**
                     * Hook: woocommerce_sidebar.
                     *
                     * @hooked woocommerce_get_sidebar - 10
                     */
                    do_action('woocommerce_sidebar');
                    ?>
                </div>

            </div>

        </div>

        <div class="scroll-end"></div>

    </div>

</main>

<?php get_footer();
