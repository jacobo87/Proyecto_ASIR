<?php
    // Requerimos nuestra conexión y modela de categoría
    require_once("../configuracion/conexion.php");
    require_once("../modelos/categoria.php");
    // Creamos variable de la clase categoria
    $categoria=new categoria();

    switch($_GET["op"]){
        // Creamos un case 
        case "combo":
            // Lo que devuelva get_categoria lo almacena en datos
            $datos= $categoria->get_categoria();
            // Nos aseguramos de que tenga datos la variable
            if(is_array($datos)==true and count($datos)>0){
                // Declaramos el HTML
                /* $html="<option></option>"; */
                foreach($datos as $row)
                {
                    // Declaramos otro HTML con las opciones id y nombre
                    $html.= "<option value='".$row['id']."'>".$row['nombre']."</option>";
                }
                // mostramos el resultado
                echo $html;
            }
        break;
    }
?>