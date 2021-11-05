<?php
    // llamamos a la cadena de conexión
    require_once("../../configuracion/conexion.php");
    // Finalizamos la sesión
    session_destroy();
    // Redirigimos de nuevo a nuestro login
    header("Location:".conectar::ruta()."index.php");
    exit();
?>