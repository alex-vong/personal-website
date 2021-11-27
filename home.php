<section class="home">
	<inner-column>
		<div class="landing container">

			<h2 class="section-heading top-level-heading main-heading">Hi, I'm Alex</h2>

			<p class="body-copy intro">
				I am a <span>web developer</span> passionate about creating  online experiences through <span>Design</span> and <span>Development</span>.
			</p>

			<p class="body-copy intro">
				 This is my site where I share all the projects I've worked on, past and present, as well as blogs talking about all things code. 
			</p>



			<p class="body-copy intro">
				Currently seeking employment as a <span>Front-End Web Developer</span>
			</p>

			<?php include("modules/contact-me.php") ?> 


		</div>


		<div class="whats-hot">
			<h3 class="section-heading second-level-heading">
				What's Hot Now
			</h3>

			<p class="body-copy wh-intro">
				I enjoy staying busy and working on new projects as well as continue to build and expand projects I have worked in the past. Here's what I am currently working on:
			</p>

			<h4 class="third-level-heading card-heading">
				In Projects
			</h4>
			<projects-grid>


				<?php include("modules/projects-data.php") ?>


				<?php foreach ($projects as $project) {

					if($project["hot"]) { ?>

						<project-card>
							<a href="<?=$project["project-link"]?>">
								<picture>
									<img src="<?=$project["image"]?>" alt="">
								</picture>
							</a>

							<a href="<?=$project["project-link"]?>">
								<h4 class="third-level-heading animated-line">
									<span>
										<?=$project["name"]?>
									</span>
								</h4>
							</a>

							<p class="body-copy"><?=$project["description"]?></p>

							<div class="card-links">
								<a href="<?=$project["project-link"]?>" class="animated-line">
									<span>View Project</span>
								</a>

								<div class="slash">/</div>

								<a href="<?=$project["case-study"]?>" class="animated-line">
									<span>View Case Study</span>
								</a>

							</div>
							
						</project-card>

				<?php }

				}


				?>

			</projects-grid>
		</div>

	</inner-column>
</section>
</section>