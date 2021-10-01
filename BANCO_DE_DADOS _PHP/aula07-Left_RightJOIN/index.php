<?php

$pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//INNER JOIN - junta informações ambas tabelas e retorna apenas campos equivalentes
//LEFT JOIN - Junta informações ambas tabelas, porém mesmo não existindo campo equivalente estes são retornados
//LEFT (esquerda) traz informações da tabela a esquerda e mesmo campos não sendo correspondetes esses dados são repoertados 
//RIGTH (direita) mesmo caso porém vem da tabela a direita da clásula query, e traz campos que satisfação o critério.
$sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN  `cargo` ON `clientes`.`cargo` = `cargo`.`id`");

//Executa QUERY
        $sql->execute();

        //Selciona os dados da tabela
        $clientes = $sql->fetchAll();

        //ARRAY pega os dados e imprime na tela.
        foreach ($clientes as $key => $value) {
            # code...
            echo $value['nome'];
            echo ' | ';
            echo $value['nome_cargo'];
            echo '<hr/>';
}

?>