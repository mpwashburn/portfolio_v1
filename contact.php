<?php/*
Template Name: Contact
*/?>
<!-- commented code above allows for a page template to be created. It contains the same code as the page.php file (as seen below)-->
<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<section class="page">
  <div class="container-fluid">
    <h1 id="contact-title"><?php //the_title(); ?></h1>
    <div class="row">

      <!-- commented out the col because we are not adding an image to this page -->
      <!-- <div class="col-md-4">
        <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
      </div> -->
      <div class="col-md-6 col-md-offset-3">
        <!-- content function grabs post/page content including html tags -->
        <?php the_content(); ?>
        <form>
    <div>
    <div class="form-group">
      <h2>Contact me here</h2>
      <label for="name">Your name</label>
      <input type="text" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="email">Your email</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="text">Message</label>
      <textarea class="form-control" rows="5" placeholder="Compose a beauiful message here..."></textarea>
    </div>
      <button type="submit" class="btn btn-default">Send</button>
    </div>
  </form>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
