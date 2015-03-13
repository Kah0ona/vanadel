<?php
/*
Template Name: page
*/
?>

<?php get_header(); ?>
<div style="min-height:560px;">
	<div class="u-gridContainer">
		<div class="content-wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="Content Content--home u-gridCol12" id="post-<?php the_ID(); ?>">
						<hgroup class="h2-title">
							<h2><?php the_title(); ?></h2>
							<hr class="underline">
						</hgroup>
						<main>
							<?php the_content(); $image1 = get_field('image1'); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</main>
					</article>
					<section class="u-gridRow"> 
						<a href="/contact">
							<button class="aside-button">
								<img  class="button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/man.png" >
								<p>Maak een kennismakingsafspraak</p>
							</button>	
						</a>

						<a href="/contact">
							<button class="aside-button">
								<img  class="button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png" >
								<p>Vraag een offerte aan</p>
							</button>	
						</a>
					</section>
				

			<?php endwhile; endif; ?> 
		</div>   
	</div> 
</div>
<?php get_footer(); ?> 
