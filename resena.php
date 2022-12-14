<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyMusic</title>
    <meta name="description" content="Página web de blog de música">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "header.php"; ?>
    <div class="contenedor">
        <div class= "portada">
            <div class="foto">
                <img src="multimedia/img/brr.jpg" alt="f">
            </div>
            <div class="foto-titulo">
                <h1> Marcianeke</h1>
                <h2> El hit del momento</h2>
            </div>
        </div>
        <div class = "descripcion">
            <form method="post"> 
                <input type="text" name="autor" placeholder="Autor">
                <input type="text" name="comentario" placeholder="Ingrese su resena aqui">
                <input type="submit" name="guardar">
            </form>
            <?php 
                include(guardarResena.php);
            ?>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>