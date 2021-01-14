<?php
session_start();

error_reporting(0);
ini_set(“display_errors”, 0 );






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



header('Content-type: text/html; charset=utf-8', TRUE);   
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <style>
  
    #linha-horizontal {
    width: 100%;
    border: 1px solid #696969;
}
h3{
 font-family: Poppins;
  display : inline;
  
}

i{
  color: #023bbf;
  font-size: 220%;
}
    </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Unidentis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


<script src="https://unpkg.com/axios/dist/axios.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})




jQuery(document).ready(function(){
		jQuery('#ajax_form').change(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "salvar.php",
				data: dados,
				success: function( data )
				{
				
				}
            });
            $.unblockUI(); //Desbloquear UI
      timer = window.setTimeout("location.reload()", 1000 );
    });


  });
  
  jQuery(document).ready(function(){
		jQuery('#teste').change(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "salvar1.php",
				data: dados,
				success: function( data )
				{
					
				}
			});
      timer = window.setTimeout("location.reload()", 1000 );
    });
  
   
   

  });
  jQuery(document).ready(function(){
		jQuery('#bairro').change(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "salvar2.php",
				data: dados,
				success: function( data )
				{
					
				}
            });
       
      timer = window.setTimeout("location.reload()", 1000 );
    });
  
   
   

  });
  jQuery(document).ready(function(){
		jQuery('#especialidade').change(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "salvar3.php",
				data: dados,
				success: function( data )
				{
					
				}
			});
      timer = window.setTimeout("location.reload()", 1000 );
    });
  
   
   

  });
  jQuery(document).ready(function(){
		jQuery('#plano').change(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "salvar4.php",
				data: dados,
				success: function( data )
				{
					
				}
			});
      timer = window.setTimeout("location.reload()", 1000 );
    });
  
   
   

  });
</script>

</head>
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contato@unidentis.com.br">contato@unidentis.com.br</a>
        <i class="icofont-phone"></i> 83 30443000
        <i class="icofont-ambulance"></i> <a data-toggle="modal" data-target="#exampleModal" >Urgência e Emergência</a>
      </div>
      <div class="social-links">
        
        <a href="https://pt-br.facebook.com/unidentisplanoodontologico" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/unidentisplanoodontologico/?hl=en" class="instagram"><i class="icofont-instagram"></i></a>
       
        <a href="https://www.linkedin.com/company/unidentis-assitencia-odontologica-ltda/?originalSubdomain=br" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">LOCALIZAÇÃO DAS CLÍNICAS </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <h4> Paraíba</h4>
         RUA DOUTOR OSÓRIO ABATH, N° 46, TORRE, JOÃO PESSOA-PB, CEP - 58040-750.<br>
         <h5>Contato Via WhatsApp:</h5>
          <a href="https://api.whatsapp.com/send/?phone=5583986176071&text&app_absent=0">Clique aqui</a><br><br><br>
         <h4>Rio Grande Do Norte </h4>
         HOSPITAL RIO GRANDE , N° 754, TIROL, NATAL- RN, CEP - 59020-100.<BR>
          <h5>Telefone: 84 4009-1000</h5> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
     
        </div>
      </div>
    </div>
  </div>

  <style>
    #blip-chat-container #blip-chat-open-iframe {background-color: red; width: 8%;max-width: 100px;max-height: 100px;}

    @media screen and (max-width: 480px), screen and (max-height: 420px) {
        #blip-chat-container #blip-chat-open-iframe {background-color: red; width: 30%;max-width: 100px;max-height: 100px;}
    }

</style>

    <script src="https://unpkg.com/blip-chat-widget@1.6.*" type="text/javascript">
    </script>
    <script>
        (function () {
            window.onload = function () {

                new BlipChat()
                .withAppKey('dW5pZGVudGlzOjU1YWE1MzYzLTRjYWQtNDNiMC1iZmFhLTc4MzBkMjA4OGY4MA==')
                .withButton({"color":"#023BBF","icon":"https://s3-sa-east-1.amazonaws.com/msging.net/iris/Media_23d982b2-566d-47b2-b21a-2d46b14ac37d"})
                .withCustomCommonUrl('https://chat.blip.ai/')
                .build();
            }
        })();
    </script> 
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

     <a href="index.html"><img style="width: 38%; height: 25%;"src="./assets/img/LOGOUNIDENTIS222.png" /></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Início</a></li>
          <li><a href="redecredenciada.php">Rede Credenciada</a></li>
       
          <li><a href="carteirinha.php">Carteira Digital</a></li>
     
          <li><a href="segundavia.php">Boleto</a></li>
          <li><a href="tiss.html">Portal Tiss</a></li>
         

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="azul">
  <label>ENCONTRE SEU DENTISTA </label>


      </div>
      <br>
<div class="rede">
<br><br>

 
<form method="POST"  action="">
  

<div class="row">

<div class="col-lg-4" >
<label class="form-control-lg">Estados(Obrigatorio):</label> 
      <select  id="ajax_form" class="form-control form-control-lg" onclick="comecarReload();" name="estado" id="estado" >
      <option value="<?php $_SESSION['estado1']?>"><?php echo $_SESSION['estado1']?></option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AM">AM</option>
        <option value="AP">AP</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="DF">DF</option>
        <option value="ES">ES</option>
        <option value="GO">GO</option>
        <option value="MA">MA</option>
        <option value="MG">MG</option>
        <option value="MS">MS</option>
        <option value="MT">MT</option>
        <option value="NC">NC</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="PR">PR</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="RS">RS</option>
        <option value="SE">SE</option>
        <option value="SP">SP</option>
        <option value="TO">TO</option>
    

        
        
       
      </select>
  </div>

<?php
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
   $m= 0;
    ?>





<div class="col-lg-4" >
<label class="form-control-lg">Cidades(Obrigatorio) :</label>
      <select   id="teste" class="form-control form-control-lg" name="teste" >
    <?php
      while($_SESSION['teste1'] != $result[$m]['Id']){

      $m++;
      }
      ?>
      <option value="<?php echo $result[$m]['Id'] ?>"><?php echo $result[$m]['Nome'] ?></option>
      <?php 
      while($x < $contar){
      ?>
      <option value="<?php echo $result[$x]['Id'] ?>"><?php echo $result[$x]['Nome'] ?></option>
      <?php 
     $x++;
    
     
    }
     
     ?>
     </select>
</div>
    


 <?php 
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
  
  $x5 = 1;
  curl_close($ch5);
 
 ?>
  
  <div class="col-lg-3" >
  <label class="form-control-lg">Bairros :</label> 
     
      <select class="form-control form-control-lg" id="bairro" name="bairro" >
   
       <option value="<?php echo $result5[$x5]['Id'] ?>"><?php echo $result5[$x5]['Nome'] ?></option>
      <?php 
      while($x5 < $contar5){
      ?>
      <option value="<?php echo $result5[$x5]['Id'] ?>"><?php echo $result5[$x5]['Nome'] ?></option>
      <?php 
     $x5++;
    }
     
     ?>
     </select>
</div>
  </div>
  <br>

  


  <div class="row">
 
  <div class="col-lg-5" >
  <label class="form-control-lg">Especialidade :</label>
  <select class="form-control form-control-lg " id ="especialidade"name="especialidade">
      
        <option value="<?php echo $_SESSION['especialidade1']?>"><?php echo $_SESSION['especialidade1']?></option>
        <option value="35">ATENDIMENTO ESPECIAL</option>
        <option value="14">ATM</option>
        <option value="36">AVALIAÇÃO CIRURGICA</option>
        <option value="34">AVALIAÇÃO ORTODÔNTICA</option>
        <option value="8">CIRURGIA</option>
        <option value="32">CIRURGIÃO BUCO MAXILO FACIAL</option>
        <option value="44">CIRURGIÃO DENTISTA EM GERAL</option>
        <option value="4">CLINICO GERAL</option>
        <option value="1">DIAGNOSTICO</option>
        <option value="5">ENDODONTIA</option>
        <option value="10">ESPECIALIDADES</option>
        <option value="43">EXODONTIA 3º MOLAR</option>
        <option value="15">IMPLANTODONTIA</option>
        <option value="16">MEDICAÇÃO</option>
        <option value="3">ODONTOPEDIATRIA</option>
        <option value="9">ORTODONTIA</option>
        <option value="33">OUTROS PROCEDIMENTOS</option>
        <option value="6">PERIODONTIA</option>
        <option value="2">PREVENÇÃO</option>
        <option value="7">PRÓTESE DENTÁRIA</option>
        <option value="11">RADIOLOGIA</option>
        <option value="19">REVISÃO</option>
        <option value="12">URGÊNCIA DIURNA</option>
        <option value="13">URGÊNCIA NOTURNA</option>

        </select>
  </div>
  
  <div class="col-lg-3" >
  <label class="form-control-lg">Dentista :</label>
  <input name="nomefantasia" type="text" class="form-control form-control-lg" placeholder="Nome Fantasia"></input>
  </div>

 
  <div class="col-lg-4" >
  <label class="form-control-lg">Planos  :</label>
<select class="form-control form-control-lg" id="plano"name="plano">
        <option value="<?php echo $_SESSION['plano1']?>"><?php echo $_SESSION['plano1']?></option>
        <option value="19">UNIDENTIS PREMIUM [REG: 487189208]</option>
        <option value="16">UNIDENTIS PREMIUM EMPRESARIAL [REG: 487188200]</option>
        <option value="12">UNIDENTIS VIP [REG: 455966075]</option>
        <option value="13">UNIDENTIS VIP CA [REG: 455913074]</option>
        <option value="14">UNIDENTIS VIP EMPRESARIAL [REG: 463229100]</option>
        <option value="15">UNIDENTIS VIP RN [REG: 479253170</option>
        </select>
        <br>
        
</div>  
  </div>
  <br><br>
  <button type="submit" onClick="toggle();" class="btn btn-primary">clicar</button>
  </form>
</div>


</div>
<div id="conclusao">
<?php 




  $data3 = array(
    'token' => 'RWNTF7PUC87KRYRTVNFGP8XNYWJ4DQC4XWCGSHPW2F9FCURP82',
    'dados' => array(
      'plano' => $_SESSION['plano'],
      'especialidade' => $_SESSION['especialidade'],
      'uf' => $_SESSION['estado'],
      'municipio' => $_SESSION['teste'],
      'bairro' => $_SESSION['bairro'],
      'dentista' => "",
      'nomeFantasia' => ""




    )
    
    
  );

  $payload3 = json_encode($data3);

// Prepare new cURL resource
  $ch3= curl_init('http://unidentis.s4e.com.br/SYS/services/RedeAtendimento.aspx/RedeAtendimento');
  curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch3, CURLINFO_HEADER_OUT, true);
  curl_setopt($ch3, CURLOPT_POST, true);
  curl_setopt($ch3, CURLOPT_POSTFIELDS, $payload3);

  // Set HTTP Header for POST request 
    curl_setopt($ch3, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($payload3))
    );

  // Submit the POST request
  $result3 = curl_exec($ch3);
  $result3 = utf8_encode($result3);
  $result3 = json_decode($result3, true);
  $result3 = $result3['dados'];

$cont = count($result3);
  
  $x3 = 1;
  curl_close($ch3);

?>      
        <!-- Modal -->
      <br><br><br>  
<!-- Modal -->
<div class="resultado">
  <br>
    <h1 style="text-align: center;">Resultados da busca</h1>
    <br>
    <?php
 
      while($x3 < $cont){

        ?>
       <div class="hover">
        <div class="row">
        
       
        <div  class="col-sm-6">
    
        
        
        <h3 ><i class="icofont-building-alt"></i>  <?php echo $result3[$x3]['Clinica']?></h3> 
        <br><br>
        <h3><i class="icofont-doctor"></i>  <?php echo $result3[$x3]['Dentista']?></a></h3>
<br><br>
        <h3><i class="icofont-prescription"></i>  <?php echo $result3[$x3]['Especialidades']?></h3> 
<br><br>
<h3><i class="icofont-tags"></i>  <?php echo $result3[$x3]['Bairro']?></h3> 

<br><br>

<h3><i class="icofont-bank-alt"></i>  <?php echo $result3[$x3]['Municipio']?></h3> 
        <br><br>


     
        </div>
      
        <br>
        <div  class="col-sm-6">
        <h3><i class="icofont-files-stack"></i>  <?php echo $result3[$x3]['CNPJ']?></h3> 
        <br><br>
        <h3><i class="icofont-direction-sign"></i>  <?php echo $result3[$x3]['CEP']?></h3> 
        <br><br>
       
        <h3><i class="icofont-location-pin"></i>  <?php echo $result3[$x3]['Endereco']?></h3> 
        <br><br>
        <h3><i class="icofont-telephone"></i>  <?php echo $result3[$x3]['Telefone']?></h3> 
        <br><br>
        <h3><i class="icofont-location-arrow"></i><?php echo $result3[$x3]['Uf']?></h3> 
       
          </div>
          <div  class="col-sm">  
          </div>
        </div>
        
       
       
      
        
        
        
       
        
  
     

    
      
       
      </div>
        <div id="linha-horizontal"></div>
        <br>
        <?php
    $x3++;  
    }
      ?>
  
     <script>
    
     </script>   
</div>
</div>
<script>
    function toggle() {
    conclusao = document.getElementById("conclusao");
    novo = document.getElementById("novo");

    if(conclusao.style.display == "none"){
    conclusao.style.display = "block";
    novo.style.display = "none";
    } else {
    conclusao.style.display = "none";
    novo.style.display = "block";
    }

    event.preventDefault();

    }

</script>
</html>
