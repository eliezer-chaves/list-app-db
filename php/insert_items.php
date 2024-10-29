<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];
    $total = $quantidade * $valor;

    $stmt = $pdo->prepare('INSERT INTO itens (nome, quantidade, valor, total) VALUES (?, ?, ?, ?)');
    $stmt->execute([$nome, $quantidade, $valor, $total]);
    
    header("Location: ../index.html"); // Redireciona de volta para a página inicial
}
?>
