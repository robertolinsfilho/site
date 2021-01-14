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
$sus = mysqli_real_escape_string($conexao, trim($_POST['sus']));
$_SESSION['nome']= $nome;
$_SESSION['cpf']= $cpf;
$_SESSION['email'] = $email;
$_SESSION['vendedor'] = $vendedor;
$_SESSION['celular'] = $celular;
$_SESSION['estado'] = $estado;
$_SESSION['plano'] = $plano;
$_SESSION['sus'] = $sus;
 $tipocliente = $_SESSION['tipocliente'];





header('Location: formdadospessoais.php');
exit;
?>