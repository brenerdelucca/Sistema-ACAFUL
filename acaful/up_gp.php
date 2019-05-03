<?php

include('../conexao.php');

$nome_gp = $_POST['nome_gp'];

$query1 = "DELETE FROM grupos WHERE grupo = '$nome_gp'";
mysql_query($query1);

$grupo_n = $_POST['grupo_n'];
$gp_array = $_POST['select_grupo'];
$cat_gp = 1; 

 for ($i=0; $i < count($gp_array); $i++) { 
		$query2 = "INSERT INTO grupos VALUES (NULL, '$grupo_n', '$gp_array[$i]', ' $cat_gp')";
        mysql_query($query2);
}

  echo "
  <script>
  window.location.href='grupos.php';
  </script>
  ";
 ?>

