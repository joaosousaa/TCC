<?php
include('verificarlogin.php');
include_once('dbcon.php');
$logado = $_SESSION['Usuario'];
$query = "SELECT COUNT(*) as total_rows FROM cadastrolivros";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$totalRows = $row['total_rows'];

$query = "SELECT COUNT(*) as total_rows FROM alunos";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$totalalunos = $row['total_rows'];

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/tabelas.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
    <img src="img/fundo-biblioteca.avif" class="imgFundo" alt="">
    <!--Cabeçario-->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h3 class="startup">UPBOOK</h3>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <h3 class="usuario"><img src="img/usuario.png" alt=""
                            style="width: 16px;height: 16px; margin-bottom:6px;"> Usuário: <?php
                            echo "$logado"
                                ?></h3>
                </div>
                <a href="logout.php"><button class="sair" id="sair">Sair</button></a>
            </div>
        </nav>
    </header>
    <!--Conteudo principal-->
    <main class="">
        <div class="row" style="margin:0;">
            <!--Navegação-->
            <div class="col-md-2 navegacao">
               

                <div class="divbotoes">
                    <img src="img/logob-removebg-preview (2).png" class="logo" alt="">

                    <?php include 'configurations/sidebar.php'; ?>
                    
                </div>
            </div>
            <div class="col-md-10">
                     <!--Conteudo principal-->
                <div id="principal" class="r">
                    
                    <?php 
                        $page = $_GET['page'];
                        echo '<script>'.$page.'</script>';
                        if ($page && $page == 'home'){
                            include 'pages/home.php';
                        }elseif ($page && $page == 'acervo'){
                            include 'pages/acervo.php';
                        };
                    ?>
                </div>
            </div>
        </div>
        
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        
    <script>
        $(document).on('submit', '#saveLivros', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_livros", true);

            $.ajax({
                type: "POST",
                url: "code.php",
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

        $(document).on('click', '.editLivrosBtn', function () {

            var livros_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "code.php?livros_id=" + livros_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {

                        $('#livros_id').val(res.data.id);
                        $('#titulo').val(res.data.titulo);
                        $('#autor').val(res.data.autor);
                        $('#editor').val(res.data.editor);
                        $('#ano_livro').val(res.data.ano_livro);
                        $('#quantidade_livro').val(res.data.quantidade_livro);
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
                url: "code.php",
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
                url: "code.php?livros_id=" + livros_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {

                        $('#view_titulo').text(res.data.titulo);
                        $('#view_autor').text(res.data.autor);
                        $('#view_editor').text(res.data.editor);
                        $('#view_ano_livro').text(res.data.ano_livro);
                        $('#view_quantidade_livro').text(res.data.quantidade_livro);
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
                    url: "code.php",
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