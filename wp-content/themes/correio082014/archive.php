<?php
/**
 * correio template for displaying Archives
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */

get_header(); ?>

<div id="main" class="site-main blocks-page clearfix <?php if ( !have_posts() ) { echo 'hipy-search-no-results'; } ?>">
	<div class="archive-title">
			<h1>
				<?php
					if ( is_category() ):
						printf( __( 'Resultados para: %s', 'correio082014' ), single_cat_title( '', false ) );

					elseif ( is_tag() ):
						printf( __( 'Resultados para tag: %s', 'correio082014' ), single_tag_title( '', false ) );

					elseif ( is_tax() ):
						$term     = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
						$taxonomy = get_taxonomy( get_query_var( 'taxonomy' ) );
						printf( __( '%s Archives: %s', 'correio082014' ), $taxonomy->labels->singular_name, $term->name );

					elseif ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'correio082014' ), get_the_date() );

					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'correio082014' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'correio082014' ) ) );

					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'correio082014' ), get_the_date( _x( 'Y', 'yearly archives date format', 'correio082014' ) ) );

					elseif ( is_author() ) : the_post();
						printf( __( 'Todos os posts por %s', 'correio082014' ), get_the_author() );

					else :
						_e( 'Archives', 'correio082014' );

					endif;
				?>
			</h1>
	</div>
	<div id="primary<?php if ( !have_posts() ) { echo '-empty'; } ?>" class="<?php if ( !have_posts() ) { echo 'hipy-empty'; } ?>">
		<div id="content" class="site-content" role="main">
				<div class="block-container-wrap">
					<div class="block-container-inside clearfix">
						<section  id="block-container" class="masonry" >
							<?php
								if ( have_posts() ) :

									while ( have_posts() ) : the_post();

										get_template_part( 'loop', '' ); //get_post_format()

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