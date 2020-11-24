<?php

    if (isset($_POST['enviado'])) {
        $nombre = $_POST['nombre'];
        $apellido =$_POST['apellido'];
        $genero =$_POST['genero'];
        $fecha_nacimiento =$_POST['nacimiento'];
        $telefono =$_POST['tele'];
        $direccion =$_POST['dir'];
        //establecer conexion
        require_once('conexion.php');
        //preparar el statement conexion
        $stmt = $conexion->prepare("INSERT INTO clientes (nombre_cliente, apellido_cliente, genero_cliente, nac_cliente, telefono_cliente, direccion_cliente) VALUES (?,?,?,?,?,?)");
        //tipo parametros
        //    enviar datos
        $stmt-> bind_param("ssssis",$nombre,$apellido,$genero,$fecha_nacimiento,$telefono,$direccion);
        $stmt->execute();
        $stmt->close();
        $conexion->close();

        //Redireccionar a la pagina http que nos ha referido

        header('location: '.getenv('HTTP_REFERER'));
    }


?>