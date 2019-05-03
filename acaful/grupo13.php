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
                                <h4 class="page-title">Grupos Sub-13</h4><br>  <a href="select/add_grupos.php" class="btn btn-primary"> <i class = "fa fa-plus"></i> ADICIONAR GRUPO</a>
                            </div>
                                <hr>
                        <?php
                        include('conexao.php');
                        $query = mysql_query("SELECT * FROM grupos WHERE categoria_grupo = 4 GROUP BY grupo");
                        while ($cong = mysql_fetch_array($query)) {
                        ?>

                        <div class="col-sm-4 card-box">



                               <ul class="list-group">
                         <li class="list-group-item list-group-item-dark" style="text-align: center;"><?php echo  $birl = $cong['grupo'];?> </li>

                         <?php
                         include('conexao.php');
                         $query2 = mysql_query("SELECT * FROM grupos WHERE grupo = '$birl' AND categoria_grupo = 4 ");
                         while ($coluna = mysql_fetch_array($query2)){
                         ?>

                          <li class="list-group-item list-group-item-light" style="text-align: center;"><?php echo utf8_encode(utf8_decode($coluna['time_gp']));?></li>
                          <?php } ?>
                          <li class="list-group-item list-group-item-light" style="text-align: center;"><table>
                                    <tr>
                                    <th>
                     <a href="select/editar_grupo.php?gp=<?php echo $cong['grupo'];?>"><button type="button" class="btn btn-secondary" style="width: 100px; margin-left: 7px;">Editar</button>
                                    </th>
                                    <th>
                    <a href="deletar_grupo.php?gp=<?php echo $cong['grupo'];?>" onclick="return confirm('Você tem certeza?')"><button type="button" class="btn btn-secondary" style="margin-left: 77px; width: 100px;">Excluir</button>
                                    </th>
                                    </tr>
                                 </table></li>
                            </ul>
                        </div>
                        <?php } ?>

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
