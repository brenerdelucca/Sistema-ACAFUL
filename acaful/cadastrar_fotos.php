<?php

include('conexao.php');

 $_UP['pasta'] = 'fotos/galeria/';
 
 $_UP['tamanho'] = 1024*1024*2; //2mb
 
 $_UP['extensoes'] = array('jpg','png','jpeg');
 
 $_UP['renomeia'] = true;
 
 $extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
 
 if(array_search($extensao, $_UP['extensoes']) === false){
  header("location:galeria.php?info=erro-extensao");
  exit;
 } else if ($_UP['tamanho'] < $_FILES['img']['size']){
  header("location:galeria.php?info=erro-tamanho");
  exit;
 } else if($_UP['renomeia'] == true){
  $nome_final = time().'.jpg';
 } else {
  $nome_final = $_FILES['img']['name'];
 }
 
 if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta'].$nome_final)){
   
 } else {
  header("location:galeria.php?info=erro-erro");
  exit;
 }

 $query = "INSERT INTO galeria (idgaleria, arquivo) VALUES (NULL, '$nome_final')";
 mysql_query($query);

 echo "
  <script>
  window.location.href='galeria.php';
  </script>
  ";

?>