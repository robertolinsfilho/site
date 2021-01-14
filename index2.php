<?php
session_start();

error_reporting(0);
ini_set(“display_errors”, 0 );





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
#titulo{
  background-color: #023bbf;
  color: white;
}

#iconazul{
  font-size: 225%;
  opacity : 70%;
  color: #023bbf;
}
#iconazul:hover{
  color: #9a9a9a;;
}
h6{
 font-family: Arial;
  display : inline;
  color: #9a9a9a;
  

}
table{
  font-size:9px;
  
}

div.row{
  margin-left:2%;
  margin-right:2%;
}
    </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- CSS only -->

<!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified JavaScript -->

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- Vendor CSS Files -->
 
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<body>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- CSS only -->


<script type="text/javascript">

$('#exampleModal3').on('shown.bs.modal', function () {
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
      jQuery("#loader").delay(2000).fadeOut("slow");
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
  jQuery(document).ready(function(){
		jQuery('#dentista').change(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "salvar5.php",
				data: dados,
				success: function( data )
				{
					
				}
			});
      timer = window.setTimeout("location.reload()", 1000 );
    });
  });


  var vendaMediaMensal = $("#dentista");
vendaMediaMensal.focusout( function(){
    alert(vendaMediaMensal.val());
});
</script>

</head>
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:contato@unidentis.com.br">contato@unidentis.com.br</a>
            <i class="icofont-phone"></i> 83 30443000
            <i class="icofont-ambulance"></i> <a data-toggle="modal" data-target="#exampleModal" >Urgência e Emergência</a>
            <i class="icofont-certificate-alt-1"></i> <a data-toggle="modal" data-target="#exampleModal1" >Imposto de Renda</a>
        </div>
        <div class="social-links">

            <a href="https://pt-br.facebook.com/unidentisplanoodontologico" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="https://www.instagram.com/unidentisplanoodontologico/?hl=en" class="instagram"><i class="icofont-instagram"></i></a>

            <a href="https://www.linkedin.com/company/unidentis-assitencia-odontologica-ltda/?originalSubdomain=br" class="linkedin"><i class="icofont-linkedin"></i></a>
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
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Primeiro Acesso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
          <h5> ACESSE COM O NÚMERO DO CPF DO TITULAR DO PLANO E A SENHA INICIAL 1234 </h5>
          <br>
          


        </div>
            <div class="modal-footer">
                <a href="https://unidentis.s4e.com.br/SYS/?TipoUsuario=1"> <button type="button" class="btn btn-secondary" >Acessar</button></a>

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

<div class="col-md-4" >
<label class="form-control-md">Estados(Obrigatorio):</label> 
      <select  id="ajax_form" class="form-control form-control-md" onclick="comecarReload();" name="estado" id="estado" >
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
      
    ?>





<div class="col-md-4" >
<label class="form-control-md">Cidades(Obrigatorio) :</label>
      <select   id="teste" class="form-control form-control-md" name="teste" >
     <?php
$l = $_SESSION['teste1']
     ?>
       <option value="<?php $result[$l]['Id'] ?>"><?php echo $result[$l]['Nome'] ?></option>
    
    <?php
       if($_SESSION['estado'] == 14 ){
    ?>
     <option value="3504">ALHANDRA</option>
     <option value="3508">AREIA</option>
     <option value="3515">BAYEUX</option>
     <option value="3519">BOM JESUS</option>
     <option value="3526">CAAPORA</option>
     <option value="3528">CABEDELO</option>
     <option value="3533">CAJAZEIRAS</option>
     <option value="3535">CAMALAU</option>
     <option value="35036">CAMPINA GRANDE</option>
     <option value="172">CATOLE DO ROCHA</option>
     <option value="3557">GUARABIRA</option>
     <option value="3564">ITABAINA</option>
     <option value="3568">JACARAU</option>
     <option value="3570">JOAO PESSOA</option>
     <option value="3584">MAMANGUAPE</option>
     <option value="3589">MOGEIRO</option>
     <option value="3595">NAZAREZINHO</option>
     <option value="3602">PATOS</option>
     <option value="3607">PIANCO</option>
     <option value="3615">POMBAL</option>
     <option value="3619">QUEIMADAS</option>
     <option value="3624">SALGADOS DE SAO FELIX</option>
     <option value="3628">SANTA RITA</option>
     <option value="3632">SAO BENTO</option>
     <option value="3647">SAPE</option>
     <option value="3649"> SERRA BRANCA</option>
     <option value="175">SOUSA</option>
     <option value="3656">SUME</option>
      <?php 
       }
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
  $o =0;
  $x5 = 0;
  curl_close($ch5);
 
 ?>
  
  <div class="col-md-3" >
  <label class="form-control-md">Bairros :</label> 
  
      <select class="form-control form-control-md" id="bairro" name="bairro" >
      <?php
      $p = $_SESSION['bairro1'];
   
    ?>
     <option value="<?php echo $result5[$p]['Id'] ?>"><?php echo $result5[$p]['Nome'] ?></option>
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
 
  <div class="col-md-5" >
  <label class="form-control-md">Especialidade :</label>
  <select class="form-control form-control-md " id ="especialidade"name="especialidade">
      
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
        <option value="-1">Todos</option>
        </select>
  </div>
  
  <div class="col-md-3" >
  <label class="form-control-md">Dentista :</label>
  <input name="dentista" id="dentista" type="text" class="form-control form-control-md"  placeholder="Dentista"></input>
  </div>

 
  <div class="col-md-4" >
  <label class="form-control-md">Planos  :</label>
<select class="form-control form-control-md" id="plano"name="plano">
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
      'dentista' => "{$_SESSION['dentista']}",
      'nomeFantasia' => ""




    )
    
    
  );
$_SESSION['dentista'] ='';
$_SESSION['bairro'] ='-1';
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
  
  
  curl_close($ch3);

?>      
        <!-- Modal -->
      <br><br><br>  
<!-- Modal -->0

<div class="resultado">
  <br>
  <div id="titulo">
    <h1 style="text-align: center;">Resultados da busca</h1>
  </div>
    <br>
    <?php
      $x3 = 0;
      while($x3 < $cont){

        ?>
       <div class="hover">
        <div class="row">
        
       
        <div  class="col-sm-6">
    
        
        
        <h6 style="color: #023bbf;" ><i id="iconazul" class="icofont-building-alt"></i>  <?php echo $result3[$x3]['Clinica']?></h6> 
        <br><br>
        <h6><i id="iconazul" class="icofont-doctor"></i>  <?php echo $result3[$x3]['Dentista']?></a></h6>
        
<br><br>
        <h6><i  class="icofont-prescription" id="iconazul"></i>  <?php echo $result3[$x3]['Especialidades']?></h6> 
<br><br>

      


     
        </div>
      
        <br>
        <div  class="col-sm-6">
      
        
        <h6><i  class="icofont-direction-sign" id="iconazul"></i><?php echo $result3[$x3]['Endereco']?>,  <?php echo $result3[$x3]['Bairro']?>,<?php echo $result3[$x3]['Municipio']?>,<?php echo $result3[$x3]['CEP']?>,<?php echo $result3[$x3]['Uf']?></h6> 
        <br><br>

        
        <h6><i  class="icofont-telephone" id="iconazul"></i>  <?php echo $result3[$x3]['Telefone']?></h6> 
        <br><br>
        <h6 style="color: #023bbf;"><i class="icofont-plus-square" id="iconazul" data-toggle="modal" data-target="#exampleModal2"></i>  PRODUTOS ATENDIDOS</h6> 
        <br><br>
       
          </div>
         
        </div>
        
       
       
      
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=maria%20batista%20palitot&key=AIzaSyBpqWvj1MWvNkQJib6JGgLDxcMX0AttjI4" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
        
        
        

      
       
      </div>
      
        <div id="linha-horizontal"></div>
        <br>
        <?php
    $x3++; 
    $_SESSION['clinica'] = $x3; 
    }
      ?>
  
    
</div>
</div>
       
        
  
     
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-notify modal-info modal-fluid 2">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Produtos Atendidos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
     
        <br>
      	<table class="table">
						<thead>
							<tr>
                <th scope="col">Registro</th>
								<th scope="col">Nome</th>
								<th scope="col">Tipo De Contratação</th>
								<th scope="col">Abrangência Geográfica</th>
                <th scope="col">Segmentação</th>
                <th scope="col">Situação</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
                <td>455913074</td>
                <td>UNIDENTIS VIP CA</td>
                <td>COLETIVO POR ADESAO</td>
								<td>MUNICIPAL OU GRUPO MUNICIPIO</td>
								<td>ODONTOLÓGICA</td>
								<td><span class="badge badge-success">ATIVO</span></td>
							</tr>
							<tr>
              <td>455966075</td>
              <td>UNIDENTIS VIP</td>
								<td>INDIVIDUAL OU FAMILIAR</td>
								<td>MUNICIPAL OU GRUPO MUNICIPIO</td>
								<td>ODONTOLÓGICA</td>
								<td><span class="badge badge-success">ATIVO</span></td>
							</tr>
							<tr>
              <td>463229100	</td>
              <td>UNIDENTIS VIP EMPRESARIAL</td>
								<td>COLETIVO EMPRESARIAL</td>
								<td>MUNICIPAL OU GRUPO MUNICIPIO</td>
								<td>ODONTOLÓGICA</td>
								<td><span class="badge badge-success">ATIVO</span></td>
              </tr>
              <tr>
              <td>479253170	</td>
              <td>UNIDENTIS VIP RN</td>
								<td>COLETIVO EMPRESARIAL</td>
								<td>NACIONAL</td>
								<td>ODONTOLÓGICA</td>
								<td><span class="badge badge-success">ATIVO</span></td>
              </tr>
              <tr>
              <td>487188200	</td>
              <td>UNIDENTIS PREMIUM EMPRESARIAL</td>
								<td>COLETIVO EMPRESARIAL</td>
								<td>MUNICIPAL OU GRUPO MUNICIPIO</td>
								<td>ODONTOLÓGICA</td>
								<td><span class="badge badge-success">ATIVO</span></td>
              </tr>
              <td>487189208	</td>
              <td>UNIDENTIS PREMIUM</td>
								<td>INDIVIDUAL OU FAMILIAR</td>
								<td>MUNICIPAL OU GRUPO MUNICIPIO</td>
								<td>ODONTOLÓGICA</td>
								<td><span class="badge badge-success">ATIVO</span></td>
							</tr>
						</tbody>
					</table>
					<div class="collapse collapse-box" id="basic-table" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="basic-table-code">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
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
    
})

</script>

</html>
