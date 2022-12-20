<?php
include "conexion.php";

    $consulta = "SELECT * FROM mymusic.resena where cancion_id = $id";
    $resultado = mysqli_query($conn,$consulta);
    if ($resultado){
        while($row= $resultado->fetch_array()){
            $id = $row['resena_id'];
            $autor = $row['autor'];
            $comentario = $row['comentario'];
            $calificacion = $row['calificacion'];
?>
<div class="resena">
<div class="texto">
                <dl>
                    <dt>Nombre</dt>
                    <dd><?php echo $autor?></dd>
                    <dt>Calificacion</dt>
                    <dd><?php echo $calificacion?></dd>
                    <dt>Comentarios de la música</dt>
                    <dd><?php echo $comentario?></dd>
                </dl>
            </div>
        </div>
        <?php
    }
}
?>