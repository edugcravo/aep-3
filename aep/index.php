<?php
include 'conexao_banco.php';
    session_start();
    
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM' ){
    header('location: login/index.html?login=erro2');
    }
/*
    $sql2 = mysqli_query($conn,"SELECT * FROM login_aep"); // pega no banco de dados o id
 

    while($_POST=mysqli_fetch_assoc($sql2)){

    echo'<p>"'.$_POST['email'].'"</p>
    ';}
     */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header>
        <div id="cabecalho">
            <img src="imagens/logo.png" alt="" width="200px">

            <h1>Página inicial</h1>

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
                <a href="publicar.php" style="padding-left: 21px;">Publicar</a>
            </div>

        </div>

<!--------------------------------------------Coluna do meio------------------->
<?php
include 'conexao_banco.php';
    
    $sql = mysqli_query($conn,"SELECT * FROM postagem"); // pega no banco de dados o id

    $qtd_ids = mysqli_num_rows($sql); // retorna a quantidade registros encontrados na consulta acima
    
    $resultado = mysqli_query($conn, "SELECT * FROM curtida");
    $curtida = mysqli_num_rows($resultado);
    

    while($row=mysqli_fetch_assoc($sql)){

    echo '
        <div id="conteudo-central">

            <div class="alinha_ao_lado">
                <img src="'.$row['imagem'].'" alt="" width="50px">
                <a href="" class="espaco_nome"> '.$row['nome'].' </a>
                <button class="botao_doar"> <a href="doar.php" class="link_doar"> Doar </a> </button>
           </div>

           <img src="'.$row['imagem'].'" alt="" width="80%" > <br>

           <div class="espacamento_icone">

             <form action="enviar_curtir.php" method="post" class="espacamento_like">
                <button name="curtida">  <a href=""><p>'.$curtida.' </p><img src="imagens/botao_donate_publicacao.png" alt="" width="40px"> </button> 
                
             </form>

                <button>    <a href=""><img src="imagens/botao_comentario.png" alt="" width="40px"></a> </button>
                <button>    <a href=""><img src="imagens/botao_seguir.png" alt="" width="40px"></a> </button>
             
           </div>

           <div class="comentarios">
                <p> <span> '.$row['nome'].'</span>'.$row['legenda'].'</p>
                
                   
                <p> <span>Regina.s2</span> Aqui vai um comentario de uma pessoa aleatoria.</p>

           </div>
                
        </div>';
    }
// Mostrando a noticia do banco de dados

  
    
?>

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