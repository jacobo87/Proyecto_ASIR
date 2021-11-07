<?php
// Creamos una clase usuario-conectar para llamar a las funciones de la cadena de conexion
    class usuario extends conectar{
        // Creamos la funcion login
        public function login(){
            $conectar=parent::conexion();
            // Enlazamos con nuestro set_names para usar utf8
            parent::set_names();
            // Preguntamos con POST para que recoja los parametros enviados desde login
            if(isset($_POST["enviar"])){
                // Ponemos los login necesarios, correo y contraseña
                $email = $_POST["email"];
                $contrasenya = $_POST["contrasenya"];
                // Creamos mensaje de error si los campos están vacíos
                if(empty($email) and empty($contrasenya)){
                    // Mandamos de nuevo a index.php con un mensaje 2 indicando que hay un error
                    header("Location:".conectar::ruta()."index.php?m=2");
                }else{
                    // Si se conecta, llamamos a la sentencia sql
                    $sql = "SELECT * FROM usuarios WHERE email=? and contrasenya=? and estado=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $email);
                    $stmt->bindValue(2, $contrasenya);
                    // ejecutamos lo indicado
                    $stmt->execute();
                    // Lo guardamos en una variable resultado
                    $resultado = $stmt->fetch();
                    // Preguntamos si el resultado es un array y si es mayor que 0
                    if(is_array($resultado) and count($resultado)>0){
                        // Creamos variables de sesión
                        $_SESSION["id"]=$resultado["id"];
                        $_SESSION["nombre"]=$resultado["nombre"];
                        $_SESSION["apellido1"]=$resultado["apellido1"];
                        $_SESSION["apellido2"]=$resultado["apellido2"];
                        // Si es correcto el resultado lo redirigimos a la pagina home
                        header("Location:".conectar::ruta()."vistas/home/index.php");
                    }else{
                        // Si no devuelve datos, los introducidos son incorrectos
                        // volvemos a mostrar mensaje de error
                        header("Location:".conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
