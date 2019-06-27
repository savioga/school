<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Afazeres</title>

  <!-- Custom fonts for this theme -->
  <link rel="shortcut icon" href="../../dist/img/Ifpi.png">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <?php 
// Inicia sessões 
session_start(); 
 
// Verifica se existe os dados da sessão de login 
$cont = 0;
if(isset($_SESSION["nome"]) && isset($_SESSION["senha_aluno"])){ 
  require_once '../../model/conn.php';
   $result = $conn -> query("SELECT id, nome, matricula FROM aluno");
      if ($result) {
          while($row = $result->fetch(PDO::FETCH_OBJ)){
            if ($row -> matricula == $_SESSION['senha_aluno']) {
              $cont++;
            }

          }
      }
          
  if($cont > 0){
  ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a style="margin-left: -100px" class="navbar-brand js-scroll-trigger" href="index.php"><img src="../../dist/img/Ifpi.png" width="50" height="50">IFPI</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="frequencia.php">Frequencias</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="boletim.php">Boletins</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Afazeres.php">Afazeres</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="noticias.php">Noticias</a>
          </li>
          <script>
                     function funcao1()
                      {
                        var x;
                        var r=confirm("Deseja Sair");
                        if (r==true){
                            location.href="../../model/destruir.php";
                        }
                        document.getElementById("demo").innerHTML=x;
                    }
                  </script>
          
          <li class="nav-item mx-0 mx-lg-1">
            <p style="color: white; margin-left:100px; margin-top: 15px; width:100% ">Aluno: <?php echo $_SESSION["nome"];?></p>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="funcao1()" ><button style="font-size: 10px; margin-top: -5px" class="btn btn-danger">Sair</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header  style="margin-top: -120px " class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">


    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Afazeres</h2>
      <br>
      <br>
      <!-- Icon Divider -->
    
      <p style="font-size: 30px">Selecione um disciplina disciplina!</p>
          <form method="get" action="realiza_frequencia.php">
          <select style="color: #000; width:300px; height: 30px; width: 50%; font-size: 17px;" id="id_disciplina" name="id_disciplina" class="form-text text-muted" onchange="buscar_minicursos()" required>
                  <?php include_once '../../model/conn.php';
                $id = $_SESSION['id'];
                     $result = $conn -> query("SELECT id, id_aluno, id_ministra FROM frequencia");
                echo '<option style="color: black;" value="">Selecione uma disciplina </option>';
                      if ($result) {
                        while($row = $result->fetch(PDO::FETCH_OBJ)){
                           $result2 = $conn -> query("SELECT id_disciplina FROM ministra WHERE id ='{$row-> id_ministra}'");
                           $row2 = $result2->fetch(PDO::FETCH_OBJ);
                           $result3 = $conn -> query("SELECT nome FROM disciplina WHERE id ='{$row2-> id_disciplina}'");
                           $row3 = $result3->fetch(PDO::FETCH_OBJ);
                           if ($row->id_aluno == $_SESSION['id']) {
                             echo '<option style="color: black; " value="'.$row -> id_ministra.'">'.$row3-> nome.'</option>';
                           }
                         
                        }
                      }   
                ?>
                

           
           </select> 
           <div id="load_minicursos">
          <div>
           </form>
      <script>
        function buscar_minicursos(){
          var curso = $('#id_disciplina').val();
          if(curso){
            var url = 'busca_afz.php?id_disciplina='+curso;
            $.get(url, function(dataReturn) {
              $('#load_minicursos').html(dataReturn);
            });
          }
        }
      </script>
        
   
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
 
  <!-- Contact Section -->
  

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Localização</h4>
          <p class="lead mb-0">Instituto Federal do Piauí
            <br>Corrente, PI</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
         
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Desenvolvedor</h4>
          <p class="lead mb-0">Savio Guedes Amaral
            <a href="#">IFPI</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Formosa do Rio Preto - BA: 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  

  <!-- Portfolio Modal 2 -->

  <!-- Portfolio Modal 3 -->
  

  <!-- Portfolio Modal 4 -->
  

  <!-- Portfolio Modal 5 -->
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
<?php 
  }else{
    header("Location:../../view/index.php");
  }
}else{
  header("Location:../../view/index.php");
} ?>
</body>

</html>
