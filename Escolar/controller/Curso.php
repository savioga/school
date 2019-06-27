<?php  

class Curso{
	private $nome;

	public function setNome($nome, $conn){
		if (is_string($nome)) {
			  
		           	$this -> nome = $nome;
		 }
	}
	
	public function getNome(){
		return $this -> nome;
	}
}
?>