<?php
    include('interface1.php');

    /**
     * Diferente da palavra extendes que usamos para herdar demais classes 
     * aqui usamos a palavra IMPLEMENTS.
    */
    class Teste implements interface1
    {
        public function printOnScreen($par)
        {
            echo $par;
        }
    }
    
    $teste = new Teste;
    $teste->printOnScreen('Olá Mundo');
?>