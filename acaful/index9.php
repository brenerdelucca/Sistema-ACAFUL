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

        <title>ACAFUL</title>

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
                 <a href="sair.php" class="btn btn-primary" style="position: absolute; margin-left: 1250px; margin-top: -50px;">sair</a>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once'menu_lateral.php';?>
        




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
                                <h4 class="page-title">Resultados dos Jogos Sub-07</h4><br>  <a href="add_resultado.php" class="btn btn-primary"> <i class = "fa fa-plus"></i> ADICIONAR RESULTADO</a>
                            </div>
                                <hr>
                        <hr>
                        <?php
                        include('conexao.php');
                        $query1 = mysql_query("SELECT * FROM resultado_jogo INNER JOIN timec ON timec.id_times = resultado_jogo.time_a WHERE categoria_jogo = 2");
                        while ($coluna1 = mysql_fetch_array($query1)) {
                          $time_a = $coluna1['time_a'];
                          $time_b = $coluna1['time_b'];
                        
                        ?>
                         
                            
                         <div class="col-sm-12 card-box">
                <h4 class="text-uppercase" style="font-family: arial black; text-align: center; font-size: 30px;"><?php echo $coluna1['rodada'];?></h4>
                          
                    
                    <ul class="list-inline" style="text-align: center;">
  <li style="font-size: 20px;" class="list-inline-item"><?php echo date("d/m/Y",  strtotime($coluna1['dia_jogo']));?> - </li>
  <li style="font-size: 20px;" class="list-inline-item"><?php echo $coluna1['local']?> - </li>
  <li style="font-size: 20px;" class="list-inline-item"><?php echo date("H:i",  strtotime($coluna1['hora']));?></li>
                    </ul>
                    <hr>

                    <div class="row">
                <div class="col-md-3" style=" margin-left: 120px;">

                <?php
                $query2 = mysql_query("SELECT * FROM timec WHERE id_times = $time_a");
                while ($coluna2 = mysql_fetch_array($query2)) { ?>
                <img style="margin-left: 78px;" class="rounded-circle" width="100" height="100" src="fotos/times/<?php echo $coluna2['emblema_time'];?>">
                <p style="font-size: 35px; text-align: center;"><?php echo $coluna2['Nome_time'];?></p>
                </div>
                <?php } ?>

                <div class="col-md-1">
                        <p style="font-size: 120px; margin-top: -20px;"><?php echo $coluna1['gols_timea'];?></p>
                </div>
                <div class="col-md-1">
                          <p style="font-size: 120px; margin-top: -20px;">X</p>
                </div>
                <div class="col-md-1">
                        <p style="font-size: 120px; margin-top: -20px;"><?php echo $coluna1['gols_timeb'];?></p>
                        
                </div>

                <div class="col-md-3">
                <?php
                $query3 = mysql_query("SELECT * FROM timec WHERE id_times = $time_b");
                while ($coluna3 = mysql_fetch_array($query3)) { ?>    
                <img style="margin-left: 78px;" class="rounded-circle" width="100" height="100" src="fotos/times/<?php echo $coluna3['emblema_time'];?>">    
                <p style="font-size: 35px; text-align: center;"><?php echo $coluna3['Nome_time'];?></p>
                <?php } ?>
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



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; 2018. Todos os direitos reservados.
                </footer>

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

