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
                                <h4 class="page-title">Adicionar Resultado Pt 2</h4>
                                <hr>

                <form method="POST" action="insert_infojogadores.php" enctype="multipart/form-data">
                   
                     <div class="row">
                     <div class="col">
                   <?php
                                include('conexao.php');
                                $timeA = $_GET['idA'];
                                $t = mysql_query("SELECT * FROM timec WHERE id_times = '$timeA'");
                                while ($ti = mysql_fetch_array($t)) {
                                ?>

                                <label style="font-size: 30px; margin-left: 420px;"><?php echo $ti['Nome_time'];?></label><hr><br>
                              

                                <?php } ?>
                                
                                <?php
                                
                                
                                $query = mysql_query("SELECT * FROM jogador WHERE timejogador = '$timeA'");
                                while ($coluna = mysql_fetch_array($query)) { ?>


                                
                                    <div class="row">
                                    <div class="col">        
                                    <label style="font-size: 20px;">Jogador: <?php echo $coluna['nome_jogador'];?></label><hr>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                    <label>Gols Realizados</label>
                                    <input name="golA[]" type="number" placeholder="0" class="form-control" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Cartões Amarelos</label>
                                    <input name="caA[]" type="number" placeholder="0" class="form-control" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Cartões Vermelhos</label>
                                    <input name="cvA[]" type="number" placeholder="0" class="form-control" style="width: 300px;">
                                    <input type="hidden" value="<?php echo $coluna['id_jogadores'];?>" name="jA[]">
                                    <br>
                                    </div>
                                    </div>
                                    <?php } ?>
                              
            <br><br><hr>
             </div>
             </div>


              <div class="row">
                     <div class="col">
                  <?php
                                include('conexao.php');
                                $timeB = $_GET['idB'];
                                $t2 = mysql_query("SELECT * FROM timec WHERE id_times = '$timeB'");
                                while ($ti2 = mysql_fetch_array($t2)) { ?>

                                <label style="font-size: 30px; margin-left: 420px;"><?php echo $ti2['Nome_time'];?></label><hr><br>
                              

                                <?php } ?>
                                
                                <?php
                                
                                
                                $query2 = mysql_query("SELECT * FROM jogador WHERE timejogador = '$timeB'");
                                while ($coluna2 = mysql_fetch_array($query2)) { ?>


                                
                                    <div class="row">
                                    <div class="col">        
                                    <label style="font-size: 20px;">Jogador: <?php echo $coluna2['nome_jogador'];?></label><hr>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                    <label>Gols Realizados</label>
                                    <input name="golB[]" type="number" placeholder="0" class="form-control" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Cartões Amarelos</label>
                                    <input name="caB[]" type="number" placeholder="0" class="form-control" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Cartões Vermelhos</label>
                                    <input name="cvB[]" type="number" placeholder="0" class="form-control" style="width: 300px;">
                                    <input type="hidden" value="<?php echo $coluna2['id_jogadores'];?>" name="jB[]">
                                    <br>
                                    </div>
                                    </div>
                                    <?php } ?>
                              
             <div class="row">
            <div class="col">             
            <input class="btn btn-primary" type="submit" value="Cadastrar">
            <a href="voltar_infojogadores.php"><button type="button" class="btn btn-success">Voltar</button></a>
             </div>
             </div>

                            </form>


                            </div>
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

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
        <script type="text/javascript" src="assets/js/funcao.js"></script>

    </body>

<!-- Miguel Henrique -->
</html>
