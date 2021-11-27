<section class="projects">
	<inner-column>

	<div class="container projects">
		<?php if ($page === "home") { ?>
			<h2 class="section-heading intro-voice">Work</h2>
		<?php } else { ?>
			<h2 class="section-heading top-level-heading">Work</h2>

		<?php } ?>

		 <p class="body-copy intro">Take a look at some of the projects I have worked on</p>

		 <div class="projects-grid">
		 	<?php include("projects-data.php") ?>

			<?php foreach ($projects as $project) { 
				include("projects-grid.php");
		 	 } ?>
		 	
		 </div>
		
	</div>
	
	 <?php include("contact-me.php") ?> 

</inner-column>
</section>

