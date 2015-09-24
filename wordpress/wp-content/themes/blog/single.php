<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div class="hero container-fluid">
    <div class="row">
      <div class="container">
        <div class="col-md-12 column">
          <section>
            <h1 class="text-center">
              <?php the_title(); ?>
            </h1>
            <p></p>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="column col-md-12">
        <arcticle>
          
          <section>

          </section>
          
          <section>
            <?php the_content(); ?>
          <section>

        </arcticle>
      </div>
    </div>
  </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>