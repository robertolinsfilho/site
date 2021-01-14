<?php
include("conexao.php");
session_start();


//consultar no banco de dados
$result_usuario = "SELECT * from dependentes";
$resultado_usuario = mysqli_query($conexao, $result_usuario);


//Verificar se encontrou resultado na tabela "usuarios"

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <title>Unidentis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script type="text/javascript">
          $("#telefone, #celular").mask("(00) 00000-0000");
        </script>
        <script type="text/javascript">
          $("#cartao").mask("0000 0000 0000 0000");
        </script>
         <script type="text/javascript">
          $("#data").mask("00/0000");
        </script>
          <script type="text/javascript">
          $("#ano").mask("0000");
        </script>
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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    body {
        background: linear-gradient(to right, rgba(235, 224, 232, 1) 52%, rgba(254, 191, 1, 1) 53%, rgba(254, 191, 1, 1) 100%);
        font-family: 'Roboto', sans-serif
    }

    .card {
        border: none;
        max-width: 450px;
        border-radius: 15px;
        margin: 70px 0 70px;
        padding: 35px;
        padding-bottom: 20px !important
    }

    .heading {
        color: #C1C1C1;
        font-size: 14px;
        font-weight: 500
    }

    img {
        transform: translate(160px, -10px)
    }

    img:hover {
        cursor: pointer
    }

    .text-warning {
        font-size: 12px;
        font-weight: 500;
        color: #edb537 !important
    }

    #cno {
        transform: translateY(-10px)
    }

    input {
        border-bottom: 1.5px solid #E8E5D2 !important;
        font-weight: bold;
        border-radius: 0;
        border: 0
    }

    .form-group input:focus {
        border: 0;
        outline: 0
    }

    .col-sm-5 {
        padding-left: 40%;
    }

    .btn btn-danger {
        background: #F3A002 !important;
        border: none;
        border-radius: 30px
    }

    .btn btn-danger:focus {
        box-shadow: none
    }
</style>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:contato@unidentis.com.br">contato@unidentis.com.br</a>
            <i class="icofont-phone"></i> 83 30443000
            <i class="icofont-ambulance"></i> <a data-toggle="modal" style="background-color:  #023bbf" class="btn"data-target="#exampleModal" >Urgência e Emergência</a>
            <i class="icofont-certificate-alt-1"></i> <a data-toggle="modal" style="background-color:  #023bbf" class="btn" data-target="#exampleModal1" >Imposto de Renda</a>
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

     <a href="index.html"><img style="width: 38%; height: 25%;"src="./assets/img/LOGOUNIDENTIS222.png" /></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="redecredenciada.php">Rede Credenciada</a></li>
          <li><a href="querosercliente.php">Quero Ser Cliente</a></li>
          <li><a href="carteirinha.php">Carteira Digital</a></li>
          <li><a href="segundavia.php">Boleto</a></li>
          
          <li><a href="#contact">Contato</a></li>

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
    <h2> Plano Unidentis VIP boleto</h2>
    
     <br><br>
     <h1><span> Titular</span></h1>
     <br>
     <form action="contratocartao.php" method="POST">
       <div class="row">
       <div class="col">
            <label style="color: blue; font-family:'Poppins', sans-serif;  " for="LabelNome">CPF:</label>
           <input type="text" name="cpf" value="<?php echo $_SESSION['cpf']?>"class="form-control" placeholder="CEP"readonly>
         </div>
         <div class="col">
            <label style="color: blue; font-family:'Poppins', sans-serif;  " for="LabelNome">Nome:</label>
           <input type="text" name="nome" value="<?php echo $_SESSION['nome']?>" class="form-control" readonly>
         </div>
         <div class="col">
            <label style="color: blue; font-family:'Poppins', sans-serif;  " for="LabelNome">E-mail:</label>
           <input type="text" class="form-control" name="email" value = "<?php echo $_SESSION['email']?>" readonly>
         </div>
    
         
         <br>
       </div>
       <?php $cont = "0";?>
       <br><br>
    <h1>Dependentes: <?php echo $cont?> </h1>
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
    ?>
   <h2>Preço por Dependente R$: <?php echo $precod?>
<h1>    Valor Total R$:<span> <?php echo $preco1?></span></h1><br><br><br>
   
       
       <a href="dependentes.php"><button type="button" class="btn-get-started scrollto">Cadastrar dependentes</button></a>

<br><br><br>

    <h2>Contrato:</h2>
   <img src="assets/img/PDF.png" style="width: 3%"> <a href="./pdf/CONTRATO_IND_FAMILIAR.pdf" target="_blank">Clique aqui para baixar a minuta do contrato.</a> <br><br>
   <img src="assets/img/PDF.png" style="width: 3%"><a href="./pdf/Manual_de_orientacao_para_contratacao_de_planos_de_saude.pdf" target="_blank">Clique aqui para baixar a manual de orientação.</a><br><br>
   <img src="assets/img/PDF.png" style="width: 3%"><a href="./pdf/GUIA_DE_LEITURA_CONTRATUAL.pdf" target="_blank">Clique aqui para baixar a guia de leitura contratatual.</a><br><br>
   <br><br>
   <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="termos" required>
  <label class="form-check-label" for="inlineCheckbox1">Li e concordo com os termos do contrato</label>
</div><br>
   <h2>Dia do vencimento:</h2>
     
     
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="5" required>
      <label class="form-check-label" for="inlineRadio1">5</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="10" required>
      <label class="form-check-label" for="inlineRadio2">10</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="15"  required>
      <label class="form-check-label" for="inlineRadio3">15</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="20"  required>
      <label class="form-check-label" for="inlineRadio3">20</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="25"  required>
      <label class="form-check-label" for="inlineRadio3">25</label>
    </div>

<br><br><br><br>
<h1>Dados do <span>Cartão</span> </h1>

       <div class="container-fluid">
           <div class="row d-flex justify-content-center">
               <div class="col-sm-12">
                   <div class="card mx-auto">
                       <p class="heading">DETALHES DE PAGAMENTOS</p>
                       <form class="card-details ">
                           <div class="form-group mb-0">
                               <p class="text-warning mb-0">Numero do Cartão</p> <input type="text" name="cartao" placeholder="1234 5678 9012 3457" size="17" id="cartao" minlength="19" maxlength="19"> <img src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
                           </div>
                           <div class="form-group">
                               <p class="text-warning mb-0">Nome do Cartão</p> <input type="text"   name="nomecartao"  placeholder="(Como esta no Cartão)"required>
                           </div>
                           <div class="form-group pt-2">
                               <div class="row d-flex">
                                   <div class="col-sm-4">
                                       <p class="text-warning mb-0">Data</p> <input type="text" name="mes" placeholder="MM/YYYY" size="7" id="data" minlength="7" maxlength="7">
                                   </div>

                                   <div class="col-sm-5 pt-6"> <button type="submit" class="btn btn-danger">Prosseguir</button></div>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>



             </div>
       
      </form>
       </div>
       
      
  
   
   
   
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
