<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<?php
session_start();
$especialidade = $_POST['especialidade'];
$_SESSION['especialidade'] = $especialidade;



if($_SESSION['especialidade'] == 35){
    $_SESSION['especialidade1'] = 'ATENDIMENTO ESPECIAL'; 
  }
  elseif($_SESSION['especialidade'] == 14){
    $_SESSION['especialidade1'] = 'ATM'; 
  }
  elseif($_SESSION['especialidade'] == 36){
    $_SESSION['especialidade1'] = 'AVALIAÇÃO CIRURGICA'; 
  }
  elseif($_SESSION['especialidade'] == 34){
    $_SESSION['especialidade1'] = 'AVALIAÇÃO ORTODÔNTICA'; 
  }
  elseif($_SESSION['especialidade'] == 8){
    $_SESSION['especialidade1'] = 'CIRURGIA'; 
  }
  elseif($_SESSION['especialidade'] == 32){
    $_SESSION['especialidade1'] = 'CIRURGIÃO BUCO MAXILO FACIAL'; 
  }
  elseif($_SESSION['especialidade'] == 44){
    $_SESSION['especialidade1'] = 'CIRURGIÃO DENTISTA EM GERAL'; 
  }
  elseif($_SESSION['especialidade'] == 4){
    $_SESSION['especialidade1'] = 'CLINICO GERAL'; 
  }
  elseif($_SESSION['especialidade'] == 1){
    $_SESSION['especialidade1'] = 'DIAGNOSTICO'; 
  }
  elseif($_SESSION['especialidade'] == 5){
    $_SESSION['especialidade1'] = 'ENDODONTIA'; 
  }
  elseif($_SESSION['especialidade'] == 10){
    $_SESSION['especialidade1'] = 'ESPECIALIDADES'; 
  }
  elseif($_SESSION['especialidade'] == 43){
    $_SESSION['especialidade1'] = 'EXODONTIA 3º MOLAR'; 
  }
  elseif($_SESSION['especialidade'] == 15){
    $_SESSION['especialidade1'] = 'IMPLANTODONTIA'; 
  }
  elseif($_SESSION['especialidade'] == 16){
    $_SESSION['especialidade1'] = '>MEDICAÇÃO'; 
  }
  elseif($_SESSION['especialidade'] == 3){
    $_SESSION['especialidade1'] = 'ODONTOPEDIATRIA'; 
  }
  elseif($_SESSION['especialidade'] == 9){
    $_SESSION['especialidade1'] = 'ORTODONTIA'; 
  }
  elseif($_SESSION['especialidade'] == 33){
    $_SESSION['especialidade1'] = 'OUTROS PROCEDIMENTOS'; 
  }
  elseif($_SESSION['especialidade'] == 6){
    $_SESSION['especialidade1'] = 'PERIODONTIA'; 
  }
  elseif($_SESSION['especialidade'] == 2){
    $_SESSION['especialidade1'] = 'PREVENÇÃO'; 
  }
  elseif($_SESSION['especialidade'] == 7){
    $_SESSION['especialidade1'] = 'PRÓTESE DENTÁRIA'; 
  }
  elseif($_SESSION['especialidade'] == 11){
    $_SESSION['especialidade1'] = 'RADIOLOGIA'; 
  }
  elseif($_SESSION['especialidade'] == 19){
    $_SESSION['especialidade1'] = 'REVISÃO'; 
  }
  elseif($_SESSION['especialidade'] == 12){
    $_SESSION['especialidade1'] = 'URGÊNCIA DIURNA'; 
  }
  elseif($_SESSION['especialidade'] == 13){
    $_SESSION['especialidade1'] = 'URGÊNCIA NOTURNA'; 
  }
  elseif($_SESSION['especialidade'] == -1){
    $_SESSION['especialidade1'] = 'Todos'; 
  }


header('Location : index2.php');
