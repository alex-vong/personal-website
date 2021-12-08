
<section class="writing">
	<inner-column>
		<div class="container">

		<h3 class="section-heading intro-voice">My Blogs</h3>
		<h2 class="second-level-heading">Some of The Ones I Like Anyways</h2>	

			<p class="body-copy intro">I made it a point to try and write as often as possible along my web developer journey. Writing has never been my strong suit and I've always felt self-conscious about talking about myself and what I have done. But over the last year I've realize that writing is such a powerful tool and asset in my goal of becoming a developer. I wrote these articles to talk about things I work on, past and present, and all the emotions and experience that come with it to better my understanding of the process. I hope that these articles can help others on their journey as well.</p>

			<div class="latest-blog blog">
				<?php include("projects-data.php") ?>

				<div class="article-grid">

					<?php foreach ($latestBlog as $blog) { 

						if (!$blog["demo"]) {
						include("article-grid.php");
						}

				 	 } ?>
			 	 </div>
			</div>


		<a href="https://alexvong.substack.com/" class="animated-line" target="_blank">
			<p class="fourth-level-heading">
				<span>View All Blogs on My Substack</span>
			</p>
		</a>

		</div>


 <?php include("contact-me.php") ?> 
	</inner-column>
</section>

