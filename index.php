<?php get_header(); ?>

<div class="archive container">
    <div class="row">
<!-- beginning of loop. Index.php will continue to loop until it hits page limit setting -->
<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<!-- whatever content/styling must repeat for each post, put within the loop -->
    <div class="col-md-4">
       <div class="card">
          <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('large'); ?>
          <?php endif; ?>
          <div class="card-content">
            <h2><?php the_title(); ?> </h2>
            <p class=""><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Read more</a>
          </div>
        </div>
      </div>



<?php endwhile; ?>
  </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
