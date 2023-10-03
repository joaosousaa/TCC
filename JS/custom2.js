async function carregar_livros(valor) {
    if (valor.length >= 3) {
        //console.log("Pesquisar: " + valor);

        const Dados = await fetch('listar_livros.php?titulo=' + valor);
        const Resposta = await Dados.json();
        //console.log(resposta);

        var html = "<ul class='list-group position-fixed'>";

        if (Resposta['erro']) {
            html += "<li class='list-group-item disabled'>" + Resposta['msg'] + "</li>";
        } else {
            for (i = 0; i < Resposta['Dados'].length; i++) {
                html += "<li class='list-group-item list-group-item-action' onclick='get_id_livro("
                    + Resposta['Dados'][i].id + ","
                    + JSON.stringify(Resposta['Dados'][i].titulo) +","
                    + JSON.stringify(Resposta['Dados'][i].quantidade_livro) +
                    ")'>"
                    + Resposta['Dados'][i].titulo + " ("
                    + Resposta['Dados'][i].quantidade_livro +")"
                    "</li>";
            }


        }
        html += "</ul>";

        document.getElementById('resultado_pesquisa').innerHTML = html;
    }
}

function get_id_livro(id_livro, titulo,quantidade_livro) {
    //console.log("Id do livro selecionado: " + id_livro);
    //console.log("titulo do livro selecionado: " + titulo);

    document.getElementById("id_livro").value = id_livro;
    document.getElementById("livro").value = titulo;
    document.getElementById("quantidade_livro").value = quantidade_livro;

}

const Fechar = document.getElementById('livro');

document.addEventListener('click', function (event) {
    const Validar_clique = Fechar.contains(event.target);
    if (!Validar_clique) {
        document.getElementById('resultado_pesquisa').innerHTML = '';
    }
});