<?php
include('conexao.php');

$query = mysql_query("SELECT * FROM resultado_jogo ORDER BY id_jogo DESC LIMIT 1");
while ($cont = mysql_fetch_array($query)) 
{
	$delete = $cont['id_jogo'];

mysql_query("DELETE FROM resultado_jogo WHERE id_jogo = '$delete'");
}
echo "<script>window.location.href='index.php';</script>";
?>