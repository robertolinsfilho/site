<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<?php
session_start();


if(!isset($_SESSION['plano']) ){
    $_SESSION['plano'] = -1;
  }
  if($_SESSION['plano'] == ''){
    $_SESSION['plano'] = -1;
  }
  if(!isset($_SESSION['especialidade']) ){
    $_SESSION['especialidade'] = -1;
  }
  if($_SESSION['especialidade'] == ''){
    $_SESSION['especialidade'] = -1;
  }
  if(!isset($_SESSION['bairro']) ){
    $_SESSION['bairro'] = -1;
  }
  if($_SESSION['bairro'] == ' '){
    $_SESSION['bairro'] = -1;
  }
  
 $estado = $_POST['estado'];
 

 $_SESSION['estado'] = $estado;

 if($_SESSION['estado'] == 'PB'){
  $_SESSION['estado'] =14; 
}
elseif($_SESSION['estado'] == 'AL'){
  $_SESSION['estado'] =1; 
}
elseif($_SESSION['estado'] == 'AC'){
  $_SESSION['estado'] =27; 
}
if($_SESSION['estado'] == 'AM'){
  $_SESSION['estado'] =2; 
}
if($_SESSION['estado'] == 'AP'){
  $_SESSION['estado'] =4; 
}
if($_SESSION['estado'] == 'BA'){
  $_SESSION['estado'] =4; 
}
if($_SESSION['estado'] == 'CE'){
  $_SESSION['estado'] =5; 
}
if($_SESSION['estado'] == 'DF'){
  $_SESSION['estado'] =6; 
}
if($_SESSION['estado'] == 'ES'){
  $_SESSION['estado'] =7; 
}
if($_SESSION['estado'] == 'GO'){
  $_SESSION['estado'] =8; 
}
if($_SESSION['estado'] == 'MA'){
  $_SESSION['estado'] =9; 
}
if($_SESSION['estado'] == 'MG'){
  $_SESSION['estado'] =10; 
}
if($_SESSION['estado'] == 'MS'){
  $_SESSION['estado'] =11; 
}
if($_SESSION['estado'] == 'MT'){
  $_SESSION['estado'] =12; 
}
if($_SESSION['estado'] == 'NC'){
  $_SESSION['estado'] =13; 
}
if($_SESSION['estado'] == 'PB'){
  $_SESSION['estado'] =14; 
}
if($_SESSION['estado'] == 'PB'){
  $_SESSION['estado'] =14; 
}
if($_SESSION['estado'] == 'PE'){
  $_SESSION['estado'] =15; 
}
if($_SESSION['estado'] == 'PI'){
  $_SESSION['estado'] =16; 
}
if($_SESSION['estado'] == 'PR'){
  $_SESSION['estado'] =17; 
}
if($_SESSION['estado'] == 'RJ'){
  $_SESSION['estado'] =17; 
}
if($_SESSION['estado'] == 'RN'){
  $_SESSION['estado'] =19; 
}
if($_SESSION['estado'] == 'RO'){
  $_SESSION['estado'] =20; 
}
if($_SESSION['estado'] == 'RR'){
  $_SESSION['estado'] =21; 
}
if($_SESSION['estado'] == 'RS'){
  $_SESSION['estado'] =22; 
}
if($_SESSION['estado'] == 'SC'){
  $_SESSION['estado'] =23; 
}
if($_SESSION['estado'] == 'SE'){
  $_SESSION['estado'] =24; 
}
if($_SESSION['estado'] == 'SP'){
  $_SESSION['estado'] =25; 
}
if($_SESSION['estado'] == 'TO'){
  $_SESSION['estado'] =26; 
}


 $_SESSION['estado1'] = $estado;
 
 header('Location : index2.php');
?>