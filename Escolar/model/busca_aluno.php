<?php 
if (isset($_GET["txtnome"])) {
	$nome = $_GET["txtnome"];
if (empty($nome)) {
       $result = $conn-> exec("SELECT * FROM aluno");
    } else {
        $nome .= "%";
        $result = $conn-> exec("SELECT * FROM aluno WHERE nome like '$nome'");
    }
    sleep(1);
    ?>
 <table style="" id="table">
            <tr class="tr1">
              <td style="margin-left: 10px;"><h2><b>ID</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>Nome</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>Curso</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>Matricula</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>CPF</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>Email</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>Telefone</b></h2></td>
              <td><h2><b></b></h2></td>
              <td><h2><b></b></h2></td>
              
                
            </tr>
          
    <?php
    

    include_once '../model/conn.php';
    
        $result = $conn -> query("SELECT id, nome, matricula, id_curso, cpf, email, telefone FROM aluno");
        
        if ($result) {
          //percorre os resultados via iteração
          while($row = $result->fetch(PDO::FETCH_OBJ)){
            
                   $result3 = $conn -> query("SELECT id, nome FROM curso WHERE id = '{$row-> id_curso}'");   
                   $row3 = $result3->fetch(PDO::FETCH_OBJ);
                  

                    echo  '<tr class="tr2">
                           <td><b><h3 style="margin-left:  3"><p>'.$row -> id .'</p></b></h3></td> 
                           <td><h3 style="margin-left:  80px";><p>'.$row -> nome .'</p></h3></td>
                           <td><h3 style="margin-left:  80px;"><p>'.$row3 -> nome .'</p></h3></td>
                           <td><h3 style="margin-left:  80px;"><p>'.$row -> matricula .'</p></h3></td>
                           
                           <td><h3 style="margin-left: 80px;"><p>'.$row-> cpf.'</p></h3></td>
                           
                           <td><h3 style="margin-left: 80px"><p>'.$row -> email.'</p></h3></td>
                           <td><h3 style="margin-left: 80px"><p>'.$row -> telefone.'</p></h3></td>
                           <td><h3 style="margin-left: 5px;"><a href="alterar_aluno.php?id='.$row -> id.'"><button title="Alterar" style="font-size: 30px; margin-top: -15px" onclick="return confirm('."'Deseja Alterar o Aluno? '".')" type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></h3></td><br>
                           <td><h3 style="margin-left: 5px;"><a href="../model/deletar_aluno.php?id='.$row -> id.'"><button title="Excluir" style="font-size: 30px; margin-top: -15px" onclick="return confirm('."'Deseja deletar o Aluno? '".')" type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></h3></td><br>
                        </tr>';
            
          }
        }
        
  ?>
    </table>
}    