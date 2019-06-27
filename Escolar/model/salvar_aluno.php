<?php

//$categoria = array();
//$categoria['nome'] = $_POST['nome'];

$nome = $_POST['nome'];
$turma= $_POST['id_turma'];
$matricula= $_POST['matricula'];
$id_curso= $_POST['id_curso'];
$cpf= $_POST['cpf'];
$email=$_POST['email'];
$telefone= $_POST['telefone'];




require_once 'conn.php';
require_once '../controller/Aluno.php';
require_once 'alunoDAO.php';	
$aluno = new Aluno();
$alunoDAO = new alunoDAO();
 
$cont = 0;
$contM = 0;
 $result = $conn -> query("SELECT * FROM aluno");
       while($row = $result->fetch(PDO::FETCH_OBJ)){
			if ($row-> cpf == $cpf) {
			     $cont++;
			}
		}
		if ($cont >= 1) {
			header("Location:../view/cadastra_aluno.php?cpf=error");
		}
 
		if ($cont == 0) {
			$result = $conn -> query("SELECT * FROM aluno");
			while($row = $result->fetch(PDO::FETCH_OBJ)){
					if ($row-> matricula==$matricula) {
					     $contM++;
					}
				}
				if ($contM > 0) {
					header("Location:../view/cadastra_aluno.php?matri=error");
				}
				if($contM == 0){
					$aluno -> setNome($nome); 
					$aluno -> setMatricula($matricula);
					$aluno -> setId_curso($id_curso);
					$aluno -> setCpf($cpf, $conn);
					$aluno -> setEmail($email);
					$aluno -> setTelefone($telefone);
					$aluno -> setTurma($turma);


					$alunoDAO -> inserir_aluno($conn, $aluno -> getNome(), $aluno-> getMatricula(), $aluno-> getId_curso(), $aluno-> getCpf(), $aluno-> getEmail(), $aluno-> getTelefone(), $aluno-> getTurma());
				}
		}		
  


?> 