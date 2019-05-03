 <?php 

    include "conexao.php";
    $gp_array = $_POST['select_grupo'];
    $nome_gp = $_POST['grupo'];
  	$cat_gp = $_POST['cat'];

        for ($i=0; $i < count($gp_array); $i++) { 
        $query = "INSERT INTO grupos VALUES (NULL, '$nome_gp', '$gp_array[$i]', ' $cat_gp')";
        mysql_query($query);
    }
    echo "
  <script>
  window.location.href='grupo7.php';
  </script>
  ";

    ?>