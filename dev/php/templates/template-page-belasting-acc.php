<?php
/*
Template Name: page-belasting-acc
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="content-wrapper" style="min-height:625px;"> 
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="u-gridRow">

					<article class="u-gridCol8 padding-top"> 
						<div class="with-line">
						    <h2><?php the_title(); ?></h2><hr class="underline">
						</div>
						<div>
						    
								<?php the_content(); $image1 = get_field('image1'); ?>
							
						</div>
						<?php endwhile; endif; ?> 
						<?php 
							include_once('tabs.php');
							renderTabs('belasting tabs'); //verander woord accountancy op de andere pagina's, door bijv. 'belasting'
							
						?>
					</article>
						<section class="u-gridRow mobileshow"> 
							<a href="/contact" style="color:white;">
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
					<div class="u-gridCol4 acc-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/belasting2.png"/>
					</div>


					<!--<article class="Content Content--home u-gridCol8" id="post-<?php the_ID(); ?>">
						<hgroup class="h2-title">
							<h2><?php the_title(); ?></h2>
							<hr class="underline">
						</hgroup>
						<main>
							<?php the_content(); $image1 = get_field('image1'); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</main> 
					</article>-->

				</section>
				<section class="u-gridRow mobilehide"> 
					<a href="/contact" style="color:white;">
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
			
		</div>   
	</div> 
	
<?php get_footer(); ?> 
