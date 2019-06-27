<?php
require_once 'conn.php';
//$categoria = array();
//$categoria['nome'] = $_POST['nome'];

$professor = $_POST['id_professor'];
$curso= $_POST['id_curso'];
$disciplina= $_POST['id_disciplina'];

$cont = 0;
 $result = $conn -> query("SELECT * FROM ministra");
  while($row = $result->fetch(PDO::FETCH_OBJ)){
  	if (($row-> id_disciplina == $disciplina) && ($row-> id_curso==$curso) &&  ($row-> id_professor==$professor)) {
  		$cont++;
  	}
  }

if ($cont > 0) {
	header("Location:../view/cadastra_ministracao.php?res=error");
}
if($cont==0){
	
	require_once '../controller/Ministracao.php';
	require_once 'ministracaoDAO.php';

	$ministra = new Ministra();
	$ministraDAO = new ministracaoDAO(); 

	 
	$ministra -> setId_professor($professor); 
	$ministra -> setId_curso($curso);
	$ministra -> setId_displina($disciplina);
		

	$ministraDAO -> inserir_ministracao($conn, $ministra -> getId_professor(), $ministra-> getId_curso(), $ministra-> getId_displina());
}	
