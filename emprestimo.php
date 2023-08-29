<?php
include('login/verificarlogin.php');
$logado = $_SESSION['Usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca JBL</title>
    <link rel="shortcut icon" href="img/logob-removebg-preview (1).png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap');
    </style>
    <link href="/website/css/uicons-outline-rounded.css" rel="stylesheet">
    <link rel="stylesheet" href="css/emprestimo.css">
    
   
</head>

<body>
    <!--Conteudo principal-->
    <main class="row">
        <!--Navegação-->
        <div class="col-md-2 navegacao">

            <div class="button-container">
                <img src="img/logo.png" class="logo" alt="">
                <label for="" class="logotext">JBL</label>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="home.php"><svg
                            xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path
                                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                        </svg> </button>
                    <div class="legenda">Início</div>
                </div>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="#"><svg
                            xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-hourglass-split" viewBox="0 0 16 16">
                            <path
                                d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                        </svg></button>
                    <div class="legenda">Atríbuidos</div>
                </div>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="#"> <svg
                            xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                        </svg></button>
                    <div class="legenda">Pendentes</div>
                </div>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="#"><svg
                            xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                        </svg></button>
                    <div class="legenda">Entregues</div>
                </div>

                <img src="img/joao.jpg" alt=""
                    style="  height: 50px; margin-top: 11vh; margin-left:34px; border-radius:10px;">

            </div>
        </div>

        <!--Conteudo principal-->

        <div id="principal" class="col-md-2 cards">

            <header>
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <h3 class="usuario"> <span style="font-size:23px;">Olá</span>,
                                <?php echo "$logado" ?> !
                            </h3>
                            <div class="navpaginas">
                                <a href="cadastrolivros.php" id="a1" class="animated-underline" style="">ACERVO</a>
                                <a href="cadastroalunos.php" id="a2" class="animated-underline">ALUNOS</a>
                                <a href="emprestimo.php" id="a3" class="animated-underline">EMPRÉSTIMO</a>
                            </div>
                        </div>

                        <label for="" class="labelSair">Sair</label>
                        <button class="sair navigateButton " id="sair" data-url="login/logout.php"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg></button>

                    </div>
                </nav>
            </header>

            <div class="conteudo">
            <div class="r" style="max-width: 70vh;">
                    <h1 class="formulario">Formulário de Empréstimo de Livros</h1>

                    <form action="emprestimo.php" method="POST " class="formLivro">
                        <div class="form-group">
                            <label for="nome">Aluno:</label>
                            <input type="text" class="form-control" id="nomeAluno" name="aluno" required>
                            <input type="text" hidden id="idAluno" required>
                        </div>


                        <div class="form-group">
                            <label for="livro">Nome do Livro:</label>
                            <input type="text" class="form-control" name="livro" id="nomeLivro" required>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="data_emprestimo">Data de Empréstimo:</label>
                                <input type="date" class="form-control" id="data_emprestimo" name="data_emprestimo"
                                    required>
                            </div>


                            <div class="col">
                                <label for="data_devolucao">Data de Devolução:</label>
                                <input type="date" class="form-control" id="data_devolucao" name="data_devolucao"
                                    required>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>

                    </form>
                </div>

                <div class="modal fade" id="modalProcurarAluno" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Procurar Alunos</h5>
                                <button type="button" id="closeModalProcurarAluno" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <!--salvar estudante-->
                            <form id="saveLivros">
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="tableProcurarAluno" class="table table-striped table-sm"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Ano/Turma</th>
                                                        <th>Curso</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbodyProcurarAluno">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="modalProcurarLivro" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Procurar Livros</h5>
                                <button type="button" id="closeModalProcurarLivro" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <!--salvar estudante-->
                            <form id="saveLivros">
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="tableProcurarLivro" class="table table-striped table-sm"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Título</th>
                                                        <th>Autor</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbodyProcurarLivro">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>
    <script>

        $(document).on('click', '#nomeAluno', function () {
            $('#tbodyProcurarAluno').html(``);
            $.ajax({
                type: "POST",
                url: "db/alunos.php",
                data: {
                    method: 'INDEX'
                },
                success: function (response) {
                    const alunos = JSON.parse(response);
                    alunos.data.forEach(element => {
                        $('#tbodyProcurarAluno').append(`
                        <tr onclick="escolherAluno(${element.id}, '${element.nome}')">
                            <td>${element.nome}</td>
                            <td>${element.ano_turma}</td>
                            <td>${element.curso}</td>
                            <td>${element.email}</td>
                        </tr>
                        `);
                    });

                    table = $('#tableProcurarAluno').DataTable({
                        language: {
                            url: './assets/datable.json',
                        }
                    })

                    $('#modalProcurarAluno').modal('show');

                }
            });

        });

        $(document).on('click', '#nomeLivro', function () {
            $('#tbodyProcurarLivro').html(``);
            $.ajax({
                type: "POST",
                url: "db/livros.php",
                data: {
                    method: 'INDEX'
                },
                success: function (response) {
                    const livros = JSON.parse(response);
                    livros.data.forEach(element => {
                        $('#tbodyProcurarLivro').append(`
                        <tr onclick="escolherLivro(${element.id}, '${element.titulo}')">
                            <td>${element.titulo}</td>
                            <td>${element.autor}</td>
                        </tr>
                        `);
                    });

                    table = $('#tableProcurarLivro').DataTable({
                        language: {
                            url: './assets/datable.json',
                        }
                    })

                    $('#modalProcurarLivro').modal('show');

                }
            });

        });

        function escolherAluno(id, name) {
            $('#closeModalProcurarAluno').click();
            table.destroy();
            $('#nomeAluno').val(name);
            $('#idAluno').val(id);
        }

        function escolherLivro(id, title) {
            $('#closeModalProcurarLivro').click();
            table.destroy();
            $('#nomeLivro').val(title);
            $('#idLivro').val(id);
        }
    </script>
    <script>document.querySelectorAll('.navigateButton').forEach(function (button) {
            button.addEventListener('click', function () {
                // Obtém o URL do atributo 'data-url' do botão clicado
                const url = this.getAttribute('data-url');
                // Navega para o URL especificado
                window.location.href = url;
            });
        });
        // Seleciona todos os botões
        const buttons = document.querySelectorAll('.toggle-button');
        buttons.forEach(button => {
            button.addEventListener('click', function () {
                // Primeiro, remova a classe 'selected' de todos os botões
                buttons.forEach(btn => {
                    btn.classList.remove('selected');
                });
                // Adicione a classe 'selected' ao botão clicado
                this.classList.add('selected');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


</body>

</html>