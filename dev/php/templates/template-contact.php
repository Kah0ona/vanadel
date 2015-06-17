<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<hgroup class="h2-title">
					<h2><?php the_title(); ?></h2>
					<hr class="underline">
				</hgroup>
				<div class="Content-text">

					<div class="u-gridRow">					
											
						<div class="adress-map u-gridCol12">
							<div id="map_canvas"></div>
							
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">	
						<div class="u-gridCol7">				
							<p class="contact-page-p"><?php echo get_field('tekst_boven_formulier'); ?></p>
							<p><a style="color:#E05F2E;">*</a> Verplichte velden</p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Van Adel | Administratie • Belastingen • Advies</p>
								<p>Wapserveld 13</p>
								<p>2151 JP Nieuw-Vennep</p><br>
								<p>Tel: 0252 347 577</p>
								<p>E-mail: <a href="mailto:info@vanadelfinance.nl">info@vanadelfinance.nl</a></p> 
								 <br>
								<p>KvK: 54052203</p>
								<p><a href="https://www.google.nl/maps/dir//Van+Adel+%7C+Administratie+%E2%80%A2+Belastingen+%E2%80%A2+Advies,+Wapserveld+13,+2151+JP+Nieuw-Vennep/@52.2671694,4.6060651,18z/data=!4m13!1m4!3m3!1s0x47c5c29c0d380e1f:0x97adaf75424fa4fa!2sVan+Adel+%7C+Administratie+%E2%80%A2+Belastingen+%E2%80%A2+Advies!3b1!4m7!1m0!1m5!1m1!1s0x47c5c29c0d380e1f:0x97adaf75424fa4fa!2m2!1d4.606041!2d52.267002" target="_blank">Routebeschrijving</a></p>
							</div>
	
						</div>
					</div>	
				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

