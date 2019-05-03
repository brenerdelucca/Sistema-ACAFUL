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
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                        <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                        <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
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
                                <h4 class="page-title">Editar Time</h4>
                                <hr>

                                <?php
                              include('conexao.php');
                              $id = $_GET['id'];
                              $query = mysql_query("SELECT * FROM timec WHERE id_times = '$id'");
                              while($coluna = mysql_fetch_array($query)){
                              ?>

                <form method="POST" action="update_time.php" enctype="multipart/form-data">
                 <input type="hidden" name="id_times" value="<?php echo $coluna['id_times'];?>">
                                <div class="row">
                                    <div class="col">
                                    <label>Nome Time</label>
                                    <input name="Nome" type="text" class="form-control" placeholder="Exemplo: São Paulo" required=""  value="<?php echo $coluna['Nome_time'];?>">
                                    </div>
                                    <div class="col">
                                    <label>Telefone</label>
                                    <input name="Telefone" type="text" class="form-control" placeholder="Exemplo: 43 3325-5566" required="" value="<?php echo $coluna['Telefone'];?>">
                                    </div>
                                    <div class="col">
                                    <label>Cidade</label>
                                    <input type="text" name="Cidade" class="form-control" placeholder="Exemplo: Londrina PR" required=""  value="<?php echo $coluna['Cidade'];?>"><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <label>Pontos</label>
                                    <input name="pontos" type="number" class="form-control"  required=""  value="<?php echo $coluna['pontos'];?>">
                                    </div>
                                    <div class="col">
                                    <label>Jogos</label>
                                    <input name="jogos" type="number" class="form-control"  required=""  value="<?php echo $coluna['jogos'];?>">
                                    </div>
                                    <div class="col">
                                    <label>Gols Pró</label>
                                    <input name="gp" type="number" class="form-control"  required=""  value="<?php echo $coluna['gols_pro'];?>">
                                    </div>
                                    <div class="col">
                                    <label>Gols Contra</label>
                                    <input name="gc" type="number" class="form-control"  required=""  value="<?php echo $coluna['gols_contra'];?>">
                                    </div>
                                    <div class="col">
                                    <label>Vitórias</label>
                                    <input name="vitorias" type="number" class="form-control"  required=""  value="<?php echo $coluna['vitorias'];?>">
                                    </div>
                                    <div class="col">
                                    <label>Empates</label>
                                    <input name="empates" type="number" class="form-control"  required=""  value="<?php echo $coluna['empates'];?>">
                                    </div>
                                    <div class="col">
                                    <label>Derrotas</label>
                                    <input name="derrotas" type="number" class="form-control"  required=""  value="<?php echo $coluna['derrotas'];?>"><br>
                                    </div>
                                    
                                </div>
                                 <div class="row">
                                <div class="form-group">
    <label for="exampleFormControlTextarea1" style="margin-left: 10px;">Descrição</label>
    <textarea name="Descricao" required="" class="form-control" id="exampleFormControlTextarea1" style="width: 300px; margin-left: 10px;" rows="3"><?php echo $coluna['Descricao'];?></textarea>
  </div>                      
                                <div class="col">
                                    <label style="margin-left: 10px;">Categoria</label>
                <select class="form-control" name="categoria" required="" style="width: 200px; margin-left: 10px;">
                                    
                    <?php
                              include('conexao.php');
                              $id = $_GET['id'];
                              $query2 = mysql_query("SELECT *, categoria.Categoria FROM timec INNER JOIN categoria ON timec.categoria_time = categoria.idCategoria WHERE id_times = '$id'");
                              while($coluna2 = mysql_fetch_array($query2)){
                              ?>

                              <option value="<?php echo $comp = $coluna2['idCategoria'];?>"><?php echo $coluna2['Categoria'];?></option> 
                              <?php } ?>

                    <?php
                    include('conexao.php');
                              $id = $_GET['id'];
                 $query3 = mysql_query("SELECT * FROM categoria WHERE idCategoria != '$comp'");
                              while($coluna3 = mysql_fetch_array($query3)){
                    ?>
                        <option value="<?php echo $coluna3['idCategoria'];?>"><?php echo $coluna3['Categoria'];?></option> 
                              <?php } ?>     
                </select><br>
                                 </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                 <div class="col-md-4">
                                    <label>Emblema do Time</label><br>
           <img style="margin-left: 00px;" class="rounded-circle" src="fotos/times/<?php echo $coluna['emblema_time'];?>" alt="Generic placeholder image" width="140" height="140">
                <div class="card-body">
                <input style="margin-left: -20px;" type="file" name="img"><br>
                                <br>
                </div>           
            </div>
                                 </div>
                                </div>


            <br><input class="btn btn-primary" type="submit" value="Salvar">
            <a href="times7.php"><button type="button" class="btn btn-success">Voltar</button></a>
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

    </body>

<!-- Miguel Henrique -->
</html>
