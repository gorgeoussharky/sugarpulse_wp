<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sugarpulse
 */

get_header();
?>



<?php if (is_account_page()) : ?>

    <?php the_content(); ?>

<?php else : ?>

    <main class="single-page">

        <div class="single-page__wrap">

            <div class="container">

                <h1 class="single-page__heading"><?php the_title(); ?></h1>

                <div class="single-page__text-content text-content">
                    <?php echo the_content(); ?>
                </div>

            </div>


        </div>

    </main>

<?php endif; ?>

<?php get_footer();
