<?php
include "conexion.php";

$sql = "SELECT cancion_id, nombre_cancion, nombre_artista, cancion, genero, fecha FROM mymusic.canciones";
$canciones = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyMusic</title>
    <meta name="description" content="Página web de blog de música">

    <!-- Preload -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include "header.php"; ?>
    <div class="contenedor">
        <h3 class="h3 centrar-texto">Bienvenido a MyMusic</h3>
        <main class="inicio contenido-principal">

        <div class="card" style="width: 18rem;">
            <img src="./multimedia/img/reseña.png" class="card-img-top" alt="imagen reseña">
            <div class="card-body">
                <h5 class="card-title">Reseñas</h5>
                <p class="card-text">Lee y escribe reseñas de los artistas y músicas</p>
                <a href="resena.php" class="btn btn-primary">Ver Reseñas</a>
            </div>
        </div>
        <?php // Primera noticia recuperada
            $primeracancion = mysqli_fetch_array($canciones,MYSQLI_ASSOC);
            if (!empty($primeracancion)) {
                foreach($canciones as $cancion) {?>
                    <div class="card text-center" style="width: 18rem;">
                        <img src="./multimedia/img/escucharmusica.jpg" class="card-img-top" alt="imagen escuchar musica">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $cancion['nombre_cancion']; ?></h5>
                            <p class="card-text"><?php echo $cancion['nombre_artista']; ?></p>
                            <a href="escucharMusica.php?id='<?php echo $cancion['cancion_id']; ?>'" class="btn btn-primary">Ver y Escuchar Música</a>
                        </div>
                    </div>
                <?php } 
            }
            else{
                echo 'No hay canciones disponibles';
            }
        ?>
        </main>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
<?php
    $conn->close();
?>