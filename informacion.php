<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Informacion - SurrealBuzos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo"><strong>Surreal</strong> <span>Buzos</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
				<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="catalogo.php">Catalogo</a></li>
							<li><a href="informacion.php">Informacion</a></li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Crear cuenta</a></li>
							<li><a href="#" class="button fit">Iniciar sesion</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Sobre Nosotros</h1>
									</header>
									<span class="image main"><img src="images/fotonuestra.jpg" alt="" /></span>
									<h2> Surreal Buzos </h2>
									<p> Somos un grupo de personas expermientados en negocios y programacion. Nos reunimos para crear este emprendimiento para ofrecerles una gran variedad de buzos, con excelente calidad y precios accesibles para todas las familias.<br> Apuntamos a ser la empresa numero 1 en ventas de buzos de la provincia de Santa Fe.</p>
							</section>

					</div>

		<!-- Contact -->
		<section id="contact">
			<div class="inner">
				<section>
					<h4>REALIZAR UNA COMPRA</h4>
					<form action="abm.php" method= "POST" class="formulario_compra">
						<div class="fields">
							<div class="field half">
								<label for="Nombre">Nombre</label>
								<input type="text" name="Nombre" id="Nombre" placeholder="Surreal"/>
							</div>
							<div class="field half">
								<label for="Mail">Mail</label>
								<input required type="email" name="Mail" id="Mail" placeholder="surreal@buzos"/>
							</div>
							<div class="field">
								<label for="Producto">Producto</label>
								<textarea name="Producto" id="Producto" rows="6" placeholder="Sinergia"></textarea>
							</div>
							<div class="field">
                				<label for="deleteOrder">¿Desea Cancelar la orden?</label>
                    			<input type="checkbox" name="deleteOrder" value="1">
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Enviar mensaje" class="primary" /></li>
							<li><input type="reset" value="Borrar todo" /></li>
						</ul>
						<div class="field half">
								<p>
									* Si desea modificar la compra, ingrese nuevamente el mail y escriba el producto nuevo.
								</p>
						</div>
					</form>
				</section>
				<section class="split">
					<section>
						<div class="contact-method">
							<span class="icon solid alt fa-envelope"></span>
							<h3>Email</h3>
							<a>surreal@gmail.com</a>
						</div>
					</section>
						<section>
							<div class="contact-method">
								<span class="icon solid alt fa-phone"></span>
								<h3>Telefono</h3>
								<span>0341 522-3000</span>
							</div>
						</section>
						<section>
							<div class="contact-method">
								<span class="icon solid alt fa-home"></span>
								<h3>Direccion</h3>
								<span>Paraguay 1950<br />
								Universidad Austral, Rosario, Santa Fe<br />
								Argentina</span>
							</div>
						</section>
					</section>
				</div>
			</section>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a sclass="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Design: by Surreal</li>
					</ul>
				</div>
			</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>