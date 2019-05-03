<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACAFUL</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="login/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="login/css/animate.css">
    
    <link rel="stylesheet" href="login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="login/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="login/css/magnific-popup.css">

    <link rel="stylesheet" href="login/css/aos.css">

    <link rel="stylesheet" href="login/css/ionicons.min.css">

    <link rel="stylesheet" href="login/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="login/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="login/css/flaticon.css">
    <link rel="stylesheet" href="login/css/icomoon.css">
    <link rel="stylesheet" href="login/css/style.css">
  </head>
  <body class="bg-light">
    

<section>
  <!-- Modal -->
    <div class="" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="blog-entry">
              <a class="block-20" style="background-image: url('login/images/image_1.jpg');">
              </a>
          </div>
          <div class="modal-body">
<form  action="autentica_login.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">


    <div class="form-group">
      <label for="first_name">Email</label>
      <input type="email" class="form-control" name="email" id="email"  required="yes">
    </div>
 

    <div class="form-group">
      <label for="email">Senha</label>
      <input type="password" class="form-control" name="senha" id="senha"  required="yes">
    </div>

    <div class="form-group"><center>
    <input class="btn btn-primary text-center" type="submit" name="Submit" value="Entrar">
    </div>
    <?php
    @$erro = $_GET['erro'];

    if ($erro == 1) {
      echo "Email ou senha inválidos.";
    }

    ?>
</form>
          </div>
          
        </div>
      </div>
    </div>
</center>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="login/js/jquery.min.js"></script>
  <script src="login/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="login/js/popper.min.js"></script>
  <script src="login/js/bootstrap.min.js"></script>
  <script src="login/js/jquery.easing.1.3.js"></script>
  <script src="login/js/jquery.waypoints.min.js"></script>
  <script src="login/js/jquery.stellar.min.js"></script>
  <script src="login/js/owl.carousel.min.js"></script>
  <script src="login/js/jquery.magnific-popup.min.js"></script>
  <script src="login/js/aos.js"></script>
  <script src="login/js/jquery.animateNumber.min.js"></script>
  <script src="login/js/bootstrap-datepicker.js"></script>
  <script src="login/js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="login/js/google-map.js"></script>
  <script src="login/js/main.js"></script>
    
  </body>
</html>