<?php  
class Turma{
	private $nome;
	private $curso;

	public function setNome($nome){
		if (is_string($nome)) {
			$this -> nome = $nome;
		}else{
			echo "verifique o nome";
		}
	}
	public function getNome(){
		return $this -> nome;
	}

	public function setCurso($curso){
			
			   $this -> curso = $curso;
		
	}
	public function getCurso(){
		return $this -> curso;
	}
}
?>