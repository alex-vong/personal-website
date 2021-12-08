<section class="container projects">
	<inner-column>
		<h3 class="section-heading intro-voice"> Projects</h3>
		<h2 class="second-level-heading">Some Things I've Built and Worked On</h2>	

	<projects-grid>

		<?php include("projects-data.php") ?>
		<?php foreach ($projects as $project) {

			if(!$project["demo"]) { 
			include('project-card.php');
			}

		} ?>
	</projects-grid>

	<div class="container bits">

		<h3 class="section-heading intro-voice">Experiments</h3>
		<h2 class="second-level-heading">Random Snippets of Code and Experimental Bits</h2>	


		 <div class="bits-grid">
		 	<!-- <?php include("projects-data.php") ?> -->

			<?php foreach ($bits as $bit) { 
				include("experiments-grid.php");
		 	 } ?>
		 	
		 </div>

	</div>
	
	 <?php include("contact-me.php") ?> 
	</inner-column>
</section>

