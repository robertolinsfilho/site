<?php
include("conexao.php");
session_start();
$cpf = $_SESSION['cpf'];

//consultar no banco de dados
$result_usuario = "SELECT * from dependentes";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

$result_usuario2 = "SELECT * from dadospessoais WHERE cpf='$cpf'";
$resultado_usuario2 = mysqli_query($conexao, $result_usuario2);

 
//Verificar se encontrou resultado na tabela "usuarios"

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.1.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:financeiro@unidentis.com.br">financeiro@unidentis.com.br</a>
        <i class="icofont-phone"></i> 83 30443025
      </div>
      <div class="social-links">
        <a href="https://twitter.com/login?lang=pt" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://pt-br.facebook.com/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.skype.com/pt-br/" class="skype"><i class="icofont-skype"></i></a>
        <a href="https://www.linkedin.com/feed/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Unidentis<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">Aplicativo</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#portfolio">Advogados</a></li>
          <li><a href="#pricing">Preços</a></li>
          
             
        </ul>
      </nav><!-- .nav-menu -->

    </div>
    
  </header><!-- End Header -->
  <section id="hero"  class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Titular /<span> Dependentes</span></h1>
      



    </div>
  </section>
  
  <section id="form2" class="d-flex align-items-center"> 
    <div class="container" data-aos="zoom-out" data-aos-delay="200">
    <h1>Titular /<span> Dependentes</span></h1>
  
    
     
   
    
   
<br><br>
<form action="contrato.php" method="POST">
       <div class="row">
       <div class="col-3">
            <label style="color: blue; font-family:'Poppins', sans-serif;  " for="LabelNome">CPF:</label>
           <input type="text" name="cpf" value="<?php echo $_SESSION['cpf']?>"class="form-control" placeholder="CEP"readonly>
         </div>
         
         
         
         <br>
       </div>
       
       <br><br>
    <h1>Dependentes:</h1>
    <br>
     <table class="table">
  <thead>
    <tr>
        <th width="200 px" scope="col">CPF Cliente</th>
        <th width="200 px" scope="col">Dependente</th>
        <th width="200 px" scope="col">CPF Dependente</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $cont = "0";
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
        if($row_usuario['cpf_titular'] == $_SESSION['cpf'] ){ 
            $cont++;
        ?>
			
                    <div class="table-responsive-sm">
                    <table class="table table-sm">
                    <thead>
                        <tr>
                        
                            <th width="200 px" scope="row"><?php echo $row_usuario['cpf_titular']; ?></th>
                            <th width="200 px" scope="row"><?php echo $row_usuario['nome']; ?></th>
                            <th width="200 px" scope="row"><?php echo $row_usuario['cpf']; ?></th>
                           
                           
                        </tr>
                    </thead>
            </div>
            <div class="footer">
  <p></p>
</div>

				<?php
			}}?>
		</tbody>
    </table>
    <br><br><br>


    <?php
$row_usuario2 = mysqli_fetch_assoc($resultado_usuario2);
unset($_SESSION['preco']);
if($row_usuario2['plano']=='UNIDENTIS VIP BOLETO'){
  $preco = 40;
  $zero =0;
  if($cont > 0){
    $preco = 35;
  }
  while ($cont > $zero){
   
    $preco2 = 35;
     $preco = $preco + $preco2;
     $cont--;
  }
  $_SESSION['preco'] = $preco1;
  
}elseif($row_usuario2['plano']=='UNIDENTIS VIP CARTÃO'){
  $precod = 30;
  $preco1 = 0;
  $preco = 30;
  $zero = 0;
  if($cont == 1){
    $preco = 28;
    $precod = 28;
   
  }if($cont >= 2){
     $preco = 25;   
     $precod = 25;
     $preço1 = 25;  
  }
  
  while ($cont >= $zero){
      
    
      $preco1 = $preco1 + $preco;

     $cont--;
  }
  $_SESSION['preco'] = $preco1;
}elseif($row_usuario2['plano']=='UNIDENTIS VIP FAMÍLIA'){
  $precod = 66;
  $preco1 = 0;
  $preco = 66;
  $zero = 0;
  if($cont == 1){
    $preco = 33;
    $precod = 33;
   
  }if($cont >= 2){
     $preco = 22;   
     $precod = 22;
     $preço1 = 22;  
  }
  
  while ($cont >= $zero){
      
    
      $preco1 = $preco1 + $preco;

     $cont--;
  }
  $_SESSION['preco'] = $preco1;
}elseif($row_usuario2['plano']=='UNIDENTIS VIP SERVIDOR'){
  $precod = 22;
  $preco1 = 0;
  $preco = 22;
  $zero = 0;
  if($cont == 1){
    $preco = 20;
    $precod = 20;
   
  }if($cont >= 2){
     $preco = 19;   
     $precod = 19;
     $preço1 = 19;  
  }
  
  while ($cont >= $zero){
      
    
      $preco1 = $preco1 + $preco;

     $cont--;
  }
  $_SESSION['preco'] = $preco1;
}elseif($row_usuario2['plano']=='UNIDENTIS VIP UNIVERSITÁRIO CARTÃO'){
  $precod = 21.90;
  $preco1 = 0;
  $preco = 21.90;
  $zero = 0;
  if($cont == 1){
    $preco = 20.90;
    $precod = 20.90;
   
  }if($cont >= 2){
     $preco = 19.90;   
     $precod = 19.90;
     $preço1 = 19.90;  
  }
  
  while ($cont >= $zero){
      
    
      $preco1 = $preco1 + $preco;

     $cont--;
  }
  $_SESSION['preco'] = $preco1;
}else{

}


?>

   
     <a href="dependentes.php"><button type="button" class="btn-get-started scrollto">Cadastrar dependentes</button></a>
     <button type="submit" class="btn-get-started scrollto">Prosseguir</button>
<br><br><br>
    
    <h1>Valor Total R$:<span> <?php echo  $_SESSION['preco']?></span></h1><br>
   
 
     
     
     
   



       
             </div>
       
      </form>
  
   
   
   
   </section>

   
   </body>
   <div id="preloader"></div>
     <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
   
     <!-- Vendor JS Files -->
     <script src="assets/vendor/jquery/jquery.min.js"></script>
     <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
     <script src="assets/vendor/php-email-form/validate.js"></script>
     <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
     <script src="assets/vendor/counterup/counterup.min.js"></script>
     <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
     <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
     <script src="assets/vendor/venobox/venobox.min.js"></script>
     <script src="assets/vendor/aos/aos.js"></script>
   
     <!-- Template Main JS File -->
     <script src="assets/js/main.js"></script>
   

     <!-- Template Main JS File -->
     <script src="assets/js/main.js"></script>
     <?php
    

?>  
  </html>
