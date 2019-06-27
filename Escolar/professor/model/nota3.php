<?php
	require_once '../../model/conn.php';
	require_once 'calcular_media.php';
	$nota3=$_GET['nota3'];
	$id = $_GET['id'];
	$id_ministra=$_GET['id_ministra'];

	if(is_numeric($nota3)){
		if ($nota3 >0 && $nota3<=10) {
			$result = $conn -> query("UPDATE frequencia SET 
								nota3 = '{$nota3}'
								WHERE id = '{$id}'
								");
			if ($result) {
					//header("Location:../view/visualizar_boletins.php?r=$id&nota3=$nota3&id_curso=$id_ministra");
					$calcular= new Calculo();
					$calcular->calcular_media($id, $conn);
			}else{
				header("Location:../view/visualizar_boletins.php?rrr=error");
			}	
		}else{
			header("Location:../view/visualizar_boletins.php?rer=error");
		}
	}else{
		header("Location:../view/visualizar_boletins.php?er=error");
	}


	echo $id.'<br>';
	echo $nota1.'<br>';

?>