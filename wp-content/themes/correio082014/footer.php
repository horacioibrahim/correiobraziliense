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
			<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/imagesloaded.pkgd.js"></script>
			<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.masonry.min.js"></script>
			<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.infinitescroll.min.js"></script>
			<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/isotope.pkgd.min.js"></script>
			
<script>
  $j(function(){
    /************
    * INFINITE SCROLL + MASONRY FOR CORREIOBRAZILIENSE 
    **************/
    var $container = $j('#block-container');
    var msnry;
    // layout Masonry again after all images have loaded
    $container.imagesLoaded(function(){
        $container.masonry({
            itemSelector: '.block',
      });
    });

    $container.infinitescroll({
      navSelector  : '#nav-below',    // selector for the paged navigation
      nextSelector : '#nav-below a',  // selector for the NEXT link (to page 2)
      itemSelector : '.block',     // selector for all items you'll retrieve
      loading: {
          finishedMsg: '...',
          img: 'http://retratobrasilia.com.br/wp-content/uploads/2014/08/loader.gif'
        }
      },
      // trigger Masonry as a callback
      function( newElements ) {
        // hide new items while they are loading
        var $newElems = $j( newElements ).css({ opacity: 0 });
        // ensure that images load before adding to masonry layout
        $newElems.imagesLoaded(function(){
          // show elems now they're ready
          $newElems.animate({ opacity: 1 });
          $container.masonry( 'appended', $newElems, true );
        });
    });
  });		
  </script>	
		<?php wp_footer(); ?>
	</body>
</html>