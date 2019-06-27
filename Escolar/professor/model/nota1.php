<?php
	require_once '../../model/conn.php';
	require_once 'calcular_media.php';

	$nota1=$_GET['nota1'];
	$id = $_GET['id'];
	$id_ministra=$_GET['id_ministra'];

	if(is_numeric($nota1)){
		if ($nota1 >0 && $nota1<=10) {
			$result = $conn -> query("UPDATE frequencia SET 
								nota1 = '{$nota1}'
								WHERE id = '{$id}'
								");
			if ($result) {
					//header("Location:../view/visualizar_boletins.php?r=$id&nota1=$nota1&id_curso=$id_ministra");
					$calcular = new Calculo();
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