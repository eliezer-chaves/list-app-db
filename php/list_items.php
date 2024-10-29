<?php
include 'connect.php';

echo "Tentando listar os itens...<br>"; // Debug

try {
    $stmt = $pdo->query('SELECT * FROM itens');
    $itens = $stmt->fetchAll();
    
    if ($itens) {
        foreach ($itens as $item) {
            echo "Nome: " . htmlspecialchars($item['nome']) . "<br>";
            echo "Quantidade: " . htmlspecialchars($item['quantidade']) . "<br>";
            echo "Valor: R$" . htmlspecialchars($item['valor']) . "<br>";
            echo "Total: R$" . htmlspecialchars($item['total']) . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum item encontrado.";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
