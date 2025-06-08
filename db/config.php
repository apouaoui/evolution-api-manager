<?php

// Detalhes da conexão ao banco de dados
$servername = "127.0.0.1"; // força uso de TCP
$username = "arthurp_evolution_api_manager";
$password = "Password@01";
$dbname = "arthurp_evolution_api_manager";

// Opções de PDO (opcional)
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    // Criar conexão PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $options);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Exibir mensagem de erro
    echo "Falha na conexão: " . $e->getMessage();
    die();
}
?>