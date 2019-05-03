<?php

include('conexao.php');

$id_jogadores = $_POST['id_jogadores'];
$nome = $_POST['nome_jogador'];
$nascimento = $_POST['nascimento'];
$posicao = $_POST['posicao'];
$time = $_POST['time'];
$gols = $_POST['gols'];
$cm = $_POST['CA'];
$cv = $_POST['CV'];
$gs = $_POST['GS'];

mysql_query("UPDATE jogador SET nome_jogador='$nome', nascimento='$nascimento', cartoes_amarelos='$cm', gols='$gols', cartoes_vermelhos='$cv', posicao='$posicao', gols_sofridos='$gs', timejogador='$time'
      WHERE id_jogadores = '$id_jogadores'");

  echo "
  <script>
  window.location.href='jogadores7.php?id=$id_jogadores';
  </script>
  ";

?>