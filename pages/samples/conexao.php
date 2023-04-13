<?php
// Dados da conexão
$usuario = 'root'; // Nome do servidor
$senha = ''; // Usuário do banco de dados
$database = 'login'; // Senha do banco de dados
$host = 'localhost'; // Nome do banco de dados

// Cria a conexão com o banco de dados
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verifica se houve erro na conexão
if ($mysqli->connect_error) {
    die("Falha na conexão com o banco de dados: " . $mysqli->connect_error);
}
?>


