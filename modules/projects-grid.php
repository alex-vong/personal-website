


<div class="project-card">

	
	<div class="bullet">🌟</div>

	<div class="project-content">
		<h3 class="second-level-heading"><?=$project["name"]?></h3>
		<p class="body-copy"><?=$project["description"]?></p>
		
		<div class="links">
		<?php 
			if ($project["case-study"]) { ?>
				<a href="<?=$project["project-link"]?>">View Project</a>
				<div class="link-divider">/</div>
				<a href="<?=$project["case-study"]?>">View Case Study</a>
			<?php } else { ?>
				<a href="<?=$project["project-link"]?>">View Project</a>

			<?php }

		 ?>
	 </div>
	 </div>


</div> 