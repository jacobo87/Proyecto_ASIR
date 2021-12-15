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
        if ($_POST["rol_tipo"]=="administrador"){
            $datos = $caso->listar_todos_casos();
        }
        else{
            $datos = $caso->listar_caso($_POST["usuario_id"]);
        }
        
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

        // Obtenemos el listado total de casos
    case "caso_total";
        $datos = $usuario->usuarios_total($_POST["usuarios_id"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["TOTAL"] = $row["TOTAL"];
            }
            echo json_encode($output);
        }
        break;

        case "caso_totalabierto";
        $datos = $usuario->usuarios_totalabierto($_POST["usuarios_id"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["TOTAL"] = $row["TOTAL"];
            }
            echo json_encode($output);
        }
        break;

        case "caso_totalcerrado";
        $datos = $usuario->usuarios_totalcerrado($_POST["usuarios_id"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["TOTAL"] = $row["TOTAL"];
            }
            echo json_encode($output);
        }
        break;
}
