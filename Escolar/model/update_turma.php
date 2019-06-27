<?php

$id=$_POST['id'];
$nome = $_POST['nome'];
$curso= $_POST['id_curso'];

require_once 'conn.php';
require_once '../controller/turma.php';
require_once 'turmaDAO.php';
$cont = 0;
 $result = $conn -> query("SELECT * FROM turma");
  while($row = $result->fetch(PDO::FETCH_OBJ)){
  	if (($row-> nome == $nome) && ($row-> id_curso==$curso)) {
  		$cont++;
  	}
  }

if ($cont > 0) {
	header("Location:../view/relatorio_turma.php?re=error");
}

if ($cont == 0) {
	$turma = new turma();
	$turmaDAO = new turmaDAO();

	$turma -> setNome($nome); 
	$turma -> setCurso($curso);

	$turmaDAO -> alterar_turma($conn, $turma -> getNome(), $turma-> getCurso(), $id);

}

?>