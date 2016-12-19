<!DOCTYPE html>
<html>
<?php
$page="home";
?>
<?php
include_once "head.php";
?>
<body>
	<div id="main">
		<?php include_once "header.php"?>
		<div class="lang">
			<a rel="English" href="indexE.php"> <img src="images/EN.png" alt="English" ></a>
			<a rel="Español" href="indexS.php"> <img src="images/ES.png" alt="Español" ></a>

		</div>
		<div id="site_content">
			<div id="content">
				<div class="sidebar_container">
					<div class="sidebar">
						<?php include_once "navS.php" ?>
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
				<div class="content_item">
					<div class="content_imagetext">
						<h1>Jaume Pons</h1>
						<p>Actualmente estoy estudiando Desarrollo de Aplicaciones Web en el IES Joan Ramis i Ramis. Tengo un nivel alto en Java, Html y CSS</p>
						<p>Ahora mismo estoy aprendiendo PHP, Javascript y desarrollo de aplicaciones Android</p>
                        
					</div>
					<!--close content_imagetext-->
					<div class="content_imagetext">
						<h1>Algunos de mis trabajos</h1>
						<div class="project">
							<h3>Proyecto 1</h3>

							<p>En este script se resuelve el problema numero 3 del Proyecto Euler. El objetivo es encontrar el mayor factor primo</p>
							<a href="projects/problem3Csmart.php" download="">Descarga</a>


						</div>
						<div class="project">
							<h3>Proyecto 2</h3>
							<p>Este script php resuelve el problema 6 del proyecto Euler. El problema pide comparar la suma de los cuadrados con el cuadrado de la suma</p>
							<a href="projects/Problem6.php" download="">Descarga</a>
						</div>


						</div>
					

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