<?php
include('conexao.php');
$id = $_GET['id'];

$query = mysql_query("SELECT * FROM grupos WHERE categoria_grupo='$id' ORDER BY grupo");
while ($coluna = mysql_fetch_array($query)) 
{
	$nome = $coluna['grupo'];
	$id2 = $coluna['idGrupos'];
	echo '<option value="'.$id2.'" class="grupo">'.$nome.'</option>';
}
?>