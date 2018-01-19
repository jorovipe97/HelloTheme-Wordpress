<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <!-- <link href="" rel="stylesheet"> -->

    <!-- Learn right now that you can never link to anything in a WordPress page without some PHP. -->
    <!-- Custom styles for this template -->
    <!-- <link href="" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>

    <!-- TODO; Read about the pages https://codex.wordpress.org/es:Pages -->
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item <?php echo ($wp->request == "")? "active": "";?>" href="<?php echo site_url('/') ?>">Home</a>
          <?php wp_list_pages('&title_li=') ?>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <a href="#"><h1 class="blog-title"><?php echo get_bloginfo('name'); ?></h1></a>
        <p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>
      </div>
