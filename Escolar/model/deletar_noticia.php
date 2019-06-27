<?php  
	$id=$_GET['id'];
	require_once 'conn.php';
	
	$result = $conn-> exec("DELETE FROM noticias WHERE id = '{$id}'");
		if($result){
		header("Location:../view/relatorio_noticia.php?resu=$id");
		}
?>