<?php
class aluno_disciplinaDAO
{
	public function inserir_aluno_disciplina($conn, $curso, $turma, $minitra, $aluno, $falta, $presenca){
		
			//exeuta uma série de instruções SQL
				$result = $conn->exec("INSERT INTO frequencia(id_curso, id_turma, id_ministra, id_aluno, falta, presenca) VALUES ('{$curso}', '{$turma}', '{$minitra}', '{$aluno}', '{$falta}','{$presenca}')");
				if ($result) {
					header("Location:../view/cadastra_aluno_disciplina.php?aluno=sucesso");
				}else{
				header("Location:../view/cadastra_aluno_disciplina.php?aluno=error");
			}	
		}

		public function delete_aluno_disciplina($conn, $id){
		try {
			
		 
			
			$result = $conn-> exec("DELETE FROM frequencia WHERE id = '{$id}'");
			if($result){
				header("Location:../view/relatorio_aluno_disciplina.php?resut=$id");
			}
				
			
		}catch (Exception $e) {
			header("Location:../view/relatorio_aluno_disciplina.php?resut=error");
		}

	
	}	

}