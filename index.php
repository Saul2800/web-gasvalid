<?php
//insertar aqui el correo
$destino= "algo@algo.com";
$asunto="gasvalid";
$correo =$_POST['email'];
$mensaje=$_POST['mensaje'];
$contenido= "Asunto: " . $asunto . "\nCorreo" . $correo . "\nMensaje" . $mensaje;
$mail=@mail($destino,"Cotizacion",$contenido);
if($mail)
         header("location: index.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>GasValid inicio</title>
		<meta charset="utf-8" />
		<link rel ="icon" type="icon/png" href="recursos/gasvalid_logo.jpeg" >      <!--Icono a pestaña-->
		<meta name="viewport" content="width=device-width, initial-scale=1" />	<!--Para cels -->
		<link rel="stylesheet" href="css/index.css" />							<!--css inicio -->	
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<a href="login.php">Login</a>
						<img src="recursos/gasvalid_logo.jpeg" width="80">							<!--Dirige al login-->
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Bienvenido a GasValid</h1>							<!--TITULO -->
					</header>

					<div class="flex ">

						<a href="#REF1" title="A Quienes somos">
							<input value="Quienes Somos" class="REf1" type="submit">								<!--info-->
						</a>

						<a href="#REF2" title="A Contacto">
							<input value="Contacto" class="REf2" type="submit">								<!--info-->
						</a>
						<a href="#REF3" title="A GAleria">
							<input value="Galeria" class="REf3" type="submit">								<!--info-->
						</a>
					</div>
				</div>
			</section>
	<section id="pantalla" class="pantalla">
		<a name="REF1">
			<div class="about">
				<div class="gridColumna">
						<img src="recursos/imagenAbout.jpeg" alt="imagen seleccionada" class="contenidoImagen">
					</div>
					<div class="contenedorTexto formato">
					<h2 class="tituloTexto">
						Con nosotros, seguridad y confianza. 
					</h2>
					<div class="contenidoTexto formato">
						<p align="justify" >
							Rake at the moon where the river flows Cut from the cloth of the winter's cold
							Bound by the voice that no one hears I've been around the way for years
							Stray from the heart the more that you know All gussied up with no place to go
							
						</p>
					</div>
				</div>
			</div>

		</a>
			<!-- Three -->
			<a name="REF3">

		<section id="quienes_somos" class="galeriaTitulo">
			<header>
				<h2>Galeria</h2>
			</header>

			<div class="galeriaTexto">
				
				<p align="justify" >Conoce nuestro trabajo</p>
			</div>
		</section>

				<div class="content">
					<ul class="galeria">
							<li><a id="im1" href="#img1"><img src="recursos/1.jpeg" ></a></li>
							<li><a id="im2" href="#img2"><img src="recursos/2.jpeg" ></a></li>
							<li><a id="im3" href="#img3"><img src="recursos/3.jpeg" ></a></li>
							<li><a id="im4" href="#img4"><img src="recursos/4.jpeg" ></a></li>
							<li><a id="im5" href="#img5"><img src="recursos/5.jpeg" ></a></li>
							<li><a id="im6" href="#img6"><img src="recursos/6.jpeg" ></a></li>
							<li><a id="im7" href="#img7"><img src="recursos/7.jpeg" ></a></li>
							<li><a id="im8" href="#img8"><img src="recursos/8.jpeg" ></a></li>
					</ul>
				</div>

								
				<!--  IMAGEN 1 -->
							<div class="contenedor" id="img1">
								
									<div class="contenedorImagen">
								<img src="recursos/1.jpeg" alt="" id="imagen">
							</div>
								<a href="#im1" class="cerrar botones">X</a>
							</div>

				<!--  IMAGEN 2-->
							<div class="contenedor" id="img2">
								
								<div class="contenedorImagen">
								<img src="recursos/2.jpeg" alt="" id="imagen">
							</div>
								<a href="#im2" class="cerrar botones">X</a>

							</div>

				<!-- IMAGEN 3  -->
							<div class="contenedor" id="img3">
								<div class="contenedorImagen">
								<img src="recursos/1.jpeg" alt="" id="imagen"></div>
								<a href="#im3" class="cerrar botones">X</a>
							</div>

				<!-- IMAGEN 4 -->
							<div class="contenedor" id="img4">
								<img src="recursos/4.jpeg" alt="" id="imagen">
								<a href="#im4" href="#REF3" class="cerrar botones">X</a>
							</div>
							
				<!--IMAGEN 5 -->
							<div class="contenedor" id="img5">
								<div class="contenedorImagen">
								<img src="recursos/5.jpeg" alt="" id="imagen"></div>
							<a  href="#im5" class="cerrar botones">X</a>
							</div>

				<!--IMAGEN 6 -->
							<div class="contenedor" id="img6">
								<div class="contenedorImagen">
								<img src="recursos/6.jpeg" alt="" id="imagen"></div>
								<a href="#im6" class="cerrar botones">X</a>
							</div>

				<!--IMAGEN 7 -->
							<div class="contenedor" id="img7">
								<div class="contenedorImagen">
								<img src="recursos/7.jpeg" alt="" id="imagen"></div>
								<a href="#im7" class="cerrar botones">X</a>
							</div>

				<!--IMAGEN 8 -->
							<div class="contenedor" id="img8">
								<div class="contenedorImagen">
								<img src="recursos/8.jpeg" alt="" id="imagen"></div>
								<a href="#im8" class="cerrar botones">X</a>
							</div>
							</a>
	</section>
			<!-- Footer -->
	</div>
		<a name="REF2">
			<footer id="footer">
				<div class="inner">

					<h3>En contacto</h3>											<!--contacto-->

					<form action="#" method="post">
						<div class="field half">
							<h4 id="email">Email</h4>
							<input type="text" id="email" class="fadeIn email" name="email" placeholder="example@algo.com" required><!--INPUT-->
						</div>	
						<div class="field">
							<h4 id="message">Mensaje</h4>
							<textarea id="mensaje" class="fadeIn mensaje" name="mensaje" placeholder="Mensaje" required></textarea> <!--texarea-->
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>	<!--SUMBIT-->
						</ul>
					</form>

					<div class="copyright">
						<a href="https://www.kaabcode.com/">Kaab_Code</a>				<!--fuentes o pie de pag-->
					</div>

				</div>
			</footer>
</a>
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>