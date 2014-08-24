<?php
/**
 * correio template for displaying the footer
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */
?>

				<ul class="footer-widgets"><?php
					if ( function_exists( 'dynamic_sidebar' ) ) :
						dynamic_sidebar( 'footer-sidebar' );
					endif; ?>
				</ul>

			</div>
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-53911661-1', 'auto');
			  ga('send', 'pageview');

			</script>
			<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/masonry.pkgd.min.js"></script>
			<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/imagesloaded.js"></script>
			
		<?php wp_footer(); ?>
	</body>
</html>