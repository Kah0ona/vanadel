<?php get_header(); ?>
	<div class="u-gridContainer">
		<div class="content-wrapper Content">
			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
				<div class="news-item">
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<hgroup class="h2-title">
								<h2 class="border-none"><?php the_title(); ?></h2>
								<hr class="underline">
							</hgroup>
						<span><?php the_time( get_option( 'date_format' ) ); ?></span>
						<div class="blogtekst"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><button class="float-right">Lees meer</button></a>

						<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
					</article>
				</div>
				<?php endwhile; ?>

				<nav>
					<div><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				</nav>

			<?php else : ?>

				<h2>Not Found</h2>
				<p>Sorry, but you are looking for something that isn't here.</p>
				<?php get_search_form(); ?>

			<?php endif; ?>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>