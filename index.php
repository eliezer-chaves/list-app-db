<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Lista de Compras</title>
</head>
<body>
    <header>
        <h1>Minha Lista de Compras</h1>
    </header>
    
    <main>
        <form method="POST" action="php/insert_items.php">
            <input type="text" name="nome" placeholder="Nome do produto" required>
            <input type="number" name="quantidade" placeholder="Quantidade" required>
            <input type="text" name="valor" placeholder="Valor" required>
            <button type="submit">Adicionar Item</button>
        </form>

        <h2>Itens na Lista:</h2>
        <div id="itens-lista">
            <?php include "php/list_items.php";?>
        </div>
        
    </main>

    <script src="scripts/script.js"></script>
</body>
</html>
