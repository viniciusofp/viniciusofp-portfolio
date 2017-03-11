<div id="folio" class="row">

<!-- WEB DEV -->

	<div class="col-xs-12 col-sm-6 col-sm-offset-3">
		<div class="spacer"></div>
		<a name="web"><h1 class="text-center"><i class="fa fa-code"></i> Desenvolvimento Web</h1> </a>
		<p class=" text-center"><span class="highlight">criação de sites - email marketing - wordpress - e-commerce</span></p>
		<div class="spacer"></div>
	</div>
	<?php
	$count = 0;
	$custom_query = new WP_Query(array( 'post__not_in' => array(238), 'orderby' => 'rand', 'category_name' => 'web' )); // exclude category 9
	while($custom_query->have_posts()) : $custom_query->the_post(); 
	$count++;
	$post_image_id = get_post_thumbnail_id($post->ID);
	if ($post_image_id) {
		$thumbnail = wp_get_attachment_image_src( $post_image_id, 'thumbnail', false);
		if ($thumbnail) (string)$thumbnail = $thumbnail[0];
	}
	if ($count % 4 == 0 || ($count - 1) % 4 == 0 || $count == 1) {
		echo '<div class="col-xs-12 col-sm-6 col-md-7">';
		
	}
	else {
		echo '<div class="col-xs-12 col-sm-6 col-md-5">';
	}
	
	?>
		
			<div class="post-home" style="background-image: url(<?php echo $thumbnail; ?>)">
				<a href="<?php the_permalink(); ?>">
				<div class="shade">
					<div>
						<h3><span><?php the_title(); ?></span></h3>

					</div>
				</div></a>
				
			</div>
				
		</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>

<!-- AUDIOVISUAL -->

	<div class="col-xs-12 col-sm-6 col-sm-offset-3">
		<div class="spacer"></div>
		<a name="audiovisual"><h1 class="text-center"><i class="fa fa-film"></i><br>Audiovisual</h1> </a>
		<p class=" text-center"><span class="highlight">produção - edição de vídeo - finalização - motion graphics</span></p>
		<div class="spacer"></div>
	</div>
	<?php
	$count = 0;
	$custom_query = new WP_Query(array( 'post__not_in' => array(238), 'orderby' => 'rand', 'category_name' => 'audiovisual' )); // exclude category 9
	while($custom_query->have_posts()) : $custom_query->the_post(); 
	$count++;
	$post_image_id = get_post_thumbnail_id($post->ID);
	if ($post_image_id) {
		$thumbnail = wp_get_attachment_image_src( $post_image_id, 'thumbnail', false);
		if ($thumbnail) (string)$thumbnail = $thumbnail[0];
	}
	if ($count % 4 == 0 || ($count - 1) % 4 == 0 || $count == 1) {
		echo '<div class="col-xs-12 col-sm-6 col-md-7">';
		
	}
	else {
		echo '<div class="col-xs-12 col-sm-6 col-md-5">';
	}
	
	?>
		
			<div class="post-home" style="background-image: url(<?php echo $thumbnail; ?>)">
				<a href="<?php the_permalink(); ?>">
				<div class="shade">
					<div>
						<h3><span><?php the_title(); ?></span></h3>
					</div>
				</div></a>
				
			</div>
				
		</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>

<!-- DESIGN -->

	<div class="col-xs-12 col-sm-6 col-sm-offset-3">
		<div class="spacer"></div>	
		<a name="design"><h1 class="text-center"><i class="fa fa-pencil"></i> Design</h1> </a>
		<p class=" text-center"><span class="highlight">criação - diagramação - edição de imagem</span></p>
		<div class="spacer"></div>
	</div>
	<?php
	$count = 0;
	$custom_query = new WP_Query(array( 'post__not_in' => array(238), 'orderby' => 'rand', 'category_name' => 'design' )); // exclude category 9
	while($custom_query->have_posts()) : $custom_query->the_post(); 
	$count++;
	$post_image_id = get_post_thumbnail_id($post->ID);
	if ($post_image_id) {
		$thumbnail = wp_get_attachment_image_src( $post_image_id, 'thumbnail', false);
		if ($thumbnail) (string)$thumbnail = $thumbnail[0];
	}
	if ($count % 4 == 0 || ($count - 1) % 4 == 0 || $count == 1) {
		echo '<div class="col-xs-12 col-sm-6 col-md-7">';
		
	}
	else {
		echo '<div class="col-xs-12 col-sm-6 col-md-5">';
	}
	
	?>
		
			<div class="post-home" style="background-image: url(<?php echo $thumbnail; ?>)">
				<a href="<?php the_permalink(); ?>">
				<div class="shade">
					<div>
						<h3><span><?php the_title(); ?></span></h3>
					</div>
				</div></a>
				
			</div>
				
		</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>

</div>
