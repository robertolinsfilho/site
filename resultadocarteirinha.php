<?php
session_start();
header('Content-type: text/html; charset=utf-8', TRUE);   


  


$cpf = $_POST['cpf'];
$opcao = $_POST['opcao'];
if($opcao === '1'){
  $url = 'http://unidentis.s4e.com.br/v2/api/associados?token=RWNTF7PUC87KRYRTVNFGP8XNYWJ4DQC4XWCGSHPW2F9FCURP82&cpfDependente='. $cpf;
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, True);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $resultado = json_decode(curl_exec($curl),true);
  $total = $resultado['totalRegistros'];
  $total = $total - 1;
  $x = $resultado['dados'];
  $y = $x[$total]['dependentes'];
  $z = 0;
  $j = 0;

  while ($j = 0) {
    $y = $x[$z]['dependentes'];
    if($y[$z]['nomeSituacao'] == 'CANCELADO'){
      $j = 1;
    }
    $z++;
  if($z > 30){
    $j=1;
  }
  }

  $games = $y[$z]['nomeDependente'];
  $games1 = $y[$z]['numeroCns'];
  $games3 = $x[$total]['nomeFantasiaDaEmpresa'];
  $games4 = $y[$z]['numeroCarteira'];
  $games2 = $y[$z]['cpfDependente'];
  $games5 = $x[$total]['mensagemCarteira'];
  $games6 = $y[$z]['nomeSituacao'];
 
}else{
  $url = 'http://unidentis.s4e.com.br/v2/api/associados?token=RWNTF7PUC87KRYRTVNFGP8XNYWJ4DQC4XWCGSHPW2F9FCURP82&cpfAssociado='. $cpf;
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, True);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $resultado = json_decode(curl_exec($curl),true);
  
  $x = $resultado['dados'];
  $y = $x[0]['dependentes'];
  $games = $x[0]['nome'];
  $games1 = $y[0]['numeroCns'];
  $games3 = $x[0]['nomeFantasiaDaEmpresa'];
  $games4 = $x[0]['codigo'];
  $games2 = $x[0]['cpf'];
  $games5 = $x[0]['mensagemCarteira'];
  $games6 = $y[0]['nomeSituacao'];
}

if($games6 === 'CANCELADO'){
  $_SESSION['msg'] = "<p style='color:red;'>CPF Cancelado</p>";
  header('Location: carteirinha.php');
}else {


  if (!isset($games)) {
    $_SESSION['msg'] = "<p style='color:red;'>CPF Cancelado</p>";
    header('Location: carteirinha.php');
  } else {


    $_SESSION['cpf'] = $cpf;


    $imagem2 = imagecreatefromjpeg("1.jpg");
    $cor2 = imagecolorallocate($imagem2, 0, 0, 0);
    $nome2 = urldecode($games);
    $nome3 = urldecode($games1);
    $nome4 = urldecode($games3);
    $nome5 = urldecode($games4);
    $nome6 = urldecode($games5);
    imagestring($imagem2, 20, 20, 140, $nome2, $cor2);
    imagestring($imagem2, 20, 20, 210, $nome3, $cor2);
    imagestring($imagem2, 20, 20, 190, $nome4, $cor2);
    imagestring($imagem2, 20, 20, 165, $nome5, $cor2);
    imagestring($imagem2, 20, 120, 165, $nome6, $cor2);
    header('Content-type: image/jpg');
    imagejpeg($imagem2, 'fotos/' . $cpf . '.jpg', 100);
    imagedestroy($imagem2);

    header('Location: vizualizacao.php');


  }
}

?>


