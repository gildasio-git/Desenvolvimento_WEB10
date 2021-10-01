<?php 
        //CRIANDO TABELAS VIA PHP OU RECUPERAR TABELAS 

        //CONECTANDO AO BANCO DE DADOS
        $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');
/*
        //Recuperando tableas no banco 
        $tabelas = $pdo->query("SHOW TABLES");
        $tabelas = $tabelas->fetchAll();

        echo '<pre>';
                print_r($tabelas);
        echo '</pre>';

*/

        //CRIANDO UMA TABELA NO BANCO DE DADOS 

        $sql = 'CREATE TABLE cursos(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nome_curso VARCHAR(30) NOT NULL
           
        )';

        $pdo->exec($sql);

?>