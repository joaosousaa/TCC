<div class="container">

    <h1 id="titulo"> Sistema Bibliotecário</h1>

    <div class="row conteudoPrincipal ">
        <div class="lista lista1"></div>
        <div class="col-md-2 caixas caixa1">
            <img src="img/livros.png " style="height: 40%; margin-top: 22px;" alt="">
            <h4>Livros Cadastrado</h4>
            <h5>TOTAL: <span style="color:#669697; font-size: 30px;">
                    <?php echo "$totalRows" ?>
                </span></h5>
        </div>

        <div class="lista lista2"></div>
        <div class="col-md-2 caixas caixa2">
            <img src="img/alarme.png" style="height: 40%; margin-top: 16px; margin-bottom: 4px;" alt="">
            <h4 class="imgAlarme">Livros Pendentes</h4>
            <h5 class="imgAlarme">TOTAL: <label for="" style=" color: red;font-size: 30px;">2</label>
            </h5>
        </div>

    </div>

    <div class="row conteudoPrincipal">
        <div class="lista lista3"></div>
        <div class="col-md-2 caixas caixa4">
            <img src="img/lupa-livro.png" style="height: 40%; margin-top: 20px;" alt="">
            <h4>Livros Emprestados</h4>
            <h5>TOTAL: <label for="" style="color: #BD552E; font-size: 30px;">14</label></h5>
        </div>

        <div class="lista lista4"></div>
        <div class="col-md-2 caixas caixa3">
            <img src="img/leitor2.png" style="height: 40%; margin-top: 20px;" alt="">
            <h4>Estudantes Cadastrados</h4>
            <h5>TOTAL: <span style="color:#5156A9; font-size: 30px;">
                    <?php echo "$totalalunos" ?>
                </span></h5>
        </div>
    </div>
</div>