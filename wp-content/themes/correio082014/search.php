<?php
/**
 * correio template for displaying Search-Results-Pages
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */

get_header(); ?>


<div id="main" class="site-main blocks-page clearfix <?php if ( !have_posts() ) { echo 'hipy-search-no-results'; } ?>">
	<div class="archive-title">
		<h1 ><?php printf( __( 'Resultados para: %s', 'correio082014' ), get_search_query() ); ?></h1>
	</div>
	<div id="primary<?php if ( !have_posts() ) { echo '-empty'; } ?>" class="<?php if ( !have_posts() ) { echo 'hipy-empty'; } ?>">
		<div id="content" class="site-content" role="main">
				<div class="block-container-wrap">
					<div class="block-container-inside clearfix">
						<section  id="block-container" class="masonry" >
							<?php
								if ( have_posts() ) :

									while ( have_posts() ) : the_post();

										get_template_part( 'loop', get_post_format() );

									endwhile;

								else :

									get_template_part( 'loop', 'empty' );

								endif;
							?>
						</section>
					</div>
				</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>