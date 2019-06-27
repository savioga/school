<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Relatorio de Disciplina</title>
  <link rel="shortcut icon" href="../dist/img/Ifpi.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../dist/css/table.css">

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
if(isset($_SESSION["nome"]) && isset($_SESSION["senha"])) 
{ if ($_SESSION['nome'] == 'admin') {?>

<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="Pagina_inicial.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="../dist/img/Ifpi.png" width="50" height="50"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="../dist/img/Ifpi.png" width="50" height="50"><b>IFPI</b></span>
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
          
           
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Admin
                  <small>Administrador</small>
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
                            location.href="../model/destruir.php";
                        }
                        document.getElementById("demo").innerHTML=x;
                    }
                  </script>
                 <center><a style="margin-right: 100px; margin-top: 5px" href="relatorio_login.php" title="Cofiguraçõe de logins"><button style="font-size:18px; "><i class="fa fa-users" aria-hidden="true"></i></button></a><button style="margin-right: 30px" onclick="funcao1()" class="btn btn-danger">Sair</button></center>
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
          <a style="font-size: 21px" href="Pagina_inicial.php">
            <i style="margin-right: 10px" class="fa fa-dashboard"></i> <span>Painel de Controle</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a style="font-size: 21px" href="">
            <i style="margin-right: 10px" class="fa fa-plus-square"></i>
            <span>Cadastros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a style="font-size: 19px" href="../view/cadastra_curso.php"><i class="fa fa-circle-o"></i> Cursos</a></li>
            <li><a style="font-size: 19px" href="../view/cadastra_disciplina.php"><i class="fa fa-circle-o"></i> Displinas</a></li>
            <li class="treeview"><a style="font-size: 19px" href=""><i style="margin-right: 10px" class="fa fa-circle-o"></i><span style="margin-left: -5px">Professor</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
              <ul class="treeview-menu">
                <li><a style="font-size: 19px" href="../view/cadastra_professor.php"><i class="fa fa-plus"></i> Cadastrar</a></li>
                <li><a style="font-size: 19px" href="../view/cadastra_ministracao.php"><i class="fa fa-plus"></i> Ninistração de aula</a></li>
                </li>
            </ul>
            <li><a style="font-size: 19px" href="../view/cadastra_aluno.php"><i class="fa fa-circle-o"></i> Alunos</a></li>
            <li><a style="font-size: 19px" href="../view/cadastra_turma.php"><i class="fa fa-circle-o"></i> Turmas</a></li>
            <li><a style="font-size: 17px" href="../view/cadastra_aluno_disciplina.php"><i class="fa fa-circle-o"></i> Alunos em uma Disciplina</a></li>
          
          </ul>
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
            <li><a style="font-size: 19px" href="../view/relatorio_curso.php"><i class="fa fa-circle-o"></i> Cursos</a></li>
            <li><a style="font-size: 19px" href="../view/relatorio_disciplina.php"><i class="fa fa-circle-o"></i> Displinas</a></li>
            <li><a style="font-size: 19px" href="../view/relatorio_professor.php"><i class="fa fa-circle-o"></i> Professores</a></li>
            <li><a style="font-size: 19px" href="../view/relatorio_aluno.php"><i class="fa fa-circle-o"></i> Alunos</a></li>
            
            <li><a style="font-size: 19px" href="../view/relatorio_ministracoes.php"><i class="fa fa-circle-o"></i> Ministrações de aulas</a></li>
             <li><a style="font-size: 19px" href="../view/relatorio_turma.php"><i class="fa fa-circle-o"></i> Turmas</a></li>
             <li><a style="font-size: 19px" href="../view/relatorio_aluno_disciplina.php"><i class="fa fa-circle-o"></i> Aluno-> Disciplina</a></li>

            
          </ul>
        </li>  
         <li class="treeview">
          <a style="font-size: 21px;" href="#">
            <i style="margin-right: 10px" class="fa fa-list-ul"></i>
            <span>Noticias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a style="font-size: 19px" href="../view/cadastra_noticias.php"><i class="fa fa-circle-o"></i> Relatar</a></li>
            <li><a style="font-size: 19px" href="../view/relatorio_noticia.php"><i class="fa fa-circle-o"></i> Noticias</a></li>
          </ul>
        </li>  
        <li  class="">
          <a style="font-size: 21px" href="../view/relatorio_frequencia.php">
            <i style="margin-right: 10px" class="fa fa-edit"></i> <span> Frequencia</span>
            <span class="pull-right-container">
            </span>
          </a>
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
      <h1 style="font-size: 60px">
        Relatorio de Disciplinas
        
      </h1>
      <?php  
        if(isset($_GET['resut'])){
          $s = $_GET['resut'];
          
            if($s=='error'){
            echo '<div style="width: 70%; padding: 6px; font-size: 40px; margin-top: 10px" class="alert alert-danger" role="alert">
                 Erro! Não pode apagar uma Disciplinas relacionado!
                </div>';
           
          }else{
             echo '<div style="width: 70%; padding: 6px; font-size: 40px; margin-top: 10px" class="alert alert-success" role="alert">
                 A disciplina de ID '.$s.' deletado com sucesso!
                </div>';
          }
        }
        if(isset($_GET['re'])){
            $s = $_GET['re'];
          
            echo '<div style="width: 70%; padding: 6px; font-size: 20px; margin-top: 10px" class="alert alert-danger" role="alert">
                Error! Já exite um disciplina com esse nome nesse curso!
                </div>';
          }
          ?>
          <form style="float: right;">
          <table>
            <tr>
              <td><input style="width: 100%; font-size: 20px"  onkeyup="searchTable()" name="pesquisa" class="form-control" id="nome" placeholder="Pesquisar..." required/></td>
              <td><BUTTON style="width: 100%; font-size: 20px"><i class="fa fa-search" aria-hidden="true"></i></BUTTON></td>
            </tr>
          </table>
      </form>
      <table class="table">
            <tr class="tr1">
              <td style="margin-left: 3px;"><h2><b>ID<b><h2></td>
              <td><h2 style="margin-left: 80px;"><b>Nome</b><h2></td>
              <td><h2 style="margin-left: 80px;"><b>Curoso</b><h2></td>
                <td><h2><b></b><h2></td>
                <td><h2><b></b><h2></td>
                <tbody id="myTable"> 
              
              
                
            </tr>

        <div class="row">
          
    <?php
    $cont=0;


    include_once '../model/conn.php';
    
        $result = $conn -> query("SELECT id, nome, id_curso FROM disciplina");
        
        if ($result) {
          //percorre os resultados via iteração
          while($row = $result->fetch(PDO::FETCH_OBJ)){
            
                   $result3 = $conn -> query("SELECT id, nome FROM curso WHERE id = '{$row-> id_curso}'");   
                   $row3 = $result3->fetch(PDO::FETCH_OBJ);
                  

                    echo  '<tr class="tr2">
                           <td><b><h3 style="margin-left:  3"><p>'.$row -> id .'</p></b></h3></td> 
                           <td><h3 style="margin-left:  80px";><p>'.$row -> nome .'</p></h3></td>
                           <td><h3 style="margin-left:  80px;"><p>'.$row3 -> nome .'</p></h3></td>

                           <td><h3 style="margin-left: 5px;"><a href="alterar_disciplina.php?id='.$row -> id.'"><button title="Alterar" style="font-size: 30px; margin-top: -15px" onclick="return confirm('."'Deseja Alterar a Disciplina? '".')" type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></h3></td>
                           <td><h3 style="margin-left: 5px;"><a href="../model/deletar_disciplina.php?id='.$row -> id.'"><button title="Excluir" style="font-size: 30px; margin-top: -15px" onclick="return confirm('."'Deseja deletar a Disciplina? '".')" type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></h3></td>
                        </tr>';
                        $cont++;
            
          }
        }
        
        
  ?>
    </tbody>
    </table> 
    <?php  
    if($cont==0){
          echo '<p style="font-size: 30px">Nenhuma Disciplina foi cadastrada!</p>';
        }
    ?> 
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
}else{
  header("Location:../view/index.php");
} 
}else{
  header("Location:../view/index.php");
} ?>
</body>
</html>
