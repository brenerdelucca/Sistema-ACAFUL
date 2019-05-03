<?php

include('../conexao.php');

$nrid = $_POST['id_rodada'];
$nrd = $_POST['rod'];

mysql_query("UPDATE rodada SET numero_rodada='$nrd'
   WHERE idRodada = '$nrid'");

 echo"
  <script>
  window.location.href='rodada.php?';
  </script>
  ";
  
 ?>
