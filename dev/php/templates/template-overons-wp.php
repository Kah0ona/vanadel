<?php
/*
Template Name: Over ons wp
*/
?>

<?php get_header(); ?>

<div class="u-gridContainer">
	<div class="content-wrapper">
		<div class="">

			<div class="u-gridRow padding-top">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="u-gridCol8">
					<h2>Over ons</h2>
					<hr class="underline">
					<?php the_content(); $image1 = get_field('image1'); ?>
				</div>
				<aside class="u-gridCol4">
					<section class="aside-img">
						<?php if( !empty($image1) ): ?>
							<img  class="" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/>
						<?php endif; ?>
					</section>
				</aside>
				<?php endwhile; endif; ?> 
			</div>
			<div class="u-gridRow">
				<?php 
					include_once('tabs.php');
					renderTabs('over ons tabs'); //verander woord accountancy op de andere pagina's, door bijv. 'belasting'
					
				?>	
			</div>
			
			<section style="margin-top:20px;">
				<a href="/contact" style="color:white;">
					<button class="aside-button">
						<img  class="button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/man.png" >
						<p>Maak een kennismakingsafspraak</p>
					</button>	
				</a>

				<a href="/contact">
					<button>
						<img  class="button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png" >
						<p>Vraag een offerte aan</p>
					</button>	
				</a>
			</section>
		</div>
	</div>
</div>
 


<?php get_footer(); ?> 
