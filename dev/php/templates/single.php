<?php get_header(); ?>
	<div class="u-gridContainer">
		<div class="content-wrapper Content">
			<a href="/actueel-nieuws" class="leesmeer-blog">< Terug naar actuele nieuwsberichten</a>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<hgroup class="h2-title">
								<h2 class="border-none"><?php the_title(); ?></h2>
								<hr class="underline">
					</hgroup>
					<div>
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
					</div>
				</article>
				
				<nav>
					<div><?php previous_post_link('&laquo; %link') ?></div>
					<div><?php next_post_link('%link &raquo;') ?></div>
				</nav>

				<?php comments_template(); ?>

			<?php endwhile; else: ?>

				<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
