<div class="blog-card__body">

    <picture class="blog-card__thumbnail">
        <source srcset="<?php the_post_thumbnail_url('full'); ?>.webp" type="image/webp">
        <img loading="lazy" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?= the_title(); ?>">
    </picture>
    <div class="blog-card__text-wrap">

        <div class="blog-card__name"><?php the_title(); ?></div>

        <div class="blog-card__meta-wrap">

            <time class="blog-card__date" datetime="<?= get_the_date('YYYY-mm-dd'); ?>"><?= get_the_date(); ?></time>

            <span class="blog-card__dec-slash">//</span>

            <div class="blog-card__tag"> <?php _e('Советы покупателям', 'sugarpulse'); ?></div>

        </div>

        <div class="blog-card__excerpt">
            <?php the_content(); ?>
        </div>

        <a href="<?= the_permalink(); ?>" class="blog-card__link">
            <?php _e('Читать новость', 'sugarpulse'); ?>
        </a>

    </div>

</div>