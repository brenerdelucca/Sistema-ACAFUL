<?php

include('conexao.php');

$nome_tecnico = $_POST['nome_tecnico'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$time = $_POST['time'];

 $_UP['pasta'] = 'fotos/tecnicos/';
 
 $_UP['tamanho'] = 1024*1024*2; //2mb
 
 $_UP['extensoes'] = array('jpg','png','jpeg');
 
 $_UP['renomeia'] = true;
 
 $extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
 
 if(array_search($extensao, $_UP['extensoes']) === false){
  header("location:add_tecnicos.php?info=erro-extensao");
  exit;
 } else if ($_UP['tamanho'] < $_FILES['img']['size']){
  header("location:add_tecnicos.php?info=erro-tamanho");
  exit;
 } else if($_UP['renomeia'] == true){
  $nome_final = time().'.jpg';
 } else {
  $nome_final = $_FILES['img']['name'];
 }
 
 if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta'].$nome_final)){
   
 } else {
  header("location:add_tecnicos.php?info=erro-erro");
  exit;
 }

 $query = "INSERT INTO tecnico (nome_tecnico, telefone, email, cidade, foto_tecnico, timetecnico)
  VALUES('$nome_tecnico', '$telefone', '$email', '$cidade', '$nome_final', '$time')";
 mysql_query($query);

 echo "
  <script>
  window.location.href='tecnicos7.php';
  </script>
  ";

?>