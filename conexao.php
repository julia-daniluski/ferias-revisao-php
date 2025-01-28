<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ferias";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Aqui você pode adicionar qualquer outra operação que precise ser realizada no banco de dados

$conn->close();
?>

