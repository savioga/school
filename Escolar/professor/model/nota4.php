<?php
	require_once '../../model/conn.php';
	require_once 'calcular_media.php';
	$nota4=$_GET['nota4'];
	$id = $_GET['id'];
	$id_ministra=$_GET['id_ministra'];

	if(is_numeric($nota4)){
		if ($nota4 >0 && $nota4<=10) {
			$result = $conn -> query("UPDATE frequencia SET 
								nota4 = '{$nota4}'
								WHERE id = '{$id}'
								");
			if ($result) {
					//header("Location:../view/visualizar_boletins.php?r=$id&nota4=$nota4&id_curso=$id_ministra");
					$calcular= new Calculo();
					$calcular->calcular_media($id, $conn);
			}else{
				header("Location:../view/visualizar_boletins.php?r=error");
			}	
		}else{
			header("Location:../view/visualizar_boletins.php?er=error");
		}
	}else{
		header("Location:../view/visualizar_boletins.php?er=error");
	}


	echo $id.'<br>';
	echo $nota1.'<br>';

?>