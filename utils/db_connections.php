<?php

// aca se llaman al server, la base de datos, el usuario y la contraseña


$host = "localhost";
$user = "root";
$password = "";
$database = "starwarsweb";

$conn = new mysqli($host, $user, $password, $database);

// verificar la conexion

if($conn->connect_error){
    die("conexion fallida:" . $conn->connect_error);
}/* else {
echo "Conexion exitosa con la base de datos";
} */

?>