<?php  
class Calculo{

	function calcular_media($id_fre, $conn){	
		$cont = 0;
		 $result = $conn -> query("SELECT id_ministra, nota1, nota2, nota3, nota4 FROM frequencia WHERE id ='$id_fre'");
		 $row = $result->fetch(PDO::FETCH_OBJ);
		if($row-> nota1!=""){
			$cont++;
			$nota1=$row-> nota1;
		}else{
			$nota1=0;
		}
		if($row-> nota2!=""){
			$cont++;
			$nota2=$row-> nota2;
		}else{
			$nota2=0;
		}
		if($row-> nota3!=""){
			$cont++;
			$nota3=$row-> nota3;
		}else{
			$nota3=0;
		}
		if($row-> nota4!=""){
			$cont++;
			$nota4=$row-> nota4;
		}else{
			$nota4=0;
		}
		$media=($nota1 + $nota2 + $nota3 + $nota4)/$cont;
		$result2 = $conn -> query("UPDATE frequencia SET media='$media' WHERE id= '$id_fre'");
		header("Location:../view/visualizar_boletins.php?id_curso=$row->id_ministra");
	}
}
?>