
<section class="home">
	<inner-column>
		<div class="container">
			<?php if ($page === "home") { ?>
				<h2 class="section-heading intro-voice">Writing</h2>
			<?php } else { ?>
				<h2 class="section-heading top-level-heading">Writing</h2>

			<?php } ?>

			<p class="body-copy intro">I made it a point to try and write as often as possible along my web developer journey. Writing has never been my strong suit and I've always felt self-conscious about talking about myself and what I have done. But over the last year I've realize that writing is such a powerful tool and asset in my goal of becoming a developer. I wrote these articles to talk about things I work on, past and present, and all the emotions and experience that come with it to better my understanding of the process. I hope that these articles can help others on their journey as well.</p>

			<div class="latest-blog blog">
				<h3 class="second-level-heading heading-3">
					Latest Blogs
				</h3>

				<?php include("projects-data.php") ?>

				<div class="article-grid">

					<?php foreach ($latestBlog as $blog) { 
						include("article-grid.php");
				 	 } ?>
			 	 </div>
			</div>

			<div class="favorite-blog blog">
				<h3 class="second-level-heading heading-3">
					Favorites
				</h3>

			<div class="article-grid">

					<?php foreach ($favoriteBlog as $blog) { 
						include("article-grid.php");
				 	 } ?>
			 	 </div>
			</div>





		</div>


 <?php include("contact-me.php") ?> 
	</inner-column>
</section>
