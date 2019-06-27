<?php


$id= $_POST['id'];
$nome= $_POST['nome'];

require_once 'conn.php';
require_once '../controller/Curso.php';
require_once 'cursorDAO.php';
$cont = 0;
 $result = $conn -> query("SELECT * FROM curso WHERE nome = '$nome'");
       while($row = $result->fetch(PDO::FETCH_OBJ)){
			if ($result) {
			     $cont++;
			}
		}
		if ($cont >= 0) {
			header("Location:../view/relatorio_curso.php?re=error");
		}
 
echo "$cont";
if ($cont == 0) {
	$curso = new Curso();
	$cursoDAO = new CursoDAO();

	$curso -> setNome($nome); 

$cursoDAO -> alterar_curso($conn, $curso->getNome(), $id);
}



?>