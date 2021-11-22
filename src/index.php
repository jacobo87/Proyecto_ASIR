<?php
// Requerimos el archivo de conexión de la base de datos
require_once("configuracion/conexion.php");

// Comprobamos si el envio es = a si entra en usuario.php
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("modelos/usuario.php");
    $usuario = new usuario();
    $usuario->login();
}
?>
<!DOCTYPE html>
<html>

<head lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jacobo Azmani - Acceso</title>

    <link href="public/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="public/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="public/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="public/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="public/img/favicon.png" rel="icon" type="image/png">
    <link href="public/img/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>

<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" action="" method="post" id="login_formulario">

                    <!-- Creamos un input tipo hidden para usarlo en el login segun usuarios -->
                    <input type="hidden" id="rol_tipo" name="rol_tipo" value="usuario">

                    <div class="sign-avatar">
                        <img src="public/img/avatar-sign.png" alt="Imagen de perfil">
                    </div>
                    <header class="sign-title" id="lbltitulo">Acceso Usuario</header>

                    <!-- Agregamos mensajes de error -->
                    <?php
                    if (isset($_GET['m'])) {
                        switch ($_GET['m']) {
                            case "1";
                    ?>
                                <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="font-icon font-icon-warning"></i>
                                    El usuario y/o la contraseña son incorrectos.
                                </div>
                            <?php
                                break;

                            case "2";
                            ?>
                                <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="font-icon font-icon-warning"></i>
                                    Los campos están vacios.
                                </div>
                    <?php
                                break;
                        }
                    }
                    ?>

                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="E-Mail" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="contrasenya" name="contrasenya" class="form-control" placeholder="Contraseña" />
                    </div>
                    <div class="form-group">
<!--                         <div class="float-right reset">
                            <a href="reset-password.html">Resetear contraseña</a>
                        </div> -->
                        <div class="float-left reset">
                            <a href="#" id="btnsoporte">Acceso soporte</a>
                        </div>
                    </div>
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button type="submit" class="btn btn-rounded">Acceder</button>
                </form>
            </div>
        </div>
    </div>
    <!--.page-center-->


    <script src="public/js/lib/jquery/jquery.min.js"></script>
    <script src="public/js/lib/tether/tether.min.js"></script>
    <script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function() {
                setTimeout(function() {
                    $('.page-center').matchHeight({
                        remove: true
                    });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                }, 100);
            });
        });

        function init() {
        }

        $(document).ready(function () {

        });

        $(document).on("click", "#btnsoporte", function () {
            if ($('#rol_tipo').val() == 'usuario') {
                $('#lbltitulo').html("Acceso Usuario");
                $('#btnsoporte').html("Acceso Soporte");
                $('#rol_tipo').val('administrador');
        } else {
                $('#lbltitulo').html("Acceso Soporte");
                $('#btnsoporte').html("Acceso Usuario");
                $('#rol_tipo').val('usuario');
                }
        });

        init();
    </script>
    <script src="public/js/app.js"></script>

    <!-- Declaramos el Js para nuestro index -->
    <script type="text/javascript" src="index.js"></script>

</body>

</html>