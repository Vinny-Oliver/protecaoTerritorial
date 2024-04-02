// Criando lógica do form de login
const email = 'teste@email';
const senha = 1234;


function obterValor(ver1 = email) {
    var valor = document.getElementById('teste').value;
    alert("Valor obtido: " + valor);
}

// Função para carregar a API do YouTube
function carregarAPI() {
    gapi.client.init({
        'apiKey': // 'INSERIR A CHAVE API KEY AQUI',
        'discoveryDocs': ['https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest'],
    }).then(function () {
        // Depois que a API é carregada, faça a chamada para recuperar as informações do vídeo
        recuperarVideo();
    }, function (erro) {
        console.error('Erro ao carregar a API do YouTube:', erro);
    });
}

// Função para recuperar as informações do vídeo
function recuperarVideo() {
    // ID do vídeo do YouTube que você deseja incorporar
    var videoId = 'qnB_uJftOD0';

    // Chamada para a API do YouTube para recuperar as informações do vídeo
    gapi.client.youtube.videos.list({
        'part': 'snippet',
        'id': videoId
    }).then(function (resposta) {
        var item = resposta.result.items[0];
        var titulo = item.snippet.title;
        var descricao = item.snippet.description;

        // Construa o iframe com as informações do vídeo
        var iframeHtml = '<iframe width="560" height="315" src="https://www.youtube.com/embed/qnB_uJftOD0" frameborder="0" allowfullscreen></iframe>';

        // Adicione o iframe ao elemento desejado no seu HTML
        document.getElementById('video-container').innerHTML = iframeHtml;
    }, function (erro) {
        console.error('Erro ao recuperar informações do vídeo:', erro);
    });
}

// Inicialize a API do YouTube
gapi.load('client', carregarAPI);



