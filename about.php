<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<section class="page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <img class="icon img-responsive" src="img/me_about_page.jpg" alt="">
      </div>
      <div class="col-md-8">
      <?php the_content(); ?>
      </div>
    </div>
  </div>

</section>
