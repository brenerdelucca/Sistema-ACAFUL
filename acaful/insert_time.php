<?php

include('conexao.php');

 $nome = $_POST['nome2'];
 $telefone = $_POST['telefone2'];
 $cidade = $_POST['cidade2'];
 $descricao = $_POST['descricao2'];
 $cat = $_POST['cat'];

 $_UP['pasta'] = 'fotos/times/';
 
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

 $query = "INSERT INTO timec (Nome_time, Telefone, Cidade, Descricao, emblema_time, categoria_time)VALUES('$nome', '$telefone', '$cidade', '$descricao', '$nome_final', '$cat')";
 mysql_query($query);

 echo "
  <script>
  window.location.href='times7.php';
  </script>
  ";

?>