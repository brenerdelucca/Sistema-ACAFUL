<?php

include('conexao.php');

 $id = $_POST['id_galeria'];

 $_UP['pasta'] = 'fotos/galeria/';
 
 $_UP['tamanho'] = 1024*1024*2; //2mb
 
 $_UP['extensoes'] = array('jpg','png','jpeg','JPEG','PNG','JPG');
 
 $_UP['renomeia'] = true;
 
 $extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
 
 if(array_search($extensao, $_UP['extensoes']) === false){
  header("location:editar_foto.php?info=erro-extensao");
  exit;
 } else if ($_UP['tamanho'] < $_FILES['img']['size']){
  header("location:editar_foto.php?info=erro-tamanho");
  exit;
 } else if($_UP['renomeia'] == true){
  $nome_final = time().'.jpg';
 } else {
  $nome_final = $_FILES['img']['name'];
 }
 
 if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta'].$nome_final)){
   
 } else {
  header("location:editar_foto.php?info=erro-erro");
  exit;
 }

$consulta  = mysql_query("SELECT * FROM galeria WHERE idgaleria = '$id'");


  while ($coluna = mysql_fetch_array($consulta)) {
      
    $excluir_img = $coluna['arquivo'];
  }

   unlink("fotos/galeria/$excluir_img");



 $query = "UPDATE galeria SET arquivo='$nome_final' WHERE idgaleria = '$id'";
 mysql_query($query);

 echo "
  <script>
  window.location.href='galeria.php';
  </script>
  ";

?>