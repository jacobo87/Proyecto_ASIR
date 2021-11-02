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
                $correo = $_POST["usuario_correo"];
                $contrasenya = $_POST["usuario_pass"];
                // Creamos mensaje de error si los campos están vacíos
                if(empty($correo) and empty($contrasenya)){
                    // Mandamos de nuevo a index.php con un mensaje 2 indicando que hay un error
                    header("Location:". conectar::ruta(). "index.php?m=2");
                }else{
                    // Si se conecta, llamamos a
                    $sql = "SELECT * FROM `USUARIOS` WHERE usuario_correo=? and usuario_pass=? and estado=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $contrasenya);
                    // ejecutamos lo indicado
                    $stmt->execute();
                    // Lo guardamos en una variable resultado
                    $resultado = $stmt->fetch();
                    if(){

                    }else{
                        // Si no devuelve datos, los introducidos son incorrectos
                        // volvemos a mostrar mensaje de error
                        header("Location:". conectar::ruta(). "index.php?m=1");
                        exit();
                    }
                }
            }
        }

    }

?>