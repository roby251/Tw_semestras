<?php
include "conexion.php";

$id = $_GET['id'];
$sql = "SELECT cancion_id, nombre_cancion, nombre_artista, cancion, genero, fecha FROM mymusic.canciones WHERE cancion_id = $id";
$query = $conn->query($sql);
$cancion = mysqli_fetch_array($query,MYSQLI_ASSOC);
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
            <div class="centrar-texto">
                <h5><?php echo $cancion['nombre_artista'] . " - " . $cancion['nombre_cancion']; ?><h5>
                <audio src="/Tw_semestras/multimedia/audio/<?php echo $cancion['cancion']; ?>" controls="controls"  preload="none"></audio>
            </div>
            <div class="contenedor">
                <div class= "portada">
                    <div class="foto">
                        <img src="multimedia/img/portada.jpg" alt="f">
                    </div>
                    <div class="foto-titulo">
                        <h1><?php echo $cancion['nombre_artista']; ?></h1>
                        <h2><?php echo $cancion['nombre_cancion']; ?></h2>
                    </div>
                </div>
            </div>
            <div class = "contenedor">
                <div id="mostrarResena" class="mostar-resena">
                <?php include "mostrarResena.php"; ?>
                </div>
                    
                <div class="add-resena">
                    <form action="../Tw_semestras/agregarResena.php?id='<?php echo $id; ?>'" id="formulario" method="post" enctype="multipart/form-data">
                        <div class="caja-entrada">
                            <label for="Nombre">Nombre :</label>
                            <input type="text" name="autor">
                        </div>
                        <div class="caja-entrada">
                            <label for="Calificacion">Calificacion :</label>
                            <input type="text" name="calificacion">
                        </div>
                        <div class="caja-entrada">
                            <label for="Comentario">Comentario :</label>
                            <textarea name="comentario" cols="30" rows="10" disal></textarea>
                        </div>
                        <div class="caja-entrada">
                            <button type="submit" name="enviar">Agregar Comentario</button>
                        </div>
                    </form>
                </div>
                <?php
            $conn->close();
            ?>
            </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
