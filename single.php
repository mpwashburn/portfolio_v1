<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<section class="post">
  <div class="container">
    <div class="row">
      <!-- can be used for sidebar -->
      <div class="col-md-2"></div>
      <div class="col-md-8 content">
       <div class="card">
          <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('large'); ?>
          <?php endif; ?>
          <div class="card-content-post">
            <h2><?php the_title(); ?> </h2>
            <p class="text-content-post"><?php the_content(); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
