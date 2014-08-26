<?php
/**
 * correio template for displaying the standard Loop
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */
?>

<div <?php post_class('block animated fadeIn masonry-brick'); ?>>
	<?php 
  		if ( catch_that_image() ) { 
  				// echo '<div>';
	  			echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
	  			echo '<img src="';
	  			echo catch_that_image();
	  			echo '" alt="" />';
	  			echo '</a>';
	  			// echo '</div>';
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
					$gallery = get_post_gallery($post->ID);
					echo $gallery;
					// $attachment_ids = correio082014_get_random_gallery_images();
					//echo do_shortcode('[ gallery columns="4" include="'.$attachment_ids.'" link="file" ]'); 
					//$gallery = get_post_gallery( get_the_ID(), false );
					/* $count = 0;

		            foreach( $gallery['src'] AS $src )
		            {
		            	if ( $count == 4 ) {
		            		break;
		            	}
		    ?>

		                <img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />
		                
		    <?php
		                $count += 1;
		    }	*/

				endif;			
			?>	
		</div><!-- .block-titles -->
		<div class="block-text"><?php

			if ( '' != get_the_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?><?php
			endif; ?>

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