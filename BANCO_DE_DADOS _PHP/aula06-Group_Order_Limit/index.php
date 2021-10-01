<?php
     $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');
     
     //Linha PDO que permite mostrar erros d
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Seleciona informações do BANCO via QUERY
    // $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome DESC LIMIT 3");

    //Seleciona informações da tablela usando parâmetros de AGRUPAMENTO(GROUP) e limite de registreos (LIMIT)
     $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome DESC LIMIT 1,2");

    //Executa QUERY
     $sql->execute();

    //Selciona os dados da tabela
     $clientes = $sql->fetchAll();

    //ARRAY pega os dados e imprime na tela.
     foreach ($clientes as $key => $value) {
         # code...
        echo $value['nome'];
        echo '<hr/>';
     }


?>