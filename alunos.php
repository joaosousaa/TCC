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
    <title>Cadastro Alunos</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap');
    </style>
    <link href="/website/css/uicons-outline-rounded.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tabelas.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@100&family=Saira+Condensed:wght@100&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

</head>

<body>
    <!--Conteudo principal-->
    <main class="row">
        <!--Navegação-->
        <div class="col-md-2 navegacao">

            <div class="button-container">
                <img src="img/logo3.png" class="logo" alt="">
                <label for="" class="logotext">UPBOOK</label>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" style="" data-url="home.php"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path
                                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                        </svg> </button>
                    <div class="legenda">Início</div>
                </div>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="atribuidos.php"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-hourglass-split" viewBox="0 0 16 16">
                            <path
                                d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                        </svg></button>
                    <div class="legenda">Emprestados</div>
                </div>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="pendentes.php"> <svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                        </svg></button>
                    <div class="legenda">Pendentes</div>
                </div>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="entregues.php"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                        </svg></button>
                    <div class="legenda">Entregues</div>
                </div>

                <img src="img/sandra2.png" alt=""
                    style="margin-top: 4vh; height: 50px; margin-left:34px; border-radius:10px;">

            </div>
        </div>

        <!--Conteudo principal-->

        <div id="principal" class="col-md-2 cards">

            <header>
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <h3 class="usuario"> <span style="font-size:23px;">Olá</span>,
                                <?php echo "$logado" ?>!
                            </h3>
                            <div class="navpaginas row">
                                <div class="col divnav"><a href="livros.php" id="a1" class="animated-underline "
                                        style="">ACERVO</a></div>

                                <div class="col divnav" style="height: 0vh;">
                                    <a href="alunos.php" id="a2" class="animated-underline navemprestimo">ALUNOS</a>
                                    <p style="width:58px; height:2px; background-color: white;"></p>
                                </div>

                                <div class="col divnav"><a href="emprestimo.php" id="a3"
                                        class="animated-underline ">EMPRÉSTIMO</a></div>
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


            <div class="modal fade" id="livrosAddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cadastrar Aluno</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Fechar"></button>
                        </div>
                        <!--salvar estudante-->
                        <form id="saveLivros">
                            <div class="modal-body">

                                <div id="errorMessage" class="alert alert-warning d-none"></div>

                                <div class="">
                                    <label for="">Nome Aluno</label>
                                    <input type="text" name="nome" class="form-control" />
                                </div>
                                <div class="">
                                    <label for="">Ano/Turma</label>
                                    <div>
                                        <select id="ano_turma" name="ano_turma" class="form-control">
                                            <option value="1A"></option>
                                            <option value="1A">1A</option>
                                            <option value="1B">1B</option>
                                            <option value="2A">2A</option>
                                            <option value="2B">2B</option>
                                            <option value="3A">3A</option>
                                            <option value="3B">3B</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="">
                                    <label for="">Curso</label>
                                    <div>
                                        <select id="curso" name="curso" class="form-control">
                                            <option value="1A"></option>
                                            <option value="Desenvolvimento de Sistemas" required>Desenvolvimento de
                                                Sistemas</option>
                                            <option value="Eletrotécnica" required> Eletrotécnica</option>
                                            <option value="Guia de Turismo">Guia de Turismo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="">email</label>
                                    <input type="text" name="email" class="form-control" />
                                </div>

                                <div class="">
                                    <label for="">Observação</label>
                                    <input type="text" name="observacao" class="form-control" />
                                </div>
                                <div class="">
                                    <label for="">Data do Cadastro</label>
                                    <input type="date" name="data_cadastro" class="form-control" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Salvar Aluno</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit livros Modal -->
            <div class="modal fade" id="livrosEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar Aluno </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Fechar"></button>
                        </div>
                        <form id="updateLivros">
                            <div class="modal-body">

                                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                                <input type="hidden" name="livros_id" id="livros_id">

                                <div class="">
                                    <label for="">nome aluno</label>
                                    <input type="text" name="nome" id="nome" class="form-control" />
                                </div>
                                <div class="">
                                    <label for="">Ano/Turma</label>
                                    <div>
                                        <select id="ano_turma" name="ano_turma" class="form-control">
                                            <option value="1A">1A</option>
                                            <option value="1B">1B</option>
                                            <option value="2A">2A</option>
                                            <option value="2B">2B</option>
                                            <option value="3A">3A</option>
                                            <option value="3B">3B</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="">Curso</label>
                                    <div>
                                        <select id="curso" name="curso" class="form-control" required>
                                            <option value="Desenvolvimento de Sistemas" required>Desenvolvimento de
                                                Sistemas</option>
                                            <option value="Eletrotécnica" required> Eletrotécnica</option>
                                            <option value="Guia de Turismo" required>Guia de Turismo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="">email</label>
                                    <input type="text" name="email" id="email" class="form-control" />
                                </div>

                                <div class="">
                                    <label for="">Observacao</label>
                                    <input type="text" name="observacao" id="observacao" class="form-control" />
                                </div>
                                <div class="">
                                    <label for="">Data do Cadastro</label>
                                    <input type="date" name="data_cadastro" id="data_cadastro" class="form-control" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Editar Aluno </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- View livros Modal -->
            <div class="modal fade" id="livrosViewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Visualizar Aluno</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Fechar"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="">Nome aluno</label>
                                <p id="view_nome" class="form-control view"></p>
                            </div>
                            <div class="mb-3">
                                <label for="">Ano/Turma</label>
                                <p id="view_ano_turma" class="form-control view"></p>
                            </div>
                            <div class="mb-3">
                                <label for="">curso</label>
                                <p id="view_curso" class="form-control view"></p>
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <p id="view_email" class="form-control view"></p>
                            </div>

                            <div class="mb-3">
                                <label for="">Observacao</label>
                                <p id="view_observacao" class="form-control view"></p>
                            </div>
                            <div class="mb-3">
                                <label for="">Data do Cadastro</label>
                                <p id="view_data_cadastro" class="form-control view"></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="height: 87vh; border-radius: 30px;">
                        <div class="card-header">

                            <form action="">
                                <div class="box-search" style="gap: .0%;">
                                    <button type="submit" class="search btn btn-primary"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg></button>
                                    <input name="busca" class="form-control w-25" value="<?php if (isset($_GET['busca']))
                                        echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text"
                                        style="border-radius: 0px 20px 20px 0px;">



                                    <div style="float: right; width: 100%; margin-right:1.5%">

                                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                            data-bs-target="#livrosAddModal" style="height: 35px; font-size: 13px;;">
                                            Cadastrar Aluno
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">

                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Aluno</th>
                                        <th>Ano/Turma</th>
                                        <th>curso</th>
                                        <th>Email</th>
                                        <th>Observacao</th>
                                        <th>Cadastrado</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require 'dbcon.php';

                                    if (!isset($_GET['busca'])) {


                                        $query = "SELECT * FROM alunos";
                                        $query_run = mysqli_query($con, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $livros) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?= $livros['id'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['nome'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['ano_turma'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['curso'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['email'] ?>
                                                    </td>

                                                    <td>
                                                        <?= $livros['observacao'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['data_cadastro'] ?>
                                                    </td>
                                                    <td style="width: 128px;">
                                                        <button type="button" value="<?= $livros['id']; ?>"
                                                            class="viewLivrosBtn btn btn-info btn-sm"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="white" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z" />
                                                            </svg></button>

                                                        <button type="button" value="<?= $livros['id']; ?>"
                                                            class="editLivrosBtn btn btn-success btn-sm"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                            </svg></button>

                                                        <button type="button" value="<?= $livros['id']; ?>"
                                                            class="deleteLivrosBtn btn btn-danger btn-sm"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                            </svg></button>

                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                    } else {
                                        $pesquisa = $con->real_escape_string($_GET['busca']);
                                        $sql_code = "SELECT * FROM alunos WHERE id LIKE '%$pesquisa%' 
                                                OR nome LIKE '%$pesquisa%' 
                                                OR ano_turma LIKE '%$pesquisa%' OR curso LIKE '%$pesquisa%'";
                                        $sql_query = $con->query($sql_code) or die("ERRO ao consultar! " . $con->$error);

                                        if ($sql_query->num_rows == 0) {
                                            ?>
                                            <tr>
                                                <td colspan="3">Nenhum resultado encontrado...</td>
                                            </tr>
                                            <?php
                                        } else {
                                            while ($livros = $sql_query->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?= $livros['id'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['nome'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['ano_turma'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['curso'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['email'] ?>
                                                    </td>

                                                    <td>
                                                        <?= $livros['observacao'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $livros['data_cadastro'] ?>
                                                    </td>
                                                    <td style="width: 128px;">
                                                        <button type="button" value="<?= $livros['id']; ?>"
                                                            class="viewLivrosBtn btn btn-info btn-sm"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="white" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z" />
                                                            </svg></button>

                                                        <button type="button" value="<?= $livros['id']; ?>"
                                                            class="editLivrosBtn btn btn-success btn-sm"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                            </svg></button>

                                                        <button type="button" value="<?= $livros['id']; ?>"
                                                            class="deleteLivrosBtn btn btn-danger btn-sm"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                            </svg></button>

                                                    </td>
                                                </tr>


                                                <?php
                                            }
                                        }


                                    }

                                    ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>



        </div>
        <?php
        if (isset($_POST['submit'])) {


            include_once('config.php');

            $nomeLivro = $_POST['nome'];
            $anoLivro = $_POST['ano_turma'];
            $cursoLivro = $_POST['curso'];
            $anoLivro = $_POST['email'];
            $observacaoLivro = $_POST['observacao'];
            $dataCadastroLivro = $_POST['data_cadastro'];

            $result = mysqli_query($conexao, "INSERT INTO alunos (nome,ano_turma,curso,email,observacao,data_cadastro) VALUES 
      ('$nomeLivro','$anoLivro','$cursoLivro','$anoLivro','$observacaoLivro','$dataCadastroLivro')");
        }

        ?>
    </main>

    <script> document.querySelectorAll('.navigateButton').forEach(function (button) {
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



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


    <script>

        $(document).ready(function () {
            if (window.location.hash === "#openModal") {
                $('#livrosAddModal').modal('show');
            }
        });


        $(document).on('submit', '#saveLivros', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_livros", true);

            $.ajax({
                type: "POST",
                url: "codealuno.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessage').addClass('d-none');
                        $('#livrosAddModal').modal('hide');
                        $('#saveLivros')[0].reset();

                        alertify.set('notifier', 'position', 'bottom-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });
        document.getElementById("curso").addEventListener("change", function () {
            var selectedValue = this.value;
            console.log(selectedValue);  // Isto imprimirá o valor do option selecionado.
        });

        $(document).on('click', '.editLivrosBtn', function () {

            document.getElementById("curso").addEventListener("change", function () {
                var selectedValue = this.value;
                console.log(selectedValue);  // Isto imprimirá o valor do option selecionado.
            });

            var livros_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "codealuno.php?livros_id=" + livros_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {

                        $('#livros_id').val(res.data.id);
                        $('#nome').val(res.data.nome);
                        $('#ano_turma').val(res.data.ano_turma);
                        $('#curso').val(res.data.curso);
                        $('#email').val(res.data.email);

                        $('#observacao').val(res.data.observacao);
                        $('#data_cadastro').val(res.data.data_cadastro);

                        $('#livrosEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateLivros', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_livros", true);

            $.ajax({
                type: "POST",
                url: "codealuno.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier', 'position', 'bottom-right');
                        alertify.success(res.message);

                        $('#livrosEditModal').modal('hide');
                        $('#updateLivros')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewLivrosBtn', function () {

            var livros_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "codealuno.php?livros_id=" + livros_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {

                        $('#view_nome').text(res.data.nome);
                        $('#view_ano_turma').text(res.data.ano_turma);
                        $('#view_curso').text(res.data.curso);
                        $('#view_email').text(res.data.email);

                        $('#view_observacao').text(res.data.observacao);
                        $('#view_data_cadastro').text(res.data.data_cadastro);

                        $('#livrosViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deleteLivrosBtn', function (e) {
            e.preventDefault();

            if (confirm('Tem Certeza de que Deseja Excluir esses Dados?')) {
                var livros_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "codealuno.php",
                    data: {
                        'delete_livros': true,
                        'livros_id': livros_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {

                            alert(res.message);
                        } else {
                            alertify.set('notifier', 'position', 'bottom-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });

    </script>
</body>

</html>