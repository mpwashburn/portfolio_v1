<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

  <div class="post container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 content">
       <div class="card">
          <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('large'); ?>
          <?php endif; ?>
          <div class="card-content">
            <h2><?php the_title(); ?> </h2>
            <p class=""><?php the_content(); ?></p>
          <div class="social">
            <a href="https://github.com/mpwashburn?tab=repositories" target="'newwindow'"> <i class="fa fa-github"></i></a>
          </div>
          </div>
        </div>
      </div>
      <!-- can be used for sidebar -->
      <!-- <div class="col-md-2">
        <div class="sidebar">
          <h3>sidebar</h3>
          <a href="#">Github</a>
        </div>
      </div> -->
    </div>
  </div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
