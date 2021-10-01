<?php
/**
 * 
 * 
 */
     class Class1 
    {
        private $nome;
        private $idade;
        
        public function __construct($nome,$idade)
        {
           $this->nome = $nome; //Faz referência a variável do objeto. o THIS->NOME refere-se a variável, e o $nome referencia ao parâmetro passado
           $this->idade = $idade;
        }


        public function getNome()
        {
            return $this->nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }

    }
    

?>