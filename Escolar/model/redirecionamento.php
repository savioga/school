<?php  
session_start();
	$usuario =$_POST['nome'];
	$senha = $_POST['senha'];
	echo "$usuario".'<br>';
	echo "$senha";
	if ($usuario == 'admin' &&  $senha== '1234') {
		
		$_SESSION["nome"]= $usuario; 
        $_SESSION["senha"]= $senha;
		header("Location:../view/Pagina_inicial.php");
	}else{
		require_once 'conn.php';
		$cont = 0;
		$result = $conn -> query("SELECT id_professor,login, senha FROM usuario");
		while($row = $result->fetch(PDO::FETCH_OBJ)){
			if (($row-> login == $usuario) && ($row-> senha == $senha)) {
				$cont++;
				$_SESSION['id'] = $row-> id_professor;
				$_SESSION["nome"]= $usuario; 
		        $_SESSION["senha"]= $senha;
				header("Location:../professor/view/index.php");
			
			}
		}	
		if($cont == 0){
			$result2 = $conn -> query("SELECT id ,nome, matricula FROM aluno");
				while($row2 = $result2->fetch(PDO::FETCH_OBJ)){
					if (($row2-> matricula == $usuario) && ($row2-> matricula == $senha)) {
							
							$_SESSION['id'] = $row2-> id;
							$_SESSION["nome"]= $row2-> nome; 
					        $_SESSION["senha_aluno"]= $senha;
							header("Location:../aluno/view/index.php");
					}	
				}
		}	
    }
if(isset($_SESSION["nome"]) && isset($_SESSION["senha"]) ||isset($_SESSION["nome"]) && isset($_SESSION["senha_aluno"]) ){
  
}else{
	header("Location:../view/index.php?resu=error");
}
?>