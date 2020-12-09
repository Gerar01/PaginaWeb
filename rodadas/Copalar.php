<!DOCTYPE html>
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
    <title>Rodada a Copalar</title> 
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
               <a class="dropdown-item" href="https://www.youtube.com/channel/UCbrSh9_1qmeyhmCwbnIc3mA">Youtube</a>
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
  <br><center><h2><b>Rodada a Copalar</b></h2></center>
      <br><br class="d-lg-none d-block"><br class="d-lg-none d-block">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-4 col-10 order-lg-1 order-2">
        <?php

            $respuesta3 = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyD7BBiSsezwo97XAFbdRPK_I6STi3x00Gg&origin=16.2469659,-92.1200795&destination=16.1775186,-92.0731257&mode=bicycling");
            $json = json_decode($respuesta3);

            $distancia = $json->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
            $duracion = $json->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"text"};
            $resumen = $json->{"routes"}[0]->{"summary"};
        ?>
        <div  class="card sombra">
          <div class="card-header">
            <h3 class="card-title"><center><?php echo $resumen; ?></center></h3>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p><?php echo "<strong>Distancia:</strong> " . $distancia; ?></p>
              <p><?php echo "<strong>Duración:</strong> " . $duracion; ?></p>
              <footer class="blockquote-footer">Modo <cite title="Source Title">Bicycling </cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-10 order-lg-2 order-1">           
        <br>
        <br>
    <iframe  class="sombra"  width="100%" height="450" frameborder="0" style="border:0" 
    src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyD7BBiSsezwo97XAFbdRPK_I6STi3x00Gg&origin=16.2469659,-92.1200795&destination=16.1775186,-92.0731257&mode=bicycling" allowfullscreen></iframe>
</div>
    </div>
    </div>
    <br>
    <center><h2><b>¿Tienes dudas para salir de casa?</b></h2></center>
    <center><h5><b>Consulta como estará el clima del día de hoy </b></h5></center>
    <div>
    <!-- weather widget start --><div id="m-booked-weather-bl250-80380">
     <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:336px;" id="width2">
      <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18">
       <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="https://www.booked.net" /> 
       </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>21</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>22&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>11&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Comitan </div> <div class="booked-wzs-250-175-date">Miércoles, 02 Diciembre</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Previsión para 7 días</span> </div> </div> </div> </div> <a target="_blank" href="https://booked.mx/weather/comitan-w588808"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Juv</td> <td>Vie</td> <td>Sáb</td> <td>Dom</td> <td>Lun</td> <td>Mar</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>22&deg;</td> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> <td class="week-day-val"><span class="plus">+</span>20&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> <td class="week-day-val"><span class="plus">+</span>14&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-80380'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=w588808&type=3&scode=124&ltid=3458&domid=583&anc_id=31479&cmetric=1&wlangID=4&color=137AE9&wwidth=336&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script>

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
