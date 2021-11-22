<?php
// Creamos una clase categoria-conectar para llamar a las funciones de la cadena de conexion
    class categoria extends conectar{

        public function get_categoria(){
            $conectar= parent::conexion();
            // Enlazamos con nuestro set_names para usar utf8 
            parent::set_names();
            // Creamos la variable de la consulta 
            $sql="SELECT * FROM categoria";
            $sql=$conectar->prepare($sql);
            // Ejecutamos SQL
            $sql->execute();
            // Devolvemos el valor de la consulta
            return $resultado=$sql->fetchAll();
        }
    }
?>