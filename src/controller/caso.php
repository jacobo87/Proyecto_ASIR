<?php
    // Requerimos nuestra conexión y modelo de caso
    require_once("../configuracion/conexion.php");
    require_once("../modelos/caso.php");

    // Creamos variable de la clase caso
    $caso = new caso();

    switch($_POST["op"]){
        // Creamos un case 
        case "insertar":            
            $caso->insert_caso($_POST["usuario_id"],$_POST["categoria_id"],$_POST["titulo"],$_POST["descripcion"]);
            break;
    }
?>