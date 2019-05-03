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
                                <h4 class="page-title">Times Sub-17</h4><br>  <a href="add_times.php" class="btn btn-primary"> <i class = "fa fa-plus"></i> ADICIONAR TIME</a>
                            </div>
                                <hr>
                        <?php
                                include("conexao.php");

                        $query2 = mysql_query("SELECT * FROM timec WHERE categoria_time = 6" );
                             while ($coluna2 = mysql_fetch_array($query2)){
                                ?>

                        <div class="col-sm-4 card-box">
                        <div class="col-lg-12" >
            <img style="margin-left: 90px;" class="rounded-circle" src="fotos/times/<?php echo $coluna2['emblema_time'];?>" alt="Generic placeholder image" width="140" height="140">
            <h2 style="text-align: center;"><?php echo $coluna2['Nome_time'];?></h2>
            <div class="table-responsive">   
            <table class="table">
            <tbody>
                    <tr>
                         <th>Telefone:</th>
                         <td><?php echo $coluna2['Telefone'];?></td>
                    </tr>
                    <tr>    
                         <th>Cidade:</th>
                         <td><?php echo $coluna2['Cidade'];?></td>
                    </tr>                   
            </tbody>
            </table>
            <table class="table">
            <tbody>
                <tr>
                         <th>Descrição</th>
                         
                </tr>
                <tr>
                    <td><?php echo $coluna2['Descricao'];?></td>
                </tr>
            </tbody>
            </table>
             <table class="table">
            <tbody>
                <tr>
                    <th>P</th>
                    <th>J</th>
                    <th>SG</th>
                    <th>GP</th>
                    <th>GC</th>
                    <th>V</th>
                    <th>D</th>
                    <th>E</th>
                </tr>
                <tr>
                    <td><?php echo $coluna2['pontos'];?></td>
                    <td><?php echo $coluna2['jogos'];?></td>
                    <td><?php echo $coluna2['saldo_gols'];?></td>
                    <td><?php echo $coluna2['gols_pro'];?></td>
                    <td><?php echo $coluna2['gols_contra'];?></td>
                    <td><?php echo $coluna2['vitorias'];?></td>
                    <td><?php echo $coluna2['derrotas'];?></td>
                    <td><?php echo $coluna2['empates'];?></td>
                </tr>
            </tbody>
            </table>
            <div>
             <a style="width: 150px;" class="btn btn-secondary" href="deletar_time.php?id=<?php echo $coluna2['id_times'];?>" role="button" onclick="return confirm('Você tem certeza?')">Excluir</a>
            </div>

            <div style="margin-left: 155px; margin-top: -35px; width: 150px;">
             <a style="width: 150px;" class="btn btn-secondary" href="editar_time.php?id=<?php echo $coluna2['id_times'];?>" role="button">Editar</a>
            </div>

            </div>   
                    
            </div>
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
