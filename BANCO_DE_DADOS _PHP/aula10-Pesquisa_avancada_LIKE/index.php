<?php 
    //Instanciando banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

    //OBS; o (` `) usa para passar nome de tabelas quando usa se caracteres especiais no nome da tabela 

    //CONSULTAS AVANÇADAS
    //LIKE '%g%' = Retorna qualquer nome que possua letra  G em qualquer parte do campo

    $sql = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE 'g%'");

    $sql->execute();

    $emails = $sql->fetchAll();

    echo '<pre>';
    print_r($emails);
    echo '</pre>';

?>