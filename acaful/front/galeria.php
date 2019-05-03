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
    <div class="hero-wrap-pages">
      <div class="overlay"></div>
      <div class="circle-bg"></div>
      <div class="circle-bg-2"></div>
      <div class="container-fluid">
      </div>
    </div>

<section class="ftco-section">
      <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
        <?php 

    include('conexao.php');

    $sql = "SELECT * FROM galeria ORDER BY idgaleria DESC";
    $query = mysql_query($sql);

    while ($cong = mysql_fetch_array($query)) { 
    ?>
          

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
            <img class="card-img-top" data-src="holder.js/fotos/galeria/<?php echo $cong['arquivo']?>" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="../fotos/galeria/<?php echo $cong['arquivo']?>" data-holder-rendered="true">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">ACAFUL</small>
                  </div>
                </div>
              </div>
            </div>
           <?php } ?>
              </div>
        </div>
      </div>
    </main>
  </section>


    


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre</h2>
              <?php
              include('conexao.php');
              $query = mysql_query("SELECT * FROM sobre");
              while ($coluna = mysql_fetch_array($query)) {
              ?>
              <p><?php echo $coluna['descricao'];?></p>
              
            </div>
          </div>
          <div class="col-md" style="margin-top: 150px;">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">E-mail</h2>
              <p><?php echo $coluna['email'];?></p>
            </div>
          </div>
          <div class="col-md" style="margin-top: 150px;">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Telefone</h2>
             <p><?php echo $coluna['telefone'];?></p>
            </div>
            <p class="ftco-heading-4" style="position: absolute; margin-left: 235px; margin-top: -180px;">Organizador</p>
            <img src="../fotos/sobre/<?php echo $coluna['foto'];?>" alt="Generic placeholder image" width="200px" height="200px" style="position: absolute; margin-left: 188px; margin-top: -150px;">
            <?php } ?>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <div class="block-23 mb-3">
                  </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  


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