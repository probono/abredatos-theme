<?php get_header() ?>

	<div id="content">

		<div id="post-0" class="post error404">
			<h2 class="post-title">Not Found</h2>
			<div class="post-content">
				<p>Apologies, but we were unable to find what you were looking for. Perhaps  searching will help.</p>
			</div>
			<form id="error404-searchform" method="get" action="<?php bloginfo('home') ?>">
				<div>
					<input id="error404-s" name="s" type="text" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" size="40" />
					<input id="error404-searchsubmit" name="searchsubmit" type="submit" value="Find" />
				</div>
			</form>
		</div><!-- .post -->

	</div><!-- #content -->

<?php get_sidebar() ?>
<?php get_footer() ?>