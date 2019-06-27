<?php 
require_once '../model/conn.php';
$cpf = '111';
$nome = 'vv';
//$result = $conn -> exec("INSERT INTO usuario(login , senha) VALUES ('$nome', '$cpf')");
		
					
			

				//header("Location:../view/cadastra_professor.php?res=sucesso");
				echo $cpf;

				$result = $conn -> query("SELECT id FROM professor WHERE cpf = '{$cpf}'");
				
				if ($result) {
					$row = $result->fetch(PDO::FETCH_OBJ);
					echo $row-> id;	
				}
				

					
						//header("Location:../view/reladadas?resut=$row-> id");
					
					# code...
				
						
			    
			
 ?>