// Chamar a função quando o usuário digitar valor no formulário
async function carregar_alunos(valor) {

    // Acessa o IF quando o usuário digitar mais de 3 caracteres
    if (valor.length >= 3) {

        // Chamar o arquivo PHP responsável em buscar registros no banco de dados
        const dados = await fetch('pesquisar_alunos.php?nome=' + valor);

        // Ler a resposta 
        const resposta = await dados.json();
        //console.log(resposta);

        // Criar a lista de itens do dropdown
        var resultado = "<ul class='list-group position-fixed'>";

        // Acessa o IF quando encontrar registro no banco de dados
        if (resposta['status']) {

            // Percorrer a lista de registros retornado do BD
            for (i = 0; i < resposta['dados'].length; i++) {

                // Criar o item da lista
                resultado += "<li class='list-group-item list-group-item-action' onclick='listar_aluno(" + JSON.stringify(resposta['dados'][i].nome) + ")'>" + resposta['dados'][i].nome + "</li>";
            }
        } else {
            // Retorna a mensagem de erro quando não encontrar nenhum registro no banco de dados
            resultado += "<li class='list-group-item disabled'>" + resposta['msg'] + "</li>";
        }

        resultado += "</ul>";

        // Retornar o conteúdo para a página HTML no SELETOR resultado_pesquisa
        document.getElementById("resultado_pesquisa_alunos").innerHTML = resultado;
    }
}

// Receber seletor para fechar o dropdown quando clicar fora do dropdown
const fechar = document.getElementById('aluno');

// Aguardar o click do usuário fora do dropdown para fechar o dropdown
document.addEventListener('click', function (event) {
    const validar_clique = fechar.contains(event.target);
    if (!validar_clique) {
        document.getElementById('resultado_pesquisa_alunos').innerHTML = '';
    }
});

// Função para receber o nome do aluno e buscar alunos no BD
async function listar_aluno(nome) {
    //console.log(nome);

    // Enviar o nome do aluno para o campo com ID aluno
    document.getElementById("aluno").value = nome;

    // Chamar o arquivo PHP responsável em buscar registros no banco de dados
    const dados = await fetch('listar_alunos.php?nome=' + nome);

    // Ler a resposta 
    const resposta = await dados.json();

    var aluno = "";

    // Acessa o IF quando encontrar registro no banco de dados
    if (resposta['status']) {

        // Percorrer a lista de registros retornado do BD
        for (i = 0; i < resposta['dados'].length; i++) {

            // Criar o item da lista
            //aluno += "<a href='visualizar.php?id=" + resposta['dados'][i]['id'] + "'>" + resposta['dados'][i]['nome'] + "</a><br><br>";
            aluno += "<a href='#'>" + resposta['dados'][i]['nome'] + "</a><br><br>";
        }
    } else {
        // Retorna a mensagem de erro quando não encontrar nenhum registro no banco de dados
        aluno += "<div class='alert alert-danger' role='alert'>" + resposta['msg'] + "</div>";
    }

    // Retornar o conteúdo para a página HTML no SELETOR resultado_pesquisa
   
}

// Receber o seletor pesq-aluno-form da tag <form></form>

;