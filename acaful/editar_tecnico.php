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
                                <h4 class="page-title">Editar Técnico</h4>
                                <hr>

                                <?php
                              include('conexao.php');
                              $id = $_GET['id'];
                              $query = mysql_query("SELECT * FROM tecnico WHERE id_tecnico = '$id'");
                              while($coluna = mysql_fetch_array($query)){
                              ?>


                <form method="POST" action="update_tecnicos.php" enctype="multipart/form-data">
            <input type="hidden" name="id_tecnico" value="<?php echo $coluna['id_tecnico'];?>">
                                <div class="row">
                                    <div class="col">
                                    <label>Nome do Técnico</label>
                                    <input name="nome_tecnico" type="text" class="form-control" value="<?php echo $coluna['nome_tecnico'];?>" required="" style="width: 300px;">
                                    </div>
                                    <div class="col">
                                    <label>Telefone</label>
                                    <input name="telefone" type="text" class="form-control"  required="" style="width: 300px;" value="<?php echo $coluna['telefone'];?>">
                                    </div>
                                    <div class="col">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control"  required="" style="width: 300px;" value="<?php echo $coluna['email'];?>">
                                    </div>
                                </div>
                                 <div class="row"> 
                                 <div class="col">
                                    <label>Cidade</label>
                                    <input name="cidade" type="text" class="form-control"  required="" style="width: 300px;" value="<?php echo $coluna['cidade'];?>">
                                    </div>                     
                                <div class="col">
                                    <label>Categoria</label>
                                    <select id="categoria" name="categoria" class="form-control"  required="" style="width: 300px;">
                                    <?php
                                    include('conexao.php');
                                    $query = mysql_query("SELECT * FROM tecnico
                                                          INNER JOIN timec ON tecnico.timetecnico = timec.id_times INNER JOIN categoria ON timec.categoria_time = categoria.idCategoria  WHERE id_tecnico = '$id'");
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
                        $query2 = mysql_query("SELECT * FROM tecnico
                         INNER JOIN timec ON tecnico.timetecnico = timec.id_times WHERE id_tecnico = '$id'");
                                    while ($rs2 = mysql_fetch_array($query2)) {?>
                                    ?>
                                    <option value="<?php echo $rs2['id_times'];?>"><?php echo $rs2['Nome_time'];?></option>
                                    <?php } ?>
                                </select>
                                <br>
                                 </div>
                                 <div class="col">
                                 <div class="col-md-4">
                                    <label>Foto do Técnico</label><br>
           <img style="margin-left: 00px;" class="rounded-circle" src="fotos/tecnicos/<?php echo $coluna['foto_tecnico'];?>" alt="Generic placeholder image" width="140" height="140">
                <div class="card-body">
                <input style="margin-left: -20px;" type="file" name="img"><br>
                                <br>
                </div>           
            </div>
                                 </div>
                                </div>

            <input class="btn btn-primary" type="submit" value="Atualizar">
            <a href="tecnicos7.php"><button type="button" class="btn btn-success">Voltar</button></a>
                            </form>

                            <?php } ?>
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
  window.location.href='editar_tecnicos.php';
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
  window.location.href='editar_tecnicos.php';
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
  window.location.href='editar_tecnicos.php';
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
        <script type="text/javascript" src="assets/js/funcao.js"></script>

    </body>

<!-- Miguel Henrique -->
</html>
