<?php

/**
 * Esta CLASSE é de exemplo
 */

 //PUBLIC -> funciona em qualquer lugar !
 //PRIVATE -> somente conseguimos acessar dentro da classe !
class Exemplo 
    {
        private $var1;
        public $var2;

        //public static $var3 = 'statico';

        /*
        public function metodo(){

        }

         static function funcao(){


        }

        private function metodo2(){


        }
        */

        public function setVar1($var1){
            $this->var1 = $var1; //THIS - faz referẽncia ao mesmo método
        }

        public function pegaVar1(){
            return $this->var1;
        }

    }


?>