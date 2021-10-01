<?php 
        //HAVING
        //Diferença do HAVING e WHERE é basicamente que conseguimos usar o HAVING após o GROUP BY
        //Tudo que consiguimos fazer com HAVING conseguimos fazer com WHERE

        //CONECTANDO AO BANCO DE DADOS 
        //Uso do HAVING permite fazer união junto com GROUP BY
            $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

            $select = $pdo->prepare("SELECT * FROM clientes GROUP BY cargo HAVING pontos > 9");

            $select->execute();

                echo '<pre>';
                    print_r($select->fetchAll());
                echo '</pre>';

?>