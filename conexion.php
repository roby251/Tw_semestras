<?php

$servername = "localhost";
$username = "root";
$password = "";

//Creamos la conexion
$conn = new mysqli($servername, $username, $password, 'resena');

//verificamos la conexion
if ($conn->connect_error){
    die("Conexion fallida: " . $conn->connect_error);
}

?>