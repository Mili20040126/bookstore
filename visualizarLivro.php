<?php include "header.php"; ?>
<?php
    include("conexaoBD.php");

    if (isset($_GET['idLivro'])) {
        $idLivro = $_GET['idLivro'];

        $sql = "SELECT * FROM livros WHERE idLivro = $idLivro";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) == 1) {
            $livro = mysqli_fetch_assoc($res);
        } else {
            echo "<div class='container mt-5 alert alert-danger'>Livro não encontrado!</div>";
            include "footer.php";
            exit;
        }
    } else {
        header("Location: index.php");
        exit;
    }
?>

<div class="container mt-5 mb-5">
    <div class="row g-4">
        <!-- Imagem do livro à esquerda -->
        <div class="col-md-4 text-center">
            <img src="<?= $livro['fotoLivro'] ?>" alt="Capa do livro <?= $livro['tituloLivro'] ?>" class="img-fluid rounded shadow" style="max-height: 450px;">
        </div>

        <!-- Informações à direita -->
        <div class="col-md-8">
            <h2 class="mb-3"><?= $livro['tituloLivro'] ?></h2>
            <p><strong>Autor:</strong> <?= $livro['autorLivro'] ?></p>
            <p><strong>Editora:</strong> <?= $livro['editoraLivro'] ?> | <strong>Edição:</strong> <?= $livro['edicaoLivro'] ?></p>
            <p><strong>Ano de Publicação:</strong> <?= $livro['anoPublicacaoLivro'] ?></p>
            <p><strong>Número de Páginas:</strong> <?= $livro['numPaginasLivro'] ?></p>
            <p><strong>ISBN:</strong> <?= $livro['isbn'] ?></p>
            <p><strong>Categoria:</strong> <?= $livro['nomeCategoria'] ?></p>
            <p class="mt-4"><strong>Descrição:</strong><br><?= $livro['descricaoLivro'] ?></p>

            <h4 class="mt-4 text-success">Valor: R$ <?= number_format($livro['valorLivro'], 2, ',', '.') ?></h4>

            <div class="mt-4 d-flex flex-wrap gap-2">
                <a href="index.php" class="btn btn-outline-secondary">Voltar</a>

                <a href="formEditarLivro.php?idLivro=<?= $idLivro ?>" class="btn btn-outline-primary">
                    Editar
                </a>

                <a href="actionExcluirLivro.php?idLivro=<?= $idLivro ?>" 
                class="btn btn-danger"
                onclick="return confirm('Tem certeza que deseja excluir este livro?')">
                    Excluir
                </a>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
