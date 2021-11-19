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

        public function listar_caso($usuario_id){
            $conectar= parent::conexion();
            // Enlazamos con nuestro set_names para usar utf8 
            parent::set_names();
            // Creamos la variable de la consulta 
            $sql="SELECT 
            caso.id,
            caso.usuario_id,
            caso.categoria_id,
            caso.titulo,
            caso.descripcion,
            usuarios.nombre,
            usuarios.apellido1,
            usuarios.apellido2,
            categoria.nombre
            FROM
            caso
            INNER JOIN categoria ON caso.categoria_id = categoria.id
            INNER JOIN usuarios ON caso.usuario_id = usuarios.id
            WHERE
            caso.estado=1
            AND usuario.id=?;
            ";
            $sql=$conectar->prepare($sql);
            // Ponemos los parametros anteriores
            $sql->bindValue(1, $usuario_id);
            // Ejecutamos SQL
            $sql->execute();
            // Devolvemos el valor de la consulta
            return $resultado=$sql->fetchAll();
        }
    }
?>