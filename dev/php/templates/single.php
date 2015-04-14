<?php get_header(); ?>
<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


	<div class="u-gridContainer" style="min-height:560px;">
		<div class="content-wrapper Content">
			<div class="u-gridRow">

			

				<div class="u-gridCol8">

					<a href="/actueel-nieuws" class="leesmeer-blog">< Terug naar actuele nieuwsberichten</a>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>"> 
						<hgroup class="h2-title">
									<h2 class="border-none" style="font-size:1.8rem;"><?php the_title(); ?></h2>
									<hr class="underline">
						</hgroup>
						<div>
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
						</div>
					</article>
					<div style="margin-top:25px;">
						<div class="fb-share-button" data-href="<?php echo   "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-layout="button"></div>
						<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: nl_NL</script>
						<script type="IN/Share"></script>
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
				</div>
				<div class="u-gridCol4 posts-list aside-ul2">
					<h5>Meer nieuws</h5>
					<ul>
					<?php


					$args = array( 'posts_per_page' => 4, 'offset'=> 0, 'category' => 1 );

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endforeach; 
					wp_reset_postdata();?>

					</ul>
				</div>
			</div>
			
				<!--<nav class="u-gridRow">
					<div><?php previous_post_link('&laquo; %link') ?></div>
					<div><?php next_post_link('%link &raquo;') ?></div>
				</nav>-->

				

			<?php endwhile; else: ?>

				<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
