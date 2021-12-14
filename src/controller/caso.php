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

    // Obtenemos el listado de casos de un usuario
    case "listar_caso":
        $datos = $caso->listar_caso($_POST["usuario_id"]);
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["id_caso"];
            //$sub_array[] = $row["id_categoria"];
            $sub_array[] = $row["nombre_categoria"];
            $sub_array[] = $row["titulo_caso"];
            $sub_array[] = $row["descripcion"];
            $sub_array[] = $row["nombre_usuario"];
            $sub_array[] = $row["apellido1_usuario"];
            $sub_array[] = $row["apellido2_usuario"];

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