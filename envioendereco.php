<?php
session_start();
include("conexao.php");




$_SESSION['cep'] = mysqli_real_escape_string($conexao, trim($_POST['cep']));
$_SESSION['rua'] = mysqli_real_escape_string($conexao, trim($_POST['rua']));
$_SESSION['numero'] = mysqli_real_escape_string($conexao, trim($_POST['numero']));
$_SESSION['bairro'] = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
$_SESSION['cidade'] = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$_SESSION['estado'] = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$_SESSION['complemento'] = mysqli_real_escape_string($conexao, trim($_POST['complemento']));


if($_SESSION['boleto']=='UNIDENTIS VIP BOLETO'){
    header('Location: titular.php');
}elseif($_SESSION['boleto']=='UNIDENTIS VIP CARTÃO'){
    header('Location: titularcartao.php');
}elseif($_SESSION['boleto']=='UNIDENTIS VIP FAMÍLIA'){
    header('Location: titularfamilia.php');
}elseif($_SESSION['boleto']=='UNIDENTIS VIP SERVIDOR'){
    header('Location: titularservidorpublico.php');
}else{
    header('Location: titularuniversitario.php');
}
exit;
?>