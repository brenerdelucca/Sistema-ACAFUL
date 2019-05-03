<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre</h2>
              <?php
              include('conexao.php');
              $query = mysql_query("SELECT * FROM sobre");
              while ($coluna = mysql_fetch_array($query)) {
              ?>
              <p><?php echo $coluna['descricao'];?></p>
              
            </div>
          </div>
          <div class="col-md" style="margin-top: 150px;">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">E-mail</h2>
              <p><?php echo $coluna['email'];?></p>
            </div>
          </div>
          <div class="col-md" style="margin-top: 150px;">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Telefone</h2>
             <p><?php echo $coluna['telefone'];?></p>
            </div>
            <p class="ftco-heading-4" style="position: absolute; margin-left: 235px; margin-top: -180px;">Organizador</p>
            <img src="../fotos/sobre/<?php echo $coluna['foto'];?>" alt="Generic placeholder image" width="200px" height="200px" style="position: absolute; margin-left: 188px; margin-top: -150px;">
            <?php } ?>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<div class="block-23 mb-3">
	  	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>