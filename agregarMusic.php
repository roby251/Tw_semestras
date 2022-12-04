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
    <form action="../Tw_semestras/enviar.php" class="formulario" method="POST" enctype="multipart/form-data">
      <div id="main" class="Campo">
              <label for="nombrec">Nombre de la canción:</label>
          <input class="CampoText" type=text name=NC placeholder="Ingrese nombre de canción">

      </div>
      <div class="Campo">
          <div class="">
              <label for="poderes">Artista:</label>
          </div>
          <div class="">
              <input class="CampoText" type=text name=NH placeholder="Ingrese nombre del artista">
          </div>
      </div>
      
      <div class="">
        <label for="Cancion">Canción:</label>
      </div>
      <div class="div_file">
        <label >Subir canción</label>
        <input id="BS" type="file" name="archivosubido" accept=".3g2,.3gp,.aaf,.asf,.avi,.cavs,.dv,.f4v,.flv,.ivf,.m2ts,.m2v,.m4v,.mkv,.mod,.mov,.mp4,.mpeg,.mpg,.mts,.mxf,.ogv,.qt,.rm,.rmvb,.tod,.ts,.vob,.webm,.wmv,.wtv,.aac,.ac3,.aif,.aiff,.amr,.ape,.asf,.caf,.dts,.flac,.m4a,.m4b,.m4r,.mp2,.mp3,.oga,.ogg,.opus,.ra,.spx,.tta,.voc,.w64,.wav,.wma,.wv,.m4r"> <br>
      </div>
      
      <div class="Campo">
          <div class="">
              <label for="Genero">Género de música:</label>
          </div>
          <div class="">
              <select class="CampoText" name="genero">
                  <option value="Pop"> Pop </option>
                  <option value="Rock">Rock </option>
                  <option value="Dubstep">Dubstep </option>      
                  <option value="Jazz">Jazz </option>   
                  <option value="Regueton">Regueton </option>   
                  <option value="Clasica">Clasica </option>   
                  <option value="Otros">Otros </option>         
              </select>
          </div>
      </div>
      <input class="BotonSubir" type=submit value="Enviar Solicitud">
    </form>
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