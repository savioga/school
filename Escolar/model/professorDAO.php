<?php
	class professorDAO
{

	
	public function delete_professor($conn, $id){
		try {
			$result = $conn-> exec("DELETE FROM professor WHERE id = '{$id}'");
			if($result){
				include 'loginDAO.php';
				$login = new loginDAO();
				$login -> delete_login($conn, $id);
				header("Location:../view/relatorio_professor.php?resut=$id");
			}else{
				header("Location:../view/relatorio_professor.php?resut=error");
			}
		} catch (Exception $e) {
			header("Location:../view/relatorio_professor.php?resut=error");
		}

	}


	public function alterar_professor($conn, $nome, $cpf, $formacao, $email, $telefone, $id){
		$result = $conn -> query("UPDATE professor SET 
								nome = '{$nome}',
								formacao = '{$formacao}',
								cpf = '{$cpf}',
								email = '{$email}',
								telefone = '{$telefone}'
								WHERE id = '{$id}'
								");
		if ($result) {
				header("Location:../view/relatorio_professor.php?r=$id");
		}else{
			header("Location:../view/relatorio_professor.php?r=error");
		}	
	
	}

	public function inserir_professor($conn, $nome, $cpf, $formacao, $email, $telefone){
	
		//exeuta uma série de instruções SQL
			$result = $conn->exec("INSERT INTO professor(nome, cpf, formacao, email, telefone) VALUES ('{$nome}', '{$cpf}', '{$formacao}', '{$email}', '{$telefone}')");
				if($result){
				}else{
					header("Location:../view/cadastra_professor.php?resu=error");
				}	
	} 
	

}

?>