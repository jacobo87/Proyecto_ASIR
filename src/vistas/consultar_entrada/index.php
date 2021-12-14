<?php
// Añadimos una variable de inicio de sesión, si existe nos muestra la web
require_once("../../configuracion/conexion.php");
if (isset($_SESSION["id"])) {
?>
	<!DOCTYPE html>
	<html>
	<!-- Llamamos a nuestro Head -->
	<?php require_once("../mainhead/head.php"); ?>
	<title>Consultar Caso</title>
	</head>

	<body class="with-side-menu">

		<!-- Llamamos a nuestro Header -->
		<?php require_once("../mainheader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<!-- Llamamos a nuestra barra de menu -->
		<?php require_once("../mainnav/nav.php"); ?>

		<form id="caso_form">
			<!-- Introduciomos el id del usuario -->
			<input type="hidden" id="usuario_id" name="usuario_id" value="<?php echo $_SESSION["id"] ?>">
		</form>

		<!-- Contenido -->
		<div class="page-content">
			<div class="container-fluid">

				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Consultar Caso</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="../home/index.php">Inicio</a></li>
									<li class="active">Consultar Caso</li>
								</ol>
							</div>
						</div>
					</div>
				</header>

				<div class="box-typical box-typical-padding">
					<table id="Caso_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
						<thead>
							<tr>
								<th style="width: 10%;">ID Caso</th>
								<th style="width: 10%;">Categoría</th>
								<th style="width: 25%;">Título</th>
								<th style="width: 25%;">Descripción</th>
								<th style="width: 10%;">Nombre Usuario</th>
								<th style="width: 10%;">Apellido1</th>
								<th style="width: 10%;">Apellido2</th>
								<!--<th class="text-center" style="width: 5%;"></th>-->
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>

			</div>
		</div>
		<!-- Contenido -->

		<!-- Llamamos a nuestro mainjs -->
		<?php require_once("../mainjs/js.php"); ?>
		<!-- Añadimos el script que va a controlar la vista -->
		<script type="text/javascript" src="consulta.js"></script>
	</body>

	</html>
<?php
	// Si no, nos devuelve al index.php
} else {
	header("Location:" . conectar::ruta() . "index.php");
}
?>