<?php
require_once '../model/conn.php';
$professor =0;
$aluno=0;

$noticia= $_POST['noticia'];
$data= $_POST['data'];
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

echo $aluno.'<br>';
  echo 'professor: '. $professor;

  $result = $conn->exec("INSERT INTO noticias(noticias, data, professor, aluno) VALUES ('{$noticia}', '{$data}', '{$professor}', '{$aluno}')");
  if ($result) {
  	header("Location:../view/cadastra_noticias.php?res=sucesso");
  }




  
  
  
  
  