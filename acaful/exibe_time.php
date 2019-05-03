<?php
include('conexao.php');

$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM timec WHERE categoria_time='$id' ORDER BY Nome_time");
while ($row = mysql_fetch_array($sql)) {
	$nome = $row['Nome_time'];
	$id = $row['id_times'];

	echo '<option value="'.$id.'" class="time">'.$nome.'</option>';
}
?>