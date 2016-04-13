<?php /*Template Name: Contact*/ ?>
<!-- commented code above allows for a page template to be created. It contains the same code as the page.php file (as seen below)-->

<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<section class="page">
  <div class="container-fluid">
                            <!-- commenting out the title keeps the page title from showing from the wp page -->
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
      <form id="email-form" class="form">
        <div class="form-group">
          <h2>Contact me here:</h2>
          <label for="name">Your name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="email">Your email</label>
          <input type="email" class="form-control" id="email" name="email"placeholder="Email">
        </div>
        <div class="form-group">
          <label for="text">Message</label>
          <textarea class="form-control" rows="5" name="message" placeholder="Compose a beauiful message here..."></textarea>
        </div>
          <button type="submit" class="btn btn-default">Send</button>
      </form>

      <!-- this is where errors will be outputed -->
      <div class="row">
        <div class="col-md-12">
          <div id="form-results"></div>
      </div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
