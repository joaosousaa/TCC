async function carregar_alunos(valor) {
    if (valor.length >= 3) {
        //console.log("Pesquisar: " + valor);

        const dados = await fetch('listar_alunos.php?nome=' + valor);
        const resposta = await dados.json();
        //console.log(resposta);

        var html = "<ul class='list-group position-fixed'>";

        if (resposta['erro']) {
            html += "<li class='list-group-item disabled'>" + resposta['msg'] + "</li>";
        } else {
            for (i = 0; i < resposta['dados'].length; i++) {
                html += "<li class='list-group-item list-group-item-action' onclick='get_id_aluno(" 
                    + resposta['dados'][i].id + ","
                    + JSON.stringify(resposta['dados'][i].nome) + ","
                    + JSON.stringify(resposta['dados'][i].ano_turma) + ","
                    + JSON.stringify(resposta['dados'][i].curso) + ","
                    + JSON.stringify(resposta['dados'][i].email) 
                    + ")'>" 
                    + resposta['dados'][i].nome + 
                   "</li>";
            }
            

        }
        html += "</ul>";

        document.getElementById('resultado_pesquisa_alunos').innerHTML = html;
    }
}

function get_id_aluno(id_aluno, nome, ano_turma, curso, email) {
    //console.log("Id do aluno selecionado: " + id_aluno);
    //console.log("nome do aluno selecionado: " + nome);

    document.getElementById("id_aluno").value = id_aluno;
    document.getElementById("aluno").value = nome;
    document.getElementById("ano_turma").value = ano_turma;
    document.getElementById("curso").value = curso;
    document.getElementById("email").value = email;
    fecharr.style.display = 'block';  // Esconde a div
}

const fechar = document.getElementById('aluno');
const fecharr = document.getElementById('esconde');  // Substitua 'id_da_sua_div' pelo ID real da sua div.

document.addEventListener('click', function (event) {
    const validar_clique = fechar.contains(event.target);
    if (!validar_clique) {
        document.getElementById('resultado_pesquisa_alunos').innerHTML = '';
       
    }
});