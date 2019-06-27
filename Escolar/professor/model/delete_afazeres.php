<?php

$id= $_GET['id'];

require_once '../../model/conn.php';
require_once 'afazerDAO.php';

$afazerDAO = new afazerDAO();


$afazerDAO -> delete_afazeres($conn, $id);
?>