<?php

$id= $_POST['id'];
$professor = $_POST['id_professor'];
$curso= $_POST['id_curso'];
$disciplina= $_POST['id_disciplina'];





require_once 'conn.php';
require_once '../controller/Ministracao.php';
require_once 'ministracaoDAO.php';
$cont = 0;
 $result = $conn -> query("SELECT * FROM ministra");
  while($row = $result->fetch(PDO::FETCH_OBJ)){
  	if (($row-> id_disciplina == $disciplina) && ($row-> id_curso==$curso) &&  ($row-> id_professor==$professor)) {
  		$cont++;
  	}
  }

if ($cont > 0) {
	header("Location:../view/relatorio_ministracoes.php?re=error");
}
if($cont==0){
	$ministra = new Ministra();
	$ministraDAO = new ministracaoDAO(); 

	 
		
		$ministra -> setId_professor($professor); 
		$ministra -> setId_curso($curso);
		$ministra -> setId_displina($disciplina);
		

		$ministraDAO -> update_ministracao($conn, $ministra -> getId_professor(), $ministra-> getId_curso(), $ministra-> getId_displina(), $id);
	
}