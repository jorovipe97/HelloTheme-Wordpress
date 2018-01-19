<?php if ( post_password_required() ) {
	return;
} ?>

<div id="comments" class="comments-area">

  <?php if ( have_comments() ) : ?>
		<!-- If there are comments, then show up -->
		<!-- The comment title -->
		<h3 class="comments-title">
			<?php
			printf(
				// _nx returns the first string if the third argument is equal to 1 and returns the second string if the third argument is greater than 1
        _nx(
          'One comment on “%2$s”',
          '%1$s comments on “%2$s”',
          get_comments_number(),
          'comments title'
        ),
				number_format_i18n( get_comments_number() ),
        get_the_title()
      );
			?>
		</h3>
		<!-- All the comments -->
		<ul class="comment-list">
			<?php
			wp_list_comments( array(
				'short_ping'  => true,
				'avatar_size' => 50,
			) );
			?>
		</ul>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<!-- If there is not comments, then show the following message-->
		<p class="no-comments">
			<!-- Is used for multilanguaged in WordPress, the argument is the text to translate -->
			<?php _e( 'Comments are closed.' ); ?>
		</p>
	<?php endif; ?>

	<!-- Show the form for submit a new comment -->
	<?php comment_form(); ?>
</div>
