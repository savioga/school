<?php
	class turmaDAO
{
	public function delete_turma($conn, $id){
		try {
			
		$result = $conn-> exec("DELETE FROM turma WHERE id = '{$id}'");
		if($result){
			header("Location:../view/relatorio_turma.php?resut=$id");
		}
		} catch (Exception $e) {
			header("Location:../view/relatorio_turma.php?resut=error");
		}
	}

	public function alterar_turma($conn, $nome, $curso, $id){
		$result = $conn -> query("UPDATE turma SET 
								nome = '{$nome}',
								id_curso ='{$curso}'
								WHERE id = '{$id}'
								");
		if ($result) {
				header("Location:../view/relatorio_turma.php?r=$id");
		}else{
			header("Location:../view/relatorio_turma.php?r=error");
		}	
	
	}


	public function inserir_turma($conn, $nome, $curso){
	
		if($nome!=""){//exeuta uma série de instruções SQL
			$result = $conn->exec("INSERT INTO turma(nome, id_curso) VALUES ('{$nome}', '{$curso}')");
			if ($result) {
				header("Location:../view/cadastra_turma.php?res=sucesso");
			
		    }
		}else{
			header("Location:../view/cadastra_turma.php?resu=error");
		}	
	}    
}

?>