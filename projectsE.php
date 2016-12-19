<!DOCTYPE html>
<html>
<?php
$page="projects";
?>
<?php
include_once "head.php";
?>

<body>
	<div id="main">
		<?php include_once "header.php"?>
		<div class="lang">
			<a rel="English" href="projectsE.php"> <img src="images/EN.png" alt="English" ></a>
			<a rel="Español" href="projectsS.php"> <img src="images/ES.png" alt="Español" ></a>

		</div>
		<div id="site_content">
			<div id="content">
				<div class="sidebar_container">
					<div class="sidebar">
						<?php include_once "navE.php" ?>
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->

				<div class="content_item">
                    <h2>Some of my works</h2>
					<div class="content_imagetext">
						<h2>PHP Scripts</h2>
						<div class="project">
						<h3>Project 1</h3>
							<p>In this project it's solved problem number 3 from project Euler. The problem asks for the biggest prime factor of any number.</p>
<a href="projects/problem3Csmart.php" download="">Download</a>


						</div>
						<div class="project">
						<h3>Project 2</h3>
							<p>This is a php Script to solve problem 6 from Poject Euler. The problem is to compare the square of the sum with the sum of the squares</p>
<a href="projects/Problem6.php" download="">Download</a>
						</div>
						<div class="project">
						<h3>Project 3</h3>
							<p>This script solves problem 8 from Project Euler. The objective is to find the biggest product of n consecutive digits in a number</p>
<a href="projects/P8FastC.php" download="">Download</a>

						</div>
					</div>
					<!--close content_imagetext-->


				</div>
				<!--close content_item-->
			</div>
			<!--close content-->
		</div>
		<!--close site_content-->
		<?php
		include_once "footer.php";
		?>
	</div>
	<!--close main-->
</body>

</html>