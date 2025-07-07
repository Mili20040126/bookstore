<?php include "header.php" ?>

<div class='container mt-3 mb-3'>

<?php

    //Verifica o método de requisição do servidor
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Bloco para declaração de variáveis
        $fotoLivro = $tituloLivro = $autorLivro = $nomeCategoria = $editoraLivro = $edicaoLivro = $anoPublicacaoLivro = $numPaginasLivro = $descricaoLivro = $isbn = $valorLivro = "";
        $erroPreenchimento = false;

        //Validação do campo tituloLivro
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["tituloLivro"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>TÍTULO</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $tituloLivro = testar_entrada($_POST["tituloLivro"]);
        }

        //Validação do campo autorLivro
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["autorLivro"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>AUTOR</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $autorLivro = testar_entrada($_POST["autorLivro"]);
        }

        //Validação do campo nomeCategoria
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["nomeCategoria"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>CATEGORIA</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $nomeCategoria = testar_entrada($_POST["nomeCategoria"]);
        }


        //Validação do campo editoraLivro
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["editoraLivro"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>EDITORA</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $editoraLivro = testar_entrada($_POST["editoraLivro"]);
        }

        //Validação do campo edicaoLivro
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["edicaoLivro"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>EDIÇÃO</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $edicaoLivro = testar_entrada($_POST["edicaoLivro"]);
        }

        //Validação do campo anoPublicacaoLivro
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["anoPublicacaoLivro"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>ANO PUBLICAÇÃO</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $anoPublicacaoLivro = testar_entrada($_POST["anoPublicacaoLivro"]);
        }

        //Validação do campo numPaginasLivro
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["numPaginasLivro"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>NÚMERO DE PÁGINAS</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $numPaginasLivro = testar_entrada($_POST["numPaginasLivro"]);
        }

        //Validação do campo descricaoLivro
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["descricaoLivro"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>DESCRIÇÃO</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $descricaoLivro = testar_entrada($_POST["descricaoLivro"]);
        }

        //Validação do campo isbn
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["isbn"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>ISBN</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $isbn = testar_entrada($_POST["isbn"]);
        }

        //Validação do campo valorLivro
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["valorLivro"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>VALOR</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $valorLivro = testar_entrada($_POST["valorLivro"]);
            
        }


        //Início da validação do campo FOTO
        $diretorio    = "img/"; //Define para qual diretório do sistema as imagens serão movidas
        $fotoLivro  = $diretorio . basename($_FILES["fotoLivro"]["name"]); //img/nomeDaFoto
        $erroUpload   = false; //Variável para verificar erros no upload
        $tipoDaImagem = strtolower(pathinfo($fotoLivro, PATHINFO_EXTENSION));//Converter para minúsculo e adquirir a extensão do arquivo
        
        //Verificar se tamanho do arquivo é maior do que zero
        if ($_FILES['fotoLivro']['size'] != 0){

            //Verificar se o tamanho do arquivo é maior do que 5MB (Em bytes)
            if($_FILES['fotoLivro']['size'] > 5000000){
                echo "<div class='alert alert-warning text-center'>
                    A <strong>FOTO</strong> não deve possuir mais do que 5MB!
                        </div>";
                $erroUpload = true;
            }
            
            //Verificar o tipo do arquivo (pela extensão)
            if($tipoDaImagem != "jpg" && $tipoDaImagem != "jpeg" && $tipoDaImagem != "png" && $tipoDaImagem != "webp"){
                echo "<div class='alert alert-warning text-center'>
                        A <strong>FOTO</strong> deve estar no formato JPG, JPEG, PNG ou WEBP!
                    </div>";
                $erroUpload = true;
            }

            //Verifica se houve algum erro no upload
            if($erroUpload){
                echo "<div class='alert alert-warning text-center'>
                        Erro ao tentar fazer o upload da <strong>FOTO</strong>!
                    </div>";
                $erroUpload = true;
            }
            else{
                //Usa a função move_uploaded_file para mover o arquivo para o diretório img
                if(!move_uploaded_file($_FILES['fotoLivro']['tmp_name'], $fotoLivro)){
                    echo "<div class='alert alert-warning text-center'>
                            Erro ao tentar mover a <strong>FOTO</strong> para o diretório $diretorio!
                        </div>";
                $erroUpload = true;
                }
            }

        } 

        //Se não houver erro de preenchimento ou erro de upload
        if(!$erroPreenchimento && !$erroUpload){

            //Criar uma QUERY responsável por realizar a inserção dos dados no BD
            $inserirLivro= "INSERT INTO livros (fotoLivro, tituloLivro, autorLivro, nomeCategoria, valorLivro, editoraLivro, edicaoLivro, anoPublicacaoLivro, numPaginasLivro, descricaoLivro, isbn, statusLivros)
                                VALUES ('$fotoLivro', '$tituloLivro', '$autorLivro', '$nomeCategoria', $valorLivro, '$editoraLivro', '$edicaoLivro', '$anoPublicacaoLivro', '$numPaginasLivro', '$descricaoLivro', '$isbn', 'disponivel')";

            //Inclui o arquivo de conexão com o BD
            include "conexaoBD.php";
            
            //Se a query for executada com sucesso, exibe mensagem e tabela
            if(mysqli_query($conn, $inserirLivro)){

                echo "<div class='alert alert-success text-center'>Livro cadastrado com sucesso!</div>";
                
                echo "<div class='container mt-3'>
                        <div class='mt-3 text-center'>
                            <img src='$fotoLivro' style='width:150px' title='Foto de $tituloLivro'>
                        </div>
                        <div class='table-responsive'>
                            <table class='table'>
                                <tr>
                                    <th>TÍTULO</th>
                                    <td>$tituloLivro</td>
                                </tr>
                                <tr>
                                    <th>DESCRIÇÃO LIVRO</th>
                                    <td>$descricaoLivro</td>
                                </tr>
                                <tr>
                                    <th>VALOR</th>
                                    <td>$valorLivro</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                
                ";
                mysqli_close($conn); //Encerra a conexão com o banco de dados
            }
            //Se não conseguir inserir dados do Livro na base de dados, emite alerta danger
            else{
                echo "<div class='alert alert-danger text-center'>
                            Erro ao tentar inserir dados do <strong>Livro</strong> na base de dados!
                        </div>";
            }
        }
    }
    else{
        //Redireciona para a página formLivro.php
        header("location:formLivro.php");
    }

    function testar_entrada($dado){
        $dado = trim($dado); //TRIM - Remove espaços desnecessários
        $dado = stripslashes($dado); //Remove barras invertidas
        $dado = htmlspecialchars($dado); //Converte caracteres especiais

        return($dado);
    }

?>

</div>

<?php include "footer.php" ?>