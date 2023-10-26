<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>

    <?php
    // Conecte-se ao banco de dados (substitua com suas próprias informações de conexão)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tcc";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verifique se o ID do produto foi passado pela URL
    if (isset($_GET["id_produtos"])) {
        $id = $_GET["id_produtos"];
        $sql = "SELECT * FROM produtos WHERE id = $id";
        $result = $conn->query($sql);

        if ($result !== false && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h2>{$row['nome']}</h2>";
                echo "<p>Descrição: {$row['descricao']}</p>";
                echo "<p>Preço: R$ {$row['valor_venda']}</p>";
                echo "<p>Estoque: {$row['qtd_estoque']} unidades</p>";
                echo "<img src='img/{$row['foto']}' alt='{$row['nome']}' />";
            }
        } else {
            echo "Produto não encontrado.";
        }
    } else {
        echo "ID do produto não especificado na URL.";
    }

    // Feche a conexão com o banco de dados
    $conn->close();
    ?>

    <p><a href="index.html">Voltar à página inicial</a></p>
</body>
</html>
