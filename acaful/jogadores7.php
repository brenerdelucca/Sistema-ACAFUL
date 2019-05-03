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
                                <h4 class="page-title">Jogadores Sub-07</h4><br>  <a href="add_jogadores.php" class="btn btn-primary"> <i class = "fa fa-plus"></i> ADICIONAR JOGADOR</a>
                            </div>
                                <hr>
            
                      
  
                        <hr>
                         <div class="col-sm-12 card-box">
                <h4 style="font-family: arial black; text-align: center; font-size: 30px;">Jogadores de Linha</h4>
                           <hr>
                       

                       
                        <div class="col-lg-12" >
            
            <hr>
                

            <div class="table-responsive">   
            <table class="table ">
            <thead>
                 <th class="table-active" scope="col" style="text-align: left;">Nome</th>
                 <th class="table-active" scope="col" style="text-align: left;">Time</th>
                 <th class="table-active" scope="col" style="text-align: left;">Idade</th>
                 <th class="table-active" scope="col" style="text-align: left;">Gols Marcados</th>
                 <th class="table-active" scope="col" style="text-align: left;">Gols Sofridos</th>
                 <th class="table-active" scope="col" style="text-align: left;">Cartões Amarelos</th>
                 <th class="table-active" scope="col" style="text-align: left;">Cartões Vermelhos</th>
                 <th class="table-active" scope="col" style="text-align: left;">#</th>
            </thead>
            <?php
                            include('conexao.php');
        $query4 = mysql_query("SELECT *, timec.Nome_time FROM jogador INNER JOIN timec ON jogador.timejogador = timec.id_times WHERE categoria_time = 1 AND posicao = 1  ORDER BY Nome_time");
                        while ($coluna4 = mysql_fetch_array($query4)){ ?>
            <tbody>
                <tr>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['nome_jogador'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['Nome_time'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php

                    $date = new DateTime( $coluna4['nascimento'] ); 
                    $interval = $date->diff( new DateTime() ); 
                    echo $interval->format( '%Y Anos' ); 

                                        ?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['gols'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['gols_sofridos'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['cartoes_amarelos'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['cartoes_vermelhos'];?></th>
                <th>
                    <a style="width: 50px;" class="btn btn-secondary" href="deletar_jogador.php?id=<?php echo $coluna4['id_jogadores'];?>" role="button" onclick="return confirm('Você tem certeza?')"><i class="fa fa-trash"></i></a>
                    <a style="width: 50px;" class="btn btn-secondary" href="editar_jogador.php?id=<?php echo $coluna4['id_jogadores'];?>" role="button"><i class=" fa fa-pencil"></i></a>
                </th>
                </tr>
            </tbody>
            <?php } ?>

            </table>  

            </div>      
              
        
            </div> 
                 
            </div>
              
          
        

  
                       


                        <hr>
                         <div class="col-sm-12 card-box" style="margin-top: 50px;">
                          <h4 style="font-family: arial black; text-align: center; font-size: 30px;">Goleiros</h4>
                          <hr>  
                        
            <hr>
                

            <div class="table-responsive">   
            <table class="table ">
            <thead>
                 <th class="table-active" scope="col" style="text-align: left;">Nome</th>
                 <th class="table-active" scope="col" style="text-align: left;">Time</th>
                 <th class="table-active" scope="col" style="text-align: left;">Idade</th>
                 <th class="table-active" scope="col" style="text-align: left;">Gols Marcados</th>
                 <th class="table-active" scope="col" style="text-align: left;">Gols Sofridos</th>
                 <th class="table-active" scope="col" style="text-align: left;">Cartões Amarelos</th>
                 <th class="table-active" scope="col" style="text-align: left;">Cartões Vermelhos</th>
                 <th class="table-active" scope="col" style="text-align: left;">#</th>
            </thead>
            <?php
                            include('conexao.php');
        $query4 = mysql_query("SELECT *, timec.Nome_time FROM jogador INNER JOIN timec ON jogador.timejogador = timec.id_times WHERE categoria_time = 1 AND posicao = 2 ORDER BY Nome_time");
                        while ($coluna4 = mysql_fetch_array($query4)){ ?>
            <tbody>
                <tr>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['nome_jogador'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['Nome_time'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php

                    $date = new DateTime( $coluna4['nascimento'] ); 
                    $interval = $date->diff( new DateTime() ); 
                    echo $interval->format( '%Y Anos' ); 

                                        ?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['gols'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['gols_sofridos'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['cartoes_amarelos'];?></th>
                <th style="text-align: left; font-size: 20px;" valign="bottom"><?php echo $coluna4['cartoes_vermelhos'];?></th>
                <th>
                    <a style="width: 50px;" class="btn btn-secondary" href="deletar_jogador.php?id=<?php echo $coluna4['id_jogadores'];?>" role="button" onclick="return confirm('Você tem certeza?')"><i class="fa fa-trash"></i></a>
                    <a style="width: 50px;" class="btn btn-secondary" href="editar_jogador2.php?id=<?php echo $coluna4['id_jogadores'];?>" role="button"><i class=" fa fa-pencil"></i></a>
                </th>
                </tr>
            </tbody>
            <?php } ?>
            </table>  

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

