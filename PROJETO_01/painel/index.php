<?php 
    include('../config.php');

    if(Painel::logado()==false){ /**Chama a classe com o método estático logado ca classe PAINEL */
        include('login.php');

    }else{
        include('main.php'); 
    }

?>