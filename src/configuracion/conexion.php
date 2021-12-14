<?php
// Iniciamos sesión
session_start();

//Creamos la clase conectar
class conectar
{

    //Creamos una variable protegida
    protected $pdo;

    // Datos de configuración de la conexión a la base de datos
    private $host = 'mysql';
    private $user = 'user';
    private $passwd = 'password';
    private $dbname = 'db';

    //Creamos la cadena de conexión
    protected function conexion()
    {
        try {
            // Selecionamos la variable portegida y añadimos un TRY_CAST
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->passwd);
            return $this->pdo;
        } catch (Exception $e) {
            // Si el resultado es NULL, mostramos mensaje de error
            print "Error en la conexión con la Base de Datos: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    // Añadimos la funcion de set_names para no tener problemas con mayusculas, los caracteres como tildes, ñ, por seguridad
    public function set_names()
    {
        return $this->pdo->query("SET NAMES 'utf8'");
    }

    // Validamos la ruta de nuestro proyecto
    public function ruta()
    {
        //return "http://localhost/proyectoasir/";
        //return "http://192.168.1.128/";
        return "http://localhost/";
    }
}
