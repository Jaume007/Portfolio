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
						<?php include_once "navS.php" ?>
					</div>
					<!--close sidebar-->
				</div>
				<!--close sidebar_container-->
				<div class="content_item">
					<div class="content_imagetext">
						<h1>Jaume Pons</h1>
						<figure><img src="images/Jaume.jpg" alt="Jaume Pons" />

						</figure>
						<p>Naci en el 1990 en Menorca. Cuando terminé mis estudios de Bachiller me fui a Ferrol a estudiar Ingenieria Naval y Oceánica. A pesar de no terminar los estudios aprendí mucho. Mientras estuve en Ferrol mejore mi nivel de Inglés y obtuve el grado C1 de Cambridge. En mis primeros años en Ferrol hice una asignatura de programación estructurada en C en la que obtuve matricula de Honor. Mientras cursaba la asignatura descubri mi pasión por programar.</p>
						<p>Al volver a Menorca en el 2014 retome mis estudios de grado profesional en el Conservatorio de Menorca, donde me gradue en la especialidad de clarinete. En el 2015 inicié mis estudios en Desarrollo de Aplicaciones Web en el IES Joan Ramis i Ramis.
						En el primer curso aprendí Java, HTML5 y CSS. Tambien aprendí programacion Orientada a Objetos.</p>
						<p>Hoy en dia estudio el segundo curso donde aprendo PHP, JavaScript y desarrollo de aplicaciones Android.</p>
                        <p>Mis hobbies son los aviones de RC y los proyectos DIY (hazlo tu mismo) usando placas arduino o similares. Actualmente estoy construyendo un router CNC de 4 ejes utilizando un Arduino como controlador.</p>
						<p>A pesar de no haver trabajado como programador desde que tenia 16 años he trabajado los veranos. Primero en Sociedad Estatal de correos y telegrafos y el verano de 2016 en Iberia Servicios Aeroportuarios. Este ultimo verano he mejorado mi nivel de conversacion de ingles y he aprendido a trabajar en un equipo de mas de 200 trabajadores.</p>
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