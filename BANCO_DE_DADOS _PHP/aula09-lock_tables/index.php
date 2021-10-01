<?php
    //LOCK TABLES - bloquear tabela ate que operação seja concluida 

    //iNSTANCIANDO O BANCO DE DADOS 
    $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

    //Bloqueando a tabela até que o script seja executado 
    $pdo->exec("LOCK TABLES `clientes` WRITE");
    
    //Especifica 10 segundos de bloqueio
    sleep(10);

?>