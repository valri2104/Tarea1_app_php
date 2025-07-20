<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$bd = "app_php1";

$conexion = new mysqli($host, $usuario, $contrasena, $bd);

if($conexion->connect_error){
    die("Conexion fallida: ". $conexion->connect_error);
}

$nombre = $_POST['nombre'];

$sql = "INSERT INTO persona (nombre) VALUES ('$nombre')";

if($conexion->query($sql)==TRUE){
    echo "Registro insertado exitosamente";
} else{
    echo "Error al insertar: ". $conexion->error;
}

$conexion->close();
?>