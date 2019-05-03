<?php

include('conexao.php');

$rodn = $_POST['rod'];
$idr = $_POST['idr'];
mysql_query("UPDATE rodada SET numero_rodada='$rodn' WHERE idRodada = '$idr'");

  echo "
  <script>
  window.location.href='rodadas.php';
  </script>
  ";

?>