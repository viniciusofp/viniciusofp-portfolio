<?php
/* Template name: Home Page V2 */
get_header('2'); ?>


<div class="container-fluid">
	<div class="row">
		<div id="side-header" class="hidden-xs col-sm-3">
			<ul>
				<li><a href="#">curriculum</a></li>
				<li><a href="#">design</a></li>
				<li><a href="#">audiovisual</a></li>
				<li><a href="#">desenvolvimento web</a></li>
				<li><a href="#">contato</a></li>
			</ul>
		</div>
			
		<div id="content" class="col-sm-9 col-sm-offset-3">
			

			<div class="row quemsou">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
					<div class="center-y">
						<h1>viniciusofp</h1>
						<h3><span>portfolio</span> </h3>
						<p class="lead">Comunicador visual, uso conhecimento em ferramentas de design gráfico<sup><a href="#">[1]</a></sup>, desenvolvimento web<sup><a href="#">[2]</a></sup> e audiovisual<sup><a href="#">[3]</a></sup> para aproximar marcas e projetos de seu público. Tenho experiência nas áreas de jornalismo<sup><a href="#" data-toggle="tooltip" data-placement="right" title="Sou graduando em jornalismo pela Escola de Comunicações e Artes da Universidade de São Paulo. Participo desde 2013 do coletivo Vaidapé, que busca construir uma nova alternativa de organização e linguagem para o jornalismo através da mídia impressa, digital, audiovisual e radiodfusão.">[4]</a></sup>, cinema<sup><a href="#">[5]</a></sup>, produção cultural<sup><a href="#">[6]</a></sup> e comunicação institucional<sup><a href="#">[7]</a></sup>.</p>	
						
						<script type="text/javascript">
						$(function () {
						  $('[data-toggle="tooltip"]').tooltip()
						})
						</script>

					</div>
				</div>
			</div>

			<?php // include 'templates/skills.php' ?>
			
			<div id="folio" class="row">
				<div class="col-xs-12">
					<a name="portfolio"><h1 class="text-center"><i class="fa fa-th"></i> Portfólio</h1> </a>
					<p class="lead text-center">Algumas das colaborações que já fiz</p>
				</div>
				<?php
				$count = 0;
				$custom_query = new WP_Query(array( 'post__not_in' => array(238) )); // exclude category 9
				while($custom_query->have_posts()) : $custom_query->the_post(); 
				$count++;
				$post_image_id = get_post_thumbnail_id($post->ID);
				if ($post_image_id) {
					$thumbnail = wp_get_attachment_image_src( $post_image_id, 'medium', false);
					if ($thumbnail) (string)$thumbnail = $thumbnail[0];
				}
				if ($count % 4 == 0 ) {
					echo '<div class="col-xs-12 col-sm-6 col-md-8">';
					
				}
				elseif (($count - 1) % 4 == 0 ) {
					echo '<div class="col-xs-12 col-sm-6 col-md-8">';
					
				}
				elseif ($count == 1 ) {
					echo '<div class="col-xs-12 col-sm-6 col-md-8">';
					
				}
				else {
					echo '<div class="col-xs-12 col-sm-6 col-md-4">';
				}
				
				?>
					
						<div class="post-home">
							<p class="text-center"><?php the_tags( '', ' - ', '<br />' ); ?></p>
							<a href="<?php the_permalink(); ?>">
							<div class="shade">
								<div>
									<h3 class="titulopost"><span><?php the_title(); ?></span></h3>
								</div>
							</div>
							<div class="filterbg-wrapper">
								<div class="filterbg" style="background-image: url(<?php echo $thumbnail; ?>)">
									
								</div>
							</div>
							</a>
							
						</div>
							
					</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>
			</div>


			<?php include 'templates/cv.php' ?>


<script type="text/javascript">

	$('.titulopost').each(function() {
    var word = $(this).html();
    var index = word.indexOf(' ');
    if(index == -1) {
        index = word.length;
    }
    $(this).html('<span class="first-word">' + word.substring(0, index) + '</span><br>' + word.substring(index, word.length));
});
</script>

<?php get_footer(); ?>