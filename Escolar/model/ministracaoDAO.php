<?php
	class ministracaoDAO{
	public function inserir_ministracao($conn,$id_professor, $id_curso, $id_disciplina ){
		
			//exeuta uma série de instruções SQL
				$result = $conn->exec("INSERT INTO ministra(id_professor, id_curso, id_disciplina) 
					VALUES ('$id_professor', '$id_curso', '$id_disciplina')");
				if ($result) {
					header("Location:../view/cadastra_ministracao.php?res=sucesso");
				
			    
				}else{
					header("Location:../view/cadastra_ministracao.php?resu=error");
				}	
	}   

	public function update_ministracao($conn, $professor, $curso, $disciplina, $id){
		$result = $conn -> query("UPDATE ministra SET id_curso = '$curso', id_disciplina = '$disciplina', id_professor = $professor WHERE id = '$id'");
		if ($result) {
				header("Location:../view/relatorio_ministracoes.php?r=$id");
		}else{
			header("Location:../view/relatorio_ministracoes.php?r=error");
		}	
	
	}
	public function delete_ministracao($conn, $id){
		try {
			
		$result = $conn-> exec("DELETE FROM ministra WHERE id = '{$id}'");
		if($result){
			header("Location:../view/relatorio_ministracoes.php?resut=$id");
		}
		} catch (Exception $e) {
			header("Location:../view/relatorio_ministracoes.php?resut=error");
		}
	}
}	 