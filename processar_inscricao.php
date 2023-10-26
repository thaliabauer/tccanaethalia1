<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["nome"];
    $usuario = $_POST["login"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    
    // Conecta-se ao banco de dados (substitua as informações do banco)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tcc";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    // Insere os dados na tabela (substitua o nome da tabela e os campos)
    $sql = "INSERT INTO usuarios (nome, usuario, senha, telefone, endereco, cep, cidade, bairro)
    VALUES ('$nome', '$login', '$senha', '$telefone', '$endereco', '$cep', '$cidade', '$bairro')";
    
    if ($conn->query($sql) === TRUE) {
        echo ("<h1>Inscrição realizada com sucesso!</h1>");
    
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>