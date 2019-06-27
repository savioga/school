<?php  
$afazer= $_POST['afazer'];
$data= $_POST['data'];
$ministra= $_POST['id_ministra'];


echo $afazer.'<br>';
echo $data.'<br>';
echo $ministra.'<br>';


require_once '../../model/conn.php';
require_once '../controller/Afazeres.php';
require_once 'afazerDAO.php';
$Afazeres = new Afazeres();
$afazerDAO = new afazerDAO(); 

 
	
	$Afazeres -> setAfaser($afazer); 
	$Afazeres -> setId_ministra($ministra);
	$Afazeres -> setData($data);
	

	$afazerDAO -> inserir_afazer($conn, $afazer, $data, $Afazeres-> getId_ministrar());


?>