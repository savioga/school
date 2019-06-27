<?php
	class afazerDAO
{
	public function inserir_afazer($conn, $afazer, $data, $id_ministra){
	
		
			$result = $conn->exec("INSERT INTO afazeres(afazer, data, id_ministra) VALUES ('{$afazer}', '{$data}','{$id_ministra}')");
			if ($result) {
				header("Location:../view/afazeres.php?res=sucesso");
			
		    
			}else{
			header("Location:../view/afazeres.php?resu=error");
			
			} 
	}

	public function alterar_afazer($conn, $afazer, $data, $id){
		$result = $conn -> query("UPDATE afazeres SET 
								afazer = '{$afazer}',
								data ='{$data}'
								
								WHERE id = '{$id}'
								");
		if ($result) {
				header("Location:../view/relatorio_afazer.php?r=$id");
		}else{
			header("Location:../view/relatorio_afazer.php?r=error");
		}	
	
	}	


	public function delete_afazeres($conn, $id){
		try {
			
		$result = $conn-> exec("DELETE FROM afazeres WHERE id = '{$id}'");
		if($result){
			header("Location:../view/relatorio_afazer.php?resut=$id");
		}
		} catch (Exception $e) {
			header("Location:../view/relatorio_afazer.php?resut=error");
		}
	}	    
}