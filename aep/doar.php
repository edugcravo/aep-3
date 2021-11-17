<?php
    session_start();
    
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM' ){
    header('location: login/index.html?login=erro2');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação</title>
    <link rel="stylesheet" href="estilo_doar.css">
</head>
<body>

    <header>
        <div id="cabecalho">
            <img src="imagens/logo.png" alt="" width="200px">

            <h1>Doação</h1>

            <input type="search" placeholder="Buscar">

        </div>
    </header>

    <main>
            
        <!--------------------------------------------Coluna da esquerda------------------->
        <div id="conteudo-esquerdo">

            <div class="botao_esquerdo">
                <img src="imagens/botao-home.png" alt="" width="50px" >
                <a href="index.php"> Paginá inicial</a>
            </div>
           
            <div class="botao_esquerdo">
                <img src="imagens/explorar.png" alt="" width="50px">
                <a href="suporte.html">Suporte</a>
            </div>

            <div class="botao_esquerdo">
                <img src="imagens/sino.png" alt="" width="50px">
                <a href="">Notificações</a>
            </div>

            <div class="botao_esquerdo">
                <img src="imagens/botao_coracao_doacao.png" alt="" width="50px">
                <a href="">Doações</a>
            </div>

            <div class="botao_esquerdo">
                <img src="imagens/botao_publicar.png" alt="" width="45px">
                <a href="publicar.php">Publicar</a>
            </div>

        </div>

<!--------------------------------------------Coluna do meio------------------->

        <div id="conteudo-central">

           <span style="font-size: 2em; margin-left:19%">Escolha um valor</span>
            <input type="number" placeholder="R$ 0">
            <button type="submit">Enviar</button>
        </div>

<!--------------------------------------------Coluna da direita------------------->

        <div id="conteudo-direito">

            
                <img src="imagens/instituicao_2.png" alt="" width="70px">
            
                <a href="" class="nome_user">_matheus.barboza</a>
                <p class="nome">Matheus barboza</p>
                <a href="" class="login_perfil">Perfil</a>
           
                <div class="sugestao">
                     <p>Sugestões para você</p>
                </div>

                <div class="sug_inst">
                    <img src="imagens/instituicao_1.png" alt="" width="50px">
                    <p>Instituição Amor</p>
                    <a href="" class="seguir">Seguir</a>
                </div>
        </div>
        
    </main>
</body>
</html>