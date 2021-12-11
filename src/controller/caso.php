<?php
// Requerimos nuestra conexión y modelo de caso
require_once("../configuracion/conexion.php");
require_once("../modelos/caso.php");

// Creamos variable de la clase caso
$caso = new caso();

switch ($_POST["op"]) {
        // Creamos un case 
    case "insertar":
        $caso->insert_caso($_POST["usuario_id"], $_POST["categoria_id"], $_POST["titulo"], $_POST["descripcion"]);
        break;

    case "listar_caso":
        $datos = $caso->listar_caso($_POST["usuario_id"]);
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["caso_id"];
            $sub_array[] = $row["categoria_id"];
            $sub_array[] = $row["caso.titulo"];
            $data[] = $sub_array;
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;
}
