<?php

$id= $_GET['id'];
require_once 'conn.php';
require_once 'cursorDAO.php';

$alunoDAO = new CursoDAO();


$alunoDAO -> delete_curso($conn, $id);
?>