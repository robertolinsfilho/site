<?php
session_start();
include("conexao.php");




$_SESSION['sexo'] = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
$_SESSION['whats'] = mysqli_real_escape_string($conexao, trim($_POST['whats']));
$_SESSION['rg'] = mysqli_real_escape_string($conexao, trim($_POST['rg']));
$_SESSION['estadocivil'] = mysqli_real_escape_string($conexao, trim($_POST['estadocivil']));
$_SESSION['datas'] = mysqli_real_escape_string($conexao, trim($_POST['datas']));
$_SESSION['expedidor'] = mysqli_real_escape_string($conexao, trim($_POST['expedidor']));
$_SESSION['mae'] = mysqli_real_escape_string($conexao, trim($_POST['mae']));
$_SESSION['fixo'] = mysqli_real_escape_string($conexao, trim($_POST['fixo']));







if($_SESSION['boleto']=='UNIDENTIS VIP BOLETO'){
    header('Location: formenviofotos.php');
}elseif($_SESSION['boleto']=='UNIDENTIS VIP SERVIDOR'){
    header('Location: formenviofotos.php');
}else{
    header('Location: formenviofotoscartao.php');
}
exit;
?>