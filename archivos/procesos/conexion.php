<?php

$server = 'localhost';
$user = 'root';
$password ='';
$bd = 'zapateriax';

$conexion = new mysqli($server, $user, $password, $bd);

if ($conexion->connect_errno) {
    echo "no se pudo establecer la conexion";
}
?>