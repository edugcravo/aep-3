
<?php 

session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM' ){
header('location: login/index.html?login=erro2');
}

// Enviando noticia para o banco de dados
include 'conexao_banco.php';

$imagem = $_FILES["imagem"];
if($imagem != NULL) {
$nomeFinal = time().'.jpg';
(move_uploaded_file($imagem['tmp_name'], $nomeFinal));
} else {
  $nomeFinal = NULL;
}
//gravando no banco de dados
    $sql = "INSERT INTO postagem(id, nome, legenda, imagem) VALUES (NULL, '".$_POST['nome']."','".$_POST['legenda']."', '".$nomeFinal."')";


    if ($result = mysqli_query($conn, $sql)) {
        
      $sql = "SELECT id FROM noticias WHERE conteudo = '".$_POST['conteudo']."'";
      $result2 = mysqli_query($conn, $sql);
        
        
      } else {
        echo "erro";
      }


header("location:index.php");




?>