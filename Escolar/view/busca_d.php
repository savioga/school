<?php
$id = $_GET["curso"];
//$id = 2;




 echo '<label style="font-size: 20px" for="exampleInputEmail1">Diciplina ministrada*</label><br>
        <select style="color: #000; width:300px; height: 30px; width: 50%; font-size: 17px;" id="disciolina" name="id_disciplina" class="form-text text-muted" required>';
                 include_once '../model/conn.php';
                     $result = $conn -> query("SELECT id, nome FROM disciplina WHERE id_curso = '$id'");
                      if ($result) {
                         echo '<option style="color: black; " value="" >Selecione uma Disciplina</option>';
                        while($row = $result->fetch(PDO::FETCH_OBJ)){
                          
                          echo '<option style="color: black; " value="'.$row -> id.'">'.$row-> nome.'</option>';
                        }
                      }   
                

         echo '</select>';
         
?>
