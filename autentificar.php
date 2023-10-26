<?php
include_once ('connect.php');

@session_start();
if (isset($_POST)) 
{
    $verifica1 = isset($_POST['name']) ? $_POST['name'] : '';
    $verifica2 = isset($_POST['senha']) ? $_POST['senha'] : '';
    

$Q = "SELECT * FROM usuarios WHERE login = '$verifica1' AND senha = '$verifica2'";
$result = mysqli_query($conn, $Q);
$usuario = mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0 AND mysqli_num_rows($result) < 2) {
    echo("<h1> Aqui </h1>");

   //header('Location: ./index.html');
    exit();

} else {
    echo("<h1> Aqui 2</h1>");

    echo ("<h1> usuário ou senha incorretos</h1>");
  //  header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
}
?>