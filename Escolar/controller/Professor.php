<?php  
class Professor{
	private $nome;
	private $cpf;
	private $formacao;
	private $telefone;
	private $email;

	function getNome() {
    return $this->nome;
	}

	function getCpf() {
	    return $this->cpf;
	}

	function getFormacao() {
	    return $this->formacao;
	}

	function getTelefone() {
	    return $this->telefone;
	}

	function getEmail() {
	    return $this->email;
	}

	function setNome($nome) {
	    $this->nome = $nome;
	}

	function setCpf($cpf) {
	    $this->cpf = $cpf;
	}

	function setFormacao($formacao) {
	    $this->formacao = $formacao;
	}

	function setTelefone($telefone) {
	    $this->telefone = $telefone;
	}

	function setEmail($email) {
	    $this->email = $email;
	}
}
?>