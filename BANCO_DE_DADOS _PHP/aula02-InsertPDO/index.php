<?php 
   //Setando região 
   date_default_timezone_set('America/Sao_Paulo');
   
   //instanciando banco de dados | CLASS PDO
    $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');


    //Pegar dados no formulário
    if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data_registro  = date('Y-m-d H:i:s');


    //Inserindo informações no BANCO DE DADOS via PDO
    //prepare = protege contar inserção de SQL INJECTION 
    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES(null,?,?,?)");

    $sql->execute(array($nome,$sobrenome,$data_registro));
    echo 'Cliente inserido com sucesso';
    }

?> 

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro no banco </title>
    </head>
    <body>

    <form method="post">
        <input type="text" name="nome" required>
        <input type="text" name="sobrenome" required>
        <input type="datetime-local" name="data_cadastro" >
        <input type="submit" name="acao" value="enviar">
    </form>
        
    </body>
    </html>