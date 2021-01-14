<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$vendedor = mysqli_real_escape_string($conexao, trim($_POST['vendedor']));
$celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));
$estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$plano = mysqli_real_escape_string($conexao, trim($_POST['plano']));
$admissao = mysqli_real_escape_string($conexao, trim($_POST['admissao']));
$matricula = mysqli_real_escape_string($conexao, trim($_POST['matricula']));
$reparticao = mysqli_real_escape_string($conexao, trim($_POST['reparticao']));
$sus = mysqli_real_escape_string($conexao, trim($_POST['sus']));
$_SESSION['nome']= $nome;
$_SESSION['cpf']= $cpf;
$_SESSION['email'] = $email;
$_SESSION['vendedor'] = $vendedor;
$_SESSION['celular'] = $celular;
$_SESSION['estado'] = $estado;

 $tipocliente = $_SESSION['tipocliente'];




$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);



$sql = "INSERT INTO dadospessoais (nome,email,senha,cpf,vendedor,celular,estado,plano,tipocliente,admissao,matricula,reparticao,sus)
 VALUES ('$nome', '$email','$senha', '$cpf','$vendedor','$celular','$estado','$plano','$tipocliente','$admissao','$matricula','$reparticao','$sus')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	header('Location: formdadospessoais.php');
}

$conexao->close();


exit;
?>