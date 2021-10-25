<?php

$server = 'localhost';
$username = 'user';
$password = 'password';
$database = 'db';

$db = mysqli_connect($server, $username, $password, $database);

// Comprobacion de conexión satisfactoria o fallida
try{
    $con = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
    die('Conexión fallida: '. $e->getMessage());

}

// Codificación de caracteres a uft8
mysqli_query($db, "SET NAMES 'utf8");