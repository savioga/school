<?php 
$id= $_POST['id']; 
$afazer= $_POST['afazer'];
$data= $_POST['data'];


echo $afazer.'<br>';
echo $data.'<br>';
echo $ministra.'<br>';


require_once '../../model/conn.php';
require_once '../controller/Afazeres.php';
require_once 'afazerDAO.php';
$Afazeres = new Afazeres();
$afazerDAO = new afazerDAO(); 

 
	
	$Afazeres -> setAfaser($afazer); 
	
	$Afazeres -> setData($data);
	

	$afazerDAO -> alterar_afazer($conn, $afazer, $data, $id);


?>