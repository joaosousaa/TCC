<?php
include('login/verificarlogin.php');
$logado = $_SESSION['Usuario'];
include_once('dbcon.php');
$query = "SELECT COUNT(*) as total_rows FROM entregues";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$totalentregue = $row['total_rows'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acervo Livros</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="css/atribuido.css">

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
                    <div class="legenda">Atríbuidos</div>
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
                    <button class="navigateButton hover-animated-button"
                        style=" background-color: white; color:#468CC9;" data-url="entregues.php"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                        </svg></button>
                    <div class="legenda">Entregues</div>
                </div>
                <img src="img/sandra.png" alt=""
                    style=" margin-top: 4vh; height: 50px; margin-left:34px; border-radius:10px;">
            </div>
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
                                <a href="livros.php" id="a1" class="animated-underline">ACERVO</a>
                                <a href="alunos.php" id="a2" class="animated-underline">ALUNOS</a>
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="whidth:100%; border-radius: 30px;">
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
                                            echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa"
                                            type="text" style="border-radius: 0px 10px 10px 0px;">

                                        <h1 class="tituloo">Livros Entregues: <span style="color: #00B35F;">
                                                <?php echo "$totalentregue" ?>
                                            </span></h1>

                                    </div>
                                </form>
                            </div>
                            <div class="card-body">

                                <table id="myTable" class="table table-bordered table-striped">

                                    <tbody>
                                        <?php
                                        require 'dbcon.php';
                                        if (!isset($_GET['busca'])) {

                                            require 'dbcon.php';


                                            $query = "SELECT * FROM entregues";
                                            $query_run = mysqli_query($con, $query);




                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $livros) {
                                                    //converter as datas
                                                    $dataEmprestimo = DateTime::createFromFormat('Y-m-d', $livros['data_emprestimo'])->format('d-m-Y');
                                                    $dataDevolucao = DateTime::createFromFormat('Y-m-d', $livros['data_devolucao'])->format('d-m-Y');
                                                    ?>

                                                    <tr>
                                                        <div class="row"
                                                            style="background-color: #ecf2f9; margin-bottom:10px; border-radius: 10px;  padding: 37px;">
                                                            <div class="col-md-11 ">
                                                                Livro
                                                                <strong style="color:#00b35f;">
                                                                    <?= $livros['livro'] ?>
                                                                </strong>
                                                                emprestado ao aluno(a)
                                                                <strong style="color:#00b35f;">
                                                                    <?= $livros['aluno'] ?>
                                                                </strong>
                                                                do curso
                                                                <?= $livros['curso'] ?>
                                                                , Ano/turma
                                                                <?= $livros['ano_turma'] ?>
                                                                , portador do email
                                                                <?= $livros['email'] ?>
                                                                com data de empréstimo em
                                                                <strong style="color:#00b35f;">
                                                                    <?= $dataEmprestimo ?>
                                                                </strong>
                                                                e devolução agendada para  <strong style="color:#00b35f;">
                                                                    <?= $dataDevolucao ?>
                                                                </strong>
                                                            </div>

                                                            <div class="col-md-1 ">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                                    fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16"
                                                                    style="color: #00B35F;">
                                                                    <path
                                                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <?php
                                        } else {
                                            $pesquisa = $con->real_escape_string($_GET['busca']);
                                            $sql_code = "SELECT * FROM entregues WHERE identregues LIKE '%$pesquisa%' 
                                                OR aluno LIKE '%$pesquisa%' 
                                                OR ano_turma LIKE '%$pesquisa%' OR livro LIKE '%$pesquisa%'";
                                            $sql_query = $con->query($sql_code) or die("ERRO ao consultar! " . $con->$error);

                                            if ($sql_query->num_rows == 0) {

                                                ?>
                                                <tr>
                                                    <td colspan="3">Nenhum resultado encontrado...</td>
                                                </tr>
                                                <?php
                                            } else {
                                                while ($livros = $sql_query->fetch_assoc()) {
                                                    //converter as datas
                                                    $dataEmprestimo = DateTime::createFromFormat('Y-m-d', $livros['data_emprestimo'])->format('d-m-Y');
                                                    $dataDevolucao = DateTime::createFromFormat('Y-m-d', $livros['data_devolucao'])->format('d-m-Y');
                                                    ?>
                                                    <tr>
                                                        <div class="row"
                                                            style="background-color: #ecf2f9; margin-bottom:10px; border-radius: 10px;  padding: 37px;">
                                                            <div class="col-md-11 ">
                                                                Livro
                                                                <strong style="color:#00b35f;">
                                                                    <?= $livros['livro'] ?>
                                                                </strong>
                                                                emprestado ao aluno(a)
                                                                <strong style="color:#00b35f;">
                                                                    <?= $livros['aluno'] ?>
                                                                </strong>
                                                                do curso
                                                                <?= $livros['curso'] ?>
                                                                , Ano/turma
                                                                <?= $livros['ano_turma'] ?>
                                                                , portador do email
                                                                <?= $livros['email'] ?>
                                                                com data de empréstimo em
                                                                <strong style="color:#00b35f;">
                                                                    <?= $dataEmprestimo ?>
                                                                </strong>
                                                                e devolução agendada para  <strong style="color:#00b35f;">
                                                                    <?= $dataDevolucao ?>
                                                                </strong>
                                                            </div>

                                                            <div class="col-md-1 ">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                                    fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16"
                                                                    style="color: #00B35F;">
                                                                    <path
                                                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
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
        </div>


    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>



        $(document).on('click', '.deleteLivrosBtn', function (e) {
            e.preventDefault();

            if (confirm('Tem Certeza de que Deseja Excluir esses Dados?')) {
                var livros_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "codelivros.php",
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