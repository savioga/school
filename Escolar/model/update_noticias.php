<?php  
	require_once '../model/conn.php';

$professor =0;
$aluno=0;

$noticia= $_POST['noticia'];
$data= $_POST['data'];
$id= $_POST['id'];
echo "$data";
echo "$noticia";
if(isset($_POST['professor'])){
$professor2= $_POST['professor'];
$professor=1;

}


if(isset($_POST['aluno'])){
	$aluno2= $_POST['aluno'];
	$aluno=1;
	
}

	
	$result = $conn-> exec("UPDATE noticias SET noticias='{$noticia}', data='{$data}', professor='{$professor}', aluno='{$aluno}' WHERE id = '{$id}'");
		if($result){
		header("Location:../view/relatorio_noticia.php?res=$id");
		}
?>