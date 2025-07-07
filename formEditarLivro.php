<?php
include "header.php";
include "conexaoBD.php";

// Verifica se o idLivro foi passado
if (!isset($_GET['idLivro']) || empty($_GET['idLivro'])) {
    echo "<div class='container mt-5'><div class='alert alert-danger text-center'>Livro não encontrado.</div></div>";
    include "footer.php";
    exit;
}

$idLivro = $_GET['idLivro'];

// Busca os dados do livro
$sql = "SELECT * FROM livros WHERE idLivro = $idLivro";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) !== 1) {
    echo "<div class='container mt-5'><div class='alert alert-danger text-center'>Livro não encontrado.</div></div>";
    include "footer.php";
    exit;
}

$livro = mysqli_fetch_assoc($res);
?>

<div class="container mt-5">

    <form action="actionEditarLivro.php" method="POST" enctype="multipart/form-data" class="row g-3">
        <input type="hidden" name="idLivro" value="<?php echo $livro['idLivro']; ?>">

        <div class="col-md-6">
            <label for="fotoLivro" class="form-label">Foto atual:</label><br>
            <img src="<?php echo $livro['fotoLivro']; ?>" alt="Capa atual" class="img-fluid mb-2" style="max-height: 250px;"><br>
            <input type="file" class="form-control" id="fotoLivro" name="fotoLivro">
            <small class="text-muted">Escolha uma nova imagem se quiser alterar a capa.</small>
        </div>

        <div class="col-md-6">
            <label for="tituloLivro" class="form-label">Título:</label>
            <input type="text" class="form-control" name="tituloLivro" id="tituloLivro" value="<?php echo $livro['tituloLivro']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="autorLivro" class="form-label">Autor:</label>
            <input type="text" class="form-control" name="autorLivro" id="autorLivro" value="<?php echo $livro['autorLivro']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="valorLivro" class="form-label">Valor (R$):</label>
            <input type="text" class="form-control" name="valorLivro" id="valorLivro" value="<?php echo $livro['valorLivro']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="editoraLivro" class="form-label">Editora:</label>
            <input type="text" class="form-control" name="editoraLivro" id="editoraLivro" value="<?php echo $livro['editoraLivro']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="edicaoLivro" class="form-label">Edição:</label>
            <input type="text" class="form-control" name="edicaoLivro" id="edicaoLivro" value="<?php echo $livro['edicaoLivro']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="anoPublicacaoLivro" class="form-label">Ano de Publicação:</label>
            <input type="text" class="form-control" name="anoPublicacaoLivro" id="anoPublicacaoLivro" value="<?php echo $livro['anoPublicacaoLivro']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="numPaginasLivro" class="form-label">Número de Páginas:</label>
            <input type="text" class="form-control" name="numPaginasLivro" id="numPaginasLivro" value="<?php echo $livro['numPaginasLivro']; ?>" required>
        </div>

        <div class="col-12">
            <label for="descricaoLivro" class="form-label">Descrição:</label>
            <textarea class="form-control" name="descricaoLivro" id="descricaoLivro" rows="4" required><?php echo $livro['descricaoLivro']; ?></textarea>
        </div>

        <div class="col-md-6">
            <label for="isbn" class="form-label">ISBN:</label>
            <input type="text" class="form-control" name="isbn" id="isbn" value="<?php echo $livro['isbn']; ?>" required>
        </div>

        <div class="col-12 text-center mb-5">
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="visualizarLivro.php?idLivro=<?php echo $idLivro; ?>" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

<?php include "footer.php"; ?>
