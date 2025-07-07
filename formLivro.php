<?php include "header.php" ?>
<?php include "validarSessao.php" ?> <!-- Assegura que esta página poderá ser acessada apenas por um usuário administrador -->

<div class="container text-center mb-3 mt-3">
    
    <h2>Cadastrar Livro:</h2>
    <div class="d-flex justify-content-center mb-3">
        <div class="row">
            <div class="col-12">
                <form action="actionLivro.php" method="POST" class="was-validated" enctype="multipart/form-data">
                    <div class="form-floating mb-3 mt-3">
                        <input type="file" class="form-control" id="fotoLivro" name="Foto do Livro" required>
                        <label for="fotoLivro">Foto</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="tituloLivro" placeholder="Título" name="tituloLivro" required>
                        <label for="tituloLivro">Título:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="autorLivro" placeholder="Autor" name="autorLivro" required>
                        <label for="autorLivro">Autor:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nomeCategoria" placeholder="Categoria" name="nomeCategoria" required>
                        <label for="nomeCategoria">Categoria:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mt-0 mb-0">
                        <input type="text" class="form-control" id="valorLivro" placeholder="Valor do Livro" name="valorLivro" required>
                        <label for="valorLivro">Valor do Livro (R$):</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="editoraLivro" placeholder="Editora" name="editoraLivro" required>
                        <label for="editoraLivro">Editora:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="edicaoLivro" placeholder="Edição" name="edicaoLivro" required>
                        <label for="edicaoLivro">Edição:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="anoPublicacaoLivro" placeholder="Ano Publicação" name="anoPublicacaoLivro" required>
                        <label for="anoPublicacaoLivro">Ano de Publicação:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="numPaginasLivro" placeholder="Número de Páginas" name="numPaginasLivro" required>
                        <label for="anoPublicacaoLivro">Número de Páginas:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="descricaoLivro" placeholder="Informe uma breve descrição sobre o Livro" name="descricaoLivro" required></textarea>
                        <label for="descricaoLivro">Descrição do Livro:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="isbn" placeholder="ISBN" name="isbn" required>
                        <label for="isbn">ISBN:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    <br>

</div>

<?php include "footer.php" ?>