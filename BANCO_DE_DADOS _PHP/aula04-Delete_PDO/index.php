<?php 
    //QUERIE -> Comandos utilizados para executar uma ação no Banco de Dados.
    
    $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

    
    $id = 4;
   
/**
 * //Exemplo de DELTE passando um parãmetro    ( lemgre se faça isso em todas as sessões do CRUD)
   
            $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=$id");

            if($sql->execute()){
                echo 'Cliente DELETADO';
            }
 * 
 * 
 */

    //Deleção usando proteção contra SQL INJECTION
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

    //Passando registro a ser EXCLUSO via ARRAY
    if($sql->execute(array($id))){
        echo 'Cliente DELETADO';
    }

?>