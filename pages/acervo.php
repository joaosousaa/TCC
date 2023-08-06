<div class="modal fade" id="livrosAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar Livros</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <!--salvar estudante-->
            <form id="saveLivros">
                <div class="modal-body">

                    <div id="errorMessage" class="alert alert-warning d-none"></div>

                    <div class="mb-3">
                        <label for="">Titulo Livro</label>
                        <input type="text" name="titulo" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Autor</label>
                        <input type="text" name="autor" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Editor</label>
                        <input type="text" name="editor" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Ano do Livro</label>
                        <input type="number" name="ano_livro" placeholder="Ex: 0000" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Quantidades de Livro</label>
                        <input type="number" name="quantidade_livro" placeholder="Ex: 0000" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Observação</label>
                        <input type="text" name="observacao" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Data do Cadastro</label>
                        <input type="date" name="data_cadastro" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar Livro</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit livros Modal -->
<div class="modal fade" id="livrosEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Livro </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <form id="updateLivros">
                <div class="modal-body">

                    <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                    <input type="hidden" name="livros_id" id="livros_id">

                    <div class="mb-3">
                        <label for="">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Autor</label>
                        <input type="text" name="autor" id="autor" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Editor</label>
                        <input type="text" name="editor" id="editor" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Ano do Livro</label>
                        <input type="number" name="ano_livro" id="ano_livro" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Quantidade do Livro</label>
                        <input type="number" name="quantidade_livro" id="quantidade_livro" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Observacao</label>
                        <input type="text" name="observacao" id="observacao" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Data do Cadastro</label>
                        <input type="date" name="data_cadastro" id="data_cadastro" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Editar Livro </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View livros Modal -->
<div class="modal fade" id="livrosViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Visualizar Livro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="">Titulo Livro</label>
                    <p id="view_titulo" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Autor</label>
                    <p id="view_autor" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Editor</label>
                    <p id="view_editor" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Ano do Livro</label>
                    <p id="view_ano_livro" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Quantidade do Livro</label>
                    <p id="view_quantidade_livro" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Observacao</label>
                    <p id="view_observacao" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Data do Cadastro</label>
                    <p id="view_data_cadastro" class="form-control"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<h1 class="titulo">Acervo/Cadastro de Livros</h1>
<div class="row">
    <div class="col-md-12">
        <div class="card" style="whidth:100%; border-radius: 0;">
            <div class="card-header">
                <form action="">

                    <div class="box-search">
                        <input name="busca" class="form-control w-25" value="<?php if (isset($_GET['busca']))
                            echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa"
                            type="text">
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                        <div style="float: right; width: 100%; margin-right:1.5%">
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#livrosAddModal">
                                Adicionar Livros
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
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Editor</th>
                            <th>Ano do Livro</th>
                            <th>Quantidade do Livro</th>
                            <th>Observacao</th>
                            <th>Data do Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'dbcon.php';





                        if (!isset($_GET['busca'])) {

                            require 'dbcon.php';

                            $query = "SELECT * FROM cadastrolivros";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $livros) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $livros['id'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['titulo'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['autor'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['editor'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['ano_livro'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['quantidade_livro'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['observacao'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['data_cadastro'] ?>
                                        </td>
                                        <td>
                                            <button type="button" value="<?= $livros['id']; ?>"
                                                class="viewLivrosBtn btn btn-info btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="white" class="bi bi-arrows-angle-expand"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z" />
                                                </svg></button>

                                            <button type="button" value="<?= $livros['id']; ?>"
                                                class="editLivrosBtn btn btn-success btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="currentColor" class="bi bi-pencil"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                </svg></button>

                                            <button type="button" value="<?= $livros['id']; ?>"
                                                class="deleteLivrosBtn btn btn-danger btn-sm"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
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
                            $sql_code = "SELECT * FROM cadastrolivros WHERE id LIKE '%$pesquisa%' 
                                                OR titulo LIKE '%$pesquisa%' 
                                                OR autor LIKE '%$pesquisa%' OR editor LIKE '%$pesquisa%'";
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
                                            <?= $livros['titulo'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['autor'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['editor'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['ano_livro'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['quantidade_livro'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['observacao'] ?>
                                        </td>
                                        <td>
                                            <?= $livros['data_cadastro'] ?>
                                        </td>
                                        <td>
                                            <button type="button" value="<?= $livros['id']; ?>"
                                                class="viewLivrosBtn btn btn-info btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="white" class="bi bi-arrows-angle-expand"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z" />
                                                </svg></button>

                                            <button type="button" value="<?= $livros['id']; ?>"
                                                class="editLivrosBtn btn btn-success btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="currentColor" class="bi bi-pencil"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                </svg></button>

                                            <button type="button" value="<?= $livros['id']; ?>"
                                                class="deleteLivrosBtn btn btn-danger btn-sm"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
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