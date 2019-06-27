<?php
	class disciplinaDAO
{
	public function delete_disciplina($conn, $id){
		try {
			
		$result = $conn-> exec("DELETE FROM disciplina WHERE id = '{$id}'");
		if($result){
			header("Location:../view/relatorio_disciplina.php?resut=$id");
		}
		} catch (Exception $e) {
			header("Location:../view/relatorio_disciplina.php?resut=error");
		}
	}

	public function alterar_disciplina($conn, $nome, $curso, $id){
		$result = $conn -> query("UPDATE disciplina SET 
								nome = '{$nome}',
								id_curso ='{$curso}'
								WHERE id = '{$id}'
								");
		if ($result) {
				header("Location:../view/relatorio_disciplina.php?r=$id");
		}else{
			header("Location:../view/relatorio_disciplina.php?r=error");
		}	
	
	}


	public function inserir_disciplina($conn, $nome, $curso){
	
		if($nome!=""){//exeuta uma série de instruções SQL
			$result = $conn->exec("INSERT INTO disciplina(nome, id_curso) VALUES ('{$nome}', '{$curso}')");
			if ($result) {
				header("Location:../view/cadastra_disciplina.php?res=sucesso");
			
		    }
		}else{
			header("Location:../view/cadastra_disciplina.php?resu=error");
		}	
	}    
}

?>