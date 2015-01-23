	<div class="Footer">
		<div class="u-gridContainer">
			<div class="u-gridCol4">
				 <a href="/home"> <img class="logo-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png"/></a>
			</div>
			<div class="u-gridCol4">
				<ul>
					<li>Wapserveld 13</li>
					<li>2151 JP Nieuw-Vennep</li>
					<li>Tel: 0252347577</li>
					<li>Email: info@vanadelfinance.nl</li>
				</ul>
			</div>
			
			<div class="u-gridCol4">
				<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<div class="Footer-inner u-gridRow">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

 
	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p class="copyright-text">&copy; Van Adel | Administratie • Belastingen • Advies <?php echo date("Y"); ?> Built by - <a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
				
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
