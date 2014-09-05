<div class="navigation-wrap clearfix">
		<div class="navigation-wrap-inside clearfix">
			<nav role="navigation" class="site-navigation main-navigation">
				<h1 class="assistive-text"><i class="icon-reorder"></i> Menu</h1>
				<div class="assistive-text skip-link">
					<a href="#content">Skip to content</a>
				</div>
				<!-- tophead desktop -->
					<div class="menu">
					<?php
						$nav_menu = wp_nav_menu(
							array(
								'container' => 'nav',
								'container_class' => 'main-menu',
								'items_wrap' => '<ul class="%2$s">%3$s</ul>',
								'theme_location' => 'main-menu',
								'fallback_cb' => '__return_false',
							)
						); 
					?>

					</div>
			</nav>
			<!-- .site-navigation .main-navigation -->

			<!-- Grab header icons template -->
			
			<div class="header-search">
				<!-- btn actions topmnu -->
				<!-- btn actions topmnu -->
				<!-- btns social -->
				<div class="icons-widget">
					<div class="icon-links">
						<a href="https://www.facebook.com/retratobrasilia" class="facebook-icon" title="Facebook">
							<i class="icon-facebook"></i>
						</a>
						<a href="http://instagram.com/retratobrasilia" class="tumblr-instagram" title="Instagram">
							<i class="icon-instagram"></i>
						</a>
					</div><!-- .icon-links -->
				</div>				
				<div class="toggle-boxes">
					<!-- btns social -->
					<!-- show/hide search input-->
					<div class="toggle-box toggle-box-search">
						<form method="get" action="<?php echo home_url( '/' ); ?>" role="search"  class="hipy">
						  <input id="s" class="field" type="search" name="s" placeholder="Pesquise..." >
						</form>						
					</div><!-- .toggle-box -->
					<!-- show/hide search input-->
				</div><!-- .toggle-boxes -->
			</div><!-- .header-search -->		
		</div><!-- .navigation-wrap-inside -->
</div>
