<?php

// Configurações de acesso ao banco de dados
$host = 'localhost';
$user = 'usuario';
$pass = 'senha';
$db = 'nomedobanco';

// Conexão com o banco de dados
$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection) {
    die('Não foi possível conectar ao banco de dados: ' . mysqli_connect_error());
}
