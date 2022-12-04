<?php

include "conexion.php";

$sql = "SELECT cancion_id, nombre_cancion, nombre_artista, cancion, genero, fecha FROM mymusic.canciones";
$canciones = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuchar Música</title>
    <!-- Preload -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "header.php"; ?>
    <div class="contenedor">
        <h3 class="h3 centrar-texto">Escucha Música</h3>
        <?php // Primera noticia recuperada
            $primeracancion = mysqli_fetch_array($canciones,MYSQLI_ASSOC);
            if (!empty($primeracancion)) {
                foreach($canciones as $cancion) {?>
                    <div class="centrar-texto">
                        <h5><?php echo $cancion['nombre_artista'] . " - " . $cancion['nombre_cancion']; ?><h5>
                        <audio src="/Tw_semestras/multimedia/audio/<?php echo $cancion['cancion']; ?>" controls="controls"  preload="none"></audio>
                    </div>
                <?php } 
            }
            else{
                echo 'No hay canciones disponibles';
            }
        ?>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
<?php
    $conn->close();
?>