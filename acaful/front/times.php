<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACAFUL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img class="logo-index" src="images/logoi.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tabelas</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="SUB-7.php">SUB-7</a>
                  <a class="dropdown-item" href="SUB-9.php">SUB-9</a>
                  <a class="dropdown-item" href="SUB-11.php">SUB-11</a>
                  <a class="dropdown-item" href="SUB-13.php">SUB-13</a>
                  <a class="dropdown-item" href="SUB-15.php">SUB-15</a>
                  <a class="dropdown-item" href="SUB-15F.php">SUB-15 Feminino</a>
                  <a class="dropdown-item" href="SUB-17.php">SUB-17</a>

                </div>
            </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Times</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="times.php">SUB-7</a>
                  <a class="dropdown-item" href="times9.php">SUB-9</a>
                  <a class="dropdown-item" href="times11.php">SUB-11</a>
                  <a class="dropdown-item" href="times13.php">SUB-13</a>
                  <a class="dropdown-item" href="times15.php">SUB-15</a>
                  <a class="dropdown-item" href="times15f.php">SUB-15 Feminino</a>
                  <a class="dropdown-item" href="times17.php">SUB-17</a>
                </div>
          <li class="nav-item"><a class="nav-link" href="galeria.php">Galeria</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap">
      <div class="overlay"></div>
      <div class="circle-bg"></div>
      <div class="circle-bg-2"></div>
      <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Times</h1>
          </div>
        </div>
      </div>
    </div>

        <section class="ftco-section">
      <div class="container align-items-center">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">ACAFUL</span>
            <h2 class="mb-4">ACOMPANHE</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
            <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            

            </div>
          </div>
          <div class="col-md-12 align-items-center ftco-animate">
            
            <div class="tab-content ftco-animate" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-Sub-07" role="tabpanel" aria-labelledby="v-pills-Sub-07-tab">
          <div class="container-wrap">
          <div class="row no-gutters d-flex justify-content-center">
          <?php
                                include("conexao.php");

                        $query2 = mysql_query("SELECT * FROM timec WHERE categoria_time = 1 ORDER BY Nome_time");
                             while ($coluna22 = mysql_fetch_array($query2)){
                              $id_times = $coluna22['id_times'];
                                ?>
            <div class="col-md-5 d-flex ftco-animate align-items-center">
              <div class="services-wrap d-flex">
                <a href="#" class="img" style="background-image: url(images/work-1.jpg);"></a>
                <img style="margin-left: 90px;" class="rounded-circle" src="../fotos/times/<?php echo $coluna22['emblema_time'];?>" alt="Generic placeholder image" width="140" height="140">
                <div class="text p-4">
                  <h4 class="t"><?php echo $coluna22['Nome_time'];?></h4>
                  <?php
                  $query3 = mysql_query("SELECT * FROM tecnico WHERE timetecnico = '$id_times' LIMIT 1");
                  while ($rs = mysql_fetch_array($query3)) {
                  ?>
                  <h6 class="t">Técnico: <?php echo $rs['nome_tecnico'];?></h6>
                  <?php } ?>
                  
                  <p><?php echo $coluna22['Descricao'];?></p>
                </div>
              </div>
            </div>
            <?php } ?>
          
      

            </div>
            </div>
            </div>
            </div>

              
            </div>
            </div>
            </div>
            </div>
            </section>
          

   

    <?php include_once('sobregeral.php'); ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>