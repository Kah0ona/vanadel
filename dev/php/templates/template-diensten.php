<?php
/*
Template Name: Diensten
*/
?>

<?php get_header(); ?>


    <?php
    
    
    $wp_query = new WP_Query(); 
    $wp_query->query('showposts=999' . '&paged='.$paged);
    $blogs = '';
    while ($wp_query->have_posts()) {
    	$wp_query->the_post();
    	$blogs .= '<div class="section-blog-link">
         			<a href="'.get_permalink().'" ><b> > </b>'.get_the_title().'</a>
    			   </div>';
    }; 

    wp_reset_query();

    
    ?>


	<div class="u-gridContainer">
		<div class="content-wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="gridRow">
					<article class="Content Content--home u-gridCol8" id="post-<?php the_ID(); ?>">
						
						<main>
							<?php the_content();
							 $image1 = get_field('image1'); 
							 $image2 = get_field('image2'); 
							 $image3 = get_field('image3'); 
							 $image4 = get_field('image4'); 

							 ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</main>
					</article>

				</section>

				<section >
					<article class="">
						<hgroup class="h2-title u-gridCol12">
							<h2>Diensten</h2>
							
							<hr class="underline">
						</hgroup>
						<section class="gridRow">
							<article class="u-gridCol4 margin-bottom">
								<img  class="imgstyle" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/>
								<section class="driecolumen-style-diensten">
									<a href="/administratie"><h5>Administratie</h5></a>
									<ul>
										<li>• Administratie</li>
										<li>• Salarisadministratie</li>
										<li>• Tussentijdse rapportage </li>
										<li>• Jaarrekening</a></li>
										
									</ul>
									<div class="a-leftbottom"><a href="/administratie/" class="driecolumn-link">Lees verder</a></div>
								</section>
							</article>

							<article class="u-gridCol4 margin-bottom">
								<img  class="imgstyle" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>"/>
								<section class="driecolumen-style-diensten">
									<a href="/belastingen"><h5>Belastingen</h5></a>
									<ul>
										<li>• Belastingaangiften</li>
										<li>• Belastingadvies</li>
										
									</ul>
									<div class="a-leftbottom"><a href="/belastingen/" class="driecolumn-link">Lees verder</a></div>
								</section>
							</article>

							<article class="u-gridCol4 margin-bottom no-margin-right">
								<img  class="imgstyle" src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>"/>
								<section class="driecolumen-style-diensten">
									<a href="/advies"><h5>Advies</h5></a>
									<ul>
										<li>• Financiële advisering</li>
										<li>• Bedrijfskundige advisering</li>
										<li>• Interim ondersteuning</li>
										<li>• Startersbegeleiding</li>
									</ul>						
									<div class="a-leftbottom"><a href="/advies" class="driecolumn-link">Lees verder</a></div>
								</section>
							</article>
						<section>  

					</article>
				</section>

			<?php endwhile; endif; ?> 
		</div>   
	</div> 
	

<?php get_footer(); ?> 
