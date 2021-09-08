<?php

/** EXEMPLO 1 INCLUINSO TAGs HTML */
    $variavel1 = 'Gildasio';
    $variável2 = 'Giulene';

    if($variavel1 == $variável2) { //** Executa o trecho HTML se as condições forem verdadeiras */
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        Verdade 
    </body>
    </html>

<?php 
    }else{ /** Segundo trecho HTML em caso de teste falsa a condição acima  */
?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
             falso
        </body>
        </html>

<?php 
    }
?>

<?php

//**EXEMPLO 2  */
echo  '<br>';
    /**Condições com operadores matemáticos */
    $var1 = 10+5;
    $var2 = '10+5';
    
    if($var1 == $var2){
        echo 'verdade';
    }else{
        echo 'falso';
    }

?>

<?php
    //**EXEMPLO 3 - CONDIÇÕES ENCADEADAS COM "ELSEIF | PODERÁ TER QUANTOS ELSE IFS*/
    $var3 = 5+2;
    $var4 = '5+6';

    if($var3 == $var4){
        echo 'Verdade';
        
    }else if($var3 != $var4){
            echo 'verdade';
    }

?>