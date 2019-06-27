<?php

//$categoria = array();
//$categoria['nome'] = $_POST['nome'];

$nome = $_POST['nome'];
$curso= $_POST['id_curso'];

require_once 'conn.php';
require_once '../controller/Disciplina.php';
require_once 'disciplinaDAO.php';
$cont = 0;
 $result = $conn -> query("SELECT * FROM disciplina");
  while($row = $result->fetch(PDO::FETCH_OBJ)){
  	if (($row-> nome == $nome) && ($row-> id_curso==$curso)) {
  		$cont++;
  	}
  }

if ($cont > 0) {
	header("Location:../view/cadastra_disciplina.php?res=error");
}
if($cont == 0){
	$Disciplina = new Disciplina();
	$disciplinaDAO = new disciplinaDAO();

	$Disciplina -> setNome($nome); 
	$Disciplina -> setCurso($curso);

	$disciplinaDAO -> inserir_disciplina($conn, $Disciplina -> getNome(), $Disciplina-> getCurso());

}

?>