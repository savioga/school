<?php

$id= $_GET['id'];
require_once 'conn.php';
require_once 'turmaDAO.php';

$turmaDAO = new turmaDAO();


$turmaDAO -> delete_turma($conn, $id);
?>