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
</head>
<body>
    <?php include "header.php"; ?>
    <div class="contenedor">
        <h3 class="h3 centrar-texto">Bienvenido a MyMusic</h3>
        <main class="inicio contenido-principal">
            <article class="entrada">
                <div class="entrada__imagen">
                    <picture>
                        <img src="./multimedia/img/escucharmusica.jpg" alt="imagen escuchar musica"> 
                    </picture>
                </div>
                <div class="entrada__contenido centrar-texto">
                    <h4 class="h4 no-margin">Escuchar Música Online</h4>
                    <p>Busca y escucha música online</p>
                    <a href="escucharMusica.php" class="boton">Escuchar Música</a>
                </div>
            </article>
            <article class="entrada">
                <div class="entrada__imagen">
                    <picture>
                        <img src="./multimedia/img/subirmusica.png" alt="imagen subir musica"> 
                    </picture>
                </div>
                <div class="entrada__contenido centrar-texto">
                    <h4 class="h4 no-margin">Subir Música</h4>
                    <p>Sube tu propia música y compartela con los demás</p>
                    <a href="agregarMusic.php" class="boton">Subir Música</a>
                </div>
            </article>
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