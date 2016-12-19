<!DOCTYPE html>
<html>
<?php
$page="me";
?>
<?php
include_once "head.php";
?>
<body>
	<div id="main">
		<?php include_once "header.php"?>
		<div class="lang">
			<a rel="English" href="meE.php"> <img src="images/EN.png" alt="English" ></a>
			<a rel="Español" href="meS.php"> <img src="images/ES.png" alt="Español" ></a>

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
					<div class="content_imagetext">
						<h1>Jaume Pons</h1>
						<figure><img src="images/Jaume.jpg" alt="Jaume Pons" />

						</figure>
						<p>I was born in 1990 in Menorca. When I finished my Bachiller studies I went to Ferrol to study Naval and Oceanic engineering. Even though I didn't finish my studies I learnt a lot of valuable things. During my stay in Ferrol I improved my english level and got a Cambridge C1 level. On my first years on Ferrol I took a course on structured programing in C that I finished with honors. During this course I found my passion for programing.</p>

<p>When I returned to Menorca in 2014 I retook my music studies on the music Conservatori of Menorca, where I graduated on professional degree of clarinet. In 2015 I started Development of Web Applications on IES Joan Ramis i Ramis.
                        On my first course I learned Java, HTML5 and CSS. I also learnt Object Oriented Programming</p>
                        <p>Nowadays I'm studying the second course where I'm learning PHP, JavaScript and to develop Android Apps.</p>
                        <p>My hobbies are RC planes and DIY projects using Arduino or similar boards. Currently I'm building a 4 axis CNC router using an Arduino as a controller.</p>
                        <p>Although I haven't worked as a programmer since I was 16 I have been working on summers. First in "Sociedad de correos y telegrafos" and in 2016 summer on Iberia Airport Services. This last summer has served to improve a lot my spoken english and learning how to work on a big team of workers, more than 200.</p>
				<p><figure><a href="Docs/curriculum_Jaume_Pons_Morillas.pdf" download=""><img class="logo" src="images/pdf.png" ></a>
				<figcaption>My CV</figcaption>
				</figure></p>
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