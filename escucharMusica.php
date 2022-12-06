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
                        <img src="multimedia/img/brr.jpg" alt="f">
                    </div>
                    <div class="foto-titulo">
                        <h1> Marcianeke</h1>
                        <h2> El hit del momento</h2>
                    </div>
                </div>
                <div class = "descripcion">
                    <p>
                        <h2>Eduardo Apata</h2>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique molestiae corrupti blanditiis pariatur, laboriosam necessitatibus consectetur labore illo repellendus rem doloremque ea rerum saepe mollitia tempore tempora ad suscipit obcaecati?</span>
                        <h2>Jack Torres</h2>
                        <span>Consectetur quo voluptatum ipsam assumenda ratione. Vero, ipsa deleniti nisi cupiditate, error incidunt corrupti hic sint facere suscipit debitis, vel quo corporis. Repellendus quae cum, distinctio quibusdam delectus nobis debitis?</span>
                        <h2>Pepito Perez</h2>
                        <span>Eum minima, provident reiciendis tempora cum maxime commodi eius! Voluptatum facere saepe voluptates, repellendus esse quisquam ullam iste fugiat, aspernatur ipsum ratione soluta officiis laborum ipsam accusantium consectetur illo libero!</span>
                        <h2>Bastian Mamani</h2>
                        <span>Explicabo sed quasi reiciendis maiores exercitationem ad enim fugit saepe natus, pariatur accusamus aspernatur veritatis libero, porro molestias unde laboriosam voluptates expedita, ea culpa dicta dignissimos! Possimus atque eveniet adipisci.</span>
                        <span>Dolorum consequuntur, inventore nihil aspernatur minima rerum ut velit voluptas est reprehenderit, possimus ea. Aliquam sapiente, placeat ea esse et impedit ab excepturi vero porro quos deleniti, explicabo accusantium id!</span>
                        <span>Alias veritatis molestiae delectus. Possimus corporis dolore voluptatem, perferendis praesentium tempora aperiam unde reiciendis, ipsum impedit neque illum cum. Quos sed corrupti asperiores, tempora laboriosam perferendis magnam repellendus rem vitae.</span>
                    </p>
                </div>
            </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
<?php
    $conn->close();
?>