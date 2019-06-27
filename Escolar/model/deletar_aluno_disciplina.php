<?php

$id= $_GET['id'];
require_once 'conn.php';
require_once 'aluno_disciplinaDAO.php';

$alunoDAO = new aluno_disciplinaDAO();


$alunoDAO -> delete_aluno_disciplina($conn, $id);
?>