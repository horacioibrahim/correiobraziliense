<?php
/**
 * correio template for displaying the header
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie ie-no-support" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Retrato Brasília</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/scripts.js"></script>
	</head>
	<?php if ( !have_posts() ) { $no_results='hipy-search-no-results'; } else { $no_results = "hipy-search-results" ;} ?>

	<body onorientationchange="updateOrientation();" id="page" <?php body_class($no_results); ?>>
		<div id="menu-mocado-wrap">
			<div class="menu-mocado">
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
			<div class="search-wrapper">
				<form method="get" action="<?php echo home_url( '/' ); ?>" role="search"  class="hipy">
					<input id="s" class="field" type="search" name="s" placeholder="Pesquise..." >
				</form>	
			</div>

			</div>		
		</div>
		<div class="site">
			<?php get_template_part( 'header', 'top' ); ?>

			<header class="site-header">
				<a id="menu-mobile" href="#"><i class="icon-reorder" style=""></i></a>			
				<div class="header-wrap">
					<div class="hgroup">
						<span class="site-description-top animated fadeIn">Banco do Brasil <small>apresenta e patrocina</small></span>
						<h1 class="site-title animated flipInY site-title-logo">
							<a href="<?php echo home_url( '/' ); ?>" title="Retrato Brasília" rel="home">
								<img src="<?php bloginfo("template_url"); ?>/images/logo.png" />
							</a>
						</h1>
						<span class="site-description animated fadeIn"><?php bloginfo( 'description' ); ?></span>
					</div>

					<div class="hgroup-partners">
						<div class="logo-part logo-bb">
						<img src="<?php bloginfo("template_url"); ?>/images/partners.png" /></div>
					</div>

				</div>		
<!-- mobile menu -->


			</header>



