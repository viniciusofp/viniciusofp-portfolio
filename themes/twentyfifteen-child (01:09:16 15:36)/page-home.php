<?php
/* Template name: Home Page */
get_header(); ?>


<div class="container">
	<div class="row">
		<div id="content" class="col-sm-12">
			

			<?php include 'templates/quemsou.php' ?>

			<div class="row">
				<div class="col-xs-12 text-center">
					<h3 style="margin-top: 66px; color: #5D7BA5;"><em>Eu trabalho para transformar informação em conteúdo acessível - e atraente.</em></h3>
				</div>
			</div>

			<?php include 'templates/skills.php' ?>
			
			<?php include 'templates/work.php' ?>

			<?php include 'templates/cv.php' ?>


			

<?php get_footer(); ?>