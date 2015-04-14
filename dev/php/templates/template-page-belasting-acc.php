<?php
/*
Template Name: page-belasting-acc
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="content-wrapper" style="min-height:590px;"> 
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="u-gridRow">

					<article class="u-gridCol8 padding-top"> 
						<div class="with-line">
						    <h2><?php the_title(); ?></h2><hr class="underline">
						</div>
						<div>
						    
								<?php the_content(); $image1 = get_field('image1'); ?>
							
						</div>
						<div class="accordion">
						    <a href="#1"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png"/><h4> Belastingaangiften</h4></a>
						</div>
						<div class="accContent active" >
						    <hr>
						    <p>
								Wij verzorgen alle soorten belastingaangiften, zoals omzetbelasting, inkomstenbelasting, vennootschapsbelasting, loonheffing en dividendbelasting. Ons uitgangspunt hierbij is om dit zo voordelig mogelijk voor u als cliënt uit te voeren.

								Wij kunnen u ook begeleiden bij het omzetten van een eenmanszaak naar een BV.

								Als aspirant lid van het Register Belastingadviseurs (RB) gebeurt dit vanzelfsprekend met de door ons gewaarborgde kwaliteit en op basis van de laatste fiscale ontwikkelingen.

								Van Adel Administratie Belastingen Advies rekent met u mee en levert u in alle gevallen fiscaal advies op maat.
							</p><hr>
						</div>
						<div class="accordion">
						    <a href="#2"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png"/><h4> Belastingadvies</h4></a>
						</div>
						<div class="accContent active" >
						    <hr>
						    <p>
								Wij verzorgen alle soorten belastingaangiften, zoals omzetbelasting, inkomstenbelasting, vennootschapsbelasting, loonheffing en dividendbelasting. Ons uitgangspunt hierbij is om dit zo voordelig mogelijk voor u als cliënt uit te voeren.

								Wij kunnen u ook begeleiden bij het omzetten van een eenmanszaak naar een BV.

								Als aspirant lid van het Register Belastingadviseurs (RB) gebeurt dit vanzelfsprekend met de door ons gewaarborgde kwaliteit en op basis van de laatste fiscale ontwikkelingen.

								Van Adel Administratie Belastingen Advies rekent met u mee en levert u in alle gevallen fiscaal advies op maat.
							</p><hr>
						</div>
					</article>
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
	
<?php get_footer(); ?> 
