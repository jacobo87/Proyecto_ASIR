<?php
// Añadimos una variable de inicio de sesión, si existe nos muestra la web
require_once("../../configuracion/conexion.php");
require_once("../../modelos/caso.php");
if (isset($_SESSION["id"])) {
?>
	<!DOCTYPE html>
	<html>
	<!-- Llamamos a nuestro Head -->
	<?php require_once("../mainhead/head.php"); ?>
	<!-- Añadimos el CSS para la muestra de gráficos ya que solo lo vamos a usar para está ventana -->
	<!-- https://morrisjs.github.io/morris.js/ -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

	<title>Jacobo Azmani - Home</title>
	</head>

	<body class="with-side-menu">

		<!-- Llamamos a nuestro Header -->
		<?php require_once("../mainheader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<!-- Llamamos a nuestra barra de menu -->
		<?php require_once("../mainnav/nav.php"); ?>

		<!-- Contenido del sitio -->
		<div class="page-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-sm-4">
								<article class="statistic-box green">
									<div>
										<div class="number" id="lbltotal"></div>
										<div class="caption">
											<div>Total de Casos</div>
											<div class="number" id="lbltotal">
												<?php
												$caso = new caso();
												$total = $caso->numero_total_casos();
												echo $total["0"]["TOTAL"];
												?>
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-4">
								<article class="statistic-box yellow">
									<div>
										<div class="number" id="lbltotalabierto"></div>
										<div class="caption">
											<div>Total de Casos Abiertos</div>
											<div class="number" id="lbltotalabierto">
												<?php
												$caso = new caso();
												$total = $caso->numero_total_casos_abiertos();
												echo $total["0"]["TOTAL"];
												?>
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-4">
								<article class="statistic-box red">
									<div>
										<div class="number" id="lbltotalcerrado"></div>
										<div class="caption">
											<div>Total de Casos Cerrados</div>
											<div class="number" id="lbltotalcerrado">
												<?php
												$caso = new caso();
												$total = $caso->numero_total_casos_cerrados();
												echo $total["0"]["TOTAL"];
												?>
											</div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Contenido del sitio -->

		<!-- Llamamos a nuestro mainjs -->
		<?php require_once("../mainjs/js.php"); ?>
		<!-- Añadimos el script que va a controlar la vista -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

		<script type="text/javascript" src="home.js"></script>
	</body>

	</html>
<?php
	// Si no, nos devuelve al index.php
} else {
	header("Location:" . conectar::ruta() . "index.php");
}
?>