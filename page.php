<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<section class="page">
  <div class="container">
    <h1 class=""><?php the_title(); ?></h1>
    <div class="row">
      <div class="col-md-4">
        <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
      </div>
      <div class="col-md-8 content">
        <!-- content function grabs post/page content including html tags -->
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
