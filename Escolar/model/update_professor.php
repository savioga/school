<?php

//$categoria = array();
//$categoria['nome'] = $_POST['nome'];
$id =$_POST['id'];
$nome = $_POST['nome'];
$cpf= $_POST['cpf'];
$formacao= $_POST['formacao'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];



require_once 'conn.php';
require_once '../controller/Professor.php';
require_once 'professorDAO.php';
$cont = 0;
 $result = $conn -> query("SELECT * FROM professor WHERE cpf = '$cpf'");
       while($row6 = $result->fetch(PDO::FETCH_OBJ)){
			if ($row6 -> cpf == $cpf){
			     $cont++;
			}
		}
		if ($cont >= 0) {
			header("Location:../view/relatorio_professor.php?re=error");
		}
 
echo "$cont";
	if ($cont == 0) {
	$professor = new Professor();
	$professorDAO = new professorDAO();

	$professor -> setNome($nome); 
	$professor -> setCpf($cpf);
	$professor -> setFormacao($formacao);
	$professor -> setTelefone($telefone);
	$professor -> setEmail($email);


	$professorDAO -> alterar_professor($conn, $professor -> getNome(), $professor-> getCpf(), $professor-> getFormacao(), $professor-> getEmail(), $professor-> getTelefone(), $id);

}

?> 