<?php
include_once('conexao.php');
session_start();

 $usuario= $_SESSION['usuario1'];
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "UPDATE usuario SET senha  = '{$senha}' where usuario = '{$usuario}' ";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

if($row == 1 ) {
	
  
	header('Location: login.php');
	exit();
	
}else{
	$_SESSION['nao_autenticado'] = true;
    header('Location: login.php?email='.$_SESSION['emailplataforma'].'&plano='.$_SESSION['plano1'].'&cpf='.$_SESSION['cpf1']);
	exit();
}
?>