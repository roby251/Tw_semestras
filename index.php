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
    <div class="container">
        <h3 class="h3 centrar-texto">Bienvenido a MyMusic</h3>
        <form>
            <div class="text-center row row-cols-1 row-cols-md-3 g-3">
                <div class="col-12 col-md-5 my-3">
                    <label for="InputBusqueda" class="form-label">Busqueda por nombre:</label>
                    <input type="text" class="form-control" name="busqueda">
                </div>
                <div class="col-12 col-md-5 my-3">
                    <label for="selectcategoriabuscar" class="form-label">Busqueda por categoría:</label>
                    <select class="mx-2 form-select" name="categoria">
                        <option value="" selected>Seleccione una opción</option>
                        <option value="Pop"> Pop </option>
                        <option value="Rock">Rock </option>
                        <option value="Dubstep">Dubstep </option>      
                        <option value="Jazz">Jazz </option>   
                        <option value="Regueton">Regueton </option>   
                        <option value="Clasica">Clasica </option>   
                        <option value="Otros">Otros </option>  
                    </select>
                </div>
                <div class="col col-md-2 my-3">
                    <a href="#" class="btn btn-primary">Buscar</a>
                </div>
            </div>
        </form>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php // Primera canción recuperada
            $primeracancion = mysqli_fetch_array($canciones,MYSQLI_ASSOC);
            if (!empty($primeracancion)) {
                foreach($canciones as $cancion) {?>
                    <div class="col my-3">
                        <div class="card text-center h-100" style="width: 18rem;">
                            <img src="./multimedia/img/escucharmusica.jpg" class="card-img-top" alt="imagen escuchar musica">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $cancion['nombre_cancion']; ?></h5>
                                <p class="card-text"><?php echo $cancion['nombre_artista']; ?></p>
                                <a href="escucharMusica.php?id='<?php echo $cancion['cancion_id']; ?>'" class="btn btn-primary">Ver y Escuchar Música</a>
                            </div>
                        </div>
                    </div>
                <?php } 
            }
            else{
                echo 'No hay canciones disponibles';
            }
        ?>
        </div>
        </main>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
<?php
    $conn->close();
?>