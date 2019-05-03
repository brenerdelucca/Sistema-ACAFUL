<?php
session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
    echo "<script>window.location.href='login.php'</script>";
    exit;
}
?>
<!DOCTYPE html>
<html>

<!-- Miguel Henrique -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

        <title>ACAFUL</title>

        <link href="./Exemplo de álbum Bootstrap_files/bootstrap.min.css" rel="stylesheet">
        <link href="./Exemplo de álbum Bootstrap_files/album.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
    </head>

    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><i class="fa fa-code icon-c-logo"></i><span>ACA<i class="fa fa-soccer-ball-o"></i>FUL</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once'menu_lateral.php';?>
        
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12 card-box">
                                <h4 class="page-title">Editar Foto</h4>
                                <hr>
                            <h4 class="page-title" style="color: #fff;">Galeria</h4>
                            <label>Atenção!!!</label><br>
                            <label>Insira apenas imagens JPG, PNG ou JPEG.</label><br>
                            <label>Envie imagens com no maximo 2MB de tamanho.</label>

                            </div>
                        </div>

<div class="row">
  <div class="col-sm-12 card-box">



    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">

        <?php $id = $_GET['id']; ?>

        <?php 

    include('conexao.php');

    $sql = "SELECT * FROM galeria WHERE idgaleria = '$id'";
    $query = mysql_query($sql);

    while ($cong = mysql_fetch_array($query)) { 
    ?>
          

            <div class="col-md-4">
            <h2 style="font-size: 24px;">Você esta editando essa imagem:</h2>
              <div class="card mb-4 shadow-sm">
            <img class="card-img-top" data-src="holder.js/fotos/galeria/<?php echo $cong['arquivo']?>" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="fotos/galeria/<?php echo $cong['arquivo']?>" data-holder-rendered="true">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                    <small class="text-muted">ACAFUL</small>
                  </div>
                </div>
              </div>
            </div>
           <?php } ?>
              
              <div class="col-md-6" style="margin-top: 100px; margin-left: 60px;">
                  <?php
                        include('conexao.php');
                        $id = $_GET['id'];
                        $query = mysql_query("SELECT * FROM galeria WHERE idgaleria= '$id'");
                        while($coluna = mysql_fetch_array($query)){
                        ?>

                    <form action="update_fotos.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_galeria" value="<?php echo $coluna['idgaleria'];?>">
                        <div class="form-group">
                        <label for="ft" style="font-size: 20px;">Alterar a Foto</label>
                        <input type="file" name="img" class="form-control-file" id="ft"><br>
                        <button type="submit" class="btn btn-secondary">Atualizar</button> 

                             </div>
                              </form>
                        <div style="margin-left: 100px; margin-top: -50px;">
                        <a href="galeria.php" ><button class="btn btn-secondary">Voltar</button></a>
                        </div>
                    <?php } ?>
              </div>
              </div>
        </div>
      </div>
    </main>
   
    

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="./Exemplo de álbum Bootstrap_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Exemplo de álbum Bootstrap_files/popper.min.js.download"></script>
    <script src="./Exemplo de álbum Bootstrap_files/bootstrap.min.js.download"></script>
    <script src="./Exemplo de álbum Bootstrap_files/holder.min.js.download"></script>
  

<svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>


                            </div>
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; 2018. Todos os direitos reservados.
                </footer>

                <?php 

                        @$info = $_GET['info']; 

                        if($info=="erro-extensao"): ?>

                            <?php 
                            echo "
  <script>
  alert('Insira apenas imagens JPG, PNG ou JPEG');
  window.location.href='editar_foto.php';
  </script>
  ";
                            ?>

                        <?php endif; ?>

                        <?php 

                        @$info = $_GET['info']; 

                        if($info=="erro-tamanho"): ?>

                            <?php 
                            echo "
  <script>
  alert('Envie imagens com no maximo 2MB de tamanho');
  window.location.href='editar_foto.php';
  </script>
  ";
                            ?>

                        <?php endif; ?>

                        <?php 

                        @$info = $_GET['info']; 

                        if($info=="erro-extensao"): ?>

                            <?php 
                            echo "
  <script>
  alert('Não foi possivel adicionar a imagem');
  window.location.href='editar_foto.php';
  </script>
  ";
                            ?>

                        <?php endif; ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Miguel Henrique -->
</html>
