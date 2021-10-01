<?php

    //CONECTANDO AO BANCO DE DADOS
    $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

      $select = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = (SELECT id FROM categorias WHERE nome = 'Terror')");

            $select->execute();

                echo '<pre>';
                    var_dump($select->fetchAll());
                echo '</pre>';
?>