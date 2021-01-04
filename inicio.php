<!DOCTYPE HTML>
<html>
	<head>
		<title>GasValid inicio</title>
		<meta charset="utf-8" />
		<link rel ="icon" type="icon/png" href="recursos/gasvalid_logo.jpeg" >      <!--Icono a pestaña-->
		<meta name="viewport" content="width=device-width, initial-scale=1" />	<!--Para cels -->
		<link rel="stylesheet" href="css/inicio.css" />							<!--css inicio -->	
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

						<div>
							<h3>TITULO1</h3>								<!--info-->
							<p>parrafo1</p>									<!--info-->
						</div>

						<div>
							<h3>TITULO2</h3>								<!--info-->
							<p>parrafo2</p>									<!--info-->
						</div>
						<div>
							<h3>TITULO3</h3>								<!--info-->
							<p>parrafo3</p>									<!--info-->
						</div>
					</div>
				</div>
			</section>


		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">
						<article>
							<div class="image round">
								<img width="200" src="recursos/gasvalid1.jpeg" alt="Pic 01" />		<!--imagen-->
							</div>
							<header>
								<h3>TITULO4</h3>									<!--info-->
							</header>
							<p>parrafo4</p>											<!--info-->
						</article>
						<article>
							<div class="image round">		
								<img width="200" src="recursos/gasvalid2.jpeg" alt="Pic 02" />
							</div>
							<header>	
								<h3>TITULO5</h3>									<!--info-->
							</header>
							<p>parrafo5</p>											<!--info-->
						</article>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>En contacto</h3>											<!--contacto-->

					<form action="#" method="post">
						<div class="field half">
							<h4 id="email">Email</h4>
							<input name="email" id="email" type="email" placeholder="Email"><!--INPUT-->
						</div>	
						<div class="field">
							<h4 id="message">Mensaje</h4>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea> <!--texarea-->
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

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>