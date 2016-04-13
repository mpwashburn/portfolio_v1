<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Michael Washburn</title>
  <?php wp_head(); ?>
</head>
<body>
<nav id="mynav" class="navbar navbar-default" role=navigation>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="Icon-bar"></span>
        <span class="Icon-bar"></span>
        <span class="Icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#featured">Michael Washburn <span class="subhead"></Coder></span></a>
      </div><!-- navbar-header -->
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php bloginfo('wpurl') ?>">Home</a></li>
          <li><a href="<?php bloginfo('wpurl') ?>/about-me">About Me</a></li>
          <li><a href="<?php bloginfo('wpurl') ?>/projects">Projects</a></li>
          <li><a href="<?php bloginfo('wpurl') ?>/contact">Contact</a></li>
        </ul>
      </div><!-- collapse navbar-collapse-->
  </div>
</nav>
