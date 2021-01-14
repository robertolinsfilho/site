<?php
include_once('conexao.php');
session_start();

$usuario =  $_POST['usuario'];
$senha =  $_POST['senha'];




if($senha == 123){

    header('Location: novasenha.php');
    $_SESSION['usuario1'] = $usuario;

}else{
 
$query = "select * from usuario where usuario = '{$usuario}' and senha = '{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_fetch_assoc($result);
if(isset($row) ) {
	
    $_SESSION['usuario1'] = $usuario;
    $_SESSION['senha1'] = $senha;
    if($_SESSION['plano1'] === 'UNIDENTISVIPBOLETO'){
    header('Location: areaclienteboleto.php');
    }else{
    header('Location: areacliente.php'); 
    }
	exit();
	
}else{
	$_SESSION['nao_autenticado'] = true;
    header('Location: login.php?email='.$_SESSION['emailplataforma'].'&plano='.$_SESSION['plano'].'&cpf='.$_SESSION['cpf1']);

}
}








?>