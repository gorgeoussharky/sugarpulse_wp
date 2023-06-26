<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package sugarpulse
 */

get_header();
global $wp_query;
?>

<main class="search-result-page">

	<div class="search-result-page__wrap">

		<div class="container">

			<div class="search-result-page__result">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Поиск по запросу: %s', 'sugarpulse'), '<b class="search-result-page__name">' . get_search_query() . '</b>');
				?>
			</div>

			<?php if ($wp_query->found_posts) : ?>
				<div class="catalog-page__catalog-type catalog-type">
					<?= get_template_part('template-parts/content', 'catalog'); ?>
				</div>
			<?php else : ?>
				<div class="search-result-page__negative-tip">
					<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M8.21381 2.0769C4.83069 2.0769 2.07812 4.82947 2.07812 8.21259C2.07812 11.5959 4.83069 14.3483 8.21381 14.3483C11.5971 14.3483 14.3495 11.5959 14.3495 8.21259C14.3495 4.82947 11.5971 2.0769 8.21381 2.0769ZM8.21381 13.2156C5.45521 13.2156 3.21087 10.9712 3.21087 8.21262C3.21087 5.45402 5.45521 3.20965 8.21381 3.20965C10.9724 3.20965 13.2168 5.45399 13.2168 8.21259C13.2168 10.9712 10.9724 13.2156 8.21381 13.2156Z" fill="#0098C7" />
						<path d="M15.8429 15.0428L12.5957 11.7956C12.3745 11.5743 12.0161 11.5743 11.7949 11.7956C11.5736 12.0167 11.5736 12.3754 11.7949 12.5964L15.0421 15.8437C15.1527 15.9543 15.2975 16.0096 15.4425 16.0096C15.5873 16.0096 15.7323 15.9543 15.8429 15.8437C16.0642 15.6226 16.0642 15.2639 15.8429 15.0428Z" fill="#0098C7" />
					</svg>
					<?php printf(esc_html__('По поиску %s товаров не найдено. Попробуйте изменить ваш запрос', 'sugarpulse'), '<b>' . get_search_query() . '</b>'); ?>
				</div>

				<section class="search-result__products-tabs products-tabs">
					<?php get_template_part('template-parts/content', 'featured-products'); ?>
				</section>
			<?php endif; ?>
		</div>

	</div>
</main>

<?php
get_footer();
