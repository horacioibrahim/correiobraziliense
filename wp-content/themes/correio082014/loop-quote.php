<?php
/**
 * correio template for displaying the Loop for the Quote-Post-Format
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */
?>

<div <?php post_class('block animated fadeIn masonry-brick'); ?>>
	<?php 
  		if ( catch_that_image() ) { 
  				//echo '<div>';
	  			echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
	  			echo '<img src="';
	  			echo catch_that_image();
	  			echo '" alt="" />';
	  			echo '</a>';
	  			//echo '</div>';
  		}
	?>	
	<div class="block-titles-wrap">
		<div class="block-titles">
			<h2 class="block-entry-title">
			<?php
				if ( is_singular() ) :
					the_title();
				else : 
			?>
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
				<?php
					the_title(); 
				?>
				</a>
			<?php

				endif; 
			?>
			</h2>
			<?php 
				if ( get_post_gallery() ) :
					echo get_post_gallery();
				endif;
			?>
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

	<div class="block-meta">
		<div class="block-comments">
			<?php 
				echo '<a href="'; the_permalink(); echo '" class="">';
			?>
			<i class="icon-comments"></i>
			<?php if ( comments_open() ) : ?>
			        <a href="<?php echo get_permalink($post->ID); ?>#disqus_thread" class="post-disqus">
			           <span class="dsq-postid"></span>
			           <?php echo $post->comment_count; ?>
			        </a>
			<?php endif; ?>	
		</div>
		<div class="block-permalink-wrap">
			<a class="block-permalink" href="<?php echo the_permalink(); ?>" title="" rel="bookmark">
				<i class="icon-link"></i>
			</a>	
		</div>	
	</div>

</div>