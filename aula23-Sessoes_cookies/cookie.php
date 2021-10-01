<?php
session_start();

// Parameros, "NOME, VALOR, TEMPO DE EXPLIRAÇÃO, BARRA (PARA FICAR ACESSÍVEL A TODA A REAIZ DO SEU SITE )

/*
        setcookie('nome','Gildasio',time() + (60*60*24), '/');
        echo $_COOKIE['nome'];

*/

//DESTRUINDO UM COOKIE 
//Basta inserir valor to TIME negativo 
setcookie('nome','Gildasio',time() - (60*60*24), '/');

echo $_COOKIE['nome'];
?>