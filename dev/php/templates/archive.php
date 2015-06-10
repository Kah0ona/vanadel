<?php get_header(); ?>
<div class="u-gridContainer">
		
		<div class="content-wrapper Content">
			<div class="u-gridCol8" style="margin-bottom:20px;">
				<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>
			<div class="news-item">
				<article <?php post_class() ?>>
				
					<h2 class="border-none" id="post-<?php the_ID(); ?>">
						
							<?php the_title(); ?>
						
					</h2>
					<hr class="underline">
					<span><?php the_time( get_option( 'date_format' ) ); ?></span>

					<div>
						<?php the_content() ?>
					</div>
					
					<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Geplaatst in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  </p>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><button class="float-right">Lees meer</button></a>
				</article>
			</div>
			<?php endwhile; ?>
		
				<nav>
					<div><?php previous_posts_link('&laquo; Vorige pagina') ?></div>
					<div style="float:right"><?php next_posts_link(' Volgende pagina &raquo;') ?></div>
				</nav>
				
			<?php else : ?>
		
				<h2><?php _e('Nothing Found', ''); ?></h2>
					
				<?php get_search_form(); ?>
		
			<?php endif;?>

				</div>
				<div class="u-gridCol4 aside-ul2 " style="padding:20px;">
					<?php get_sidebar(); ?>
				</div>
			</div>
			
		</div>

		


<?php get_sidebar(); ?>

<?php get_footer(); ?>
