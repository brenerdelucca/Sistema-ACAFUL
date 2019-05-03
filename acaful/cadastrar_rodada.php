<?php
include('conexao.php');

$rd = $_POST['rod'];

$query = "INSERT INTO rodada VALUES (NULL, '$rd')";
mysql_query($query);

echo "
  <script>
  window.location.href='rodadas.php';
  </script>
  ";
?>