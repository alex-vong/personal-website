
<h3 class="section-heading intro-voice">
	Blogs
</h3>

<h2 class="second-level-heading">
	Here Are Some Recent Post.
</h2>

<div class="article-grid">
	<?php include("modules/projects-data.php") ?>

		<?php foreach ($latestBlog as $blog) { 

			if(!$blog["demo"] && $blog["front-page"]) { 
			include('article-grid.php');
			}

		 } ?>
</div>


<a href="?page=writings" class="animated-line">
	<p class="fourth-level-heading">
		<span>View All Blogs</span>
	</p>
</a>

