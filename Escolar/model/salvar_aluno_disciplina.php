<?php  
$curso= $_POST['id_curso'];
$turma= $_POST['id_turma'];
$ministra= $_POST['id_ministra'];
$aluno= $_POST['id_aluno'];

require_once 'conn.php';

require_once 'aluno_disciplinaDAO.php';	

$alunoDAO = new aluno_disciplinaDAO();
 $cont = 0;
 $result = $conn -> query("SELECT * FROM frequencia");
       while($row = $result->fetch(PDO::FETCH_OBJ)){
				if (($row-> id_aluno == $aluno) && ($row-> id_ministra == $ministra)) {
					 $cont++;
				
			    
			}
		}
		if ($cont >= 1) {
			header("Location:../view/cadastra_aluno_disciplina.php?aluno=error");
		}
 
		if ($cont == 0) {
					
					$falta =0;
					$presenca= 0;
					$alunoDAO -> inserir_aluno_disciplina($conn, $curso, $turma, $ministra, $aluno, $falta, $presenca );
				
		}		

?>