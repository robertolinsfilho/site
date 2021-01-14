<?php
session_start();
include("conexao.php");

$boleto40 = mysqli_real_escape_string($conexao, trim($_POST['boleto40']));

$_SESSION['estado'] = $boleto40;

if($_SESSION['estado'] == 'paraiba')	{		
header('Location: pessoafisica.php');
}else{
header('Location: pessoafisicanatal.php');
}
?>