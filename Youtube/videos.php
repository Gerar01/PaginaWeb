<<!DOCTYPE html>
<html lang="en">
        <style tpye="text/css"> 
        .sombra { 
       margin-top: 10px; 
       box-shadow:  0 6px 15px black; /*THIS does not work as expected*/ 
      } 
    </style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Buscador de videos</title> 
    <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">
</head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../index.html">Pagina principal</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Rodadas
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="../rodadas/margaritas.php">Margaritas</a>
              <a class="dropdown-item" href="../rodadas/mirador.php">El Mirador</a>
              <a class="dropdown-item" href="../rodadas/15regimiento.php">15 Regimiento</a>
              <a class="dropdown-item" href="../rodadas/Copalar.php">Copalar</a>   
            </div>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Galería
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="../galeria/inicio.html">Nuestra Galeria</a> 
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Buscador de Videos
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="">
              <a class="dropdown-item" href="../Youtube/videos.php">Buscador de Videos Youtube</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Buscar Twett
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="">
              <a class="dropdown-item" href="../Twitter/twitter.php">Busca Hashtag</a> <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contacto
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
               <a class="dropdown-item" href="https://www.youtube.com/channel/UCxllolX8EupuFwT8WCh2ahw">Youtube</a>
              <a class="dropdown-item" href="https://web.whatsapp.com/">Whatsapp</a>
              <a class="dropdown-item" href="https://www.instagram.com/viajes_ecoturistica_oficial/?hl=es-la">Instagram</a>
              <a class="dropdown-item" href="https://www.facebook.com/Agencia-de-Viajes-Ecotur%C3%ADstica-101345705119675">Facebook</a>
              <a class="dropdown-item" href="https://accounts.google.com/ServiceLogin/signinchooser?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&followup=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Correo Electrónico</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../font.css">
  <link rel="stylesheet" href="../main.css">
  <title>Social-bar</title>
  <div class="social-bar">
    <a href="https://www.facebook.com/groups/2900480423528273" class="icon icon-facebook" target="_blank"></a>
    <a href="https://web.whatsapp.com/" class="icon icon-whatsapp" target="_blank"></a>
    <a href="https://www.youtube.com/channel/UCbrSh9_1qmeyhmCwbnIc3mA" class="icon icon-youtube" target="_blank"></a>
    <a href="https://www.instagram.com/rodadas_kilometro_96/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
  </div>
  <div id="formulario" class="row align-items-center justify-content-around">
      <div class="col-lg-4 col-10">
       <br><br> <h2 id="letrero">Buscador de Videos</h2>
        <br><br>
        <form method="post" action="#">
          <div class="form-row">
            <div class="col">
              <label for="busqueda">Palabras clave:</label>
              <input type="text" class="form-control" placeholder="Escribe lo que deseas buscar" name="busqueda">
              <label for="max">Máximo de resultados:</label>
              <input type="number" class="form-control" min="1" max="100" value="5" name="max">
              <br><button type="submit" class="btn btn-primary">Buscar</button>
            </div>
          </div>
      </form>
      </div>
      <div class="col-lg-6 col-10">
        <?php
          require_once '../googleapi/vendor/autoload.php';
          $tiene_busqueda = isset( $_POST['busqueda'] );
          $max = isset( $_POST['max'] ) ? $_POST['max'] : "5";
          if( $tiene_busqueda ) {
            $DEVELOPER_KEY = 'AIzaSyBJ6DAPz-cNbz3TjnWQucUUzG1VQWHWWr4';

            $client = new Google_Client();
            $client->setApplicationName('RodadaKilometro');
            $client->setDeveloperKey($DEVELOPER_KEY);

            // Define an object that will be used to make all API requests.
            $youtube = new Google_Service_YouTube($client);
            $respuesta = $youtube->search->listSearch('id,snippet', array(
                            'q' => $_POST['busqueda'],
                            'maxResults' => $max,
                            'order' => 'date'
                          ));
          
            foreach ($respuesta['items'] as $video) {
              $titulo = $video['snippet']['title'];
              $texto = $video['snippet']['description'];
              $fecha = $video['snippet']['publishedAt'];

              $thumbnails = $video['snippet']['thumbnails'];
              $imagen = $thumbnails['medium']['url'];

              $id = $video['id']['videoId']; 
            
        ?>

        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href="https://www.youtube.com/watch?v=<?php echo $id; ?>" target="_blank">
                <img src="<?php echo $imagen; ?>" class="card-img" alt="...">
              </a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $titulo; ?></h5>
                <p class="card-text"><?php echo $texto=="" ? "Sin descripción ... " : $texto; ?></p>
                <p class="card-text"><small class="text-muted"><?php echo $fecha; ?></small></p>
              </div>
            </div>
          </div>
        </div>

        <?php
            }
          } else {
        ?>
            <br><p id="ruta">Escribe tu búsqueda.</p>
        <?php
          }
        ?>
      </div>
    </div>
    <script type="text/javascript">
      $("#menu-youtube").addClass("active");
    </script>
    <br>
    <br>
    <br>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">MVZ.   : &copy; Rodadas Kilometro"</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
