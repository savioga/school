<?php

$id= $_GET['id'];
require_once 'conn.php';
require_once 'disciplinaDAO.php';

$disciplinaDAO = new disciplinaDAO();


$disciplinaDAO -> delete_disciplina($conn, $id);
?>