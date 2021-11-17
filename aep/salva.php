
<?php 
/*vendo se usuário esta autenticado */
session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM' ){
header('location: login/index.html?login=erro2');
}



// Enviando noticia para o banco de dados
include 'conexao_banco.php';

//gravando no banco de dados
    $sql = "INSERT INTO nome(id,pessoa,idade) VALUES (NULL,'".$_POST['nomee']."','".$_POST['idadee']."')";


    if ($result = mysqli_query($conn, $sql)) {
        
        $sql = "SELECT id FROM nome WHERE pessoa = '".$_POST['nomee']."'";
        $result2 = mysqli_query($conn, $sql);
          
          
        } else {
          echo "erro";
        }

?>