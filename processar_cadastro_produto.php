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

// Recupere os dados do formulário
$nome = isset($_POST["nome"]) ? $_POST["nome"] : null;
$descricao = isset($_POST["descricao"]) ? $_POST["descricao"] : null;
$preco = isset($_POST["valor_venda"]) ? $_POST["valor_venda"] : null;
$estoque = isset($_POST["qtd_estoque"]) ? $_POST["qtd_estoque"] : null;

// Verifique se o campo de arquivo foi enviado corretamente
if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === UPLOAD_ERR_OK) {
    $nome_arquivo = $_FILES["foto"]["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"], "img/$nome_arquivo");
} else {
    echo "Erro no upload da imagem: " . $_FILES["foto"]["error"];
    exit; // Aborta o processo de inserção no banco de dados
}

// Insira os dados na tabela do banco de dados
$sql = "INSERT INTO produtos (nome, descricao, valor_venda, qtd_estoque, foto) VALUES ('$nome', '$descricao', $preco, $estoque, '$nome_arquivo')";

if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o produto: " . $conn->error;
}

// Feche a conexão com o banco de dados
$conn->close();
?>
