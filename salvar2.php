
<?php
session_start();
$bairro = $_POST['bairro'];
$_SESSION['bairro'] = $bairro;


$data5 = array(
    'token' => 'RWNTF7PUC87KRYRTVNFGP8XNYWJ4DQC4XWCGSHPW2F9FCURP82',
    'municipioID'=> $_SESSION['teste']
    
  );

  $payload5 = json_encode($data5);

// Prepare new cURL resource
  $ch5= curl_init('http://unidentis.s4e.com.br/SYS/services/RedeAtendimento.aspx/Bairros');
  curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch5, CURLINFO_HEADER_OUT, true);
  curl_setopt($ch5, CURLOPT_POST, true);
  curl_setopt($ch5, CURLOPT_POSTFIELDS, $payload5);

  // Set HTTP Header for POST request 
    curl_setopt($ch5, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($payload5))
    );

  // Submit the POST request
  $result5 = curl_exec($ch5);
  $result5 = utf8_encode($result5);
  $result5 = json_decode($result5, true);
  $result5 = $result5['dados'];

  $contar5 = count($result5);
  
  $x5 = 0;
  curl_close($ch5);


  while($_SESSION['bairro'] != $result5[$x5]['Id']){
      $x5++;
  }
$_SESSION['bairro1'] = $x5;
header('Location : index2.php');
