<?php

//$categoria = array();
//$categoria['nome'] = $_POST['nome'];

$nome = $_POST['nome'];
$curso= $_POST['id_curso'];

require_once 'conn.php';
require_once '../controller/Turma.php';
require_once 'turmaDAO.php';
$cont = 0;
 $result = $conn -> query("SELECT * FROM turma");
  while($row = $result->fetch(PDO::FETCH_OBJ)){
  	if (($row-> nome == $nome) && ($row-> id_curso==$curso)) {
  		$cont++;
  	}
  }

if ($cont > 0) {
	header("Location:../view/cadastra_turma.php?res=error");
}

if ($cont == 0) {
	$turma = new Turma();
$turmaDAO = new turmaDAO();

$turma -> setNome($nome); 
$turma -> setCurso($curso);

$turmaDAO -> inserir_turma($conn, $turma -> getNome(), $turma-> getCurso());

}




?>