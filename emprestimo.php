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
    <title>Empréstimo Livros</title>
    <link rel="shortcut icon" href="img/logob-removebg-preview (1).png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap');
    </style>

    <link rel="stylesheet" href="css/emprestimo.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@100&family=Saira+Condensed:wght@100&display=swap"
        rel="stylesheet">


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
                    <button class="navigateButton hover-animated-button" data-url="home.php"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path
                                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                        </svg> </button>
                    <div class="legenda">Início</div>
                </div>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="#"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-hourglass-split" viewBox="0 0 16 16">
                            <path
                                d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                        </svg></button>
                    <div class="legenda">Atríbuidos</div>
                </div>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="#"> <svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                        </svg></button>
                    <div class="legenda">Pendentes</div>
                </div>

                <div class="mb-4 text-center">
                    <button class="navigateButton hover-animated-button" data-url="#"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                        </svg></button>
                    <div class="legenda">Entregues</div>
                </div>

                <img src="img/joao.jpg" alt=""
                    style="  height: 50px; margin-top: 4vh; margin-left:34px; border-radius:10px;">

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
                            <div class="navpaginas">
                                <a href="livros.php" id="a1" class="animated-underline" style="">ACERVO</a>
                                <a href="alunos.php" id="a2" class="animated-underline">ALUNOS</a>
                                <a href="emprestimo.php" id="a3" class="animated-underline"
                                    style=" font-weight: bolder; font-size: 22px;">EMPRÉSTIMO</a>
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
                <div class="" style="padding-top: 24vh;">
                    <div class="divFormulario">
                        <h1 class="tituloFormulario">Empréstimo de Livros</h1>

                        <form action="emprestimo.php" id="pesq-produto-form" method="POST " class="formLivro">

                            <div class="col-12 mb-3">
                                <label for="nome">Aluno:</label>
                                <input type="text" name="aluno" class="form-control" id="aluno"
                                    placeholder="Digite a palavra" onkeyup="carregar_alunos(this.value)"
                                    autocomplete="off">
                                <!-- Carregar as opções retornada do BD -->
                                <span id="resultado_pesquisa_alunos"></span>
                            </div>


                            <div class="col-12 mb-3">
                                <label for="livro">livro:</label>
                                <input type="text" name="livro" class="form-control" id="livro"
                                    placeholder="Digite a palavra" onkeyup="carregar_livros(this.value)"
                                    autocomplete="off">
                                <!-- Carregar as opções retornada do BD -->
                                <span id="Resultado_pesquisa_livros"></span>
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
                </div>



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

                <script src="./js/inputaluno.js"></script>
                <script src="./js/inputlivro.js"></script>

</body>

</html>