<?php 

    /**
     * Declarando uma CONSTANTE em Orientação a Objetos.
     * lembrando que uma constante não pode ser alterada 
     */
    class minhaClasse
    {
            const VALOR=300;
            public function __construct(){
                echo self::VALOR;
            }
    }   
    

    // new minhaClasse;

    //Acessando de fora 
    echo minhaClasse::VALOR;
?>