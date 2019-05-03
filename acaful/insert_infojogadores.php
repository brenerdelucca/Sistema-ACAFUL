<?php
include('conexao.php');

$jA = $_POST['jA'];
$golA = $_POST['golA'];
$caA = $_POST['caA'];
$cvA = $_POST['cvA'];

$jB = $_POST['jB'];
$golB = $_POST['golB'];
$caB = $_POST['caB'];
$cvB = $_POST['cvB'];


for ($i=0; $i < count($jA) ; $i++) { 
	$query = "UPDATE jogador SET gols = gols+'$golA[$i]', cartoes_amarelos = cartoes_amarelos+'$caA[$i]', cartoes_vermelhos = cartoes_vermelhos+'$cvA[$i]' WHERE id_jogadores='$jA[$i]'";
	mysql_query($query);
}

for ($i2=0; $i2 < count($jB) ; $i2++) { 
	$query2 = "UPDATE jogador SET gols = gols+'$golB[$i2]', cartoes_amarelos = cartoes_amarelos+'$caB[$i2]', cartoes_vermelhos = cartoes_vermelhos+'$cvB[$i2]' WHERE id_jogadores='$jB[$i2]'";
	mysql_query($query2);
}

echo "
  <script>
  window.location.href='index.php';
  </script>
  ";
?>