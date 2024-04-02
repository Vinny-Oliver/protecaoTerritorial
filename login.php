<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos-login.css" type="text/css">
    <link rel="icon" type="image/png" href="img/mapa.ico" class="logotipo">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <link rel="stylesheet" href="css/estilos-login.css" type="text/css">
    <title>Login</title>

</head>

<body>
    <div class="d-flex flex-column wrapper">

        <!--Abertura da navegação com bootstrap-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
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
                        method="GET">
                        <input class="form-control me-2" type="search" name="q" placeholder="Mapa" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>

                </div>
            </div>
        </nav>
    </div>

    <div class="main-login">
        <div class="left-login">
            <h1>Faça seu login <br> entre para o nosso time</h1>
            <img src="img-capa.svg" alt="pessoas" class="left-login-img">
        </div>
        <form action="testloginCopy.php" method="POST"> <!--Aqui redireciona para teste -->
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>

                    <div class="text-field">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" placeholder="E-mail" required>
                    </div>

                    <div class="text-field">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="senha" placeholder="Senha" required>
                    </div>

                <button type="submit" class="btn-login" name="submit" id="submit">Login</button>
                
                <p>Continuar sem uma conta: </p>
                <a href="index.html">clique aqui</a>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="javascript/scripts.js"></script>
</body>

</html>