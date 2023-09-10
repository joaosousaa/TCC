// Chamar a função quando o usuário digitar valor no formulário
async function carregar_livros(valor) {

    // Acessa o IF quando o usuário digitar mais de 3 caracteres
    if (valor.length >= 3) {

        // Chamar o arquivo PHP responsável em buscar registros no banco de dados
        const dados = await fetch('pesquisar_livros.php?titulo=' + valor);

        // Ler a resposta 
        const resposta = await dados.json();
        //console.log(resposta);

        // Criar a lista de itens do dropdown
        var Resultado = "<ul class='list-group position-fixed'>";

        // Acessa o IF quando encontrar registro no banco de dados
        if (resposta['status']) {

            // Percorrer a lista de registros retornado do BD
            for (i = 0; i < resposta['dados'].length; i++) {

                // Criar o item da lista
                Resultado += "<li class='list-group-item list-group-item-action' onclick='listar_livro(" + JSON.stringify(resposta['dados'][i].titulo) + ")'>" + resposta['dados'][i].titulo + "</li>";
            }
        } else {
            // Retorna a mensagem de erro quando não encontrar nenhum registro no banco de dados
            Resultado += "<li class='list-group-item disabled'>" + resposta['msg'] + "</li>";
        }

        Resultado += "</ul>";

        // Retornar o conteúdo para a página HTML no SELETOR resultado_pesquisa_livros
        document.getElementById("Resultado_pesquisa_livros").innerHTML = Resultado;
    }
}

// Receber seletor para fechar o dropdown quando clicar fora do dropdown
const Fechar = document.getElementById('livro');

// Aguardar o click do usuário fora do dropdown para fechar o dropdown
document.addEventListener('click', function (event) {
    const validar_clique = Fechar.contains(event.target);
    if (!validar_clique) {
        document.getElementById('Resultado_pesquisa_livros').innerHTML = '';
    }
});

// Função para receber o titulo do livro e buscar livros no BD
async function listar_livro(titulo) {
    //console.log(titulo);

    // Enviar o titulo do livro para o campo com ID livro
    document.getElementById("livro").value = titulo;

    // Chamar o arquivo PHP responsável em buscar registros no banco de dados
    const dados = await fetch('listar_livros.php?titulo=' + titulo);

    // Ler a resposta 
    const resposta = await dados.json();

    var livro = "";

    // Acessa o IF quando encontrar registro no banco de dados
    if (resposta['status']) {

        // Percorrer a lista de registros retornado do BD
        for (i = 0; i < resposta['dados'].length; i++) {

            // Criar o item da lista
            //livro += "<a href='visualizar.php?id=" + resposta['dados'][i]['id'] + "'>" + resposta['dados'][i]['titulo'] + "</a><br><br>";
            livro += "<a href='#'>" + resposta['dados'][i]['titulo'] + "</a><br><br>";
        }
    } else {
        // Retorna a mensagem de erro quando não encontrar nenhum registro no banco de dados
        livro += "<div class='alert alert-danger' role='alert'>" + resposta['msg'] + "</div>";
    }

    // Retornar o conteúdo para a página HTML no SELETOR resultado_pesquisa_livros
   
}

// Receber o seletor pesq-livro-form da tag <form></form>

;