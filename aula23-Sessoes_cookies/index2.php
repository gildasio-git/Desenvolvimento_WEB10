<?php
/*
    session_start();//Inicia SESSÃO
    
    //VERIFICANDO SE UMA SESSÃO EXISTE 
            IF(isset($_SESSION['nome'])){
            echo $_SESSION['nome']; //Imprime nome da sessão na tela 
            }

    */

    /*
// DESTRUINDO UMA SESSÃO
            session_start(); //INICIA SESSÃO
            unset($_SESSION['nome']); //LIMPA UMA SESSÃO ESPECÍFICA DA MEMÓRIA

*/

//DESTRUINDO TODAS A SESSÕES

session_start();
session_destroy();
