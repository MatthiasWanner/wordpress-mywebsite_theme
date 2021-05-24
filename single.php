<?php get_header(); ?>

      <?php if (have_posts()) : ?>
       
      <?php while (have_posts()) : the_post(); ?>

        <article>
          <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <div>
            <?php the_content(); ?>
          </div>
        </article>
      
      <?php endwhile; ?>
      
       <?php else: ?>
          <p>Aucun articles :(</p>
      <?php endif; ?>

<?php get_footer(); ?>