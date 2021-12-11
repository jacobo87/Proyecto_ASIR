<?php
// Añadimos una variable de inicio de sesión, si existe nos muestra la web
require_once("../../configuracion/conexion.php");

if (isset($_SESSION["id"])) {
	$consulta = "SELECT 
	caso.id,
	caso.usuario_id,
	caso.categoria_id,
	caso.titulo,
	caso.descripcion,
	usuarios.nombre,
	categoria.nombre
	FROM
	caso
	INNER JOIN categoria ON caso.categoria_id = categoria.id
	INNER JOIN usuarios ON caso.usuario_id = usuarios.id
	WHERE
	caso.estado=1
	AND usuario.id=?
	";

	if ($resultado) {
		while ($row = $resultado->fech_array())
			$id = $row['id'];
		$usuario_id = $row['usuario_id'];
		$categoria_id = $row['categoria_id'];
		$titulo = $row['titulo'];
		$descripcion = $row['descripcion'];
		$nombre = $row['nombre'];
	}
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
					<h2><?php echo $nombre; ?></h2>
					<div>
						<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
							<thead>
								<tr>
									<th style="width: 5%;">ID <?php echo $id; ?></th>
									<th style="width: 10%;">Usuario <?php echo $usuario_id; ?></th>
									<th style="width: 10%;">Categoria<?php echo $categoria_id; ?></th>
									<th style="width: 20%;">Título<?php echo $titulo; ?></th>
									<th style="width: 20%;">Descripción<?php echo $descripcion; ?></th>
									<th style="width: 10%;">Usuario nombre<?php echo $nombre; ?></th>
									<th class="d-none d-sm-table-cell" style="width: 40%;">Título</th>
									<th class="text-center" style="width: 5%;"></th>
								</tr>
							</thead>
							<tbody>
							</tbody>
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