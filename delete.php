<?php
include_once "conexao.php";
session_start();
$id = $_GET['id'];
$sql = "DELETE FROM dependentes where id = '$id'";


if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;

}

$conexao->close();
header('Location: incluirdependentes2.php?cpf='.$_SESSION['cpf']);