<?php
        //FINAL - quando digo que uma classe é final, estou dizendo que não posso herdar dessa classse
        class Filha{

            /*
            protected function funcaoTeste(){
                    echo 'chamando funcao teste';

            }
            */

            private function funcaoTeste(){
                echo 'chamando funcao teste';
            }

            public function mostrarOla(){
                $this->funcaoTeste();
                echo 'Olá mundo';
            }
        }


        //EXTENDS - permite herdar métodos e atributos de uma outra classe PAI
        class Pai extends Filha{

            public function mostrarOla(){
                parent::mostrarOla(); //Chama a função original
                echo 'nova funcao';

            }

            public function mostrarTchal(){
                 echo 'Tchal Mundo';
                
            }
        }

        $pai = new Pai;
        $pai->mostrarTchal();
        echo '<br>';
        //$pai->mostrarOla();
        //$pai->mostrarTchal();
        $pai->mostrarOla();

?>