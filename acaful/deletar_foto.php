<?php

include('conexao.php');

$id = $_GET['id'];

$consulta  = mysql_query("SELECT * FROM galeria WHERE idgaleria = '$id'");


  while ($coluna = mysql_fetch_array($consulta)) {
      
    $excluir_img = $coluna['arquivo'];
  }

   unlink("fotos/galeria/$excluir_img");

mysql_query("DELETE FROM galeria WHERE idgaleria = '$id'");

  echo "
  <script>
  window.location.href='galeria.php';
  </script>
  ";
 ?>
