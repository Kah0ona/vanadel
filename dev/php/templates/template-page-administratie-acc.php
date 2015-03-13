<?php
/*
Template Name: page-administratie-acc
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="content-wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="u-gridRow">

					<article class="u-gridCol8 padding-top">
						<div class="with-line">
						    <h2><?php the_title(); ?></h2><hr class="underline">
						</div>
						<div class="" >
						    
								<?php the_content(); $image1 = get_field('image1'); ?>
							
						</div>
						<div class="accordion">
						    <a href="#0"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b.png"/><h4> Administratie</h4></a>
						</div>
						<div class="accContent active" >
						   <hr> <p>
								Wij verzorgen uw complete salarisadministratie volgens de laatste actuele wet- en regelgeving. 
								Wij weten hoe belangrijk het is dat dit tijdig en accuraat gebeurt
							</p><hr>
						</div>
						<div class="accordion">
						    <a href="#1"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b.png"/><h4> Salarisadministratie</h4></a>
						</div>
						<div class="accContent active" >
						   <hr> <p>
								Wij verzorgen uw complete salarisadministratie volgens de laatste actuele wet- en regelgeving. 
								Wij weten hoe belangrijk het is dat dit tijdig en accuraat gebeurt
							</p><hr>
						</div>

						<div class="accordion">
						    <a href="#2"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b.png"/><h4> Tussentijdse rapportage</h4></a>
						</div>
						<div class="accContent">
							
							<hr>
						    <p>
						    	Soms is het van belang om tussentijds gedurende het boekjaar te weten hoe het gaat met de ontwikkeling van uw omzet, cashflow, 
						    	kosten en resultaat en tevens wat de prognoses voor de toekomst zijn. 
						    	Wij kunnen uw bedrijf periodiek financieel analyseren en daarbij een rapportage opstellen waarin al deze gegevens worden opgenomen en toegelicht. 
						    	Hiermee kunnen wij vroegtijdig afwijkingen en/of verbeteringen in uw financiële positie signaleren, 
						    	zodat er alert en adequaat kan worden ingegrepen en bijgestuurd.
						    </p>
						<hr>
						</div> 

						<div class="accordion">
						    <a href="#3"><img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b.png"/><h4> Jaarrekening</h4></a>
						</div>
						<div class="accContent">
							<hr>
						    <p>Het opstellen van de jaarrekening is een fiscale noodzakelijkheid en voor u van groot belang.
							     De cijfers in de jaarrekening zijn tenslotte de basis voor de belastingaangiften. 
							     Na het opstellen van de jaarrekening wordt deze uitvoerig met u besproken. 
							     Wij zetten voor u helder uiteen wat de cijfers betekenen voor uw bedrijfsvoering en tevens welke fiscale gevolgen er zullen zijn. 
							     Heeft u een BV? Wij deponeren voor u de juiste jaarstukken bij de Kamer van Koophandel.
								Tenslotte kunnen wij, indien nodig, voor u de accountantsverklaring verzorgen.
							</p><hr>
						</div>						
					</article>
					<div class="u-gridCol4 acc-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jaarrekening.png"/>
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
