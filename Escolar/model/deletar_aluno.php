<?php

$id= $_GET['id'];
echo "$id 123123123";
require_once 'conn.php';
require_once 'alunoDAO.php';

$alunoDAO = new alunoDAO();


$alunoDAO -> delete_aluno($conn, $id);
?>