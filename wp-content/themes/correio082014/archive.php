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
		<section id="block-container" class="masonry">
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

<?php get_footer(); ?>