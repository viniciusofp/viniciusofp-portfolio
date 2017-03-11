<?php
get_header();
?>


<div class="container single">
	<div class="row">

				
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="posthead">
					<h2><?php the_title(); ?></h2>	
				</div>
				
				<?php the_content(); ?>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>

	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php include 'templates/skills.php' ?>
			<?php include 'templates/work.php' ?>

		</div>
	</div>
</div>



<?php get_footer(); ?>