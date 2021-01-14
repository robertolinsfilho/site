<?php

session_start();
$dentista = $_POST['dentista'];
$_SESSION['dentista'] = $dentista;

$_SESSION['dentista1'] = $dentista;
header('Location : index2.php');
?>
