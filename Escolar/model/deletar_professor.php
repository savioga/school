<?php

$id= $_GET['id'];
require_once 'conn.php';
require_once 'professorDAO.php';

$professorDAO = new professorDAO();


$professorDAO -> delete_professor($conn, $id);
?>