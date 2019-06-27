
<?php
	class CursoDAO
{
  
	public function delete_curso($conn, $id){
		try {
			
		$result = $conn-> exec("DELETE FROM curso WHERE id = '{$id}'");
		if($result){
			header("Location:../view/relatorio_curso.php?resut=sucesso");
		}
		} catch (Exception $e) {
			header("Location:../view/relatorio_curso.php?resut=error");
		}
	}

	public function alterar_curso($conn, $nome, $id){
		$result = $conn -> query("UPDATE curso SET 
								nome = '{$nome}'
								WHERE id = '{$id}'
								");
		if ($result) {
				header("Location:../view/relatorio_curso.php?r=$id");
		}else{
			header("Location:../view/relatorio_curso.php?r=error");
		}	
	
	}

	public function inserir_curso($conn, $nome){
	
		if($nome!=""){//exeuta uma série de instruções SQL
			$result = $conn->exec("INSERT INTO curso(nome) VALUES ('{$nome}')");
			if ($result) {

				echo"<script>msg()</script>";
				echo"<script>funcao1()</script>";
				header("Location:../view/cadastra_curso.php?res=sucesso");
			}
		}else{
			header("Location:../view/cadastra_curso.php?resu=error");
		}
	}
}

?>