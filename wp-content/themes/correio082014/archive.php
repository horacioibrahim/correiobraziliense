<?php
/**
 * correio template for displaying Archives
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */

get_header(); ?>

<div id="main" class="site-main clearfix">
	<div id="primary" class="<?php if ( !have_posts() ) { echo 'hipy-empty'; } ?>">
		<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'loop', '' ); //get_post_format()

				endwhile;

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>
	</div>
</div>	

<?php get_footer(); ?>