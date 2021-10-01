<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<!-- GET - quando passamos dados via URL
     POST - Quando passamos dados via Formulário -->

      <?php
            if(isset($_GET['acao'])){ //Verifica se o parâmetro ação foi ativado
                $nome  = @$_GET['nome']; //Recuperando o nome 
                $email = @$_GET['email']; //Recuperando o email 

                echo $nome;
                //echo '<br />';
                echo $email;
            }
      ?>
 
        <form action="">
            <input type="text" name="nome">
            <input type="text" name="email">
            <input type="submit" name="acao" value="Enviar" />
        </form>

</body>
</html>