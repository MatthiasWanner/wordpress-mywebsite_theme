<?php get_header() ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <article class="homepage-article">
        <h3 class="homepage-title"><?php the_title(); ?></h3>
        <?php the_content() ?>
    </article>

<?php endwhile; ?>

<?php else: ?>
    <p>Aucun articles...</p>
<?php endif; ?>

<?php get_footer(); ?>