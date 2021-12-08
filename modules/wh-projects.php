<h3 class="section-heading intro-voice">
Projects
</h3>

<h2 class="second-level-heading">
	I Like to Build Things. Here Are a Few.
</h2>


<div class="wh-projects">
	<projects-grid>
		<?php include("modules/projects-data.php") ?>
		<?php foreach ($projects as $project) {

			if($project["hot"]) { 
				include('project-card.php');
			 }

		} ?>

	</projects-grid>

</div>

<a href="?page=projects" class="animated-line" class="view-all-projects">
	<p class="fourth-level-heading">
		<span >View All Projects</span>
	</p>
</a>



