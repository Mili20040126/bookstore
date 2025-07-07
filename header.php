<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Magic World - Online Bookstore</title>
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="img/logo_4.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

        <!-- Navigation-->

        <?php
            error_reporting(0); //Desabilita reportagens de erros de execução
            session_start(); //Inicia sessão

            if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){ //Verifica se há sessão ativa
                $idUsuario    = $_SESSION['idUsuario'];
                $tipoUsuario  = $_SESSION['tipoUsuario'];
                $nomeUsuario  = $_SESSION['nomeUsuario'];
                $emailUsuario = $_SESSION['emailUsuario'];

                $nomeCompleto = explode(' ', $nomeUsuario); //Usa a função explode para segmentar a string onde hoverem espaços ' '
                $primeiroNome = $nomeCompleto[0]; //Armazena a primeira string antes do espaço (primeiro nome)

            }
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php" style="font-family: 'cinzel decorative', serif; color: #aa8c47;">Magic World</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Livros</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Todos os livros</a></li>
                                <li><a class="dropdown-item" href="#!">Livros em oferta</a></li>
                                <li><a class="dropdown-item" href="#!">Populares</a></li>
                                <li><a class="dropdown-item" href="#!">Mais Vendidos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Gêneros</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Romance</a></li>
                                <li><a class="dropdown-item" href="#!">Romantasia</a></li>
                                <li><a class="dropdown-item" href="#!">Romances de época</a></li>
                                <li><a class="dropdown-item" href="#!">Fantasia</a></li>
                                <li><a class="dropdown-item" href="#!">Ficção científica</a></li>
                                <li><a class="dropdown-item" href="#!">Suspence</a></li>
                                <li><a class="dropdown-item" href="#!">Graphic Novels</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php
                    //Verifica se o tipo do usuário é 'administrador'
                    if($tipoUsuario == 'administrador'){
                        echo "
                            <ul class='navbar-nav mb-15 mb-lg-0 ms-lg-4'>
                                <li class='nav-item'><a class='nav-link active' aria-current='page' href='formLivro.php'>Cadastrar Livro</a></li>
                            </ul>
                        ";
                    }
                    //Verifica se o tipo do usuário é 'cliente'
                    if($tipoUsuario == 'cliente'){
                        echo "
                            <ul class='navbar-nav mb-20 mb-lg-0 ms-lg-1'>
                                <li class='nav-item'>
                                    <a class='nav-link' href='visualizarPedidos.php'>Visualizar Pedidos</a>
                                </li>
                            </ul>
                        ";
                    }
                    if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){ //Verifica se há sessão ativa
                        echo "
                            <ul class='navbar-nav mb-2 mb-lg-0 ms-lg-4'>
                                <li class='nav-item'><a class='nav-link active' aria-current='page' href='logout.php'>Sair</a></li>
                                <li class='nav-item'><a class='nav-link active' style='color:lightblue'>Olá, <strong>$primeiroNome</strong>! <i class='bi bi-emoji-smile'></i></a></li>
                            </ul>
                        ";
                    }
                    else{
                        echo "
                            <ul class='navbar-nav mb-2 mb-lg-0 ms-lg-1'>
                                <li class='nav-item'>
                                    <a class='nav-link' href='formLogin.php?pagina=formLogin'>Login</a>
                                </li>
                            </ul>
                        ";
                    }
                ?>
                </div>
            </div>
        </nav>

        <!-- Espaço para compensar a navbar fixa -->
        <div style="height: 50px;"></div>

        <!-- Header-->
        <header class="py-2" style="background-color: #a5e8d3;">
            <div class="container px-4 px-lg-1 my-3">
                <div class="d-flex justify-content-center mb-4">
                    <img src="img/logo_2.png" alt="Logo" style="max-width: 400px; height: auto;">
                </div>
            </div>
        </header>