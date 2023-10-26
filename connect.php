<?php
$conn = mysqli_connect('localhost','root','','tcc');
if(mysqli_connect_errno()){
    echo "Erro na conexão do banco de dados: " . mysqli_connect_error();
}
?>