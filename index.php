<?php get_header(); ?>
	<div id="container">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2>
					<a href="<?php the_permalink(); ?>" class="post-title" title="<?php the_title(); ?>">
						<?php the_title(); ?></a>
				</h2>
				<div class="entry">
					<?php the_content(); ?>
				</div>
				<span class="postmetadata"><?php the_date('') ?> <?php echo "~/"; ?><?php the_category(', ') ?></span>
			</div>
		<?php endwhile; ?>
			<div class="navigation">
				<?php posts_nav_link(); ?>
			</div>
		<?php else : ?>
			<div class="post">
				<h2><?php echo "This page cannot be found."; ?></h2>
				<p>
					It might be taken away by an alien, but it's more likely to be deleted or renamed by the author or admin.
				</p>
				<p>
					You are recommended to jump to the <a href="<?php bloginfo('url'); ?>">homepage</a>, or contact the author.
				</p>
			</div>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
</body>

</html>
