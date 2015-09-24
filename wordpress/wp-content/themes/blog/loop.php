<section>
  
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <article>
        <h2> 
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>   
          </a>
        </h4>
        <p>
          <?php the_excerpt(); ?>
        </p>
      </article>

  <?php endwhile; ?>
  <?php endif; ?>

</section>