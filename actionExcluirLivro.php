<?php
include("conexaoBD.php");


if (isset($_GET['idLivro'])) {
    $idLivro = intval($_GET['idLivro']);

    // Primeiro, opcionalmente apague a imagem associada
    $queryImagem = "SELECT fotoLivro FROM livros WHERE idLivro = $idLivro";
    $resImagem = mysqli_query($conn, $queryImagem);
    if ($resImagem && mysqli_num_rows($resImagem) > 0) {
        $dados = mysqli_fetch_assoc($resImagem);
        if (file_exists($dados['fotoLivro'])) {
            unlink($dados['fotoLivro']); // Apaga o arquivo
        }
    }

    // Depois, exclui o registro do banco
    $sql = "DELETE FROM livros WHERE idLivro = $idLivro";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Livro excluído com sucesso!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao excluir o livro.');
                window.history.back();
              </script>";
    }
} else {
    header("Location: index.php");
}
?>
