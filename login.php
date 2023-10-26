<?php
include_once("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="stylelogin.css"/>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<title>Formulário de login e inscrição</title>

<body>
<div class="container">
<div class="forms-container">
    
<div class="signin-signup">

<form action="autentificar.php" class="sign-in-form">
<h2 class="title">Entrar</h2>
<div class="input-field">
<i class="fas fa-user"></i>
<input type="text" placeholder="Nome"/>
</div>

<div class="input-field">
<i class="fas fa-lock"></i>
<input type="password" placeholder="Senha"/>
</div>
<input type="submit" value="Entrar" class="btn solid"/>
</form>

<form action="processar_inscricao.php" class="sign-up-form">
<h2 class="title">Inscrever-se</h2>

<div class="input-pair">
<div class="input-field">
<i class='bx bxs-user'></i>
<input type="text" placeholder="Nome"/>
</div>
  
<div class="input-field">
<i class='bx bxs-user'></i>
<input type="text" placeholder="Usuario"/>
</div>
</div>
  
<div class="input-pair">
<div class="input-field">
<i class='bx bxs-lock-alt'></i>
<input type="text" placeholder="Crie sua senha"/>
</div>
  
<div class="input-field">
<i class='bx bxs-phone' ></i>
<input type="tel" placeholder="Telefone"/>
</div>
</div>
  
<div class="input-pair">
<div class="input-field">
<i class='bx bxs-map'></i>
<input type="endereco" placeholder="Endereço"/>
</div>
  
<div class="input-field">
<i class='bx bxs-map'></i>
<input type="cep" placeholder="Cep"/>
</div>
</div>
  
<div class="input-pair">
<div class="input-field">
<i class='bx bxs-map'></i>
<input type="cidade" placeholder="Cidade"/>
</div>
  
<div class="input-field">
<i class='bx bxs-map'></i>
<input type="bairro" placeholder="Bairro"/>
</div>
</div>
        <input type="submit" class="btn" value="Inscreva-se"/>
</form>
</div>
</div>

<div class="panels-container">
<div class="panel left-panel">
<div class="content">
<h3>Novo(a) por aqui ?</h3>
<p>Faça seu cadastro em nosso site, e entre para o time tapetes da Fabi.</p>
<button class="btn transparent" id="sign-up-btn">Inscreva-se</button>

</div>

<img src="img/log.svg" class="image" alt=""/>
</div>
        
<div class="panel right-panel">
<div class="content">
<h3>Já é um de nós ?</h3>
<p>Ficamos felizes em ter você no nosso time!</p>
    
<button class="btn transparent" id="sign-in-btn">Entrar</button>
</div>
          
<img src="img/register.svg" class="image" alt=""/>
</div>
</div>
</div>

<script src="app.js"></script>
</body>
</html>
