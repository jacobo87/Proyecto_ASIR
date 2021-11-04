<?php
// Iniciamos sesión
    session_start();
//Creamos la clase conectar
    class conectar{
//Creamos una variable protegida
        protected $DB_HOST;
//Creamos la cadena de conexión
        protected function conexion(){
            try {
                // Selecionamos la variable portegida y añadimos un TRY_CAST
                $conectar = $this->DB_HOST = new PDO("mysql:local=localhost;dbname=db", "root", "");
                return $conectar;
            } catch (Exception $e) {
                // Si el resultado es NULL, mostramos mensaje de error
                print "Error en la conexión con la Base de Datos: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        // Añadimos la funcion de set_names para no tener problemas con mayusculas, los caracteres como tildes, ñ, por seguridad
        public function set_names(){
            return $this->DB_HOST->query("SET NAMES 'utf8'");
        }

        // Validamos la ruta de nuestro proyecto
        public function ruta(){
            return "http://localhost/proyectoasir/";
        }
    }
