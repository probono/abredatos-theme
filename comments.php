<div id="comments">

<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p>This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h2 class="section-title"><?php comments_number('No Comments', '1 Comment', '% Comments' );?></h2>

	<ol>

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">

			<div class="comment-gravatar">
				<?php echo get_avatar( $comment, 60 ); ?>
			</div>	
		
			<div class="comment-data">
				<div class="comment-author"><?php comment_author_link() ?></div>
				<div class="comment-meta"><?php comment_date() ?></div>
	<?php if ($comment->comment_approved == '0') { ?><span class='unapproved'>Your comment is awaiting moderation.</span><?php } ?>							
				<?php comment_text() ?>
			</div>
		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p>Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>

</div>


<?php if ('open' == $post->comment_status) : ?>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<div id="respond">

	<h2 class="section-title">Post Comment</h2>

	<form method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">	
	
		<div id="comment-form">
	
		<?php if ( $user_ID ) : ?>
			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>			
		<?php else : ?>
	  <p> 
		  <label for="author">Name <?php if ($req) echo "(required)"; ?></label>
		  <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
    </p>
		<p>
		  <label for="email">Email (will not be published) <?php if ($req) echo "(required)"; ?></label>
		  <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
    </p>
    <p>
  		<label for="url">Website</label>
	   	<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
    </p>
		
		<?php endif; ?>

		<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
		
		</div>							

		<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		<?php do_action('comment_form', $post->ID); ?>

	</form>

</div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

