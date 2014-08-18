<!DOCTYPE html>
<html  <?php language_attributes();?>>
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo get_option('fullby_description'); ?>" />
    
    <!-- Favicon -->
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" type="image/x-icon"> 

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
  
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- Analitics -->
	<?php if (get_option('fullby_analytics') <> "") { echo get_option('fullby_analytics'); } ?>
    
	<?php wp_head(); ?> 
	
</head>
<body <?php body_class(); ?>>

	<div class="navigation-wrap clearfix">
		<div class="navigation-wrap-inside clearfix">
			<nav role="navigation" class="site-navigation main-navigation">
				<h1 class="assistive-text"><i class="icon-reorder"></i> Menu</h1>
				<div class="assistive-text skip-link">
					<a href="#content">Skip to content</a>
				</div>
				<div class="menu-header-container">
					<ul id="menu-header" class="menu">
						<li id="menu-item-1282" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1282">
							<a href="http://publisherdemo.wordpress.com/">Home</a>
						</li>
						<li id="menu-item-1283" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1283">
							<a href="http://publisherdemo.wordpress.com/about-publisher/">About</a>
						</li>
						<li id="menu-item-1320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1320">
							<a href="http://publisherdemo.wordpress.com/style-guide/">Style Guide</a>
							<ul class="sub-menu">
								<li id="menu-item-1191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1191"><a href="http://publisherdemo.wordpress.com/image-alignment/">Image Styling</a></li>
								<li id="menu-item-1278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1278"><a href="http://publisherdemo.wordpress.com/full-width-page-template/">Full Width Page</a></li>
								<li id="menu-item-1321" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1321"><a href="http://publisherdemo.wordpress.com/style-guide/">Typography</a></li>
							</ul>
						</li>
						<li id="menu-item-1187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1187">
							<a href="http://publisherdemo.wordpress.com/contact/">Contact</a>
						</li>
					</ul>
				</div>
			</nav><!-- .site-navigation .main-navigation -->

			<!-- Grab header icons template -->
			
			<div class="header-search">
				<ul class="toggle-icons">
					<li>
						<a class="toggle-social current" href="#" title="Links">Links</a>
					</li>
					<li>
						<a class="toggle-search" href="#" title="Search">Search</a>
					</li>
				</ul>

				<div class="toggle-boxes">
					<div class="toggle-box toggle-box-social">
						<div class="icons">
							<div class="icons-widget">
								<div class="icon-links">
									<a href="http://twitter.com/mikemcalister" class="twitter-icon" title="Twitter"><i class="icon-twitter-sign"></i></a>
									<a href="#" class="facebook-icon" title="Facebook"><i class="icon-facebook-sign"></i></a>
									<a href="http://instagram.com/mikemcalister" class="tumblr-instagram" title="Instagram"><i class="icon-instagram"></i></a>
									<a href="#" class="dribbble-icon" title="Dribbble"><i class="icon-dribbble"></i></a>
									<a href="#" class="pinterest-icon" title="Pinterest"><i class="icon-pinterest"></i></a>
									<a href="#" class="youtube-icon" title="YouTube"><i class="icon-youtube-sign"></i></a>
								</div><!-- .icon-links -->
							</div><!-- .icons-widget -->
						</div><!-- .icons -->
					</div><!-- .toggle-box -->
					
					<div class="toggle-box toggle-box-search">
						<form method="get" action="http://publisherdemo.wordpress.com/" role="search">
							<label for="header-search-submit" class="assistive-text">Search</label>
							<input class="field" name="s" value="" placeholder="Type here and press enter." type="text">
						</form>
					</div><!-- .toggle-box -->
				</div><!-- .toggle-boxes -->
			</div><!-- .header-search -->		</div><!-- .navigation-wrap-inside -->
	</div><!-- .navigation-wrap -->

	<header id="masthead" class="site-header" role="banner" style="background-image: url('http://publisherdemo.files.wordpress.com/2013/08/trees.jpg');">
		<div class="header-wrap">
			<div class="hgroup">
				<h1 class="site-title animated flipInY"><a href="http://publisherdemo.wordpress.com/" title="Publisher" rel="home">Publisher</a></h1>
				<h2 class="site-description animated fadeIn">Collect &amp; Share Your Digital Media</h2>
			</div>
		</div><!-- .header-wrap -->
	</header><!-- #masthead .site-header -->
    
    <?php if (is_home()) { ?>
    
    	 <?php if (!is_paged()){ ?> 
    
	    	 <div class="row featured">
    
					<?php
					$specialPosts = new WP_Query();
					$specialPosts->query('tag=featured&showposts=3');
					?>
					
					<?php if ($specialPosts->have_posts()) : while($specialPosts->have_posts()) : $specialPosts->the_post(); ?>
			  
					    <div class="col-sm-4 col-md-4 item-featured">
					    
					    	
							<a href="<?php the_permalink(); ?>">
				
					    		<div class="caption">
						    		<div class="cat"><span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span></div>
						    		<div class="date"><i class="fa fa-clock-o"></i> <?php the_time('j M , Y') ?> &nbsp;
						    		
						    			<?php 
										$video = get_post_meta($post->ID, 'fullby_video', true );
										
										if($video != '') { ?>
						             			
						             		<i class="fa fa-video-camera"></i> Video
						             			
						             	<?php } else if (strpos($post->post_content,'[gallery') !== false) { ?>
						             			
						             		<i class="fa fa-th"></i> Gallery
			
					             		<?php } else {?>
		
					             		<?php } ?>

						    		
						    		</div>
						    		
						    		<h2 class="title"><?php the_title(); ?></h2>
						    		
					    		</div>

				                <?php $video = get_post_meta($post->ID, 'fullby_video', true );
					  
								if($video != '') {?>
					
									 <img class="yt-featured" src="http://img.youtube.com/vi/<?php echo $video ?>/hqdefault.jpg" class="grid-cop"/>
										
								<?php 				                 
		                   
				             	} else if ( has_post_thumbnail() ) { ?>
			
			                        <?php the_post_thumbnail('quad', array('class' => 'quad')); ?>
			                        				   
			                    <?php } ?>
						    	
						    </a>
						
						</div>
					
					<?php endwhile;  else : ?>
			
						<p>Sorry, no posts matched your criteria.</p>

					<?php endif; ?>	
				 		
				</div>	
				
			<?php } else { ?>
			
				<div class="row spacer"></div>	
			
			<?php } // end if(!is_paged) ?>
				
	<?php } else { ?>	
	
		<div class="row spacer"></div>		   
			
	<?php  } // end if(is_home) ?>
	
	<div class="navbar navbar-inverse navbar-sub">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        
        <div  id="submenu" class="collapse navbar-collapse">
          <?php /* Secondary navigation */
			wp_nav_menu( array(
			  'menu' => 'sub',
			  'depth' => 2,
			  'container' => false,
			  'menu_class' => 'nav navbar-nav',
			  //Process nav menu using our custom nav walker
			  'walker' => new wp_bootstrap_navwalker())
			);
			?>
			
			<div class="col-sm-3 col-md-3 pull-right search-cont">
		        <form class="navbar-form" role="search" method="get" action="<?php echo home_url() ; ?>">
			        <div class="input-group">
			            <input type="text" class="form-control" placeholder="Search" name="s" id="srch-term">
			            <div class="input-group-btn">
			                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			            </div>
			        </div>
		        </form>
	        </div>
	        
        </div><!--/.nav-collapse -->

	</div>