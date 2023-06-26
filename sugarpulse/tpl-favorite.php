<?php

/*
Template Name: Избранное
*/

get_header();
?>


<main class="favor-page">

    <div class="favor-page__wrap">

        <div class="container">

            <h1 class="favor-page__heading"><?php the_title();?></h1>

            <div class="favor-page__catalog-type catalog-type">
          	    <?= get_template_part('template-parts/content', 'catalog'); ?>
            </div>

        </div>

    </div>

</main>

<?php get_footer();
