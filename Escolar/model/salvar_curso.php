<?php

//$categoria = array();
//$categoria['nome'] = $_POST['nome'];

$nome= $_POST['nome'];
require_once 'conn.php';
require_once '../controller/Curso.php';
require_once 'cursorDAO.php';


$curso = new Curso();
$cursoDAO = new CursoDAO();
$cont = 0;
 $result = $conn -> query("SELECT * FROM curso WHERE nome = '$nome'");
       while($row = $result->fetch(PDO::FETCH_OBJ)){
			if ($result) {
			     $cont++;
			}
		}
		if ($cont >= 0) {
			header("Location:../view/cadastra_curso.php?resu=error");
		}
 
echo "$cont";
if ($cont == 0) {
	$curso -> setNome($nome); 
	$cursoDAO -> inserir_curso($conn, $curso->getNome());
	
}






?>