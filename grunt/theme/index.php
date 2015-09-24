<?php get_header(); ?>

    <div class="hero container-fluid">
      <div class="row">
        <div class="container">
          <div class="col-md-12 column">
            <section>
              <h1>Hello, world!</h1>
              <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
              <p><a class="btn btn-primary btn-large" href="#">Learn more</a></p>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <div class="col-md-4 column">
            <section>
              <h2>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php the_title(); ?> 
                </a>
              </h2>
              <div class="excerpt">
                <?php the_excerpt(); ?>
              </div>
              <p>
                <a href="<?php the_permalink(); ?>">View details »</a>
              </p>
            </section>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

<?php get_footer(); ?>