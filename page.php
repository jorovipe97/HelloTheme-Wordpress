<?php get_header(); ?>
  <!--How To Enable Custom Permalinks In WordPress Local Server Environment linux -->
  <!-- https://wordpress.stackexchange.com/questions/167144/wordpress-permalinks-not-working-in-apache2-ubuntu-14-04 -->
  <div class="row">
    <!-- How to fix the 404 error http://www.wpbeginner.com/wp-tutorials/how-to-fix-wordpress-posts-returning-404-error/-->
    <!-- The 404 error is normally a problem of the .htacces file-->
    <div class="col-sm-12">

      <!-- This is THE LOOP, it is used for read posts -->
      <?php
      if ( have_posts() ): while ( have_posts() ): the_post();

        get_template_part('content', 'page');

      endwhile; endif;
      ?>


    </div><!-- /.blog-main -->

  </div><!-- /.row -->

<?php get_footer(); ?>
