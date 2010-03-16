<?php get_header() ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<h3 class="page-subtitle"><span>Search results for: <?php echo wp_specialchars(stripslashes($_GET['s']), true); ?></span></h3>

		<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID() ?>" class="post">
			<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>								
			<div class="post-meta">Posted on <?php the_time('F j, Y'); ?> in: <?php the_category(', '); ?><span class="sep">|</span><?php comments_popup_link('Post Comment', '1 Comment', '% Comments') ?></div>
			<div class="post-content">
				<?php the_content('Click here to read more &raquo;'); ?>
			</div>
		</div><!-- .post -->
		<?php endwhile; ?>

		<div class="navigation">
			<div class="navleft"><?php next_posts_link('&laquo; Older Posts', '0') ?></div>
			<div class="navright"><?php previous_posts_link('Newer Posts &raquo;', '0') ?></div>
		</div>

	<?php else : ?>

		<div id="post-0" class="post">
			<h2 class="post-title">Nothing Found</h2>
			<div class="post-content">
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
			</div>
			<form id="searchform" method="get" action="<?php bloginfo('home') ?>">
				<div>
					<input id="s" name="s" type="text" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" size="40" />
					<input id="searchsubmit" name="searchsubmit" type="submit" value="Find" />
				</div>
			</form>
		</div><!-- .post -->

	<?php endif; ?>

	</div><!-- #content -->

<?php get_sidebar() ?>
<?php get_footer() ?>