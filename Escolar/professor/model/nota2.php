<?php
	require_once '../../model/conn.php';
	require_once 'calcular_media.php';
	$nota2=$_GET['nota2'];
	$id = $_GET['id'];
	$id_ministra=$_GET['id_ministra'];

	if(is_numeric($nota2)){
		if ($nota2 >0 && $nota2<=10) {
			$result = $conn -> query("UPDATE frequencia SET 
								nota2 = '{$nota2}'
								WHERE id = '{$id}'
								");
			if ($result) {
					//header("Location:../view/visualizar_boletins.php?r=$id&nota2=$nota2&id_curso=$id_ministra");
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