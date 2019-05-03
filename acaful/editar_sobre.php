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
                            <div class="col-sm-6 card-box">
                                <h4 class="page-title">Sobre</h4>
                                <hr>
                                  <label>Atenção!!!</label><br>
                            <label>O sobre pode ser editado a qualquer momento, porém não pode ser excluido.</label><br>
                            <label>Lembre-se que o sobre deve conter as informações mais relevantes a respeito do campeonato, ja que ele fica na pagina dos usuários podendo ser visualizada por todos.</label>

                            </div>
                            <div class="col-sm-6 card-box">
                            <h4 class="page-title" style="color: #fff;">Galeria</h4>
                            <hr>
                            </div>
                        </div>
                               

                        <div class="col-sm-12 card-box">

                    <?php
                    include('conexao.php');
                    $query15 = mysql_query("SELECT * FROM sobre");
                    while($coluna90 = mysql_fetch_array($query15)){  ?>


                        <form method="POST" action="update_sobre.php" enctype="multipart/form-data">
                         <div class="row">
                            <div class="col-sm-6 card-box">
                            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="fotos/sobre/<?php echo $coluna90['foto']?>" data-holder-rendered="true" style="width: 500px; height: 500px;"><br><br>
                            <input type="file" name="img">
                            </div>

                         

                            <div class="col-sm-6 card-box">
                                
                                <div class="row">
                                    <div class="col">
                                    <label>Email</label>
                                    <input name="emails" type="email" class="form-control" placeholder="Exemplo: email@hotmail.com" value="<?php echo $coluna90['email']?>" required="" style="width: 400px;"><br>
                                    </div>
                                    <div class="col">
                                    <label>Telefone</label>
                                    <input name="telefones" type="text" class="form-control"  required="" value="<?php echo $coluna90['telefone']?>" placeholder="Exemplo: 3345-5775" style="width: 400px;"><br>
                                    </div>
                                     <div class="col">
                                    <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição</label>
    <textarea placeholder="Breve descrição sobre o campeonato." name="descricaos" required="" class="form-control"  id="exampleFormControlTextarea1" style="width: 400px; height: 200px;" rows="3"><?php echo $coluna90['descricao']?></textarea>
  </div>   
  </div>                   
                                </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
                            </form>
                            <?php } ?>
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
