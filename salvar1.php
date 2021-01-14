<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<?php
session_start();
$teste = $_POST['teste'];
$_SESSION['teste'] = $teste;
$data = array(
    'token' => 'RWNTF7PUC87KRYRTVNFGP8XNYWJ4DQC4XWCGSHPW2F9FCURP82',
    'ufID'=> $_SESSION['estado']
    
  );

  $payload = json_encode($data);

// Prepare new cURL resource
  $ch= curl_init('http://unidentis.s4e.com.br/SYS/services/RedeAtendimento.aspx/Municipios');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLINFO_HEADER_OUT, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

  // Set HTTP Header for POST request 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($payload))
    );

  // Submit the POST request
  $result = curl_exec($ch);
  $result = utf8_encode($result);
  $result = json_decode($result, true);
  $result = $result['dados'];

  $contar = count($result);
  
  $x = 1;
  curl_close($ch);
  $g = 0;

  while($_SESSION['teste'] != $result[$g]['Id']){
      $g++;
  }
$_SESSION['teste1'] = $g;
header('Location : index2.php');
