<?php
/**
 * correio template for displaying the Front-Page
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */

get_header(); ?>

	<div id="main" class="site-main blocks-page clearfix">
		<div id="primary" class="blocks-template">
			<div id="content" class="site-content blocks-content" role="main">
				<div class="blocks-wrap clearfix">
					<div class="block-container-wrap">
						<div class="block-container-inside clearfix">
							<section  id="block-container" class="masonry">
								<?php
									if ( have_posts() ) :

										while ( have_posts() ) : the_post();

											get_template_part( 'loop', '' ); // get_template_part( 'loop', get_post_format() );

										endwhile;

									else :

										get_template_part( 'loop', 'empty' );

									endif;
								?>
							</section>
							<div id="nav-below" style="opacity: 0;">
								<?php echo get_next_posts_link('Go to next page',4); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>