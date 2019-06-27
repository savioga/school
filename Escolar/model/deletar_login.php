<?php

$id= $_GET['id'];
require_once 'conn.php';
require_once 'loginDAO.php';

$loginDAO = new loginDAO();


$loginDAO -> delete_login($conn, $id);
?>