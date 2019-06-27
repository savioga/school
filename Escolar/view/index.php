<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--author:starttemplate-->
<!--reference site : starttemplate.com-->
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../dist/css/login.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>Login</title>
    
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../dist/img/Ifpi.png">
 


  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-5 text-center" style="margin-top: 20px">
           
            <form method="POST" action="../model/redirecionamento.php" class="form-login"></br>
                <h4 style=" font-size: 50px">Faça seu Login</h4>
                </br>
                <?php  
                    if(isset($_GET['resu'])){
                      $s = $_GET['resu'];
                      if($s=='error'){
                        echo '</i><div>
                               <p style="width:70% ;background: transparent;color: red; margin-left: 90px; font-size:20px;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Usuario ou senha Incorreto!</p>
                           </div>';
                      }
                        
                      }
                    else{
                       $s = "";
                    }
                  ?>
                <img style="margin-right: 10px; margin-top: -5px" src="../dist/img/user.png" height="50px" width="50px"><input type="text" name="nome" class="imput" title="Usuario" />
                </br></br>
                <img style="margin-right: 10px; margin-top: -5px;" src="../dist/img/senha.svg" height="50px" width="50px"><input type="password" name="senha" class="imput" title="Senha" />
                </br></br>
                <div class="wrapper">
                        <span class="group-btn">

                            <input type="submit" class="btn btn-primary btn-md" value="Entrar" style="padding: 10px; width: 120px" />
                        </span>
                </div>
            </form>
        </div>
    </div>
    </br></br></br>
    <!--footer-->
    <div class="footer text-white text-center">
    </div>
    <!--//footer-->
</div>
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<?php 
require_once '../model/conn.php';
// Inicia sessões 


error_reporting(0);
ini_set(“display_errors”, 0 );

session_start(); 
 $cont=0;
// Verifica se existe os dados da sessão de login 
if(isset($_SESSION["nome"]) && isset($_SESSION["senha"])){
  $logi=$_SESSION['nome'];

  if($logi=='admin'){
    header("Location:Pagina_inicial.php");
  }else{
  	$result = $conn -> query("SELECT id_professor,login, senha FROM usuario");
    while($row = $result->fetch(PDO::FETCH_OBJ)){
      if($row-> login==$_SESSION['nome']){
        $cont++;
        
      }

    }
    if ($cont>0) {
        header("Location:../professor/view/index.php");
    }else{
        header("Location:../aluno/view/index.php");
    }
}
}
 ?>
</body>
</html>
