<?php

include('conexao.php');

$id = $_POST['id_times'];
$nome = $_POST['Nome'];
$telefone = $_POST['Telefone'];
$cidade = $_POST['Cidade'];
$descricao2 = $_POST['Descricao'];
$cat = $_POST['categoria'];
$pontos = $_POST['pontos'];
$jogos = $_POST['jogos'];
$gp =  $_POST['gp'];
$gc =  $_POST['gc'];
$vitorias = $_POST['vitorias'];
$empates = $_POST['empates'];
$derrotas = $_POST['derrotas'];

if ($_FILES['img']['name'] == false){


$query = "UPDATE timec SET Nome_time='$nome', Telefone='$telefone', Cidade='$cidade', Descricao='$descricao2', pontos='$pontos', jogos='$jogos', saldo_gols='$gp'-'$gc', gols_pro='$gp', vitorias='$vitorias', empates='$empates', derrotas='$derrotas', gols_contra='$gc', categoria_time='$cat' WHERE id_times = '$id'";
 mysql_query($query);

 echo "
  <script>
  window.location.href='times7.php';
  </script>
  ";



}else{


 $id = $_POST['id_times'];

 $_UP['pasta'] = 'fotos/times/';
 
 $_UP['tamanho'] = 1024*1024*2; //2mb
 
 $_UP['extensoes'] = array('jpg','png','jpeg');
 
 $_UP['renomeia'] = true;
 
 $extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
 
 if(array_search($extensao, $_UP['extensoes']) === false){
  header("location:editar_time.php?info=erro-extensao");
  exit;
 } else if ($_UP['tamanho'] < $_FILES['img']['size']){
  header("location:editar_time.php?info=erro-tamanho");
  exit;
 } else if($_UP['renomeia'] == true){
  $nome_final = time().'.jpg';
 } else {
  $nome_final = $_FILES['img']['name'];
 }
 
 if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta'].$nome_final)){
   
 } else {
  header("location:editar_time.php?info=erro-erro");
  exit;
 }

$consulta  = mysql_query("SELECT * FROM timec WHERE id_times = '$id'");


   while ($coluna = mysql_fetch_array($consulta)) {
      
    $excluir_img = $coluna['emblema_time'];
  }

   unlink("fotos/times/$excluir_img");



 $query = "UPDATE timec SET Nome_time='$nome', Telefone='$telefone', Cidade='$cidade', Descricao='$descricao2', emblema_time='$nome_final', pontos='$pontos', jogos='$jogos', saldo_gols='$gp'-'$gc', gols_pro='$gp', vitorias='$vitorias', empates='$empates', derrotas='$derrotas', gols_contra='$gc', categoria_time='$cat' WHERE id_times = '$id'";
 mysql_query($query);

 echo "
  <script>
  window.location.href='times7.php';
  </script>
  ";

}
?>
