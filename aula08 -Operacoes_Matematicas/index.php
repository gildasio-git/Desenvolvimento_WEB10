<?php
        $numero = 10+ 5;
        $numero2 = 10-4;

        echo $numero . "<br>";
        echo $numero2 . '<br/>';

        $resultado = $numero/$numero2;

        echo $resultado .'<br/>';

        /**Expressão */
        $expressao = 10+20*2; //Sinal de multiplicação sempre será executado antes.
        echo $expressao .'<br>';

        /**Expressão - exemplo 2 */
        $expressao2 = (10+20)*2; //Observe que priorizo a operação que vira primeito colocando as entre parenteses.
        echo $expressao2 .'<br>';

        /**Porcentagem  - Resto da divisão*/
        $resto = 4 % 2;
        echo $resto;

?>