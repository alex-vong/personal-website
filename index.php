<!doctype html>


	<?php 

		$page = null;
		if ( isset ($_GET['page']) ) {
			$page = $_GET['page'];
		} else {
			$page = "home";

		}
	 ?>


<html lang="en">
	<?php include('head.php') ?>


	<body>
		<header>
			<?php include('masthead.php') ?>
		</header>


		<main>
	
			<?php if ($page === "home") {
				include("home.php");

			} ?>



			<?php if ($page === "about") {
				include("modules/about.php");
			} ?>



			<?php if ($page === "projects") {
				include("modules/projects.php");
			} ?>



			<?php if ($page === "experiments") {
				include("modules/experiments.php");
			} ?>



			<?php if ($page === "writing") {
				include("modules/writing.php");
			} ?>

		</main>


	</body>
	

</html>