<?php get_header() ?>
<section class="jumbo">
  <div class="row">
    <div class="col-md-offset-6 col-md-6">
      <div id="jumbo-text">
        <h1>An Adventure as a Web Developer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur sunt excepturi architecto atque inventore hic a natus quisquam culpa molestiae temporibus officia quidem autem porro debitis cum, expedita pariatur quis.</p>
      </div>
    </div>
  </div>
</section>
<section class="page-break">
  <h1>projects</h1>
</section>
<div class="projects container">
<h2>Newest Projects</h2>
<div class="row">
  <section class="col-md-4">
    <div class="card">
      <a href=""><img class="icon img-responsive" src="<?php echo get_template_directory_uri() ?>/img/Everest_Game_SS.jpg" alt="Icon"></a>
      <div class="card-content">
        <h3>Everest Trivia <small>HTML | CSS | Javascript</small></h3>
        <p class="text-content">Everest is a simple trivia game that was developed in the first few weeks of code school at General Assembly. Inspired by my love of the outdoors and wanting to seek more through nature</p>
        <p class="text-right"><a href="#" class="btn btn-danger">Read more</a></p>
      </div>
    </div>
  </section>

  <section class="col-md-4">
    <div class="card">
      <a href="#"><img class="icon img-responsive" src="<?php echo get_template_directory_uri() ?>/img/TTT.jpg" alt="Icon"></a>
      <div class="card-content">
        <h3>Tic-Tac-Toe <small>HTML | CSS | Javascript</small></h3>
        <p class="text-content">The classic Tic-Tac-Toe game built in week 1 of code school at General Assembly</p>
        <p class="text-right"><a href="#" class="btn btn-danger">Read more</a></p>
      </div>
    </div>
  </section>

  <section class="col-md-4">
    <div class="card">
      <a href="#"><img class="icon img-responsive" src="<?php echo get_template_directory_uri() ?>/img/portfolio_ss.jpg" alt="Icon"></a>
      <div class="card-content">
        <h3>Portfolio <small>Bootstrap | CSS | Wordpress</small></h3>
        <p class="text-content">My portfolio site is my first project where I am working with custom wordpress themes. </p>
        <p class="text-right"><a href="#" class="btn btn-danger">Read more</a></p>
      </div>
    </div>
  </section>

</div>
</div>

<?php get_footer() ?>
