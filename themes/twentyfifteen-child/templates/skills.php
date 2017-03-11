<div id="skills" class="row text-center transparent">
	<div class="col-sm-4">


		<?php

		    // Get the URL of this category
		    $category_link = get_category_link( '17' );
		?>

		<!-- Print a link to this category -->
		<a href="#design" title="Design">
	 		<i class="fa fa-pencil"></i>
	 	</a>
	 	<a href="#design" title="Design">
			<h3>Design Gráfico</h3>
		</a>
		<p class="lead"><span class="highlight">criação - diagramação - edição de imagem</span></p>
		<p><?php echo category_description( get_category_by_slug('design')->term_id ); ?></p>
	</div>
	<div class="col-sm-4">

		<?php

		    // Get the URL of this category
		    $category_link = get_category_link( '18' );
		?>

		<!-- Print a link to this category -->
		<a href="#web" title="Desenvolvimento Web">
	 		<i class="fa fa-code"></i>
	 	</a>
	 	<a href="#web" title="Desenvolvimento Web">
			<h3>Desenvolvimento Front-End</h3>
		</a>
		<p class="lead"><span class="highlight">criação de sites - email marketing - wordpress</span></p>
		<p><?php echo category_description( get_category_by_slug('web')->term_id ); ?></p>
	</div>
	<div class="col-sm-4">
		<?php

		    // Get the URL of this category
		    $category_link = get_category_link( '19' );
		?>
		<a href="#audiovisual" title="Audiovisual">
	 		<i class="fa fa-film"></i>
	 	</a>
	 	<a href="#audiovisual" title="Audiovisual">
			<h3>Audiovisual</h3>
		</a>
		<p class="lead"><span class="highlight">edição de vídeo - finalização - motion graphics</span></p>
		<p><?php echo category_description( get_category_by_slug('audiovisual')->term_id ); ?></p>
	</div>
</div>