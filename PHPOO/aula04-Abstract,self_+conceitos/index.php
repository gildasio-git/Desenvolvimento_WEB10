<?php
        //classe apenas para ser HERDADA
        abstract class teste
        {
         
            public function func1()
            {
                echo 'chamando funcao 1';
            }

            abstract function func2();
        
        }

        class principal2{
            public static function outroMetodoEstatico()
            {
                echo 'meu outro método';
            }
        }

        class Principal extends teste
            {
                public function func2()//precisa ter esse método em todas as classe que for herdar o teste.
                {
                        //echo 'Estou declarando oficialmente um método abstrato';
                }

                public static function metodoestatico()
                {
                    //echo 'método estático';
                }

                public function funcao()
                {
                    //self::metodoestatico;
                    principal2::outroMetodoEstatico();
                    self::outroMetodoEstatico();
                }
            }

        $principal = new Principal();
        
        /*
        $principal->func1();//Chama funcao class ABASTRACT teste, coniderando a herança na classe principal
        echo '<br>';
        $principal->func2();
        */

        Principal::metodoestatico(); //uso dos : para chamar método estático
?>