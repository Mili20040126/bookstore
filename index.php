<?php include "header.php"; ?>

<?php
    include("conexaoBD.php");
    $listarLivros = "SELECT * FROM livros";
    $res = mysqli_query($conn, $listarLivros);
    $totalLivros = mysqli_num_rows($res);
?>

<!-- Seção dos livros -->
<section class='py-3'>
    <div class='container px-4 px-lg-5 mt-3'>
        <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4'>

        <?php
            while($registro = mysqli_fetch_assoc($res)){
                $idLivro        = $registro["idLivro"];
                $fotoLivro      = $registro["fotoLivro"];
                $tituloLivro    = $registro["tituloLivro"];
                $descricaoLivro = $registro["descricaoLivro"];
                $valorLivro     = $registro["valorLivro"];
                $statusLivros    = $registro["statusLivros"]; 

                echo "
                    <div class='col'>
                        <div class='card h-100 shadow-sm'>
                            <!-- Imagem do livro -->
                            <img class='card-img-top' src='$fotoLivro' alt='Capa do livro $tituloLivro' style='height: 280px; object-fit: contain;' />
                            
                            <div class='card-body d-flex flex-column'>
                                <h5 class='card-title text-center'>$tituloLivro</h5>
                                <p class='card-text text-center mb-3'><strong>Valor:</strong> R$ " . number_format($valorLivro, 2, ',', '.') . "</p>

                                <div class='mt-auto text-center'>
                                    <a href='visualizarLivro.php?idLivro=$idLivro' class='btn btn-outline-dark w-100'>
                                        Visualizar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
        ?>

        </div>
    </div>
</section>

<?php include "footer.php"; ?>
