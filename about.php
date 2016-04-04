<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<section class="page">
  <div class="container-fluid">
    <h1>About Me</h1>
    <div class="row">
      <div class="col-md-4">
        <img class="icon img-responsive" src="img/me_about_page.jpg" alt="">
      </div>
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, cu libris detracto eos, quo no mollis erroribus temporibus. Nulla adipiscing eu per. Adhuc altera est at, pro facete ancillae an. Ei pri ignota contentiones. Mel id nominati delicata, utamur dolores ea vix. <br><br>

        Nam viderer accusam in. Detracto molestie tractatos eu mea, an vis munere tibique fierent. Mei mollis commune an, ea mel dolore adolescens dissentias. Per molestiae euripidis incorrupte ad, erant feugiat dolorem an vim. Pro simul repudiare liberavisse te, percipitur accommodare cum cu, audiam mediocrem mel in. <br><br>

        Omnes adipiscing scribentur cu usu. Per nemore ocurreret democritum ne, eius ignota petentium ea pri. Aeterno feugiat omittam ex vix, ei mea ornatus adipisci, mazim luptatum contentiones ut nam. Vix cu legere facete veritus, sit ex dolores vulputate. Mundi aperiri dolorum ut nam, has eu populo graeco reformidans.</p>
      </div>
      <a href="#">Contact Me</a>
    </div>
  </div>

</section>
