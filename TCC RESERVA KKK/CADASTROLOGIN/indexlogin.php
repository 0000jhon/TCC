
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
<style>
    body{
        background: linear-gradient(to right, rgb(25,25,112), rgb(178,34,34));
    font-family: Arial, Helvetica, sans-serif;
    overflow: hidden;
}

.area-login {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    justify-content: center;
    align-items: center;
}

.login{
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #181920;
    border-radius: 10px;
    width: 355px;
    height: 320px;
    padding: 35px;
}

.login form {
    display: flex;
    width: 100%;
    flex-direction: column;
}

.login input {
    margin-top: 10px;
    background-color: #252A34;
    padding-left: 10px;
    color: #CBD0F7;
    border: none;
    height: 45px;
    outline: none;
    border-radius: 8px;
}

.login img{
    width: 150px;
    height: auto;
}

input::placeholder{
    color:#CBD0F7;
    font-size: 14px;
}

form [type="submit"]{
   display: block;
   background-color: #5568FE;
   font-size: 20px;
   text-transform: uppercase;
   font-weight: bold;
   cursor: pointer;
}
    
p{
    color: #CBD0F7;
}

a{
    color: #5568FE;
    text-decoration: none;
    margin-left: 10px;
}
</style>
</head>
<body>
<a href="http://localhost:8080/TCC%20RESERVA%20KKK/HOME/"> Voltar</a> 
   <section class="area-login">
        <div class="login">
            <div>
                <img src="design2.png">
            </div>

            <form action="textlogin.php" method="POST">
                <input type="text" name="nome" placeholder="nome de usuario" autofocus required >
                <input type="password" name="senha" placeholder="sua senha" required >
                <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            </form>
        </div>
    </section>
</body>
</html>