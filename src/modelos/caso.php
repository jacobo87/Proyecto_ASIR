<?php
// Creamos una clase caso-conectar para llamar a las funciones de la cadena de conexion
    class caso extends conectar{

        public function insert_caso($usuario_id,$categoria_id,$titulo,$descripcion){
            $conectar= parent::conexion();
            // Enlazamos con nuestro set_names para usar utf8 
            parent::set_names();
            // Creamos la variable de la consulta 
            $sql="INSERT INTO caso (id,usuario_id,categoria_id,titulo,descripcion,estado) VALUES (NULL,?,?,?,?,'1');";
            $sql=$conectar->prepare($sql);
            // Ponemos los parametros anteriores
            $sql->bindValue(1, $usuario_id);
            $sql->bindValue(2, $categoria_id);
            $sql->bindValue(3, $titulo);
            $sql->bindValue(4, $descripcion);
            // Ejecutamos SQL
            $sql->execute();
            // Devolvemos el valor de la consulta
            return $resultado=$sql->fetchAll();
        }

    }
?>