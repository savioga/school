<?php

$id= $_GET['id'];
require_once 'conn.php';
require_once 'ministracaoDAO.php';

$ministraDAO = new ministracaoDAO(); 

$ministraDAO -> delete_ministracao($conn, $id);
?>