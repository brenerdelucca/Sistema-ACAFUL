<?php

include('conexao.php');

$id = $_GET['id'];


mysql_query("DELETE FROM timec WHERE id_times = '$id'");

  echo "
  <script>
  window.location.href='times7.php';
  </script>
  ";
 ?>
