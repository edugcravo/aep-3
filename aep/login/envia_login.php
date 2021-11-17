<?php 
// Enviando noticia para o banco de dados
include '../conexao_banco.php';

//gravando no banco de dados
    $sql = "INSERT INTO login_aep(id, nome, email, senha) VALUES (NULL, '".$_POST['nome']."','".$_POST['email']."', '".$_POST['senha']."')";


    if ($result = mysqli_query($conn, $sql)) {
        
        $sql = "SELECT id FROM login_aep WHERE nome = '".$_POST['nome']."'";
        $result2 = mysqli_query($conn, $sql);
          
          
        } else {
          echo "erro";
        }
  
  
  header("location:conta_criada.html");
  




?>