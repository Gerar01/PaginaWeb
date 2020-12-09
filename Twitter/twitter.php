<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Buscador de Hashtags</title> 
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
  </div>
  <div id="formulario" class="row align-items-center justify-content-around">
      <div class="col-lg-4 col-10">
        <br><h2 id="letrero">Buscador de Hashtags</h2>
        <br><br>
        <form method="post" action="twitter.php">
          <div class="form-row">
            <div class="col">
              <br><label for="latitud">Hashtag:</label>
              <input type="text" class="form-control" placeholder="Ingrese su Hashtag" name="hashtag">
            </div>
          </div>
         <br> <button type="submit" class="btn btn-primary">Ver Tweets</button>
       </form>
      </div>
      <div class="col-lg-6 col-10">
        <?php
          include("twitterQuery.php");
          $tiene_busqueda = isset( $_POST['hashtag'] );
          if( $tiene_busqueda ) {
            $respuesta = queryTwitter($_POST['hashtag']);

            $json = json_decode($respuesta);
            $statuses = $json->{'statuses'};
            $status0 = $statuses[0];
            $user = $status0->{'user'};
            $name = $user->{'screen_name'};
            $location = $user->{'location'};
            $fecha = $status0->{'created_at'};
            $texto = $status0->{'text'};
            $entities = $status0->{'entities'};
            $urls = $entities->{'urls'};
            $url0 = $urls[0];
            $url = $url0->{'url'};
        ?>
            <div class="card">
              <div class="card-header">
                @<?php echo $name.", ".$location; ?>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $texto; ?></h5>
                <p class="card-text"><?php echo $fecha; ?></p>
                <a href="<?php echo $url; ?>" target="_blank" class="btn btn-primary">Ver en Twitter</a>
              </div>
            </div>
        <?php
          } else {
        ?>
           <br><br> <p id="ruta">Escribe un hashtag a buscar.</p>
        <?php
          }
        ?>
      </div>
    </div>
    <script type="text/javascript">
      $("#menu-twitter").addClass("active");
      <?php include('scriptMenu.php'); ?>
    </script>

    <br><br><br><br><br><footer class="py-5 bg-dark">
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
