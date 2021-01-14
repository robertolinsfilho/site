<?php
session_start();
include("conexao.php");

$boleto40 = mysqli_real_escape_string($conexao, trim($_POST['boleto40']));

$_SESSION['boleto'] = $boleto40;

if($_SESSION['boleto'] == 'UNIDENTIS VIP SERVIDOR')	{		
header('Location: formservidorpublico.php');
}else{
header('Location: formpessoafisica.php');
}
?> 