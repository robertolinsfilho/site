<?php
define('HOST', 'mysql.unidentis.com.br');
define('USUARIO', 'unidentis');
define('SENHA', 'prBmx24T2');
define('DB', 'unidentis');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi  possível conectar');
