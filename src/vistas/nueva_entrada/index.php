<?php
// Añadimos una variable de inicio de sesión, si existe nos muestra la web
require_once("../../configuracion/conexion.php");
if (isset($_SESSION["id"])) {
?>
    <!DOCTYPE html>
    <html>
    <!-- Llamamos a nuestro Head -->
    <?php require_once("../mainhead/head.php"); ?>
    <title>Nuevo Caso</title>
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
                <header class="section-header">
                    <!-- Insertamos la parte para la nueva entrada -->
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h3>Nuevo Caso</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="../home/index.php">Inicio</a></li>
                                    <li class="active">Nuevo Caso</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Insertamos formulario -->
                    <div class="box-typical box-typical-padding">
                        <p>
                            Complete el siguiente formulario:
                        </p>
                        </br>
                        <h5 class="m-t-lg with-border">Información</h5>

                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="exampleInput">Seleccione una Categoría</label>
                                    <select id="" class="form-control">
                                        <option>Hardware</option>
                                        <option>Software</option>
                                        <option>Redes</option>
                                        <option>Sistema Operativo</option>
                                        <option>Otros</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="exampleInputEmail1">Título</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Escriba el título">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="exampleInputPassword1">Descripción</label>
                                    <div class="summernote-theme-3">
                                        <textarea id="descripcion" class="summernote" name="name">Añada una descripción de su problema.</textarea>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <!--.container-fluid-->
        </div>
        <!-- Contenido del sitio -->

        <!-- Llamamos a nuestro mainjs -->
        <?php require_once("../mainjs/js.php"); ?>
        <!-- Añadimos el script que va a controlar la vista -->
        <script type="text/javascript" src="home.js"></script>
        <!-- Añadimos el script que controla summernote -->
        <script>
            $(document).ready(function() {
                $('.summernote').summernote({
                    /* Aumentamos el tamaño del cuadro  */
                    height: 200
                });
            });
        </script>
    </body>

    </html>
<?php
    // Si no, nos devuelve al index.php
} else {
    header("Location:" . conectar::ruta() . "index.php");
}
?>