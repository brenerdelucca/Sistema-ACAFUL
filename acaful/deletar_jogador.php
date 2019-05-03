<?php

include('conexao.php');

$id = $_GET['id'];


mysql_query("DELETE FROM jogador WHERE id_jogadores = '$id'");

  echo "
  <script>
  window.location.href='jogadores7.php';
  </script>
  ";
 ?>
