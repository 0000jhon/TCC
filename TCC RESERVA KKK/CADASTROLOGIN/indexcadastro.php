<?php

   if(isset($_POST['submit']))
   {
    // print_r('Nome:' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Senha:' . $_POST['senha']);
    // print_r('<br>');
    // print_r('Cpf:' . $_POST['cpf']);
    // print_r('<br>');
    // print_r('Cidade:' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado:' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Telefone:' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Email:' . $_POST['email']);
    // print_r('<br>');
    // print_r('Data_Nascimento:' . $_POST['data_nascimento']);
    // print_r('<br>');

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   

    $result = mysqli_query($conexao, "INSERT INTO usuario(NOME_USUARIO,EMAIL,SENHA) VALUES ('$nome','$email','$senha')");

   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, rgb(25,25,112), rgb(178,34,34));
}
.box{
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: linear-gradient(to right, rgb(25,25,112), rgb(178,34,34));
    padding: 15px;
    border-radius: 15px;
    width: 20%;
}
fieldset{
    border: 3px solid dodgerblue;
}
legend{
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color:#23232e;
    border-radius: 8px;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput{
    top: -20px;
    font-size: 12px;
    color: dodgerblue;
}
#data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
}
#submit{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#submit:hover{
    background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
}

p{
    align-items: center;
    color: #CBD0F7;
    cursor: pointer;
}
a{
    cursor: pointer;
    color: #5568FE;
    text-decoration: none;
    margin-left: 10px;
}
    </style>
</head>
<body>
<a href="http://localhost:8080/TCC%20RESERVA%20KKK/HOME/"> Voltar</a>
    <div class="box">
        <form action="indexcadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome de Usuario</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
</form>
    </div>
</body>
</html>