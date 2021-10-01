<?php 
    //Instanciando banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

    //BETWEEN - Intervalo entre valores 
    //IN - Intervalo entre valores

    //USANDO IN
    // $sql = $pdo->prepare("SELECT * FROM clientes WHERE id IN(5,6,7)");

    // Usando BETWEEN filtrando datas 
    $sql = $pdo->prepare("SELECT * FROM `clientes` WHERE `data_registro` BETWEEN '2021-09-28'AND '2021-09-30'");

    $sql->execute();

    $emails = $sql->fetchAll();

    echo '<pre>';
    print_r($emails);
    echo '</pre>';

?>