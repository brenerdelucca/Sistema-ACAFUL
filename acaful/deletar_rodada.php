<?php

include('conexao.php');

$rd = $_GET['rd'];

mysql_query("DELETE FROM rodada WHERE idRodada = '$rd'");

  echo "
  <script>
  window.location.href='rodadas.php';
  </script>
  ";
 ?>