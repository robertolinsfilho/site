<?php
session_start();
include("conexao.php");



$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
$estadocivil = mysqli_real_escape_string($conexao, trim($_POST['estadocivil']));
$datas = mysqli_real_escape_string($conexao, trim($_POST['datas']));
$mae = mysqli_real_escape_string($conexao, trim($_POST['mae']));
$cpf_titular = mysqli_real_escape_string($conexao, trim($_POST['cpf_titular']));
$cns = mysqli_real_escape_string($conexao, trim($_POST['cns']));
$parentesco = mysqli_real_escape_string($conexao, trim($_POST['parentesco']));

$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);


$sql = "INSERT INTO dependentes (nome, cpf, sexo, estadocivil, datas, mae, cpf_titular, cns,parentesco) 
VALUES ('$nome', '$cpf','$sexo', '$estadocivil','$datas','$mae','$cpf_titular','$cns','$parentesco')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
   
}
if($_SESSION['boleto']=='UNIDENTIS VIP BOLETO'){
    header('Location: titular.php');
}elseif($_SESSION['boleto']=='UNIDENTIS VIP CARTÃO'){
    header('Location: titularcartao.php');
}elseif($_SESSION['boleto']=='UNIDENTIS VIP FAMÍLIA'){
    header('Location: titularfamilia.php');
}elseif($_SESSION['boleto']=='UNIDENTIS VIP SERVIDOR'){
    header('Location: titularservidorpublico.php');
}elseif($_SESSION['boleto']=='UNIDENTIS VIP UNIVERSITÁRIO CARTÃO'){
    header('Location: titularuniversitario.php');
}else{
    header('Location: dependentes2.php');
}
$conexao->close();

exit;
?>