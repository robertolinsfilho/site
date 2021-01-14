<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<?php
session_start();
$plano = $_POST['plano'];
$_SESSION['plano'] = $plano;
if($_SESSION['plano'] == 19){
    $_SESSION['plano1'] = 'UNIDENTIS PREMIUM [REG: 487189208]'; 
  }
  elseif($_SESSION['plano'] == 16){
    $_SESSION['plano1'] = 'UNIDENTIS PREMIUM EMPRESARIAL [REG: 487188200]'; 
  }
  elseif($_SESSION['plano'] == 12){
    $_SESSION['plano1'] = 'UNIDENTIS VIP [REG: 455966075]'; 
  }
  elseif($_SESSION['plano'] == 13){
    $_SESSION['plano1'] = 'UNIDENTIS VIP CA [REG: 455913074]'; 
  }
  elseif($_SESSION['plano'] == 14){
    $_SESSION['plano1'] = 'UNIDENTIS VIP EMPRESARIAL [REG: 463229100]'; 
  }
  elseif($_SESSION['plano'] == 15){
    $_SESSION['plano1'] = 'UNIDENTIS VIP RN [REG: 479253170'; 
  }
  

header('Location : index2.php');
