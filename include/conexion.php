<?php 
//variable de base de datos
$servidor="localhost";
$db="carrito_ventas";
$usuario= "root";
$password="root";

$conexion = mysqli_connect($servidor, $usuario, $password, $db);

//verificar la conexion
if (!$conexion) {
    echo "Conexion Fallida";
}

?>