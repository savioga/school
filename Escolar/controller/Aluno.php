<?php  
class Aluno{

	private $nome;
	private $matricula;
	private $id_curso;
	private $cpf;
	private $email;
	private $telefone;
	private $turma;


	function getNome() {
    return $this->nome;
	}
	function getTurma() {
    return $this->turma;
	}

	 function getMatricula() {
	    return $this->matricula;
	}

	 function getId_curso() {
	    return $this->id_curso;
	}

	 function getCpf() {
	    return $this->cpf;
	}

	 function getEmail() {
	    return $this->email;
	}

	 function getTelefone() {
	    return $this->telefone;
	}

	 function setNome($nome) {
	    $this->nome = $nome;
	}

	 function setMatricula($matricula) {
	    $this->matricula = $matricula;
	}

	 function setTurma($turma) {
	    $this->turma = $turma;
	}

	 function setId_curso($id_curso) {
	 	if($id_curso != 'Selecione Uma Opção'){
			   $this -> id_curso = $id_curso;
			}else{
				header("Location:../view/cadastra_aluno.php?res=error");
			}
	    
	}
 
	 function setCpf($cpf, $conn) {
	 	 	$this->cpf = $cpf;
	    
	}

	 function setEmail($email) {
	    $this->email = $email;
	}

	 function setTelefone($telefone) {
	    $this->telefone = $telefone;
	}


}