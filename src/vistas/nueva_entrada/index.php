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
                            <!-- Introducimos el formulario en form -->
                            <form method="post" id="caso_form">
                                <!-- Introduciomos el id del usuario -->
                                <input type="hidden" id="usuario_id" name="usuario_id" value="<?php echo $_SESSION["id"] ?>">

                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="exampleInput">Seleccione una Categoría</label>
                                        <select id="categoria" name="categoria_id" class="form-control">
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="titulo">Título</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escriba el título">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="exampleInputPassword1">Descripción</label>
                                        <div class="summernote-theme-3">
                                            <textarea id="descripcion" name="descripcion" class="summernote" name="name">Añada una descripción de su problema.</textarea>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
                                </div>
                            </form>
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
            function init() {
                $("#caso_form").on("submit", function(e) {
                    guardareditar(e);
                });
            }

            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 200
                });
                $.post("../../controller/categoria.php?op=combo", function(data, status) {
                    $('#categoria').html(data);
                });
            });

            function guardareditar(e) {
                // añadimos está función para que no salte varias veces
                e.preventDefault();
                // Declaranos la variable formData
                var formData = new FormData($("caso_form")[0]);
                $.ajax({
                    url: "../../controller/caso.php?op=insertar",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(datos) {
                        console.log(datos);
                    }
                });
            }

            init();
        </script>
    </body>

    </html>
<?php
    // Si no, nos devuelve al index.php
} else {
    header("Location:" . conectar::ruta() . "index.php");
}
?>