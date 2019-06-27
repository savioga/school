<?php  
class Ministra{

	private $id_curso;
	private $id_professor;
	private $id_displina;

		function getId_curso() {
            return $this->id_curso;
        }

        function getId_professor() {
            return $this->id_professor;
        }

        function getId_displina() {
            return $this->id_displina;
        }

        function setId_curso($id_curso) {
            $this->id_curso = $id_curso;
        }

        function setId_professor($id_professor) {
            $this->id_professor = $id_professor;
        }

        function setId_displina($id_displina) {
            $this->id_displina = $id_displina;
        }
}