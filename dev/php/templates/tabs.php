<?php
	// maak deze file, tabs.php aan en plaats in de template map. 
	function renderTabs($post_type) {
		$args = array(
			'post_type' => $post_type,
			'posts_per_page'=>999
		);
		$tabs = new WP_Query( $args );
		$num = count($tabs);
		$counter = 0;
		if( $tabs->have_posts() ) {
			while( $tabs->have_posts() ) {
				$tabs->the_post();
				?> 
		      <div class="accordion">
		          <a href="#<?php echo $counter; ?>"><img class="arrow-down" 
		                     src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png">
		                     <h4><?php the_title(); ?></h4>
		          </a>
		
		      </div>
		      <div style="display: none;" class="accContent ">
		         <hr> 
		         <p>
		      	  <?php the_content(); ?>
		      	 </p>
		      	 <hr>
		      </div>      						
		<?php
		$counter++;

			}
		}
	}
?>