<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 97%;
            padding: 10px;
            margin-top: 7px;
            border: 1px solid #ccc;
            border-radius: 7px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: pink;
            color: black;
            padding: 15px;
            border: none;
            margin-top: 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: palevioletred;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="processar_cadastro_produto.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" rows="4" required></textarea>

        <label for="valor_venda">Preço:</label>
        <input type="number" name="valor_venda" id="valor_venda" step="0.01" required>

        <label for="qtd_estoque">Estoque:</label>
        <input type="number" name="qtd_estoque" id="qtd_estoque" required>

        <label for="foto">Imagem do Produto:</label>
        <input type="file" name="foto" id="foto" required>

        <input type="submit" value="Cadastrar Produto">
    </form>
</body>
</html>