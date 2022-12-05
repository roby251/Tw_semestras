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
            <img src="./multimedia/img/escucharmusica.jpg" class="card-img-top" alt="imagen escuchar musica">
            <div class="card-body">
                <h5 class="card-title">Nombre_cancion</h5>
                <p class="card-text">Etiqueta</p>
                <a href="escucharMusica.php" class="btn btn-primary">Ver y Escuchar Música</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="./multimedia/img/escucharmusica.jpg" class="card-img-top" alt="imagen escuchar musica">
            <div class="card-body">
                <h5 class="card-title">Nombre_cancion</h5>
                <p class="card-text">Etiqueta</p>
                <a href="escucharMusica.php" class="btn btn-primary">Ver y Escuchar Música</a>
            </div>
        </div>
            <article class="entrada">
                <div class="entrada__imagen align">
                    <picture>
                        <img src="./multimedia/img/reseña.png" alt="imagen reseña"> 
                    </picture>
                </div>
                <div class="entrada__contenido centrar-texto">
                    <h4 class="h4 no-margin">Reseñas</h4>
                    <p>Lee y escribe reseñas de los artistas y músicas</p>
                    <a href="resena.php" class="boton">Reseñas</a>
                </div>
            </article>
        </main>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>