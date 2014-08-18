<?php
/**
 * correio Index template
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */

get_header(); ?>

<div id="main" class="site-main clearfix">
	<div id="primary" class="content-area">
		<div id="content" class="site-content container clearfix" role="main">
		<?php
			if ( have_posts() ):

				while ( have_posts() ) : the_post();

					get_template_part( 'loop', get_post_format() );

					wp_link_pages(
						array(
							'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'correio082014' ), get_the_title() ) . '<br />',
							'after'            => '</p></div>',
							'next_or_number'   => 'number',
							'separator'        => ' ',
							'pagelink'         => __( '&raquo; Part %', 'correio082014' ),
						)
					);

				endwhile;

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>
		<!-- <div class="pagination">

			<?php get_template_part( 'template-part', 'pagination' ); ?>

		</div> -->
		</div>
	</div>
</div>

<?php get_footer(); ?>