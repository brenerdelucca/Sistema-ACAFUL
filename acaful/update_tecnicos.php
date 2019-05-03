<?php

include('conexao.php');

$id = $_POST['id_tecnico'];
$nome_tecnico = $_POST['nome_tecnico'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$time = $_POST['time'];


if ($_FILES['img']['name'] == false){


$query = "UPDATE tecnico SET nome_tecnico='$nome_tecnico', telefone='$telefone', email='$email', cidade='$cidade', timetecnico='$time' WHERE id_tecnico = '$id'";
 mysql_query($query);

 echo "
  <script>
  window.location.href='tecnicos7.php';
  </script>
  ";



}else{


 $id = $_POST['id_tecnico'];

 $_UP['pasta'] = 'fotos/tecnicos/';
 
 $_UP['tamanho'] = 1024*1024*2; //2mb
 
 $_UP['extensoes'] = array('jpg','png','jpeg','JPEG','PNG','JPG');
 
 $_UP['renomeia'] = true;
 
 $extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
 
 if(array_search($extensao, $_UP['extensoes']) === false){
  header("location:editar_tecnico.php?info=erro-extensao");
  exit;
 } else if ($_UP['tamanho'] < $_FILES['img']['size']){
  header("location:editar_tecnico.php?info=erro-tamanho");
  exit;
 } else if($_UP['renomeia'] == true){
  $nome_final = time().'.jpg';
 } else {
  $nome_final = $_FILES['img']['name'];
 }
 
 if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta'].$nome_final)){
   
 } else {
  header("location:editar_tecnico.php?info=erro-erro");
  exit;
 }

$consulta  = mysql_query("SELECT * FROM tecnico WHERE id_tecnico = '$id'");


  for($i=0;$i<count($consulta);$i++){
    $excluir_img = $consulta[$i]['foto_tecnico'];

}

  unlink("fotos/tecnicos/$excluir_img");



 $query = "UPDATE tecnico SET nome_tecnico='$nome_tecnico', telefone='$telefone', email='$email', cidade='$cidade', foto_tecnico='$nome_final', timetecnico='$time' WHERE id_tecnico = '$id'";
 mysql_query($query);

 echo "
  <script>
  window.location.href='tecnicos7.php';
  </script>
  ";

}
?>