<?php get_header(); ?>		

	<div id="main" class="site-main blocks-page clearfix">
		<div id="primary" class="blocks-template">
			<div id="content" class="site-content blocks-content" role="main">
				<div class="blocks-wrap clearfix">
					<!-- Grab Blocks Template -->
					<div class="block-container-wrap">
						<div class="block-container-inside clearfix">
							<section class="masonry" style="position: relative; height: 1694.53px;" id="block-container">
								<!-- loop posts -->
								<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
				
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<div class="ribbon-wrap">
											<div class="ribbon"><i class="icon-pushpin"></i></div>
											</div>
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<a class="block-thumb" href="<?php the_permalink(); ?>" rel="bookmark">
												<?php the_post_thumbnail('medium', array('class' => 'grid-cop')); ?>
											</a>
											<div class="block-titles-wrap">
												<div class="block-titles">
													<h2 class="block-entry-title">
														<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
													</h2>
												</div><!-- .block-titles -->
												<!-- .block-titles -->
												<div class="block-text">
												<!-- Bring in galleries or objects before more tag -->
													<?php the_content('More...');?>
													<p> 
														<a href="http://publisherdemo.wordpress.com/2013/06/29/heydays-branding/#more-474" class="more-link">Continue reading 
														<span class="meta-nav">→</span>
														</a>
													</p>
												</div><!-- .block-text -->
											</div>
										</div>
											<div class="block-meta">
												<div class="block-comments">
													<a href="http://publisherdemo.wordpress.com/2013/06/29/heydays-branding/#single-tabs" title="Permalink to Awesome Branding Package by&nbsp;Heydays comments"><i class="icon-comment"></i> 2</a>
												</div>

												<div class="block-author-link">
													<i class="icon-pencil"></i> <a href="http://publisherdemo.wordpress.com/author/okaythemes/" title="Posts by Mike McAlister" rel="author">Mike McAlister</a>		</div>

												<a class="block-permalink" href="http://publisherdemo.wordpress.com/2013/06/29/heydays-branding/" title="Permalink to Awesome Branding Package by&nbsp;Heydays" rel="bookmark"><i class="icon-link"></i></a>
											</div><!-- .block-meta -->
									</div>
						</section>							
						
			<?php endwhile; ?>
	        <?php else : ?>

	                <p>Sorry, no posts matched your criteria.</p>

	        <?php endif; ?> 

		</div>	

		<div class="pagination">
		
			<?php
			global $wp_query;
			
			$big = 999999999; // need an unlikely integer
			
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );
			?>
			
		</div>
			
	</div>
	
	<div class="col-md-3 sidebar">

		<?php get_sidebar( 'primary' ); ?>		
		    
	</div>
	
<?php get_footer(); ?>	