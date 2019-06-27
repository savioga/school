<?php  
class Disciplina{
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
			if($curso != 'Selecione Uma Opção'){
			   $this -> curso = $curso;
			}else{
				header("Location:../view/cadastra_disciplina.php?res=error");
			}
	}
	public function getCurso(){
		return $this -> curso;
	}
}
?>