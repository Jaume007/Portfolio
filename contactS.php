<!DOCTYPE html>
<html>
    <?php
$page="contact";
?>
	<?php
	include_once "head.php";
	?>
<body>
	<div id="main">
		<?php include_once "header.php"?>
        <div class="lang">
            <a rel="English" href="contactE.php"> <img src="images/EN.png" alt="English" ></a>
            <a rel="Español" href="contactS.php"> <img src="images/ES.png" alt="Español" ></a>

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
					<div class="form_settings">
					<form
						id="contacto"
							method="get" action="procesa.php">
						<fieldset>
							<legend>Contacta conmigo</legend>
							<p><span><label for="nombre">Nombre</label></span>
								<input id="nombre" type="text" name="nombre" value="" required="required" />
							</p>
							<p><span><label for="mail">Email</label></span>
								<input id="mail" type="email" name="mail" value="" required="required"/>
							</p>
							<p><span><label for="mensaje">Mensaje</label></span>
								<textarea id="mensaje" rows="8" cols="50" name="mensaje" required="required"></textarea>
							</p>
							
							<input class="submit" type="submit" value="Enviar" />
						</fieldset>
						</form>
					</div>
					<!--close form_settings-->
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