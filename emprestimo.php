<?php
include('verificarlogin.php');
$logado = $_SESSION['Usuario'];
?>

<?php 

if(isset($_POST['submit']))
{
    include_once('dbcon.php');
    $aluno = $_POST['aluno'];
    $livro = $_POST['livro'];
    $data_emprestimo = $_POST['dt_emprestimo'];
    $data_devolucao = $_POST['dt_devolucao'];
   

   $result = mysqli_query($con, "INSERT INTO emprestimos (aluno_id,livro_id,dt_emprestimo,dt_devolucao) VALUES ('$aluno','$livro','$data_emprestimo','$data_devolucao')");

}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/emprestimo.css">
</head>
<!--cabeçario-->

<body>
<img src="img/fundo-biblioteca.avif" class="imgFundo" alt="">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h3 class="startup">UPBOOK</h3>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <h3 class="usuario"><img src="img/usuario.png" alt=""
                            style="width: 16px;height: 16px; margin-bottom:6px;">
                        Usuário:
                        <?php
                        echo "$logado"
                            ?>
                    </h3>
                </div>
                <a href="logout.php"><button class="sair" id="sair ">Sair</button></a>
            </div>
        </nav>
    </header>


    <main class="">

        <div class="row">

            <div class="col-md-2 navegacao">
                <div class="divbotoes">
                    <img src="img/logob-removebg-preview (2).png" class="logo" alt="">
                    <a href="home.php"> <button type="button" class=" bntPag mx-3">Início <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                            </svg></button></a>
                    <a href="cadastrolivros.php"><button type="button" class=" bntPag  mx-3">Acervo <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-book-half" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                            </svg></button></a>
                    <a href="cadastroalunos.php"><button type="button" class=" bntPag mx-3">Alunos <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg></button></a>
                    <a href="emprestimo.php"><button type="button" class=" bntPag btn-info mx-3"><i
                                class="fi fi-sr-home"></i> Empréstimo <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z" />
                            </svg></button></a>
                    <a href=""><button type="button" class=" bntPag mx-3">Atríbuidos <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                            </svg></button></a>
                    <a href=""><button type="button" class="bntPag  mx-3">Pendentes <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg></button></a>
                    <a href=""><button type="button" class=" bntPag btn-info mx-3">Entregues <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                                <path
                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                            </svg></button></a>
                </div>
            </div>
            <!--conteudo principal-->
            <div id="principal" class="conteudoPrincipal col-md-5 ">
               

                <!--cabeçario-->


                <main class="">

                    <div class="row">
                        <!--conteudo principal-->
                        <div id="principal" class="col-md-5 r">
                            <div class="container">
                                <h1 class="mt-4">Formulário de Empréstimo de Livros</h1>

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
                                        <div class="col" >
                                            <label for="data_emprestimo">Data de Empréstimo:</label>
                                            <input type="date" class="form-control" id="data_emprestimo"
                                                name="data_emprestimo" required>
                                        </div>

                                   
                                        <div class="col" >
                                            <label for="data_devolucao">Data de Devolução:</label>
                                            <input type="date" class="form-control" id="data_devolucao"
                                                name="data_devolucao" required>
                                        </div>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                                    
                                </form>
                            </div>
                        </div>
                </main>

            </div>
        </div>


        <div class="modal fade" id="modalProcurarAluno" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Procurar Alunos</h5>
                        <button type="button" id="closeModalProcurarAluno" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Fechar"></button>
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
                        <button type="button" id="closeModalProcurarLivro" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Fechar"></button>
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

</body>

</html>