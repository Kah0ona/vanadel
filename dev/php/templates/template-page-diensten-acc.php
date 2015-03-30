<?php
/*
Template Name: page-diensten-acc
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="content-wrapper" style="min-height:560px;">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="u-gridRow">

					<article class="u-gridCol8 padding-top">
						<div class="with-line">
						    <h2><?php the_title(); ?></h2><hr class="underline">
						</div>
						<div class="">
						    
								<?php the_content(); $image1 = get_field('image1'); ?>
							
						</div>
						<div class="accordion">
						    <a href="#1"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png"/><h4> Financiële advisering</h4></a>
						</div>
						<div class="accContent active" >
							<hr>
						    <p>
								Wij bieden u ruim 20 jaar ervaring op het gebied van financiële en fiscale activiteiten in uiteenlopende branches en sectoren binnen het bedrijfsleven. Vanuit onze uitgebreide praktische werkervaring kunnen wij u goed adviseren op diverse financiële gebieden. U kunt hierbij denken aan het optimaliseren van de inrichting van uw administratie of financiële afdeling, zodat u meer en beter inzicht krijgt in uw omzet, kosten en cashflow. Daaruit voortvloeiend zult u beter in staat zijn uw kosten te beheersen en de winstgevendheid van uw onderneming te verhogen.

								Wij adviseren u ook graag over de verschillende manieren om uw belastingtechnische positie te verbeteren en bieden u begeleiding bij investeringsprojecten en de financiering daarvan.

								Wij bieden u professioneel advies bij het oprichten of herstructureren van uw onderneming, alsmede het inrichten of herinrichten van uw financiële administratie.
								Tot slot kunnen wij u financieel inzicht bieden bij investeringsvraagstukken en overnames.
							</p>
							<hr>
						</div>

						<div class="accordion">
						    <a href="#2"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png"/><h4> Bedrijfskundige advisering</h4></a>
						</div>
						<div class="accContent" >
						   <hr> <p>
								Door onze brede kennis van het bedrijfsleven en onze frisse externe blik kunnen wij u goed adviseren over manieren waarop u uw bedrijfsvoering kunt optimaliseren en eventuele knelpunten in uw primaire en ondersteunende werkprocessen kunt oplossen.

								Van Adel Administratie Belastingen Advies fungeert als klankbord bij al uw ondernemersbeslissingen en begeleidt u bij al uw ondernemingsplannen.
							</p><hr>
						</div>

						<div class="accordion">
						    <a href="#3"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png"/><h4> Interim ondersteuning</h4></a>
						</div>
						<div class="accContent">
							
							<hr>
						    <p>
						    	Wanneer u tijdelijk “extra” expertise nodig heeft op het gebied van financieel management voor uw onderneming of specifieke projecten kunnen wij u ondersteuning bieden in de vorm van interim financieel management.
								Deze projecten kunnen zijn om financiële problemen op te lossen, veranderingen door te voeren, vaardigheden over te brengen of de continuïteit te waarborgen bij het tijdelijk wegvallen van financiële sleutelpersonen. Dit kan ook op part-time basis.
						    </p>
						<hr>
						</div> 

						<div class="accordion">
						    <a href="#4"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png"/><h4> Startersbegeleiding</h4></a>
						</div>
						<div class="accContent">
							<hr>
						    <p>Ook als startende ondernemer kunt u bij ons terecht. Het is immers van essentieel belang dat u een juiste en slagvaardige start maakt.

								Wij zijn u van dienst bij het opstellen van uw ondernemersplan, het bepalen van de juiste rechtsvorm en uiteraard ook bij alle fiscale aangelegenheden. Wij adviseren en ondersteunen u bij het opstarten en inrichten van uw administratie. Wij kunnen u stap voor stap begeleiden, zodat u optimaal inzicht krijgt in uw bedrijfsvoering en de ontwikkeling van uw onderneming.

								Vergroot uw kansen om te slagen! Maak een afspraak met ons voor een geheel vrijblijvend kennismakingsgesprek.
							</p><hr>
						</div>	
											
					</article>
					<div class="u-gridCol4 acc-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/advies.png"/>
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
