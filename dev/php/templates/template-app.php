<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<hgroup class="h2-title">
					<h2><?php the_title(); ?></h2>
					<hr class="underline">
				</hgroup>
				<aside class="u-gridCol4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1410385526_iphone-6-plus-vector-mockup-preview-1.png" class="App-iphone" />
				</aside>
				<article class="Content-article app-text u-gridCol8" id="post-<?php the_ID(); ?>">
					<?php // the_content(); ?>
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 

					<a href="#">Download de app hier</a>
					<img class="googleimg"src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" />
 


					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.png" />

					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


