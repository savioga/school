<?php
require_once '../../model/conn.php';
$id = $_GET["id_disciplina"];
$afa =0;

$result = $conn -> query("SELECT * FROM afazeres WHERE id_ministra='{$id}'");
          
          if ($result) {
            //percorre os resultados via iteração
            while($row = $result->fetch(PDO::FETCH_OBJ)){
                    
                      
                      echo  '<br><div style="border: 2px solid #ccc; background:LightCyan;">
                              <div>
                                <h1 style="margin-left: 5px"><b></b></h1>
                              
                                <h3 style="margin-left: 10px; margin-right: 10px; margin-top: 50px">'.$row-> afazer.'<?h3>
                              </div>
                              <br>
                                 <right><h4 style=" margin-left: 80%">Data da entrega: '.$row-> data.'</h4></right>
                          
                                 ';
                                 
                            echo '</div>
                            <br>
                            <br>


                             
                          ';
                          $afa++;
                  
            }
          }
          if($afa == 0){
            echo '<p style="font-size: 40px">Nenho afazer encontrado!</p>';
          }