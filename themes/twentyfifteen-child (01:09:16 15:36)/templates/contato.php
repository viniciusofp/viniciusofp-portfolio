<div class="container">
	<div id="contato" class="row">
		<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
			<a name="contato"><h1 class="">Contato</h1></a>
			<p class="lead">Obrigado pela visita.<br>Fique a vontade para entrar em contato e me contar sobre seu projeto.</p>
			<h4>Preencha o formulário ou envie um email para <em>viniciusofp @ gmail.com</em></h4>
			<hr>
			<?php 
			// WP_Query arguments
			$args = array (
				'page_id'                      => '243',
			);

			// The Query
			$the_query = new WP_Query( $args );
			?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
	
</div>