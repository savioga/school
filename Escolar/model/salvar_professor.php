<?php

//$categoria = array();
//$categoria['nome'] = $_POST['nome'];

$nome = $_POST['nome'];
$cpf= $_POST['cpf'];
$formacao= $_POST['formacao'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];




require_once 'conn.php';
require_once '../controller/Professor.php';
require_once 'professorDAO.php';
$professor = new Professor();
$professorDAO = new professorDAO(); 

$cont = 0;
 $result = $conn -> query("SELECT * FROM professor WHERE cpf = '$cpf'");
       while($row6 = $result->fetch(PDO::FETCH_OBJ)){
			if ($row6 -> cpf == $cpf){
			     $cont++;
			}
		}
		if ($cont >= 0) {
			header("Location:../view/cadastra_professor.php?cpf=error");
		}
 
echo "$cont";
if ($cont == 0) {
	
	$professor -> setNome($nome); 
	$professor -> setCpf($cpf);
	$professor -> setFormacao($formacao);
	$professor -> setTelefone($telefone);
	$professor -> setEmail($email);


	$professorDAO -> inserir_professor($conn, $professor -> getNome(), $professor-> getCpf(), $professor-> getFormacao(), $professor-> getEmail(), $professor-> getTelefone());
	$result2 = $conn -> query("SELECT id FROM professor WHERE cpf = '{$cpf}'");
	$row = $result2->fetch(PDO::FETCH_OBJ);
	$id = $row-> id;
	echo "$id";
	include 'loginDAO.php';
	$login = new loginDAO();
	$login -> cadastra_usuario($conn, $nome, $cpf, $id);
	
}






?> 