<?php
session_start();
header('Location: login.php?email='.$_SESSION['emailplataforma'].'&plano='.$_SESSION['plano1'].'&cpf='.$_SESSION['cpf1']);
?>