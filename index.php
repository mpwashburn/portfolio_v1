<?php get_header(); ?>

<div class="archive container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?php if (have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <div class="post-content">
            <div class="col-md-3">
              <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
            </div>
            <div class="col-md-9">
              <h2><?php the_title(); ?> </h2>
              <p class=""><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>">Read more</a>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<!-- beginning of loop. Index.php will continue to loop until it hits page limit setting -->

<!-- whatever content/styling must repeat for each post, put within the loop -->
<?php get_footer(); ?>
