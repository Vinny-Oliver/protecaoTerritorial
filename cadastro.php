<?php

if (isset($_POST['submit'])) {

    include_once('config.php'); // Aqui inclui a conexao ao banco de dados

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = date('Y-m-d', strtotime($_POST['data_nascimento']));
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) 
    VALUES ('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");

    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo.ico" class="logotipo">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <link rel="stylesheet" href="css/cadastro.css" type="text/css">

    <title>Cadastro</title>

    <style>
        body {
            background-image: url('../ProtecaoTerritorial/img/Acesso.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* Para manter a imagem fixa enquanto a página rola */
            width: 100%;
            margin: 0 auto;
            /* Isso centraliza o conteúdo horizontalmente */
            transform-origin: top;
        }
    </style>

</head>

<body>
    <div class="d-flex flex-column wrapper">

        <!--Abertura da navegação com bootstrap-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="img/Proteção.png" class="img-fluid logo" alt="Live Aldeia Map" style="width: 170px; height: auto;"> <!-- Adicionei o estilo inline -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.html" style="font-size: 20px;">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mapa.php" style="font-size: 20px;">Mapa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contato.php" style="font-size: 20px;">Fale Conosco</a>
                        </li>
                        <li class="nav-item">
                            <a href="cadastro.php" class="nav-link text-white" style="font-size: 20px;">Cadastre-se</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link text-white" style="font-size: 20px;">Entrar</a>
                        </li>
                    </ul>

                    <!--Mapa de denúncias-->
                    <form class="d-flex" role="search" action="https://www.google.com/maps/@-7.8475804,-53.5728367,2268m/data=!3m1!1e3?entry=ttu" method="GET">
                        <input class="form-control me-2" type="search" name="q" placeholder="Mapa" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>

                </div>
            </div>
        </nav>
    </div>

    <div id="cadastro-header">
        <p>Cadastre-se no nosso site e você receberá todo o conteúdo a respeito da proteção de povos indígenas!</p>
        <p>Fique por dentro de tudo que está ocorrendo nas aldeias.</p>
        <p>Já tem uma conta? <a href="login.php">Faça login aqui</a></p>
    </div>

    <div class="box">
        <form action="cadastro.php" method="post">
            <fieldset>
                <legend><b>Cadastro de Clientes</b></legend> <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>