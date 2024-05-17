<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro Fornecedor</h2>
<form action="cadastro.php" method="POST">
            <label for="cidade">Cidade:</label>
            <input type="text" id="id_cidade" name="id_cidade" required>
            
            <label for="nome">Nome:</label>
            <input type="text" id="id_nome" name="id_nome" required>
            
            <label for="telefone">Telefone:</label>
            <input type="tel" id="id_contato" name="id_contato" required>
            
            <input type="submit" value="Cadastrar">
        </form>
</body>
</html>