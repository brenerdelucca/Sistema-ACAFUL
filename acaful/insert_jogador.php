<?php

include('conexao.php');

$nome = $_POST['nome_jogador'];
$nascimento = $_POST['nascimento'];
$posicao = $_POST['posicao'];
$time = $_POST['time'];

mysql_query("INSERT INTO jogador (nome_jogador, nascimento, posicao, timejogador)
  VALUES('$nome', '$nascimento', '$posicao', '$time')");

  echo "
  <script>
  window.location.href='jogadores7.php';
  </script>
  ";
 ?>
