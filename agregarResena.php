<?php
include "conexion.php";

if (isset($_POST["guardar"])){
     if (strlen($_POST["autor"]) >= 1 && strlen($_POST["comentario"]) >= 1){
        $autor = trim($_POST["autor"]);
        $comentario = trim($_POST["comentario"]);
        $calificacion = trim($_POST["calificacion"]);
        $insertar = "INSERT INTO mymusic.resena(autor, comentario, calificacion) VALUES ('$autor','$comentario','$calificacion')";
        $resultado = mysqli_query($conn,$insertar);
        if ($resultado){
            ?>
            <h2 class="ok"></h2>
            <?php
        }
        else{
            ?>
              <h2 class="bad"></h2>
            <?php
        }
     }else{
        ?>
        <h2 class="bad"></h2>
        <?php
     }
}
$conn->close()
?>