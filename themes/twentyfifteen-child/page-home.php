<?php
/* Template name: Home Page */
get_header(); ?>


<div class="container-fluid">
	<div class="row">
		<div id="openScreen" class="col-md-12">
			<?php include 'templates/quemsou.php' ?>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div id="content" class="col-sm-12">

			<?php include 'templates/skills.php' ?>
			
			<?php include 'templates/work.php' ?>

			<?php include 'templates/cv.php' ?>
	</div>
</div>


			

<?php get_footer(); ?>