<?php
    
$inc = include "conexion.php";

if ($inc) {
    $consulta = "SELECT * FROM mymusic.resena";
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
                        <dt>Comentarios de la tienda</dt>
                        <dd><?php echo $comentario?></dd>
                    </dl>
                </div>
            </div>
            <?php
        }
    }
        
}

?>