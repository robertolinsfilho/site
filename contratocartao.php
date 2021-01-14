<?php
session_start();
include_once("conexao.php");


 $preco =$_SESSION['preco'];
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$boleto = mysqli_real_escape_string($conexao, trim($_POST['inlineRadioOptions']));
$nomecartao = mysqli_real_escape_string($conexao, trim($_POST['nomecartao']));
$cartao = mysqli_real_escape_string($conexao, trim($_POST['cartao']));
$mes = mysqli_real_escape_string($conexao, trim($_POST['mes']));
$ano = mysqli_real_escape_string($conexao, trim($_POST['ano']));



$sql = "INSERT INTO  contratocartao (cpf,nome,email,boleto,nomecartao,cartao,mes,ano,preco) 
VALUES ('$cpf','$nome','$email','$boleto','$nomecartao','$cartao','$mes','$ano','$preco')";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
$sql1 = "INSERT INTO dadospessoais (nome,email,senha,cpf,vendedor,celular,estado,plano,tipocliente,sus)
VALUES ('$nome', '$email','$_SESSION[senha]', '$_SESSION[cpf]','$_SESSION[vendedor]','$_SESSION[celular]','$_SESSION[estado]','$_SESSION[plano]','30','$_SESSION[sus]')";

$result1 = mysqli_query($conexao, $sql1);
$row1 = mysqli_fetch_assoc($result1);

$sql2 = "INSERT INTO dadosprincipais (nome,email,cpf,celular,sexo,whats,rg,estadocivil,datas,expedidor,mae,fixo)
VALUES ('$nome', '$email', '$_SESSION[cpf]','$_SESSION[celular]','$_SESSION[sexo]','$_SESSION[whats]','$_SESSION[rg]','$_SESSION[estadocivil]','$_SESSION[datas]','$_SESSION[expedidor]','$_SESSION[mae]',$_SESSION[fixo])";

$result2 = mysqli_query($conexao, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$sql3 = "INSERT INTO endereco (cpf,cep,rua,numero,bairro,cidade,estado,complemento)
VALUES ('$_SESSION[cpf]','$_SESSION[cep]','$_SESSION[rua]','$_SESSION[numero]','$_SESSION[bairro]','$_SESSION[cidade]','$_SESSION[estado]', '$_SESSION[complemento]')";

$result3 = mysqli_query($conexao, $sql3);
$row3 = mysqli_fetch_assoc($result3);

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
    header('Location: index.html');
}

$conexao->close();


?>