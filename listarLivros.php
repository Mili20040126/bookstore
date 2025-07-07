<!-- listarLivros.php -->
<?php include("header.php"); include("conexaoBD.php"); ?>

<div class="container mt-4">
    <h2 class="mb-4">Lista de Livros</h2>

    <a href="formLivro.php" class="btn btn-primary mb-3">+ Novo Livro</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT livros.*, categorias.nome_categoria 
                FROM livros 
                LEFT JOIN categorias ON livros.id_categoria = categorias.id_categoria";
        $resultado = mysqli_query($conexao, $sql);

        while ($livro = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <td>{$livro['id_livro']}</td>
                    <td>{$livro['titulo']}</td>
                    <td>{$livro['autor']}</td>
                    <td>{$livro['nome_categoria']}</td>
                    <td>
                        <a href='formEditarLivro.php?id={$livro['id_livro']}' class='btn btn-sm btn-warning'>Editar</a>
                        <a href='actionExcluirLivro.php?id={$livro['id_livro']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Tem certeza que deseja excluir?')\">Excluir</a>
                    </td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<?php include("footer.php"); ?>
