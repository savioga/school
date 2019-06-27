<?php 
/**
 * 
 */
class loginDAO
{
	
	public function cadastra_usuario($conn, $nome, $cpf, $id){   
		echo "$nome";
		echo "$cpf";
		d;
		$result = $conn -> exec("INSERT INTO usuario(login , senha, id_professor) VALUES ('$nome', '$cpf', $id)");
		
					
			if($result){
				header("Location:../view/cadastra_professor.php?res=sucesso");
							
			    
			}else{
				header("Location:../view/cadastra_professor.php?resu=error");
			}	
	}    


	public function delete_login($conn, $id){
		echo "$cpf";
		$result = $conn-> exec("DELETE FROM usuario WHERE id = '{$id}'");
		if($result){
			header("Location:../view/relatorio_login.php?resut=$id");
		}else{
			header("Location:../view/relatorio_login.php?resut=error");
		}

	}
}