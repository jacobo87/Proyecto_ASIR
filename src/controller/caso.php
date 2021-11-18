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

        case "listar_usuario":
            $datos=$caso->listar_usuario($_POST["id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["caso_id"];
                $sub_array[] = $row["categoria_nombre"];
                $sub_array[] = $row["caso_titulo"];
                $sub_array[] = '<button type="button" onClick"ver('.$row["caso_id"].');" id="'.$row["caso_id"].' class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;
    }
