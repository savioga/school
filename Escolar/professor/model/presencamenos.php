<?php
$mais=$_GET['nemos'];
$id= $_GET['id'];
echo $id;
require_once '../../model/conn.php';
 $result = $conn -> query("SELECT id, id_ministra, presenca FROM frequencia WHERE id='{$id}'");
 $row = $result->fetch(PDO::FETCH_OBJ);
 $presenca= $row-> presenca;
 $presenca= $presenca - $mais;
 if($presenca >= 0){
	 $result2 = $conn -> query("UPDATE frequencia SET presenca='{$presenca}' WHERE id='{$id}'");
	 header("Location:../view/realiza_frequencia.php?id_curso=$row->id_ministra");
 }else{
 		header("Location:../view/realiza_frequencia.php?id_curso=$row->id_ministra");
 }
  ?>
