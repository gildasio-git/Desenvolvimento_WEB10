<?php
    define('HOST','localhost');
    define('DB','moduloDB');
    define('USER','root');
    define('PASS','');
   
   
        try{//Tenta executar o bloco abaixo
    //        //Configura UTF-8 corrige erros de acentuação
            $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //       
    //        //Mostra erros na tela 
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         }catch(Exception $e){ //Catch (pegue a excessão e armazena na variável $e)
            echo 'erro ao conectar';
        }


?>