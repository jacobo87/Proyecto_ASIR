<?php
// Añadimos una variable de inicio de sesión, si existe nos muestra la web
require_once("../../configuracion/conexion.php");
if (isset($_SESSION["id"])) {
?>
    <!DOCTYPE html>
    <html>
    <!-- Llamamos a nuestro Head -->
    <?php require_once("../mainhead/head.php"); ?>
    <title>Jacobo Azmani - Perfil de Usuario</title>
    </head>

    <body class="with-side-menu">

        <!-- Llamamos a nuestro Header -->
        <?php require_once("../mainheader/header.php"); ?>

        <div class="mobile-menu-left-overlay"></div>

        <!-- Llamamos a nuestra barra de menu -->
        <?php require_once("../mainnav/nav.php"); ?>

        <!-- Contenido del sitio -->
        <div class="page-content">
        <section class="box-typical">
						<div class="profile-card">
							<div class="profile-card-photo">
								<img src="../../public/img/photo-220-1.jpg" alt="foto_perfil"/>
							</div>
                                </br>
							<div class="profile-card-name"><span class="lblcontactonomx"> <?php echo $_SESSION["nombre"] ?> <?php echo $_SESSION["apellido1"] ?></span> <?php echo $_SESSION["apellido2"] ?></span></div>
						</div><!--.profile-card-->
					</section><!--.box-typical-->
        <!-- Contenido del sitio -->

        <!-- Llamamos a nuestro mainjs -->
        <?php require_once("../mainjs/js.php"); ?>
        <!-- Añadimos el script que va a controlar la vista -->
        <script type="text/javascript" src="home.js"></script>
    </body>

    </html>
<?php
    // Si no, nos devuelve al index.php
} else {
    header("Location:".conectar::ruta()."index.php");
}
?>