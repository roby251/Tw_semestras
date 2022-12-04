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
    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <a href="index.php">
                    <h1 class="logo no-margin centrar-texto">MyMusic</h1>
                </a>
                <nav class="navegacion">
                    <a class="navegacion__enlace">Iniciar Sesión</a>
                    <a href="agregarMusic.php" class="navegacion__enlace">Subir Música</a>
                    <a class="navegacion__enlace">Nosotros</a>
                    <a href="resena.html" class="navegacion__enlace">Reseñas</a>
                </nav>
            </div>
        </div>
        <div class="header__texto centrar-texto">
            <h2 class="no-margin">Comparte y escucha música online</h2>
            <p class="no-margin">Miles de canciones a un solo click</p>
        </div>
    </header>
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
                    <a class="boton">Escuchar Música</a>
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
                    <a href="resena.html" class="boton">Reseñas</a>
                </div>
            </article>
        </main>
    </div>
    <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a href="index.php">
                    <h1 class="logo no-margin centrar-texto">MyMusic</h1>
                </a>
                <nav class="navegacion">
                    <a class="navegacion__enlace">Iniciar Sesión</a>
                    <a href="agregarMusic.php" class="navegacion__enlace">Subir Música</a>
                    <a class="navegacion__enlace">Nosotros</a>
                    <a href="resena.html" class="navegacion__enlace">Reseñas</a>
                </nav>
            </div>
        </div>
    </footer>
</body>
</html>