<?php

include "conexion.php";

//Datos y forma en que se obtienen
$nombre = $_POST['NC'];
$artista = $_POST['NH'];
$file_name = (isset($_FILES['archivosubido']['name'])) ? $_FILES['archivosubido']['name'] : "notfound.png";
$file_tmp = (isset($_FILES['archivosubido']['tmp_name'])) ? $_FILES['archivosubido']['tmp_name'] : "";
$genero = $_POST['genero'];
$hoy = date("Ymd");

if ($file_tmp != ""){
    move_uploaded_file($file_tmp, "../audio/" . $file_name);
}    

//Conexion e insercion en la base de datos
$sql = "INSERT INTO mymusic.canciones(nombre_cancion, nombre_artista, cancion, genero, fecha)
VALUES ('$nombre', '$artista', '$file_name' , '$genero', $hoy)";

if ($conn->query($sql) === TRUE){
    echo "Registro agregado satisfactoriamente";
    header("Location: ../index.php");
}else{
    echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();

?>