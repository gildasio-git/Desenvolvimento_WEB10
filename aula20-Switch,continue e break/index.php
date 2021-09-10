<?php

/*
//SWITCH - Modelo de estrutura condicional
    $nome = 'Gildasio';
    switch($nome){
        case 'Gildasio':
            echo 'Minha variavel é Gildasio';
            break;
            case 'João';
            echo 'minha variável é João';
            break;

    }
    */

    //BREAK - para o loop for, while, do e foreach e tambṕem para switch
    //CONTINUE - para loop, for, while, do e foreach
    for ($i=0; $i < 10 ; $i++) { 
        # code...
        if($i == 5 || $i ===9) 
            continue; //Pula o restante do código abaixo e vai para o próximo número
        echo $i;
        echo '<hr>';
        /*
        if($i==5)
        break;
        */


    }

?>