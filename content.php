<div class="blog-post">
  <h2 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <p class="blog-post-meta"><?php the_date() ?> by <a href="#"><?php the_author() ?></a></p>

  <?php the_excerpt() ?>

  <?php if (get_comments_number() && comments_open()):?>

    <a href="<?php comments_link(); ?>">
    	<?php
    	printf(
        _nx( // _nx returns the first argument only if the third argument is equal to one, in other cases the function will return the second argumetn
          'One Comment',
          '%1$s Comments',
          get_comments_number(),
          'comments title', 'textdomain'
        ),
        number_format_i18n(
          get_comments_number()
        )
      ); ?>
    </a>

  <?php else: ?>
    <p>You can win the first comment prize!!!</p>
  <?php endif; // if (have_comments() ) ?>

</div><!-- /.blog-post -->
