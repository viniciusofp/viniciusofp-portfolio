<?php
get_header(); ?>

<div class="container">
	<div class="row">
		<div id="content" class="col-sm-12">
			<a name="portfolio"><h1 class="text-center"><i class="fa fa-th"></i> <?php the_archive_title(false, false) ; ?></h1> </a>
			<div id="folio" class="row">
				<?php
				$count = 0;
				while(have_posts()) : the_post();
				$post_image_id = get_post_thumbnail_id($post->ID);
				if ($post_image_id) {
					$thumbnail = wp_get_attachment_image_src( $post_image_id, 'large', false);
					if ($thumbnail) (string)$thumbnail = $thumbnail[0];
				}
				if ($count % 4 == 0 ) {
					echo '<div class="col-xs-12 col-sm-6 col-md-8">';
					
				}
				elseif (($count + 1) % 4 == 0 ) {
					echo '<div class="col-xs-12 col-sm-6 col-md-8">';
					
				}
				else {
					echo '<div class="col-xs-12 col-sm-6 col-md-4">';
				}
				$count++;
				?>
					
						<div class="post-home" style="background-image: url(<?php echo $thumbnail; ?>)">
							<p class="text-center"><?php the_tags( '', ' - ', '<br />' ); ?></p>
							<a href="<?php the_permalink(); ?>">
							<div class="shade">
								<div>
									<h3><span><?php the_title(); ?></span></h3>
								</div>
								<?php echo $count;?>
							</div></a>
							
						</div>
							
					</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>
			</div>

			<?php include 'templates/skills.php' ?>
			<?php include 'templates/cv.php' ?>


<?php get_footer(); ?>
