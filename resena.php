<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Comparte tus canciones</title>
      <link rel="stylesheet" href="css/style.css">
      <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "header.php"; ?>
    <div class="contenedor">
        <div class= "portada">
            <div class="foto">
                <img src="multimedia/img/portada.jpg" alt="f">
            </div>
            <div class="foto-titulo">
                <h1>The Weekend</h1>
                <h2>Blinding Lights</h2>
            </div>
        </div>
    </div>
    <div class = "contenedor">
        <?php include "mostrarResena.php"; ?>
        <div class="add-resena">
            <form method="post">
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
                    <input type="submit" name="guardar">
                </div>
            </form>
            <?php include "agregarResena.php"; ?>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>