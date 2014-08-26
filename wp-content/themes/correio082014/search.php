<?php
/**
 * correio template for displaying Search-Results-Pages
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */

get_header(); ?>


<div id="main" class=<?php if ( !have_posts() ) { echo "site-main blocks-page clearfix hipy-search-no-results"; } 
			else { echo "site-main blocks-page clearfix";} ?>>
	<div class="archive-title">
		<h1 ><?php printf( __( 'Resultados para: %s', 'correio082014' ), get_search_query() ); ?></h1>
	</div>
	<div id="primary<?php if ( !have_posts() ) { echo '-empty'; } ?>" class="<?php if ( !have_posts() ) { echo 'hipy-empty'; } ?>">
		<div id="content" class="site-content" role="main">
							<?php
								if ( have_posts() ) : 
							?>		
								<div class="block-container-wrap">
									<div class="block-container-inside clearfix">
										<section  id="block-container" class="masonry" >
										<?php				
												while ( have_posts() ) : the_post();

													get_template_part( 'loop', '' ); //get_post_format()

												endwhile;
										?>
										</section>
										<div id="nav-below" style="opacity: 0;">
											<?php  
											 $next = get_next_posts_link();
											 preg_match_all('~<a(.*?)href="([^"]+)"(.*?)>~', $next, $matches);
											 $link = $matches[2][0];
											 $rel_path = correio082014_get_relative_path_url($link);
											 ?>
											 <a href="<?php echo $rel_path; ?>" />Next post </a>
										</div>									
									</div>
								</div>
		</div>
		<!-- empty -->
		<?php
			else :
				
				get_template_part( 'loop', 'empty' );

			endif;		
		?>
	</div>
</div>


<?php get_footer(); ?>