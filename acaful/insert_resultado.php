<?php

include('conexao.php');

$data = $_POST['data'];
$hora = $_POST['hora'];
$local = $_POST['local'];
$timeA = $_POST['time'];
$golsA = $_POST['golsA'];
$timeB = $_POST['time2'];
$golsB = $_POST['golsB'];
$rodada = $_POST['rodada'];
$pontosA = $_POST['pontosA'];
$pontosB = $_POST['pontosB'];
$categoria = $_POST['categoria'];

if ($timeA == $timeB) 
{
	echo "<script>alert('Você escolheu os mesmos times, escolha times diferentes.');
		  window.location.href='add_resultado.php';</script>";
}
elseif ($data > date('Y/m/d')) 
{
	echo "<script>alert(`Sua data é inválida, por favor escolha outra data.`);
	window.location.href=`add_resultado.php`;</script>";
}
else
{
	mysql_query("INSERT INTO resultado_jogo (gols_timea, gols_timeb, time_a, time_b, dia_jogo, local, hora, rodada, categoria_jogo)
  VALUES('$golsA', '$golsB', '$timeA', '$timeB', '$data', '$local', '$hora', '$rodada', '$categoria')");
	if($golsA > $golsB) 
	{

	mysql_query("UPDATE timec SET pontos = pontos+'$pontosA', jogos = jogos+1, vitorias = vitorias+1, gols_pro = gols_pro+'$golsA', gols_contra = gols_contra+'$golsB', saldo_gols = saldo_gols+('$golsA'-'$golsB') WHERE id_times = '$timeA'");
	mysql_query("UPDATE timec SET pontos = pontos+'$pontosB', jogos = jogos+1, derrotas = derrotas+1, gols_pro = gols_pro+'$golsB', gols_contra = gols_contra+'$golsA', saldo_gols = saldo_gols+('$golsB'-'$golsA') WHERE id_times = '$timeB'");	

	}

	elseif ($golsB > $golsA) 
	{
		
	mysql_query("UPDATE timec SET pontos = pontos+'$pontosB', jogos = jogos+1, vitorias = vitorias+1, gols_pro = gols_pro+'$golsB', gols_contra = gols_contra+'$golsA', saldo_gols = saldo_gols+('$golsB'-'$golsA') WHERE id_times = '$timeB'");
	mysql_query("UPDATE timec SET pontos = pontos+'$pontosA', jogos = jogos+1, derrotas = derrotas+1, gols_pro = gols_pro+'$golsA', gols_contra = gols_contra+'$golsB', saldo_gols = saldo_gols+('$golsA'-'$golsB') WHERE id_times = '$timeA'");
	}
	elseif ($golsA == $golsB) 
	{
	mysql_query("UPDATE timec SET pontos = pontos+'$pontosB', jogos = jogos+1, empates = empates+1, gols_pro = gols_pro+'$golsB', gols_contra = gols_contra+'$golsA', saldo_gols = saldo_gols+('$golsB'-'$golsA') WHERE id_times = '$timeB'");
	mysql_query("UPDATE timec SET pontos = pontos+'$pontosA', jogos = jogos+1, empates = empates+1, gols_pro = gols_pro+'$golsA', gols_contra = gols_contra+'$golsB', saldo_gols = saldo_gols+('$golsA'-'$golsB') WHERE id_times = '$timeA'");
	}
	
  echo "
  <script>
  window.location.href='info_jogador.php?idA=$timeA&idB=$timeB';
  </script>
  ";

}

?>