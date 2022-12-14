<?php
include(conexion.php);

if (isset($_POST["guardar"])){
     if (strlen($_POST["autor"]) >= 1 && strlen($_POST["comentario"]) >= 1){
        $autor = trim($_POST["autor"]);
        $comentario = trim($_POST["comentario"]);
        $consulta = "INSERT INTO resena(autor,comentario) VALUES ('$autor','$comentario')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
            ?>
            <h2 class="ok"> Se ha agregado su comentario.</h2>
            <?php
        }
        else{
            ?>
              <h2 class="bad"> Ha ocurrido un error.</h2>
            <?php
        }
     }else{
        ?>
        <h2 class="bad"> Por favor complete los datos.</h2>
        <?php
     }
}
?>