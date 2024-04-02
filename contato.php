<?php

if (isset($_POST['submit'])) {

    include_once('configcontato.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, assunto, mensagem) 
    VALUES ('$nome', '$email', '$assunto', '$mensagem')");

    header("Location: mapa.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="img/png" href="img/logo.ico" class="logotipo">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos-contato.css" type="text/css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">

    <title>Fale conosco</title>

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

    <main class="flex-fill">
        <section class="bg-light py-5" id="quemsomos">
            <div class="container">
                <h2 class="text-center">
                    Antes de mandar uma mensagem, que tal nos conhecer um pouco? Saiba nossas historias:
                </h2>
                <p class="text-center">Eu vou conhecer, mas quero enviar logo uma mensagem para vocês.<a href="#nao">
                        clique aqui</a></p>

            </div>
        </section>
        <section class="py-5" id="quemsomos">
            <div class="container">
                <h2 class="text-center">
                    Quem somos nós?
                </h2>
                <p>Somos indígenas de diversas etnias e de todo o Brasil, e estamos participando do projeto da
                    Recode
                    Pro Aldeia, que formará indígenas desenvolvedores Full-Stack, para promover uma mudança não só
                    nas
                    nossas vidas como todo meio em que vivemos, da aldeia aos que indígenas que moram na cidade.
                </p>
            </div>
        </section>
        <section class="bg-light py-5">
            <div class="container">
                <h2 class="text-center ">
                    Sobre nós
                </h2>
                <p class="text-center">Ao todo somos uma equipe com 4 desenvolvedores, conheça cada um de nós</p>
            </div>
            <section class="container"><!--inicio equipe-->
                <h2 class="text-center mt-3 mb-3">
                    Equipe Desenvolvedores de Front End
                </h2>
                <br>
                <div class="container-fluid collum text-center rounded"><!--início linha-->
                    <!-- início media-->
                    <img src="img/WhatsApp Image 2023-11-09 at 12.44.01.jpeg" class=" img-fluid img-thumbnail mx-auto d-block img-contato">
                    <h3 class="h5">
                        JAQUELINE GOMES DE MOURA
                    </h3>
                    <article class="mb-3">
                        Meu nome no idioma é kunã, sou ativista e comunicadora Indígena. Atualmente sou
                        representando da juventude Kambiwá, faço parte dos grupos:
                        Samba de coco Flor de caroá, associações de Jovens e Mulheres da Aldeia Nazário,
                        grupo
                        de artesãos,
                        grupo frutos da resistência, dentre demais atividades desenvolvidas no Povo e demais
                        localidades.
                        Sou universitária, estudante de ENG. Agronômica na Universidade Federal do Agreste
                        de
                        Pernambuco (UFAPE)

                    </article>
                </div><!--fim media-->

                <div class="container-fluid collum text-center rounded"><!--início linha-->
                    <!-- início media-->
                    <img src="img/WhatsApp Image 2023-11-09 at 12.42.17.jpeg" class=" img-fluid img-thumbnail mx-auto d-block img-contato">
                    <h3 class="h5">
                        Fernando Henrique da Silva
                        (Indígena Pankarà)
                    </h3>
                    <article class="mb-3">
                        Professor Indígena da Escola Estadual Indígena Sagrada Família
                        Coordenador , JUVENTUDE INDÍGENA PANKARÁ (JUIPAN)
                        Conselheiro local de saúde indígena pankará (cispan )
                        Formação: Tec. Em farmácia. Graduado em Licenciatura em Química, IFSertãoPE Campus
                        Floresta.
                        Cursando especialização em Metodologia do ensino de biologia e química.
                        Pelo Instituição IPERMING.

                    </article>
                </div><!--fim media-->

                <div class="container-fluid collum text-center rounded"><!--início linha-->
                    <!-- início media-->
                    <img src="./img/guii.jpeg" class=" img-fluid img-thumbnail mx-auto d-block img-contato">
                    <h3 class="h5">
                        João Guilherme Barbosa da Silva
                    </h3>
                    <article class="mb-3">
                        Sou da etnia Baré, nasci em São Gabriel da Cachoeira, vim para Manaus
                        com minha familia ainda muito jovem em busca de melhores oportunidades e um melhor
                        futuro.
                        Amante da tecnologia, quero usar isso para aumentar a visibilidade dos indigenas do
                        alto
                        rio negro, além daqueles que já vivem na cidade. Pensando nisso começei a cursar
                        Ciências da computação, para aprimorar os meus conhecimentos e melhorar a vida não
                        só
                        minha, como de todos ao meu redor e todos que fazem parte da minha herança indigenas
                        e
                        não indigena.

                    </article>

                    <div class="container-fluid collum text-center rounded"><!--início linha-->
                        <!-- início media-->
                        <img src="./img/Vinny-Guara.jpg" class=" img-fluid img-thumbnail mx-auto d-block img-contato">
                        <h3 class="h5">
                            Marcus Vinicius Oliveira
                        </h3>
                        <article class="mb-3">
                            Eu sou Marcus Vinicius Oliveira, um indígena cuja conexão com a própria etnia se perdeu ao longo do tempo, mas que possivelmente tem raízes na comunidade guarani da cidade do Rio de Janeiro. Minha jornada me levou a explorar não apenas minhas origens, mas também meu profundo interesse pela tecnologia e inovação.
                            Desde jovem, fui fascinado pelo potencial transformador da tecnologia e suas aplicações práticas. Esta paixão me motivou a mergulhar no mundo digital, aprender sobre novas ferramentas e descobrir maneiras de utilizar a tecnologia para o bem da comunidade indígena e de todos aqueles que precisam de ajuda.

                        </article>
                    </div><!--fim media-->
            </section>

            </div>
            <!-- Fim equipe-->
        </section>

        <div class="container">
            <div class="row justify-content-center py-5">
                <form class="col-sm-10 col-md-8 col-lg-6" id="contact-form" action="contato.php" method="POST">
                    <h1 class="py-5">
                        Sabendo disso, o que mais você quer saber sobre nós? mande sua mensagem:
                    </h1>
                    <h1 id="nao">Entre em Contato</h1>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                        <label for="nome" class="form-label">Nome</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                        <label for="email" class="form-label">E-mail</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
                        <label for="assunto" class="form-label">Assunto</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="mensagem" rows="5" placeholder="Mensagem" required style="height: 200px;" name="mensagem"></textarea>
                        <label for="email">Mensagem</label>
                    </div>

                    <input type="submit" name="submit" id="submit">


                    <p class="mt-3">
                        Faremos nosso melhor para responder sua mensagem em até 2 dias úteis.
                    </p>

                    <p class="mt-3">
                        Atenciosamente,<br>
                        Equipe de desenvolvedores.
                    </p>
                </form>
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