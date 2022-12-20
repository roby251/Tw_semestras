<?php
include "conexion.php";

$id = $_GET['id'];
$id = trim($id, "'");
$id = (int) $id;
if (strlen($_POST["autor"]) >= 1 && strlen($_POST["comentario"]) >= 1){
    $autor1 = trim($_POST["autor"]);
    $comentario1 = trim($_POST["comentario"]);
    $calificacion1 = trim($_POST["calificacion"]);
    $consulta1 = "INSERT INTO mymusic.resena(autor,comentario,calificacion,cancion_id) VALUES ('$autor1','$comentario1','$calificacion1',$id)";
    if ($conn->query($consulta1) === TRUE){
        echo "Registro agregado satisfactoriamente";
        //header("Location: ./index.php");
        header("Location: ./escucharMusica.php?id=$id;");
    }else{
        echo "Error: ". $consulta1 . "<br>" . $conn->error;
    }
}else{
    ?>
    <h2 class="bad"></h2>
    <?php
}
$conn->close()
?>