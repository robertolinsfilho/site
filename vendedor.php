<?php
session_start();
include("conexao.php");

$vendedor = mysqli_real_escape_string($conexao, trim($_POST['vendedor']));
$tipocliente = mysqli_real_escape_string($conexao, trim($_POST['tipocliente']));
$estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));


$_SESSION['vendedor'] = $vendedor;
$_SESSION['tipocliente'] = $tipocliente;
$_SESSION['estado'] = $estado;
 


if($estado == 'Natal'){
    header('Location: pessoafisicanatal.php');
}elseif($tipocliente == 'Servidor Publico'){
    header('Location: servidorpublico.php');
}elseif( $tipocliente == 'Pessoa Fisica' ){
    header('Location: pessoafisica.php');
}elseif($tipocliente == 'Pessoa Fisica'){
    header('Location: pessoafisica.php');
}
?>