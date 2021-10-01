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
      /*
            if(isset($_GET['acao'])){ //Verifica se o parâmetro ação foi ativado
                $nome  = @$_GET['nome']; //Recuperando o nome 
                $email = @$_GET['email']; //Recuperando o email 

                echo $nome;
                //echo '<br />';
                echo $email;
            }
            */


            /*
            if(isset($_POST['acao'])){ //Verifica se o parâmetro ação foi ativado
              echo $_POST['nome'];
            }
            */

            //Trabalhando com Arrays vindos de POSTS

            if(isset($_POST['acao'])){
                // echo @$_POST['valor'];
              
                //Recuperandos os valores do CHECKBOx abaixo com FOREACH
                foreach ($_POST['valor'] as $key => $value) {
                    # code...
                    echo $key;
                    echo '=>';

                    echo $value;
                    echo '<hr>';
                }
            }
      ?>
 
        <form  method="POST">
            <!--SELECT -->
            <select name="nome"><!-- Sempre tem que setar o nome do elemento no form -->
                 <option value="Gildasio">Gildasio</option>
                 <option value="João">João</option>
            </select>
          
            <!--CHECK BOX 
                Obs. setando os valores como um array
             -->
            <input type="checkbox" name="valor[]" value="10" >
            <input type="checkbox" name="valor[]" value="20" >
            <input type="checkbox" name="valor[]" value="40" >
            <input type="checkbox" name="valor[]" value="5"  >
            <input type="checkbox" name="valor[]" value="8"  >

            <input type="submit" value="Enviar" name="acao">
        </form>

</body>
</html>