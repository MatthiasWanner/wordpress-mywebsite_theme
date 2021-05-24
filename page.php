<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <article>
            <h3><?php the_title(); ?></h3>
            <div>
                <?php the_content() ?>
            </div>
        </article>
    <?php endwhile; ?>

    <?php else: ?>
        <p>Aucun articles :(</p>
    <?php endif; ?>


<?php get_footer(); ?>