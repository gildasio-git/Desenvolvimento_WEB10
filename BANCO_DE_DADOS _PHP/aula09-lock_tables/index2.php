<?php
        //iNSTANCIANDO O BANCO DE DADOS 
        $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

        $sql = $pdo->prepare("SELECT * FROM `clientes`");

        $sql->execute();

        $usuarios = $sql->fetchAll();

        foreach ($usuarios as $key => $value) {
            # code...
            echo $value['nome']; 
            echo '<br />';
        }



?>