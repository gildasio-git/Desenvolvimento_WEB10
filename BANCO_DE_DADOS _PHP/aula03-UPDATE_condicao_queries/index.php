<?php 
    //QUERIE -> Comandos utilizados para executar uma ação no Banco de Dados.
    
    $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

    
    $id = 2;

    //Exemplo de UPDATE passando um parãmetro    
    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Leticia',sobrenome='Allen' WHERE id=$id");

    /**
     * Exemplo de UPDATE passando dois parâmetros
     * $sql = $pdo->prepare("UPDATE `clientes` SET nome='Eduardo',sobrenome='Silva' WHERE nome='gildasio' AND sobrenome='Bizerra'");
     */
     
    if($sql->execute()){
        echo 'Cliente atualizado';
    }

?>