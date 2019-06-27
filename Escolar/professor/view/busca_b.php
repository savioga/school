<?php
$id_ministra = $_GET["curso"];
?>
<link rel="stylesheet" href="../../dist/css/table1.css">
 <p style="font-size: 30px">Para alterar a nota click encima da nota</p>
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

       <script type="text/javascript">
    

          function onlynumber(evt) {
             var theEvent = evt || window.event;
             var key = theEvent.keyCode || theEvent.which;
             key = String.fromCharCode( key );
             //var regex = /^[0-9.,]+$/;
             var regex = /^[0-9.]+$/;
             if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
             }
          }
        </script>
      <table style="">
            <tr class="tr1">
              <td><h2 style="margin-left: 2px;"><b>Disciplina</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>Aluno</b></h2></td>
              <td><h2 style="margin-left: 80px;"><b>1ºNota</b></h2></td>
               <td><h2 style="margin-left: 80px;"><b>2ºNota </b></h2></td>
               <td><h2 style="margin-left: 80px;"><b>3ºNota </b></h2></td>
               <td><h2 style="margin-left: 80px;"><b>4ºNota </b></h2></td>
               <td><h2 style="margin-left: 80px;"><b>Media</b></h2></td>
              <td><h2><b></b></h2></td>
              <td><h2><b></b></h2></td>
              <td><h2><b></b></h2></td>
              <tbody id="myTable">
              
                
            </tr>
            
          
    <?php
    

    include_once '../../model/conn.php';
    
        $result = $conn -> query("SELECT id, id_ministra, id_aluno, nota1, nota2, nota3, nota4, media FROM frequencia");
        
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
                           ';
                           if($row -> nota1 == ""){
                               echo '<td ><form method="get" action="../model/nota1.php"><input type="hidden" name="id" value="'.$row -> id.'"><input type="hidden" name="id_ministra" value="'.$row -> id_ministra.'">
                               <input style="margin-left: 90px; padding: 6px; width: 36%; font-size: 17px " name="nota1" type="text" placeholder="Nota 1" /></form>
                                      
                                   
                              </td>';

                            }else{
                              echo '<td><h3 style="margin-left:  100px"><a style="color:black;" href="alterar_nota.php?id='.$row-> id.'&nota=nota1" title="Editar nota " onclick="return confirm('."'Deseja alterar a nota? '".')"><p>'.$row -> nota1.'</p><a></h3></td>
                              ';
                            }
                           if($row -> nota2 == ""){
                               echo '<td ><form method="get" action="../model/nota2.php"><input type="hidden" name="id" value="'.$row-> id.'"><input type="hidden" name="id_ministra" value="'.$row -> id_ministra.'">
                               <input style="margin-left: 90px; padding: 6px; width: 36%; font-size: 17px " name="nota2" type="text"  placeholder="Nota 2" /></form>
                                      
                                   
                              </td>';
                            }else{
                              echo '<td><h3 style="margin-left:  100px"><a style="color:black;" href="alterar_nota.php?id='.$row-> id.'&nota=nota2" title="Editar nota " onclick="return confirm('."'Deseja alterar a nota? '".')"><p>'.$row -> nota2.'</p><a></h3></td>';
                            }
                            if($row -> nota3 == ""){
                               echo '<td ><form method="get" action="../model/nota3.php"><input type="hidden" name="id" value="'.$row-> id.'"><input type="hidden" name="id_ministra" value="'.$row -> id_ministra.'">
                               <input style="margin-left: 90px; padding: 6px; width: 36% ; font-size: 17px"  name="nota3" type="text" placeholder="Nota 3" /></form>
                                      
                                   
                              </td>';
                            }else{
                              echo '<td><h3 style="margin-left:  100px"><a style="color:black;" href="alterar_nota.php?id='.$row-> id.'&nota=nota3" title="Editar nota " onclick="return confirm('."'Deseja alterar a nota? '".')"><p>'.$row -> nota3.'</p><a></h3></td>';
                            }
                            if($row -> nota4 == ""){
                               echo '<td ><form id="nota4" method="get" action="../model/nota4.php"><input type="hidden" name="id" value="'.$row-> id.'"><input type="hidden" name="id_ministra" value="'.$row -> id_ministra.'">
                               <input style="margin-left: 90px; padding: 6px; width: 36% ; font-size: 17px"  name="nota4"  type="text" placeholder="Nota 4" /></form>
                                      
                                   
                              </td>';
                            }else{
                              echo '<td><h3 style="margin-left:  100px"><a style="color:black;" href="alterar_nota.php?id='.$row-> id.'&nota=nota4" title="Editar nota " onclick="return confirm('."'Deseja alterar a nota? '".')"><p>'.$row -> nota4.'</p><a></h3></td>';
                            }
                            
                           
                           
                           
                           
                        echo '<td><b><h3 style="margin-left:  100px"><p>'.$row -> media.'<a></p></b></h3></td>
                        <td><b><h3 style="margin-left:  100px"><p></p></b></h3></td>
                        <td><a style="font-size: 20px" href="../model/calcular_media.php?id='.$row-> id.'" title="Calcular media"><BUTTON>+</BUTTON></a></td>
                              </tr>';
            }
          }
        }
        
  ?>
  
    </tbody >
    </table >
   
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