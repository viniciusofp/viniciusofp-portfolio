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
	if ($count % 4 == 0 || ($count - 1) % 4 == 0 || $count == 1) {
		echo '<div class="col-xs-12 col-sm-6 col-md-8">';
		
	}
	else {
		echo '<div class="col-xs-12 col-sm-6 col-md-4">';
	}
	
	?>
		
			<div class="post-home" style="background-image: url(<?php echo $thumbnail; ?>)">
				<p class="text-center"><?php the_tags( '', ' - ', '<br />' ); ?></p>
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
