<?php
/**
 * correio template for displaying Single-Posts
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */

get_header(); ?>
    
	<div id="main" class="site-main clearfix">
		<div id="primary">
		<?php $postid = get_the_ID(); ?> 
			<div id="content" class="site-content" role="main">
				<div <?php post_class(); ?>>
					<?php 
				  		if ( catch_that_image() ) { 
					  			echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
					  			echo '<img src="';
					  			echo catch_that_image();
					  			echo '" alt="" />';
					  			echo '</a>';
				  		}
					?>			
										
						<?php
							if ( have_posts() ) : the_post();

						?>

							<div class="block-titles-wrap">
								<div class="block-titles">
									<div class="block-date">
									<?php the_time('F j, Y'); ?> - 
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
									</div>
									<h1 class="block-entry-title">
										<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
										<?php the_title(); ?>
										</a>
									</h1>
								</div><!-- .block-titles -->
								<div class="block-text">

									<?php if ( is_front_page() || is_category() || is_archive() || is_search() ) : ?>

										<?php the_excerpt(); ?>

									<?php else : ?>

										<?php the_content( __( 'Continue reading &raquo', 'correio082014' ) ); ?>

									<?php endif; ?>

									<?php
										wp_link_pages(
											array(
												'before'           => '<div class="linked-page-nav"><p>'. __( 'This article has more parts: ', 'correio082014' ),
												'after'            => '</p></div>',
												'next_or_number'   => 'number',
												'separator'        => ' ',
												'pagelink'         => __( '&lt;%&gt;', 'correio082014' ),
											)
										);
									?>
								</div>		
							</div>						

							<?php

								else :

									get_template_part( 'loop', 'empty' );

								endif;
							?>
				</div>
				<!-- ajustes -->
					<div class="content-section">
						<div id="content-wrap">
							<div class="single-tab">
								<div id="single-tabs">
									<ul class="single-tab-nav">
										<li class="active"><a href="#tab-1"><i class="icon-comment"></i> <span>Comentários</span></a></li>
										<li><a href="#tab-2"><i class="icon-user"></i> <span>Postado por</span></a></li>
									</ul>

									<!-- If comments are open or we have at least one comment, load up the comment template. -->
									<div style="display: block;" id="tab-1" class="comments-section post-tab clearfix">							
											<?php comments_template(); ?> 
									</div><!-- comment section -->
														
														 	
									<div style="display: none;" id="tab-2" class="author-section post-tab clearfix">
										<div id="author-info">
											<!-- If author has a bio, show it. -->
												<div class="author-profile">
													<div id="author-avatar">
														<?php 
															$default_avatar = get_template_directory_uri() . '/images/user_unknown.png' ;
   															echo get_avatar( get_the_author_meta('user_email'), $size = '100', $default = $default_avatar  ); 
   														?>
													</div>

													<div id="author-description">
														<h2>Sobre <?php the_author_meta( 'display_name' ); ?></h2>
														<p><?php the_author_description(); ?></p>
													</div>
													<div class="clear"></div>
												</div>
											
											<div class="author-posts">
												<h3>Últimos Posts de <?php the_author_meta( 'display_name' ); ?></h3>
												<?php echo get_related_author_posts(); ?>
											</div><!-- author-posts -->

										</div><!-- author-info -->
									</div><!-- author-section -->

								</div><!-- .single-tab -->
							</div><!-- #content-wrap -->
						</div>
						<!-- ajustes -->
					</div>
			</div>
		</div>
		<div id="secondary" class="widget-area" role="complementary">
			<!-- recents posts -->
			<aside id="recent-posts-2" class="widget widget_recent_entries">		
				<h2 class="widget-title">Posts Recentes</h2>		
				<ul>
					<?php
						$recent_posts = wp_get_recent_posts();
						foreach( $recent_posts as $recent ){
							echo '<li><i class="icon-angle-right"></i><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
						}
					?>
				</ul>
			</aside>						
		</div>



<?php get_footer(); ?>