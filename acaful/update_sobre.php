<?php

include('conexao.php');

$email = $_POST['emails'];
$tel = $_POST['telefones'];
$desc = $_POST['descricaos'];

if ($_FILES['img']['name'] == false){

$query2 = "UPDATE sobre SET descricao='$desc', email='$email', telefone='$tel'";
 mysql_query($query2);


echo "
  <script>
  window.location.href='editar_sobre.php';
  </script>
  ";
}else{	

 $_UP['pasta'] = 'fotos/sobre/';
 
 $_UP['tamanho'] = 1024*1024*2; //2mb
 
 $_UP['extensoes'] = array('jpg','png','jpeg','JPEG','PNG','JPG');
 
 $_UP['renomeia'] = true;
 
 $extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
 
 if(array_search($extensao, $_UP['extensoes']) === false){
  header("location:editar_sobre.php?info=erro-extensao");
  exit;
 } else if ($_UP['tamanho'] < $_FILES['img']['size']){
  header("location:editar_sobre.php?info=erro-tamanho");
  exit;
 } else if($_UP['renomeia'] == true){
  $nome_final = time().'.jpg';
 } else {
  $nome_final = $_FILES['img']['name'];
 }
 
 if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta'].$nome_final)){
   
 } else {
  header("location:editar_sobre.php?info=erro-erro");
  exit;
 }

$consulta  = mysql_query("SELECT * FROM sobre");


  while ($coluna = mysql_fetch_array($consulta)) {
      
    $excluir_img = $coluna['foto'];
  }

   unlink("fotos/sobre/$excluir_img");



 $query = "UPDATE sobre SET descricao='$desc', foto='$nome_final', email='$email', telefone='$tel'";
 mysql_query($query);

 echo "
  <script>
  window.location.href='editar_sobre.php';
  </script>
  ";

}
?>
