<div class="article-card">

	<div class="bullet">🌟</div>

	<div class="article-content">
		<a href="<?=$blog["link"]?>">
			<h3 class="sml-second-level-heading"><?=$blog["title"]?></h3>
		</a>

		<?php  
		if ( $blog["date"] ) { ?>
			<a href="<?=$blog["link"]?>">
				<p class="quiet-voice"><?=$blog["date"]?></p>
			</a>
		<?php } else { ?>
		<a href="<?=$blog["link"]?>" class="link">View</a>
		<?php } ?>
	</div>

</div>