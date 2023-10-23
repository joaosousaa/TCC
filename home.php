<?php
include('login/verificarlogin.php');
include_once('dbcon.php');
$logado = $_SESSION['Usuario'];
$query = "SELECT COUNT(*) as total_rows FROM livros";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$totalRows = $row['total_rows'];

$query = "SELECT COUNT(*) as total_rows FROM alunos";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$totalalunos = $row['total_rows'];

$query = "SELECT COUNT(*) as total_rows FROM emprestimo";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$totalemprestado = $row['total_rows'];

$query = "SELECT COUNT(*) as total_rows FROM pendentes";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$totalpendentes = $row['total_rows'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca UpBook</title>
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/relogio.css" />
    <link rel="stylesheet" href="css/calendario.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@100&family=Saira+Condensed:wght@100&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100&display=swap" rel="stylesheet">
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
                    <button class="navigateButton hover-animated-button"
                        style=" background-color: white; color:#468CC9;" data-url="home.php"><svg
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
                    style="  height: 50px;  margin-top: 4vh; margin-left:34px; border-radius:10px;">

            </div>
        </div>

        <!--Conteudo principal-->

        <div id="principal" class="col-md-2 cards">

            <header>
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <h3 class="usuario"> <span
                                    style="font-size:23px; font-family: 'Saira Condensed', sans-serif;">Olá</span>,
                                <?php echo "$logado" ?>!
                            </h3>
                            <div class="navpaginas row">

                                <div class="col divnav" style="height: 0vh;">
                                    <a href="livros.php" id="a1" class="animated-underline">ACERVO</a>
                                </div>
                                <div class="col divnav"><a href="alunos.php" id="a2" class="animated-underline "
                                        style="">ALUNOS</a></div>
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

            <div class="conteudo">
                <div class="row conteudoPrincipal m " style="padding-top: 30px;">

                    <div class="col-md-2 caixas caixa1 navigateButton " data-url="livros.php">
                        <div class="row">
                            <div class="col-md-2" style="width: 47.666667%;">
                                <h4>Livros Cadastrados</h4>
                                <span style="color:white; font-size: 90px;">
                                    <?php echo "$totalRows" ?>
                                </span>
                            </div>
                            <div class="col-md-2" style="height: 37vh;">
                                <img src="img/luminaria.png" class="col" style="    height: 71%;
                                margin-top: 68px;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 caixas caixa2 navigateButton " data-url="pendentes.php">
                        <div class="row" style="height: 24vh;">
                            <div class="row">
                                <h4 class="imgAlarme" style="color: black; margin-top: 20px; ">Livros Pendentes</h4>
                            </div>
                            <div class="col-md-2" style="width: 50.666667%;">
                                <span style="color: black;font-size: 90px;">
                                    <?php echo "$totalpendentes" ?>
                                </span></span>
                            </div>
                            <div class="col-md-2">
                                <img src="img/velocimetro.png" style="height: 35%; margin-top: 4vh; margin-bottom: 4px;"
                                    alt="">
                            </div>
                        </div>
                        <div class="row pendeteMsg">
                            E-mails serão enviados para alunos que estão com livros pendentes.
                        </div>
                    </div>

                    <div class="clock">
                        <div class="hour"></div>
                        <div class="min"></div>
                        <div class="sec"></div>
                        <span style="transform: rotate(30deg);">1</span>
                        <span style="transform: rotate(60deg);">2</span>
                        <span style="transform: rotate(90deg);">3</span>
                        <span style="transform: rotate(120deg);">4</span>
                        <span style="transform: rotate(150deg);">5</span>
                        <span style="transform: rotate(180deg);">6</span>
                        <span style="transform: rotate(210deg);">7</span>
                        <span style="transform: rotate(240deg);">8</span>
                        <span style="transform: rotate(270deg);">9</span>
                        <span style="transform: rotate(300deg);">10</span>
                        <span style="transform: rotate(330deg);">11</span>
                        <span style="transform: rotate(0deg);">12</span>
                    </div>
                </div>

                <div class="row conteudoPrincipal">

                    <div class="col-md-2 caixas caixa4 navigateButton " data-url="atribuidos.php">
                        <div class="row" style="height: 24vh;">
                            <div class="row">
                                <h4 class="imgAlarme" style="color: #F4B544; margin-top: 20px; ">Livros Emprestados</h4>
                            </div>
                            <div class="col-md-2" style="width: 47.666667%;">
                                <span style="color: #F4B544;font-size: 90px;">
                                    <?php echo "$totalemprestado" ?>
                                </span>
                            </div>
                            <div class="col-md-2">
                                <img src="img/livroemprestado.png" style="height: 25%; margin-top: 8vh;
                                margin-bottom: 4px;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 caixas caixa3 navigateButton " data-url="alunos.php">
                        <div class="row" style="height: 16vh;">
                            <div class="row">
                                <h4 class="imgAlarme" style="color: #5156A9; margin-top: 20px; ">Alunos Cadastrados</h4>
                            </div>
                            <div class="col-md-2" style="width: 50.666667%;">
                                <span style="color:#5156A9; font-size: 90px;">
                                    <?php echo "$totalalunos" ?>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <img src="img/estudantes.png" style="height: 20vh; width: 31vh;
                        margin-bottom: 4px; float: ringth; margin-left: 40vh; " alt="">
                        </div>
                    </div>

                    <div class="calendar">
                        <div class="calendar-header">
                            <span class="month-picker" id="month-picker"> May </span>
                            <div class="year-picker" id="year-picker">
                                <span class="year-change" id="pre-year">
                                    <pre><</pre>
                                </span>
                                <span id="year">2020 </span>
                                <span class="year-change" id="next-year">
                                    <pre>></pre>
                                </span>
                            </div>
                        </div>

                        <div class="calendar-body">
                            <div class="calendar-week-days">
                                <div>D </div>
                                <div>S </div>
                                <div>T </div>
                                <div>Q </div>
                                <div>Q </div>
                                <div>S </div>
                                <div>S</div>
                            </div>
                            <div class="calendar-days">
                            </div>
                        </div>
                        <div class="calendar-footer">
                        </div>

                        <div class="month-list"></div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <script>
        document.querySelectorAll('.navigateButton').forEach(function (button) {
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

    <script src="js/calendario.js"></script>

    <script src="js/relogio.js"></script>

</body>

</html>