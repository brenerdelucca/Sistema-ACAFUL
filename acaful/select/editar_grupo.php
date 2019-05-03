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

        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        
        <script src="../assets/js/funcaog.js"></script>    
        <script src="assets/js/modernizr.min.js"></script>
    </head> 

    <body class="fixed-left">
            <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><i class="fa fa-code icon-c-logo"></i><span>MARI<i class="fa fa-code"></i>STA</span></a>
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
                                <h4 class="page-title">Editar Grupo</h4>
                                <hr>

                                 <?php
                              include('../conexao.php');
                              $id = $_GET['gp'];
                              $query = mysql_query("SELECT * FROM grupos WHERE grupo = '$id'");
                              while(@$coluna = mysql_fetch_array(@$query)){ ?>

                <form method="POST" action="../update_grupo.php" enctype="multipart/form-data">
        <input type="hidden" name="nome_gp" value="<?php echo $coluna['grupo'];?>">
                                <div class="row">
                                    <div class="col">
                                    <label>Nome do Grupo</label>
                                    <input name="grupo_n" type="text" class="form-control" value="<?php echo $coluna['grupo'];?>" required="" style="width: 300px;">
                                    </div>
                                    <div class="col" style="margin-left: 380px; margin-top: -63px; ">
                                    <label>Categoria</label>
                                    <select class="form-control" name="cat"  style="width: 300px; ">
                                    
                                        <?php
                                    include('../conexao.php');
                                    $query = mysql_query("SELECT * FROM grupos
                                                          INNER JOIN categoria ON grupos.categoria = categoria.idCategoria WHERE grupo = '$id' GROUP BY grupo");
                                    while ($rs = mysql_fetch_array($query)) {?>
                                    <option value="<?php echo $comp = $rs['idCategoria'];?>"><?php echo $rs['Categoria']; ?></option>
                                    <?php } ?>
                                    <?php
                    include('../conexao.php');
                              $id = $_GET['id'];
                 $query3 = mysql_query("SELECT * FROM categoria WHERE idCategoria != '$comp'");
                              while($coluna3 = mysql_fetch_array($query3)){
                    ?>
                        <option value="<?php echo $coluna3['idCategoria'];?>"><?php echo $coluna3['Categoria'];?></option> 
                              <?php } ?>

                                    </select><br>
                                    </div>


                                  </div>  
                                  <div style="width: 300px;">                    
                                    <label>Times</label>
                                  <?php

                        include('../conexao.php');


                        $query3 = "SELECT *, categoria.Categoria FROM timec INNER JOIN categoria ON timec.categoria_time = categoria.idCategoria";

                        $result1 = mysql_query($query3);

            ?>
                
                <select id="time" name="select_grupo[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Selecione os times deste grupo!">
                                        
                            <?php 
                            while ($row1 = mysql_fetch_array($result1)):;?>

                                <option><?php echo $row1['Nome_time'];?> - <?php echo $row1['Categoria'];?></option>

                            <?php endwhile;?>

                </select>
                </div>
            <div style="margin-top: 30px;">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
            <a href="times7.php"><button type="button" class="btn btn-success">Voltar</button></a>
            </div>
                            </form>
                            <?php } ?>
                            </div>

                            </div>
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; 2018. Todos os direitos reservados.
                </footer>

              

            </div>
        <!-- Begin page -->
<!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/autocomplete.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>
        <script src="assets/js/jquery.min.">js</script>
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
