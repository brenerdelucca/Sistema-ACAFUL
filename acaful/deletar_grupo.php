<?php

include('conexao.php');

$gp = $_GET['gp'];

mysql_query("DELETE FROM grupos WHERE grupo = '$gp'");

  echo "
  <script>
  window.location.href='grupo7.php';
  </script>
  ";
 ?>