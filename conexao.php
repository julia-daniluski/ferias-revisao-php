<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "ferias";

try {
    // Confere se as informações estão corretas
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve algum erro na conexão
    if ($conn->connect_error) {
        throw new Exception("Falha na conexão: " . $conn->connect_error);
    }
} catch (Exception $e) {
    // Exibe uma mensagem de erro amigável
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>