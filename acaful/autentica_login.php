<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include('conexao.php');

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = mysql_query("SELECT * FROM login WHERE email='$email' and senha='$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);

if ($row > 0) {
	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];
	echo "<script>window.location.href='index.php'</script>";
}else{
	echo "<script>window.location.href='login.php?erro=1';</script>";
}

?>

</body>
</html>

