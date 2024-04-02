<?php

if (isset($_POST['submit'])) {

    include_once('mapaconfig.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, assunto, mensagem) 
    VALUES ('$nome', '$email', '$assunto', '$mensagem')");

    header("Location: index.html");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="img/png" href="img/mapa.ico" class="logotipo">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos-map.css" type="text/css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">

    <title> Mapa </title>
</head>

<body
    style="background-image: url(../ProtecaoTerritorial/img/aerial-picture-river-surrounded-by-islands-covered-greenery-sunlight.jpg);">
    <div class="d-flex flex-column wrapper">

        <!--Abertura da navegação com bootstrap-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="img/Proteção.png" class="img-fluid logo" alt="Live Aldeia Map"
                    style="width: 170px; height: auto;"> <!-- Adicionei o estilo inline -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                    <form class="d-flex" role="search"
                        action="https://www.google.com/maps/@-7.8475804,-53.5728367,2268m/data=!3m1!1e3?entry=ttu"
                        method="GET" target="_blank">
                        <input class="form-control me-2" type="search" name="q" placeholder="Denúncias"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>

                </div>
            </div>
        </nav>
    </div>

    <main class="container">
        <div class="text-center">
            <h2>Informe o que está acontecendo nos territórios indígenas</h2>
            <h3>Clique em "Ver Mapa Ampliado" e, em seguida, clique
                no local desejado com o botão esquerdo do mouse para obter as coordenadas. Cole as coordenadas no
                formulário ao lado.</h3>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127486.9795008192!2d-59.994931199999996!3d-3.1031296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1705493597548!5m2!1spt-BR!2sbr">
            </iframe>
        </div>

        <div class="container">
            <div class="row justify-content-center py-2">
                <form class="col-sm-10 col-md-8 col-lg-6" id="contact-form" action="mapa.php" method="POST">

                    <h1 id="texto-div-form">Denúncia Anônima</h1>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                        <label for="nome" class="form-label">Nome</label>

                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                        <label for="email" class="form-label">E-mail</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto"
                            required>
                        <label for="assunto" class="form-label">Assunto</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="mensagem" rows="5" placeholder="Mensagem" required
                            style="height: 200px;" name="mensagem"></textarea>
                        <label for="email">Mensagem</label>

                    </div>

                    <input type="submit" name="submit" id="submit">

            </div>
        </div>

    </main>

    <footer class="border-top text-muted bg-light">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-md-4 text-center">
                    &copy; Copyright 2023 - Todos direitos reservados.<br>

                </div>
                <div class="col-12 col-md-4 text-center">
                    <a href="#" class="text-decoration-none">
                        Voltar ao topo
                    </a><br>
                    <a href="contato.html" class="text-decoration-none">
                        Fale conosco
                    </a><br>
                    <a href="mapa.html" class="text-decoration-none">
                        Proteção dos Povos
                    </a><br>
                </div>

                <div class="col-12 col-md-4 text-center">
                    <ul class="navbar icones">
                        <li><a href="https://github.com/" class="text-hide"> GitHub</a></li>
                        <li><a href="https://br.linkedin.com/" class="text-hide"> Linkedin</a></li>
                        <li><a href="https://www.facebook.com/" class="text-hide"> Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="javascript/scripts.js"></script>
</body>

</html>