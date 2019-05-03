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
                                <h4 class="page-title">Editar Jogador</h4>
                                <hr>
                                <?php
                              include('conexao.php');
                              $id = $_GET['id'];
                              $query = mysql_query("SELECT * FROM jogador WHERE id_jogadores = '$id'");
                              while($coluna = mysql_fetch_array($query)){
                              ?>

                <form method="POST" action="update_jogador2.php" enctype="multipart/form-data">
            <input type="hidden" name="id_jogadores" value="<?php echo $coluna['id_jogadores'];?>">

                                <div class="row">
                                    <div class="col">
                                    <label>Nome do Jogador</label>
                                    <input value="<?php echo $coluna['nome_jogador'];?>" name="nome_jogador" type="text" class="form-control" required="" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Data de Nascimento</label>
                                    <input value="<?php echo $coluna['nascimento'];?>" name="nascimento" type="date" class="form-control"  required="" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Posição</label>
                                    <select class="form-control" name="posicao" style="width: 300px;">
                                        <option value="2">Gol</option>
                                        <option value="1">Linha</option>
                                    </select><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                    <label>Gols Realizados</label>
                                    <input value="<?php echo $coluna['gols'];?>" name="gols" type="number" class="form-control" required="" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Gols Sofridos</label>
                                    <input value="<?php echo $coluna['cartoes_amarelos'];?>" name="GS" type="number" class="form-control"  required="" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Cartões Amarelos</label>
                                    <input value="<?php echo $coluna['cartoes_vermelhos'];?>" name="CA" type="number" class="form-control"  required="" style="width: 300px;">
                                    <br>
                                    </div>
                                </div>

                                 <div class="row"> 
                                  <div class="col">
                                    <label>Cartões Vermelhos</label>
                                    <input value="<?php echo $coluna['cartoes_vermelhos'];?>" name="CV" type="number" class="form-control"  required="" style="width: 300px;">
                                    </div>

                                <div class="col">
                                    <label>Categoria</label>
                                   <select id="categoria" name="categoria" class="form-control"  required="" style="width: 300px;">
                                    <?php
                                    include('conexao.php');
                                    $query = mysql_query("SELECT * FROM jogador
                                                          INNER JOIN timec ON jogador.timejogador = timec.id_times INNER JOIN categoria ON timec.categoria_time = categoria.idCategoria  WHERE id_jogadores = '$id'");
                                    while ($rs = mysql_fetch_array($query)) {?>
                                    <option value="<?php echo $comp = $rs['idCategoria'];?>"><?php echo $rs['Categoria']; ?></option>
                                    <?php } ?>
                                    <?php
                    include('conexao.php');
                              $id = $_GET['id'];
                 $query3 = mysql_query("SELECT * FROM categoria WHERE idCategoria != '$comp'");
                              while($coluna3 = mysql_fetch_array($query3)){
                    ?>
                        <option value="<?php echo $coluna3['idCategoria'];?>"><?php echo $coluna3['Categoria'];?></option> 
                              <?php } ?>
                                    </select>
                                 </div>

                                 <div class="col">
                                    <label>Time</label>
                                    <select id="time" name="time" class="form-control" style="width: 300px;">  
                                    <?php  
                         include('conexao.php');
                        $query2 = mysql_query("SELECT * FROM jogador
                         INNER JOIN timec ON jogador.timejogador = timec.id_times WHERE id_jogadores = '$id'");
                                    while ($rs2 = mysql_fetch_array($query2)) {?>
                                    ?>
                                    <option value="<?php echo $rs2['id_times'];?>"><?php echo $rs2['Nome_time'];?></option>
                                    <?php } ?>
                                </select>
                                <br>
                                 </div>
                                </div>

            <input class="btn btn-primary" type="submit" value="Atualizar">
            <a href="jogadores7.php"><button type="button" class="btn btn-success">Voltar</button></a>
                            </form>
                            <?php } ?>

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
        <script type="text/javascript" src="assets/js/funcao.js"></script>

    </body>

<!-- Miguel Henrique -->
</html>
