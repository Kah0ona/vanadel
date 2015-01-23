<?php
/*
Template Name: page
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="content-wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="gridRow">
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
					<aside class="u-gridCol4">
						<section class="aside-img">
							<?php if( !empty($image1) ): ?>
								<img  class="" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/>
							<?php endif; ?>
						</section>

						<section class="aside-ul">
								<h5>Kernwaarden</h5>
								<ul>
									<li>Optimale dienstverlening</li>
									<li>Vernieuwd in aanpak en creativiteit</li>
									<li>Persoonlijk betrokken</li>
									<li>Oplossingsgericht</li>
									<li>Betrouwbaar</li>
								</ul>
						</section>
						<section>
							<a href="/contact">
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
					</aside>
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
