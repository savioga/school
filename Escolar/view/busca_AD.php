<?php
$id = $_GET["curso"];
//$id = 2;




 echo '<label style="font-size: 20px" for="exampleInputEmail1">Turma*</label><br>
        <select style="color: #000; width:300px; height: 30px; width: 50%; font-size: 17px;" id="disciolina" name="id_turma" class="form-text text-muted" required>';
                 include_once '../model/conn.php';
                     $result = $conn -> query("SELECT id, nome FROM turma WHERE id_curso = '$id'");
                      if ($result) {
                         echo '<option style="color: black; " value="" >Selecione uma Turma</option>';
                        while($row = $result->fetch(PDO::FETCH_OBJ)){
                          
                          echo '<option style="color: black; " value="'.$row -> id.'">'.$row-> nome.'</option>';
                        }
                      }   
                

         echo '</select>';
         echo '<br>';
         echo '<br>';
         echo '<label style="font-size: 20px" for="exampleInputEmail1">Diciplina*</label><br>
        <select style="color: #000; width:300px; height: 30px; width: 50%; font-size: 17px;" id="disciolina" name="id_ministra" class="form-text text-muted" required>';
                 include_once '../model/conn.php';
                     $result2 = $conn -> query("SELECT id, id_disciplina FROM ministra WHERE id_curso = '$id'");

                      if ($result2) {
                         echo '<option style="color: black; " value="" >Selecione uma Disciplina</option>';
                        while($row2 = $result2->fetch(PDO::FETCH_OBJ)){
                          $result3 = $conn -> query("SELECT id, nome FROM disciplina WHERE id = '$row2->id_disciplina'");
                          $row3 = $result3->fetch(PDO::FETCH_OBJ);
                          echo '<option style="color: black; " value="'.$row2 -> id.'">'.$row3-> nome.'</option>';
                        }
                      }   
                

         echo '</select>';

         
?>
