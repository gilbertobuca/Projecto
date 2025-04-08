<?php

include_once('config.php');

if(isset($_POST['submit']))
{
    //print_r('Nome: ' . $_POST['nome']);
    //print_r($_POST['<br>']);
    //print_r('Sobrenome: ' . $_POST['sobrenome']);
    //print_r($_POST['<br>']);
    //print_r('E-mail: ' . $_POST['email']);
    //print_r($_POST['<br>']);
    //print_r('Número de telefone: ' . $_POST['numero']);
    //print_r($_POST['<br>']);
    //print_r('Gênero: ' . $_POST['genero']);
    //print_r($_POST['<br>']);
    //print_r('Data de nascimento: ' . $_POST['data_nasc']);
    //print_r($_POST['<br>']);
    //print_r('Enndereço: ' . $_POST['endereco']);
    //print_r($_POST['<br>']);
    //print_r('Chave de acesso: ' . $_POST['password']);
    //print_r($_POST['<br>']);

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $numero =  $_POST['numero'];
    $genero =  $_POST['genero'];
    $data_nasc = $_POST['data_nasc'];
    $endereco = $_POST['endereco'];
    $password = $_POST['password'];
    
    $result = mysqli_query($conexao, "INSERT INTO alunos(nome,sobrenome,email,telefone,genero,data_nasc,endereço,senha) VALUES ('$nome','$sobrenome','$email','$numero','$genero','$data_nasc','$endereco','$password')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link rel="stylesheet" href="assets/css/formulario.css" />
</head>
<body>
    <div class="box">
        <form id="form" action="formulario.php, form.php" method="POST">

            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>

                <div class="inputbox">
                    <input  id="nome" type="text" name="nome" class="inputuser" required>
                    <label for="nome" class="labelinput"> Primeiro nome</label>
                </div>
                <br><br>
                
                <div class="inputbox">
                 <input  id="sobrenome" type="text" name="sobrenome" class="inputuser" required>
                 <label for="sobrenome" class="labelinput">Sobrenome</label>
                </div>
                <br><br>
                
                <div class="inputbox">
                    <input  id="Email" type="text" name="email" class="inputuser" required>
                    <label for="Email" class="labelinput">E-mail</label>
                </div>
                <br><br>
                
                <div class="inputbox">
                    <input  id="Numero" type="tel" name="numero" class="inputuser" required>
                    <label for="Numero" class="labelinput">Número de telefone</label>
                </div>
                <br><br>
                
                <div class="inputbox">
                    <input  id="Password" type="password" name="password" class="inputuser" required>
                    <label for="Password" class="labelinput">Chave de acesso</label>
                </div>

                <h4>Gênero: </h4>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                <input type="radio" name="genero" id="feminino" value="femenino" required>
                <label for="feminino">Feminino</label>
                <br><br><br>

                <div class="inputbox">
                    <label for="data_nasc"> Data de nascimento: </label>
                    <input  id="data_nasc" type="date" name="data_nasc" required>
                </div>
                <br><br>
                
                <div class="inputbox">
                    <input  id="endereco" type="text" name="endereco" class="inputuser" required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div>
                <br><br>

                
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>

    <button onclick="abrirArquivo()"  style="text-align: left; background-color: blue; color: white; padding:10px; margin: 10px; font-family: arial; border-radius: 10px;" >Avançar</button>

<script>
function abrirArquivo() {
    window.open('form.php', '_self'); // Abre em nova aba
}
</script>
    
</body>
</html>