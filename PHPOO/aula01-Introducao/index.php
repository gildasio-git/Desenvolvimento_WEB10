<?php
    class pessoa{
        //OBJETO PESSOA 
    
        //ATRIBUTOS DO OBJETO
        //PRIVATE - disponível apenas dentro da classe
        private $nome  = 'Gildasio';
        private $idade = '47';
        private $peso  =  '82kg';

        //MÉTODOS
        public function crescer(){
            $this->comer(); //Uso da palavra 'THIS' que indica este objeto, estou chamando a fuhção dentro do objeto
            echo 'estou crescendo';

        }


        private function comer(){
            echo 'estou comendo';

        }


    }

    //CHAMANDO  ATRIBUTOS E FUNÇÕES DA CLASSE PESSOA 
    
    //Instanciar - Necessário instanciar o objeto, criar o objeto para assim poder chamar seus atributos e funções
    $pessoa = new pessoa; // a parti de agora temos acesso a todos os atributos e funções da classe pessoa
    $pessoa2 = new pessoa;

    //CHAMANDO  A FUNÇÃO
    $pessoa->crescer();//Observe o sinal '->' usado para acessar os métodos


?>