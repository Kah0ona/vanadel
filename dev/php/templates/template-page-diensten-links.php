<?php
/*
Template Name: page-diensten-links
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="content-wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="gridRow">
					<aside class="u-gridCol3">
						<section class="side-menu-diensten">
								<h5>Diensten</h5>
								<ul>	
									<li><a href="/salarisadministratie">Salarisadministratie</a></li>	
									<li><a href="/tussentijdse-rapportage">Tussentijdse rapportage</a> </li>								
									<li><a href="/jaarrekening">Jaarrekening</a></li>
								</ul>
						</section>
						
					</aside>
					<article class="Content Content--home u-gridCol8" id="post-<?php the_ID(); ?>">
						<hgroup class="h2-title">
							<h2><?php the_title(); ?></h2>
							<hr class="underline">
						</hgroup>
						<main>
							<?php the_content(); $image1 = get_field('image1'); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</main>
					</article>

				</section>

			<?php endwhile; endif; ?> 
		</div>   
	</div> 
	<section class="section-blog">
		<article class="u-gridContainer">
			<div class="content-wrapper"> 
				<h5>Actueel nieuws</h5><a href="/actueel-nieuws" class="leesmeer-blog">Meer > </a>
				<article class="blogspost">
		        <?php
		         $temp = $wp_query; $wp_query= null;
		        $wp_query = new WP_Query(); $wp_query->query('showposts=999' . '&paged='.$paged);
		       while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		        <div class="section-blog-link">
		             <a href="<?php the_permalink(); ?>" ><b> > </b><?php the_title(); ?></a>
		        </div>
		        <?php endwhile; ?>
		    </article>
		   	</div>
	    </article>
	</section>

<?php get_footer(); ?> 
