<?php
    include '../conexao_banco.php';

   session_start();

    $sql = "SELECT id, email, senha FROM login_aep WHERE email ='".$_POST['email']."'";
    $result = mysqli_query($conn, $sql);
    
    $_SESSION['logado'] = true;

    if (mysqli_num_rows($result) > 0) {
        if ($_POST['senha'] == mysqli_fetch_assoc($result)['senha']) {
           $_SESSION['autenticado'] = 'SIM';
            header('location: ../index.php');

        } else {
            echo 'senha incorreta';
            $_SESSION['autenticado'] = 'NAO';
            header('location: login_incorreto.html?login=erro');

        }
        
      } else {
        echo "login invalido";
        $_SESSION['autenticado'] = 'NAO';
        header('location: login_incorreto.html?login=erro');
        
      }


      
      mysqli_close($conn);

?>