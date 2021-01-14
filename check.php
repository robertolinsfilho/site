<?php
session_start();
include_once('conexao.php');

 
//Criar a conexao

$cpf = $_POST['cpf'];
$_SESSION['cpf'] = $cpf;
/* check connection */
$result_usuario = "SELECT * FROM dadospessoais WHERE cpf='$cpf'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

if(isset($resultado)){
    header('Location: incluirformtitular.php');


}else {

    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
    CPF Inexistente
  </div>";
  header('Location: incluirdependentes.php');
  
  }



?>





