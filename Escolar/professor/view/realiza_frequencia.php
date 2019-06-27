<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Frequencia</title>
  <link rel="shortcut icon" href="../../dist/img/Ifpi.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
   <?php 
// Inicia sessões 
session_start(); 
 
// Verifica se existe os dados da sessão de login 
$cont = 0;
if(isset($_SESSION["nome"]) && isset($_SESSION["senha"])){ 
  require_once '../../model/conn.php';
   $result = $conn -> query("SELECT id, nome FROM professor");
      if ($result) {
          while($row = $result->fetch(PDO::FETCH_OBJ)){
            if ($row -> nome == $_SESSION['nome']) {
              $cont++;
            }

          }
      }
          
  if($cont > 0){
  ?>


<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="../../dist/img/Ifpi.png" width="50" height="50"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="../../dist/img/Ifpi.png" width="50" height="50"><b>IFPI</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
            <?php  
                  

                  $nome = $_SESSION["nome"];
                  ?>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/professor.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $nome;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/professor.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $nome;?>
                  <small>Professor</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
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
                  <center><button style="margin-right: 99px" onclick="funcao1()" class="btn btn-danger">Sair</button></center>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
        
     
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li style="font-size: 50px"class="header">   Menu</li>
        <li>
          <a style="font-size: 21px" href="index.php">
            <i style="margin-right: 10px" class="fa fa-dashboard"></i> <span>Painel de Controle</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        
        <li  class="">
          <a style="font-size: 21px" href="frequencia.php">
            <i style="margin-right: 10px" class="fa fa-edit"></i> <span> Frequencia</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li  class="">
          <a style="font-size: 21px" href="boletim.php">
            <i style="margin-right: 10px" class="fa fa-file-text-o" aria-hidden="true"></i> <span>Boletim</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li  class="">
          <a style="font-size: 21px" href="afazeres.php">
            <i style="margin-right: 10px" class="fa fa-list-ol" aria-hidden="true"></i> <span> Afazeres</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a style="font-size: 21px;" href="#">
            <i style="margin-right: 10px" class="fa fa-list-ul"></i>
            <span>Relatorios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a style="font-size: 19px" href="../view/relatorio_afazer.php"><i class="fa fa-circle-o"></i> Afazeres</a></li>
            <li><a style="font-size: 19px" href="../view/relatorio_noticias.php"><i class="fa fa-circle-o"></i> Noticias</a></li>
            
          </ul>
        </li>  
        
         
        
      </ul>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size: 40px">
        Frequencia
        
      </h1>
      
      <br>
     <?php
$id_ministra = $_GET["id_curso"];
?>
<link rel="stylesheet" href="../../dist/css/table1.css">
<form style="float: right; ">
          <table>
            <tr>
              <td><input style="width: 100%; font-size: 20px; " onkeyup="searchTable()" id="nome" placeholder="Pesquisar..." required/></td>
              <td><BUTTON style="width: 100%; font-size: 20px"><i class="fa fa-search" aria-hidden="true"></i></BUTTON></td>
            </tr>
          </table>
      </form>
      <br>
      <br>


      <table style="">
            <tr class="tr1">
              <td><h2 style="margin-left: 2px;"><b>Disciplina</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>Aluno</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>Falta</b></h2></td>
               <td><h2 style="margin-left: 80px;"><b>Presença</b></h2></td>
              <td><h2><b></b></h2></td>
              <td><h2><b></b></h2></td>
              <tbody id="myTable">
              
                
            </tr>
          
          
    <?php
   $cont =0 ; 

    include_once '../../model/conn.php';
    
        $result = $conn -> query("SELECT id, id_ministra,falta, id_aluno, presenca FROM frequencia");
        
        if ($result) {
          //percorre os resultados via iteração
          while($row = $result->fetch(PDO::FETCH_OBJ)){
            if($row-> id_ministra == $id_ministra){
                   
                   $result5 = $conn -> query("SELECT id, nome FROM aluno WHERE id = '{$row-> id_aluno}'");   
                   $row5 = $result5->fetch(PDO::FETCH_OBJ);
                   $result6 = $conn -> query("SELECT id, id_disciplina FROM ministra WHERE id = '{$row-> id_ministra}'");   
                   $row6 = $result6->fetch(PDO::FETCH_OBJ);
                   $result7 = $conn -> query("SELECT id, nome FROM disciplina WHERE id = '{$row6-> id_disciplina}'");   
                   $row7 = $result7->fetch(PDO::FETCH_OBJ);
                   

                  

                    echo  '<tr class="tr2">
                           <td><b><h3 style="margin-left:  2px"><p>'.$row7 -> nome .'</p></b></h3></td> 
                           <td><b><h3 style="margin-left:  80px"><p>'.$row5 -> nome .'</p></b></h3></td> 
                           <td><div id="falta"a><h3 style="margin-left:  80px";><div id="load"><p>'.$row -> falta .'
                           <a href="../model/faltamais.php?mais=1&id='.$row-> id.'"><BUTTON id="btfalta" class="btn btn-primary" style="margin-left: 20px; font-size: 12px" >+</BUTTON>
                           </a>
                           <a href="../model/faltamenos.php?menos=1&id='.$row-> id.'"><BUTTON class="btn btn-danger" style="margin-left: 4px; font-size: 12px" >-</BUTTON></a></p></h3></td><div>
                           </a>
                           <td><h3 style="margin-left:  110px;"><p>'.$row -> presenca .'
                           <a href="../model/presencamais.php?mais=1&id='.$row-> id.'"><BUTTON class="btn btn-primary" style="margin-left: 20px; font-size: 12px">+</BUTTON></a>
                           <a href="../model/presencamenos.php?nemos=1&id='.$row-> id.'"><BUTTON class="btn btn-danger" style="margin-left: 4px; font-size: 12px">-</BUTTON></p></h3></td></a>
                           
                        </tr>';
                        $cont++;
            }
          }
        }
        
        
  ?>
    </tbody>
    </table>
    <?php  
    if($cont==0){
          echo '<p style="font-size: 30px">Nenhum aluno foi cadastrado nessa disciplina!</p>';
        }
    ?>
    <br>
    <br>
    <br>
          <a href="frequencia.php"><button style="width: 10%; font-size: 20px" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i>   Voltar</button></a>
     <script>
        function buscar_minicursos(){
          var curso = $('#falta').val();
          if(curso){
            var url = 'busca_falatamais.php?curso='+curso;
            $.get(url, function(dataReturn) {
              $('#btfalta').html(dataReturn);
            });
          }
        }
        </script> 
    </section>
    <script type="text/javascript">
                   function searchTable() {
          var input, filter, found, table, tr, td, i, j;
          input = document.getElementById("nome");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td");
              for (j = 0; j < td.length; j++) {
                  if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                      found = true;
                  }
              }
              if (found) {
                  tr[i].style.display = "";
                  found = false;
              } else {
                  tr[i].style.display = "none";
              }
          }
      }

</script>


    <!-- Main content -->
    
        <!-- /.control-sidebar-menu -->
  

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="../../bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<?php 
  }else{
    header("Location:../../view/index.php");
  }
}else{
  header("Location:../../view/index.php");
} ?>
</body>
</html>
