<?php

$dbHost = 'LocalHost';
$dbUsername = 'coelho';
$dbPassword = '#Maguci02';
$dbName = 'formulario_gustavo';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro ao conectar ao banco de dados";
} else {
    echo "Conectado ao banco de dados";
};
