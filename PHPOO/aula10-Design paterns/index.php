<?php 
/*
  
  //Conceito de SIMPLE FACTORY - sem uso do NEW
 

     //FACTORY DESIGN FACTORY
     class cachorro
     {
        public function __construct()
        {
            echo 'classe cachorro';
        }    
     }

     class gato
     {
         public function __construct()
         {
             echo 'classe gato';
         }
     }


    // Exemplo de uso do SIMPLE FACTORY - Resume tudo nesse método
    // Aplicando conceito
    class animal
    {
        public static function build($nomeClasse)
        {
            if(class_exists($nomeClasse)){
                return new $nomeClasse;
            }else{
                die('Ops! A classse não existe');
            }
           
        }
    }

    //Construindo os objetos
    animal::build('peixe');

 */


 //Método FACADE PATERN 


 //Adicionar/fechar carrrinho - Class carrinho
 //calcular frete - frete
 //fechar pedido
 //pedido 

    class carrinho
    {
    
        public function fecharCarrinho()
        {
            echo 'carrinho fechado';
        }
    }


    class frete
    {
        public function calcularfrete()
        {

        }
    }


    class pedido
    {
        public function fecharpedido()
        {

        }
    }


    //CHAMANDO AS CLASSES A PARTIR DA CLASS LOJA 
    //Em resumo usamos somente uma classe e dentro dessas instanciamos todas as demais 
    class loja{
            public function finalizarCompra()
            {
                //Aqui apenas a referência 
                $this->fecharCarrinho();
                //this->calcularfrete();
                //this->fecharpedido();
                /*
               //INSTANCIA CARRINHO
               $carrinho = new carrinho();//Estanciando fechar carrinho
               $carrinho->fecharCarrinho();//Chamando a função fechar carrinho

               //INSTANCIA FRETE
               $frete = new frete();
               $frete->calcularfrete();

               //INSTANCIA PEDIDO
               $pedido = new pedido();
               $pedido->fecharpedido();
               */
            }

            //INSTANCIANDO OS MÉTODOS
                public function fecharCarrinho()
                {
                    //Aqui apenas as instâncias das classes e médotos 
                    $carrinho = new carrinho();
                    $carrinho->fecharCarrinho();
                }
    }

    $loja = new loja();//Instanciando a CLASSE LOJA
    $loja->finalizarCompra(); //chama classe finalizar compra 

?>