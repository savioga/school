<?php
$mais=$_GET['menos'];
$id= $_GET['id'];
echo $id;
require_once '../../model/conn.php';
 $result = $conn -> query("SELECT id, id_ministra, falta FROM frequencia WHERE id='{$id}'");
 $row = $result->fetch(PDO::FETCH_OBJ);
 $faltas= $row-> falta;
 $faltas= $faltas - $mais;
 if ($faltas>=0) {
 	$result2 = $conn -> query("UPDATE frequencia SET falta='{$faltas}' WHERE id='{$id}'");
 	header("Location:../view/realiza_frequencia.php?id_curso=$row->id_ministra");
 }else{
 	header("Location:../view/realiza_frequencia.php?id_curso=$row->id_ministra");
 }
 
  ?>