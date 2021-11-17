<?php
/* Vendo se usuario esta autenticado*/
session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM' ){
header('location: login/index.html?login=erro2');
}


include 'conexao_banco.php';


  $curtida = $_POST['curtida'];

  curtir($conn, $curtida);

  header("Location: index.php");


  function curtir($conn, $curtida) {

    $query = "INSERT INTO curtida(id, curtidas) VALUES (NULL, 1)";

    return mysqli_query($conn, $query);
  }

  ?>