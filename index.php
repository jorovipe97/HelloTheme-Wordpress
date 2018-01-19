<?php get_header(); ?>

  <div class="row">

    <div class="col-sm-8 blog-main">

      <!-- This is THE LOOP, it is used for read posts -->
      <?php
      if ( have_posts() ): while ( have_posts() ): the_post();

          get_template_part('content', get_post_format());

        endwhile;?>

      <nav>
        <ul class="pager">
          <li><?php previous_posts_link('Back') ?></li>
          <li><?php next_posts_link('Next') ?></li>
        </ul>
      </nav>

    <?php endif; ?>
    </div><!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div><!-- /.row -->

<?php get_footer(); ?>
