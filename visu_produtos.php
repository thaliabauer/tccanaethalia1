<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Carrinho de Compras</title>
</head>

<body>
<div align="center">
<?php
include_once('connect.php');

// Conecte-se ao banco de dados usando mysqli
$conn = mysqli_connect('localhost', 'root', '', 'tcc');

// Verifique a conexão
if (mysqli_connect_errno()) {
    die("Erro na conexão do banco de dados: " . mysqli_connect_error());
}
?>
<table cellSpacing=1 cellPadding=0 width="50%" align=center border=0>
<tr>
<td>
     <?php

        $sql = "SELECT * FROM produtos ORDER BY RAND()";
        GeraColunas(2, $sql);
    ?>
</td>
</tr>
</table>
<?php
function GeraColunas($pNumColunas, $pQuery) {
    global $conn; // Usar a conexão global aqui

    $resultado = mysqli_query($conn, $pQuery); // CÁLCULA O NÚMERO DE REQUISIÇÕES (pelo que eu entendi ;-;)
    echo ("<table width='100%' border='0'>\n");
    for ($i = 0; $i <= mysqli_num_rows($resultado); ++$i) {

        for ($intCont = 0; $intCont < $pNumColunas; $intCont++) { // CÁLCULA O NÚMERO DE COLUNAS do Banco de Dados
            $linha = mysqli_fetch_array($resultado);
            if ($i > $linha) {
                if ($intCont < $pNumColunas - 1) echo "</tr>\n";
                break;
            }

            $cod = $linha[0]; // ARMAZENA O VALOR DA PRIMEIRA COLUNA (código = id) 
            $nome = $linha[1]; // ARMAZENA O VALOR DA SEGUNDA COLUNA (nome)
            $img = $linha[5]; // ARMAZENA O VALOR DA TERCEIRA COLUNA (nome da imagem) 
            $preco = number_format($linha[4], 2, ",", "."); // ARMAZENA O PREÇO DO PRODUTO

            if ($intCont == 0) echo "<tr>\n";
            echo "<td>";
            echo "<table width='266' border='0' cellspacing='0' cellpadding='0'>";
            echo "<tr>";
            echo "<td width='250' height='141' valign='middle'><div align='center'><img src='img/" . $img . "' border='0' width='189' height='141' /></div></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<table width='92%' border='0' align='center' cellpadding='0' cellspacing='0'>";
            echo "<tr>";
            echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><strong><a href='carrinho.php?cod=" . $cod . "&acao=incluir'>" . $nome . "</a></strong></div><strong><div align='center'><font color='#FF0000' size='4px'> R$ " . $preco . " </font></strong></div></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><a href='carrinho.php?cod=" . $cod . "&acao=incluir'><img src='img/add_carrinho.jpg' border='0'/></a></div><br></td>";
            echo "</tr>";
            echo "</table>";
            echo "</td>";
            echo "</tr>";
            echo "</table>";

            // Aqui é o final do conteúdo
            echo "</td>";

            if ($intCont == $pNumColunas - 1) {
                echo "</tr>\n";
            } else {
                $i++;
            }
        }
    }
}
echo ('</table>');

?>
</div>
</body>
</html>