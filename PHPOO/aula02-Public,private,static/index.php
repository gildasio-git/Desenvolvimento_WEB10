
<?php
    include('Exemplo.class.php'); //incluir arquivo PHP correspondente a classe criada

    //Instância de objetos
    $exemplo = new Exemplo();
    $exemplo->setVar1('Neide');//Passando valor GILDASIO para metodo setVar'
    echo $exemplo->pegaVar1();

    echo '<br/>';

    $exemplo2 = new Exemplo;
    $exemplo2->setVar1('João');
    echo $exemplo2->pegaVar1();

    //$exemplo->var1 = 'olá';
    //$exemplo->var2 = 'Gildasio';
    //echo $exemplo->var2;

    //echo '<br/>';

    /*
    $exemplo2 = new Exemplo();
    //$exemplo2->var2 = 'Giulene';
    echo $exemplo2->var2;
    */
    
    //echo Exemplo::$var3; //Chamando varívael statica

?>