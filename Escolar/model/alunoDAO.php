<?php
	class alunoDAO
{
	public function delete_aluno($conn, $id){
		try {
			
		 
			
			$result = $conn-> exec("DELETE FROM aluno WHERE id = '{$id}'");
			if($result){
				header("Location:../view/relatorio_aluno.php?resut=$id");
			}
				
			
		}catch (Exception $e) {
			header("Location:../view/relatorio_aluno.php?resut=error");
		}

	
	}	

	public function alterar_aluno($conn , $nome, $matricula, $id_curso, $cpf, $email, $telefone, $turma, $id){
		$result = $conn -> query("UPDATE aluno SET 
								nome = '{$nome}',
								matricula = '{$matricula}',
								id_curso = '{$id_curso}',
								cpf = '{$cpf}',
								email = '{$email}',
								telefone = '{$telefone}',
								id_turma = '{$turma}'
								WHERE id = '{$id}'");
		if ($result) {
				header("Location:../view/relatorio_aluno.php?r=$id");
		}else{
			header("Location:../view/relatorio_aluno.php?r=error");
		}	
	
	}


	public function inserir_aluno($conn, $nome, $matricula, $id_curso, $cpf, $email, $telefone, $turma){
	
		if($nome!=""){//exeuta uma série de instruções SQL
			$result = $conn->exec("INSERT INTO aluno(nome, matricula, id_curso, cpf, email, telefone, id_turma) VALUES ('{$nome}', '{$matricula}', '{$id_curso}', '{$cpf}', '{$email}','{$telefone}', '{$turma}')");
			if ($result) {
				header("Location:../view/cadastra_aluno.php?res=sucesso");
			
		    }
		}else{
			header("Location:../view/cadastra_aluno.php?resu=error");
		}	
	}


	

}

?>