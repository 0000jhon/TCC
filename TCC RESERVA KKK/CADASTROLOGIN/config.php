<?php

      $dbHost = 'localhost';
      $dbUsername = 'root';
      $dbPassword = '';
      $dbName = 'cadastrologin';


      $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

      //if($conexao->connect_errno)
     // {
     //     echo "erro";
     //}
   // else
     // {
     // echo "Conexão efetuada com sucesso graças a mim jhon alex";
     // }

?>