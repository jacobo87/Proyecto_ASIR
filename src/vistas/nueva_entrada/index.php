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
                                    <li><a href="#">Inicio</a></li>
                                    <li class="active">Nuevo Caso<< /li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Insertamos formulario -->
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Text</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Text Disabled</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><input type="text" disabled class="form-control" id="inputPassword" placeholder="Text Disabled"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Text Readonly</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><input type="text" readonly class="form-control" id="inputPassword" placeholder="Text Readonly"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 form-control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleSelect" class="col-sm-2 form-control-label">Select</label>
                            <div class="col-sm-10">
                                <select id="exampleSelect" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleSelect2" class="col-sm-2 form-control-label">Multiple select</label>
                            <div class="col-sm-10">
                                <select multiple class="form-control" id="exampleSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleSelect" class="col-sm-2 form-control-label">Textarea</label>
                            <div class="col-sm-10">
                                <textarea rows="4" class="form-control" placeholder="Textarea"></textarea>
                            </div>
                        </div>
                    </form>
                </header>
            </div>
            <!--.container-fluid-->
        </div>
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
    header("Location:" . conectar::ruta() . "index.php");
}
?>