<?php
session_start();

   //print_r($_REQUEST);
  if(isset($_POST['submit']) && !empty($_POST['nome'])  && !empty($_POST['senha']))
  {
     // Acessa

     include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

     //print_r('Nome:' . $nome);
     //print_r('<br>');
     //print_r('Senha:' . $senha);

     $sql = "SELECT * FROM usuario WHERE NOME_USUARIO = '$nome' and SENHA = '$senha'";

     $result = $conexao->query($sql);

    // print_r($sql);
     //print_r($result);

     if(mysqli_num_rows($result) < 1)
     {
       header('location: http://localhost:8080/TCC%20RESERVA%20KKK/CADASTROLOGIN/indexlogin.php');
     }
     else
     {
       header('location:http://localhost:8080/TCC%20RESERVA%20KKK/TCC%20WEB/');
     }

  }
  else
  {
    // Não Acessa
    header('location: indexlogin.php');

  }
?>