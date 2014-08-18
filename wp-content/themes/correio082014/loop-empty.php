<?php
/**
 * correio template for displaying an empty Loop
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */
?>

<div id="content" class="site-content container clearfix" role="main">

	<header class="entry-header">
		<div class="hgroup">
			<h1 class="entry-title"><?php _e( 'Oops! Nada encontrado por aqui', 'correio082014' ); ?></h1>
		</div>
	</header>

	<div class="block-text">
		<div class="content-section">
			<div id="content-wrap">
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p>
						<?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'correio082014' ), admin_url( 'post-new.php' ) ); ?>
					</p>

				<?php elseif ( is_search() ) : ?>

					<p>
						<?php _e( 'Desculpe-nos, mas nada foi encontrado com os termos pesquisados. Por favor, tente uma pesquisa diferente.', 'correio082014' ); ?>
					</p>

					<?php get_search_form(); ?>

				<?php else : ?>

					<p>
						<?php _e( 'Desculpe-nos. Não encontramos o que você estava procurando. Faça uma pesquisa para obter ajuda.', 'correio082014' ); ?>
					</p>

					<?php get_search_form(); ?>

				<?php endif; ?>
			</div>

		</div>

	</div>

</div>